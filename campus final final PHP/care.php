<!-- Jai Shree Ram -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include 'head.php';
    ?>
    <link rel="stylesheet" href="style/shuttle_service.css">
    <style>
      #activeNow13{
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
          <h3 class="stats-border-bottom h-5">Day Care Facility</h3>
        </center>
        <div class="box11">
            <ul>
              <li style="padding: 5px 0">
                <strong>Location:</strong>Block 30/101, Faculty & Staff Housing
              </li>
              <li style="padding: 5px 0">
                <strong>Timing:</strong>Monday to Friday from 9:00 AM to 6:00 PM
                & Morning Program from 10:00 AM to 01:00 PM
              </li>
              <li style="padding: 5px 0">
                <strong>Contact:</strong>7923951111
              </li>
              <li style="padding: 5px 0">
                <strong>Email: </strong
                ><a href="mailto:daycare@iitgn.ac.in">daycare@iitgn.ac.in</a>
              </li>
            </ul>
            <img src="images/daycare1.jpg" alt="" >
          
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