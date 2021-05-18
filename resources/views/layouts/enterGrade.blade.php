<!DOCTYPE html>
<html>
<head>
    <title>Grade</title>
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
          <a href="admin" class="buttonHome"><img src='/images/saturn1.png' alt="logo" >
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
  <h2>Change Student Grade</h2>



<form class="grade" action="{{route('user.grade.edit', ['grade' => $grade])}}" method="post">
    @method('put')
    @csrf
  <label for="fname">Enter Grade:</label><br>
  <input type="text" id="grade" name="grade" value=""><br>
  <input type="submit" value="Submit">
</form>

</body>

</div>
</html>
