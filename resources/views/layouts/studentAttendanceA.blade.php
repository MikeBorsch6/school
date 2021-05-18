<!DOCTYPE html>
<html>
<head>
    <title>Student Attendance</title>
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
                <a href="admin" class="buttonHome"><img src='images/saturn1.png' alt="logo" >
                <div class="dropdown" style="float:right;" >
                    <button class="dropbtn">{{Auth::user()->name}}</button>
                    <div class="dropdown-content">
                        <a href="/MyInfoA">My Info</a>
                        <a href="/logout">Log out</a>

                    </div>
                </div>
            </div>

        </ul>
<body>
<h2>Attendance</h2>

<table class="attendance">
    <thead>
    <tr>
        <th>Student Name</th>
        <th>&nbsp;Attendance</th>
        <th>Date</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>01/25/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>01/27/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>02/01/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>02/03/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>02/08/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>02/10/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>02/15/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>02/17/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>02/22/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>02/24/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>03/01/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>03/03/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>03/08/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>03/10/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>03/15/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>03/17/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>03/22/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>03/24/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>03/29/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>03/31/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>04/05/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>04/07/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>04/12/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>04/14/21</td>
    </tr>


    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>04/19/21</td>
    </tr>




    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>04/21/21</td>
    </tr>

    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>04/23/21</td>
    </tr>

    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>
                </select>
            </form>
        </td>
        <td>04/28/21</td>
    </tr>

    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Absent">Absent</option>

                </select>
            </form>
        </td>
        <td>04/30/21</td>
    </tr>

    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>


                </select>
            </form>
        </td>
        <td>05/03/21</td>
    </tr>

    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>

                </select>
            </form>
        </td>
        <td>05/05/21</td>
    </tr>

    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>


                </select>
            </form>
        </td>
        <td>05/10/21</td>
    </tr>

    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Absent">Absent</option>

                </select>
            </form>
        </td>
        <td>05/12/21</td>
    </tr>

    <tr>
        <td>James Peng</td>
        <td><form action="action_page.php">
                <label for="attend">----</label>
                <select id="attend" name="attend">
                    <option value="Present">Present</option>


                </select>
            </form>
        </td>
        <td>05/17/21</td>
    </tr>



    </tbody>
</table>

</body>
</div>
</html>
