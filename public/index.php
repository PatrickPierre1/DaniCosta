<?php
require "header.php";

?>
<aside>
    <div>
        <img class="arrow" onclick="scroll()" src="images/arrowUp.png" alt="">
    </div>
</aside>
<section id="inicio" class="section-banner">
    <div style="height: 90vh; margin-right: 0!important" class="row">
        <div class="col left-side d-flex justify-content-center align-items-center mx-5">
            <div>
                <img class="homeImage" style="width: 450px;" src="images/homePhoto.png" alt="">
            </div>

        </div>
        <div class="col right-side d-flex justify-content-center align-items-start mx-5 flex-column">
            <div>
                <span class="fs-1 text-dark text-center fw-bold">Olá!</span>
            </div>
            <div>
                <span class="fs-1 text-dark text-center fw-bold">Sou a Dani Costa</span>
            </div>
            <div class="aboutText py-5">
                <span class="text-dark text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor massa vel lectus vulputate, sit amet pharetra nunc lobortis. Praesent a urna malesuada, pulvinar nisl vel, rutrum diam. Maecenas convallis leo ac elit fermentum, id viverra nisi accumsan. Nulla facilisi. Aenean a odio gravida, sagittis odio quis, hendrerit mi. </span>
            </div>
        </div>
    </div>
</section>
<section id="projeto" class="section-banner section-ballet">
    <div class="title-ballet d-flex justify-content-center ">
        <h2 class="colorPrimary"> Passos do Futuro Ballet</h2>
    </div>
    <div class="container d-flex justify-content-center flex-column">
        <div class="row">
            <div class="cardB col">
                .
            </div>
            <div class="cardB col">
                .
            </div>
            <div class="cardB col">
                .
            </div>
        </div>
        <div class="row pt-5">
            <div class="col">
                <span class="text-dark text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor massa vel lectus vulputate, sit amet pharetra nunc lobortis. Praesent a urna malesuada </span>
            </div>
            <div class="col">
                <span class="text-dark text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor massa vel lectus vulputate, sit amet pharetra nunc lobortis. Praesent a urna malesuada </span>
            </div>
            <div class="col">
                <span class="text-dark text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor massa vel lectus vulputate, sit amet pharetra nunc lobortis. Praesent a urna malesuada </span>
            </div>
        </div>
    </div>

</section>
<section id="historia" class="section-banner section-history">
    <div class="title-ballet d-flex justify-content-center">
        <h2 class="colorPrimary">Nossa História</h2>
    </div>
    <div class="container d-flex justify-content-center flex-column">
        <div class="row">
            <div class="col history-image d-flex justify-content-center">
                <img class="w-75" src="./images/imagemteste.jpeg" alt="">
            </div>
            <div class="col history-text">
                <div class="aboutText py-5">
                    <span class="text-dark text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor massa vel lectus vulputate, sit amet pharetra nunc lobortis. Praesent a urna malesuada, pulvinar nisl vel, rutrum diam. Maecenas convallis leo ac elit fermentum, id viverra nisi accumsan. Nulla facilisi. Aenean a odio gravida, sagittis odio quis, hendrerit mi. </span><br><br><br>

                    <span class="text-dark text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor massa vel lectus vulputate, sit amet pharetra nunc lobortis. Praesent a urna malesuada, pulvinar nisl vel, rutrum diam. Maecenas convallis leo ac elit fermentum, id viverra nisi accumsan. Nulla facilisi. Aenean a odio gravida, sagittis odio quis, hendrerit mi. </span>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col history-text">
                <div class="aboutText py-5">
                    <span class="text-dark text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor massa vel lectus vulputate, sit amet pharetra nunc lobortis. Praesent a urna malesuada, pulvinar nisl vel, rutrum diam. Maecenas convallis leo ac elit fermentum, id viverra nisi accumsan. Nulla facilisi. Aenean a odio gravida, sagittis odio quis, hendrerit mi. </span><br><br><br>

                    <span class="text-dark text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor massa vel lectus vulputate, sit amet pharetra nunc lobortis. Praesent a urna malesuada, pulvinar nisl vel, rutrum diam. Maecenas convallis leo ac elit fermentum, id viverra nisi accumsan. Nulla facilisi. Aenean a odio gravida, sagittis odio quis, hendrerit mi. </span>

                    <div class="d-flex justify-content-center pt-5 align-items-center flex-column">
                        <span class="colorPrimary fw-bold fs-3">Faça parte do nosso projeto!</span>
                        <div>
                            <a href="https://www.facebook.com/passosdofuturoballet" target="_blank" rel="noopener noreferrer"><img class="fb-ballet m-2" src="./images/facebook-logo-rosa.png" alt=""></a>
                            <a href="https://www.instagram.com/passosdofuturoballet/" target="_blank" rel="noopener noreferrer"><img class="ins-ballet m-2" src="./images/instagram-logo-rosa.png" alt=""></a>
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="col history-image d-flex justify-content-center">
                <img class="w-75" src="./images/imagemteste.jpeg" alt="">
            </div>
        </div>
    </div>
</section>
<?php
require "footer.php";

?>