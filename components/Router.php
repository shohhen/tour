<?php 
class Router{
private $routes;
public function __construct()
{
    $routesPath = ROOT.'/config/routes.php';
    $this->routes = include($routesPath);    
}

public function getUrl(){
    if (!empty($_SERVER['REQUEST_URI'])) {
        return trim($_SERVER['REQUEST_URI'],'/');
    }
}
public function run(){
// echo '<br>Run metodi-'.__METHOD__;
// print_r($this->routes);
$uri = $this->getUrl(); 
foreach ($this->routes as $uriPattern => $path) {
    if(preg_match("~$uriPattern~",$uri)){
        //  echo'<br>qidiruv '.$uri;
        //  echo'<br>nima '.$uriPattern;
        //  echo'<br>aaaaaaaaaa '.$path;

        $tashqi = preg_replace("~$uriPattern~",$path,$uri);
      
        // $qiymat = explode('/',$path);
        $qiymat = explode('/',$tashqi);
        // echo '<pre>';
        // print_r($qiymat);
        // echo '</pre>';
        
        $controlllernomi = array_shift($qiymat).'Controller';
        $controlllernomi = ucfirst($controlllernomi);
       
        $metodnomi = 'action'.ucfirst(array_shift($qiymat));
      
        $parametr = $qiymat;
       
        //Controller papkaga ulanish
        $controllerFayli = ROOT.'/controllers/'.$controlllernomi.'.php';
        if (file_exists($controllerFayli)) {
            include_once($controllerFayli);
        }
        // obyekt hosil qilamiz
        $controllerObyekt = new $controlllernomi;
        //2 $result = $controllerObyekt->$metodnomi();
        $result = call_user_func_array(array($controllerObyekt,$metodnomi),$parametr);
        if($result != null){
            break;
        }
        
    }
}
// echo $uri;
}
}

?>