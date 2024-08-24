<!-- Jai Shree Ram -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include 'head.php';
    ?>
    <link rel="stylesheet" href="style/shuttle_service.css">
    <style>
      #activeNow6{
        background-color: white; 
        border-radius:10px;

      }
    </style>
  </head>

  <body>
    <header>
        <?php
            include 'navbar.php';
        ?>
    </header>
    <div class="box">
        <?php
            include 'aside.php';
        ?>
        <div class="content">
        <a id="go-back-button" href="facilities.php" class="anchor-tag"
          ><img src="images/move-left.png" alt="" >Back</a
        >
        <center>
          <h3 class="stats-border-bottom h-5">Medical Facility</h3>
        </center>

        <div class="col-md-8" style="margin: auto" id="medical-box">
          <p>
            <strong>Location:</strong> First floor of the Central Arcade, IITGN
            Campus
          </p>
          <p><strong>Contact:</strong> 1116 (VOIP)</p>
          <p><b>Emergency Contact:</b> 7069795000</p>
          <p>
            <b>For more details please </b>
            <a href="https://iitgn.ac.in/medicalcenter" target="_blank"
              ><u
                >Visit here
                <img
                  height="15"
                  width="15"
                  src="images/square-arrow-out-up-right.png"
                  alt="" ></u
            ></a>
          </p>
          <br >
          <table style="width: 100%; line-height: 30px">
            <tbody>
              <tr>
                <th><span style="color: #ff0000">Monday To Friday</span></th>
              </tr>
              <tr>
                <th><u>Doctor</u></th>
                <th><u>Timing</u></th>
              </tr>
              <tr>
                <td>Dr. K V Mehta</td>
                <td>09:30 hrs to 11:30 hrs</td>
              </tr>
              <tr>
                <td>Dr. Deepa Shah</td>
                <td>13:30 hrs to 16:30 hrs</td>
              </tr>
              <tr>
                <td>Dr. Bhavesh Panchal</td>
                <td>16:00 hrs to 18:00 hrs</td>
              </tr>

              <tr>
                <td>
                  Dr. Mira Butani<br >
                  <em>(Gynaecologist)</em>
                </td>
                <td>
                  13:30 hrs to 14:30 hrs <br ><em>(Monday &amp; Thursday)</em>
                </td>
              </tr>
              <tr>
                <td>Dr. Arvind Chauhan <em>(Physiotherapy)</em></td>
                <td>17:30 hrs to 19:30 hrs</td>
              </tr>
              <tr>
                <td>Mrs. Priyam Sharma Khanna <em>(Dietician)</em></td>
                <td>
                  14:00 hrs to 16:00 hrs <br ><em>(Tuesday &amp; Friday)</em>
                </td>
              </tr>

              <tr>
                <td colspan="2">
                  <hr
                    style="
                      border: 0;
                      height: 1px;
                      background: #333;
                      background-image: linear-gradient(
                        to right,
                        #ccc,
                        #333,
                        #ccc
                      );
                    "
                  >
                </td>
              </tr>
              <tr>
                <th>
                  <p><span style="color: #ff0000">Saturday </span></p>
                </th>
              </tr>
            </tbody>
          </table>
          <table style="font-weight: 400" width="90%">
            <tbody>
              <tr>
                <td width="385">
                  <p><strong>Doctor</strong></p>
                </td>
                <td width="385">
                  <p><strong>Timings</strong></p>
                </td>
              </tr>
              <tr>
                <td width="385"><p>Dr. K V Mehta</p></td>
                <td width="385"><p>09:30 hrs to 11:30 hrs</p></td>
              </tr>
              <tr>
                <td width="385"><p>Dr. Bhavesh Panchal</p></td>
                <td width="385"><p>13:30 hrs to 15:30 hrs</p></td>
              </tr>
              <tr>
                <td width="385">
                  <p>
                    Dr. Arvind Chauhan<br >
                    (Physiotherapy)
                  </p>
                </td>
                <td width="385"><p>17:30 hrs to 19:30 hrs</p></td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr
                    style="
                      border: 0;
                      height: 1px;
                      background: #333;
                      background-image: linear-gradient(
                        to right,
                        #ccc,
                        #333,
                        #ccc
                      );
                    "
                  >
                </td>
              </tr>
            </tbody>
          </table>
          <br >
          <br >
        </div>
      </div>
    </div>

    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
    <script src="js/up_down.js"></script>
    </body>
</html>