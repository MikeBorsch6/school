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
<h1 class="title1">Politics, Economics and Law</h1>
<table class="tableCat">
  <tr>
    <th>CourseID</th>
    <th>Department ID</th>
    <th>Course Name</th>
    <th>Course Credit</th>
    <th>Minimum Grade</th>

  </tr>

  <tr>
    <td>2220</td>
    <td>14</td>
    <td>Intro to Urban Issues</td>
    <td>4</td>
    <td>C</td>
  </tr>
  <tr>
    <td>2300</td>
    <td>14</td>
    <td>Introduction to Law	</td>
    <td>4</td>
    <td>C</td>

  </tr>
    <tr>
        <td>2420</td>
        <td>14</td>
        <td>Principles of Microeconomics		</td>
        <td>4</td>
        <td>C</td>

    </tr>
    <tr>
        <td>2650</td>
        <td>14</td>
        <td>Intro to U.S. Politics	</td>
        <td>4</td>
        <td>C</td>

    </tr>
    <tr>
        <td>3100</td>
        <td>14</td>
        <td>International Relations		</td>
        <td>4</td>
        <td>C</td>

    </tr>
    <tr>
        <td>3160</td>
        <td>14</td>
        <td>Ethnopolitics in the World		</td>
        <td>4</td>
        <td>C</td>

    </tr>
    <tr>
        <td>3400</td>
        <td>14</td>
        <td>Global South	</td>
        <td>4</td>
        <td>C</td>

    </tr>
    <tr>
        <td>3410</td>
        <td>14</td>
        <td>Contemp US Political Economy	</td>
        <td>4</td>
        <td>C</td>

    </tr>
    <tr>
        <td>4325</td>
        <td>14</td>
        <td>Jurisprudence: Legal Thought	</td>
        <td>4</td>
        <td>C</td>

    </tr>
    <tr>
        <td>4470</td>
        <td>14</td>
        <td>History of Economic Thought I	</td>
        <td>4</td>
        <td>C</td>

    </tr>
    <tr>
        <td>4590</td>
        <td>14</td>
        <td>Global Economy in 20th Century	</td>
        <td>4</td>
        <td>C</td>

    </tr>
    <tr>
        <td>4615</td>
        <td>14</td>
        <td>Public Finance&Public Policy		</td>
        <td>4</td>
        <td>C</td>

    </tr>
    <tr>
        <td>4620</td>
        <td>14</td>
        <td>Political & Social Thought	</td>
        <td>4</td>
        <td>C</td>

    </tr>
    <tr>
        <td>4658</td>
        <td>14</td>
        <td>Law & Civil Liberties	</td>
        <td>4</td>
        <td>C</td>

    </tr>
    <tr>
        <td>4665</td>
        <td>14</td>
        <td>Human Rights		</td>
        <td>4</td>
        <td>C</td>

    </tr>
    <tr>
        <td>5990</td>
        <td>14</td>
        <td>Internship</td>
        <td>4</td>
        <td>C</td>

    </tr>
    <tr>
        <td>9990</td>
        <td>14</td>
        <td>Independent Study-PE		</td>
        <td>4</td>
        <td>C</td>

    </tr>
</table>


  </body>
  </html>
