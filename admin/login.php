

<?php



session_start();
$error = '';
$fail_attempts=0;

// Check if the form has been submitted
if (isset($_POST['login']) && isset($_POST['pass'])) {
  
  // Connect to the database
  include('db.php');


  // Get client's IP address
  $ip_address = $_SERVER['REMOTE_ADDR'];

  // Get login credentials (assuming you're using POST method)
  $login = $_POST['login'];
  $pass = md5($_POST['pass']);
  $login_time=date("j/m/Y h:i a");
  //logs
  $block_logs_query = "INSERT INTO logs_reg (ip_address, login, pass, login_time) VALUES (:ip_address, :login, :pass, :login_time)";
  $block_logs_stmt = $conn->prepare($block_logs_query);
  $block_logs_stmt->bindValue(':ip_address', $ip_address, PDO::PARAM_STR);
  $block_logs_stmt->bindValue(':login', $login, PDO::PARAM_STR);
  $block_logs_stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
  $block_logs_stmt->bindValue(':login_time', $login_time, PDO::PARAM_STR);
  $block_logs_stmt->execute();
  

  
  $now=time();
  // Check if the IP has been blocked and the block time has not expired
  $block_check_query = "SELECT * FROM blocked_ip WHERE ip_address = :ip_address AND block_time > $now";
  $block_check_stmt = $conn->prepare($block_check_query);
  $block_check_stmt->bindValue(':ip_address', $ip_address, PDO::PARAM_STR);
  $block_check_stmt->execute();
  $block_check_result = $block_check_stmt->fetch();
  if ($block_check_result) {
    $block_time = $block_check_result['block_time'];
    $shaped_block_time=date("H:i a",$block_time);
    $error = "You have been blocked due to multiple failed login attempts. Please try again after $shaped_block_time.";
    $_SESSION["autoriser"] = "non";
  } else {

    // Check if the user exists and password is correct
    $login_check_query = "SELECT * FROM users WHERE login = :login AND pass = :pass";
    $login_check_stmt = $conn->prepare($login_check_query);
    $login_check_stmt->bindValue(':login', $login, PDO::PARAM_STR);
    $login_check_stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
    $login_check_stmt->execute();
    $login_check_result = $login_check_stmt->fetch();
    if ($login_check_result) {
      // Login successful, reset failed attempts for the IP
      $reset_fail_attempts_query = "DELETE FROM failed_attempts WHERE ip_address = :ip_address";
      $reset_fail_attempts_stmt = $conn->prepare($reset_fail_attempts_query);
      $reset_fail_attempts_stmt->bindValue(':ip_address', $ip_address, PDO::PARAM_STR);
      $reset_fail_attempts_stmt->execute();
      $_SESSION["autoriser"] = "oui";
    } else {
      // Login failed, increment failed attempts for the IP
      $fail_attempts_query = "SELECT * FROM failed_attempts WHERE ip_address = :ip_address";
      $fail_attempts_stmt = $conn->prepare($fail_attempts_query);
      $fail_attempts_stmt->bindValue(':ip_address', $ip_address, PDO::PARAM_STR);
      $fail_attempts_stmt->execute();
      $fail_attempts_result = $fail_attempts_stmt->fetch();
      if ($fail_attempts_result) {
      $fail_attempts = $fail_attempts_result['fail_attempts'];
      $fail_attempts++;
      $update_fail_attempts_query = "UPDATE failed_attempts SET fail_attempts = :fail_attempts WHERE ip_address = :ip_address";
      $update_fail_attempts_stmt = $conn->prepare($update_fail_attempts_query);
      $update_fail_attempts_stmt->bindValue(':fail_attempts', $fail_attempts, PDO::PARAM_INT);
      $update_fail_attempts_stmt->bindValue(':ip_address', $ip_address, PDO::PARAM_STR);
      $update_fail_attempts_stmt->execute();
      } else {
      $insert_fail_attempts_query = "INSERT INTO failed_attempts (ip_address, fail_attempts) VALUES (:ip_address, :fail_attempts)";
      $insert_fail_attempts_stmt = $conn->prepare($insert_fail_attempts_query);
      $insert_fail_attempts_stmt->bindValue(':ip_address', $ip_address, PDO::PARAM_STR);
      $insert_fail_attempts_stmt->bindValue(':fail_attempts', 1, PDO::PARAM_INT);
      $insert_fail_attempts_stmt->execute();
      }
        // Check if the IP has reached maximum allowed failed attempts
        $max_failed_attempts = 5;
        if ($fail_attempts >= $max_failed_attempts) {
          $block_time = time()+ 3600;
          $shaped_block_time= date("H:i a",$block_time);
          $block_ip_query = "INSERT INTO blocked_ip (ip_address, block_time) VALUES (:ip_address, :block_time)";
          $block_ip_stmt = $conn->prepare($block_ip_query);
          $block_ip_stmt->bindValue(':ip_address', $ip_address, PDO::PARAM_STR);
          $block_ip_stmt->bindValue(':block_time', $block_time, PDO::PARAM_STR);
          $block_ip_stmt->execute();
          $error = "You have been blocked due to multiple failed login attempts. Please try again after $shaped_block_time.";
        } else {
          $error = "Invalid login credentials. $max_failed_attempts failed attempts.";
        }
        $_SESSION["autoriser"] = "non";
      }
      
  }

  // Redirect to the protected page if autoriser
  if (isset($_SESSION["autoriser"]) && $_SESSION["autoriser"] === "oui") {
  header("Location: admin.php");
  exit;
  }
  }



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Log-in</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    

    


    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
        
            html,
    body {
    height: 100%;
    }

    body {
    display: flex;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
    }

    .form-signin {
    max-width: 330px;
    padding: 15px;
    }

    .form-signin .form-floating:focus-within {
    z-index: 2;
    }

    .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    }


      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center" onLoad="document.fo.login.focus()">
    
        <main class="form-signin w-100 m-auto">
        <form name="fo" method="post" action="">
            <img class="mb-4" src="../img/admin.png" alt="" height="200px">
            <h1 class="h3 mb-3 fw-normal">Log In</h1>

            <div class="form-floating">
            <input type="text" name="login" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            </div>
            <button name="valider" class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            <div class="erreur" style="color : red;"><?= $error?></div>
            <p class="mt-5 mb-3 text-muted">&copy; Souidi Law</p>
        </form>

        </main>


    
  </body>
</html>

