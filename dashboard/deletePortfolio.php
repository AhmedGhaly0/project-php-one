<?php
session_start();

require_once 'lib/portfolio.php';
 
// $res = DeletePro($_GET['id']);

$res = new portfolio();
$res->DeletePro($_GET['id']);

if ($res == 1) {
  header("LOCATION:allPortfolio.php");
}else{
  header("LOCATION:allPortfolio.php");

}