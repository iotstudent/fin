<?php
require_once '../vendors/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername("promisebeeceo@gmail.com")
    ->setPassword("Nwanozie!97");

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);


function sendResetEmail($userEmail,$encrypted)
{
  $subject='Password Reset Link ';
    global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>Password Reset Mail</title>
      <style>
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
        <p>Please click on the link below to reset your password</p>
        <p>please if you did not request for this link kindly ignore </p>
        <a href=localhost/elchari/reset.php?token='.$encrypted.'>Reset Email!</a>
      </div>
    </body>

    </html>';


    // Create a message
    $message = (new Swift_Message($subject))
        ->setFrom('promisebeeceo@gmail.com')
        ->setTo($userEmail)
        ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);

    if ($result > 0) {
      return true;
  } else {
      echo "error";
  }
}



function sendContactEmail($senderemail,$sendername,$senderphone,$sendermessage,$subject)
{
    global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact Mail</title>
      <style>
      body{
        background-color:blue;
      }
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
      
        <p> Message received from '. $senderemail.' </p>
        <p>Senders Name '. $sendername.' </p>
        <p>Senders Phone '. $senderphone.' </p>
        <h2 style="font-weight:bolder;">Message</h2>
        <p>'. $sendermessage.' </p>
      </div>
    </body>

    </html>';

    // Create a message
    $message = (new Swift_Message($subject))
        ->setFrom($senderemail)
        ->setTo('promisebeeceo@gmail.com')
        ->setReplyTo($senderemail)
        ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);

    if ($result > 0) {
      $_SESSION['message'] = " your message was sent successfully ";
      header('Location:contact.php');
      die();
    } else {
      $_SESSION['error'] = " Your message  was not sent  ";
      header('Location:contact.php');
      die();
    }
}









