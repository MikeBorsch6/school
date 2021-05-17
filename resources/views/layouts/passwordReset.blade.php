<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
    <link rel="stylesheet" type="text/css" href="pagesU.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @php
            echo(file_get_contents(public_path('css/pagesU.css')))
        @endphp
    </style>
    <div id="grad1">

    <ul>
        <div class="header">
      <div class="dropdown" style="float:right;">
          <button class="dropbtn">{{Auth::user()->name}}</button>
          <div class="dropdown-content">
          <a href="/MyInfoA">My Info</a>
          <a href="/logout">Log out</a>

        </div>
      </div>
    </div>

    </ul>
<body>
  <h2>Password Reset For User {{ $user->name}}</h2>


<form class ="pass" method="post" action="{{route('user.reset', $user->id)}}">
    @csrf
  <label for="newpwd">Enter New Password:</label>
  <input type="password" id="pwd" name="password"><br><br>
  <input type="submit">
</form>

</body>
</div>
</html>
