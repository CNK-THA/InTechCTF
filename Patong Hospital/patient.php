<?php 
$conn = new mysqli('localhost', 'admin', 'password', 'patong_hospital');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  
  $sql = "SELECT * FROM patients_data";
  $result = $conn->query($sql);
  $counter = 1;
  while($row = $result->fetch_assoc()) {
    echo "<tr>
      <th scope='row'>$counter</th>
      <td> \"$row[name]\" </td>
      <td> \"$row[address]\" </td>
      <td> \"$row[condition]\" </td>
      <td> \"$row[medicationHistory]\" </td>
      <td> \"$row[dateAdmitted]\" </td>
      <td> \"$row[remarks]\" </td>
    </tr>
    ";
    $counter += 1;
}




?>