<?php
    namespace App\Clases;
    class Cicle{
        private $id;
        private $siglas;
        private $nombre;

        function __construct($id, $siglas, $nombre){
            $this->id = $id;
            $this->siglas = $siglas;
            $this->nombre = $nombre;
        }


        public function getId(){
            return $this->id;
        }

        public function getSiglas(){
            return $this->siglas;
        }

        public function getNombre(){
            return $this->nombre;
        }


        public function setId($id){
            $this->id = $id;

            return $this->id;
        }

        public function setSiglas($siglas){
            $this->siglas = $siglas;

            return $this->siglas;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
            return $this->nombre;
        }



    }
?>
