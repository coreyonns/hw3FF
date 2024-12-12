<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
   <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Arial', sans-serif;
      padding: 20px;
    }

    .table-responsive {
      margin-top: 20px;
      border-radius: 10px;
      overflow: hidden;
      background-color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th {
      background-color: #007bff;
      color: white;
      padding: 12px;
      text-align: left;
      cursor: pointer;
    }

    td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #f1f1f1;
      cursor: pointer;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }

    .table-active {
      background-color: #cce5ff !important;
    }

    .search-bar {
      margin-bottom: 20px;
    }

    .modal-content {
      border-radius: 10px;
    }

    .modal-header {
      background-color: #007bff;
      color: white;
      border-bottom: 1px solid #ddd;
    }

    .modal-footer button {
      border-radius: 5px;
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
