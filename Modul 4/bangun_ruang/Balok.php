<?php
    class Balok {
        public $panjang;
        public $lebar;
        public $tinggi;

        public function getluas(){
            $luas = 0;
            $luas = 2*($this->panjang*$this->lebar+$this->panjang*$this->tinggi+$this->lebar*$this->tinggi);
            return $luas;
        }
        public function getVolume(){
            $volume = 0;
            $volume = $this->panjang*$this->lebar*$this->tinggi;
            return $volume;
        }

        //private (buat catatan)
        // public function setPanjang($length) {
        //     $this->panjang = $length;
        // }

        // public function setLebar($width) {
        //     $this->lebar = $width;
        // }
        // public function setTinggi($height) {
        //     $this->tinggi = $height;
        // }
    }
?>