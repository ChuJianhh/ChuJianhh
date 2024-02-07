<?PHP
$data = '';
$user = 'user';	
$pass = 'pass';
 if (!empty($_REQUEST) ){
	if ( !empty($_REQUEST[$user]) &&	
!empty($_REQUEST[$pass])) {
	if ($_REQUEST[$user] == '2K勒布朗'	
&& $_REQUEST[$pass]=='2K勒布朗666'){
	$data = '1|'.md5	
	($_REQUEST[$user].	
$_REQUEST[$pass]).'|User
$_REQUEST[$user]. 登录成功'
    }else{}
	$data = '0|'.md5(date('Y-m-d	
h:i:s' ).rand(1，9999)).'|账号或密码错误！';
	}	
	}else{
	
