<!DOCTYPE html>
  <html>
    <head>
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="Login.css">
        <style>
            @php
                echo(file_get_contents(public_path('css/Login.css')))
            @endphp
        </style>
  </head>

  <body>

    <h2>Login</h2><br>
    <div class="login">
    <form id="login" method="get" action="login.php">
        <label><b>User Name
        </b>
        </label>
        <input type="text" name="Uname" id="Uname" placeholder="Username">
        <br><br>
        <label><b>Password
        </b>
        </label>
        <input type="Password" name="Pass" id="Pass" placeholder="Password">
        <br><br>
        <input type="button" name="log" id="log" value="Log In Here">
        <br><br>
        <input type="checkbox" id="check">
        <span>Remember me</span>
        <br><br>
        <a href="#">Forgot Password</a>
    </form>
</div>
</body>
</html>




