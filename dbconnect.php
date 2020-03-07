<?php
  try{
    $db = new PDO('mysql:dbname=talk-board;host=127.0.0.1;charset=utf8', 'root', 'root');  
  } catch(POOException $e){
    print('DB接続エラー:' . $e->getMessage());
  }
?>