<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Past Papers</title>
  <link rel="stylesheet" href="insert.css">
</head>
<body>
  <div class="form-container">
    <form action="search_results.php" method="get">
      <h2>Search Past Papers</h2>

      <label for="searchName">Search by Name</label>
      <input type="text" id="searchName" name="searchName">

      <label for="searchClass">Search by Class</label>
      <input type="text" id="searchClass" name="searchClass">

      <button type="submit">Search</button>
    </form>
  </div>
</body>
</html>
