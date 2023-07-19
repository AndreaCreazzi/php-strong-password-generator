<?php
// funzione
require_once __DIR__ . '/includes/utils/functions.php';

$error_message = '';

if (isset($_GET['password_length'])) {
    $password_length = $_GET['password_length'];

    if (empty($password_length) || !is_numeric($password_length)) {
        $error_message = "Inserisci una lunghezza valida per la password.";
    } else {
        $password_length = (int)$password_length;
        $generated_password = generateRandomPassword($password_length);

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
            <div class="card mt-4">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <form action="" method="GET">
                        <label for="password">Lungezza password :</label>
                        <input class="mx-3 py-1" id="password" name="password_length" type="number" placeholder="Inserisci un numero">
                        <button class="btn btn-success py-2" type="submit">Crea</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>