@extends('backend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Noto Sans', sans-serif;
      background-color: #f4f7f9;
      color: #333;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 50px auto;
      padding: 20px;
    }

    .panel {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .panel-heading {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: linear-gradient(135deg, #2980b9, #2c3e50);
      padding: 20px;
      color: #fff;
    }

    .panel-heading h4 {
      margin: 0;
      font-size: 24px;
    }

    .search-bar {
      display: flex;
      gap: 10px;
    }

    .search-bar input {
      border: 2px solid #fff;
      border-radius: 20px;
      padding: 8px 20px;
      color: #fff;
      background: rgba(255, 255, 255, 0.1);
      outline: none;
      transition: background 0.3s ease;
    }

    .search-bar input:focus {
      background: rgba(255, 255, 255, 0.2);
    }

    .search-bar button {
      background: transparent;
      border: 2px solid #fff;
      border-radius: 50%;
      padding: 8px;
      color: #fff;
      cursor: pointer;
      transition: background 0.3s ease, color 0.3s ease;
    }

    .search-bar button:hover {
      background: #fff;
      color: #2980b9;
    }

    .panel-body {
      padding: 20px;
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table thead th {
      background-color: #2980b9;
      color: #fff;
      text-align: left;
      padding: 12px;
      text-transform: uppercase;
    }

    table tbody td {
      padding: 12px;
      border-bottom: 1px solid #eaeaea;
      vertical-align: middle;
    }

    table tbody tr:hover {
      background-color: #f4f7f9;
    }

    .action-list {
      display: flex;
      gap: 10px;
    }

    .action-list a {
      text-decoration: none;
      color: #2980b9;
      font-size: 18px;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    .action-list a:hover {
      color: #2c3e50;
    }

    .panel-footer {
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f4f7f9;
    }

    .pagination {
      display: flex;
      list-style: none;
      gap: 5px;
    }

    .pagination li a {
      text-decoration: none;
      color: #2980b9;
      padding: 8px 12px;
      border-radius: 50%;
      background-color: transparent;
      transition: background-color 0.3s ease;
    }

    .pagination li a:hover,
    .pagination li.active a {
      background-color: #2980b9;
      color: #fff;
    }

    @media (max-width: 768px) {
      .panel-heading {
        flex-direction: column;
        gap: 10px;
        text-align: center;
      }

      .search-bar {
        justify-content: center;
      }

      .panel-footer {
        flex-direction: column;
        gap: 10px;
      }

      .pagination {
        justify-content: center;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="panel">
      <div class="panel-heading">
        <h4>Customer List</h4>
        <div class="search-bar">
          <input type="text" placeholder="Search...">
          <button><span class="material-icons">refresh</span></button>
          <button><span class="material-icons">picture_as_pdf</span></button>
          <button><span class="material-icons">file_download</span></button>
        </div>
      </div>
      <div class="panel-body">
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Full Name</th>
              <th>Age</th>
              <th>Job Title</th>
              <th>City</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Vincent Williamson</td>
              <td>31</td>
              <td>iOS Developer</td>
              <td>Sinaai-Waas</td>
              <td>
                <div class="action-list">
                  <a href="#"><span class="material-icons">edit</span></a>
                  <a href="#"><span class="material-icons">delete</span></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Taylor Reyes</td>
              <td>22</td>
              <td>UI/UX Developer</td>
              <td>Baileux</td>
              <td>
                <div class="action-list">
                  <a href="#"><span class="material-icons">edit</span></a>
                  <a href="#"><span class="material-icons">delete</span></a>
                </div>
              </td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
      <div class="panel-footer">
        <div>Showing 5 out of 25 entries</div>
        <ul class="pagination">
          <li><a href="#">«</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">»</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>

@endsection