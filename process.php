<?php 

ob_clean();
ob_start();
session_start();
date_default_timezone_set('Asia/Kolkata');
require_once('connection.php');

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
switch ($action) {
  case 'contactus' : contactus($pdo); break;
  default : header('Location: index.php'); 
}


function contactus($pdo){

  
  $name=sanitize_data($_POST['name']);
  $email=$_POST['email'];
  $mobileno=sanitize_data($_POST['mobileno']);
  $message=sanitize_data($_POST['message']);
try{
$data=array(
      'name' => $name,   
      'email' => $email,
      'mobileno'=>$mobileno,
      'message' =>$message
  );
$sql="INSERT INTO `tbl_contactus`(`name`, `email`, `mobileno`, `message`) VALUES (:name, :email, :mobileno, :message)";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);     
  $response['error'] = "true";
} catch(PDOExecption $e) { 
      $dbh->rollback(); 
      print "Error!: " . $e->getMessage() . "</br>"; 
      $response['error'] = "false";
  } 
 
//  header('location:https://www.greatplacetowork.in/register');
}










// function pastparticipating($pdo){
//   $sql = "SELECT * FROM `wp_posts` where post_status = 'publish' and post_type='tablepress_table' and ID='7961'";
//   $stmt= $pdo->prepare($sql);
//   $stmt->execute();
//   $result = $stmt->fetchAll();
//   //print_r($result); die();
//  echo json_decode($result[0]['post_content'],true);

//  // echo "<pre>";
//   //print_r($result[0]['post_content']);
//   //echo json_decode();
//   //echo trim($result[0]['post_content']);
// }






















function sanitize_data($data)
 {
  $data = trim($data);
  $data = stripslashes($data);
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  return $data;    
 }

 ?>