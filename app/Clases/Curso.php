<?php
    namespace App\Clases;
    class Curso{
        private $id;
        private $siglas;
        private $nombre;
        private $siglasCiclo;

        function __construct($id, $siglas, $nombre, $siglasCiclo){
            $this->id = $id;
            $this->siglas = $siglas;
            $this->nombre = $nombre;
            $this->siglasCiclo = $siglasCiclo;
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

        public function getSiglasCiclo(){
            return $this->siglasCiclo;
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

        public function setSiglasCiclo($siglasCiclo){
            $this->siglasCiclo = $siglasCiclo;

            return $this->siglasCiclo;
        }
    }
?>
