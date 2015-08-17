<?php
class zhiban extends spController
{
	function __construct(){
		// 必须加入启动父类构造函数的操作
		parent::__construct();
		$setting=spClass('setting');
		$this->site_name=$setting->select('sitename');
		$this->tmpurl='tpl';
		// 开始全局操作
	}
	function start($arc){
		$archives=spClass('archives');
		$user=spClass('user');
		$sql=$archives->findAll(array('tid'=>$arc[tid],'cid'=>$arc[cid],'aid'=>$arc[aid]));
		$i=0;
		foreach ($sql as $v){
			$name[$i]=$user->selectname($v['uid']);
			$namep=$namep."<p>".$name[$i]."</p>";
			$i++;
		}
		return $namep;
	}
	function erweima($chl,$widhtHeight ='150',$EC_level='L',$margin='2')
	{
		return '<img src="http://chart.apis.google.com/chart?chs='.$widhtHeight.'x'.$widhtHeight.'&cht=qr&chld='.$EC_level.'|'.$margin.'&chl='.urlencode($chl).'" alt="QR code" widhtHeight="'.$size.'" widhtHeight="'.$size.'"/>';
	}
	function setpage($page,$pagenum){
		if($page=="all"){
			$set_page=null;
		}else if($page=='1'||$page==''||$page=='0'){
			$start='0';
			$set_page= $start . ',' . $pagenum;
		}else if($page>'1'){
			$start=($page-1)*$pagenum;
			$set_page= $start . ',' . $pagenum;
		}else {
			return '0';
		}
		return $set_page;
	}
}
