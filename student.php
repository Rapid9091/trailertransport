<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpMailer/src/Exception.php';
require './phpMailer/src/PHPMailer.php';
require './phpMailer/src/SMTP.php';


$parent_name = $_POST[''];


$mail = new PHPMailer(true);
    
$mail->isSMTP();
// $mail->Host = 'smtp.gmail.com';
// $mail->Host = 'smtp.titan.email';
$mail->Host = 'smtp.hostinger.com';
$mail->SMTPAuth = true;
$mail->Username = 'info@rapidautoshipping.com';
$mail->Password = 'Welcome@9091';
$mail->SMTPSecure = 'ssl';
$mail->Port= 465;
// $mail->Host = 'smtp.gmail.com';
// $mail->SMTPAuth = true;
// $mail->Username = 'deepakbaradwaj933@gmail.com';
// $mail->Password = 'sjkosmmlnbabblmm';
// $mail->SMTPSecure = 'ssl';
// $mail->Port= 465;
// 
$mail->setFrom('info@rapidautoshipping.com', 'rapidautoshipping');
// $mail->setFrom('deepakbaradwaj933@gmail.com', 'ShareRapidly');

$mail->addAddress($email);
// $mail->addBCC('amankeshari5937@gmail.com', 'new customer details');
// $mail->addBCC('atulkeshari14@hotmail.com', 'new customer details');
// $mail->addBCC('info@rapidautoshipping.com', 'new customer details');
$mail->isHTML(true);

$mail->Subject = 'Qoute from Rapid';

$mail->Body =  '
<table>
<tr style="">
<td>'.$parent_name.'</td>
</tr>
</table>


';




if(!$mail->send()){
    echo json_encode(['status'=>500]);
   }else{
       echo json_encode(['status'=>200]);
   }
   ?>
