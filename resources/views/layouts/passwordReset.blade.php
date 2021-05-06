<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
    <link rel="stylesheet" type="text/css" href="pagesU.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div id="grad1">

    <ul>
        <div class="header">
            <img src='images/saturn1.png' alt="logo" />
      <div class="dropdown" style="float:right;">
          <button class="dropbtn">Michael Borsch</button>
          <div class="dropdown-content">
          <a href="/MyInfoA">My Info</a>
          <a href="/LogOut">Log out</a>

        </div>
      </div>
    </div>

    </ul>
</div>

<body>
  <h2>Password Reset</h2>


<form class ="pass" action="/action_page.php">
  <label for="newpwd">Enter New Password:</label>
  <input type="password" id="pwd" name="pwd"><br><br>
  <label for="renewpwd">Re-enter New Password:</label>
  <input type="password" id="pwd" name="pwd" minlength="8"><br><br>
  <input type="submit">
</form>

</body>
</div>
</html>
