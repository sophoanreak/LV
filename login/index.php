<?php
include "../Error/showError.php";
require_once "core/init.php";

//echo config::get('mysql/host');//127.0.0.1
//$user = db::getInstance()->get('users', array('username','=','Momo27'));
//query("SELECT * FROM users");

/*
if(!$user->count()){
	echo 'No user';
}else{
	foreach ($user->results() as $user){
			echo $user->username."<br>";
	}
	//	echo $user->first()->username."<br>";
}
*/

/*
$user = db::getInstance()->update("users", 3,array(

	"password" => "New password",
	"name" => "Dale Garrett"


 ));
*/

/*
if(session::exists('success')){
	echo session::flash('success');	
}*/

if(session::exists('home')){
	echo '<p>'. session::flash('home').'</p>';
}

//check logged in user data
	/*
	$user = new user();//current user
	echo $user->data()->username;
	*/

//check other user data
	/*
	$anotheruser = new user(2);//another user
	echo $anotheruser->data()->username;
	*/

$user = new user();//current user
if ($user->isLoggedIn()){

?>
	<p>Hello <a href="#"><?php echo escape($user->data()->username);?></a>!</p>
	<ul>
		<li><a href="logout.php">Log out</a></li>
	</ul>
<?php

}else{
	echo "<p>You need to <a href='login.php'>Log in</a> or <a href='register.php'>Register</a></p>";
}
