<?php
// Handle form submission before HTML
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connect to database
    $conn = new mysqli("localhost", "root", "", "event_management");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form values
    $full_name = $_POST['full_name'];
    $last_name = $_POST['last_name'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO users (full_name, last_name, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $full_name, $last_name, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>alert('Signup successful!'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Prasangam | Auth</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="auth.css" />
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }

    .auth-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    .auth-box {
      width: 100%;
      max-width: 400px;
    }

    .logo {
      width: 80px;
      height: 80px;
      object-fit: contain;
    }

    .btn-orange {
      background-color: #ff5722;
      color: #fff;
      border: none;
      transition: background-color 0.3s ease;
    }

    .btn-orange:hover {
      background-color: #e64a19;
    }

    a {
      color: #ff5722;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="auth-wrapper">
    <div class="auth-box shadow-sm rounded-4 p-4 bg-white text-center">
      <img src="./img/logo.ico" alt="Prasangam Logo" class="logo mb-3" />

      <form id="signupForm" method="POST">
        <h5 class="fw-semibold mb-3">Create a Prasangam Account</h5>

        <div class="mb-3 text-start">
          <label class="form-label">Full Name</label>
          <input type="text" name="full_name" class="form-control" placeholder="Your name" required />
        </div>

        <div class="mb-3 text-start">
          <label class="form-label">Last Name</label>
          <input type="text" name="last_name" class="form-control" placeholder="Your name" required />
        </div>

        <div class="mb-3 text-start">
          <label class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" placeholder="you@example.com" required />
        </div>

        <div class="mb-2 text-start">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Create password" required />
        </div>

        <button type="submit" class="btn btn-orange w-100 mb-3">Sign Up</button>

        <div class="small">
          Already have an account?
          <a href="./login.php">Log In</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Prasangam | Auth</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="auth.css" />
  <style>
    body {
  background-color: #f8f9fa;
  font-family: 'Segoe UI', sans-serif;
}

.auth-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}

.auth-box {
  width: 100%;
  max-width: 400px;
}

.logo {
  width: 80px;
  height: 80px;
  object-fit: contain;
}

.btn-orange {
  background-color: #ff5722;
  color: #fff;
  border: none;
  transition: background-color 0.3s ease;
}

.btn-orange:hover {
  background-color: #e64a19;
}

a {
  color: #ff5722;
}

a:hover {
  text-decoration: underline;
}

  </style>
</head>
<body>
  <div class="auth-wrapper">
    <div class="auth-box shadow-sm rounded-4 p-4 bg-white text-center">
      <!-- Logo -->
      <img src="./img/logo.ico" alt="Prasangam Logo" class="logo mb-3" />

      <!-- Login Form -->
      <form id="signupForm" action="signup.php" method="POST" class="">
  <h5 class="fw-semibold mb-3">Create a Prasangam Account</h5>

  <div class="mb-3 text-start">
    <label class="form-label">Full Name</label>
    <input type="text" name="full_name" class="form-control" placeholder="Your name" required />
  </div>

  <div class="mb-3 text-start">
    <label class="form-label">Last Name</label>
    <input type="text" name="last_name" class="form-control" placeholder="Your name" required />
  </div>

  <div class="mb-3 text-start">
    <label class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" placeholder="you@example.com" required />
  </div>

  <div class="mb-2 text-start">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Create password" required />
  </div>

  <button type="submit" class="btn btn-orange w-100 mb-3">Sign Up</button>

  <div class="small">
    Already have an account?
    <a href="./login.php" id="showLogin">Log In</a>
  </div>
</form>
      </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Toggle Script -->
  <script>
    const loginForm = document.getElementById("loginForm");
    const signupForm = document.getElementById("signupForm");
    const showSignup = document.getElementById("showSignup");
    const showLogin = document.getElementById("showLogin");

    showSignup.addEventListener("click", (e) => {
      e.preventDefault();
      loginForm.classList.add("d-none");
      signupForm.classList.remove("d-none");
    });

    showLogin.addEventListener("click", (e) => {
      e.preventDefault();
      signupForm.classList.add("d-none");
      loginForm.classList.remove("d-none");
    });
  </script>
</body>
</html>
