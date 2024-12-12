<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* General Body Styling */
    body {
      background: linear-gradient(135deg, #1e88e5, #43a047);
      font-family: 'Arial', sans-serif;
      color: white;
      padding: 20px;
    }

    h1 {
      font-size: 3rem;
      text-align: center;
      margin-bottom: 20px;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
      color: #f0f8ff;
    }

    /* Navbar Styling */
    .navbar {
      background-color: #003366; /* Dark Blue */
    }
    .navbar-brand, .nav-link {
      color: white !important;
    }
    .navbar-brand:hover, .nav-link:hover {
      color: #ff5722 !important; /* Orange hover effect */
    }

    /* Table Styling */
    .table-responsive {
      margin-top: 30px;
      border-radius: 15px;
      overflow: hidden;
      background-color: rgba(255, 255, 255, 0.9);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      text-align: center;
    }

    th {
      background-color: #ff5722; /* Orange Header */
      color: white;
      padding: 12px;
      text-align: left;
      cursor: pointer;
      font-size: 1.1rem;
    }

    td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
      font-size: 1rem;
    }

    tr:nth-child(even) {
      background-color: #f5f5f5; /* Light gray */
    }

    tr:hover {
      background-color: #ffeb3b;
      cursor: pointer;
      transform: scale(1.02);
      transition: transform 0.2s ease-in-out;
    }

    .btn-primary {
      background-color: #2196f3; /* Blue for primary button */
      border-color: #2196f3;
      color: white;
    }

    .btn-primary:hover {
      background-color: #1976d2;
      border-color: #1976d2;
    }

    .btn-danger {
      background-color: #f44336; /* Red for delete button */
      border-color: #f44336;
    }

    .btn-danger:hover {
      background-color: #e53935;
      border-color: #e53935;
    }

    /* Search Bar Styling */
    .search-bar {
      margin-bottom: 20px;
      padding: 15px;
      font-size: 1.1rem;
      border-radius: 25px;
      border: 2px solid #ff5722; /* Orange border */
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      width: 100%;
    }

    .search-bar:focus {
      outline: none;
      border-color: #2196f3; /* Blue focus border */
    }

    /* Add Football Icon in Button */
    .btn-icon {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .football-icon {
      width: 20px;
      height: 20px;
    }

    /* Custom Styling for Add Team Button */
    .add-team-btn {
      background-color: #4caf50; /* Green for add team button */
      border-color: #4caf50;
      padding: 10px 20px;
      font-size: 1.1rem;
      border-radius: 10px;
      color: white;
      transition: background-color 0.3s;
    }

    .add-team-btn:hover {
      background-color: #388e3c;
      border-color: #388e3c;
    }
  </style>
    <body>
   <div class "container">
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
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
        </li>        <li class="nav-item">
          <a class="nav-link" href="ppg-and-ranking.php">Players PPG and Ranking</a>     
       <li class="nav-item">
          <a class="nav-link" href="information.php">Information</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
