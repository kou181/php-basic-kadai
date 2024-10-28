<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_011</title>
 </head>
 
 <body>
     <p>
    
 
         <?php
         $contens_data = ['id' => '1', '値段' => 200, '産地' => '北海道'];
         
         // 連想配列$personal_dataのキーと値を1つずつ順番に出力する
         foreach ($contens_data as $key => $value) {
             echo "{$key}；{$value}<br>";
         }
         ?>
                  
     </p>
 </body>
 
 </html>
