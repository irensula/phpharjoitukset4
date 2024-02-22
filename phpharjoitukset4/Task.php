<?php
        class Task {
            protected $id;
            protected $kuvaus;
            protected $aloituspäivä;

        public function __construct($id, $kuvaus, $aloituspäivä) {
            $this->id = $id;
            $this->kuvaus = $kuvaus;
            $this->aloituspäivä = $aloituspäivä;
        }
        public function getId() {
            return $this->id;
        }
        public function setId($id) {
            $this->id = $id;
        }
        public function getKuvaus() {
            return $this->kuvaus;
        }
        public function setKuvaus($kuvaus) {
            $this->kuvaus = $kuvaus;
        }
        public function getAloituspaiva() {
            return $this->kuvaus;
        }
        public function setAloituspaiva($aloituspaiva) {
            $this->aloituspaiva = $aloituspaiva;
        }
    }