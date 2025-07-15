<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$name = $_GET['name']  ?? '';
$user = $_GET['user']  ?? '';
$pass = $_GET['pass']  ?? '';
$cmd  = $_GET['cmd']   ?? '';
$page = $_GET['page']  ?? '';
$url  = $_GET['url']   ?? '';
$greeting = $name ? "Hello, $name!" : '';
?>
<!DOCTYPE html>
<html>
<head><title>Super‑Insecure PHP Demo</title></head>
<body>
  <h1>Super‑Insecure PHP Demo</h1>
  <form method="GET">
    <label>Your name: <input name="name"></label>
    <button>Say hi</button>
  </form>
  <p><?= $greeting ?></p>
