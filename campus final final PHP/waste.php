<!-- Jai Shree Ram -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include 'head.php';
    ?>
    <link rel="stylesheet" href="style/shuttle_service.css">
    <style>
      #activeNow11{
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
          <h3 class="stats-border-bottom h-5">Waste Management Guidelines</h3>
        </center>
        <div
          style="
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            align-items: center;
          "
        >
          <div style="padding-left: 20px">
            <ul>
              <li id="Segregation">
                Segregation of waste is compulsory (both for residents and
                visitors)
              </li>
            </ul>
            <div id="green">
              <h5>Green :</h5>
              <h6 style="margin-left: 3%">
                <span style="color: black">Output: </span>
                <span style="color: #448c4e">Electricity and Manure</span>
              </h6>
              <p>
                - Goes directly to the biogas plant and hence must be
                well-segregated.
              </p>
              <p>
                - No paper, plastic, wrappers, disposable cups, etc. please.
              </p>
            </div>
            <div id="red">
              <h5>Red :</h5>
              <h6 style="margin-left: 3%">
                <span style="color: black">Output: </span>
                <span style="color: #d72519">Landfill</span>
              </h6>
              <p>
                - Goes to a landfill and is obviously not good for the
                environment.
              </p>
              <p>
                - Anything that you are not sure about, it is best to put in
                this category.
              </p>
            </div>
            <div id="blue">
              <h5>Blue :</h5>
              <h6 style="margin-left: 3%">
                <span style="color: black">Output: </span>
                <span style="color: #1c73e4">Recycled products</span>
              </h6>
              <p>- Goes to recycling center</p>
              <p>
                - No wet or contaminated paper or plastic that has food or oil,
                or wet liquid, etc.
              </p>
            </div>
          </div>
          <a href="images/wmposter.jpg"
            ><img height="300" width="300" src="images/waste2.jpg" alt=""
          ></a>
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