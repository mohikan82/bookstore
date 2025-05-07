<?php
require "session.php" //fungsi dari session 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Halo <?php echo $_SESSION['username']; ?><h2>

            <button type="button" class="btn btn-primary">
                <a href="logout.php">Logout</a>
            </button>


</body>

</html>