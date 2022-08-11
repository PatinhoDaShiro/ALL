<?php
    require_once DIR_BASE."template/header.php";

    require_once DIR_BASE."template/msg.php";
    ?>
    <main>
    <?php
    if(!isset($_SESSION['user'])){
        echo "<a href='".URL_BASE."user/login' >Login</a>";
    }else{
        echo "<a href='".URL_BASE."cash_book' >Cash Book</a>";
        echo "<a href='".URL_BASE."user/logout' >Logout</a>";
    }
  ?>
  </main>
  

