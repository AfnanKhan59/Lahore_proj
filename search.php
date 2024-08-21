<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Student Data</title>
  <link rel="stylesheet" href="insert.css">
</head>
<body>
  <div class="form-container">
    <form action="search_process.php" method="get">
      <h2>Search Student Data</h2>
      <label for="searchName">Search by Name</label>
      <input type="text" id="searchName" name="searchName">

      <label for="searchClass">Search by Class</label>
      <input type="text" id="searchClass" name="searchClass">

      <label for="searchRollNo">Search by Roll Number</label>
      <input type="text" id="searchRollNo" name="searchRollNo">

      <button type="submit">Search</button>
    </form>
  </div>
</body>
</html>
