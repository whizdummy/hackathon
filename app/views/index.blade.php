<!DOCTYPE html>
<html ng-app="">
  <head>
  <link rel="stylesheet" href="./css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="{{asset('/css/materialize.css')}}"/>
  <link type="text/css" rel="stylesheet" href="{{asset('/css/mystyle.css')}}"/>
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
                    <a href="index.php" class="brand-logo grey-text"><img src="{{asset('/img/navIcon.png')}}"</a>
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

        <div class="parallax-container">
              <div class="parallax  grey darken-4"><img src="{{asset('/img/bg1.png')}}" class="responsive-img" style="opacity: 0.2;"></div>
                <div class="container">
                    <div class="container">
                      <div class="row">
                          <form class="col s12" method="POST" name="report" action="{{URL::to('/')}}" onsubmit="return validate()">
                            <div class="col s12">
                                <h3 class="white-text thin">Report</h3>
                            </div>
                              <div class="col s12">
                                  <input class="white-text" type="url" name="url" id="sendreport" placeholder="URL: http://www.example.com" pattern="https?://.+">
                              </div>
                              <div class="col s12 file-field">
                                        <div class="btn" style="background-color: #9e131e;">
                                          <i class="material-icons">photo_camera</i>
                                          <input type="file" multiple accept="image/*,video/*" id="img" name="fileUpload" title="Upload Picture/Video" >
                                        </div>
                                        <div class="file-path-wrapper">
                                                <input class="file-path validate white-text" type="text">
                                        </div>  
                              </div>
                              <div class="input-field col s12">
                                  <input type="text" class="validate white-text" name="name" id="Name"/>
                                  <label for="Name">Name</label>
                              </div>
                              <div class="input-field col s12">
                                  <textarea type="materialize-textarea" class="validate white-text" name="remarks" id="Remarks" style="resize: none; height: 100px;"></textarea>
                                  <label for="Remarks">Comment</label>
                              </div>
                              <div class="col s12 center" style="margin-top: 4px; margin-left: -5px;">
                                  <button class="waves-effect waves-light btn white-text thin" name="btnSend" type="submit" value="Submit" title="Send" style="background-color: #9e131e;" >SEND</button>
                                  <button type="reset" value="Reset" class="waves-effect waves-light btn-flat transparent white-text thin" style="border: 1px solid white;">CLEAR</button>
                              </div>
                          </form>
                      </div>     
                    </div>
                </div>
        </div>
        </article>

            <div class="wrapper">
              <div class="aside aside1" style="margin:0; padding:0;">
                <div class="container">
                    <div class="row">
                        <div class="col s12" style="margin-bottom: 15px;" id="how">
                        <h2 class="white-text thin">How this works?</h2>
                            <p class="white-text thin" style="font-size: 20px;"><span style="font-size: 30px;">This</span> will be the solution in reporting those who violate because of <span style="font-size: 30px;">Child Pornography</span><br/>
                            <b><span class="bold"style="font-size: 25px;">First.</span></b> You will upload the url, images, or videos to be reported<br/>
                            <b><span style="font-size: 25px;">Second.</span></b> This web application will receive your reports and your name will be hidden for your safety<br/>
                            <b><span style="font-size: 25px;">Third.</span></b> After we receive your reports, the government will take action immediately</p>
                        </div>
                    </div>
              </div>
            </div>
              
              </div>

              <div class="parallax-container" style="height: 550px;">
                    <div class="parallax  grey darken-4"><img src="{{asset('/img/bg1.png')}}" class="responsive-img" style="opacity: 0.2;"></div>
                        <div class="wrapper">
                            <div class="container">
                          <div class="aside aside2" style="margin:0;padding:0;" id="graph">
                                <div class="row">
                                    <div class="col s12" style="margin-top: 10px;">
                                    <h2 class="white-text thin">Graph</h2>
                                        <div id="cont" style="width:100%; height:400px;"></div>
                                    </div>
                                </div>
                          </div>
                        </div>
                          </div>
                    </div>

          
                


                    <div class="aside aside3  grey darken-4" style="margin:0; padding: 0px; ">
                      <div class="container">
                        <div class="row">
                              <div class="col s4" style="margin-top: 20px;">
                                  <img src="{{asset('/img/logo.png')}}" class="responsive-img" width="300">
                                  <p class="white-text">Lorem</p>
                              </div>
                              <div class="col s4" style="margin-top: 20px;">
                                  <img src="{{asset('/img/logo.png')}}" class="responsive-img" width="300">
                                  <p class="white-text">Lorem</p>
                              </div>
                              <div class="col s4" style="margin-top: 20px;">
                                  <img src="{{asset('/img/logo.png')}}" class="responsive-img" width="300">
                                  <p class="white-text">Lorem
                                  </p>
                              </div>
                          </div>
                        </div>
                    </div>
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
    <script type="text/javascript" src="{{asset('/js/jquery-2.1.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/angular.min.js')}}"></script>
    <script src="{{asset('/js/highcharts.js')}}"></script>
    <script src="{{asset('/js/exporting.js')}}"></script>

    <script>
    function validate(){
      var rep = document.forms["report"]["sendreport"].value;
      var img = document.forms["report"]["img"].value;

      if(rep==null || img==null){
        alert("Fill empty field!");
        return false;
      }
    }
    </script>


    <script>
      $(document).ready(function(){
          $('.scrollspy').scrollSpy();
        });
    </script>


    <script>
    $(document).ready(function(){
          $('.parallax').parallax();
        });
    </script>

    <script text="text/javascript">
      var loadFile = function(event) {
        var reportid = document.getElementById('reportid');
        reportid.src = URL.createObjectURL(event.target.files[0]);
      };
    </script>

   

    <script> /*----PIE GRAPH-----*/
       $(function () {

           $(document).ready(function () {

               // Build the chart
               $('#cont').highcharts({
                legend: {
                              itemStyle: {
                                 font: 'roboto',
                                 color: '#616161'
                              },
                              itemHoverStyle: {
                                 color: '#bdbdbd'
                              },
                              itemHiddenStyle: {
                                 color: '#444'
                              }
                           
                        },
                   chart: {
                       plotBackgroundColor: null,
                       plotBorderWidth: null,
                       plotShadow: false,
                       backgroundColor: 'transparent',
                       type: 'pie'
                   },
                    credits: {
                            enabled: false
                    },
                   title: {
                       text: 'Child Pornography Statistical Reports',
                       style: {
                        color: '#757575',
                        fontSize: 20
                       }
                   },
                   tooltip: {
                       pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                   },
                    navigation: {
                            buttonOptions: {
                                theme: {
                                    'stroke-width': 0,
                                    stroke: 'silver',
                                    r: 0,
                                    states: {
                                        hover: {
                                            fill: '#9e131e'
                                        },
                                        select: {
                                            stroke: '#039',
                                            fill: '#9e131e'
                                        }
                                    }
                                }
                            }
                        },
                   exporting: {
                              buttons: {
                                  contextButton: {
                                      enabled: false
                                  },
                                  exportButton: {
                                      text: 'Download',
                                      _titleKey: 'myButtonTitle',
                                                        // Use only the download related menu itcontext button
                                      menuItems: Highcharts.getOptions().exporting.buttons.contextButton.menuItems.splice(2)
                                  },
                                  printButton: {
                                  text: 'Print',
                                      _titleKey: 'printChart',
                                      onclick: function () {
                                          this.print();
                                      }
                                  }
                              }
                          },
                   plotOptions: {
                       pie: {
                           borderColor: 'transparent',
                           allowPointSelect: true,
                           cursor: 'pointer',
                           dataLabels: {
                               enabled: false
                           },
                           showInLegend: true,

                       }
                   },
                   series: [{
                       name: 'Regions',
                       colorByPoint: true,
                       data: [{
                           color: '#780202',
                           name: 'Region I',
                           y: 56.33
                       }, {
                           color: '#8c1111',
                           name: 'Region II',
                           y: 24.03
                       }, {
                           color: '#b32c2c',
                           name: 'Region III',
                           y: 10.38
                       }, {
                           color: '#cb4545',
                           name: 'Region IV-A',
                           y: 4.77
                       }, {
                           color: '#e66363',
                           name: 'Region IV-B',
                           y: 0.91
                       }]
                   }]
               });
           });
       });
    </script>

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