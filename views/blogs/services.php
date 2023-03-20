<?php
include_once 'views/blogs/header.php';
?>
<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Tours & Travel Services</h1>
            </div>
            <div class="row">
                <?php
                foreach ($getServices as $services) {
                
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2"><?=$services['type']?></h5>

                        <p class="m-0"><?=$services['cost']?><br>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
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