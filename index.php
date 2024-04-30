<?php
include_once("connection.php");
include_once("models/DB.php");
include_once("models/Template.php");
include_once("controllers/member.control.php");

$member = new MemberController();
$view = new Template("templates/index.html");
  if(isset($_POST['submit'])){
    $member->add($_POST);
  }
  else if(!empty($_GET['id_hapus'])){
    $id = $_GET['id_hapus'];
    $member->delete($id);
  }
  else {
    $member->index();
  }

  // $id="";
  // $name="";
  // $email="";
  // $phone="";
  // $error="";
  // $success="";
  // if($_SERVER["REQUEST_METHOD"]=='GET'){
  //   if(isset($_GET['id'])){
  //     $id = $_GET['id'];
  //     $sql = "select * from members where id=$id";
  //     $result = $conn->query($sql);
  //     $row = $result->fetch_assoc();
  //     while(!$row){
  //       header("location:index.php");
  //       exit;
  //     }
  //     $name=$row["name"];
  //     $email=$row["email"];
  //     $phone=$row["phone"];
  //   }
  // }
  // else {
  //   $id = $_POST["id"];
  //   $name=$_POST["name"];
  //   $email=$_POST["email"];
  //   $phone=$_POST["phone"];
  //   $sql = "update members set name='$name', email='$email', phone='$phone' where id='$id'";
  //   $result = $conn->query($sql);
  // }

  //$view->write();



