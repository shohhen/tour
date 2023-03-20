
<?php 
include_once ROOT.'/models/Tours.php'; 
class CabinetController{
    protected function Tekshir () {
        if (!(isset($_SESSION['user']) && $_SESSION['user']['login'])) {
            header('Location: /user/login');
        }
    }

    public function actionIndex () {
        $this->Tekshir();
        $CabinetNews = Tours::getCabinetNewslist();

        include_once "views/admin/cabinet.php";
        return true;
    }
    
    public function actionEdit($id){
        $this->Tekshir();

        include_once "views/admin/edit.php";
        return true;
    }
    
    public function actionDelete($id){
        if(Tours::vailed_id($id)){
            Tours::delete_new($id);
            header("Location: /cabinet");
        }
        return true;
    }
  //yangiliklarni qo'shish

    public function actionCreate(){
        $this->Tekshir();
        if (isset($_POST['submit'])) {
          
            $name = $_POST['name'];
            $sortOrder = $_POST['sort_order'];
            $status = $_POST['status'];
        
            $errors = [];

          
            if (!isset($name) || empty($name)) {
                $errors[] = 'Barcha maydonlarni to`ldiring';
            }


            if ($errors == false) {
              
                Tours::createNews($name, $sortOrder, $status);

              
                header("Location: /cabinet");
            }
        }

        include_once "views/admin/create.php";
        return true;
    }
}
?>