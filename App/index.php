<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  do używania collapse - FAQ  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--	do używania ikon z FontAwesome   -->
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--	import czcionek z GoogleFonts   -->
    <link
        href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:300,700|Saira:300,400&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap&subset=latin-ext" rel="stylesheet">
    <!-- do alertu przy złym loginie lub haśle -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- moje style css -->
    <link rel="stylesheet" href="style.css">
    <title>MniamPL</title>
</head>

<body>

    <header>
        <!--_______________ DIV NA GÓRZE STRONY Z NAZWA I PRZYCISKIEM LOGOWANIA _______________-->
        <div class="LoginAndRegistration">
            <p class="title">MniamPL</p>
            <button id="buttonLogin" class="Login"
                onclick="document.getElementById('modalElement').style.display='block'">Zaloguj</button>
        </div>

        <?php 
            if(@$_GET['Empty']==true)
            {
            ?>
            <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
            <?php
            }
            ?>
 
 
            <?php 
            if(@$_GET['Invalid']==true)
            {
            ?>
                    
                    <!-- ALERT GDY ZŁE HASŁO LUB LOGIN -->

            <div style="margin-top:10px;" class=" col-md-4 col-md-offset-4"" role="alert">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Niepoprawny login lub hasło.</br>
                    Spróbuj ponownie.
                </div>
            </div>

            <?php
            }
            ?>
        

        <div id="modalElement" class="modal">
            <!--_______________ OKNO MODELNAE Z FORMULARZEM _______________-->
            <form class="modal-content animate" action="process.php" method="post">

                <span onclick="document.getElementById('modalElement').style.display='none'" class="close"
                    title="Zamknij">&times;</span>

                <div class="containerInput">
                    <input type="text" placeholder="Nazwa użytkownika" name="Username" required>
                    <input type="password" placeholder="Hasło" name="Password" required>
                </div>

                <button id="loginToAccount" type="submit" name="Login">Zaloguj</button> 
                <div class="newUser">
                    <p>Jesteś nowym użytkownikiem MniamPL? </p><a href="registration.php">Zarejestruj się</a>
                </div>
            </form>
        </div>

    </header>

    <!--_______________ SEKCJA ZE ZDJĘCIEM NA STRONIE 'POWITALNEJ' _______________-->
    <section class="mainImage"></section>

    <!--_______________ SEKCJA - 'DZIAŁANIE APLIKACJI' _______________-->

    <h2>Jak działa aplikacja?</h2>

    <section class="Instruction">

        <div class="HowToUseApp">
            <div id="picture" class="HowToUseAppPicture1"></div>
            <p>Wybierz jedzenie</p>
        </div>

        <div class="HowToUseApp">
            <div id="picture" class="HowToUseAppPicture2"></div>
            <p>Podaj adres dostawy</p>
        </div>

        <div class="HowToUseApp">
            <div id="picture" class="HowToUseAppPicture3"></div>
            <p>Zapłać i czekaj</br>na dostawę</p>
        </div>

    </section>

    <!--_______________ SEKCJA - O APLIKCAJI MOBILNEJ _______________-->

    <section class="MobileApp">
        <p>Skorzystaj z aplikacji MniamPL</p>
        <div class="orderFood"></div>
    </section>

    <!--_______________ SEKCJA - FAQ _______________-->


    <section class="faq">
        <h2>FAQ</h2>
        <a href="#description1" data-toggle="collapse">
            <i class="fas fa-angle-down"></i>W jaki sposób można zapłacić za transakcję?</a>
        <div id="description1" class="collapse">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ex doloremque, suscipit sed non commodi.
        </div>
        <a href="#description2" data-toggle="collapse">
            <i class="fas fa-angle-down"></i>Ile trzeba czekać na dostarczenie jedzenia we wskazany adres?</a>
        <div id="description2" class="collapse">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ex doloremque, suscipit sed non commodi.
        </div>
        <a href="#description3" data-toggle="collapse">
            <i class="fas fa-angle-down"></i>Jak można złożyć reklamację po nieudanym zamówieniu jedzenia?</a>
        <div id="description3" class="collapse">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ex doloremque, suscipit sed non commodi.
        </div>
    </section>

    <!-- _______________ SECTION KONTAKT _______________ -->

    <section class="contact">
        <h2 class="titleContact">Skontaktuj się z nami</h2>
        <form action="contactform.php" method="POST">
            <input type="text" name="name" placeholder="Twoje imię">
            <input type="text" name="mail" placeholder="Twój email">
            <input type="text" name="subject" placeholder="Temat">
            <textarea name="message" placeholder="Treść wiadomości"></textarea>
            <button class="submitContact" type="submit" name="submit">Wyślij</button>
        </form>
    </section>

    <!-- _______________ SOCIAL MEDIA _______________ -->

    <footer></footer>

    <script src="file.js">
    </script>

</body>

</html>