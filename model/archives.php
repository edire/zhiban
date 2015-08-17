<?php
class archives extends spModel
{
  var $pk = "id"; // 每个留言唯一的标志，可以称为主键
  var $table = "archives"; // 数据表的名称
  
  function select($tid,$cid,$aid){
  	return $this->findAll(array('tid'=>$tid,'cid'=>$cid,'aid'=>$aid),'','uid');
  	 
  }
}
?>