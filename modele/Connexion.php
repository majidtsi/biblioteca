<?php
class Connexion
{
    private $_host="localhost";
    private $_user="root";
    private $_pwd="1919";
    private $_dbname="biblio";
    private $_statement;

    public function __construct(){

    }
    public function getPDO(){
        $this->_statement=new PDO("mysql:host={$this->_host};dbname=".$this->_dbname,$this->_user,$this->_pwd,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        return $this->_statement;
    }
}
//SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
?>