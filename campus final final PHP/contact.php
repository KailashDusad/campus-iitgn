<!-- Jai Shree Ram -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include 'head.php';
        ?>
  </head>

  <body>
    <header>
        <?php
            include 'navbar.php';
        ?>
        <link rel="stylesheet" href="style/home.css">
    </header>

    <div class="container">
      <center>
        <h3 class="stats-border-bottom h-5">Contact Us</h3>
      </center>
      <div
        style="display: flex; justify-content: space-evenly; flex-wrap: wrap"
      >
        <div>
          <h4>Indian Institute of Technology, Gandhinagar</h4>
          <h6>Palaj, Gandhinagar - 382055, Gujarat</h6>
          <h5 class="stats-border-bottom h-5" style="font-size: 20px">
            How to Reach
          </h5>

          <ul class="hvr-grow11" style="list-style: disc">
            <li>
              <a href="pdf/airport.pdf" target="_blank" class="anchor-tag"
                >From Ahmedabad Airport
                <img
                  src="images/square-arrow-out-up-right.png"
                  style="height: 13px; width: 13px"
              ></a>
            </li>
            <li>
              <a href="pdf/station-car.pdf" target="_blank" class="anchor-tag"
                >From Kalupur Station via Taxi/Auto
                <img
                  src="images/square-arrow-out-up-right.png"
                  style="height: 13px; width: 13px"
              ></a>
            </li>
            <li>
              <a href="pdf/station-bus.pdf" target="_blank" class="anchor-tag"
                >From Kalupur Station via Bus
                <img
                  src="images/square-arrow-out-up-right.png"
                  style="height: 13px; width: 13px"
              ></a>
            </li>
          </ul>
        </div>

        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.8190114258846!2d72.68309147536336!3d23.213265579040517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c2adec1f16d8d%3A0xdc447b8706689bc3!2sIndian%20Institute%20Of%20Technology%20Gandhinagar%20(IIT%20Gandhinagar)!5e0!3m2!1sen!2sin!4v1709409905181!5m2!1sen!2sin"
          allowfullscreen=""
          id="map"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>

    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
    </body>
</html>