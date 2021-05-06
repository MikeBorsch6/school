<!DOCTYPE html>
	<html>
	<head>
		<title>Search Student</title>
		<link rel="stylesheet" type="text/css" href="pagesU.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<div id="grad1">

		<ul>
			<div class="header">
			<img src='images/saturn1.png' alt="logo" />
			<div class="dropdown" style="float:right;">
  				<button class="dropbtn">Michael Borsch</button>
  				<div class="dropdown-content">
  				<a href="/MyInfoA">My Info</a>
  				<a href="/LogOut">Log out</a>

  			</div>
  		</div>
  	</div>

		</ul>



	</div>
	<body>

  <label for="userSearch">Search Student:</label>
  <input type="search" placeholder="Search.." class = "form-control search-input" data-table="tableUser">
  <input type="submit">
</form>
<h1 class="title1">All Students</h1>
  <table class="tableUser">
  <thead>
  <tr>
  	<th>&nbsp;</th>
    <th>User ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>User Type</th>

  </tr>
</thead>
<tbody>
  <tr>
  	<td><a href="/studentHolds">Edit</a></td>
    <td>300321233</td>
    <td>Marean</td>
    <td>Vivenly</td>
    <td>Student</td>
  </tr>

  <tr>
  <td><a href="/studentHolds">Edit</a></td>
    <td>300334111</td>
    <td>Ares</td>
    <td>Toledoa</td>
    <td>Student</td>
  </tr>

  <tr>
  <td><a href="/studentHolds">Edit</a></td>
    <td>333234211</td>
    <td>Sirena</td>
    <td>Macprones</td>
    <td>Student</td>
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
