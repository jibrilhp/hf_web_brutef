<?php

if ($_POST) {
if ($_POST['username'] === 'act_6_22_04_8_s_ug' && $_POST['password'] === 'ccug_gunadarma') {
	readfile("index.tpt.html");
	exit();
}
	
if (check_user($_POST['username']) == true) {
$yah = "oke";
} else {
$yah = "ndak";	
sleep(1);
}
}

function check_user ($usern) {
$periksa = "act_6_22_04_8_s_ug";
$ll = strlen($usern);
if (substr($periksa,0,$ll) === $usern) {
	return true;
}
}
?>
<!DOCTYPE html>
<head>
<style>
@import "bourbon";

body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
}
</style>
</head>
<body>
<!-- teringat passwordnya adalah ccug_gunadarma namun lupa usernamenya.. -->
  <div class="wrapper">
    <form class="form-signin" method="post" action="">       
      <h2 class="form-signin-heading">Login akun~</h2>
      <input type="text" class="form-control" name="username" placeholder="Username..." required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
	  <?php if (isset($yah)) : echo "<p>Username / password anda salah!</p>";  endif;?>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>  
<!-- information section
<?php echo $yah; ?>
-->	  
    </form>
  </div>
  
  </body>
  </html>
