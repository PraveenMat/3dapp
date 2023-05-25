<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <title>CokeCola Assignment</title>

  <link href="../css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.x3dom.org/x3dom/release/x3dom.css">
  <script src="https://www.x3dom.org/x3dom/release/x3dom.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <link href="../css/custom.css" rel="stylesheet">
  <link rel="icon" type="images/png" href="../assets/images/gallery_images/coke.png" sizes="32x32">
  <!-- Use a light box to view images in the gallery -->
  <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.min.css">
</head>

<body id="bodyColor">
  <!-- A grey horizontal navbar that becomes vertical on small screens (Logo and nav bar)-->
  <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
    <div class="container">
      <!--Brand-->
      <div class="logo">
        <a class="navbar-brand" href="home">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>Journey</h3>
          <p>Refreshing the world, every second</p>
        </a>
      </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="home">Home</a>
          </li>

          <!-- Added navAbout ID -->
          <li class="nav-item">
            <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a Final Year Module">About</a>
          </li>

          <!-- Replaced Dropdown from lab 5 with single nav link to models -->
          <li class="nav-item">
            <a id="navModels" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="3D App Contact Details" data-bs-content="Praveenan Mathew Email:prm24@sussex.ac.uk">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Start 3D App SPA Contents -->
  <div class="container main_contents">
    <!-- Home page block element -->
    <div id="home">
      <div class="row"> <!-- Main_3D Image or Carousel -->
        <div class="col-sm-12">
          <div id="main_3d_image">
            <div id="main_text" class="col-xs-12 col-sm-4">
              <div id="title_home"></div>
              <div id="subTitle_home"></div>
              <div id="description_home"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Row of cards on the grid -->
      <div class="row">
        <!--Coca Cola Column-->
        <div class="col-sm-4">
          <div class="card">
            <a href="../assets/images/render_images/coke.png" data-fancybox data-caption="My 3D Coke Can Render">
              <img class="card-img-top img-fuild img-thumbnail" src="..\assets\images\coca_cola.jpg" alt="Coca Cola">
            </a>
            <div class="card-body">
              <div id="title_left" class="card-title drinksText"></div>
              <div id="subTitle_left" class="card-subtitle drinksText"></div>
              <div id="description_left" class="card-text drinksText"></div>
              <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out more
                ...</a>
            </div>
          </div>
        </div>

        <!--Sprite Column-->
        <div class="col-sm-4">
          <div class="card">
            <a href="../assets/images/render_images/sprite.png" data-fancybox data-caption="My 3D Sprite Bottle Render">
              <img class="card-img-top img-fuild img-thumbnail" src="..\assets\images\sprite.jpg" alt="Sprite">
            </a>
            <div class="card-body">
              <div id="title_centre" class="card-title drinksText"></div>
              <div id="subTitle_centre" class="card-subtitle drinksText"></div>
              <div id="description_centre" class="card-text drinksText"></div>
              <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary">Find out more ...</a>
            </div>
          </div>
        </div>

        <!--Dr Pepper Column-->
        <div class="col-sm-4">
          <div class="card">
            <a href="../assets/images/render_images/pepper2.png" data-fancybox data-caption="My 3D Dr Pepper Cup Render">
              <img class="card-img-top img-fuild img-thumbnail" src="..\assets\images\dr_pepper.jpg" alt="Dr Pepper">
            </a>
            <div class="card-body">
              <div id="title_right" class="card-title drinksText"></div>
              <div id="subTitle_right" class="card-subtitle drinksText"></div>
              <div id="description_right" class="card-text drinksText"></div>
              <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary">Find out more
                ...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Home page -->

    <!-- About page block element -->
    <div id="about">


      <h2>Statement of Originality</h2>
      <h5>This assignment is submitted as part requirement for the degree of Computer Science and Artificial Intelligence BSc (Hons) at
        the University of Sussex. It is the product of my own labour except where indicated in the accompanying codebase.
        This assignment may be freely copied and distributed provided the source is acknowledged. I hereby give permission
        for a copy of this assignment to be loaned out to students in future years. </h5>
      <br>
      <h2>References</h2>
      <h4>Home Page Wallpaper:</h4>
      <p>Coke (Slidshow): Provided from the lab </p>
      <p>Sprite (Slidshow): https://thedieline.com/blog/2022/5/20/sprite-undergoes-global-brand-refresh </p>
      <p>Pepper (Slidshow): https://wallpapercave.com/dr-pepper-wallpaper </p>
      <p>Coke (Thumbnail): https://wallpaperset.com/coca-cola-wallpaper</p>
      <p>Sprite (Thumbnail): https://thedieline.com/blog/2022/5/20/sprite-undergoes-global-brand-refresh </p>
      <p>Pepper (Thumbnail): https://wallpapercave.com/dr-pepper-wallpaper </p>
      <br>
      <h4>Model Texture:</h4>
      <p>Coke: Provided from the lab</p>
      <p>Sprite: https://in.pinterest.com/pin/289919294741681341/</p>
      <p>Pepper: https://www.turbosquid.com/FullPreview/824440 </p>
      <br>
      <h4>Sounds:</h4>
      <p>All three sounds are from: https://www.soundjay.com/drink-sounds-1.html</p>
      <br>

    </div> <!-- End home page -->

    <!-- Coke page -->
    <!--<div id="coke" class="container-fluid main_contents" stylee="display: none;"> -->
    <div id="models" style="display: none;">
      <!-- Row to hold two cards to hold 1) the X3D model and 2) the gallery -->
      <div class="row">
        <!-- Column to holds the X3D Model-->
        <div class="col-sm-9">
          <div class="card text-left">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a id="navCoke" class="nav-link active" href="#">Coke</a>
                </li>
                <li class="nav-item">
                  <a id="navSprite" class="nav-link" href="#">Sprite</a>
                </li>
                <li class="nav-item">
                  <a id="navPepper" class="nav-link" href="#">Pepper</a>
                </li>
              </ul>
            </div>

            <!-- Bootstarp 5 card body to hold info about the X3D model-->
            <div class="card-body">
              <div id="coke">
                <div class="card-title drinksText">
                  <h2> <?php echo $data[0]["x3dModelTitle"] ?> </h2>
                </div>
                <!-- Place the X3d code here-->
                <div class="model3D">
                  <x3d id="coke_model">
                    <scene>
                      <inline nameSpaceName="coke_model" mapDEFToID="true" onclick="animateModel();" url="..\assets\x3d\models\can.x3d"> </inline>
                      <background transparency="0.9" />
                    </scene>
                  </x3d>
                </div>
                <div class="card-text drinksText">
                  <p> <?php echo $data[0]["x3dCreationMethod"] ?> </p>
                </div>
              </div>
              <!-- Sprite X3D model -->

              <div id="sprite" style="display:none;">
                <div class="card-title drinksText">
                  <h2> <?php echo $data[1]["x3dModelTitle"] ?> </h2>
                </div>
                <!-- Place the X3D code here -->
                <div class="model3D">
                  <x3d id="sprite_model">
                    <scene>
                      <inline nameSpaceName="sprite_model" mapDEFToID="true" onclick="animateModel();" url="..\assets\x3d\models\bottle.x3d"> </inline>
                      <background transparency="0.9" />
                    </scene>
                  </x3d>
                </div>
                <div class="card-text drinksText">
                  <p> <?php echo $data[1]["x3dCreationMethod"] ?> </p>
                </div>
              </div>
              <!-- Pepper X3D model -->
              <div id="pepper" style="display:none;">
                <div class="card-title drinksText">
                  <h2> <?php echo $data[2]["x3dModelTitle"] ?> </h2>
                </div>
                <!-- Place the X3D code here -->
                <div class="model3D">
                  <x3d id="pepper_model">
                    <scene>
                      <inline nameSpaceName="pepper_model" mapDEFToID="true" onclick="animateModel();" url="..\assets\x3d\models\cup.x3d"> </inline>
                      <background transparency="0.9" />
                    </scene>
                  </x3d>
                </div>
                <div class="card-text drinksText">
                  <p> <?php echo $data[2]["x3dCreationMethod"] ?> </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Column to hold 3D Image Gallery-->
        <div class="col-sm-3">
          <div class="card text-left">
            <div class="card-header gallery-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link " href="#">Gallery</a>
                </li>
            </div>
            <div class="card-body">
              <div class="card-title title_gallery drinksText"></div>
              <div class="gallery" id="gallery"></div>
              <div class="card-text description_gallery drinksText"></div>
            </div>
          </div> <!-- End gallery card -->
        </div> <!-- End gallery column -->
      </div> <!-- End row for X3D Model and Gallery -->
    </div> <!-- End X3D Models and Gallery -->

    <!-- Start the interaction panels -->
    <div id="interaction" class="row">
      <!-- Column for the camera view controls -->
      <div class="col-sm-4">
        <div class="card text-left">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">Camera</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="card-Title x3dCamera_Subtitle drinksText">
              <h2>Camera Options</h2>
              <div class="card-text x3dAnimationDescription drinksText">
                <h3>These buttons select a range of camera options</h3>
              </div>
            </div>
            <a href="#" class="btn btn-primary btn-responsive" onclick="cameraFront();">Front</a>
            <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
            <a href="#" class="btn btn-primary btn-responsive" onclick="cameraLeft();">Left</a>
            <a href="#" class="btn btn-primary btn-responsive" onclick="cameraRight();">Right</a>
            <a href="#" class="btn btn-primary btn-responsive" onclick="cameraTop();">Top</a>
            <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBottom();">Bottom</a>
            <a href="#" class="btn btn-outline-dark btn-responsive" onclick="spin();">RotX</a>
            <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
            <button class="btn btn-outline-light btn-responsive" onclick="addClickSound1();">Sound 1</button>
            <button class="btn btn-outline-light btn-responsive" onclick="addClickSound2();">Sound 2</button>
            <button class="btn btn-outline-light btn-responsive" onclick="addClickSound3();">Sound 3</button>

            <audio id="mySound1" src="../assets/sound/can-open-2.mp3" preload="auto"></audio>
            <audio id="mySound2" src="../assets/sound/soda-fizz-1.mp3" preload="auto"></audio>
            <audio id="mySound3" src="../assets/sound/pouring-soda-1.mp3" preload="auto"></audio>


            <div class="card-text x3dCameraDescription drinksText">
            </div>
          </div>
        </div>
      </div>
      <!-- Column for the Light controls -->
      <div class="col-sm-4">
        <div class="card text-left">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">Lights</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="card-Title x3dAnimationSubtitle drinksText">
              <h2>Lights Options</h2>
              <div class="card-text x3dAnimationDescription drinksText">
                <h3>These buttons select a range of X3D lights options</h3>
              </div>
            </div>
            <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
            <a href="#" class="btn btn-success btn-responsive" onclick="spotlight();">Spotlight</a>
            <a href="#" class="btn btn-success btn-responsive" onclick="toplight();">Toplight</a>

          </div>
        </div>
      </div>

      <!-- Column for the render type and lighting controls -->
      <div class="col-sm-4">
        <div class="card text-left  ">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">Render</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="card-Title x3dAnimationSubtitle drinksText">
              <h2>Render Options</h2>
              <div class="card-text x3dAnimationDescription drinksText">
                <h3>These buttons select a range of X3D render options</h3>
              </div>
            </div>
            <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Toggle Render Options</a>

          </div>
        </div>
      </div>
    </div> <!-- End the interaction panels -->

    <!-- Row to hold one card to hold the coke descriptive text, etc.-->
    <div id="cokeDescription" class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="card-title drinksText">
              <h2> <?php echo $data[0]["modelTitle"] ?> </h2>
            </div>
            <div class="card-subtitle drinksText">
              <h3> <?php echo $data[0]["modelSubtitle"] ?> </h3>
            </div>
            <div class="card-text drinksText">
              <p> <?php echo $data[0]["modelDescription"] ?> </p>
            </div>
            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit
              Coke</a>
          </div>
        </div>
      </div>
    </div> <!-- End coke description contents -->

    <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
    <div id="spriteDescription" class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="card-title drinksText">
              <h2> <?php echo $data[1]["modelTitle"] ?> </h2>
            </div>
            <div class="card-subtitle drinksText">
              <h3> <?php echo $data[1]["modelSubtitle"] ?> </h3>
            </div>
            <div class="card-text drinksText">
              <p> <?php echo $data[1]["modelDescription"] ?> </p>
            </div>
            <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit
              Sprite</a>
          </div>
        </div>
      </div>
    </div> <!-- End sprite description contents -->

    <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
    <div id="pepperDescription" class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="card-title drinksText">
              <h2> <?php echo $data[2]["modelTitle"] ?> </h2>
            </div>
            <div class="card-subtitle drinksText">
              <h3> <?php echo $data[2]["modelSubtitle"] ?> </h3>
            </div>
            <div class="card-text drinksText">
              <p> <?php echo $data[2]["modelDescription"] ?> </p>
            </div>
            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Visit
              Pepper.</a>
          </div>
        </div>
      </div>
    </div> <!-- End pepper description contents -->

  </div> <!-- End 3D App SPA Contents -->

  <!--3D App Footer-->
  <nav id="footerColor" class="navbar navbar-expand footer">
    <div class="container">
      <div class="navbar-text float-left copyright">
        <p><span class="align-baseline">&copy 2023 Mobile Web 3D Applications | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Dark Mode</a></span></p>
      </div>
      <div class="navbar-text float-right social">
      <a class="social-icon" href="https://www.facebook.com/cocacolaGB/?locale=en_GB"><i class="fab fa-facebook-square fa-2x"></i></a>
      <a class="social-icon" href="https://twitter.com/cocacolaco?lang=en"><i class="fab fa-twitter fa-2x"></i></a>
      <a class="social-icon" href="https://github.com/PraveenMat/3dapp"><i class="fab fa-github-square fa-2x"></i></a>

      </div>
    </div>
  </nav>

  <!--My 3D App models-->
  <!--Contact Models-->
  <!--The models-->
  <div class="modal fade" id="contactModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">3D App Contact Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <p>Praveenan Mathew, University of Sussex Email: prm24@sussex.ac.uk</p>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script src="../js/custom.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="https://www.x3dom.org/download/x3dom.js"> </script>
  <!-- JavaScript to swap for SPA and restyle -->
  <script src="../scripts/js/swap_restyle.js"></script>
  <!-- JavaScript and PHP based Gallery generator  -->
  <script src="../scripts/js/gallery_generator.js"></script>

  <!-- JQuery code to get content data from a backend JSON file -->
  <script src="../scripts/js/getJsonData.js"></script>

  <!--Javascript Model Interactions-->
  <script src="../scripts/js/modelInteractions.js"></script>


  <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
  <!--<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  -->

  <script src="../scripts/js/jquery.fancybox.min.js"></script>

</body>

</html>