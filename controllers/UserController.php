<?php 
    include_once ROOT.'/models/User.php'; 
class UserController{
    protected function TekshirSession () {
        if (isset($_SESSION['user']) && $_SESSION['user']['login']) {
            header("Location: /cabinet");
        }
    }

    public function actionRegister(){  
    //   $this->TekshirSession();

    if(isset($_POST['submit'])){
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // tekshirish
              $errors = [];
        if (!User::checkName($login)) {
            $errors[] = 'loginda xato';
        }
        // password
        if (!User::checkPassword($password)) {
            $errors[] = '<br>parolda xato';
        }

        if (!User::checkEmail($email)) {
            $errors[] = '<br>emailda xato';
        }

        if (User::ifMailExists($email)) {
            $errors [] = '<br>bunday email mavjud';
        }

        if (count($errors) == 0) {
            User::addUser($login, $email, $password);
            header('Location: /main');
        }
            
        
        }
        
        require_once(ROOT.'/views/user/register.php');
        return true;
        
    }

  public function actionLogin(){
    $this->TekshirSession();
     if(isset($_POST['submit'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
         $errors = [];
        if (!User::checkName($login)) {
            $errors[] = 'loginda xato';
        }
        if (!User::checkPassword($password)) {
            $errors[] = '<br>parolda xato';
        }

        if (count($errors) != 0) return;
        if (!User::userLogin($login, $password)) {
            $errors[] = "<br>Login yoki parolda xato";
        } else {
            $_SESSION['user'] = [
                "login" => true,
                "data" => [
                "username" => $login
                ]
            ];
            header("Location: /cabinet"); exit;
        } }
        include_once ROOT.'/views/admin/login.php';
        return true;
     }




 public function actionLogout(){
    unset($_SESSION['user']);
    header('Location: /user/login');
    return true;
 }


    
}



?>