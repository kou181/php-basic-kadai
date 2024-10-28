<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_016</title>
 </head>
 
 <body>
     <p>
         <?php
         // クラスを定義する
         class Food {
             // プロパティを定義する
             private $name;
             private $price;
             public function set_name(string $name) {
                $this->name = $name;
             }
            public function set_price(string $price) {
                $this->price = $price;
            }
            public function show_name() {
                echo $this->name . '<br>';
            }
            public function show_price() {
                echo $this->price . '<br>';
            }
         

 
        }

         class Animal {
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;
            public function set_name(string $name) {
                $this->name = $name;
            }
            public function show_name() {
                echo $this->name . '<br>';
            }
            public function set_height(string $height) {
                $this->height = $height;
            }
            public function show_height() {
            echo $this->height . '<br>';
            }
            public function set_weight(string $weight) {
                $this->weight . '<br>';
            }
           public function show_weight() {
            echo $this->weight . '<br>';
                }
        }

         // インスタンス化する
         $potato = new Food();
         $dog = new Animal();

         $potato->set_name('potato');
        //  $potato->show_name();
         $potato->set_price('250');
 
         $dog->set_name('dog');
         $dog->set_weight('60');
         $dog->set_height('5000');
 
   
         print_r($potato);
         echo '<br>';
         print_r($dog);
         echo '<br>';
         echo $potato->show_price();
         echo $dog->show_height();

?>
     </p>
 </body>
 
 </html>