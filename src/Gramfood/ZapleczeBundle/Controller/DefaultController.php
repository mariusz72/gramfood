<?php

namespace Gramfood\ZapleczeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOException;

class DefaultController extends Controller
{
	public function listaUzytkownikowAction()
    {
    	$em = $this->getDoctrine ()->getManager ();
    	
    	$entities = $em->getRepository('AppBundle:ExtGramfoodUser')->findAll();
    //	file_put_contents("/tmp/AAA_tmp2.txt", print_r($entities, true));
    	return $this->render('GramfoodZapleczeBundle:Default:listaUzytkownikow.html.twig', array (
    			'entities' => $entities
    	) );
    	
    }
    
    public function backupAction(Request $request)
    {
        $tables = $request->request->get('form');
        if(isset($tables['name'])){
            $tables = "jest";


         #       echo 'Start';
         #       ob_flush();
         #       flush();
         #       sleep(3);
         #      echo 'Stop';
         #      ob_flush();
         #     flush();

            
            
            $zip = new \ZipArchive();
            $fileSystem = new Filesystem();
            
            try {
                $tmpFile = sys_get_temp_dir().'/'.random_int(0, 1000);
                $fileSystem->mkdir($tmpFile);
            } catch (IOException $exception) {
                echo "An error occurred while creating your directory at ".$exception->getPath();
            }
            #file_put_contents("c:\\Users\PC\\Downloads\\AAA_tmp.txt", $tmpFile);
            
            $zipFilename = $tmpFile.'/SqlBackub_gramfood_'.date("Y-m-d_Hi").'.zip';
            $zip->open($zipFilename, \ZipArchive::CREATE);
         #   $zip->addGlob("C:/Users/PC/Downloads/AAA/*.*");
         #   $zip->addFromString('test.txt', 'file content goes here');
         #   $zip->close();
            
           $em = $this->getDoctrine ()->getManager ();
            
            $tool = new \Doctrine\ORM\Tools\SchemaTool($em);
            // schema dla pojedynczejtabeli
            /*             $classes = array(
                          //  $em->getClassMetadata('AppBundle:Gramfoodklembowuzyt'),
                            $em->getClassMetadata('AppBundle:ExtGramfoodkompow')
                        ); 
            */
            // schema dla wszystkich tabel w bazie
            $entityManager =  $em;
            $classes =  $entityManager->getMetadataFactory()->getAllMetadata();
            $tables =  $tool->getCreateSchemaSql($classes);
           //$tables = $em->getConnection()->getSchemaManager()->listTables();
           
           // lista tabel
           //$em = $this->getDoctrine()->getManager();
            $meta = $classes;
           foreach ($meta as $m) {
               // $entities[] = $m->getTableName(); // tablica tabel
               $tableName = $m->getTableName();
           // zrzut tabeli do pliku sql
           $result = $em->getConnection()->fetchAll('SELECT * FROM '. $tableName);
           $content_all = '';
           $st_counter = 0;

           foreach($result as  $key => $value) {
               $_v = 0;
               $content = '(';
               $content_s = '';
               if ($st_counter == 100 || $st_counter == 0 )
               {
                   $content_s = "INSERT INTO ".$tableName." (";
               }
               
               foreach($value as  $key2 => $pole) {
                   $_v ++;
                   $pole = str_replace("\n","\\n", addslashes($pole) );
                   
                   $content_s .= '`'.$key2.'`' ;
                   if ($_v<(count($value)))
                   {
                       $content_s.= ',';
                   } 
                   
                   if (isset($pole))
                   {
                       $content .= '"'.$pole.'"' ;
                   }
                   else
                   {
                       $content .= '""';
                   }
                   if ($_v<(count($value)))
                   {
                       $content.= ',';
                   } 
               }
               $content .= ")";
               
               if (count($result)-1>$key)
               {
                   
                   if ($st_counter == 99){
                       $content.= ';';
                   }else{
                       $content.= ',';
                   }
                   
               };

               $content .= "\n";
               
               if ($st_counter == 100 || $st_counter == 0 )
               {
                   $content_all .= $content_s .") VALUES \n". $content;
                   $st_counter = 0;
               }else{
                   $content_all .= $content;
               }
               
               $st_counter ++;
               $value ='';
           }
           
           $zip->addFromString("table_" . $tableName . ".sql", $content_all);
          # file_put_contents($filename, print_r( $content_all , true));
           }
           
           $zip->addFromString('SCHEMA_CREATE_ALL-TABLE.SQL', implode("\n", $tables));
           
           #file_put_contents("c:\\Users\PC\\Downloads\\AAA_tmp.txt", sys_get_temp_dir());
           #file_put_contents("c:\\Users\PC\\Downloads\\AAA\\SCHEMA_CREATE_ALL-TABLE.SQL", print_r( $tables , true));
           
       
       $zip->close();     
       
        $response = new Response(file_get_contents($zipFilename));
        $response->headers->set('Content-Type', 'application/zip');
        $response->headers->set('Content-Disposition', 'attachment;filename="' . basename($zipFilename) . '"');
        $response->headers->set('Content-length', filesize($zipFilename));
       
        try {
            $fileSystem->remove($tmpFile);
        } catch (IOException $exception) {
            echo "An error occurred while Delete your directory at ".$exception->getPath();
        }
               
        return $response;
        }         
        
        return $this->render('GramfoodZapleczeBundle:Default:backup.html.twig', array (
            'tables' => 'OK2'
        ) );
        
    }
    
    
}
