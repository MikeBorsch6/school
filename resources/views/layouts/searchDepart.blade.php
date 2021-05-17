<!DOCTYPE html>
	<html>
	<head>
		<title>Search Departments</title>
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

  <label for="userSearch">Search Departments:</label>
  <input type="search" placeholder="Search.." class = "form-control search-input" data-table="tableUser">
  <input type="submit">
</form>
<h1 class="title1">All Departments</h1>
  <table class="tableUser">
  <thead>
  <tr>
  	<th>&nbsp;</th>
    <th>Department ID</th>
    <th>Department Name</th>
    <th>Chair Name</th>
    <th>Contact Number</th>
    <th>Email</th>

  </tr>
</thead>
<tbody>
  <tr>
  	<td><a href="/editDepart">Edit</a></td>
    <td>003</td>
    <td>Mathematics</td>
    <td>Geta Tekanie</td>
    <td>4438236123</td>
    <td>getat@saturnuni.com</td>

  </tr>

  <tr>
    <td><a href="/editDepart">Edit</a></td>
    <td>003</td>
    <td>Mathematics</td>
    <td>Geta Tekanie</td>
    <td>4438236123</td>
    <td>getat@saturnuni.com</td>

  </tr>

  <tr>
    <td><a href="/editDepart">Edit</a></td>
    <td>003</td>
    <td>Mathematics</td>
    <td>Geta Tekanie</td>
    <td>4438236123</td>
    <td>getat@saturnuni.com</td>

  </tr>

 <tr>
    <td><a href="/editDepart">Edit</a></td>
    <td>003</td>
    <td>Mathematics</td>
    <td>Geta Tekanie</td>
    <td>4438236123</td>
    <td>getat@saturnuni.com</td>

  </tr>
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
