<!-- Jai Shree Ram -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include 'head.php';
    ?>
    <link rel="stylesheet" href="style/shuttle_service.css">
    <style>
      #activeNow5{
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
          <h3 class="stats-border-bottom h-5">Campus Outlets</h3>
        </center>
        <div class="container" id="suttle-box">
          <div class="table-responsive">
            <table class="table table-striped custom-table">
              <thead>
                <tr>
                  <th scope="col">Vender's Name</th>
                  <th scope="col">Place</th>
                  <th scope="col" class="width-set">Timing</th>
                  <th scope="col">Menu</th>
                </tr>
              </thead>
              <tbody>
                <tr scope="row">
                  <td>Atul Bakery</td>
                  <td>at Chimair</td>

                  <td class="width-set">01:00 PM to 02:00 AM</td>
                  <td>
                    <a href="pdf/abhay_bakery.pdf" target="_blank" class="more"><img src="images/icons8-food-menu-68.png" alt=""></a>
                  </td>
                </tr>
                <tr>
                  <td>Tea Post</td>
                  <td>at Emiet</td>

                  <td class="width-set">09:00 AM to 03:00 AM</td>
                  <td>
                    <a href="pdf/Tea_Post.pdf" target="_blank" class="more"><img src="images/icons8-food-menu-68.png" alt=""></a>
                  </td>
                </tr>
                <tr>
                  <td>Amul Store</td>
                  <td>at Duven</td>

                  <td class="width-set">
                    10:00 AM to 10:00 PM<br >
                    Break time: (8:15 PM to 8:45 PM)
                  </td>
                  <td><a href="" target="_blank" class="more"></a></td>
                </tr>
                <tr>
                  <td>Krupa General Store</td>
                  <td>at Duven</td>

                  <td class="width-set">
                    11:00 AM to 08:00 PM<br >
                    (Saturday closed)
                  </td>
                  <td><a href="" target="_blank" class="more"></a></td>
                </tr>
                <tr>
                  <td>Midas Touch Family Salon</td>
                  <td>at Aibaan - Beauki Street</td>

                  <td class="width-set">
                    10:00 AM to 07:00 PM (Monday to Friday)
                    <br >
                    10:00 AM to 08:00 PM (Saturday, Sunday)<br >
                    Lunch Break (all days): 01:00 PM to 02:00 PM
                  </td>
                  <td align-item="center">
                    <a
                      href="pdf/Midas_Touch_Family_Salon.pdf"
                      target="_blank"
                      class="more"
                      ><img
                        height="60"
                        width="60"
                        src="images/icons8-barbershop-30.png"
                        alt=""
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>2 Degree Café</td>
                  <td>
                    Academic Block-1 (Ground Floor)<br ><br >
                    Academic Block-4, Near Sabarmati Cafe
                  </td>

                  <td class="width-set">
                    09:30 AM to 11:00 PM<br ><br >0:30 AM to 8:00 PM (Second
                    Outlet)
                  </td>
                  <td>
                    <a href="pdf/2_Degree_Cafe.pdf" target="_blank" class="more"
                      ><img
                        height="30"
                        width="30"
                        src="images/icons8-food-menu-68.png"
                        alt="" ></a
                    ><br ><br ><a
                      href="pdf/2degree_second.pdf"
                      target="_blank"
                      class="more"
                      ><img
                        height="30"
                        width="30"
                        src="images/icons8-food-menu-68.png"
                        alt=""
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>Reprographic Facility</td>
                  <td>
                    Academic Block-3 <br >(near the Central Library entrance)
                  </td>

                  <td class="width-set">
                    10:00 AM to 06:30 PM<br >
                    (Sunday closed)
                  </td>
                  <td>
                    <a
                      href="pdf/reprographic_Rates.pdf"
                      target="_blank"
                      class="more"
                      ><img src="images/icons8-printer-50.png" alt=""
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>JK Grocery Store</td>
                  <td>
                    Firpeal Hostel<br >
                    (Near Panchayat Circle)
                  </td>

                  <td class="width-set">
                    10:00 AM to 08:00 PM<br >
                    (Monday closed)
                  </td>
                  <td><a href="" target="_blank" class="more"></a></td>
                </tr>
                <tr>
                  <td>Dawat Foods</td>
                  <td>at Hiqom</td>

                  <td class="width-set">7:00 PM to 1:00 AM</td>
                  <td>
                    <a
                      href="images/dawat_2023.jpg"
                      target="_blank"
                      class="more"
                    ></a
                    ><img src="images/icons8-food-menu-68.png" alt="" >
                  </td>
                </tr>
                <tr>
                  <td>Mahavir Healthy Food</td>
                  <td>at Emiet</td>

                  <td class="width-set">
                    04:00 PM to 02:00PM <br >
                    06:00 PM to 02:00 PM (Wednesday)
                  </td>
                  <td>
                    <a
                      href="pdf/Mahavir_Healthy_Foods.pdf"
                      target="_blank"
                      class="more"
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>Brahmani Veg Solutions</td>
                  <td>Central Arcade<br >(Ground Floor)</td>

                  <td class="width-set">09:00 AM to 09:00PM</td>
                  <td><a href="" target="_blank" class="more"></a></td>
                </tr>
                <tr>
                  <td>Go Insta Cafe</td>
                  <td>at Hiqom</td>

                  <td class="width-set">04:00 PM to 03:00 AM</td>
                  <td>
                    <a href="pdf/go_insta_cafe.pdf" target="_blank" class="more"
                      ><img src="images/icons8-food-menu-68.png" alt=""
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>VS Fastfood</td>
                  <td>at Hiqom</td>

                  <td class="width-set">09:00 AM to 06:00 AM</td>
                  <td>
                    <a href="pdf/vs_fastfood.pdf" target="_blank" class="more"
                      ><img src="images/icons8-food-menu-68.png" alt=""
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>Sugarcane Hut</td>
                  <td>Hut Behind Beauki</td>

                  <td class="width-set">
                    1 PM to 1 AM<br >
                    (Break from 8 PM to 8:30 PM)
                  </td>
                  <td>
                    <a
                      href="pdf/Sugarcane_Hut.pdf"
                      target="_blank"
                      class="more"
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>Samyak Juice</td>
                  <td>Sports Complex</td>

                  <td class="width-set">03:00 PM to 10:00 PM</td>
                  <td>
                    <a
                      href="pdf/MENU_SAMYAK_JUICE.pdf"
                      target="_blank"
                      class="more"
                      ><img src="images/icons8-food-menu-68.png" alt=""
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>Pooja Stationery</td>
                  <td>Central Arcade, Shop 101</td>

                  <td class="width-set">
                    10 AM to 7 PM (Mon-Sat)<br >
                    3 PM to 7 PM (Sun)
                  </td>
                  <td><a href="" target="_blank" class="more"></a></td>
                </tr>
                <tr>
                  <td>M/s Safety Laundry</td>
                  <td>Central Arcade Shop Number - 113</td>

                  <td class="width-set">10:30 AM to 7:30 PM</td>
                  <td>
                    <a
                      href="pdf/Rate List - Safety Laundry.pdf"
                      target="_blank"
                      class="more"
                      ><img src="images/icons8-food-menu-68.png" alt=""
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>M/s Just Chill Cafe</td>
                  <td>at Beauki Hostel</td>

                  <td class="width-set">7:00 PM to 3:00 AM</td>
                  <td>
                    <a
                      href="pdf/Just Chill Cafe menu.pdf"
                      target="_blank"
                      class="more"
                      ><img src="images/icons8-food-menu-68.png" alt=""
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    Mondego - The Restaurant<br >
                    *Free home delivery: 9316202005 | 7016011143
                  </td>
                  <td>Ground Floor, Central Arcade</td>

                  <td class="width-set">10:00 AM - 11:00 PM</td>
                  <td>
                    <a href="pdf/Mondego-Menu.pdf" target="_blank" class="more"
                      ><img src="images/icons8-food-menu-68.png" alt=""
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>Terra Food Cafeteria</td>
                  <td>Academic Block 8</td>

                  <td class="width-set">10:00 AM to 8:00 PM</td>
                  <td>
                    <a href="pdf/TFC_IITGN.pdf" target="_blank" class="more"
                      ><img src="images/icons8-food-menu-68.png" alt=""
                    ></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
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