
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Prasangam</title>

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <!-- Bootstrap Icons -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    rel="stylesheet"
  />
  <style>
    body {
      background-color: #f8f9fa;
    }

    .login-container {
      max-width: 400px;
      margin: 60px auto;
      padding: 30px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    }

    .login-logo {
      width: 100px;
      display: block;
      margin: 0 auto 20px;
    }

    .form-control:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 87, 34, 0.25); /* Orange accent */
    }

    .btn-orange {
      background-color: #ff5722;
      border: none;
      color: white;
    }

    .btn-orange:hover {
      background-color: #e64a19;
    }

    .text-small {
      font-size: 0.9rem;
    }

    .form-check-label {
      cursor: pointer;
    }
  </style>
</head>
<body>

  <!-- Login Form -->
  <div class="login-container">
    <img src="./img/logo.ico" alt="Prasangam Logo" class="login-logo" />
    <h4 class="text-center mb-4">Log In to Prasangam</h4>

    <form action="login-handler.php" method="POST">
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input
          type="email"
          class="form-control"
          id="email"
          name="email"
          placeholder="you@example.com"
          required
        />
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input
          type="password"
          class="form-control"
          id="password"
          name="password"
          placeholder="Enter password"
          required
        />
      </div>

      <div class="mb-3 form-check d-flex justify-content-between">
        <div>
          <input type="checkbox" class="form-check-input" id="remember" />
          <label class="form-check-label text-small" for="remember">Remember me</label>
        </div>
        <a href="#" class="text-decoration-none text-small">Forgot password?</a>
      </div>

      <button type="submit" class="btn btn-orange w-100 mb-3">Log In</button>

      <div class="text-center text-small">
        Don't have an account? <a href="./signup.php">Sign Up</a>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
