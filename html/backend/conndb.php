<?php
class MYSQ{
  public $db_host;
  public $db_user;
  public $db_pass;
  public $db_name;
  public $db_connection;

  function MYSQ(){
        $this->db_host = "localhost:3307";
        $this->db_user = "root";
        $this->db_pass = "root";
        $this->db_name = "pro";

  }

  
function connee(){
  $this->db_connection = mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
 
}
function j_insert($arr,$tblNAME){
  
  $str = "INSERT INTO ".$tblNAME."(".implode(",",array_keys($arr)).")";
  $str2 = " VALUES('".implode("','",$arr)."');";
  $sql = $str.$str2;
  $rs = mysqli_query($this->db_connection,$sql);
  return $rs;
}
function J_delete($sql){
  $rs = mysqli_query($this->db_connection,$sql);
  return $rs;
}
}
?>
 