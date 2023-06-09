<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Strong Password</title>
</head>
<body>
<body>
    <?php 
        $userInput = $_GET['number'];
            
        $userNumber = intval($userInput);
        
        $charGroup = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWYXZ$%&!@#*+-';

        include 'function.php';

        $newPassword = generaPassword($userNumber, $charGroup);
        session_start();

        $_SESSION['password'] = $newPassword;

        if (isset($_GET['number'])) {
            header('Location: passwordPage.php');
        }
    ?>    

    <main>
        <div class="container">
            <div class="row">
                <form class="row g-3 justify-content-center" action="index.php" method="GET">
                    
                    <div class="col-2">
                        <label for="inputNumber" class="visually-hidden">Numero di caratteri</label>
                        <input type="text" class="form-control" id="inputNumber" name="number">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary mb-3">Invio</button>
                    </div>

                </form>
            </div>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
    
</body>
</html>