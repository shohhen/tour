<?php
include_once 'views/blogs/header.php';
?>

<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Explore Top Destination</h1>
            </div>
            <div class="row">
            <?php
                foreach ($getPopular as $popular) {
                    
                ?>
                <div class="col-lg-6 col-md-6 mb-6">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="assets/img/<?=$popular['img']?>" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="map">
                            <h5 class="text-white"><?=$popular['davlat']?></h5>
                            <span><?=$popular['text']?></span>
                        </a>
                    </div>
                </div>
                <?php
                }
                ?>
          
            </div>
        </div>
    </div>

    <?php
include_once 'views/blogs/footer.php';
?>