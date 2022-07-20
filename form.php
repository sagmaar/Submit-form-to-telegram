<?php
define ('url',"https://api.telegram.org/bot5339659621:AAEEKhLdUM8ZXC5VKB225ftxAeUHqsWHvlM/");
$name = $_GET['name'];
$message = $_GET['message'];
$chat_id = '627226274';
$message = urlencode("Name:".$name."\n Message : ".$message);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
?>
