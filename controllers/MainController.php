<?php
include_once "./models/Tours.php";
class MainController{
    public function actionIndex(){
    
       
        // $mainNews = News::getMainNews();
        include_once "./views/blogs/main.php";
        return true;

    }
    public function actionSales(){
      
      $getSales=Tours::getSales();
        include_once "./views/blogs/sales.php";
        return true;

    }
    public function actionAbout(){
     
                 include_once "./views/blogs/about.php";
          return true;
  
      }
      
    public function actionServices(){
      $getServices=Tours::getServices();
        include_once "./views/blogs/services.php";
 return true;

}
public function actionPopular(){
  $getPopular=Tours::getPopular();
  include_once "./views/blogs/popular.php";
return true;

}

public function actionTestimonial(){
  $getTestimonial=Tours::getTestimonial();
  include_once "./views/blogs/testimonial.php";
return true;

}
public function actionMap(){
     
  include_once "./views/blogs/map.php";
return true;

}
public function actionEurope(){
  $getEurope=Tours::getEurope();
  include_once "./views/blogs/europe.php";
return true;

}
public function actionAmerica(){
  $getAmerica=Tours::getAmerica();
  include_once "./views/blogs/america.php";
return true;

}
public function actionAustralia(){
  $getAustralia=Tours::getAustralia();
  include_once "./views/blogs/australia.php";
return true;

}
public function actionAsia(){
  $getAsia=Tours::getAsia();
  include_once "./views/blogs/asia.php";
return true;

}
}
?>