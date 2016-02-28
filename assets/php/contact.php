<?php

if(isset($_POST['name'])){
    
    $res['sendstatus'] = 1;
    $res['message'] = 'Form Submission Succesful';
	mail('alistercabral@gmail.com', $_POST['name'].'    mail: '.$_POST['email'], $_POST['message']);
    echo json_encode($res);
}


?>