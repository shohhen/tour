<?php
include_once 'views/blogs/header.php';
?>
<div class="container">

<p class="h1"></p>
<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Europe</h6>
                <h1>Latest From Our Blog</h1>
            </div>
            <div class="row pb-3">
            <?php
                foreach ($getEurope as $europe) {
                    
                ?>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" style="height: 200px;" src="assets/img/<?=$europe['img']?>" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1"><?=$europe['id']?></h6>
                                <small class="text-white text-uppercase"><?=$europe['id']?></small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?=$europe['davlat']?></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href=""><?=$europe['text']?></a>
                        </div>
                    </div>
                </div>
                
               <?php
            }
            ?>
            </div>
        </div>
    </div>
    <h3>How many people choose this place</h3>

    <p>Germany:</p>
    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 95%">95%</div>
</div>
<p>Japan:</p>
    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 75%">75%</div>
</div>
<p>Switzerland:</p>
    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 15%">15%</div>
</div>
</div>
<?php
include_once 'views/blogs/footer.php';
?>