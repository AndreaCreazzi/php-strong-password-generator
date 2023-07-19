<?php

require_once __DIR__ . '/includes/utils/functions.php';

$error_message = '';

$allow_repeat_chars = isset($_GET['allow_repeat_chars']) ? true : false;

if (isset($_GET['password_length'])) {
    $password_length = $_GET['password_length'];

    if (empty($password_length) || !is_numeric($password_length)) {
        $error_message = "Inserisci una lunghezza valida per la password.";
    } else {
        $password_length = (int)$password_length;
        $generated_password = generateRandomPassword($password_length, $allow_repeat_chars);

        session_start();
        $_SESSION['generated_password'] = $generated_password;

        header('Location: includes/template/create_password.php');
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include __DIR__ . '/includes/template/head.php' ?>

<body class="bg-dark">
    <main>
        <div class="container text-white text-center mt-4">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
            <div class="card mt-4 bg-success text-white">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <form action="" method="GET">
                        <label for="password">Lungezza password :</label>
                        <input class="my-3" id="password" name="password_length" type="number" placeholder="Inserisci un numero">
                        <div class="form-check form-switch mx-3">
                            <input class="form-check-input" type="checkbox" role="switch" name="allow_repeat_chars" value="1" <?php echo $allow_repeat_chars ? 'checked' : ''; ?>>
                            Consenti la ripetizione dei caratteri ?
                        </div>
                        <button class="btn btn-primary my-3 px-4" type="submit">CREA</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>


</html>