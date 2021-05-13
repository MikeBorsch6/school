<!DOCTYPE html>
<html>
<head>
    <title>Class Roster</title>
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
          <a href="/LogOut">Log out</a>

        </div>
      </div>
    </div>

    </ul>
</head>

<h1 class="title1">Roster</h1>
  <table class="classinfo">
    <tr>
    <th>Course Name:</th>
    <td>Linear Algebra</td>
    <th>Faculty Name:</th>
    <td>Maria Romero Sorto</td>
    <th>Days:</th>
    <td>Mon, Wed</td>
  </tr>

  <tr>
    <th>CRN:</th>
    <td>36823</td>
    <th>Semester Year:</th>
    <td>Spring 2021</td>
    <th>Start Time:</th>
    <td>1:00pm</td>
  </tr>

  <tr>
    <th>Enrolled:</th>
    <td>20</td>
    <th>Capacity:</th>
    <td>25</td>
    <th>End Time:</th>
    <td>2:30pm</td>
  </tr>
  </table>



  <table class="roster">
  <thead>
  <tr>
    <th>&nbsp;</th>
    <th>ID Number</th>
    <th>Student Name</th>
    <th>Email</th>
    <th>Phone Number</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td><a href="/studentTranscriptF">View</a></td>
    <td>800234223</td>
    <td>James Peng</td>
    <td>jpeng@saturnuni.com</td>
    <td>646-237-9808</td>
  </tr>

  <tr>
    <td><a href="/studentTranscriptF">View</a></td>
    <td>876543210</td>
    <td>Ariel Mariner</td>
    <td>amariner@saturnuni.com</td>
    <td>516-753-8960</td>
  </tr>

  <tr>
    <td><a href="/studentTranscriptF">View</a></td>
    <td>876587431</td>
    <td>Minera Reyes</td>
    <td>mreyes@saturnuni.com</td>
    <td>516-654-1239</td>
  </tr>

 <tr>
    <td><a href="/studentTranscriptF">View</a></td>
    <td>701336743</td>
    <td>Jotono Miyers</td>
    <td>jmiyers@saturnuni.com</td>
    <td>646-764-9090</td>
  </tr>

</tbody>
</table>
</body>
</div>
</html>


