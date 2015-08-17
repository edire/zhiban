<?php
class main extends zhiban
{
	function index(){

		$uid=$_COOKIE['cookieid'];
		if($uid==''){
			$uid='0';
		}
		$this->uid=$uid;
		$this->username=$_COOKIE['cookieusername'];
		$setting=spClass('setting');
		$this->notice=$setting->select('notice');
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
		foreach($art as $v){
			$art[$i]['endtime']=date("Y年m月d日 H时",$v['time']);
			if(time()<=$v['time']){
			$art[$i]['style']="color:red;";
			}
			
			$i++;
		}
		$this->artsql=$art;
		$this->display('index.html');
	}
	function addconn(){
		$uid=$_COOKIE['cookieid'];
		if($uid!='4'){
			alert('无权限！');
		}
		$arg=$this->spArgs();
		$arg['time']=time();
		$conn=spClass('conn');
		$conn->create($arg);
		$this->success('成功');
	}
	function article(){
		$this->aid=$aid=$this->spArgs('p');
		$today=array('1','2','3','4','5','6','7');
		$class=array('0','1','2','3','4','5');
		for($i=0;$i<7;$i++){
			for($j=0;$j<6;$j++){
				$arc=array('tid'=>$today[$i],'cid'=>$class[$j],'aid'=>$aid);
				${n.$today[$i].$class[$j]}=$this->start($arc);
				$this->{n.$today[$i].$class[$j]}=${n.$today[$i].$class[$j]};
			}
		}
		$this->uid=$uid=$_COOKIE['cookieid'];
		if($uid==''){
			$uid='0';
		}
		$this->uid=$uid;
		$this->username=$_COOKIE['cookieusername'];
		$setting=spClass('setting');
		$this->notice=$setting->select('notice');
		$this->time=$time=date('Y-m-d 20:00',strtotime('+1 week last sunday'));
		$siteurl=$setting->select('siteurl');
		$this->url=$url=$siteurl.spUrl('main','article')."&p=".$aid;
		$this->erweima=$this->erweima($url);
		$article=spClass('article');
		$this->title=$article->select($aid,'title');
		$endtime=$article->select($aid,'time');
		$this->endtime=date('Y年m月d日H时',$endtime);
		if($endtime>=time()){
			$this->status='正在进行';
		}else {
			$this->status='已经结束';
		}
		$conn=spClass('conn');
		$connarr=$conn->findAll(array('aid'=>$aid),'id desc');
		$i=0;
		foreach($connarr as $v){
			$connarr[$i]['time']=date("m月d日 H:i:s",$v['time']);
			$i++;
		}
		$this->connsql=$connarr;
		$this->display('article.html');
	}
	
	function signin(){
		$this->display('signin.html');
	}	
	function sign(){
		$user=spClass('user');
		$userinfo=$this->spArgs();
		if($userinfo['username']=='' || $userinfo['password']==''){
			$this->error('数据不能为空！',spUrl('main','index'));			
		}
		if($user->findCount(array('username'=>$userinfo['username']))>0){
			$this->error('用户名重复',spUrl('main','signin'));			
		}
		$user->create($userinfo);
			$this->success('注册成功!',spUrl('main','index'));
	}
	function login(){
		$user=spClass('user');
		$userinfo=$this->spArgs();
		$userdata=$user->findAll(array('username'=>$userinfo['username']));
		if($userinfo['username']=='' || $userinfo['password']==''){
			$this->error('数据不能为空！',spUrl('main','index'));
		}
		if($user->findCount(array('username'=>$userinfo['username']))==0){
			$this->error('用户名错误！',spUrl('main','index'));
		}
		if($userinfo['password']==$userdata[0]['password']){
			setcookie("cookieusername", $userdata[0]['username'], time()+6592000);
			setcookie("cookieid", $userdata[0]['id'], time()+6592000);
			$this->success('登陆成功!',spUrl('main','index'));
		}else{
			
			$this->error('密码错误！',spUrl('main','index'));
			
		}
	}
	function loginout(){
		setcookie("cookieusername", "", time()-3600);
		setcookie("cookieid", "", time()-3600);
		$this->success('退出成功！',spUrl('main','index'));
	}
	function guestbook(){
		$this->display('guestbook.html');
	}
	function printf(){
		$this->aid=$aid=$this->spArgs('p');
		$today=array('1','2','3','4','5');
		$class=array('0','1','2','3','4','5');
		for($i=0;$i<5;$i++){
			for($j=0;$j<6;$j++){
				$arc=array('tid'=>$today[$i],'cid'=>$class[$j],'aid'=>$aid);
				${n.$today[$i].$class[$j]}=$this->start($arc);
				$this->{n.$today[$i].$class[$j]}=${n.$today[$i].$class[$j]};
			
			}
		}
		$uid=$_COOKIE['cookieid'];
		if($uid==''){
			$uid='0';
		}
		$this->uid=$uid;
		$this->username=$_COOKIE['cookieusername'];
		$setting=spClass('setting');
		$this->notice=$setting->select('notice');
		$this->time=date('Y-m-d H:i',time());
		$article=spClass('article');
		$this->title=$article->select($aid,'title');
		$this->display('printf.html');
	}
	function ceshi(){
		$article=spClass('article');
		$article->select('1','title');
	}
}


