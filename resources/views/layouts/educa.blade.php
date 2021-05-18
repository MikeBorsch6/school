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

	<h1 class="title1">Education</h1>
  <table class="tableCat">
  <tr>
    <th>CourseID</th>
    <th>Department ID</th>
    <th>Course Name</th>
    <th>Course Credit</th>
    <th>Minimum Grade</th>

  </tr>
  <tr>
    <td>3330</td>
    <td>7</td>
    <td>Children's Literature	</td>
    <td>4</td>
    <td>C</td>
  </tr>
      <tr>
          <td>3700</td>
          <td>7</td>
          <td>Child Dev & Prac for Teachers	</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>3742</td>
          <td>7</td>
          <td>Middle Childhood & Adolescence		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>3820</td>
          <td>7</td>
          <td>Found of SpecEd/Area of Except		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>3900</td>
          <td>7</td>
          <td>Foundations of Education		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4050</td>
          <td>7</td>
          <td>Instruct. Design & Assessment		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4086</td>
          <td>7</td>
          <td>Meth&Matl-Soc Studs-Sec.Schl		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4121</td>
          <td>7</td>
          <td>Meth&Matl-Tch Elmtry Science		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4122</td>
          <td>7</td>
          <td>Meth&Matl-Tch Elmtry Math		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4200</td>
          <td>7</td>
          <td>Literacy for All Students		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4220</td>
          <td>7</td>
          <td>Language Arts in Childhood Ed.	</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4300</td>
          <td>7</td>
          <td>Assessment in Special Ed		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4670</td>
          <td>7</td>
          <td>Meth & Matl-Teach Eng/Sec Lang		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4810</td>
          <td>7</td>
          <td>PBS and Intervention for SWD		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4850</td>
          <td>7</td>
          <td>Inst Design & Delivery SWD		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4890</td>
          <td>7</td>
          <td>Practices:Low Incidence SWD		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>5890</td>
          <td>7</td>
          <td>Pre-Stu TeachingSemSpanSocStud	</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>5900</td>
          <td>7</td>
          <td>StuTch/SecSchol&Sem-Science		</td>
          <td>4</td>
          <td>C</td>
      </tr>
</table>


	</body>
	</html>
