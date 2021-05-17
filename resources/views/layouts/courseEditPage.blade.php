<!DOCTYPE html>
<html>
<head>
    <title>Edit Class</title>
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
      <img src='/images/saturn1.png' alt="logo" />
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


<form method="post" action="{{route('course.update', ['course' => $course])}}">
    @method('put')
    @csrf
    <label>CRN:     <input name="crn" readonly value="{{$course->crn}}"></label>
    <label>Subject:   <input name="subject" value="{{$course->subject}}"></label>
    <label>Course Number: <input name="course" value="{{$course->course}}"></label>
    <label>Section: <input name="section" value="{{$course->section}}"></label>
    <label>Campus ID: <input name="campus_id" value="{{$course->campus_id}}"></label>
    <label>Credits:     <input name="credits" value="{{$course->credits}}"></label>
    <label>Title:     <input name="title" value="{{$course->title}}"></label>
    <label>Days:     <input name="days" value="{{$course->days}}"></label>
    <label>Time:     <input name="time" value="{{$course->time}}"></label>
    <label>Capacity:     <input name="capacity" value="{{$course->capacity}}"></label>
    <label>Section Actual:     <input name="section_actual" value="{{$course->section_actual}}"></label>
    <label>Section Remaining:     <input name="section_remaining" value="{{$course->section_remaining}}"></label>
    <label>Professor ID:     <input name="user_id" value="{{$course->user_id}}"></label>
    <label>Date:     <input name="date" value="{{$course->date}}"></label>
    <label>Room ID:     <input name="location" value="{{$course->location}}"></label>
    <label> Field:
    <select style="width:616px; float:right" name="field_id">
        @foreach(App\Models\Field::all() as $field)
            <option value="{{$field->id}}">{{$field->name}}</option>
        @endforeach
    </select></label>
    <label> Course:
    <select style="width:616px; float:right" name="subject_id">
        @foreach(App\Models\Subject::all() as $field)
            <option value="{{$field->id}}">{{$field->name}}</option>
        @endforeach
    </select></label>
    <label>Prereq CRN:     <input name="parent_id" value="{{isset($course->parent_id) ? $course->parent_id : 'NA'}}"></label>
    <br>
    <input type="submit" value="Submit">
</form>


</body>
</div>
</html>
