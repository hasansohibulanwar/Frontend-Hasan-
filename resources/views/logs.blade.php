<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        .navbar {
            background-color: #ffc107 !important; /* Warna kuning */
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/devices">Devices</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/logs">Logs <span class="sr-only">(current)</span></a> <!-- Tautan Logs -->
      </li>
    </ul>
  </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
    <h2>Logs</h2>
    <p>Here you can view the logs data.</p>
    
    <!-- Logs Table -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Time</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example Log Data -->
            <tr>
                <td>1</td>
                <td>2024-05-01 12:00:00</td>
                <td>Log data 1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2024-05-02 13:00:00</td>
                <td>Log data 2</td>
            </tr>
            <!-- Add your log data dynamically here -->
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
