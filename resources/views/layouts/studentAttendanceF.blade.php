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
          <a href="faculty" class="buttonHome"><img src='/images/saturn1.png' alt="logo" >
      <div class="dropdown" style="float:right;">
          <button class="dropbtn">{{Auth::user()->name}}</button>
          <div class="dropdown-content">
          <a href="/MyInfoF">My Info</a>
          <a href="/logout">Log out</a>

        </div>
      </div>
    </div>

    </ul>
</head>

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
        <td><form action="/action_page">
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
        <td><form action="/action_page">
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
        <td><form action="/action_page">
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
        <td><form action="/action_page">
          <label for="attend">----</label>
            <select id="attend" name="attend">
                <option value="Present">Present</option>

                      </select>
              </form>
          </td>
        <td>04/30/21</td>
      </tr>

      <tr>
        <td>James Peng</td>
        <td><form action="/action_page">
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
        <td><form action="/action_page">
          <label for="attend">----</label>
            <select id="attend" name="attend">
              <option value="select">-select-</option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>

                      </select>
              </form>
          </td>
        <td>05/05/21</td>
      </tr>

      <tr>
        <td>James Peng</td>
        <td><form action="/action_page">
          <label for="attend">----</label>
            <select id="attend" name="attend">
                <option value="select">-select-</option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>

                      </select>
              </form>
          </td>
        <td>05/10/21</td>
      </tr>

      <tr>
        <td>James Peng</td>
        <td><form action="/action_page">
          <label for="attend">----</label>
            <select id="attend" name="attend">
                <option value="select">-select-</option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>

                      </select>
              </form>
          </td>
        <td>05/12/21</td>
      </tr>

      <tr>
        <td>James Peng</td>
        <td><form action="/action_page">
          <label for="attend">----</label>
            <select id="attend" name="attend">
                <option value="select">-select-</option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>

                      </select>
              </form>
          </td>
        <td>05/17/21</td>
      </tr>

      <tr>
        <td>James Peng</td>
        <td><form action="/action_page">
          <label for="attend">----</label>
            <select id="attend" name="attend">
              <option value="select">-select-</option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
                      </select>
              </form>
          </td>
        <td>05/19/21</td>
      </tr>


    </tbody>
  </table>

</body>
</div>
</html>
