<?php
include_once 'views/blogs/header.php';
?>

<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Sales</h6>
                <h1>Amazing offers</h1>
            </div>
            <div class="row">

            <?php
            foreach ($getSales as $row) {
                
            ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" style="height:250px" src="assets/img/<?=$row['img']?>" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?=$row['davlat']?></small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?=$row['muddat']?></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><?=$row['n_o']?></small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Visit amazing places</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$<?=$row['narxi']?></h5>
                                </div>
                            </div>
                        </div>
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