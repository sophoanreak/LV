<?php
require_once "../Error/showError.php";
require_once'core/init.php';

if(input::exist()){
	if(token::check(input::get('token'))){
		$validate = new validate();
		$validation = $validate->check($_POST, array(
			'username' => array('required' => true),
			'password' => array('required' => true)
		 ));
		if ($validation->passed()){
			//log user in
			$user = new user();

			$remember = (input::get('remember') === 'on') ? true : false;
			$login = $user->login(input::get('username'), input::get('password'), $remember);

			if($login){
				//echo "success";
				redirect::to('index.php');
			}else{
				echo "Log-in false";
			}
		}else{
			foreach($validation->errors() as $error){
				echo $error,'<br>';
			}
		}
		
	}
}

?>

<form action="" method = "post">
	<div class="field">
		<label for = "username"> Username </label>
		<input type = "text" name = "username" id ="username" autocomplete="off">
	</div>

	<div class = "field">
		<label for = "password">Password</label>
		<input type ="password" name = "password" id = "password" autocomplete="off">
	</div>

	<div class="field">
		<label for="remember">
			<input type ="checkbox" name = "remember" id="remember"> Remember Me
		</label>
	</div>

	<input type ="hidden" name = "token" value = "<?php echo token::generate(); ?>">
	<input type = "submit" value = "Log In">
</form>