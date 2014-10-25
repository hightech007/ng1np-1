<?php
if (isset($_POST['submit'])) {

	if(empty($_POST['profile']) || empty($_POST['password']) || empty($_POST['email']) ) {

		$errors[] = 'All fields are required.';

	} else {
		
        
        	if ($base->profile_exists($_POST['profile']) === true) {
			$errors[] = 'That profile already exists.';
        	}
        	if(!ctype_alnum($_POST['profile'])){
	            	$errors[] = 'Please enter a profile with only alphabets and numbers.';	
        	}
        	if (strlen($_POST['password']) < 7){
            		$errors[] = 'Your password must be long atleast 7 characters.';
        		} else if (strlen($_POST['password']) > 18){
            			$errors[] = 'Your password cannot be more than 18 characters long.';
		} 
		if (strlen($_POST['skills']) === 0){
          	  	$errors[] = 'Skills field can not be empty.';
			} else if (strlen($_POST['skills']) > 140){
            			$errors[] = 'Your skills field cannot be more than 140 characters long.';
 		} 
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
          	  	$errors[] = 'Please enter a valid email address';
        		} else if ($base->email_exists($_POST['email']) === true) {
            			$errors[] = 'That email already exists.';
        	}
		

	}

	if(empty($errors) === true){
		
		$profile = htmlentities($_POST['profile']);
		$password = $_POST['password'];
		$email = htmlentities($_POST['email']);
		$skills = htmlentities($_POST['skills']);
		$base->register($profile, $password, $email, $skills);
		header('Location: index.php?success');
		exit();
	}
}



if (isset($_GET['success']) && empty($_GET['success'])) {
		echo '<span class="help-block" style="color: lightblue;">
		Thank you for registering. Please check your email.
		</span>';
}

if(empty($errors) === false){
		echo '<span class="help-block" style="color: orangered;">' . implode('</p><p>', $errors) . '</span>';	
}

?>

		<form method="post" action="" role="form" class="form-horizontal">

		<div class="form-group">
			<label class="col-sm-3 control-label"></label>
			<div class="col-sm-7">
				<h1>Sign Up</h1>
			</div>
		</div>	

		<div class="form-group">
			<label class="col-sm-3 control-label">Profile</label>
			<div class="col-sm-7">
				<input type="text" name="profile" class="form-control" placeholder="Profile Name"  autofocus/>
			</div>
		</div>

		
		<div class="form-group">
			<label class="col-sm-3 control-label">Password</label>
			<div class="col-sm-7">
				<input type="password" name="password" class="form-control" placeholder="Password"/>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label">Email</label>
			<div class="col-sm-7 controls">
				<input type="text" name="email" class="form-control"  placeholder="Email" />	
			<span >
			Profile's email (please provide a <b>real email address</b>, 
			you'll get a verification mail with an activation link)</span>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label">Skills</label>
			<div class="col-sm-7">
				<textarea type="text" name="skills" class="form-control"  placeholder="Skills" /></textarea>	
			</div>
		</div>

		<br>
		<div class="form-group">
			<label class="col-sm-3 control-label"></label>
			<div class="col-sm-7">
			<input type="submit" name="submit"  class="btn btn-primary"/>
			</div>
		</div>
		</form>
