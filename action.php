<?php

require 'vendor/autoload.php';
require('database/User.php');
$user_object = new User;

	// use PHPMailer\PHPMailer\PHPMailer;
	// use PHPMailer\PHPMailer\SMTP;
	// use PHPMailer\PHPMailer\Exception;

//action.php

session_start();


if(isset($_POST['action']) && $_POST['action'] == "registar")
{

	$user_object->set_user_name($_POST['utilizador']);

	$user_object->set_email($_POST['email']);

	$user_object->set_password($_POST['senha']);

	$user_object->set_status('Inactivo');

    $user_object->setUserVerificationCode(md5(uniqid()));


	if($user_object->save_data()) {


            $to_mail = $user_object->get_user_email();
            $subject = 'Plus vendas - validacão por email';
            $body = '<h3 style="text-align:center">Agradecemos por fazer compras na nossa loja</h3>
            <p style="text-align:center">Este é o email de verificação, por favor click no link abaixo para activar o seu registo.</p>
             <p style="text-align:center"><a href="https://98ed-41-220-201-124.ngrok-free.app/Plus_vendas/plus_vendas/verify.php?code='.$user_object->getUserVerificationCode().'">Clique aqui para verificar</a></p>
              <p><h3>Obrigado!</h3></p>
              <p><h3>Plus Vendas 2023</h3></p>
        ';
            $headers = 'From: qmz2023@gmail.com' . "\r\n" .
                    'Reply-To: qmz2023@gmail.com' . "\r\n" .
                    'Content-Type: text/html; charset=UTF-8' . "\r\n";
            
            // ini_set("SMTP", "localhost");
            // ini_set("smtp_port", 25);
            
            if (mail($to_mail, $subject, $body, $headers)) {
                echo 'YES';
            } else {
                echo 'NO';
            }
            
	}else {
		echo 'NO';
	}
}

if(isset($_POST['action']) && $_POST['action'] == "logar"){
    
    $user_object->set_email($_POST['utilizador']);
    $user_object->set_password($_POST['senha']);

    $user_data = $user_object->login();
   
    if(is_array($user_data) && count($user_data) > 0) {
      foreach($user_data as $row) {
            if($row['status'] == "Inactivo"){
                echo "INACTIVE";
                break;
            }else if($row['status'] == "Activo"){
                $_SESSION['email'] = $user_object->get_user_email();

                echo "ACTIVE";
                break;
            }
        }
    }else {
        echo "NON-EXIST";
    }

}

/*confirmar pagamento*/
if(isset($_POST['action']) && $_POST['action'] == "confirmar"){
    
    if(isset($_SESSION['email'])) {
        
        require_once "database/Merchant.php";
        $merchat_object = new Merchant();
        
        $merchat_object->set_subtotal($_POST['subtotal']);
        $merchat_object->set_tax($_POST['taxa']);
        $merchat_object->set_total($_POST['total']);
        $merchat_object->set_telefone($_POST['telefone']);
        $merchat_object->set_product_owner($_SESSION['email']);

    
        if($merchat_object->save_merchant()){
                echo "saved";
        }else {
            echo "not_saved";
        }

   }else {
        echo "session_unset";
   } 

}
?>