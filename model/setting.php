<?php
class setting extends spModel
{
  var $pk = "name"; // 每个留言唯一的标志，可以称为主键
  var $table = "setting"; // 数据表的名称
  var $name;
  function select($name){
  	$sql=$this->findAll(array('name'=>$name));
  	$value=$sql[0]['value'];
  	return $value;
  }
  function refresh($name,$value){
  	$sql=$this->update(array('name'=>$name),array('value'=>$value));
  	return $sql;
  }
}
?>