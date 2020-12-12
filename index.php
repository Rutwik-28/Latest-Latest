<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS-->
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/8193499790.js" crossorigin="anonymous"></script>

    <!-- link to css -->
    

     <link rel="stylesheet" href="css/main.css"> 
    <link rel="stylesheet" href="js/index.js"> 

</head>

<body>

    <div id="home" class="offset">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <!--LOGO-->
            <a class="navbar-brand" href="index.html">
                <img src="img/cricketlogo.png" alt="Logo">
            </a>
            <!--Toggle Button During Collapse-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navResponsive">

                <ul class="navbar-nav ml-auto">
                    <li class="navitem"><a href="#" class="nav-link">Home</a></li>
                    <li class="navitem"><a href="#" class="nav-link">About us</a></li>
                    <li class="navitem"><a href="login.html" class="nav-link">Login</a></li>
                </ul>

            </div>
        </nav>

        <!-- Carousel images slider -->

        <div id="caraouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000"
            class="offset">

            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <img src="img/backgound1.jpg" class="d-block w-100" alt="background1">
                    <div class="carousel-caption  text-centre">
                        <h1>First slide label</h1>
                        <h3>Nulla vitae elit libero, a pharetra augue mollis interdum.</h3>
                        <a class="btn  btn-outline-light btn-lg" href="#">Get Started</a>
                    </div>
                </div>

                <!--Slide 2-->
                <div class="carousel-item">
                    <img src="\img" class="d-block w-100" alt="background2">
                </div>

                <!--Slide 3-->
                <div class="carousel-item">
                    <img src="/img/cricket3.png" class="d-block w-100" alt="background3">
                </div>
            </div>

            <!--Prev & Next Button-->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>


        <!-- caraousel image slider ends Here -->


        <!-- Start of Blocks-->
        <div id="portfolio" class="offset">
            <div class="jumbotron container-fluid ">
                <h3 class="text-centre" style="text-align: center;">
                    Blocks
                </h3>
                <div class="heading-underline"></div>
                <div class="row no-padding"> 
                    <!--b1-->
                    <div class="col-sm-4">
                        <div class="portfolio">
                            <a href="img/cricket3.png" target="_blank">
                                <img src="img/cricket3.png" alt="Image1">
                            </a>
                        </div>
                    </div>
                    <!--b2-->
                    <div class="col-sm-4">
                        <div class="portfolio">
                            <a href="img/cricket4.png" target="_blank">
                                <img src="img/cricket4.png" alt="Image1">
                            </a>
                        </div>
                    </div>
                    <!--b3-->
                    <div class="col-sm-4">
                        <div class="portfolio">
                            <a href="img/pelayo-arbues-6FlQ_TIbFkk-unsplash.jpg" target="_blank">
                                <img src="img/pelayo-arbues-6FlQ_TIbFkk-unsplash.jpg" alt="Image1">
                            </a>
                        </div>
                    </div>
                    <!--b4-->
                    <div class="col-sm-4">
                        <div class="portfolio">
                            <a href="img/slide/image_03.jpg" target="_blank">
                                <img src="img/slide/image_03.jpg" alt="Image1">
                            </a>
                        </div>
                    </div>
                    <!--b5-->
                    <div class="col-sm-4">
                        <div class="portfolio">
                            <a href="img/bcground3.jpg" target="_blank">
                                <img src="img/bcground3.jpg" alt="Image1">
                            </a>
                        </div>
                    </div>
                    <!--b6-->
                    <div class="col-sm-4">
                        <div class="portfolio">
                            <a href="img/mohammed-al-emran-K0OEo4Iz2GY-unsplash.jpg" target="_blank">
                                <img src="img/mohammed-al-emran-K0OEo4Iz2GY-unsplash.jpg" alt="Image1">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div> 

        <!-- News Letter starts here-->
        <div class="card-deck" class="offset">
            <div class="card">
                <img class="card-img-top" src="img/pelayo-arbues-6FlQ_TIbFkk-unsplash.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content.
                        This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/lumensoft-technologies-vz7YUf7Zv14-unsplash.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/mohammed-al-emran-K0OEo4Iz2GY-unsplash.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content.
                        This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>

        <!--News Letter ends here-->

        <!--Footer-->


        <div id="Contact" class="offset">
            <footer>
                <div class="row  justify-content-centre">


                    <div class="col-md-5 text-centre" style="margin-left:600px;">
                        <img src="img/logo01.png" alt="Logo">
                        <p>Connect Us</p>
                        <p>
                            <strong>Contact Info</strong>
                            Email us at<br> rutwikkarande28@gmail.com
                        </p>

                        <a href="#" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                        </a>

                        <a href="#" target="_blank">
                            <i class="fab fa-twitter-square"></i>
                        </a>

                        <a href="#" target="_blank">
                            <i class="fab fa-instagram-square"></i>
                        </a>


                    </div>
                    <hr class="socket">
                    <div class="col-md-5 text-centre" style="margin-left:600px;">

                        &copy; rutwikkarande28
                    </div>
                </div>
            </footer>
        </div>

        <!-----------  FOOTER -------------->

        <footer class="container-fluid text-center">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Contact US</h3>
                    <br>
                    <h4>Our address and contact info here.</h4>
                </div>

                <div class="col-sm-4">
                    <h3>Connect</h3>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>

                <div class="col-sm-4">
                    <img src="img/slide/footer_01.png" alt="B" class="icon">
                </div>
            </div>
        </footer>
        <div class="copyright">
            <p>©2018 |rutwikkarande28</p>
        </div>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script> -->

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>