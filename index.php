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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <header class="header">
        <div class="header-section">
            <img src="src/logo.png" alt="Logo" height="50">
        </div>
        <div class="header-section switch">
            <a href="#">Projects</a>
            <a href="#">Contact</a>
            <div class="dl-switch"><i class="fa-solid fa-sun"></i><input type="checkbox" id="darkSwitch"><i class="fa-solid fa-moon"></i></div>
        </div>
    </header>


    <div class="banner p-3 p-md-5 m-md-3 text-center">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">My Portfolio</h1>
        <p class="lead font-weight-normal">Welcome to my portfolio! I'm a web designer and developer studying IT & Media at the Fontys hogescholen, Eindhoven. With expertise in front-end and back-end technologies, I create innovative designs and develop user-friendly web applications for clients. Check out my portfolio to see some of my work!</p>
        <button type="button" class="btn btn-project" data-toggle="modal" data-target="#exampleModal">
        Read more
        </button>
      </div>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>

    <div class="projects col-10">
        <div class="projects-intro">
            <h3>Deliverables</h3>
            <p>Here you can find an overview of all the products that were made during semester 6. Use the filter below to find the results you want.</p>
            <div class="filter">
                <div>Personal project</div>
                <div>Group project</div>
                <div>International project</div>
            </div>
        </div>
        <br>
        <div class="projects-overview col-12">

        </div>
    </div>


  
</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/less"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</html>
