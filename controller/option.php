<?php
class option extends zhiban
{
	function __construct(){
		parent::__construct();
	}
	function add(){
		$archives=spClass('archives');
		$user=spClass('user');
		$arg=$this->spArgs();
		$arc=array();
		$arc[uid]=$arg[uid];
		$arc[cid]=$arg[cid];
		$arc[tid]=$arg[tid];
		$arc[aid]=$arg[aid];
		$article=spClass('article');
		$endtime=$article->select($arc["aid"],'time');
		if($endtime<time()){
			echo "-1";
			return ;
		}
		if($archives->findCount(array('uid'=>$arc['uid'],'tid'=>$arc[tid],'cid'=>$arc[cid],'aid'=>$arc[aid]))>0){
			$archives->delete(array('uid'=>$arc['uid'],'tid'=>$arc[tid],'cid'=>$arc[cid],'aid'=>$arc[aid]));
		}else{
			$setting=spClass('setting');
			$number=$article->select($arc[aid],'number');
		if($archives->findCount(array('tid'=>$arc[tid],'cid'=>$arc[cid],'aid'=>$arc[aid]))>=$number){
				echo '0';
				return ;
			}
			$archives->create($arc);			
		}
		$sql=$archives->findAll(array('tid'=>$arc[tid],'cid'=>$arc[cid],'aid'=>$arc[aid]));
			
		$i=0;
		foreach ($sql as $v){
			$name[$i]=$user->selectname($v['uid']);
			$namep=$namep."<p>".$name[$i]."</p>";
			$i++;
		}
		print_r($namep);
	}


	
}