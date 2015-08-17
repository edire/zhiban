<?php
class admin extends zhiban
{
	function index(){
		session_start();
		if($_SESSION['info']!='1'){
			$this->jump(spUrl('admin','login'));
			return;
		}
		$setting=spClass('setting');
		$this->sitename=$sitename=$setting->select('sitename');
		$this->notice=$notice=$setting->select('notice');
		$this->password=$number=$setting->select('password');
		$this->siteurl=$number=$setting->select('siteurl');
		$article=spClass('article');
		$pageid=$this->spArgs('p');
		$pagenum='10';
		if(empty($pageid)){
			$pageid='1';
		}
		if($pageid>'1'){
			$this->prevpage=$prevpage=spUrl('main','index').'&p='.($pageid-1);
		}
		$arccount=$article->findCount();
		$f=$arccount/$pagenum;
		if($pageid<ceil($f)){
			$this->nextpage=$nextpage=spUrl('main','index').'&p='.($pageid+1);
		}
		$page=$this->setpage($pageid, $pagenum);
		$art=$article->findAll('','id desc','',$page);
		$i=0;
		$i=0;
		foreach($art as $v){
			$art[$i]['time']=date("Y年m月d日 H时",$v['time']);
			if(time()<=$v['time']){
			$art[$i]['style']="color:red;";
			}
			$i++;
		}
		
		$this->artsql=$art;
		$this->display('admin.html');
	}
	function modarticle(){
		session_start();
		if($_SESSION['info']!='1'){
			$this->jump(spUrl('admin','login'));
			return;
		}
		$this->aid=$aid=$this->spArgs('p');
		$article=spClass('article');
		$this->title=$article->select($aid,'title');
		$this->number=$article->select($aid,'number');
		$this->display('modarticle.html');
	}
	function modifyarticle(){

		session_start();
		if($_SESSION['info']!='1'){
			$this->jump(spUrl('admin','login'));
			return;
		}
		$art=$this->spArgs();
		if($art['title']==''||$art['number']==''||$art['year']==''||$art['mon']==''||$art['day']==''||$art['hour']==''){
			$this->error('输入完整信息',spUrl('admin','index'));
			return ;
		}
		$time=$art['year'].'-'.$art['mon'].'-'.$art['day'].' '.$art['hour'].':00:00';
		$art['time']=strtotime($time);
		$article=spClass('article');
		$article->update(array('id'=>$art['aid']),$art);
		$this->success('成功！',spUrl('admin','index'));
	}
	function rearticle(){
		session_start();
		if($_SESSION['info']!='1'){
			$this->jump(spUrl('admin','login'));
			return;
		}
		$aid=$this->spArgs('p');
		$archives=spClass('archives');
		$archives->delete(array('aid'=>$aid));
		$this->success('刷新成功',spUrl('admin','index'));
	}
	function delarticle(){
		session_start();
		if($_SESSION['info']!='1'){
			$this->jump(spUrl('admin','login'));
			return;
		}
		$aid=$this->spArgs('p');
		$article=spClass('article');
		$article->delete(array('id'=>$aid));
		$archives=spClass('archives');
		$archives->delete(array('aid'=>$aid));
		$this->jump(spUrl('admin','index'));
	}
	function addarticle(){
		session_start();
		if($_SESSION['info']!='1'){
			$this->jump(spUrl('admin','login'));
			return;
		}
		$art=$this->spArgs();
		if($art['title']==''||$art['number']==''||$art['year']==''||$art['mon']==''||$art['day']==''||$art['hour']==''){
			$this->error('输入完整信息',spUrl('admin','index'));
			return ;
		}
		$artarr['title']=$art['title'];
		$artarr['number']=$art['number'];
		$time=$art['year'].'-'.$art['mon'].'-'.$art['day'].' '.$art['hour'].':00:00';
		$artarr['time']=strtotime($time);
		$article=spClass('article');
		$article->create($artarr);
		$this->jump(spUrl('admin','index'));
	}
	function login(){
		$this->display('admin_login.html');		
	}
	function loginin(){
		session_start();
		$setting=spClass('setting');
		$pwd=$this->spArgs('password');
		if($pwd==$setting->select('password')){
			$_SESSION['info']='1';
			$this->jump(spUrl('admin','index'));
		}else {
			$this->error('密码错误！',spUrl('admin','login'));
		}
				
	}
	function refresh(){
		session_start();
		if($_SESSION['info']!='1'){
			$this->jump(spUrl('admin','login'));
			return;
		}
		$setting=spClass('setting');
		$sitename=$this->spArgs('sitename');
		$notice=$this->spArgs('notice');
		$password=$this->spArgs('password');
		$siteurl=$this->spArgs('siteurl');
		$setting->refresh('sitename',$sitename);
		$setting->refresh('notice',$notice);
		$setting->refresh('password',$password);
		$setting->refresh('siteurl',$siteurl);
		$this->success('操作成功',spUrl('admin','index'));
		
	}
}