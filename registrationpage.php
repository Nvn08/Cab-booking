
<!DOCTYPE html>
<html >
<head>
      <link rel="stylesheet" href="registrationcss.css">
</head>

<body>
  <div id="login-box">
  <div class="left">
    <form method="POST" action="condb.php">
    <h1>Sign up</h1>
    
    <input type="email" name="email2" placeholder="E-mail" /required>
    <input type="password" name="password" placeholder="Password" required/>
    <input type="password" name="password2" placeholder="Retype password" required/>
    
    <input type="submit" name="signup_submit" value="Sign Up" />
  </form>
  </div>
  
  <div class="right">
    <form method="POST" action="con_login.php">
    <h1>Sign In</h1>

    <input type="email" name="email1" placeholder="E-mail" required/>
    <input type="password" name="password3" placeholder="Password" rerquired/>
    
    <input type="submit" name="login_submit" value="Log In" />
  </form>
  </div>
  <div class="or">OR</div>
</div>
  
  
</body>
</html>

