<?php 
$newFile = "../../" . $_POST["name"] . ".html";

if (file_exists($newFile)) {
	unlink($newFile);
} else {
	fopen($newFile, "w");
}