<!DOCTYPE html>
<html>
<head>
    <title>Admin Info</title>
    <link rel="stylesheet" type="text/css" href="pagesU.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    @php
        echo(file_get_contents(public_path('css/pagesU.css')))
    @endphp
    </style>
</head>
    <div id="grad1">

    <ul>
      <div class="header">
          <a href="admin" class="buttonHome"><img src='/images/saturn1.png' alt="logo" >
      <div class="dropdown" style="float:right;">
          <button class="dropbtn">{{Auth::user()->name}}</button>
          <div class="dropdown-content">
          <a href="/MyInfoA">My Info</a>
          <a href="/logout">Log out</a>

        </div>
      </div>
    </div>

    </ul>

<style>
label{display:block;
align-content: center;}
form input{
  border:none;
  outline:none;
  box-sizing:border-box;
  padding: 10px 10px;
  width: 25%;
}
form.invert input{border:1px solid rgba(0,0,0,0.2);outline:none;}

form>button:nth-of-type(1){
 color:green;display:none;
}
form>button:nth-of-type(2){
 color:red;display:none;
}
form>button:nth-of-type(3){
 color:purple;display:inline-block;
}
form.invert>button:nth-of-type(1){
 display:inline-block;
}
form.invert>button:nth-of-type(2){
 display:inline-block;
}
form.invert>button:nth-of-type(3){
 display:none;
}
</style>
<body>


<form method="post" action="{{route('users.update', ['user' => $user->id])}}">
    @method('put')
    @csrf
<label>ID Number:   <input readonly value ="{{$user->id}}"></label>
<label>Name:  <input name="name" value ="{{$user->name}}"></label>
<label>Birth Date:  <input  value = "04/03/1999"></label>
<label>EmailAddress:<input  name='email' value="{{$user->email}}"></label>
<label>HomeAddress: <input  name='address' value = "{{$user->address}}"></label>
    <br>
<input type = "submit" value ="Save" class="btn">
</form>

<div>
        @if(in_array($user->role_id, [3,4,5,6,7]))
          <a href="{{route('studentTranscriptA', ['user' => $user->id])}}">Student Transcript</a>
          <a href="{{route('searchDegreeEval', ['user' => $user->id])}}">Degree Evaluation</a>
          <a href="/studentAttendanceA/{{$user->id}}">Attendance</a>
          <a href="/studentHolds/{{$user->id}}">Holds</a>
        @elseif($user->role_id === 2)
        <a href="/courseHistoryfA/{{$user->id}}">Classes Teaching</a>
        <a href="/adviseeA">Advisees</a>
    @endif

</div>
</body>
</html>
