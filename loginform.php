<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="./formstyle.css">
</head>
<body class="align">
  <div class="grid">
    <!-- Add a warning message container -->
    <?php
    if(isset($_GET['error']) && $_GET['error'] == '1') {
        echo '<div class="warning-message">Incorrect username or password. Please try again.</div>';
    }
    ?>
    <form id="loginForm" action="login.php" method="POST" class="form login">
      <div class="form__field">
        <label for="login__username">
          <svg class="icon"><use xlink:href="#user"></use></svg>
          <span class="hidden">Username</span>
        </label>
        <input id="login__username" type="text" name="username" class="form__input" placeholder="Username" required>
      </div>
      <div class="form__field">
        <label for="login__password">
          <svg class="icon"><use xlink:href="#lock"></use></svg>
          <span class="hidden">Password</span>
        </label>
        <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
      </div>
      <div class="form__field">
        <input type="submit" value="Sign In">
      </div>
    </form>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" class="icons">
    <symbol id="arrow-right" viewBox="0 0 1792 1792">
      <!-- Path data -->
    </symbol>
    <symbol id="lock" viewBox="0 0 1792 1792">
      <!-- Path data -->
    </symbol>
    <symbol id="user" viewBox="0 0 1792 1792">
      <!-- Path data -->
    </symbol>
  </svg>
</body>
</html>