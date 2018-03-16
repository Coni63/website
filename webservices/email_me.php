<?php 
    if(!empty($_POST)){
        // getting the captcha
        $valide = false;
        $captcha = "";
        if (isset($_POST["g-recaptcha-response"])){
            $captcha = htmlentities($_POST["g-recaptcha-response"]);
        
            // handling the captcha and checking if it's ok
            $secret = "6LfVLywUAAAAAG2sZe4I0J6kRWjHKUl5lO7HpuKr";
            $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER["REMOTE_ADDR"]), true);
            // if the captcha is cleared with google, send the mail and echo ok.
            if ($response["success"]!= false) {
                $valide = true;
            } else {
                echo '{"status": "error", "content": "invalid captcha"}';
            }
        } else {
            echo '{"status": "error", "content": "missing captcha"}';
        }
        
        // if captcha is valid check form
        if ($valide) {
            session_start();
            $langue = "";
            if (isset($_COOKIE["lang"])){
                if ($_COOKIE["lang"] == "fr" or $_COOKIE["lang"] == "en"){
                    $langue = $_COOKIE["lang"];
                }
            }

            if ($langue == ""){
                if(isset($_SESSION['lang'])) {
                    if ($_SESSION["lang"] == "fr" or $_SESSION["lang"] == "en"){
                        $langue = $_SESSION["lang"];
                    }
                }
            }
            
            $to = "mine.nicolas@gmail.com";
            $from = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $content = filter_var($_POST['content'], FILTER_SANITIZE_STRING);
            $subject = $name . " contacted you";
            $message = $name . " wrote the following: \n\n" . $content;
            if ($langue=="fr") {
                $subject2 = "Copie de votre demande";
                $message2 = "Voici une copie de votre message addressé a Nicolas MINE: \n\n" . $content;
                $error = "Une erreur s'est produite durant l'envoi du mail";
                $incorrect = "Adresse email incorrecte";
                $success = "Le message a bien été envoyé, merci beaucoup !";
            } else {
                $subject2 = "Copy of your request";
                $message2 = "Here is a copy of your message sent to Nicolas MINE: \n\n" . $content;
                $error = "An error occurred while sending mail";
                $incorrect = "Invalid email adress";
                $success = "The message has been sent, thank you very much !";
            }

            $headers =  'From:'. $from . "\r\n" .
                        'Reply-To: do_not_reply@nicolasmine.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
            $headers2 = 'From: do_not_reply@nicolasmine.com' . "\r\n" .
                        'Reply-To: do_not_reply@nicolasmine.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

            if (filter_var($from, FILTER_VALIDATE_EMAIL)) {
                if (mail($to, $subject, $content, $headers) and mail($from, $subject2, $message2, $headers2)) {
                    echo '{"status": "success", "content": "'.$success.'"}';
                } else {
                    echo '{"status": "error", "content": "'.$error.'"}';
                }
            } else {
                echo '{"status": "warn", "content": "'.$incorrect.'"}';
            }   
        }
    }
?>