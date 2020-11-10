<?php
session_start();

// session_destroy(); 取消掉所有的session

unset($_SESSION['user']);

header('Location: 17.login.php'); 
// 登入後清掉netwrok，點18.logout.php會跳轉到17.login.php
// network status 302為跳轉 200為拿到資料