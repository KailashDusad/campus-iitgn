<!-- Jai Shree Ram -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include 'head.php';
    ?>
    <link rel="stylesheet" href="style/shuttle_service.css">
    <style>
      #activeNow10{
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
          <h3 class="stats-border-bottom h-5">Campus Maps</h3>
        </center>
        <div class="box11" style="justify-content: space-evenly">
          <div>
            <ul style="display: flex; flex-direction: column">
              <li style="padding: 5px 0">
                <a
                  href="pdf/Reaching IITGN.pdf"
                  target="_blank"
                  class="anchor-tag"
                  >Reaching IITGN </a
                ><img
                  height="15"
                  width="15"
                  src="images/square-arrow-out-up-right.png"
                  alt=""
                >
              </li>
              <li style="padding: 5px 0">
                <a href="pdf/masterplan.pdf" target="_blank" class="anchor-tag"
                  >Master Plan </a
                ><img
                  height="15"
                  width="15"
                  src="images/square-arrow-out-up-right.png"
                  alt=""
                >
              </li>
              <li style="padding: 5px 0">
                <a
                  href="pdf/ACADEMIC_MASTER_PLAN.pdf"
                  target="_blank"
                  class="anchor-tag"
                  >Academic Area </a
                ><img
                  height="15"
                  width="15"
                  src="images/square-arrow-out-up-right.png"
                  alt=""
                >
              </li>
              <li style="padding: 5px 0">
                <a
                  href="pdf/student_housing.pdf"
                  target="_blank"
                  class="anchor-tag"
                  >Student Housing </a
                ><img
                  height="15"
                  width="15"
                  src="images/square-arrow-out-up-right.png"
                  alt=""
                >
              </li>
              <li style="padding: 5px 0">
                <a
                  href="pdf/housing key plan.pdf"
                  target="_blank"
                  class="anchor-tag"
                  >Housing Key Plan </a
                ><img
                  height="15"
                  width="15"
                  src="images/square-arrow-out-up-right.png"
                  alt=""
                >
              </li>
            </ul>
          </div>
          <img src="images/map.png" alt="" >

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