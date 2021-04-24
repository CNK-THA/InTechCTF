<?php  


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = array("Nope you didn't get it", "Hahah it's not that easy", "This is not the answer but you're almost there!!");

if($_POST["secret_string"] == 'youneedthis' && $_POST["date"] == '24-04-2021' 
&& $_POST["authentication"] == 'I_Approve_Of_This') {
    echo "Well done!! Your final answer is flag{API_Master}";
} else {
    echo $input[array_rand($input)];
}

} else {
    echo "Well done. You will now craft a POST request to this same link with the following payload:
    secret_string = youneedthis  
    | date = 24-04-2021
    | authentication = I_Approve_Of_This | successful POST request will display the answer.";
}


?>