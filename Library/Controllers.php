<?php
    class Controllers{
        public function __construc() {
            this -> loadClassModels();
        }
        public function loadClassModels(){
            $model = get_class($this);
            echo $model;
        }
    }
?>