<?php

$id = $_GET["id"];
$title = $_POST["title"];
$content = $_POST["content"];
$url = $_POST["url"];

$pdo = new PDO("mysql:host=localhost;dbname=inwonweb", "inwon", "bitnami") or die("PDO creation failure");

$stm = $pdo->prepare("INSERT INTO board(id, title, content, url) VALUES (:id, :title, :content, :url)");
$stm->execute( [ ":id" => $id, ":title" =>$title, ":content" =>$content, ":url" => $url ] ) or die("execute failed");
$result = $stm->fetch(PDO::FETCH_OBJ);
if ($result) { 
	$response["error"] = "no.";
}
else {
	$response["error"] = "error.";
}

echo $response;

echo '<a href="src/video/dx9.html">메뉴화면으로</a>';

?>