<?php 
    class Tours{

        public static function getSales(){
            $db = Db::getConnection();
            $sales = [];
            $result = $db->query('SELECT *, `nechta odam` as "n_o" FROM `paketlar`, `davlat` WHERE davlat.id=paketlar.d_id;');
            $i = 0;
            while ($row = $result->fetch()){
                $sales[$i]['id'] = $row['id'];
                $sales[$i]['d_id'] = $row['d_id'];
                $sales[$i]['n_o'] = $row['n_o'];
                $sales[$i]['muddat'] = $row['muddat'];
                $sales[$i]['narxi'] = $row['narxi'];
                $sales[$i]['davlat'] = $row['davlat'];
                $sales[$i]['img'] = $row['img'];
                $i++;
            }
            return $sales;
        }

        public static function getServices(){
            $db = Db::getConnection();
            $services = [];
            $result = $db->query('SELECT * FROM `services`');
            $i = 0;
            while ($row = $result->fetch()){
                $services[$i]['id'] = $row['id'];
                $services[$i]['type'] = $row['type'];
                $services[$i]['cost'] = $row['cost'];
                $i++;
            }
            return $services;
        }

        public static function getPopular(){
            $db = Db::getConnection();
            $popular = [];
            $result = $db->query('SELECT * FROM `popular`, davlat, blog WHERE davlat.id=popular.d_id AND blog.d_id=davlat.id;');
            $i = 0;
            while ($row = $result->fetch()){
                $popular[$i]['id'] = $row['id'];
                $popular[$i]['d_id'] = $row['d_id'];
                $popular[$i]['davlat'] = $row['davlat'];
                $popular[$i]['img'] = $row['img'];
                $popular[$i]['text'] = $row['text'];
                $i++;
            }
            return $popular;
        }

        public static function getTestimonial(){
            $db = Db::getConnection();
            $testimonial = [];
            $result = $db->query('SELECT * FROM staff');
            $i = 0;
            while ($row = $result->fetch()){
                $testimonial[$i]['id'] = $row['id'];
                $testimonial[$i]['name'] = $row['name'];
                $testimonial[$i]['job'] = $row['job'];
                $testimonial[$i]['img'] = $row['img'];
                $i++;
            }
            return $testimonial;
        }
  
        public static function getEurope(){
            $db = Db::getConnection();
            $europe = [];
            $result = $db->query('SELECT * FROM `blog`, davlat WHERE davlat.id=blog.d_id AND davlat.id=1 OR davlat.id=2 LIMIT 2');
            $i = 0;
            while ($row = $result->fetch()){
                $europe[$i]['id'] = $row['id'];
                $europe[$i]['d_id'] = $row['d_id'];
                $europe[$i]['text'] = $row['text'];
                $europe[$i]['img'] = $row['img'];
                $europe[$i]['davlat'] = $row['davlat'];
                $i++;
            }
            return $europe;
        }
        public static function getAmerica(){
            $db = Db::getConnection();
            $america = [];
            $result = $db->query('SELECT * FROM  `davlat` WHERE id BETWEEN 3 AND 4 LIMIT 2;');
            $i = 0;
            while ($row = $result->fetch()){
                $america[$i]['id'] = $row['id'];
               
                
                $america[$i]['img'] = $row['img'];
                $america[$i]['davlat'] = $row['davlat'];
                $i++;
            }
            return $america;
        }
        public static function getAustralia(){
            $db = Db::getConnection();
            $australia = [];
            $result = $db->query('SELECT * FROM `blog`, davlat WHERE davlat.id=7 AND  blog.id=4 LIMIT 3;');
            $i = 0;
            while ($row = $result->fetch()){
                $australia[$i]['id'] = $row['id'];
                $australia[$i]['d_id'] = $row['d_id'];
                $australia[$i]['text'] = $row['text'];
                $australia[$i]['img'] = $row['img'];
                $australia[$i]['davlat'] = $row['davlat'];
                $i++;
            }
            return $australia;
        }
        public static function getAsia(){
            $db = Db::getConnection();
            $asia = [];
            $result = $db->query('SELECT * FROM `blog`, davlat WHERE davlat.id=6 AND  blog.id=2 LIMIT 3;');
            $i = 0;
            while ($row = $result->fetch()){
                $asia[$i]['id'] = $row['id'];
                $asia[$i]['d_id'] = $row['d_id'];
                $asia[$i]['text'] = $row['text'];
                $asia[$i]['img'] = $row['img'];
                $asia[$i]['davlat'] = $row['davlat'];
                $i++;
            }
            return $asia;
        }
        public static function getCabinetNewslist(){
            $db = Db::getConnection();
           $CabinetNewsList = [];
           $result = $db->query('SELECT * FROM `blog`, davlat WHERE davlat.id=6 AND  blog.id=2 LIMIT 3;');
           $i = 0;
           while ($row = $result->fetch()) {
            $CabinetNewsList[$i]['id'] = $row['id'];
            $CabinetNewsList[$i]['text'] = $row['text'];
            $CabinetNewsList[$i]['img'] = $row['img'];
            $CabinetNewsList[$i]['datee'] = $row['datee'];
            
              $i++;
           }
           return $CabinetNewsList;
          }
          public static function createNews($name, $sortOrder, $status)
    {
        
        $db = Db::getConnection();

        $sql = 'INSERT INTO content (name, sort_order, status) '
                . 'VALUES (:name, :sort_order, :status)';

    
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sortOrder, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }
    public static function vailed_id($id){
        $db = Db::getConnection();
        $new_query = $db->query("SELECT * FROM content WHERE id = ".$id);
        $result = $new_query->fetchAll();
        if(count($result) != 0){
          return true;
        }else{
          return false;
        }
      }
  
      public static function delete_new($id){
        $db = Db::getConnection();
        $db->query("DELETE FROM content WHERE id = ".$id);
      }
  
        // public static function getMainNews(){
        //     $db = Db::getConnection();
        //     $newsList = [];
        //     $result = $db->query('SELECT content.*, categoriya.name as category FROM content, categoriya WHERE categoriya.id = content.cat_id order by keyss DESC  LIMIT 1;');
        //     $row = $result->fetch();
        //     $newsList['id'] = $row['id'];
        //     $newsList['name'] = $row['name'];
        //     $newsList['anons'] = $row['anons'];
        //     $newsList['img'] = $row['img'];
        //     $newsList['datee'] = $row['datee'];
        //     $newsList['category'] = $row['category'];
        //     return $newsList;
        // }
        // public static function getNewsLast(){
        //     $db = Db::getConnection();
        //     $newsList = [];
        //     $result = $db->query('SELECT content.*, categoriya.name as category FROM content, categoriya WHERE categoriya.id = content.cat_id order by datee DESC LIMIT 3;');
        //     $i = 0;
        //     while ($row = $result->fetch()){
        //         $newsList[$i]['id'] = $row['id'];
        //         $newsList[$i]['name'] = $row['name'];
        //         $newsList[$i]['anons'] = $row['anons'];
        //         $newsList[$i]['img'] = $row['img'];
        //         $newsList[$i]['datee'] = $row['datee'];
        //         $newsList[$i]['category'] = $row['category'];
        //         $i++;
        //     }
        //     return $newsList;
        // }
        // public static function getCategoryList(){
        //     $db = Db::getConnection();
        //     $newsList = [];
        //     $result = $db->query('SELECT * FROM `categoriya`');
        //     $i = 0;
        //     while ($row = $result->fetch()){
        //         $newsList[$i]['id'] = $row['id'];
        //         $newsList[$i]['name'] = $row['name'];
        //         $i++;
        //     }
        //     return $newsList;
        // }
        // public static function getHashtagList(){
        //     $db = Db::getConnection();
        //     $newsList = [];
        //     $result = $db->query('SELECT keyword FROM content');
        //     $i = 0;
        //     while ($row = $result->fetch()){
        //         $tags = explode(",", $row['keyword']);
        //         foreach($tags as $tag){
        //             if (array_search($tag, $newsList) == false){
        //                 $newsList[$i] = $tag;
        //                 $i++;
        //             }
        //         }
        //     }
        //     return $newsList;
        // }
        // public static function getNewsByCategory($id){
        //     $db = Db::getConnection();
        //     $newsList = [];
        //     $result = $db->query("SELECT content.*, categoriya.name as category FROM content, categoriya WHERE content.cat_id = categoriya.id and categoriya.id = $id order by keyss DESC LIMIT 8");
        //     $i = 0;
        //     while ($row = $result->fetch()){
        //         $newsList[$i]['id'] = $row['id'];
        //         $newsList[$i]['name'] = $row['name'];
        //         $newsList[$i]['anons'] = $row['anons'];
        //         $newsList[$i]['img'] = $row['img'];
        //         $newsList[$i]['datee'] = $row['datee'];
        //         $newsList[$i]['category'] = $row['category'];
        //         $i++;
        //     }
        //     return $newsList;
        // }
        // public static function getNew($id){
        //     $db = Db::getConnection();
        //     $newsList = [];
        //     $result = $db->query("SELECT content.*, categoriya.name as category FROM content, categoriya WHERE categoriya.id=$id and categoriya.id = content.cat_id order by keyss DESC  LIMIT 1;");
        //     $row = $result->fetch();
        //     $newsList['id'] = $row['id'];
        //     $newsList['name'] = $row['name'];
        //     $newsList['anons'] = $row['anons'];
        //     $newsList['img'] = $row['img'];
        //     $newsList['datee'] = $row['datee'];
        //     $newsList['text'] = $row['text'];
        //     $newsList['category'] = $row['category'];
        //     return $newsList;
        // }
    }
?>