<?php

  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'dirctions';

  $connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

  if(mysqli_connect_errno()):
    printf("Failed Connection: %s\n", mysqli_connect_errno());
    exit();
  endif;

if(isset($_POST['stop'])){
    echo "<br>";

    $my_query = "";

    $my_query = "select * from base WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO base (stop, forward, left, right, backward) VALUES (1, 0, 0, 0, 0)";
    $result = mysqli_query($connection, $my_query);
    

}else if(isset($_POST['forward'])){
    echo "<br>";

    //$my_query = "";

    //$my_query = "select * from base WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO base (stop, forward, left, right, backward) VALUES (0, 1, 0, 0, 0)";
    $result = mysqli_query($connection, $my_query);
    
} else if(isset($_POST['backward'])){
    echo "<br>";

   // $my_query = "";

    //$my_query = "select * from base WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO base (stop, forward, left, right, backward) VALUES (0, 0, 1, 0, 0)";
    $result = mysqli_query($connection, $my_query);
    

}else if(isset($_POST['left'])){
    echo "<br>";

    //$my_query = "";

   // $my_query = "select * from base WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO base (stop, forward, left, right, backward) VALUES (0, 0, 0, 1, 0)";
    $result = mysqli_query($connection, $my_query);
    

}else if(isset($_POST['right'])){
    echo "<br>";

   // $my_query = "";

    //$my_query = "select * from base WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO base (stop, forward, left, right, backward) VALUES (0, 0, 0, 0, 1)";
    $result = mysqli_query($connection, $my_query);
    

}


?>