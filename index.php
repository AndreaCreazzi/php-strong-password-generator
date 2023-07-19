<?php

include __DIR__ . '/includes/utils/functions.php';

if (isset($_GET['password_length'])) {
    $password_length = $_GET['password_length'];

    if (empty($password_length) || !is_numeric($password_length)) {
        $error_message = "Inserisci una lunghezza valida per la password.";
    } else {
        $password_length = (int)$password_length;
        $generated_password = generateRandomPassword($password_length);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
</head>

<body class="bg-dark">
    <main>
        <div class="container text-white text-center">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
            <div class="card mt-4">
                <div class="card-header">
                    <?php if (!empty($error_message)) : ?>
                        <div class="alert alert-danger"><?php echo $error_message; ?></div>
                    <?php elseif (isset($generated_password)) : ?>
                        <div class="alert alert-info">Password generata: <?php echo $generated_password; ?></div>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <form action="" method="GET">
                        <label for="password">Lungezza password</label>
                        <input class="mx-3" id="password" name="password_length" type="number" placeholder="Inserisci un numero">
                        <button class="btn btn-success" type="submit">Crea</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>