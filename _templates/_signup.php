<?php

$signup = false;
//print_r($_POST);
if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email_address'];
    $phone = $_POST['phone'];
    $error = User::signup($user, $pass, $email, $phone);
    $signup = true;
	// echo "Hello";
}
?>
<?php
    if($signup) {
        if(!$error) {
            ?>
<main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<h1>signup Succees</h1>
		<p class="lead">Now you can login from <a href="/phottogram/login.php">here</a>.</p>
	</div>
</main>
<?php
        } else {
            ?>
<main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<h1>signup Failed</h1>
		<p class="lead">something went wrong, <?=$error?>
		</p>
	</div>
</main>
<?php
        }
    } else {
        ?>

<main class="form-signup">

	<form method="post" action="signup.php">
		<img class="mb-4" src="http://eecs.qmul.ac.uk/media/eecs/ioc/IoC_Logo_OnWhite_AW_large.jpg" alt="" height="80">
		<h1 class="h3 mb-3 fw-normal">signup here</h1>

		<div class="form-floating">
			<input name="username" type="text" class="form-control" id="floatingInputUsername"
				placeholder="name@example.com">
			<label for="floatingInputUsername">Username</label>
		</div>
		<div class="form-floating">
			<input name="phone" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
			<label for="floatingInput">Phone</label>
		</div>
		<div class="form-floating">
			<input name="email_address" type="email" class="form-control" id="floatingInput"
				placeholder="name@example.com">
			<label for="floatingInput">Email address</label>
		</div>
		<div class="form-floating">
			<input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">Password</label>
		</div>

		<button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
	</form>
</main>

<?php } ?>