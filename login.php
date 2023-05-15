<?php
include("api/db.php");
if (isset($_POST['submit'])) {
    $username = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "select * from login where email ='$username' and password ='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        header("Location:shop.php");
    } else {
        echo '<script>
            window.location.href = "login.php";
            alert("login failed. Invalid username or passowrd!!!")
            </script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Pcmart - Get Your Dream Pc</title>

</head>

<body>
    <div class="text-center justify-content-center" id="form">

        <form name="form" method="POST" class="form-signin" style="height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;">
            <a href="index.php"><img class="mb-4" src="img/login-img1.png" alt="" width="72" height="72"
                    style="border-radius: 11px;"></a>

            <h1 class="h3 mb-3 font-weight-normal">Please login</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="email" class="form-control" placeholder="Email address" required="" autofocus=""
                name="email">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="pass" class="form-control" placeholder="Password" required="" name="pass">
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <!-- <button class="" type="submit" value="Login" name="submit">login</button> -->
            <input type="submit" id="btn" class="btn btn-lg btn-primary" value="login" name="submit">
            <p class="mt-5 mb-3 text-muted">If you don't have account, <a href="signup.php">Sign Up</a></p>
        </form>
    </div>

    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0 text-light">&copy; 2023<a style="text-decoration: none;color: white;"
                            href="/index.php">PCMart.</a>All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <p class="mb-0 text-right text-light">Follow us on <i class="fab fa-twitter"></i> <i
                            class="fab fa-facebook"></i> <i class="fab fa-instagram"></i></p>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function () {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function (msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        }
        else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
            // ]]>
    </script>

</body>

</html>