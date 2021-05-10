<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
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
          <a href="/LogOut">Log out</a>

        </div>
      </div>
    </div>

    </ul>

<body>

  <h1 class="title1">Forms</h1>

  <div class="formlink">
  <a href='pdf/NewStudentRegistration.pdf'>New Student Registration</a><br>
  <a href='pdf/graduateApp.pdf'>Graduate Application</a><br>
  <a href='pdf/immunization.pdf'>Immunizations</a><br>
  <a href='pdf/scholarshipApp.pdf'>Scholarship Application</a><br>
  <a href='pdf/grantApp.pdf'>College Grant Application</a><br>
</div>



<div class="formNo">

  <div class="container">
    <p>Don't see the forms you are looking for? Please submit a request for a form that you need.</p>
  <form action="/action_page.php" class="formR">
  <div class="row">
    <div class="col-25">
      <label for="idN">ID Number</label>
    </div>
    <div class="col-75">
      <input type="text" id="idN" name="idNum" placeholder="ID Number">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="first name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="last name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="eaddress">Email Address</label>
    </div>
    <div class="col-75">
      <input type="text" id="eaddress" name="emailaddress" placeholder="email..">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="ftype">Form Type</label>
    </div>
    <div class="col-75">
      <select id="ftype" name="formtype">
         <option value="none">--Select--</option>
        <option value="registration">Registration</option>
        <option value="financialaid">Financal Aid</option>
        <option value="bursar">Bursar</option>
        <option value="health">Health</option>

      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="saddress">Description</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Describe the needed form.." style="height:200px"></textarea>
    </div>
  </div>

  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>
</div>


  </body>
</div>
</html>
