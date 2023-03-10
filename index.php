<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet/less" type="text/css" href="css/style.less" />
    <title>Portfolio 2023</title>
</head>
<body>
<div class="custom-cursor">
	<div class="cursor cursor--large"></div>
	<div class="cursor cursor--small"></div>
</div>
    <div class="custom-modal">
        <div class="modal-wrapper">
            <div class="row row-lead">
                <div class="lead">
                    <p class="json-subtitle"></p>
                    <h2 class="json-title"></h2>
                </div>
            </div>
            <div class="row row-scroll">
                <div class="project-row">
                    <div class="content">
                        <h2>Preface</h2>
                        <p class="json-preface"></p>
                    </div>
                </div>
                <div class="project-row">
                    <div class="content">
                        <h2>Method & Approach</h2>
                        <p class="json-method"></p>
                    </div>
                </div>
                <div class="project-row">
                    <div class="content">
                        <h2>Research Question</h2>
                        <p class="json-research-question"></p>
                    </div>
                </div>
                <div class="project-breaker"></div>
                <div class="project-row mb-4">
                    <div class="content">
                        <h2>Findings</h2>
                        <p class="json-findings"></p>
                        <a href="#" class="json-findings-url" target="_blank">View Document - <i class="fa-solid fa-file-pdf"></i></a>
                    </div>
                </div>
                <div class="project-breaker"></div>
                <div class="project-row">
                    <div class="content">
                        <h2>Conclusion</h2>
                        <p class="json-conclusion"></p>
                    </div>
                </div>
                <div class="project-row">
                    <div class="content">
                        <h2>Sources</h2>
                        <ul class="sources-ul">
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row row-close">
                <div class="close-btn">Close</div>
            </div>
        </div>
    </div>
    <div class="modal-overlay"></div>
    <div class="blur">

   
    <div class="banner col-12">
        <a class="scrollto" href="#op"><img src="src/scroll-down-arrow.gif" alt=""></a>
        <div class="socials">
            <a href="https://www.instagram.com/joeylooverbosch/?hl=en" target="_blank">INSTAGRAM <i class="fa-brands fa-square-instagram"></i></a>
            <a href="https://www.linkedin.com/in/joey-v-638597141/" target="_blank">LINKEDIN <i class="fa-brands fa-linkedin"></i></a>
            <a href="https://github.com/joeyvdlooverbosch/Portfolio_2023" target="_blank">GITHUB <i class="fa-brands fa-github"></i></a>
        </div>
        <div class="row row-banner">
            <div class="left">
                <div class="wrapper">
                    <p class="lead">I'm Joey van de Looverbosch, web designer and programmer.</p>
                    <h1>I love to create</h1>
                    <p class="lead-s">Get to know more about me and the projects I have created on this portfolio website.</p>
                    <a  href="mailto:465420@student.fontys.nl">Contact</a>

                    <!-- <svg class="arrows-2">
                        <path class="a1" d="M0 0 L30 32 L60 0"></path>
                        <path class="a2" d="M0 20 L30 52 L60 20"></path>
                        <path class="a3" d="M0 40 L30 72 L60 40"></path>
                    </svg> -->
                </div>
            </div>
            <div class="right"><img src="src/clipped.png" alt="">
        </div>
        </div>
    </div>



    <div class="invidvidual-project-visual col-12" id="op">
        <div class="content">
            <p>Learn more about the</p>
            <h2>INDIVIDUAL PROJECT</h2>
            <br>
            <p>
            Check out my personal portfolio project, created as part of a 4-week school project. I used the double diamond method to design, research, prototype, realize, and validate the website that you are on right now. 
            <br><br>
            The result is a user-friendly and visually appealing showcase of my skills and experience. Use the image slider to get a feeling of the proces that was undertaken.
            </p>
            <br>
            <svg class="arrows">
                <path class="a1" d="M0 0 L30 32 L60 0"></path>
                <path class="a2" d="M0 20 L30 52 L60 20"></path>
                <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg>
        </div>
        <div id="app">
        <div class="slider--container">
            <div class="slider__wrapper">
                <div class="slider__btn--container">
                    <button class="btn prev">Prev</button>
                </div>

                <div class="slider">
                    <div class="slides__wrapper">
                        <div class="slide">
                            <div class="slide__img">
                                <img src="src/mockup1.png" />
                            </div>
                        </div>
                        <!-- <div class="slide">
                            <div class="slide__img">
                                <img src="src/" />
                            </div>
                        </div> -->
                        <div class="slide">
                            <div class="slide__img">
                                <img src="src/mockup2.png" />
                            </div>
                        </div>
                        <!-- <div class="slide">
                            <div class="slide__img">
                                <img src="https://source.unsplash.com/PP8Escz15d8" />
                            </div>
                        </div> -->
                    </div>
                    <div class="transition-slide"></div>
                </div>

                <div class="slider__btn--container">
                    <button class="btn next">Next</button>
                </div>
            </div>

            <div class="marquee__wrapper">
                <div class="marquees">
                    <div class="marquee">
                        <div class="item" data-word="DISCOVER" data-number="01"></div>
                        <div class="item" data-word="DISCOVER" data-number="01"></div>
                        <div class="item" data-word="DISCOVER" data-number="01"></div>
                    </div>

                    <div class="marquee">
                        <div class="item" data-word="DEFINE" data-number="02"></div>
                        <div class="item" data-word="DEFINE" data-number="02"></div>
                        <div class="item" data-word="DEFINE" data-number="02"></div>
                    </div>

                    <!-- <div class="marquee">
                        <div class="item" data-word="DEVELOP" data-number="03"></div>
                        <div class="item" data-word="DEVELOP" data-number="03"></div>
                        <div class="item" data-word="DEVELOP" data-number="03"></div>
                    </div> -->

                    <!-- <div class="marquee">
                        <div class="item" data-word="DELIVER" data-number="04"></div>
                        <div class="item" data-word="DELIVER" data-number="04"></div>
                        <div class="item" data-word="DELIVER" data-number="04"></div>
                    </div> -->
                </div>
            </div>

            <div class="slider__progress--container">
                <span class="slide-num current-slide">01</span>
                <div class="progress">
                    <span></span>
                </div>
                <span class="slide-num">02</span>
            </div>
        </div>
    </div>
    </div>


    <div class="individual-project col-12">
        <div class="row">
            <div class="col-8 d-flex lead-wrapper">
                <p class="lead">INDIVIDUAL PROJECT EVIDENCE</p>
                <h2 class="title">Creation of a professional portfolio website</h2>
                <p>Here you can find all the products, prototypes and research documents that were made to bring this website to life.
                </p>
            </div>

        </div>
        <div class="row">
            <div class="col-8 double-diamond-wrapper">
                <div class="double-diamond-phase">
                    <div class="phase">
                        <p class="accent">01</p><p>Discover Phase</p>
                    </div>
                    <div class="content">
                        <p class="lead">Discovering the issue</p>
                        <ul>
                            <li class="deliverable" id="individual_project/trend_analysis.json"><i class="fa-solid fa-magnifying-glass-chart mr-2"></i>Trend Analysis</li>
                            <li class="deliverable" id="individual_project/expert_interview.json"><i class="fa-solid fa-clipboard-question mr-2"></i>Target Audience Interview</li>
                        </ul>
                    </div>
                </div>
                <div class="double-diamond-phase">
                    <div class="phase">
                        <p class="accent">02</p><p>Define Phase</p>
                    </div>
                    <div class="content">
                        <p class="lead">Defining the approach</p>
                        <ul>
                            <li class="deliverable" id="individual_project/hmw.json"><i class="fa-solid fa-person-circle-question mr-2"></i></i>HMW-questions</li>
                            <li class="deliverable" id="individual_project/hmw.json"><i class="fa-solid fa-brain mr-2"></i>Ideation session</li>
                            <a  href="https://www.figma.com/file/zsbRC7mvi082a7wL7ckwVo/Untitled?node-id=0%3A1&t=duJAj5Hc0JksKf9g-1" target="_blank"><i class="fa-regular fa-clone mr-2"></i>Low-fid wireframes</a>
                        </ul>
                    </div>
                </div>
                <div class="double-diamond-phase">
                    <div class="phase">
                        <p class="accent">03</p><p>Develop Phase</p>
                    </div>
                    <div class="content">
                        <p class="lead">Creating the website</p>
                        <ul>
                            <li><a target="_blank" href="https://github.com/joeyvdlooverbosch/Portfolio_2023"><i class="fa-brands fa-github mr-2"></i>GIT Repository</a></li>
                            <li class="deliverable"><i class="fa-solid fa-desktop mr-2"></i>Portfolio website</li>
                        </ul>
                    </div>
                </div>
                <div class="double-diamond-phase">
                    <div class="phase">
                        <p class="accent">04</p><p>Deliver Phase</p>
                    </div>
                    <div class="content">
                        <p class="lead">Validating and launching the website</p>
                        <ul>
                            <li class="deliverable" id="individual_project/usability_test.json"><i class="fa-solid fa-flask-vial mr-2"></i>Usability test</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="group-project col-12">
        <div class="row">
            <div class="col-8 d-flex lead-wrapper">
                <p class="lead">GROUP PROJECT</p>
                <h2 class="title">T.B.D.</h2>
            </div>

        </div>
        <div class="row">
            <div class="col-8 double-diamond-wrapper">
                <div class="double-diamond-phase">
                    <div class="phase">
                        <p class="accent">01</p><p>Discover Phase</p>
                    </div>
                    <div class="content">
                        <p class="lead">Discovering the issue</p>
                        <ul>
       
                        </ul>
                    </div>
                </div>
                <div class="double-diamond-phase">
                    <div class="phase">
                        <p class="accent">02</p><p>Define Phase</p>
                    </div>
                    <div class="content">
                        <p class="lead">Discovering the issue</p>
                        <ul>
         
                        </ul>
                    </div>
                </div>
                <div class="double-diamond-phase">
                    <div class="phase">
                        <p class="accent">03</p><p>Develop Phase</p>
                    </div>
                    <div class="content">
                        <p class="lead">Discovering the issue</p>
                        <ul>
   
                        </ul>
                    </div>
                </div>
                <div class="double-diamond-phase">
                    <div class="phase">
                        <p class="accent">04</p><p>Deliver Phase</p>
                    </div>
                    <div class="content">
                        <p class="lead">Discovering the issue</p>
                        <ul>
                  
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="international-project col-12">
        <div class="row">
            <div class="col-8 d-flex lead-wrapper">
                <p class="lead">INTERNATIONAL PROJECT</p>
                <h2 class="title">T.B.D.</h2>
            </div>

        </div>
        <div class="row">
            <div class="col-8 double-diamond-wrapper">
                <div class="double-diamond-phase">
                    <div class="phase">
                        <p class="accent">01</p><p>Discover Phase</p>
                    </div>
                    <div class="content">
                        <p class="lead">Discovering the issue</p>
                        <ul>
       
                        </ul>
                    </div>
                </div>
                <div class="double-diamond-phase">
                    <div class="phase">
                        <p class="accent">02</p><p>Define Phase</p>
                    </div>
                    <div class="content">
                        <p class="lead">Discovering the issue</p>
                        <ul>
         
                        </ul>
                    </div>
                </div>
                <div class="double-diamond-phase">
                    <div class="phase">
                        <p class="accent">03</p><p>Develop Phase</p>
                    </div>
                    <div class="content">
                        <p class="lead">Discovering the issue</p>
                        <ul>
   
                        </ul>
                    </div>
                </div>
                <div class="double-diamond-phase">
                    <div class="phase">
                        <p class="accent">04</p><p>Deliver Phase</p>
                    </div>
                    <div class="content">
                        <p class="lead">Discovering the issue</p>
                        <ul>
                  
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact col-12">
        <div class="row">
            <div class="col-12 content">
                <h2>Contact me</h2>
                <p>Use the button below to send me an email.</p>
                <a href="mailto:465420@student.fontys.nl" target="_blank" class="email">Contact</a>
            </div>
        </div>
    </div>
</div>

<div class="loading__wrapper">
	<div class="loader--text">Loading...</div>
	<div class="loader">
		<span></span>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/less"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.0.3/tilt.jquery.js"></script>
<script src="js/main.js"></script>
<script src="js/grained.js"></script>
<script src="js/image_handler.js"></script>
</body>
</html>
