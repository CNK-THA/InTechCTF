<?php 

if(isset($_POST['submit'])) {
    getInformation();
}

// $conn = new mysqli('localhost', 'admin', 'password', 'ctf');
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
function update_table() {
  $conn = new mysqli('localhost', 'admin', 'password', 'ctf');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  $sql = "SELECT * FROM scoring";
  $result = $conn->query($sql);
  $data_collection = array();
  $name_collectioion = array();
  while($row = $result->fetch_assoc()) {
    $score_to_add = explode(",", $row["score"]);
    
    $sum_value = 0;
    $data = array();
    $data[] = $sum_value; // add 0 for starting point
    for ($i = 0; $i < 10; ++$i) {

      $sum_value += intval($score_to_add[$i]);
      $data[] = $sum_value;
    }
    $data_collection[] = $data;
    $name_collection[] = $row["username"];
  }

  // var_dump($data_collection[0]);
  // var_dump($data_collection[1]);
  // var_dump($name_collection);

  $testing = json_encode($data_collection[0]);
  $testing2 = json_encode($data_collection[1]);
  // echo $testing;
  // echo $testing[1];
  echo "<script> 

  var t = Array.from($testing);
  var t2 = Array.from($testing2);
  
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ['', '', '', '', '', '', '', '', '', '', ''], //11 for starting at 0
          datasets: [{
              label: \"$name_collection[0]\",
              data: t,
              fill: false,
              borderColor: 'rgb(80, 132, 192)',
              tension: 0.4
  
          },
          {
              label: \"$name_collection[1]\",
              data: t2,
              fill: false,
              borderColor: 'rgb(72, 198, 199)',
              tension: 0.4
  
          }]
      },
      // options: {
      //     scales: {
      //         y: {
      //             beginAtZero: true
      //         }
      //     }
      // }
  }); </script>";

  $conn->close();

}

update_table();


function getInformation() {

  $conn = new mysqli('localhost', 'admin', 'password', 'ctf');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  
  $sql = "SELECT * FROM answers WHERE idanswers = " ."'" .$_POST['flag'] ."'";
  // echo $sql;

  $sql2 = "SELECT * FROM scoring WHERE username = " ."'" .$_POST['username'] ."'";
  // echo $sql2;


  $result = $conn->query($sql);
  $result2 = $conn->query($sql2);


  
  if ($result->num_rows > 0 && $result2->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    $row2 = $result2->fetch_assoc();

    $check_solved = explode(",", $row2["solved"]);
    $updated = False;
    $updated_string_solved = "";
    foreach($check_solved as $ans) {
      if($ans == $_POST['flag']){
        $updated = True;
      } else {
        $updated_string_solved.=$ans .",";
      }
    }
    
    if($updated == True) {
      echo "<script>alert('You have already solved this!!! :(')</script>";
    } else {
      $updated_string_solved .= $_POST['flag'];
      $updated = False;
      echo($updated_string_solved);

      $score_to_add = explode(",", $row2["score"]);
      $updated_string = "";
    // var_dump($score_to_add);
    for ($i = 0; $i < 10; ++$i) {
      if($score_to_add[$i] == '0' && $updated == False) {
        $updated_string .= $row['score'] .",";
        $updated = True;
      } else {
        $updated_string .= $score_to_add[$i] .",";
      }
      if($i == 9) {
        $updated_string = substr($updated_string, 0, -1);
      }
    }

    


      // echo($updated_string);

      $sql = "UPDATE scoring SET score = " ."'" .$updated_string ."'" . " WHERE username = " ."'" .$_POST['username'] ."'";
      // echo($sql);
      $conn->query($sql);
      $sql = "UPDATE scoring SET solved = " ."'" .$updated_string_solved ."'" . " WHERE username = " . "'" . $_POST['username'] ."'";
      $conn->query($sql);
      $conn->close();
      echo"<script>alert('Well done, another one done!!')</script>";
      header("Refresh:0");
      
    }


    
    

    
  } else {
    echo "<script>alert('WRONG ANSWER : (')</script>";
  }
  


}




?>