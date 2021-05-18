<!DOCTYPE html>
  <html>
  <head>
      <title>Catalog</title>
      <link rel="stylesheet" type="text/css" href="main.css">
      <header id = "main-header">

      <h1>Saturn University</h1>
      <h5>The Galaxy is the limit.</h5>

    </header>

    <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/catalog">Catalog</a></li>
        <li><a href="/masterschedule">Master Schedule</a></li>
        <li><a href="/selectCal">Academic Calendar</a></li>
        <li class="right"><a href="Login.blade.php">Log in</a></li>
    </ul>
</head>

  <style>
      @php
          echo(file_get_contents(public_path('css/main.css')))
      @endphp
  </style>

<body>
    <h1 class="title1">Professional Studies</h1>
<table class="tableCat">
  <tr>
    <th>CourseID</th>
    <th>Department ID</th>
    <th>Course Name</th>
    <th>Course Credit</th>
    <th>Minimum Grade</th>

  </tr>
  <tr>
    <td>3130</td>
    <td>15</td>
    <td>Accounting for Professionals	</td>
    <td>4</td>
    <td>C</td>
  </tr>
  <tr>
    <td>3330</td>
    <td>15</td>
    <td>Professional Supervision	</td>
    <td>4</td>
    <td>C</td>
  </tr>
    <tr>
        <td>3430</td>
        <td>15</td>
        <td>Marketing for Professionals		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3995</td>
        <td>15</td>
        <td>Career Internship		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4225</td>
        <td>15</td>
        <td>The Law for Professionals		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4325</td>
        <td>15</td>
        <td>The Financial Systems	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4430</td>
        <td>15</td>
        <td>Entertainment & Sports Mktg.	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4630</td>
        <td>15</td>
        <td>Financial Admin of Non Profits		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>5435</td>
        <td>15</td>
        <td>Entertainment & Sports Finance		</td>
        <td>4</td>
        <td>C</td>
    </tr>

</table>


  </body>
  </html>
