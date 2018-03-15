<?php
	require_once "../Error/showError.php";
	require_once 'core/init.php';

	if(input::exist()){
		if(token::check(input::get('token'))){
			//echo "I have been run";
			$validate = new validate();
			$validation = $validate->check($_POST, array(
				'username' => array(
					'required' => true,
					'min' => 2,
					'max' => 30,
					'unique' => 'users'
					),
				'password' => array(
					'required' => true,
					'min' => 6
					),
				'password_again' => array(
					'required' => true,
					'matches' => 'password'
					),
				'name' => array(
					'required' => true,
					'min' =>2,
					'max' => 50

					)
				));

			if($validation->passed()){
				$user = new user();

				$salt = hash::salt(32);
				
				try {

					$user->create(array(
						'username' => input::get('username'),
						'password' => hash::make(input::get('password'),$salt),
						'salt' => $salt,
						'name' => input::get('name'),
						'joined' => date('Y-m-d H:i:s'),
						'category' => 1
					 ));

					session::flash("home","You have been resgistered and can no log-in!");
					redirect::to('index.php');

				} catch(Exception $e){
					die($e->getMessage());
				}
			}else{
				foreach($validation->errors() as $error){
					echo $error.'<br>';
				}

			}
		}
	}

?>

<form action ="" method="post">
	<div class ="field">
		<label for = "username">Username</label>
		<input type = "text" name ="username" id = "username" value="<?php echo escape(input::get('username'));?>" autocomplete="off">
	</div>

	<div class = "field">
		<label for ="password">Choose a Password</label>
		<input type ="password" name ="password" id = "password">
	</div>	

	<div class = "field">
		<label for ="password">Enter your password again</label>
		<input type ="password" name ="password_again" id = "password_again">
	</div>

	<div class = "field">
		<label for ="name">Your Name</label>
		<input type ="text" name ="name" value="<?php echo escape(input::get('name'));?>" id = "name">
	</div>

	<input type = "hidden" name="token" value ="<?php echo token::generate();?>">
	<input type = "submit" value = "Register">

</form>