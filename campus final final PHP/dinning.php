<!-- Jai Shree Ram -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include 'head.php';
    ?>
    <link rel="stylesheet" href="style/shuttle_service.css">
    <style>
      #activeNow4{
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
        <a id="go-back-button" href="/facilities.php" class="anchor-tag"
          ><img src="images/move-left.png" alt="" >Back</a
        >
        <center>
          <h3 class="stats-border-bottom h-5">Hostel Dining Facility</h3>
        </center>
        <div>
          <table
            width="98%"
            style="
              margin-left: 2%;
              text-align: center;
              border-collapse: collapse;
              border: 2px solid rgb(0, 0, 0);
            "
            border="2"
          >
            <tbody>
              <tr>
                <td style="width: 19.7879%; border: 2px solid rgb(0, 0, 0)">
                  <p><strong>Meal</strong></p>
                </td>
                <td style="width: 44.4595%; border: 2px solid rgb(0, 0, 0)">
                  <p><strong>Timing&nbsp;</strong></p>
                </td>
                <td style="width: 35.7207%; border: 2px solid rgb(0, 0, 0)">
                  <p><strong>Price&nbsp;</strong></p>
                </td>
              </tr>
              <tr>
                <td style="width: 19.7879%; border: 2px solid rgb(0, 0, 0)">
                  <p>Breakfast&nbsp;</p>
                </td>
                <td style="width: 44.4595%; border: 2px solid rgb(0, 0, 0)">
                  <p>7:30 AM to 9:30 AM (Mon to Fri) &nbsp;</p>
                  <p>8:00 AM to 10:00 AM (Sat &amp; Sun)&nbsp;</p>
                </td>
                <td style="width: 35.7207%; border: 2px solid rgb(0, 0, 0)">
                  <p>&nbsp; &nbsp;₹ 47 (For all the mess)&nbsp;</p>
                </td>
              </tr>
              <tr>
                <td style="width: 19.7879%; border: 2px solid rgb(0, 0, 0)">
                  <p>Lunch&nbsp;</p>
                </td>
                <td style="width: 44.4595%; border: 2px solid rgb(0, 0, 0)">
                  <p>12:15 PM to 2:15 PM&nbsp;</p>
                </td>
                <td style="width: 35.7207%; border: 2px solid rgb(0, 0, 0)">
                  <p>&nbsp;₹ 65 (Jaiswal &amp; Mohani Mess) &nbsp;&nbsp;</p>
                </td>
              </tr>
              <tr>
                <td style="width: 19.7879%; border: 2px solid rgb(0, 0, 0)">
                  <p>Snacks&nbsp;</p>
                </td>
                <td style="width: 44.4595%; border: 2px solid rgb(0, 0, 0)">
                  <p>4:30 PM to 6:00 PM&nbsp;</p>
                </td>
                <td style="width: 35.7207%; border: 2px solid rgb(0, 0, 0)">
                  <p>&nbsp;₹ 32 (Jaiswal &amp; Mohani Mess)</p>
                </td>
              </tr>
              <tr>
                <td style="width: 19.7879%; border: 2px solid rgb(0, 0, 0)">
                  <p>Dinner&nbsp;</p>
                </td>
                <td style="width: 44.4595%; border: 2px solid rgb(0, 0, 0)">
                  <p>7:30 PM to 9:30 PM&nbsp;</p>
                </td>
                <td style="width: 35.7207%; border: 2px solid rgb(0, 0, 0)">
                  <p>₹ 65 ( Jaiswal &amp; Mohani Mess)</p>
                </td>
              </tr>
            </tbody>
          </table>
          <h6 style="margin-left: 2%; padding-top: 20px;">
            * For menu details
            <a
              href="https://docs.google.com/spreadsheets/d/103vvt6ixPu-mI8asJGKhKsWjXEMXf6v6T8iOpowb7NM/edit#gid=0"
              target="_blank"
              >Click here</a
            >
            <img
              src="images/square-arrow-out-up-right.png"
              style="height: 13px; width: 13px"
            >
          </h6>
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