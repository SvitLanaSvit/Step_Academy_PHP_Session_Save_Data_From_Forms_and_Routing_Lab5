<?
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_SESSION["age"] = $_POST["age"];
        $_SESSION['visited_pages'][] = $_SERVER['PHP_SELF'];
    }

    $firstname = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : '';
    $lastname = isset($_SESSION['lastname']) ? $_SESSION['lastname'] : '';
    $age = isset($_SESSION['age']) ? $_SESSION['age'] : '';
    $visited_pages = $_SESSION['visited_pages'];
    $submitted = isset($_SESSION['submitted']) ? $_SESSION['submitted'] : false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Page_4:</h2>
        <table class="table striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Age</th>
                    <?
                        for($i = 1; $i < 5; $i++){
                            echo "<th>Page_".$i."</th>";
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?if($submitted) {?>
                    <td><? echo $firstname?></td>
                    <td><? echo $lastname?></td>
                    <td><? echo $age?></td>
                    <?
                        foreach($visited_pages as $page){
                            echo "<td>$page</td>";
                        }
                        session_destroy();
                    }?>
                </tr>
            </tbody>
        </table>
        <a href="firstname.php" class="btn btn-outline-info">Back</a>
    </div>
</body>
</html>