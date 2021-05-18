<!DOCTYPE html>
<html>
<head>
    <title>Catalog</title>
    <link rel="stylesheet" type="text/css" href="main.css">

    <header id = "main-header">

        <h1>Saturn University</h1>
        <h5>The Galaxy is the limit.</h5>

    </header>

    <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/catalog">Catalog</a></li>
        <li><a href="/masterschedule">Master Schedule</a></li>
        <li><a href="/selectCal">Academic Calendar</a></li>
        <li class="right"><a href="Login.blade.php">Log in</a></li>
    </ul>

</head>

<style>
    @php
        echo(file_get_contents(public_path('css/main.css')))
    @endphp
</style>

<body>
<h1 class="title1">Biological Sciences</h1>
<table class="tableCat">
    <tr>
        <th>CourseID</th>
        <th>Department ID</th>
        <th>Course Name</th>
        <th>Course Credit</th>
        <th>Minimum Grade</th>

    </tr>
    <tr>
        <td>2100</td>
        <td>3</td>
        <td>Biology for Non-Science Majors	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4420</td>
        <td>3</td>
        <td>Microbiology</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4400</td>
        <td>3</td>
        <td>Cell Biology	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4440</td>
        <td>3</td>
        <td>Evolution</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>2311</td>
        <td>3</td>
        <td>Anatomy&Physiology II Lab	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>2301</td>
        <td>3</td>
        <td>Anatomy&Physiology I Lab	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>2410</td>
        <td>3</td>
        <td>Basic Bio Sciences II	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>2300</td>
        <td>3</td>
        <td>Anatomy&Physiology I Lecture	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>5410</td>
        <td>3</td>
        <td>Senior Seminar I	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>2400</td>
        <td>3</td>
        <td>Basic Bio Sciences I	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4474</td>
        <td>3</td>
        <td>Microbial Ecology</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>2401</td>
        <td>3</td>
        <td>Basic Bio Sciences I Lab	</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>2411</td>
        <td>3</td>
        <td>Basic Bio Sciences II Lab		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3400</td>
        <td>3</td>
        <td>Vertebrate Physiology		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>6590</td>
        <td>3</td>
        <td>Topics: Environmental Science
        </td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4500</td>
        <td>3</td>
        <td>Cell & Molecular Neurobiology		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>5420</td>
        <td>3</td>
        <td>Senior Seminar II		</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>5590</td>
        <td>3</td>
        <td>Advanced Research		</td>
        <td>4</td>
        <td>C</td>
    </tr>
</table>


</body>
</html>
