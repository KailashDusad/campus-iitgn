<!-- Jai Shree Ram -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include 'head.php';
    ?>
    <link rel="stylesheet" href="style/shuttle_service.css">
    <style>
      #activeNow12{
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
          <h3 class="stats-border-bottom h-5">Dog & Pet Policies</h3>
        </center>
        <div class="box11">
          <ul>
            <li>Pet dogs are to be leased and cleaned up after</li>
            <li>
              No feeding and petting of dogs within the academic and
              administrative area
            </li>
            <li>
              If you wish to report any animal-related issue on campus, please
              feel free to write to
              <a href="mailto:amc@iitgn.ac.in" style="color: blue"
              >amc@iitgn.ac.in</a
              >
            </li>
          </ul>
          <img src="images/petpolicy.jpg" alt="" >
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