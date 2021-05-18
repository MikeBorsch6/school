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
<h1 class="title1">Modern Languages</h1>
<table class="tableCat">
  <tr>
    <th>CourseID</th>
    <th>Department ID</th>
    <th>Course Name</th>
    <th>Course Credit</th>
    <th>Minimum Grade</th>

  </tr>
  <tr>
    <td>1000</td>
    <td>13</td>
    <td>Basic French I	</td>
    <td>4</td>
    <td>C</td>
  </tr>
    <tr>
        <td>1010</td>
        <td>13</td>
        <td>Basic French II		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>1100</td>
        <td>13</td>
        <td>Basic Spanish I			</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>1110</td>
        <td>13</td>
        <td>Basic Spanish II	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>1300</td>
        <td>13</td>
        <td>Basic Arabic Language I		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>1400</td>
        <td>13</td>
        <td>Basic Italian I	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>1410</td>
        <td>13</td>
        <td>Basic Italian II	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>1600</td>
        <td>13</td>
        <td>Basic Punjabi I		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>2110</td>
        <td>13</td>
        <td>Intermediate Spanish II	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>2550</td>
        <td>13</td>
        <td>IntroHispanism/HispanicCulture		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3100</td>
        <td>13</td>
        <td>Advanced Spanish Conversation		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3150</td>
        <td>13</td>
        <td>Modern Italian Civilization	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3200</td>
        <td>13</td>
        <td>Translation Workshop		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3600</td>
        <td>13</td>
        <td>Intro.Study of Hispanic Lit.		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3800</td>
        <td>13</td>
        <td>Modern French Culture			</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4500</td>
        <td>13</td>
        <td>Points of Contact:US&Latin Am		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4545</td>
        <td>13</td>
        <td>Civ & Culture of Latin America	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4725</td>
        <td>13</td>
        <td>The Novel and the City		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>6530</td>
        <td>13</td>
        <td>Cervantes and the Golden Age			</td>
        <td>4</td>
        <td>C</td>
    </tr>

</table>


  </body>
  </html>
