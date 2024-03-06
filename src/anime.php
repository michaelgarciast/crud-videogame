<?php

    namespace universidad;

    class anime{
        private $config;
        private $cn = null;

        public function __construct(){
            $this->config = parse_ini_file(__DIR__.'/../config.ini');

            $this->cn = new \PDO ($this->config ['dns'], $this->config['usuario'], $this->config['clave'], array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }

        public function registrar ($_params){
            $sql = "INSERT INTO `anime`( `titulo`, `descripcion`, `foto`, `precio`, `categoria_id`, `fecha`) VALUES (:titulo, :descripcion,:foto,:precio,:categoria_id,:fecha)";

            $resultado = $this->cn->prepare($sql);

            $_array = array(
                ":titulo"=>$_params['titulo'],
                ":descripcion"=>$_params['descripcion'],
                ":foto"=>$_params['foto'],
                ":precio"=>$_params['precio'],
                ":categoria_id"=>$_params['categoria_id'],
                ":fecha"=>$_params['fecha']
            );

            if($resultado->execute($_array))
                return true;
            return false;
        }

        public function actualizar ($_params){
            $sql = "UPDATE `anime` SET `titulo`=:titulo,`descripcion`=:descripcion,`foto`=:foto,`precio`=:precio,`categoria_id`=:categoria_id,`fecha`=:fecha WHERE `id`=:id";

            $resultado = $this->cn->prepare($sql);

            $_array = array(
                ":titulo"=>$_params['titulo'],
                ":descripcion"=>$_params['descripcion'],
                ":foto"=>$_params['foto'],
                ":precio"=>$_params['precio'],
                ":categoria_id"=>$_params['categoria_id'],
                ":fecha"=>$_params['fecha'],
                ":id"=>$_params['id']
            );

            if($resultado->execute($_array))
                return true;
            return false;
        }

        public function eliminar ($id){
            $sql = "DELETE FROM  `anime` WHERE `id`=:id";

            $resultado = $this->cn->prepare($sql);

            $_array = array(
                ":id"=>$id['id'] //confirmar variable de $_params
            );

            if($resultado->execute($_array))
                return true;
            return false;
        }
        
        public function mostrar (){
            $sql = "SELECT anime.id, titulo, descripcion,foto,precio,fecha,estado FROM  anime INNER JOIN categoria ON anime.categoria_id = categoria.id ORDER BY anime.id DESC ";

            $resultado = $this->cn->prepare($sql);

            if($resultado->execute())
                return $resultado->fetchAll();
            return false;
        }

        public function mostrarporid($id) {
            $sql = "SELECE * FROM `anime` WHERE = `id`=:id";

            $resultado= $this->cn->prepare($sql);
            $_array = array(
                ":id"=> $id['id'] //confirmar variable de $_params
            );

            if($resultado->execute($_array))
            return $resultado->fetch();
        return false;
        }

    }