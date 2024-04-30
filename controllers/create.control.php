<?php
// include_once("connection.php");
// include_once("models/Member.php");
// include_once("views/IndexView.php");

// class CreateController {
//   private $reate;

//   function __construct(){
//     $this->create = new Member(Connecttt::$db_host, Connecttt::$db_user, Connecttt::$db_pass, Connecttt::$db_name);
//   }

//   public function index() {
//     $this->create->open();
//     $this->create->getMember();
    
//     $data = array();
//     while($row = $this->create->getResult()){
//       // echo "<pre>";
//       // print_r($row);
//       // echo "</pre>";
//       array_push($data, $row);
//     }

//     $this->create>close();

//     $view = new Create();
//     $view->render($data);
//   }

  
//   function add($data){
//     $this->create>open();
//     $this->create->addMember($data);
//     $this->create->close();
    
//     header("location:index.php");
//   }

// //   function edit($id){
// //     $this->buku->open();
// //     $this->buku->statusBuku($id);
// //     $this->buku->close();

// //     header("location:index.php");
// //   }

//   function delete($id){
//     $this->create>open();
//     $this->member->delete($id);
//     $this->member->close();

//     header("location:index.php");
//   }

//}