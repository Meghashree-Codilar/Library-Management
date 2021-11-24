<?php
session_start();
if($_SESSION['email']==NULL && $_SESSION['password']==NULL){
    header('location:signin.php');
}