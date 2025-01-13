<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>It's a Donuts</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bangers&family=Poppins:wght@400;600&display=swap');
    </style>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/home/home.css" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="prevent-select">
    <header>
        <div class="header__container swing-in-top-fwd">
            <img src="assets/images/sprinkles.png" alt="sprinkles" class="header__bg" />
            <img src="assets/images/logo.png" alt="logo" class="logo rotate-center" />
        </div>
    </header>

    <main>
        <h1 class="tittle swing-in-top-fwd">Mini Cake Donuts</h1>

        <div class="social__container swing-in-top-fwd">
            <a href="#" class="social__link">
                <ion-icon name="logo-whatsapp" class="menu__img"></ion-icon>
            </a>
            <a href="#" class="social__link">
                <ion-icon name="logo-instagram" class="menu__img"></ion-icon>
            </a>
            <a href="#" class="social__link">
                <ion-icon name="chatbubble-ellipses-outline" class="menu__img"></ion-icon>
            </a>
            <div class="social__link" id="shareBtn">
                <ion-icon name="share-social" class="menu__img"></ion-icon>
            </div>
            <script>
                var shareBtn = document.getElementById("shareBtn");

                shareBtn.addEventListener("click", function() {
                    navigator.share({
                        url: document.URL,
                        title: document.title,
                        text: "Confira os melhores Mini Donuts da região de Sorocaba!"
                    });
                });
            </script>
        </div>
        <section class="order__container swing-in-top-fwd">
            <h2 class="subtittle">Monte Seu Pedido:</h2>
            <div class="list__container">
                <ol>
                    <li>Escolha o tipo de produto</li>
                    <li>Selecione os sabores</li>
                    <li>Defina a quantidade de cada ítem</li>
                    <li>Preencha seus dados</li>
                    <li>Escolha uma data</li>
                    <li>Selecione o método de entrega</li>
                    <li>Escolha o método de pagamento</li>
                </ol>
            </div>
            <a href="http://127.0.0.1:8000/pedido">
                <button class=" order__btn vibrate-1" type="button">Fazer
                    pedido
                </button>
            </a>
        </section>
    </main>
    <footer class="scale-in-ver-bottom">
        <section class="footer">
            <address>SOROCABA-SP</address>
            <a href="https://alienurbano.github.io/" target="_blank" rel="noopener noreferrer"
                class="footer__link">@2025 by PagansDev</a>
        </section>
    </footer>
</body>

</html>