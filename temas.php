<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orientador/temas</title>

    <!-- swiper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>

<!-- header section starts -->
<section class="header">

    <a href="inicio.php" class="logo">Orientador.</a>
    <nav class="navbar">
        <a href="inicio.php" class="">home</a>
        <a href="sobre.php" class="">sobre</a>
        <a href="pacote.php" class="">pacote</a>
        <a href="temas.php" class="">temas</a>
        
    </nav>
    <div href="" id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- header section ends -->

<div class="heading" id="temas">
    <h1>Cadastro para o serviço</h1>
</div>
<section class="booking">
<h1 class="heading-title">Teu projecto aqui se realiza</h1>

<form action="temas_form.php" method="POST" class="tema-form">
    <div class="flex">
        <div class="inputBox">
            <span>Nome:</span>
            <input type="text" placeholder="Entre co se nome" name="nome">
        </div>
        <div class="inputBox">
            <span>E-mail:</span>
            <input type="email" placeholder="Digite o seu melhor email" name="email">
        </div>
        
        <div class="inputBox">
            <span>Telefone:</span>
            <input type="number" placeholder="Número de telefone" name="phone">
        </div>
        <div class="inputBox">
            <span>Endereço:</span>
            <input type="text" placeholder="Número de telefone" name="address">
        </div>
        <div class="inputBox">
            <span>Graduando-se:</span>
            <input type="text" placeholder="Deculpa, qual é o curso?" name="curso">
        </div>
        <div class="inputBox">
            <span>Tua univercidade:</span>
            <input type="text" placeholder="Em qual univercidade?" name="universidade">
        </div>
        <div class="inputBox">
            <span>Previsão para inicio:</span>
            <input type="date"  name="inicio">
        </div>
        <div class="inputBox">
            <span>Previsão de fim:</span>
            <input type="date"  name="fim">
        </div>
    </div>
    <input type="submit" value="submit" class="btn" name="send">
</form>
</section>






<!-- rodapé iniciar section -->
<sction class="footer">
    <div class="box-container">
        <div class="box">
            <h3>menu</h3>
        <a href="inicio.php" class=""> <i class="fa fa-angle-right"></i> home</a>
        <a href="sobre.php" class=""> <i class="fa fa-angle-right"></i> sobre</a>
        <a href="pacote.php" class=""> <i class="fa fa-angle-right"></i> pacote</a>
        <a href="temas.php" class=""> <i class="fa fa-angle-right"></i> temas</a>   
        </div>
        <div class="box">
            <h3>extra</h3>
        <a href="#" class=""> <i class="fa fa-angle-right"></i> Fazer perguntas</a>
        <a href="#" class=""> <i class="fa fa-angle-right"></i> Sobre nós</a>
        <a href="#" class=""> <i class="fa fa-angle-right"></i> Politicas e privacidade</a>

          
        </div>
        <div class="box">
            <h3>contactos & inf</h3>
        <a href="#" class=""> <i class="fa fa-phone"></i> (+244) 930-721-500</a>
        <a href="#" class=""> <i class="fa fa-envelope"></i> irodisonmanuel@gmail.com</a>
        <a href="#" class=""> <i class="fa fa-map"></i> Av-21 de janeiro/ Mrro bento II</a>
        

          
        </div>
        <div class="box">
            <h3>Segui</h3>
        <a href="#" class=""> <i class="fab fa-facebook-f"></i>Facebook</a>
        <a href="#" class=""> <i class="fab fa-instagram"></i>Instagram</a>
        <a href="#" class=""> <i class="fab fa-youtube"></i>Youtube</a>
        <a href="#" class=""> <i class="fab fa-linkedin"></i>linkedin</a>
        

          </div>
    </div>
    <div class="credit"> criado por <span>Irodison Manuel</span> | Todos direitos de autor rservado |</div>

</sction>

<!-- rodapé fim section -->



 <!-- swiper js link -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link -->
    <script src="js/script.js"></script>
</body>
</html>