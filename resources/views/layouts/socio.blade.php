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
  <h1 class="title1">Sociology</h1>
<table class="tableCat">
  <tr>
    <th>CourseID</th>
    <th>Department ID</th>
    <th>Course Name</th>
    <th>Course Credit</th>
    <th>Minimum Grade</th>

  </tr>
  <tr>
    <td>1500</td>
    <td>18</td>
    <td>Intro Sociology	</td>
    <td>4</td>
    <td>C</td>
  </tr>
    <tr>
        <td>2550</td>
        <td>18</td>
        <td>Social Problems		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>2600</td>
        <td>18</td>
        <td>Social Deviance		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3160</td>
        <td>18</td>
        <td>Sociology of Culture		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3700</td>
        <td>18</td>
        <td>Family & Society		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3750</td>
        <td>18</td>
        <td>Medical Sociology		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3800</td>
        <td>18</td>
        <td>Race and Ethnicity		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3900</td>
        <td>18</td>
        <td>Social Movements		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4260</td>
        <td>18</td>
        <td>Social Work:Theory & Practice		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4500</td>
        <td>18</td>
        <td>Global Sociology	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4520</td>
        <td>18</td>
        <td>Research Methods I		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4530</td>
        <td>18</td>
        <td>Sociological Theory I		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4540</td>
        <td>18</td>
        <td>Sociological Theory II	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4570</td>
        <td>18</td>
        <td>Research Methods II		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4810</td>
        <td>18</td>
        <td>Law & Justice		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4830</td>
        <td>18</td>
        <td>Gender and Society	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>5990</td>
        <td>18</td>
        <td>Senior Seminar		</td>
        <td>4</td>
        <td>C</td>
    </tr>





  </tr>
</table>


  </body>
  </html>
