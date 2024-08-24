<!-- Jai Shree Ram -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include 'head.php';
    ?>
    <link rel="stylesheet" href="style/shuttle_service.css">
    <style>
      #activeNow7{
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
          <h3 class="stats-border-bottom h-5">laundary Service</h3>
        </center>
        <ul>
          <table style="width: 90%" id="laundary">
            <tbody>
              <tr>
                <th style="width: 20%"><u>Hostel</u></th>
                <th style="width: 35%"><u>Timings (09:00 AM Pickup)</u></th>
              </tr>

              <tr>
                <td>Aibaan</td>
                <td>Wednesday, Saturday</td>
              </tr>

              <tr>
                <td>Beauki</td>
                <td>Monday, Thursday</td>
              </tr>

              <tr>
                <td>Duven</td>
                <td>Monday, Thursday</td>
              </tr>

              <tr>
                <td>Emiet</td>
                <td>Tuesday, Friday</td>
              </tr>
              <tr></tr>
              <tr>
                <td>Firpeal</td>
                <td>Monday, Thursday</td>
              </tr>
              <tr>
                <td>Griwiksh</td>
                <td>Monday, Thursday</td>
              </tr>
              <tr>
                <td>Hiqom</td>
                <td>Tuesday, Friday</td>
              </tr>
              <tr>
                <td>Ijokha</td>
                <td>Wednesday, Saturday</td>
              </tr>
              <tr>
                <td>Jurqia</td>
                <td>Wednesday, Saturday</td>
              </tr>
            </tbody>
          </table>
          <br ><br >
          <div class="container">
            <strong
              >Tagging will be done directly after pickup from the respective
              hostel laundry rooms</strong
            >
            <br ><br >
            <strong>Delivery of clothes </strong>: Within TWO days from the day
            of collection to respective hostel blocks.<br >
            <strong>Delivery Time:</strong> 12 noon to 2 PM <br >
            <b
              >For Laundry Rate Card
              <a href="pdf/Laundry_Services_rates.pdf" target="_blank"
                >Click here<img src="images/square-arrow-out-up-right.png" ></a
              >.</b
            >
          </div>
        </ul>
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