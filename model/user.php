<?php
class user extends spModel
{
  var $pk = "id"; // 每个留言唯一的标志，可以称为主键
  var $table = "user"; // 数据表的名称
  function selectname($uid){
  	$sql=$this->findAll(array('id'=>$uid),'','username');
  	return $sql[0]['username'];
  	}
}
?>