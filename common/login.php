<?php
    include 'connectSQL.php';

    session_start();

    $sql = null;
    $user_name = null;
    $password = null;

    if (isset($_POST['submit'])) {
        $user_name = $_POST['user-name'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM USERS WHERE user_name='$user_name' AND PASSWORD='$password'";

        $rs = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($rs);

        if (is_array($row)) {
            $_SESSION["ID"] = $row["id"];
            $_SESSION["user_name"] = $row["user_name"];
            $_SESSION["first_name"] = $row["first_name"];
            $_SESSION["last_name"] = $row["last_name"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["address"] = $row["address"];
            $_SESSION["full_name"] = $row["full_name"];
            $_SESSION["phone"] = $row["phone"];
            
            if ( strcasecmp($row["role"], "admin")==0 || strcasecmp($row["role"], "manager")==0 ) {
                header('Location:./../ADMIN/layout/Dasboard/dasboard.php');
            } else{
                header("Location:./../index.php");
            }
        } else {
            echo "Login khong thanh cong";
        }

    }
    //var_dump($_SESSION['user_name']);
     //var_dump($_SESSION["quantity"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chi tiet san pham</title>
    <!-- fontawesome - icon -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <!-- bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="../user/css/base.css" />
    <link rel="stylesheet" href="../user/css/header.css" />
    <link rel="stylesheet" href="../user/css/footer.css" />
    <link rel="stylesheet" href="../user/css/login.css" />
</head>
<body>

</body>

<!-- Header -->
		<?php include '../user/layout/common/header.php' ?>


    <main class="main-content container">
        <div class="bg-wrapper"><img src="../user/img/login-bg.png"></div>

        <div class="form-wrapper">
            <h1>????ng nh???p</h1>
            <form id='loginForm' method='POST'>
                <div class="form-row">
                    <label class="label">T??i kho???n</label>
                    <div class="input">
                        <input type="text" name="user-name" id="user-name">
                    </div>
                </div>
                <div class="form-row">
                    <label class="label">M???t kh???u</label>
                    <div class="input">
                        <input type="password" name="password" />
                    </div>
                </div>
                <div class="form-row d-none">
                    <label class="label">Nh??? ????ng nh???p</label>
                    <div class="input">
                        <input type="text" name="" id="">
                    </div>
                </div>
          
                <div class="form-row btns-group">
                    <button class="btn btn-submit"type="submit" name="submit">????NG NH???P</button>
                    <button class="btn"type="button"><a href="register.php">????NG K??</a></button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
		<?php include '../user/layout/common/footer.php'?>
</html>