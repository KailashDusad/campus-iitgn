<!-- Jai Shree Ram -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include 'head.php';
    ?>
    <link rel="stylesheet" href="style/shuttle_service.css">
    <style>
      #activeNow8{
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
          <h3 class="stats-border-bottom h-5">Maintenance</h3>
        </center>
        <div class="box11">
          <ul>
            <li>
              For all maintenance requests use the online portal
              <a
                href="https://maintenance.iitgn.ac.in"
                target="_blank"
                style="color: #0066ff"
                ><u>http://maintenance.iitgn.ac.in</u></a
                >
              </li>
            </ul>
            <img src="images/technician1.png" alt="" >
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