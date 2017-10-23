
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/login_head.php'; ?>

<body id="page-top" class="index">

<?php include 'includes/login_navigation.php'; ?> 

 <br></br><br></br><br>
<body>
  <div class="cotn_principal">
<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  <p>Login to existing account</p> 
  <button class="btn_login" onclick="cambiar_login()" style="background-color:#fed136">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
  <p>Create new account</p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()" style="background-color:#fed136">SIGN UP</button>
</div>
  </div>
       </div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="img/login-register.jpg" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="img/login-register.jpg" alt="" />
       </div>
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>LOGIN</h2>
 <input type="text" id="username1" placeholder="Username" />
<input type="password" id="password1" placeholder="Password" />
<button class="btn_login" onclick="login();" style="background-color:#fed136">LOGIN</button>
  </div>
  
   <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>SIGN UP</h2>
<input type="text" name="email" id="email" placeholder="Email" />
<input type="text" name="username" id="username" placeholder="Username" />
<input type="password" name="password" id="password" placeholder="Password" />
<input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" />
<button type="sign-up" class="btn_sign_up" onclick="register();" style="background-color:#fed136">SIGN UP</button>

  </div>

    </div>
    
  </div>
 </div>
</div>
  
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

	<script type="text/javascript" src="js/script.js"></script>
    <script src="js/index.js"></script>
	
	<script>
		
		
		function login(){
		var username = $('#username1').val();
		var password = $('#password1').val();
		
		
		var url = 'http://localhost/login/webservices/login.php?username='+username+'&password='+password;
		$.post(url,
		function(data, status){
		
			
			var status = data[0].status;
			
			if(status == 1)
			{
				alert("Login Succesful");
				window.location.href = 'http://localhost/login/html/index.html';
			}
			
			
		});
		
		}
		
		
		
		function register(){
		var email = $('#email').val();
		var username = $('#username').val();
		var password = $('#password').val();
		
		
		$.post("http://localhost/login/webservices/register.php",
		{
			password: password,
			email: email,
			username: username
		},
		function(data, status){
			
			alert("User Succesfully ceated!");
			window.location.href = 'http://localhost/login/html/index.html';
		});
		
		
		}
		
	</script>
</body>
</html> 

<br></br><br></br><br><br></br><br></br><br><br></br><br></br><br><br></br><br></br><br><br></br><br></br><br>

<?php include 'includes/login_contact.php'; ?>

<?php include 'includes/login_footer.php'; ?>    
	
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
