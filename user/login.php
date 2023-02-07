<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/login.css">

  <title>Login</title>
</head>
<a href="index.php"><img height="100" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/66126a5b-893e-47a5-90dc-9ea7adfad3ac/dcue2oa-3cf30349-5043-4c93-b994-bd94c22f0798.png/v1/fill/w_600,h_484,strp/_share_png__diamond_logo_png__loveshot__exo_by_suzykimjaexi_dcue2oa-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NDg0IiwicGF0aCI6IlwvZlwvNjYxMjZhNWItODkzZS00N2E1LTkwZGMtOWVhN2FkZmFkM2FjXC9kY3VlMm9hLTNjZjMwMzQ5LTUwNDMtNGM5My1iOTk0LWJkOTRjMjJmMDc5OC5wbmciLCJ3aWR0aCI6Ijw9NjAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.yK_5vbEhdq2NFCyata4cbpmfk630N43rh7Sl4aVlAZA" alt=""></a>
<body>
  <div class="wrapper">
    <div class="title-text">
      <div class="title login">
        Login 
      </div>
      <div class="title signup">
        SignUp
      </div>
    </div>
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Signup</label>
        <div class="slider-tab"></div>
      </div>
      <div class="form-inner">
        <form action="#" class="login" method="post">
          <div class="field">
            <input type="email" placeholder="Email Address" name="email" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Password" name="pass" required>
          </div>
          <div class="pass-link">
            <a href="#">Forgot password?</a>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">
            Not a member? <a href="">Signup now</a>
          </div>
        </form>
        <form action="#" class="signup" method="post">
          <div class="field">
            <input type="text" placeholder="Full Name" name="name" required >
          </div>
          <div class="field">
            <input type="email" placeholder="Email Address" name="email" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Password" name="pass" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Confirm password" name="cpass" required>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Signup">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (()=>{
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (()=>{
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
});
signupLink.onclick = (()=>{
  signupBtn.click();
  return false;
});
  </script>
</body>
</html>