<?php
include_once("connection.php");
include_once("models/Member.php");
include_once("views/IndexView.php");

class MemberController {
  private $member;

  function __construct(){
    $this->member = new Member(Connecttt::$db_host, Connecttt::$db_user, Connecttt::$db_pass, Connecttt::$db_name);
  }

  public function index() {
    $this->member->open();
    $this->member->getMember();
    
    $data = array();
    while($row = $this->member->getResult()){
      // echo "<pre>";
      // print_r($row);
      // echo "</pre>";
      array_push($data, $row);
    }

    $this->member->close();

    $view = new IndexView();
    $view->render($data);
  }

  
  function add($data){
    $this->member->open();
    $this->member->addMember($data);
    $this->member->close();
    
    header("location:index.php");
  }

//   function edit($id){
//     $this->buku->open();
//     $this->buku->statusBuku($id);
//     $this->buku->close();

//     header("location:index.php");
//   }

  function delete($id){
    $this->member->open();
    $this->member->delete($id);
    $this->member->close();

    header("location:index.php");
  }

}