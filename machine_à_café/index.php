<?php require_once('./back_end.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="">

    <section class=" ">
        <div class="container container-fluid text-center">
            <div class="row d-flex jystify-content-center align-items-center text-center">
             

                <div class="d-flex col-10">
                <form action="" method="post"><button id="prix" class="btn hover m-3" name="prix" type="submit"><span>Prix : 1.5 euros</span></button></form>

                </div>

                <div class=" col-2 d-flex flex-column align-items-center justify_content_center">
                    <form action="" method="post"><button id="allumer" class="btn hover m-3" name="allumer" type="submit"><span>Allumer</span></button></form>
                    <form action="" method="post"><button id="dossete" class="btn hover m-3" name="dossete" type="submit"><span>Dossete</span></button></form>
                    <form action="" method="post"><button id="sucre" class="btn hover m-3" name="sucre" type="submit"><span>Sucre </span></button><input class="w-50" name="quantiteSucre" type="number" value="0" min="0" max="4" placeholder="saisir la quantité se sucre:"></form>
                    <form action="" method="post"><button id="payer" class="btn hover m-3" name="payer" type="submit"><span>Payer </span></button><input class="w-50" name="montant" type="number" value="0" placeholder="1.5 euros"></form>
                    <form action="" method="post"><button id="etindre" class="btn hover rounded-pill" name="etindre" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                <path d="M7.5 1v7h1V1z" />
                                <path d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812" />
                            </svg></button></form>
                    <audio id="coffeeSound" src="../sound/coffee-espresso-machine-wave-44100hz-32002.mp3" type="audio/mp3"></audio>
                </div>
            </div>
    </section>



    <script src="./main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>