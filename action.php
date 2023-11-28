<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

require 'vendor/autoload.php';
require('database/User.php');
require "database/Merchant.php";
$user_object = new User;

$merchat_object = new Merchant();

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
    $results = $user_object->fetch_data();
    

    if(count($results) <= 0) {

	if($user_object->save_data()) {

        $mail = new PHPMailer(true);

        try {
            // Configurações do servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'qmz2023@gmail.com';
            $mail->Password = 'txntrdkbofxvaqax';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 25;

            // Remetente e destinatário
            $mail->setFrom('qmz2023@gmail.com', 'PLUS VENDAS');
            $mail->addAddress($user_object->get_user_email(), 'Destinatário');

            // Conteúdo do e-mail
            $mail->isHTML(true);
            $mail->Subject = 'Plus vendas';

            // Corpo do e-mail em HTML
            $message = '<h3 style="text-align:center">Agradecemos por fazer compras na nossa loja</h3>
            <p style="text-align:center">Este é o email de verificação, por favor click no link abaixo para activar o seu registo.</p>
             <p style="text-align:center"><a href="http://localhost/Plus_vendas/verify.php?code='.$user_object->getUserVerificationCode().'">Clique aqui para verificar</a></p>
              <p><h3>Obrigado!</h3></p>
              <p><h3>Plus Vendas 2023</h3></p>
        ';

        $mail->Body = $message;
        $mail->AltBody = 'Verificação de Email';
            // Enviando e-mail
            
            if ($mail->send()) {
                echo 'YES';
            } else {
                echo 'NO';
            }
        } catch (Exception $e) {
            echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
        }

        //     $to_mail = $user_object->get_user_email();
        //     $subject = 'Plus vendas - validacão por email';
        //     $body = '<h3 style="text-align:center">Agradecemos por fazer compras na nossa loja</h3>
        //     <p style="text-align:center">Este é o email de verificação, por favor click no link abaixo para activar o seu registo.</p>
        //      <p style="text-align:center"><a href="https://460f-41-220-201-121.ngrok-free.app/plus_vendas/verify.php?code='.$user_object->getUserVerificationCode().'">Clique aqui para verificar</a></p>
        //       <p><h3>Obrigado!</h3></p>
        //       <p><h3>Plus Vendas 2023</h3></p>
        // ';
        //     $headers = 'From: qmz2023@gmail.com' . "\r\n" .
        //             'Reply-To: qmz2023@gmail.com' . "\r\n" .
        //             'Content-Type: text/html; charset=UTF-8' . "\r\n";
            
        //     // ini_set("SMTP", "localhost");
        //     // ini_set("smtp_port", 25);
            
        //     if (mail($to_mail, $subject, $body, $headers)) {
        //         echo 'YES';
        //     } else {
        //         echo 'NO';
        //     }
            
	}else {
		echo 'NO';
	}
}else {
    echo 'EXISTS';
}
    
}

if(isset($_POST['action']) && $_POST['action'] == "logar"){ 
  
  
    
    $user_object->set_password($_POST['senha']);
    $user_object->set_email($_POST['utilizador']);
    $merchat_object->set_subtotal($_POST['subtotal']);
    $merchat_object->set_qtd($_POST['qtd']);
    $merchat_object->set_tax($_POST['taxa']);
    $merchat_object->set_total($_POST['total']);
    $merchat_object->set_telefone($_POST['telefone']);

    $user_data = $user_object->login();
   
    if(is_array($user_data) && count($user_data) > 0) {
      foreach($user_data as $row) {
            if($row['status'] == "Inactivo"){
                echo "INACTIVE";
                break;
            }else if($row['status'] == "Activo"){
                $user_object->set_email($row['email']);
                $_SESSION['email'] = $user_object->get_user_email();

                if(isset($_POST['variavel']) && $_POST['variavel'] == "confirmPayment"){
                    
                    $_SESSION['subtotal'] = $merchat_object->get_subtotal();
                    $_SESSION['qtd'] = $merchat_object->get_qtd();
                    $_SESSION['taxa'] = $merchat_object->get_tax();
                    $_SESSION['total'] = $merchat_object->get_total();
                    $_SESSION['telefone'] = $merchat_object->get_telefone();

                    echo  "back_to_payment";
                    break;
                }
                
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
        
        $merchat_object->set_subtotal($_POST['subtotal']);
        $merchat_object->set_tax($_POST['taxa']);
        $merchat_object->set_total($_POST['total']);
        $merchat_object->set_qtd($_POST['qtd']);
        $merchat_object->set_telefone($_POST['telefone']);
        $merchat_object->set_product_owner($_SESSION['email']);
        $merchat_object->set_product_list(json_encode($_POST['list_itens']));
        $arrayLocal = $_POST['list_itens'];


        $list_itens= $arrayLocal; 
        //echo $_POST['list_itens'];'

        $listar = '';
        

        $mail = new PHPMailer(true);

        try {
            // Configurações do servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'qmz2023@gmail.com';
            $mail->Password = 'txntrdkbofxvaqax';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 25;

            // Remetente e destinatário
            $mail->setFrom('qmz2023@gmail.com', 'PLUS VENDAS');
            $mail->addAddress($_SESSION['email'], $_SESSION['email']);

            // Conteúdo do e-mail
            $mail->isHTML(true);
            $mail->Subject = 'Plus vendas';
            $cont = 0;
            foreach($list_itens as $row){
                $cont += 1;
                $listar .='<p style="text-align:center"><img src="cid:minha_imagem'.$cont.'" width="30%" alt="Produto"/></p>
                           <p style="text-align:center"><strong>Nome do Produto:</strong> '.$row['nome'].'</p>
                           <p style="text-align:center"><strong>Preço do Produto:</strong> '.$row['preco'].'MT'
                           .'<p style="text-align:center">=============['.$cont.']=============</p>';
    
                           // Anexando a imagem como embutida
                $caminhoDaImagem = $row['image']; // Substitua pelo caminho real da sua imagem
                $mail->addEmbeddedImage($caminhoDaImagem, 'minha_imagem'.$cont);
            }

            // Corpo do e-mail em HTML
            $message = '
            <h3 style="text-align:center">Agradecemos por fazer compras na nossa loja</h3>
            <p style="text-align:center">Este é o email de confirmação dos produtos adquiridos na nossa loja.</p>
            '.$listar.'
            <br/><br/>
            <p style="text-align:center">_______________________________________________</p>
            <p style="text-align:center"><strong> Subtotal:</strong> '.$merchat_object->get_subtotal().'</p>
            <p style="text-align:center"><strong> Itens:</strong> '.$merchat_object->get_qtd().'</p>
            <p style="text-align:center"><strong> Taxa:</strong> '.$merchat_object->get_tax().'</p>
            <p style="text-align:center"><strong> Total:</strong> '.$merchat_object->get_total().'</p>
              <p><h3>Obrigado pela preferencia!</h3></p>
              <p><h3>Plus Vendas 2023</h3></p>
        ';

            $mail->Body = $message;
            $mail->AltBody = 'Cada vez Mais proximos de ti';

            

            // Enviando e-mail
            $mail->send();
            if($merchat_object->save_merchant()){
                if(isset($_SESSION['subtotal']) && isset($_SESSION['qtd']) && isset($_SESSION['taxa']) && isset($_SESSION['total']) && isset($_SESSION['telefone'])){
                    unset($_SESSION['subtotal']);
                    unset($_SESSION['qtd']);
                    unset($_SESSION['taxa']);
                    unset($_SESSION['total']); 
                    unset($_SESSION['telefone']);
                }
                echo "saved";
            }else {
                echo "not_saved";
            }
        } catch (Exception $e) {
            echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
        }



        
    
        // $to_mail = $_SESSION['email'];
        //     $subject = 'Plus vendas';
        //     $body = '<h3 style="text-align:center">Agradecemos por fazer compras na nossa loja</h3>
        //     <p style="text-align:center">Este é o email de confirmação dos produtos adquiridos na nossa loja.</p>
        //     '.$listar.'
        //     <p></p>
        //     <p style="text-align:center"><strong> Subtotal:</strong> '.$merchat_object->get_subtotal().'</p>
        //     <p style="text-align:center"><strong> Taxa:</strong> '.$merchat_object->get_tax().'</p>
        //     <p style="text-align:center"><strong> Total:</strong> '.$merchat_object->get_total().'</p>
        //       <p><h3>Obrigado pela preferencia!</h3></p>
        //       <p><h3>Plus Vendas 2023</h3></p>
        // ';
        // $headers = 'From: qmz2023@gmail.com' . "\r\n" .
        // 'Reply-To: qmz2023@gmail.com' . "\r\n" .
        // 'Content-Type: text/html; charset=UTF-8' . "\r\n";
            
        //     // ini_set("SMTP", "localhost");
        //     // ini_set("smtp_port", 25);
            
        //     if (mail($to_mail, $subject, $body, $headers)) {
        //         if($merchat_object->save_merchant()){
        //             echo "saved";
        //         }else {
        //             echo "not_saved";
        //         }
        //     } else {
        //         echo 'NO';
        //     }

   }else {

     echo "session_unset";
   } 

}
?>