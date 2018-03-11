<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
class indexController extends Controller
{
    public function postSendMail (Request $request){
     	// $this->validate($request,[
     	// 	'fullname' => 'required|min:3',
     	// 	'email'=>'required|min:3',
     	// ]);
     	// $to ="noloveme1995@gmail.com";
     	// $subject ="Thư Liên Hệ";
     	// $email =$request->input('email');
     	// $messages =$request->input('note');
     	// $header ="From: $email";
     	// echo $to.' '.$subject.' '.$email.' '.$messages.' '.$header;
     	// $sent =mail($to, $subject, $messages, $header);
     	$to      = 'noloveme1995@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$sent =mail($to, $subject, $message, $headers);
     	echo ($sent ? "Thanh cong": "that bai");
     	exit;

    }
}
