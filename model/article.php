<?php
class article extends spModel
{
  var $pk = "id"; // 每个留言唯一的标志，可以称为主键
  var $table = "article"; // 数据表的名称
  
  function select($id,$name){
  	$sql=$this->findAll(array('id'=>$id),'',$name);
  	return $sql[0][$name];
  }
}
?>