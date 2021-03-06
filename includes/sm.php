<?php
require_once 'vendors/autoload.php';

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
        <div style="width:80%;">
           <img src="https://res.cloudinary.com/iotstudent/image/upload/v1629648738/asset-01.png" style="height:20%;width:80%;">
        </div>
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



function sendRegEmail($userEmail)
{
  $subject='Welcome to El-Chari';
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
      <div style="width:80%;">
      <img src="https://res.cloudinary.com/iotstudent/image/upload/v1629648738/asset-01.png" style="height:20%;width:80%;">
   </div>
        <pre>
        You???re all set!
        Now you can sit back and watch your money grow every day as we invest it in our profitable businesses.
        Welcome to the family. We???ll keep you updated with investment tips, news, and special offers.
        <p>
        <a href="localhost/elchari/login.php">Log In</a>
        </p>
        </pre>
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



function sendInvEmail($userEmail,$packagename,$fullname)
{
  $subject='You Added a New Package!';
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
      <div style="width:80%;">
      <img src="https://res.cloudinary.com/iotstudent/image/upload/v1629648738/asset-01.png" style="height:20%;width:80%;">
   </div>
        <pre>
        '.$fullname.',
        You just added the '.$packagename.' package to your portfolio.Well done!
        Click on the button below to see the changes on your dashboard.
        <p>
        <a href="localhost/elchari/user/index.php">Log In</a>
        </p>
        </pre>
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


function sendVerificationEmail($userEmail, $token)
{
    global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>Verification Link </title>
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
      <div style="width:80%;">
      <img src="https://res.cloudinary.com/iotstudent/image/upload/v1629648738/asset-01.png" style="height:20%;width:80%;">
   </div>
        <p>Thank you for signing up on our site. Please click on the link below to verify your account</p>
        <a href="localhost/elchari/verifyemail.php?token=' . $token . '">Verify Email!</a>
      </div>
    </body>

    </html>';

    // Create a message
    $message = (new Swift_Message('Verify your email'))
        ->setFrom("promisebeeceo@gmail.com")
        ->setTo($userEmail)
        ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);

    if ($result > 0) {
        return true;
        echo "moi moi";
    } else {
        echo "error";
        return false;
    }
}



function sendAffEmail($userEmail, $name,$sector)
{
    global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>Verification Link </title>
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
        <div style="width:80%;">
        <img src="https://res.cloudinary.com/iotstudent/image/upload/v1629648738/asset-01.png" style="height:20%;width:80%;">
    </div>
        <p>
        <pre>
        Dear '.$name.',
        We have received your application to become an El-Chari affiliate for our '.$sector.' business.
        Our customer care representative will be in touch with you soon to schedule an appointment.
        </pre>
        </p>
      </div>
    </body>

    </html>';

    // Create a message
    $message = (new Swift_Message('El-Chari Affiliate'))
        ->setFrom("promisebeeceo@gmail.com")
        ->setTo($userEmail)
        ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);

    if ($result > 0) {
        return true;
        echo "moi moi";
    } else {
        echo "error";
        return false;
    }
}

function sendContactEmail($senderemail,$sendername,$senderphone,$sendermessage,$subject,$senderorg)
{
    global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact Mail</title>
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
      
        <p> Message received from '. $senderemail.' </p>
        <p>Senders Name '. $sendername.' </p>
        <p>Senders Phone '. $senderphone.' </p>
        <p>Senders Organization '. $senderorg.' </p>
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
      header('Location:../../contact.php');
      die();
    } else {
      $_SESSION['error'] = " Your message  was not sent  ";
      header('Location:../../contact.php');
      die();
    }
}



function sendRecEmail($senderemail,$sendername,$senderphone,$sendermessage,$url)
{
    global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact Mail</title>
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
      
        <p> Message received from '. $senderemail.' </p>
        <p>Senders Name '. $sendername.' </p>
        <p>Senders Phone '. $senderphone.' </p>
        <h2 style="font-weight:bolder;">Message</h2>
        <p>'. $sendermessage.' </p>
      </div>
    </body>

    </html>';

    // Create a message
    $message = (new Swift_Message("Contact mail"))
        ->setFrom($senderemail)
        ->setTo('promisebeeceo@gmail.com')
        ->setReplyTo($senderemail)
        ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);

    if ($result > 0) {
      $_SESSION['message'] = " your message was sent successfully ";
      echo $url;
      header("Location:$url");
      die();
    } else {
      $_SESSION['error'] = " Your message  was not sent  ";
      header("Location:$url");
      die();
    }
}








