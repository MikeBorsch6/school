<!DOCTYPE html>
<html>
<head>
    <title>Student Transcript</title>
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
<h2>Transcript</h2>


<div class="div1leftT">
    <table class="transcriptUser">

        <tr>
            <th>ID Number:</th>
            <td>702372343</td>
        </tr>

        <tr>
            <th>Student Name:</th>
            <td>James Peng</td>
        </tr>

        <tr>
            <th>BirthDate:</th>
            <td>03/23/1998</td>
        </tr>

        <tr>
            <th>Major: </th>
            <td>Computer Science</td>
        </tr>

        <tr>
            <th>Minor: </th>
            <td>None</td>
        </tr>

        <tr>
            <th>GPA:   </th>
            <td>3.9</td>
        </tr>

    </table>

</div>


<div class="div1mainT">
    <table class="transcriptMain">
        <thead>
        <tr>
            <th>CRN</th>
            <th>Semester/Year</th>
            <th>Course Name</th>
            <th>Credits</th>
            <th>&nbsp;Grade</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>3003</td>
            <td>Spring 2019</td>
            <td>Ocean and Marine Life</td>
            <td>3</td>
            <td><a href="/enterGrade">A+</a></td>
        </tr>

        <tr>
            <td>1233</td>
            <td>Spring 2019</td>
            <td>Linear Algebra</td>
            <td>4</td>
            <td><a href="/enterGrade">B</a></td>
        </tr>

        <tr>
            <td>3212</td>
            <td>Spring 2019</td>
            <td>Technical Communications</td>
            <td>3</td>
            <td><a href="/enterGrade">A</a></td>
        </tr>

        <tr>
            <td>1233</td>
            <td>Fall 2019</td>
            <td>Database Management</td>
            <td>4</td>
            <td><a href="/enterGrade">B</a></td>
        </tr>

        <tr>
            <td>1233</td>
            <td>Fall 2019</td>
            <td>Computer Networks</td>
            <td>4</td>
            <td><a href="/enterGrade">A+</a></td>
        </tr>

        <tr>
            <td>1233</td>
            <td>Fall 2019</td>
            <td>Basic Spanish</td>
            <td>4</td>
            <td><a href="/enterGrade">B+</a></td>
        </tr>

        <tr>
            <td>1233</td>
            <td>Spring 2020</td>
            <td>Systems Management</td>
            <td>4</td>
            <td><a href="/enterGrade">B+</a></td>
        </tr>

        <tr>
            <td>1233</td>
            <td>Spring 2020</td>
            <td>Intro to Applications</td>
            <td>4</td>
            <td><a href="/enterGrade">A</a></td>
        </tr>

        </tbody>
    </table>
</div>
</body>
</div>
</html>
