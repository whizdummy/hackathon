<!DOCTYPE html>
<html ng-app="">
  <head>
  <link rel="stylesheet" href="./css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="./css/materialize.css"/>
  <link type="text/css" rel="stylesheet" href="./css/mystyle.css"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body style="background-color:#1a1a1a;">
    <div class="wrapper">
        <header>  
          <div class="navbar">
            <nav style="background-color: #9e131e;">
              <div class="container">
                  <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo grey-text"><img src="./img/navIcon.png"</a>
                    <ul class="right hide-on-med-and-down">
                      <li><a href="index.php">Report</a></li>
                      <li><a href="about.php">About</a></li>
                    </ul>
                  </div>
              </div>
            </nav>
          </div>
        </header>
                  

        
        <article>
        
        </article>

            


          </div>
    </div>

        


  <style type="text/css">

          .wrapper > * {
            flex: 1 100%;
          }

          .wrapper {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            flex-direction: row;
          
            -webkit-flex-flow: row wrap;
            flex-flow: row wrap;
            -moz-flex-flow: row wrap;
            -o-flex-flow: row wrap;
          }

        

          .aside1 {
            background: #9e131e;
            border-radius: 3px;
            margin: 10px;
            text-align: center;
            width: 100%;
            height: 30%;
          }

          .main {
            background: white;
            border-radius: 3px;
            margin: 10px;
            text-align: center;
            width: 100px;
            height: 30%;
          }

          .aside2 {
            background: transparent;
            margin: 10px;
            text-align: center;
            width: 100%;
            height: 30%
          }

          .aside3 {
            background: grey;
            margin: 10px;
            text-align: center;
            width: 100%;
            height: 30%
          }

          .footer .page-footer {
            margin: 0;
          }


          .parallax-container {
               height: 480px;
             }


          @media all and (min-width: 600px) {
            .aside { flex: 1 auto; }
          }

          @media all and (min-width: 800px) {
            /* We invert order of first sidebar and main
             * And tell the main element to take twice as much width as the other two sidebars 
             */
            .main { flex: 2 0px; }
            .aside1 { order: 1; }
            .main    { order: 2; }
            .aside2 { order: 3; }
            .main    { order: 4; }
            .aside3   { order: 5; }
            .footer  { order: 6; }
          }</style>

  <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="./js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="./js/materialize.min.js"></script>
    <script type="text/javascript" src="./js/angular.min.js"></script>
    <script src="./js/highcharts.js"></script>
    <script src="./js/exporting.js"></script>


  </body>

  <footer class="footer page-footer grey darken-4 center">
          <div class="container">
          <div class="row">
            <div class="col s12 grey darken-4">
            <h5 class="white-text">ChildOnlineProtection.com</h5>
            <p class="grey-text text-lighten-4">ChildOnlineProtection.com is the world's first social network platform exclusively designed for recruitment of Restaurant Professionals</p>
            </div>
          </div>
          </div>
          <div class="footer-copyright">
          <div class="container">
          (c) 2016 Copyright
          </div>
          </div>
      </footer>

</html>