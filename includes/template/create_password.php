<?php
require_once __DIR__ . '/../utils/functions.php';

session_start();

if (isset($_SESSION['generated_password'])) {
    $generated_password = $_SESSION['generated_password'];
    unset($_SESSION['generated_password']);
} else {
    header('Location: ../../../../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include __DIR__ . '/../template/head.php' ?>

<body class="bg-dark">
    <main>
        <div class="container text-white text-center">
            <h1>Generated Password</h1>
            <div class="card mt-4">
                <div class="card-header">
                    <div class="alert alert-info">Password generata: <?php echo $generated_password; ?></div>
                </div>
                <div class="card-body">
                    <a href="../../index.php" class="btn btn-primary">Torna alla generazione di password</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>