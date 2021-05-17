<!DOCTYPE html>
<html>
<head>
    <title>Search Courses</title>
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

<label for="userSearch">Search Courses:</label>
<input type="search" placeholder="Search.." class = "form-control search-input" data-table="tableUser">
<input type="submit">
</form>
<h1 class="title1">All Classes</h1>
<table class="tableUser">
    <thead>
    <tr>
        <th>&nbsp;</th>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Department ID</th>
        <th>Course Credit</th>
        <th>Minimum Grade</th>
    </tr>
    </thead>
    <tbody>
    @foreach(App\Models\Course::all() as $course)
    <tr>
        <td><a href="{{route('course.edit', ['course' => $course])}}">Edit</a></td>
        <td>{{$course->id}}</td>
        <td>{{$course->crn}}</td>
        <td>{{$course->subject}}</td>
        <td>{{$course->section}}</td>
        <td>{{$course->campus_id}}</td>
        <td>{{$course->credits}}</td>
        <td>{{$course->title}}</td>
        <td>{{$course->days}}</td>
        <td>{{$course->time}}</td>
        <td>{{$course->capacity}}</td>
        <td>{{$course->section_actual}}</td>
        <td>{{$course->section_remaining}}</td>
        <td>{{$course->date}}</td>
        <td>{{$course->location}}</td>


        <td>C</td>
    </tr>
    @endforeach
    </tbody>

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
