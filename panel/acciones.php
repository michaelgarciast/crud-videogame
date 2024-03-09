<?php
require '../vendor/autoload.php';

$anime = new universidad\anime;

if($_SERVER['REQUEST_METHOD'] ==='POST'){

    if ($_POST['accion']==='Registrar') {

        if (empty($_POST['titulo'])) 
            exit('Completar Titulo');
        
        if (empty ($_POST['descripcion'])) 
            exit('completar descripcion');
        
        if (empty ($_POST['categoria_id'])) 
            exit('selecciona una categoria');
        
        if (!is_numeric($_POST['categoria_id'])) 
            exit('seleccione una categoria valida');

            $_params= array(
                'titulo'=>$_POST['titulo'],
                'descripcion'=>$_POST['descripcion'],
                'foto'=> 'fojo.png',
                'precio'=>$_POST['precio'],
                'categoria_id'=>$_POST['categoria_id'],
                'fecha'=> date('Y-m-d')
            );
        
            $rpt = $anime->registrar($_params);
            var_dump($rpt);
        
    }

    
}