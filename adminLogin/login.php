<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<style>
    .animation {
        animation: myAnim 2s ease 0s 1 normal forwards;
    }

    @keyframes myAnim {
        0% {
            animation-timing-function: ease-in;
            opacity: 1;
            transform: translateX(48px);
        }

        24% {
            opacity: 1;
        }

        40% {
            animation-timing-function: ease-in;
            transform: translateX(26px);
        }

        65% {
            animation-timing-function: ease-in;
            transform: translateX(13px);
        }

        82% {
            animation-timing-function: ease-in;
            transform: translateX(6.5px);
        }

        93% {
            animation-timing-function: ease-in;
            transform: translateX(4px);
        }

        25%,
        55%,
        75%,
        87%,
        98% {
            animation-timing-function: ease-out;
            transform: translateX(0px);
        }

        100% {
            animation-timing-function: ease-out;
            opacity: 1;
            transform: translateX(0px);
        }
    }
</style>

<body>
    <?php include '../partial/headNav.php' ?>
    <div class="container-fluid vh-100 mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="../img/admin.png" class="animation img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 shadow-lg p-5 bg-body rounded">
                <form action="action.php" method="POST" id="login">
                    <h2 class="text-center text-uppercase">Admin Login</h2>
                    <div class="form-group m-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" required="required">
                    </div>
                    <div class="form-group m-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                    </div>
                    <div class="form-group m-3">
                        <button type="submit" name="login" class="btn btn-primary btn-block">Log in</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div>
        <?php include '../partial/footer.php';
        ?>
    </div>
</body>

</html>
