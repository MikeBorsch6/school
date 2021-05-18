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
  <h1 class="title1">Public Health</h1>
<table class="tableCat">
  <tr>
    <th>CourseID</th>
    <th>Department ID</th>
    <th>Course Name</th>
    <th>Course Credit</th>
    <th>Minimum Grade</th>

  </tr>
  <tr>
    <td>2900</td>
    <td>17</td>
    <td>Black Lives Matter: US Health	</td>
    <td>4</td>
    <td>C</td>
  </tr>
    <tr>
        <td>3600</td>
        <td>17</td>
        <td>Social Determinants of Health	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3610</td>
        <td>17</td>
        <td>Intro.-U.S.Health Care System	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3700</td>
        <td>17</td>
        <td>Medical Anthropology	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4670</td>
        <td>17</td>
        <td>Biostatistics</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4760</td>
        <td>17</td>
        <td>Health Administration	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4800</td>
        <td>17</td>
        <td>Epidemiology	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4900</td>
        <td>17</td>
        <td>Community Health Field Placmt	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4920</td>
        <td>17</td>
        <td>Spcl Topics in Public Health		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>5900</td>
        <td>17</td>
        <td>Research Methods		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>5920</td>
        <td>17</td>
        <td>Senior Seminar	</td>
        <td>4</td>
        <td>C</td>
    </tr>


</table>


  </body>
  </html>
