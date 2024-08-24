<!-- Jai Shree Ram -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include 'head.php';
    ?>
    <link rel="stylesheet" href="style/shuttle_service.css">
    <style>
      #activeNow9{
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
          <h3 class="stats-border-bottom h-5">Campus Security 24x7</h3>
        </center>
        <div class="box11">
          <ul id="security">
            <li>
              <strong>Security supervisor hot line: </strong>7567935473
              (available 24 x7)
            </li>
            <li>
              <strong>Security supervisor:</strong> Manubhai Chaudhari | Amrut
              Rathod | Suresh Singh | Kesar Singh | Devi Singh | Sumit Kumar
            </li>
            <li>
              <strong>Security officer: </strong>Prakash Kumar<br >
              <strong>Contact: </strong> 8690971431
            </li>
          </ul>
          <img src="images/security.jpg" alt="" >
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