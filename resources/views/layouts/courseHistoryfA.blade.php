<!DOCTYPE html>
<html>
<head>
    <title>Faculty Course History</title>
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
          <a href="/MyInfoA">My Info</a>
          <a href="/logout">Log out</a>

        </div>
      </div>
    </div>

    </ul>

<body>
  <h1 class="title1">Courses Taught in the Past</h1>

  <table class="courseHist">
  <thead>
  <tr>
    <th>&nbsp;</th>
    <th>CRN</th>
    <th>Course Name</th>
    <th>Course ID</th>
    <th>Faculty Name</th>
    <th>Section</th>
    <th>Room Number</th>
    <th>Semester Year</th>
    <th>Days</th>
    <th>Time</th>
    <th>Capacity</th>

  </tr>
</thead>
<tbody>
  <tr>
    <td><a href="/viewClassInfoA">View</a></td>
    <td>127836</td>
    <td>Linear Algebra</td>
    <td>44382</td>
    <td>Geta Tekanie</td>
    <td>4</td>
    <td>NAB 1127</td>
    <td>Spring 2021</td>
    <td>Mon,Wed</td>
    <td>1:50pm - 3:20pm</td>
    <td>21</td>
  </tr>

  <tr>
    <td><a href="/viewClassInfoA">View</a></td>
    <td>127836</td>
    <td>Linear Algebra</td>
    <td>44382</td>
    <td>Maria Romero Sorto</td>
    <td>4</td>
    <td>NAB 1127</td>
    <td>Spring 2021</td>
    <td>Mon,Wed</td>
    <td>1:50pm - 3:20pm</td>
    <td>21</td>
  </tr>

  <tr>
    <td><a href="/viewClassInfoA">View</a></td>
    <td>127836</td>
    <td>Linear Algebra</td>
    <td>44382</td>
    <td>Maria Romero</td>
    <td>4</td>
    <td>NAB 1127</td>
    <td>Spring 2021</td>
    <td>Mon,Wed</td>
    <td>1:50pm - 3:20pm</td>
    <td>21</td>
  </tr>

 <tr>
    <td><a href="/viewClassInfoA">View</a></td>
    <td>127836</td>
    <td>Linear Algebra</td>
    <td>44382</td>
    <td>Maria Romero</td>
    <td>4</td>
    <td>NAB 1127</td>
    <td>Spring 2020</td>
    <td>Mon,Wed</td>
    <td>1:50pm - 3:20pm</td>
    <td>21</td>
  </tr>

  <tr>
    <td><a href="/viewClassInfoA">View</a></td>
    <td>127836</td>
    <td>Linear Algebra</td>
    <td>44382</td>
    <td>Maria Romero</td>
    <td>4</td>
    <td>NAB 1127</td>
    <td>Spring 2019</td>
    <td>Mon,Wed</td>
    <td>1:50pm - 3:20pm</td>
    <td>21</td>
  </tr>

  <tr>
    <td><a href="/viewClassInfoA">View</a></td>
    <td>127836</td>
    <td>Linear Algebra</td>
    <td>44382</td>
    <td>Maria Romero</td>
    <td>4</td>
    <td>NAB 1127</td>
    <td>Spring 2018</td>
    <td>Mon,Wed</td>
    <td>1:50pm - 3:20pm</td>
    <td>21</td>
  </tr>
</tbody>
</table>


</body>
</div>
</html>

