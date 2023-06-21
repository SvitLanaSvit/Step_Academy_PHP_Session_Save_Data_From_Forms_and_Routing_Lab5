<?
    session_start();
    if(!isset($_SESSION['visited_pages'])){
        $_SESSION['visited_pages'] = array();
    }
    $_SESSION['visited_pages'][] = $_SERVER['PHP_SELF'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_1</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Page_1:</h2>
        <form action="lastname.php" method="POST">
            <div class="mb-3 w-25">
                <label for="firstname" class="form-label">Firstname:</label>
                <input type="text" name="firstname" class="form-control" required>
            </div>
            <input type="submit" name="submit" class="btn btn-outline-info" value="Next"/>
        </form>
    </div>
</body>
</html>