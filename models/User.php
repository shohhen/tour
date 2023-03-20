<?php 
class User
{
public static function checkName($name){
    if(strlen($name) >=4){
        return true;
    }
    return false;
}
public static function checkPassword($password){
    if(strlen($password) >=6){
        return true;
    }
    return false;
}
public static function checkEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    return false;
}





public static function userLogin ($login, $password) {
    $db = Db::getConnection();
    $sql = "SELECT COUNT(id) as count FROM users WHERE login = :login AND password = :password LIMIT 1 ";
    $result = $db->prepare($sql);
    $result->execute(['login' => $login, 'password' => $password]);
    $res = $result->fetchAll();
    return intval($res[0]['count']) > 0;
}











//email borligini tekshirish
public static function ifMailExists($email){
    $db = Db::getConnection();
    $sql = "SELECT COUNT(id) as count FROM users WHERE email = :email LIMIT 1 ";
    $result = $db->prepare($sql);
    $result->execute(['email'=>$email]);
    $users = $result->fetchAll();
    return intval($users[0]['count']) > 0;
}

//user qo'shish
public static function addUser($login, $email, $password){
    $db = Db::getConnection();
    $sql = "INSERT INTO users (login,email,password) VALUES(:login,:email,:password)";
    $result = $db->prepare($sql);
    $result->execute(['login'=>$login,'email'=>$email,'password'=>$password]);
    $users = $result->fetchAll();
    
}
// userni tekshirish
public static  function checkUser($username, $password){
    $db = Db::getConnection();
    $user_query = $db->query("SELECT * FROM users where login = '".$username."' OR email = '".$username."' AND password = '".$password."'");
    echo "SELECT * FROM users where login = '".$username."' OR email = '".$username."' AND password = '".$password."'";
    $user = $user_query->fetchAll();
    if(count($user) == 0){
        return false;
    }else{
        return $user[0];
    }
}
public static function kirish($tekshirish){
    $_SESSION['user'] = $tekshirish;
}
public static function checkSession(){
    if (isset($_SESSION['user'])) {
        return $_SESSION['user'];
           }
           
}
}
?>