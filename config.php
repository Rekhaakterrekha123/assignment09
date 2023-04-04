<?php
class Contact {
private $host="localhost";
private $user="root";
private $pass="";
private $db="blog";
public $mysqli;
public function __construct(){
return $this->mysqli=new mysqli($this->host, $this->user,$this->pass,$this->db;
}
public function contact_us($data){
$name=$data['name'];
$email=$data['email'];
$subject=$data['subject'];
$message=$data['message'];
$q="insert into contact set name='$name',email='$email', Subject='$subject',Message='$message';
return $this->mysqli->query($q);
}
}