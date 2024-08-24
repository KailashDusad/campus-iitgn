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
    </header>
    <div class="carousel container-fluid">
      <div class="list">
        
        <div class="item"><img src="images/campus1.jpg" ></div>
        <div class="item"><img src="images/campus13.jpg" ></div>
        <div class="item"><img src="images/campus12.jpg" ></div>
        <div class="item"><img src="images/campus14.jpg" ></div>
        <div class="item"><img src="images/campus8.jpg" ></div>
        <div class="item"><img src="images/campus1.jpg" ></div>
        <div class="item"><img src="images/campus8.jpg" ></div>
        <!-- <div class="item"><img src="images/om1.png" ></div>
        <div class="item"><img src="images/om2.jpg" ></div>
        <div class="item"><img src="images/om3.jpg" ></div>
        <div class="item"><img src="images/om4.jpg" ></div>
        <div class="item"><img src="images/om5.jpg" ></div>
        <div class="item"><img src="images/om6.jpg" ></div>
        <div class="item"><img src="images/om7.jpg" ></div> -->
      </div>
      <!-- <div class="thumbnail">
            <div class="item">
                <img src="images/campus1.jpg">
            </div>
            <div class="item">
                <img src="images/campus13.jpg"> 
            </div>
            <div class="item">
                <img src="images/campus12.jpg"> 
            </div>
            <div class="item">
                <img src="images/campus14.jpg">  
            </div>
            <div class="item">
                <img src="images/campus8.jpg"> 
            </div>
            <div class="item">
                <img src="images/campus1.jpg"> 
            </div>
            <div class="item">
                <img src="images/campus8.jpg"> 
            </div>
            
      </div> -->
      <!-- <button
        id="update"
        class="navbar-toggler text-on-slides"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#information-card"
        aria-controls="information-card"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        New Update
      </button> -->

      <div
        class="text-on-slides font-color navbar-collapse"
        id="information-card"
      >
        <!-- <h2 style="text-align: center">IITGN</h2> -->
        <p style="text-align: start; padding: 5px 20px">
        IIT Gandhinagar was founded in 2008 and is located in Palaj, Gandhinagar, Gujarat on the banks of river Sabarmati. IITGN is rated India’s first 5-star GRIHA LD (Green) campus for minimizing the negative impact on the environment. The campus has been declared India’s first 5-star campus for ensuring food safety and promoting healthy eating.
        </p>
      </div>
      <div class="arrows">
        <!-- <p>IITGN</p> -->
        <button id="prev"><</button>
        <button id="next">></button>
      </div>
      <div class="time"></div>
    </div>

    <!--Campus Highlights -->
    <center>
      <h3 class="stats-border-bottom h-5">Campus Highlights</h3>
    </center>
    <div class="album py-5 bg-body-tertiary">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col mb-2" id="housing">
            <div class="card shadow-sm">
              <img
                class="bd-placeholder-img card-img-top"
                width="100%"
                height="225px"
                loading="lazy"
                src="images/om3.jpg"
              >
              <div class="card-body">
                <h2 class="fw-normal stats-border-bottom h-5">Housing</h2>
                <div
                  class="d-flex justify-content-between align-items-start overf"
                >
                  <ul class="card-text">
                    <li>
                      6 hostel blocks accommodating both UG and PG students
                    </li>
                    <li>Each block having a capacity of about 200 students</li>
                    <li>A common hostel library and reading area</li>
                    <li>
                      Specially designed to be accessable to persons with
                      disablities
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col mb-2" id="sports">
            <div class="card shadow-sm">
              <img
                class="bd-placeholder-img card-img-top"
                width="100%"
                height="225"
                loading="lazy"
                src="images/sports.jpg"
              >
              <div class="card-body">
                <h2 class="fw-normal stats-border-bottom h-5">Sports</h2>
                <div
                  class="d-flex justify-content-between align-items-start overf"
                >
                  <ul class="card-text">
                    <li>Football field</li>
                    <li>Cricket field</li>
                    <li>Volleyball courts</li>
                    <li>Basketball courts</li>
                    <li>Jogging track</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-2" id="space">
            <div class="card shadow-sm">
              <!-- <img class="bd-placeholder-img card-img-top" width="100%" height="225" loading="lazy" src="../static/sports.jpg"> -->
              <img
                class="bd-placeholder-img card-img-top"
                width="100%"
                height="225"
                loading="lazy"
                src="images/om1.png"
              >
              <div class="card-body">
                <h2 class="fw-normal stats-border-bottom h-5">Space</h2>
                <div
                  class="d-flex justify-content-between align-items-start overf"
                >
                  <ul class="card-text">
                    <li>Terrace gardens</li>
                    <li>Riverside promenade</li>
                    <li>Rooftop open air theatres</li>
                    <li>Jal mandaps</li>
                    <li>Central vista</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col mb-2" id="dining">
            <div class="card shadow-sm">
              <!-- <img class="bd-placeholder-img card-img-top" width="100%" height="225" loading="lazy" src="../static/sports.jpg"> -->
              <img
                class="bd-placeholder-img card-img-top"
                width="100%"
                height="225"
                loading="lazy"
                src="images/dining.jpg"
              >
              <div class="card-body">
                <h2 class="fw-normal stats-border-bottom h-5">Dining</h2>
                <div
                  class="d-flex justify-content-between align-items-start overf"
                >
                  <ul class="card-text">
                    <li>Central dining facility for all students</li>
                    <li>Two independent mess facilities</li>
                    <li>Modern and well equipped kitchens</li>
                    <li>A variety of food spread across the campus</li>
                    <li>A large central cafeteria with open air seating</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-2" id="numbers">
            <div class="card shadow-sm">
              <!-- <img class="bd-placeholder-img card-img-top" width="100%" height="225" loading="lazy" src="../static/sports.jpg"> -->
              <img
                class="bd-placeholder-img card-img-top"
                width="100%"
                height="225"
                loading="lazy"
                src="images/green111.jpeg"
              >
              <div class="card-body">
                <h2 class="fw-normal stats-border-bottom h-5">
                  Campus in Numbers
                </h2>
                <div
                  class="d-flex justify-content-between align-items-start overf"
                >
                  <ul class="card-text">
                    <li>400 Acres land area on banks of Savarmati river</li>
                    <li>6 Architectural Firms collaborated for the venture</li>
                    <li>100 Feet tall landmark Lal Minar</li>
                    <li>8000 Students accommodated till date</li>
                    <li>3.5Km of riverfront adorning the campus</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-2" id="diversity">
            <div class="card shadow-sm">
              <img
                class="bd-placeholder-img card-img-top"
                width="100%"
                height="225"
                loading="lazy"
                src="images/diversity1.png"
              >
              <div class="card-body">
                <h2 class="fw-normal stats-border-bottom h-5">BIODIVERSITY</h2>
                <div
                  class="d-flex justify-content-between align-items-start overf"
                >
                  <ul class="card-text ">
                    <li><a href="pdf/butterflies-list.pdf" class="hvr-grow22 anchor-tag">Campus Butterflies (18) <img src="images/square-arrow-out-up-right.png" style="height: 16px; width:16px;" alt=""></a></li>
                    <li><a href="pdf/birds-list.pdf" class="hvr-grow22 anchor-tag"> Campus Birds - List (101) <img src="images/square-arrow-out-up-right.png" style="height: 16px; width:16px;" alt=""></a></li>
                    <li><a href="pdf/birds-photos.pdf" class="hvr-grow22 anchor-tag">Campus Birds - Photos (22) <img src="images/square-arrow-out-up-right.png" alt="" style="height: 16px; width:16px;"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="focus" id="focus">
        <div class="container">
          <div class="row">
            <div
              class="col-lg-3 col-sm-3 focus-box red wow fadeInLeft animated animated"
              data-wow-offset="30"
              data-wow-duration="1.5s"
              data-wow-delay="0.15s"
              style="
                visibility: visible;
                -webkit-animation-duration: 1.5s;
                -moz-animation-duration: 1.5s;
                animation-duration: 1.5s;
                -webkit-animation-delay: 0.15s;
                -moz-animation-delay: 0.15s;
                animation-delay: 0.15s;
              "
            >
              <div class="service-icon">
                <img src="images/green.png" class="philo-icon" >
              </div>
              <h5 class="red-border-bottom">Green Campus</h5>
              <p>
                A plethora of green initiatives are being undertaken in the
                campus
              </p>
            </div>
            <div
              class="col-lg-3 col-sm-3 focus-box green wow fadeInLeft animated animated"
              data-wow-offset="30"
              data-wow-duration="1.5s"
              data-wow-delay="0.15s"
              style="
                visibility: visible;
                -webkit-animation-duration: 1.5s;
                -moz-animation-duration: 1.5s;
                animation-duration: 1.5s;
                -webkit-animation-delay: 0.15s;
                -moz-animation-delay: 0.15s;
                animation-delay: 0.15s;
              "
            >
              <div class="service-icon">
                <img src="images/int.png" class="philo-icon" >
              </div>
              <h5 class="green-border-bottom">Interactive Campus</h5>
              <p>
                The campus has been designed to foster interdisciplinary and
                interbatch interactions
              </p>
            </div>
            <div
              class="col-lg-3 col-sm-3 focus-box blue wow fadeInRight animated animated"
              data-wow-offset="30"
              data-wow-duration="1.5s"
              data-wow-delay="0.15s"
              style="
                visibility: visible;
                -webkit-animation-duration: 1.5s;
                -moz-animation-duration: 1.5s;
                animation-duration: 1.5s;
                -webkit-animation-delay: 0.15s;
                -moz-animation-delay: 0.15s;
                animation-delay: 0.15s;
              "
            >
              <div class="service-icon">
                <img src="images/fno.png" class="philo-icon" >
              </div>
              <h5 class="blue-border-bottom">Free and Open Campus</h5>
              <p>
                The institute philosophy allows all kinds of new initiatives and
                experiments
              </p>
            </div>
            <div
              class="col-lg-3 col-sm-3 focus-box yellow wow fadeInRight animated animated"
              data-wow-offset="30"
              data-wow-duration="1.5s"
              data-wow-delay="0.15s"
              style="
                visibility: visible;
                -webkit-animation-duration: 1.5s;
                -moz-animation-duration: 1.5s;
                animation-duration: 1.5s;
                -webkit-animation-delay: 0.15s;
                -moz-animation-delay: 0.15s;
                animation-delay: 0.15s;
              "
            >
              <div class="service-icon">
                <img src="images/smart.png" class="philo-icon" >
              </div>
              <h5 class="yellow-border-bottom">SMART campus</h5>
              <p>
                A wide range of innovative technologies have been implemented to
                make an intelligent campus
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
    <script src="js/script.js"></script>
    

  </body>
</html>