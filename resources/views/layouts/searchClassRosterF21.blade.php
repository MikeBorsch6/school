<!DOCTYPE html>
<html>
<head>
    <title>Search Classes</title>
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
<body>

<label for="userSearch">Search Courses:</label>
<input type="search" placeholder="Search.." class = "form-control search-input" data-table="tableUser">
<input type="submit">
</form>
<h1 class="title1">All Courses</h1>
<table class="tableUser">
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
    @foreach(App\Models\Course::where('date','08/03/21-12/16/21')->get() as $course)
    <tr>
        <td><a href="/classRosterF/{{$course->id}}">Select</a></td>
        <td>{{$course->crn}}</td>
        <td>{{$course->title}}</td>
        <td>{{$course->id}}</td>
        <td>{{$course->teacher->name}}</td>
        <td>{{$course->section}}</td>
        <td>{{$course->location}}</td>
        <td>{{$course->date}}</td>
        <td>{{$course->days}}</td>
        <td>{{$course->time}}</td>
        <td>{{$course->capacity}}</td>
    </tr>
    @endforeach

    </tbody>
</table>

<script>
    (function(document) {
        'use strict';

        var TableFilter = (function(myArray) {
            var search_input;

            function _onInputSearch(e) {
                search_input = e.target;
                var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                myArray.forEach.call(tables, function(table) {
                    myArray.forEach.call(table.tBodies, function(tbody) {
                        myArray.forEach.call(tbody.rows, function(row) {
                            var text_content = row.textContent.toLowerCase();
                            var search_val = search_input.value.toLowerCase();
                            row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                        });
                    });
                });
            }

            return {
                init: function() {
                    var inputs = document.getElementsByClassName('search-input');
                    myArray.forEach.call(inputs, function(input) {
                        input.oninput = _onInputSearch;
                    });
                }
            };
        })(Array.prototype);

        document.addEventListener('readystatechange', function() {
            if (document.readyState === 'complete') {
                TableFilter.init();
            }
        });

    })(document);

    $(document).ready(function() {

        $('#example tr').click(function() {
            var href = $(this).find("a").attr("href");
            if(href) {
                window.location = href;
            }
        });

    });
</script>

</body>
</div>
</html>
