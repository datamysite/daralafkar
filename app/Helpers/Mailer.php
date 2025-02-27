<?php 

namespace App\Helpers;

use Mail;

class Mailer
{
    public static function sendMail($subject, $receiver_email, $receiver_name, $template, $data)
    {
        Mail::send($template, $data, function($message) use ($receiver_email, $receiver_name, $subject) {
             $message->to($receiver_email, $receiver_name)->subject
                ($subject);
             $message->from('sender@daralafkarmarketing.ae','Dar Alafkar Marketing');
          });

        return true;
    }
}