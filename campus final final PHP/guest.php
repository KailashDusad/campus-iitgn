<!-- Jai Shree Ram -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include 'head.php';
    ?>
    <link rel="stylesheet" href="style/shuttle_service.css">
    <style>
      #activeNow2{
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
          <h3 class="stats-border-bottom h-5">Guest House</h3>
        </center>
        <div class="container">
          <ul>
            <li>
              <b>Guest House Reservation</b>
              <ul>
                <li>
                  IIT Gandhinagar Guest house features 4 floors of elegant and
                  spacious 85 rooms.
                </li>
                <li>12 Suite Rooms</li>
                <li>11 Double Bedded Room</li>
                <li>60 Twin Bedded Rooms</li>
                <li>02 Specially abled Rooms</li>
              </ul>
              <br >
              <p>
                For Guest House Reservation Form, please click
                <a
                  href="pdf/New_Reservation_Form_Guest House_IITGN_May_2023.pdf"
                  style="color: blue"
                  target="_blank"
                  ><u>here</u></a
                >
              </p>
              <p>
                For more information, please
                <a
                  href="https://guesthouse.iitgn.ac.in"
                  style="color: blue"
                  target="_blank"
                  ><u>visit website</u></a
                >
              </p>
            </li>
            <br >
            <li>
              <b>Guest House Dining</b>
              <table style="width: 100%">
                <tbody>
                  <tr>
                    <th style="width: 30%"><u>Meal</u></th>
                    <th style="width: 40%"><u>Timing</u></th>
                    <th style="width: 30%"><u>Price</u></th>
                  </tr>
                  <tr>
                    <td>Breakfast</td>
                    <td>8:00 AM to 9:30 AM</td>
                    <td>Rs. 125/-</td>
                  </tr>
                  <tr>
                    <td>Lunch</td>
                    <td>1:00 PM to 2:30 PM</td>
                    <td>Rs. 175/-</td>
                  </tr>
                  <tr>
                    <td>Dinner</td>
                    <td>8:00 PM to 9:30 PM</td>
                    <td>Rs. 175/-</td>
                  </tr>
                </tbody>
              </table>
            </li>
          </ul>
          <br >
          <ul>
            <li>
              <strong>For Advance Booking:</strong> <br >Please contact <br >
              Phone: 079 23951062 | 7069021583
            </li>
          </ul>
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