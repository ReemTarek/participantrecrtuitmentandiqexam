<!DOCTYPE html>
<html>
  <head>
    <title>
        participant's recruitment

    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="Eng Break"/>
    <meta name="description" content="EngBreak is a Non-Profit Organization which is organized by students for students.started in 2011 at faculty of engineering,Cairo University">
    <meta name="author" content="EngBreak">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://engbreak19.com/" />
    <meta property="og:image" content="{{asset('img/icon.png')}}" />
    <meta property="og:image:type" content="image/png">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     <link rel="shortcut icon" href="img/icon.png">

    <link href="https://fonts.googleapis.com/css?family=Bungee&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Finger Paint' rel='stylesheet'>
</head>
    <body>
      <section id="hero">
        <div class="blankback">
      <img src="img/Eng Break Logo.png" alt="log" class="img-thumbnail float-left" width=100 height=50>
          <div class="nothing"></div>
          <div class="main">
            <div class="submain">
              <div class="container">
                  <p id="datenow" class="text-center"></p>
              <h1  data-aos="fade-up" class="  text-center">participant recruitment</h1>
              <p id="countdown" class="text-center display-4 pb-3"></p>
              <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div  class="text-center">
                <button type="button" class="btn btn-light btn-lg mb-3 "onclick="window.location='{{ route('register') }}'">Apply Now</button>
<button type="button" class="btn btn-outline-light btn-lg mb-3" onClick="document.getElementById('workshops').scrollIntoView();">workshop description</button> 


                </div>
            </div>
            <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <a class="ct-btn-scroll ct-js-btn-scroll" href="#workshops"><img alt="Arrow Down Icon" src="https://www.solodev.com/assets/anchor/arrow-down.png"></a>
      </div>
    </div>
  </div>
        </div>
    </div>
        </div>
            </div>
          </div>
      </div>
</div>
      </section>
        <section id="workshops">
          <h2 class="text-center m-5" data-aos="fade-down" data-aos-duration="500" data-aos-delay="80" text-center m-5>About workshops</h2>
          <div class="container">
              <div class="card mb-5" style="overflow: hidden">

                    <div class="work committee" data-aos="fade-right" data-aos-duration="800" data-aos-delay="120" data-toggle="collapse"  href="#engineering" role="button" aria-expanded="false" aria-controls="engineering">
                    <h3 class="titleanimate">Engineering Field</h3>
                    <img src="img/ship.png" width=100 height=100 class="boat">

                        <p>click to view workshops</p>
                    </div>

                    <div class="row collapse" id="engineering">
                      <div class="card-body ">
                        <div class="container text-center">
                          <div class="row mt-5 marginsmall">
                              <div class="col-lg-6 mb-3">
                                <img src="img/logo.png" width="50" height="50">
                                <p class="finger">Atom</p>
                            <p>Web design</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#webdesign">
                                About workshop
                            </button>
                          </div>
                            <div class="col-lg-6 mb-3">
                                <img src="img/logo.png" width="50" height="50">
                                <p class="finger">Wall-E</p>
                            <p>Arduino</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#arduino">
                               About workshop
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card mb-5">

                      <div class="work committee" data-toggle="collapse" data-aos="fade-left" data-aos-duration="800" data-aos-delay="50"  href="#design" role="button" aria-expanded="false" aria-controls="design">
                          <h3>Designing Field</h3>
                          <img src="img/ship.png" width=100 height=100 class="boat">

                          <p>click to view workshops</p>
                      </div>
                      <div class="row collapse" id="design">
                        <div class="card-body ">
                          <div class="container text-center">
                            <div class="row mt-5 marginsmall">
                                <div class="col-lg-6 mb-3">
                                  <img src="img/logo.png" width="50" height="50">
                                  <p class="finger">Peacock</p>
                              <p>Photoshop
                              </p>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#photoshop">
                                  About workshops
                              </button>
                            </div>
                              <div class="col-lg-6 mb-3">
                                  <img src="img/logo.png" width="50" height="50">
                                  <p class="finger">Popeye</p>
                              <p>Illustrator</p>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#illustrator">
                                  About workshop
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-5">

                        <div class="work committee" data-aos="fade-right" data-aos-duration="800" data-aos-delay="20" data-toggle="collapse"  href="#presenting" role="button" aria-expanded="false" aria-controls="presenting">
                            <h3>Presenting Field</h3>
                            <img src="img/ship.png" width=100 height=100 class="boat">

                            <p>click to view workshops</p>

                        </div>
                        <div class="row collapse" id="presenting">
                          <div class="card-body ">
                            <div class="container text-center">
                              <div class="row mt-5 marginsmall">
                                  <div class="col-lg-6 mb-3">
                                    <img src="img/logo.png" width="50" height="50">
                                    <p class="finger">Countdown</p>
                                <p>video production</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#video">
                                    About workshop
                                </button>
                              </div>
                                <div class="col-lg-6 mb-3">
                                    <img src="img/logo.png" width="50" height="50">
                                    <p class="finger">Homera</p>
                                <p>Public speaking</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#public">
                                    About workshop
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-5">
                          <div class="work committee" data-aos="fade-left" data-aos-duration="800" data-aos-delay="50" data-toggle="collapse"  href="#managment" role="button" aria-expanded="false" aria-controls="managment">
                              <h3>Management Field</h3>
                              <img src="img/ship.png" width=100 height=100 class="boat">

                              <p>click to view workshops</p>
                            </div>
                          <div class="row collapse" id="managment">
                            <div class="card-body ">
                              <div class="container text-center">
                                <div class="row mt-5 marginsmall">
                                    <div class="col-lg-4 mb-3">
                                      <img src="img/logo.png" width="50" height="50">
                                      <p class="finger">Wazowski</p>
                                  <p>Human Resources</p>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hr">
                                      About workshop
                                  </button>
                                </div>
                                  <div class="col-lg-4 mb-3">
                                      <img src="img/logo.png" width="50" height="50">
                                      <p class="finger">Midas</p>
                                  <p>Entrepreneurship</p>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#entre">
                                      About workshop
                                  </button>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <img src="img/logo.png" width="50" height="50">
                                    <p class="finger">Lantern</p>
                                <p class="promotion">Marketing</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#promotion">
                                    About workshop
                                </button>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                  </div>
                  <div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Video production  - "Countdown"</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>For every project we go through phases and we countdown to reach the final project.
And in Video production we go through the concept filming and then Montage to reach the finale so we help you to learn the photography basics, the stages of producing any video and how to present our ideas in the form of a video, how to prepare, shoot it and edit it on adobe premiere.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="window.location='{{ route('register') }}'">Apply Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="public" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Public speaking  - "Homera" </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Homera's mission is to deliver a message to someone from another person, and
as a public speaker you have to make sure that your message is truly delivered to the audience and deliver your ideas in the most effective way.</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary" onclick="window.location='{{ route('register') }}'">Apply Now</button>
                            </div>
                          </div>
                        </div>
                      </div>
        </section>

     <section id="aboutworkshops">
        <div class="modal fade" id="webdesign" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Webdesign Workshop - "Atom" </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Text editor name- As the atom is any thing in this world  it contains few small things and the combination of few atom create materials.
So as the webdesign, it contains few codes and there combination creates wonders, we created this workshop in order to learn how to design a good website using different tools and webdesign languages (HTML 5, CSS3, JQuery).</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary"onclick="window.location='{{ route('register') }}'">Apply Now</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="arduino" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Arduino Workshop - "Wall-E" </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>As the movie Wall-E we create a robot who has a job which solves a problem
So if you want to learn new things and create your robot friend, you will learn the basics of the software, hardware, arduino structure, and different sensors to create your own Robot.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"onclick="window.location='{{ route('register') }}'">Apply Now</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="photoshop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Photoshop workshop - "Peacock" </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                     <p>It's a fascinating animal its feather had a gradient color each one of them is a layer of a color and their merge creates a fascinating form and design 
                       we will learn how to edit photos, create designs throughout some tools which control colors and clarity of the design and we learn about social media designs.</p>                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary"onclick="window.location='{{ route('register') }}'">Apply Now</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="illustrator" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Illustrator workshop - "Popeye" </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>The code name for a version in illustrator whice have a notable feature like (Gradients, eyedropper, paint bucket) 
                            you will know the essential & advanced tools of adobe illustrator, improve your designing skills and deliver elegant and professional designs 
                         </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"onclick="window.location='{{ route('register') }}'">Apply Now</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="hr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Human Resources Workshop - "Wazowski"</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>In monster's inc pixar movie 
                             Mike Wazowski was Sully’s scare assistant, best friend, and roommate, he was always helping and supporting him to perform in a better way and to gain high scores, Mike wazowski was playing the HR role in sully’s life. 
                             We learn in HR workshop about the HR cycle, know more about how to conduct interviews and develop your communication and leadership skills in Wazowski workshop.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary"onclick="window.location='{{ route('register') }}'">Apply Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="promotion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Marketing workshop - "Lantern" </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>As marketing is the source that lighten the product and deliver it to customers.
                               So you can learn how to make your product different and catchy and how to advertise online or offline in different ways.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary"onclick="window.location='{{ route('register') }}'">Apply Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="entre" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Entrepreneurship workshop - "Midas"</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>The most famous king midas is popularly remembered in the greek mythology for his ability to turn everything he touched into gold, on the other hand an entrepreneur can turn everything into an idea (every object, situation, experience you encounter becomes a potential platform for a new idea)and then it turns into gold. 
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary"onclick="window.location='{{ route('register') }}'">Apply Now</button>
                            </div>
                          </div>
                        </div>
                      </div>
     </section>
     <!-- Footer -->
<footer class="page-footer font-small border-top">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2019 Copyright:
  <a href="https://engbreak19.com"> engbreak19.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    </body>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Sept 29, 2019 22:14:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var dateTime = date;
document.getElementById("datenow").innerHTML=dateTime;
  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("countdown").innerHTML = days + "d "+hours + "h "
  + minutes + "m "+ seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "EXPIRED";
  }
}, 1000);
AOS.init();

</script>





</html>
