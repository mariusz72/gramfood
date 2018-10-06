<?php

namespace Gramfood\ZapleczeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DefaultController extends Controller
{
	public function listaUzytkownikowAction()
    {
    	$em = $this->getDoctrine ()->getManager ();
    	
    	$entities = $em->getRepository('AppBundle:Gramfoodklembowuzyt')->findAll();
    	
    	return $this->render('GramfoodZapleczeBundle:Default:listaUzytkownikow.html.twig', array (
    			'entities' => $entities
    	) );
    	
    }
    
    public function backupAction(Request $request)
    {
        $tables = $request->request->get('form');
        if(isset($tables['name'])){
            $tables = "jest";
            if (!extension_loaded('zip')) {
                dl('zip.so');
            }
            $zip = new \ZipArchive();
            
           $em = $this->getDoctrine ()->getManager ();
            
            $tool = new \Doctrine\ORM\Tools\SchemaTool($em);
            // schema dla pojedynczejtabeli
            /*             $classes = array(
                          //  $em->getClassMetadata('AppBundle:Gramfoodklembowuzyt'),
                            $em->getClassMetadata('AppBundle:ExtGramfoodkompow')
                        ); 
            */
            // schema dla wszystkich tabel w bazie
            $entityManager = $this->get('doctrine')->getManager();
            $classes =  $entityManager->getMetadataFactory()->getAllMetadata();
            $tables =  $tool->getCreateSchemaSql($classes);
           //$tables = $em->getConnection()->getSchemaManager()->listTables();
           
           // lista tabel
           //$em = $this->getDoctrine()->getManager();
           $meta = $em->getMetadataFactory()->getAllMetadata();
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
               if ($st_counter == 15 || $st_counter == 0 )
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
                   
                   if ($st_counter == 14){
                       $content.= ';';
                   }else{
                       $content.= ',';
                   }
                   
               };

               $content .= "\n";
               
               if ($st_counter == 15 || $st_counter == 0 )
               {
                   $content_all .= $content_s .") VALUES \n". $content;
                   $st_counter = 0;
               }else{
                   $content_all .= $content;
               }
               
               $st_counter ++;
           }
           
           $filename  = "c:\\Users\PC\\Downloads\\AAA\\table_" . $tableName . ".sql";
           file_put_contents($filename, print_r( $content_all , true));
           }
           
           file_put_contents("c:\\Users\PC\\Downloads\\AAA\\SCHEMA_CREATE_ALL-TABLE.SQL", print_r( $tables , true));
           
        }
            
            

        
        
        return $this->render('GramfoodZapleczeBundle:Default:backup.html.twig', array (
            'tables' => $tables
        ) );
        
    }
    
    
}
