<!-- Jai Shree Ram -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include 'head.php';
    ?>
    <link rel="stylesheet" href="style/shuttle_service.css">
    <link rel="stylesheet" href="style/green.css" >
    <style>
      #activeNow3{
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
          <h3 class="stats-border-bottom h-5">
            Green Shuttle (EECO Car) Schedule
          </h3>
        </center>
        <table
          border="1"
          cellspacing="0"
          cellpadding="0"
          width="100%"
          align="center"
          style="margin-bottom: 50px;"
        >
          <tbody>
            <tr>
              <td class="table-content" colspan="2">
                <p style="color: green; text-align: center">
                  <strong>Vehicle 1</strong><strong> </strong>
                </p>
              </td>
              <td class="table-content" colspan="2" align="center">
                <p style="color: green; text-align: center">
                  <strong>Vehicle 2</strong><strong> </strong>
                </p>
              </td>
            </tr>
            <tr style="color: red">
              <td class="table-content">
                <p align="center"><strong>Venue</strong><strong> </strong></p>
              </td>
              <td class="table-content">
                <p align="center"><strong>Time</strong><strong> </strong></p>
              </td>
              <td class="table-content">
                <p align="center"><strong>Venue</strong><strong> </strong></p>
              </td>
              <td class="table-content">
                <p align="center"><strong>Time</strong><strong> </strong></p>
              </td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">8:00</p></td>
              <td class="table-content"><p align="center">-</p></td>
              <td class="table-content"><p align="center">-</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">8:15</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">8:15</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">8:30</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">8:30</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">8:45</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">8:45</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">9:00</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">9:00</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">9:15</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">9:15</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">9:30</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">9:30</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">9:45</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">9:45</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">10:00</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">10:00</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">10:15</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">10:15</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">10:30</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">10:30</p></td>
            </tr>
            <tr>
              <td class="table-content" colspan="2">
                <p align="center" style="color: red"><strong>Break</strong></p>
              </td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">10:45</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">11:15</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">11:00</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">11:30</p></td>
              <td class="table-content" colspan="2">
                <p align="center" style="color: red"><strong>Break</strong></p>
              </td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">11:45</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">11:45</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">12:00</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">12:00</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">12:15</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">12:15</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">12:30</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">12:30</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">12:45</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">12:45</p></td>
            </tr>
            <tr>
              <td class="table-content" colspan="2">
                <p align="center" style="color: red"><strong>Break</strong></p>
              </td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">1:00</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">2:00</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">1:15</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">2:15</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">1:30</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">2:30</p></td>
              <td class="table-content" colspan="2">
                <p align="center" style="color: red"><strong>Break </strong></p>
              </td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">2:45</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">2:45</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">3:00</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">3:00</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">3:15</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">3:15</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">3:30</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">3:30</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">3:45</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">3:45</p></td>
            </tr>
            <tr>
              <td class="table-content" colspan="2">
                <p align="center" style="color: red">
                  <strong>Break</strong><strong> </strong>
                </p>
              </td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">4:00</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">4:30</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">4:15</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">4:45</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">4:30</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">5:00</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">4:45</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">5:15</p></td>
              <td class="table-content" colspan="2">
                <p align="center" style="color: red">
                  <strong>Break</strong><strong> </strong>
                </p>
              </td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">5:30</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">5:30</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">5:45</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">5:45</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">6:00</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">6:00</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">6:15</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">6:15</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">6:30</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">6:30</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">6:45</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">6:45</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">7:00</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">7:00</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">7:15</p></td>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">7:15</p></td>
            </tr>
            <tr>
              <td class="table-content"><p align="center">HBP</p></td>
              <td class="table-content"><p align="center">7:30</p></td>
              <td class="table-content"><p align="center">AB6</p></td>
              <td class="table-content"><p align="center">7:30</p></td>
            </tr>
          </tbody>
        </table>
        <table
          style="
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
            
          "
        >
          <tbody>
            <tr>
              <td class="table-content" colspan="2">
                <p align="center" style="color: green">
                  <strong>Starting Time at Venue</strong><strong> </strong>
                </p>
              </td>
            </tr>
            <tr style="color: red">
              <td class="table-content">
                <p align="center"><strong>Academic Block 6 (AB6)</strong></p>
              </td>
              <td class="table-content">
                <p align="center">
                  <strong>Housing Block Parking (HBP)</strong>
                </p>
              </td>
            </tr>
            <tr>
              <td class="table-content">
                <p align="center">8:15, 8:30, 8:45 (AM)</p>
              </td>
              <td class="table-content">
                <p align="center">8:00, 8:15, 8:30, 8:45 (AM)</p>
              </td>
            </tr>
            <tr>
              <td class="table-content">
                <p align="center">9:00, 9:15, 9:30, 9:45 (AM)</p>
              </td>
              <td class="table-content">
                <p align="center">9:00, 9:15, 9:30, 9:45 (AM)</p>
              </td>
            </tr>
            <tr>
              <td class="table-content">
                <p align="center">10:00, 10:15, 10:30 (AM)</p>
              </td>
              <td class="table-content">
                <p align="center">10:00, 10:15, 10:30, 10:45 (AM)</p>
              </td>
            </tr>
            <tr>
              <td class="table-content">
                <p align="center">11:00, 11:15, 11:45 (AM)</p>
              </td>
              <td class="table-content">
                <p align="center">11:30, 11:45 (AM)</p>
              </td>
            </tr>
            <tr>
              <td class="table-content">
                <p align="center">12:00, 12:15, 12:30, 12:45 (PM)</p>
              </td>
              <td class="table-content">
                <p align="center">12:00, 12:15, 12:30, 12:45 (PM)</p>
              </td>
            </tr>
            <tr>
              <td class="table-content">
                <p align="center">1:00, 1:30 (PM)</p>
              </td>
              <td class="table-content"><p align="center">1:15 (PM)</p></td>
            </tr>
            <tr>
              <td class="table-content">
                <p align="center">2:15, 2:45 (PM)</p>
              </td>
              <td class="table-content">
                <p align="center">2:00, 2:30, 2:45 (PM)</p>
              </td>
            </tr>
            <tr>
              <td class="table-content">
                <p align="center">3:00, 3:15, 3:30, 3:45 (PM)</p>
              </td>
              <td class="table-content">
                <p align="center">3:00, 3:15, 3:30, 3:45 (PM)</p>
              </td>
            </tr>
            <tr>
              <td class="table-content">
                <p align="center">4:00,&nbsp; 4:30, 4:45 (PM)</p>
              </td>
              <td class="table-content">
                <p align="center">4:15, 4:30, 4:45 (PM)</p>
              </td>
            </tr>
            <tr>
              <td class="table-content">
                <p align="center">5:15, 5:30, 5:45 (PM)</p>
              </td>
              <td class="table-content">
                <p align="center">5:00, 5:30, 5:45 (PM)</p>
              </td>
            </tr>
            <tr>
              <td class="table-content">
                <p align="center">6:00, 6:15, 6:30, 6:45 (PM)</p>
              </td>
              <td class="table-content">
                <p align="center">6:00, 6:15, 6:30, 6:45 (PM)</p>
              </td>
            </tr>
            <tr>
              <td class="table-content">
                <p align="center">7:00, 7:15, 7:30 (PM)</p>
              </td>
              <td class="table-content">
                <p align="center">7:00, 7:15, 7:30 (PM)</p>
              </td>
            </tr>
          </tbody>
        </table>
        
        <h6 style="padding-top: 20px;">
          * For more details about schedule of Green Shuttle (EECO Car)
          <a href="pdf/EECO_Shuttle_Schedule_and_Route.pdf" target="_blank"
            >Click here</a
          >
          <img
            src="images/square-arrow-out-up-right.png"
            style="height: 13px; width: 13px"
          >
        </h6>
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