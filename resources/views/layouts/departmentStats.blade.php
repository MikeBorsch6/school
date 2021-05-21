<!DOCTYPE html>
<html>
<head>
    <title>Department Stats</title>
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
          <a href="/MyInfoR">My Info</a>
          <a href="/logout">Log out</a>

        </div>
      </div>
    </div>

    </ul>
</head>

<body>
  <h1 class="title1">Department</h1>
</form>
  <table class="research">
  <thead>
  <tr>
    <th>Department Name</th>
    <th>Number of Students</th>


  </tr>
</thead>
<tbody>
@foreach(App\Models\Subject::all() as $subject)
    <tr>
        <td>{{$subject->name}}</td>
    </tr>
@endforeach
</tbody>
</table>
</body>
</div>
</html>

