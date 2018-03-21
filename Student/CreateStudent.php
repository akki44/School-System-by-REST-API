<?php
require('../Database/connection.php');

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

	$name = stripslashes($_REQUEST['name']);
	$surname = stripslashes($_REQUEST['surname']);
	$email = $_REQUEST['email'];
	$password = md5($_REQUEST['password']);
	$standard = $_REQUEST['standard'];
	$subject = $_REQUEST['subject'];
	$address = $_REQUEST['address'];
	$mobile = $_REQUEST['mobile'];
	$location = $_REQUEST['location'];

	//$sql = "INSERT INTO student_tb (`name`, `surname`, `email`, `password`, `standard`, `subject`, `address`, `phone_number`, `location`) VALUES($name,$surname,$email,$password,$standard,$subject,$address,$mobile,$location)";

	$sql = "INSERT INTO student_tb (`name`, `surname`, `email`, `password`, `standard`, `subject`, `address`, `phone_number`, `location`) VALUES('$name','$surname','$email','$password','$standard','$subject','$address','$mobile','$location')";

   //$condition = array('id', 'name');
   //$where = array('id' => 1);
  // $record =  SelectData('student_td', $where,  $condition);



	//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
	//VALUES ('John', 'Doe', 'john@example.com')";

	$record = $conn->query($sql);

	if ($record == 1) {
	    $data["message"]= "Record Successfully Insrted";
	    $data["status"] = "success";
	} else {
		$data["message"]= $conn->error;;
	    $data["status"] = "failed";	 	    
	}

}

else {
	$data["message"]= "Wrong Method";
	$data["status"] = "Error";	
}

echo json_encode($data);

?>