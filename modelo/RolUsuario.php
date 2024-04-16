<?php
    class RolUsuario{
        var $fkEmail;
        var $fkIdRol;

        function __construct($fkEmail, $fkIdRol){
            $this->fkEmail = $fkEmail;
            $this->fkIdRol = $fkIdRol;
        }

        function setFkEmail($fkEmail){
            $this->fkEmail = $fkEmail;
        }

        function getFkEmail(){
            return $this->fkEmail;
        }

        function setfkIdRol($fkIdRol){
            $this->fkIdRol = $fkIdRol;
        }

        function getFkIdRol(){
            return $this->fkIdRol;
        }
    }
?>