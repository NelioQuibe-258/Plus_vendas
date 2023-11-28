<?php

//verify.php

$error = '';
$check = false;

session_start();

if(isset($_GET['code']))
{
    require_once('database/User.php');

    $user_object = new User;

    $user_object->setUserVerificationCode($_GET['code']);

    if($user_object->is_valid_email_verification_code())
    {
        $user_object->setUserStatus('Activo');

        if($user_object->enable_user_account())
        {
            $_SESSION['success_message'] = 'Seu Email foi verificado com sucesso, agora pode fazer login';

            $check = true;
           //header('location:index.html');
        }
        else
        {
            $error = 'Algo correu mal tente novamente....';
        }
    }
    else
    {
        $error = 'Algo correu mal tente novamente....';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="verify - Plus Vendas">
    <meta name="author" content="">

    <title>Verificação de Email  | Plus Vendas</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>

    <div class="containter">
        <br />
        <br />
        <h1 class="text-center">Plus Vendas usando o Email</h1>
        
        <div class="row justify-content-md-center">
            <div class="col col-md-4 mt-5">
            <?php if (!empty($error))  {?>
            	<div class="alert alert-danger">
            		<h2><?php echo $error; ?></h2>
            	</div>
                <?php
                }
                ?>
                <?php if (isset($_SESSION['success_message']))  {?>
                <div class="alert alert-success">
            		<h2><?php echo $_SESSION['success_message']. 'Será redirecionado dentro de instantes'; unset($_SESSION['success_message']); ?></h2>
            	</div>
                <?php
                    }   
                ?>
            </div>
        </div>
    </div>
    <script>
        let check = '<?php echo $check; ?>';
        if(check){
            setTimeout(function() {
                window.location.href = 'index.html'; // Substitua com a URL desejada
            }, 4000); // 4000 milissegundos = 4 segundos
        } 
        
    </script>
</body>

</html>