<?php

if(isset($_POST['submit'])) 
{

include_once('conexao.php');

$nome = $_POST['nome'];
$email  = $_POST['email'];
$senha  = $_POST['senha'];

$result = mysqli_query ($conexao, " INSERT INTO usuarios(nome,email,senha) 
VALUES ('$nome','$email','$senha') ");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panelão Gastronômico </title>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="/style2.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
    

        
       <!-- fim da section header -->

       <div class="container-form register">
           <div class="information">
               <div class="info-childs">
                   <h2>Bem vindo</h2>
                   <p>Fique a vontade e aproveite as deliciosas receitas que 
                       te esperam.
                   </p>
                       <input type="button" value="Iniciar sessao" id="sign-in">
                       
                    
                       
               </div>
           </div>
           <div class="form-information">
               <div class="form-information-childs">
                   <h2>Criar uma conta</h2>
                    <div class="icons">
                        <i class='bx bxl-google'></i>
                        <i class='bx bxl-facebook'></i>
                        <i class='bx bxl-linkedin'></i>
                    </div>
                    <p>Use o seu email para se registrar</p>
                    <form action="faleconosco.php" method="POST" class="form">
                        <label>
                            <i class='bx bx-user' ></i>
                            <input type="text" name="nome" id="nome" placeholder="Nome Completo">
                        </label>
                        <label>
                            <i class='bx bx-envelope' ></i>
                            <input type="email"name="email" id="email" placeholder="Email">
                        </label>
                        <label>
                            <i class='bx bx-lock'></i>
                            <input type= "passaword" name="senha" id="senha" placeholder="Senha">
                        </label>
                        <input type= "submit" name="submit" value="Registre-se">
                    </form>

               </div>
           </div>
       </div>






       <div class="container-form login hide">
        <div class="information">
            <div class="info-childs">
                <h2>Bem vindo Novamente</h2>
                <p>Uma honra te-lo conosco novamente...!</p>
                    <input type="button" value="Registrar" id="sign-up">
                    
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sessão</h2>
                 <div class="icons">
                     <i class='bx bxl-google'></i>
                     <i class='bx bxl-facebook'></i>
                     <i class='bx bxl-linkedin'></i>
                 </div>
                 <p>Iniciar sessão com sua conta</p>
                 <form class="form">
                     
                     <label>
                         <i class='bx bx-envelope' ></i>
                         <input type="email" placeholder="Email">
                     </label>
                     <label>
                         <i class='bx bx-lock'></i>
                         <input type= "passaword" placeholder="Senha">
                     </label>
                     <input type= "submit" value="Iniciar sessão">
                 </form>

            </div>
        </div>
    </div>

    

    


       



       
        <script src="js/script2.js"></script>
    </body>
</html>