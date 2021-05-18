<!DOCTYPE html>
<html>
<head>
    <title>Student Info</title>
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
          <a href="faculty" class="buttonHome"><img src='/images/saturn1.png' alt="logo" >
      <div class="dropdown" style="float:right;">
          <button class="dropbtn">{{Auth::user()->name}}</button>
          <div class="dropdown-content">
          <a href="/MyInfoF">My Info</a>
          <a href="/logout">Log out</a>

        </div>
      </div>
    </div>

    </ul>

<style>
label{display:block;
align-content:center;
}
form input{
  border:none;
  outline:none;
  box-sizing:border-box;
  padding: 10px 10px;
  width: 25%;


}

</style>
</head>
<body>


<form>
<label>ID Number:   <input readonly value="708322124"></label>
<label>First Name:  <input readonly value="James"></label>
<label>Last Name:   <input readonly value="Peng"></label>
<label>Birth Date:  <input readonly value="02/15/1998"></label>
<label>EmailAddress:<input readonly value="jpeng@saturnuni.com"></label>
<label>HomeAddress: <input readonly value="23 Smapler St, Garden City, NY"></label>
<label>PhoneNumber: <input readonly value="646-231-3432"></label>
<label>Advisor:     <input readonly value="Maria Romero Sorto"></label>
</form>
<div>
  <a href="/studentTranscriptF">Student Transcript</a>
<a href="/studentDegreeEvalF">Degree Evaluation</a>
<a href="/studentAttendanceF">Attendance</a>
</div>


</body>
</div>
</html>
