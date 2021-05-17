<!DOCTYPE html>
<html>
<head>
    <title>Search for Students</title>
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
      <img src='images/saturn1.png' alt="logo" />
      <div class="dropdown" style="float:right;">
          <button class="dropbtn">{{Auth::user()->name}}</button>
          <div class="dropdown-content">
          <a href="/MyInfoF">My Info</a>
          <a href="/logout">Log out</a>

        </div>
      </div>
    </div>

    </ul>
</head>

<body>
  <h1 class="title1">Search for Students</h1>
	<form class="example" action="/studentFoundfG" style="margin:auto;max-width:300px">
  	<input type="text" placeholder="Search.." name="search2">
  	<input type="submit" class = " search">
</form>

</body>
</html>
