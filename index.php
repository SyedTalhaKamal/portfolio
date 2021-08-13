<?php
$title = "Home";
$pg = 'Home';
include('header.php');
include('nav.php');
?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/fox.PNG" class="d-block w-100 carousel-img" loading="lazy" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/cargo.PNG" class="d-block w-100 carousel-img" loading="lazy" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/compass.PNG" class="d-block w-100 carousel-img" loading="lazy" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/apto-beauty.PNG" class="d-block w-100 carousel-img" loading="lazy" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/younglad.PNG" class="d-block w-100 carousel-img" loading="lazy" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<?php include('footer.php') ?>