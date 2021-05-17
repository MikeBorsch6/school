<!DOCTYPE html>
<html>
<head>
    <title>Holds</title>
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".add-row").click(function(){
                    var holdName = $("#holdName").val();
                    var descrip = $("#descrip").val();
                    var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + holdName + "</td><td>" + descrip + "</td></tr>";
                    $("table tbody").append(markup);
                });

                // Find and remove selected table rows
                $(".delete-row").click(function(){
                    $("table tbody").find('input[name="record"]').each(function(){
                        if($(this).is(":checked")){
                            $(this).parents("tr").remove();
                        }
                    });
                });
            });
        </script>


<body>
<form>
    <input type="text" id="holdName" class="inLine" placeholder="Hold">
    <input type="text" id="descrip" class = "inDesc" placeholder="Description">
    <input type="button" class="add-row" value="Add Row">
</form>
<table class = "tableHolds">
    <thead>
    <tr>
        <th>Select</th>
        <th>Hold</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><input type="checkbox" name="record"></td>
        <td>Finance</td>
        <td>Student has a pending balance in bursar</td>
    </tr>
    </tbody>



</table>
<button type="button" class="delete-row">Delete Row</button>

<div>
    <div class="buttonHold">
        <button><a href="/searchStudentH">Student Search to add Hold</a>
    </div>
</div>
</body>
</html>
