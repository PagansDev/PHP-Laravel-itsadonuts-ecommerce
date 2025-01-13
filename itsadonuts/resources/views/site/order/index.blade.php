<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrinho - It's a Donuts</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Bangers&family=Poppins:wght@400;600&display=swap');
    </style>
    <link rel="shortcut icon" href="../../../assets/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/order/order.css" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="prevent-select">
    <header>
        <div class="header__container swing-in-top-fwd">
            <img src="../../../assets/images/logo.png" alt="logo" class="logo rotate-center" />
            <h1 class="tittle swing-in-top-fwd">PEDIDO</h1>
        </div>
    </header>

    <main>
        <section class="order__container swing-in-top-fwd">
            <section class="order__header">
                <h2 class="subtittle">Monte Seu Pedido:</h2>
                <nav>
                    <a href="http://127.0.0.1:8000/">
                        <ion-icon name="return-up-back"></ion-icon>Voltar
                    </a>
                </nav>
            </section>
            <section class="form__container">
                <div class="form__hint">
                    <h3 class="subtittle2 slide-bottom">
                        Personalize seus donuts 🍩 :
                    </h3>
                </div>
                <form class="form__form">
                    <input type="radio" id="normal" name="category" value="normal" class="toggle-button" />
                    <label for="normal">Normal </label>

                    <input type="radio" id="stuffed" name="category" value="stuffed" class="toggle-button" />
                    <label for="stuffed">Recheado </label>
                </form>
            </section>
            <section class="list__container">
                <div>
                    <p>lista de ítens</p>
                </div>
            </section>
            <button class="checkout__btn" type="button">Finalizar</button>
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