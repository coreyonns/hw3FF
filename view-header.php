<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      /* Custom Styles */
      body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
      }

      .navbar {
        background-color: #2c3e50; /* Darker navbar background */
        border-radius: 0px 0px 15px 15px; /* Rounded bottom corners */
      }

      .navbar-brand {
        color: #ecf0f1;
        font-size: 1.8em;
        font-weight: bold;
      }

      .navbar-nav .nav-link {
        color: #ecf0f1;
        font-size: 1.1em;
        padding: 10px 15px;
      }

      .navbar-nav .nav-link:hover {
        color: #3498db;
        background-color: #34495e;
        border-radius: 5px;
      }

      .navbar-nav .nav-link.active {
        background-color: #3498db;
        border-radius: 5px;
      }

      /* Container */
      .container {
        max-width: 1200px;
        margin-top: 30px;
      }

      /* Footer */
      footer {
        background-color: #2c3e50;
        color: #ecf0f1;
        text-align: center;
        padding: 20px;
        font-size: 0.9em;
        margin-top: 50px;
        border-radius: 15px;
      }

      /* Add a shadow effect to navbar and footer */
      .navbar, footer {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      /* Buttons */
      button {
        background-color: #3498db;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 1em;
        transition: background-color 0.3s;
      }

      button:hover {
        background-color: #2980b9;
      }

      /* Hero Section (optional) */
      .hero-section {
        background: url('https://via.placeholder.com/1500x400') no-repeat center center;
        background-size: cover;
        height: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
      }

      .hero-text {
        font-size: 3em;
        font-weight: bold;
        text-align: center;
      }

      /* Cards for Team/Player Listings */
      .card {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      .card-header {
        background-color: #3498db;
        color: white;
        font-weight: bold;
        text-align: center;
        border-radius: 10px 10px 0 0;
        padding: 15px;
      }

      .card-body {
        background-color: #fff;
        padding: 20px;
        border-radius: 0 0 10px 10px;
      }

      /* Responsive Adjustments */
      @media (max-width: 768px) {
        .hero-text {
          font-size: 2em;
        }
        .navbar-nav .nav-link {
          font-size: 1em;
        }
      }

    </style>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Fantasy Football</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Fantasy Football</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="players.php">Players</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="teams.php">Teams</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ppg-and-ranking.php">Players PPG and Ranking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="information.php">Information</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- Optional Hero Section (for introduction or banners) -->
    <div class="hero-section">
      <div class="hero-text">Welcome to Fantasy Football</div>
    </div>

    <!-- Main Content Goes Here -->

    <!-- Bootstrap JS, Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb9kVOGy4MxVg1n04g6e37NdF2fQtrdQ5ooPjtFqX3v30zIa0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-ndR56aNeODv77a5zRfPEuKzZ5nVs8TxTAn26wV7Rnvnu3HTQK5w1V9PyXbXYUNnhR" crossorigin="anonymous"></script>
  </body>
</html>
