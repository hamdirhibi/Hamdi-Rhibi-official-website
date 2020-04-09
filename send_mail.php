<?php

     $name = $_POST['name']; 
     $email = $_POST['email']; 
     $subject = $_POST['subject']; 
     $Message = $_POST['message']; 

     


      require_once 'vendor/autoload.php' ; 


      $transport = (new Swift_SmtpTransport('smtp.gmail.com',587,'tls'))
       ->setUsername('codeinthedarktunisia@gmail.com')
       ->setPassword('codeinthedark'); 



    //Create the mailer using your created Transport 
    $mailer = new Swift_Mailer($transport);
   
    //Create a message 
    $message = (new Swift_Message($subject))
        ->setFrom($email)
        ->SetTo(['geekrhibi@gmail.com'=>$name])
        ->setBody("
        
        <div style='font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee'>
     
           <h1
           style='font-family: &apos;Cabin&apos;, sans-serif; line-height: 100%;text-align:center'>
           <span style='color:#4e5f70;'><em><strong><span
                          style='font-size:16px;'>Vous avez R&#xE9;cu un
                          Nouveau Email&#xA0;
                          :&#xA0;</span></strong></em></span></h1>
        <h1
           style='font-family: &apos;Cabin&apos;, sans-serif; line-height: 100%;'>
           <span style='color:#27ae60;'><span
                    style='font-size: 16px;'><b><i>From
                          :&#xA0;  </i></b></span></span> 
                          <span style='color:black;'><span
                          style='font-size: 16px;'><b><i> $name </i></b></span></span> </h1>
        <h1
        style='font-family: &apos;Cabin&apos;, sans-serif; line-height: 100%;'>
        <span style='color:#27ae60;'><span
                 style='font-size: 16px;'><b><i>Email
                       :&#xA0;  </i></b></span></span> 
                       <span style='color:black;'><span
                       style='font-size: 16px;'><b><i> $email </i></b></span></span> </h1>
        <h1
        style='font-family: &apos;Cabin&apos;, sans-serif; line-height: 100%;'>
        <span style='color:#27ae60;'><span
                 style='font-size: 16px;'><b><i>Subject
                       :&#xA0;  </i></b></span></span> 
                       <span style='color:black;'><span
                       style='font-size: 16px;'><b><i> $subject </i></b></span></span> </h1>
        <h1
        style='font-family: &apos;Cabin&apos;, sans-serif; line-height: 100%;'>
        <span style='color:#27ae60;'><span
                 style='font-size: 16px;'><b><i>Message
                       :&#xA0;  </i></b></span></span> 
                       <span style='color:black;'><span
                       style='font-size: 16px;'><b><i> $Message </i></b></span></span> </h1>
                          </div>",'text/html') ; 

        //echo"we try" ; 

        $message->setContentType("text/html");

    //sendMessage 
        if (!$mailer->send($message))  {     

            echo "une erreur s'est produite réessayer plus tard";
            error_get_last()['message'];
            }
            else
            {	          
    
            echo "<script type='text/javascript'>
               alert('Votre email a été envoyer avec succès'); 
           </script>";  
            echo "<h2 style='color : green ; border-width:0px'>Votre Email a été envoyer avec Succés </h2>";  
            header('/success.html');
            }
   
?>