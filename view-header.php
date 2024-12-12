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
        background-color: #f5f5f5; /* Light gray background */
        margin: 0;
        padding: 0;
        color: #333;
      }

      /* Navbar Styles */
      .navbar {
        background-color: #1abc9c; /* Turquoise navbar */
        border-radius: 0px 0px 15px 15px; /* Rounded bottom corners */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
        transition: background-color 0.3s ease;
      }

      .navbar-nav .nav-link:hover {
        color: #fff;
        background-color: #3498db; /* Blue on hover */
        border-radius: 5px;
      }

      .navbar-nav .nav-link.active {
        background-color: #e67e22; /* Orange active state */
        border-radius: 5px;
      }

      /* Clock in the header */
      #clock {
        color: #ecf0f1;
        font-size: 1.2em;
        font-weight: bold;
      }

      /* Container */
      .container {
        max-width: 1200px;
        margin-top: 30px;
      }

      /* Footer Styles */
      footer {
        background-color: #34495e; /* Dark blue-gray footer */
        color: #ecf0f1;
        text-align: center;
        padding: 20px;
        font-size: 0.9em;
        margin-top: 50px;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      /* Button Styles */
      button {
        background-color: #3498db; /* Bright blue */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 1em;
        transition: background-color 0.3s ease;
      }

      button:hover {
        background-color: #2980b9; /* Darker blue on hover */
      }

      /* Hero Section */
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
        border: 1px solid #ddd; /* Light border */
        transition: transform 0.3s ease-in-out;
      }

      .card:hover {
        transform: scale(1.05);
      }

      .card-header {
        background-color: #e74c3c; /* Red header */
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
          <!-- Display real-time clock in header -->
          <div id="clock"></div>
        </div>
      </nav>
    </div>

    <!-- Optional Hero Section -->
    <div class="hero-section">
      <div class="hero-text">Welcome to Fantasy Football</div>
    </div>

    <!-- Example Card -->
    <div class="container mt-5">
      <div class="card">
        <div class="card-header">
          Player Stats
        </div>
        <div class="card-body">
          <h5 class="card-title">Top Players</h5>
          <p class="card-text">Check out how player have been performing on your team!</p>     
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      Fantasy Football League &copy; 2024
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb9kVOGy4MxVg1n04g6e37NdF2fQtrdQ5ooPjtFqX3v30zIa0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-ndR56aNeODv77a5zRfPEuKzZ5nVs8TxTAn26wV7Rnvnu3HTQK5w1V9PyXbXYUNnhR" crossorigin="anonymous"></script>
    <script>
      // Real-time clock function
      function updateClock() {
        const now = new Date();
        let hours = now.getHours();
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        const ampm = hours >= 12 ? 'PM' : 'AM';

        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'
        
        const time = `${hours}:${minutes}:${seconds} ${ampm}`;
        document.getElementById('clock').textContent = time;
      }

      setInterval(updateClock, 1000); // Update every second
      updateClock(); // Initial call to show the time immediately
    </script>
  </body>
</html>
