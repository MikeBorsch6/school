<!DOCTYPE html>
<html>
<head>
    <title>Grades Stats</title>
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
          <a href="/MyInfoR">My Info</a>
          <a href="/LogOut">Log out</a>

        </div>
      </div>
    </div>

    </ul>
</head>

<body>
  <h1 class="title1">Grades</h1>
  <label for="userSearch">Search Department:</label>
  <input type="search" placeholder="Search.." class = "form-control search-input" data-table="research">
  <input type="submit">
</form>
  <table class="research">
  <thead>
  <tr>
    <th>Department Name</th>
    <th>Average Grade</th>


  </tr>
</thead>
<tbody>
  <tr>
    <td>American Studies</td>
    <td>B+</td>
  </tr>

  <tr>
    <td>Computer Science</td>
    <td>A</td>
  </tr>

  <tr>
    <td>Psychology</td>
    <td>A</td>
  </tr>

  <tr>
    <td>Biological Sciences</td>
    <td>A</td>
  </tr>

  <tr>
    <td>Accounting</td>
    <td>B</td>
  </tr>

  <tr>
    <td>Business</td>
    <td>B</td>
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

