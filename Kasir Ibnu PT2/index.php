<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kasir Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg,rgb(38, 150, 202),rgb(0, 10, 20));
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .glass-card {
      backdrop-filter: blur(15px);
      background-color: rgba(255, 255, 255, 0.15);
      border-radius: 16px;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.3);
      padding: 40px;
      width: 100%;
      max-width: 400px;
      color: #fff;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .glass-card .card-header {
      text-align: center;
      font-size: 24px;
      font-weight: 600;
      margin-bottom: 20px;
      color: #ffffff;
    }

    label {
      font-weight: 500;
    }

    .form-control {
      border-radius: 10px;
      padding: 12px;
      font-size: 14px;
      border: none;
      margin-bottom: 20px;
      background-color: rgba(255, 255, 255, 0.3);
      color: #fff;
    }

    .form-control::placeholder {
      color: #e0e0e0;
    }

    .form-control:focus {
      border: 1px solid #ffffff;
      box-shadow: 0 0 5px rgba(255, 255, 255, 0.6);
      background-color: rgba(255, 255, 255, 0.4);
    }

    .btn-primary {
      background-color: rgba(255, 255, 255, 0.2);
      border: none;
      color: #fff;
      font-weight: 600;
      padding: 12px;
      font-size: 16px;
      border-radius: 12px;
      width: 100%;
      transition: 0.3s ease;
    }

    .btn-primary:hover {
      background-color: rgba(255, 255, 255, 0.35);
      color: #000;
    }

    .alert {
      background-color: rgba(255, 77, 77, 0.85);
      color: #fff;
      border-radius: 10px;
      padding: 12px;
      font-size: 14px;
    }

    .alert-success {
      background-color: rgba(40, 167, 69, 0.85);
    }

    img {
      max-width: 100%;
      max-height: 400px;
      border-radius: 16px;
      object-fit: cover;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 768px) {
      .glass-card {
        padding: 25px;
        margin-top: 20px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
        <div class="glass-card mt-5">
          <div class="card-header">Login</div>
          <div class="card-body">
            <?php if (isset($_GET['pesan']) && $_GET['pesan'] == "gagal") : ?>
              <div class="alert">Username dan password tidak sesuai!</div>
            <?php endif; ?>
            <form method="post" action="cek_login.php">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" class="form-control" name="username" required placeholder="Masukkan username">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password" required placeholder="Masukkan password">
              </div>
              <div class="form-group mt-3">
                <button class="btn btn-primary" type="submit">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 text-center mt-4 mt-md-0">
        <img src="assets/kasircewe.jpg" alt="Kasir Image" />
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
