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
                        <a href="/LogOut">Log out</a>

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
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Department ID</th>
        <th>Course Credit</th>
        <th>Minimum Grade</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td><a href="/courseEditPage">Edit</a></td>
        <td>5643</td>
        <td>Intro to Stats</td>
        <td>009</td>
        <td>4</td>
        <td>C</td>
    </tr>

    <tr>
        <td><a href="/courseEditPage">Edit</a></td>
        <td>6652</td>
        <td>Latin American Studies</td>
        <td>007</td>
        <td>3</td>
        <td>C-</td>
    </tr>

    <tr>
        <td><a href="/courseEditPage">Edit</a></td>
        <td>4323</td>
        <td>Composition I</td>
        <td>002</td>
        <td>4</td>
        <td>C-</td>
    </tr>

    <tr>
        <td><a href="/courseEditPage">Edit</a></td>
        <td>2334</td>
        <td>Mixed Media in Film</td>
        <td>010</td>
        <td>2</td>
        <td>C-</td>
    </tr>
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
