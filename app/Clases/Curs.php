<?php
    namespace App\Clases;
    class Curs{
        private $id;
        private $sigles;
        private $nom;
        private $cicles_id;
        private $actiu;

        function __construct($id, $sigles, $nom, $cicles_id, $actiu){
            $this->id = $id;
            $this->sigles = $sigles;
            $this->nom = $nom;
            $this->cicles_id = $cicles_id;
            $this->actiu = $actiu;
        }


        public function getId(){
            return $this->id;
        }

        public function getSigles(){
            return $this->sigles;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getCicles_id(){
            return $this->cicles_id;
        }

        public function getActiu(){
            return $this->actiu;
        }


        public function setId($id){
            $this->id = $id;

            return $this->id;
        }

        public function setSigles($sigles){
            $this->sigles = $sigles;

            return $this->sigles;
        }

        public function setNom($nom){
            $this->nom = $nom;
            return $this->nom;
        }

        public function setActiu($actiu){
            $this->actiu = $actiu;
            return $this->actiu;
        }

        public function setCicles_id($cicles_id){
            $this->cicles_id = $cicles_id;

            return $this->cicles_id;
        }
    }
?>
