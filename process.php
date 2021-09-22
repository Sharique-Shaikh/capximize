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

$data=array(
      'name' => $name,   
      'email' => $email,
      'mobileno'=>$mobileno,
      'message' =>$message
  );

$sql="INSERT INTO `tbl_contactus`(`name`, `email`, `mobileno`, `message`) VALUES (:name, :email, :mobileno, :message)";
$stmt= $pdo->prepare($sql);


if ($stmt->execute($data)) { 
    $response['error'] = "1";
}
else{
   $response['error'] = "2";
}
	
echo json_encode($response);
exit();
}


function sanitize_data($data)
 {
  $data = trim($data);
  $data = stripslashes($data);
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  return $data;    
 }

 ?>