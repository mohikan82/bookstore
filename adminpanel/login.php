<?php
    session_start();
    require '../koneksi.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<style>
.main{
    height: 100vh;
}
.login-box{
    width: 500px;
    height: 300px;
    box-sizing: border-box;
    border-radius: 10px;
}



</style>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center"><!--kasih flex-column-->
        <div class="login-box p-5 shadow"><!--tamabh p-5 dan shadow untuk tampilan box--> 
                <form action="" method="post">
                <div>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password">
                </div>
                <div>
                    <button class="btn btn-outline-primary form-control mt-3" type="submit" name="loginbtn">Login</button>
                </div>
            </form>
        </div>
            
            <div class="mt-3">
                <?php if(isset($_POST['loginbtn'])) {
                    $username = htmlspecialchars($_POST['username']); //fungsi dari htmlspecialcialchar supaya si user tidak ketik karakter yang aneh2
                    $password = htmlspecialchars($_POST['password']);
                    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
                    $countdata = mysqli_num_rows($query);
                    
                    $data =mysqli_fetch_array($query);

    
                    if($countdata>0){
                        if(password_verify($password, $data['password'])){
                            $_SESSION['username'] = $data['username'];
                            $_SESSION['login'] = true;
                            header('location:../adminpanel');
                        }
                        else {
                            ?>
                            <div class="alert alert-warning" role="alert">
                                password salah
                            </div>
                            <?php
                        }
                    }
                    else{
                        ?>
                        <div class="alert alert-warning" role="alert">
                            akun tidak tersedia
                        </div>
                        <?php
                    }


                };
               ?>
            </div>
        </div>
        
</div>
<div class="main d-flex"></div>

</body>
</html>