<?
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_SESSION['firstname'] = $_POST['firstname'];
        $_SESSION['visited_pages'][] = $_SERVER['PHP_SELF'];
        $_SESSION['submitted'] = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_2</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Page_2:</h2>
        <form action="age.php" method="POST">
            <div class="mb-3 w-25">
                <label for="lastname" class="form-label">Lastname:</label>
                <input type="text" name="lastname" class="form-control" required>
            </div>
            <input type="submit" name="submit" class="btn btn-outline-info" value="Next"/>
        </form>
    </div>
</body>
</html>