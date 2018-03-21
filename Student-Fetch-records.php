<?php
require('Database/connection.php');


$sql = "SELECT * FROM student_tb";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


echo "
 <table class='table'>
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>standard</th>
          <th>subject</th>
          <th>address</th>
          <th>Phone Number</th>
          <th>Location</th>
          <th style='width: 36px;''></th>
        </tr>
      </thead>
      <tbody>";

 while($row = $result->fetch_assoc()) {
       
   
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['surname']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['standard']."</td>";
    echo "<td>".$row['subject']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['phone_number']."</td>";
    echo "<td>".$row['location']."</td>";
    echo "<td><a href='#' class='edit' value='".$row['id']."' id='edit'><i class='icon-pencil'></i></a>
    		  <a href='#' class='del' id='del' value='".$row['id']."'><i class='icon-remove'></i></a></td>";
    echo "</tr>";
 } 


echo "</tbody>";
echo "</table>";

} else {
    echo "0 results";
}
$conn->close();


?>