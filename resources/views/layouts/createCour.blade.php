<!DOCTYPE html>
<html>
<head>
    <title> Create Course</title>
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


        </head>
<body>

<h1>Create a Course</h1>

<div class="container">
    <form action="/action_page.php">
        <div class="row">
            <div class="col-25">
                <label for="courID">Course ID</label>
            </div>
            <div class="col-75">
                <input type="text" id="courID" name="courseID" placeholder="course ID..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="cName">Course Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="cName" name="coursename" placeholder="course name..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="dID">Department ID</label>
            </div>
            <div class="col-75">
                <input type="text" id="dID" name="departmentID" placeholder="department ID..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="cCredit">Course Credit</label>
            </div>
            <div class="col-75">
                <input type="text" id="cCredit" name="coursecredit" placeholder="credit">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="mGrade">Minimum Grade</label>
            </div>
            <div class="col-75">
                <input type="text" id="mGrade" name="minimungrade" placeholder="min grade">
            </div>
        </div>



        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>

</div>

</body>
</html>
