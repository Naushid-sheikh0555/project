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
      <form id="loginForm">
        <h5 class="fw-semibold mb-3">Welcome !<br>What's your E-mail</h5>

        <div class="mb-3 text-start">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" placeholder="you@example.com" required />
        </div>

       

        

        <button type="submit" class="btn btn-orange w-100 mb-3">Sign up</button>

        <div class="small">

          <a href="./login.php" id="showSignup">Login</a>
        </div>
      </form>

      <!-- Sign Up Form -->
      <form id="signupForm" class="d-none">
        <h5 class="fw-semibold mb-3">Create a Prasangam Account</h5>

        <div class="mb-3 text-start">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" placeholder="Your name" required />
        </div>

        <div class="mb-3 text-start">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" placeholder="you@example.com" required />
        </div>

        <div class="mb-2 text-start">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" placeholder="Create password" required />
        </div>

        <div class="mb-3 text-start">
          <label class="form-label">Confirm Password</label>
          <input type="password" class="form-control" placeholder="Re-enter password" required />
        </div>

        <button type="submit" class="btn btn-orange w-100 mb-3">Sign Up</button>

        <div class="small">
          Already have an account?
          <a href="#" id="showLogin">Log In</a>
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
