<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Newsletter Container</title>
  <!-- Add Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(to right, #3498db, #8e44ad);
      font-family: 'Arial', sans-serif;
    }

    .newsletter-container {
      max-width: 400px;
      padding: 24px;
      box-sizing: border-box;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      animation: slideIn 1s ease-out;
      transition: box-shadow 0.3s ease;
    }

    .newsletter-container:hover {
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    }

    @keyframes slideIn {
      from {
        transform: translateX(-100%);
        opacity: 0;
      }
      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    .newsletter-container h2 {
      font-size: 24px;
      color: #333;
      margin-bottom: 20px;
    }

    .newsletter-form {
      display: flex;
      flex-direction: column;
      margin-right: 20px;
    }

    .input-field {
      margin-bottom: 15px;
    }

    .input-field label {
      font-size: 14px;
      color: #555;
      margin-bottom: 5px;
    }

    .input-field input {
      padding: 10px;
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 6px;
      transition: border-color 1s ease;
    }

    .input-field input:focus {
      border-color: #3498db;
    }

    .submit-btn {
      background-color: #3498db;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 1s ease;
    }

    .submit-btn:hover {
      background-color: #2980b9;
    }

    .back-to-home {
      position: absolute;
      top: 10px;
      left: 10px;
      text-align: left;
    }

    .back-btn,
    .home-btn {
      background-color: #3185FC;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 1s ease;
    }

    .back-btn:hover,
    .home-btn:hover {
      background-color: #190033;
    }
  </style>
</head>

<body>
  <br>  
  <div class="back-to-home">
    <a href="home.php" class="back-btn">
      <i class="fas fa-home">Home</i>
    </a>
  </div>
  <div class="newsletter-container">
    <h2>Subscribe to our Newsletter</h2>
    <form class="newsletter-form" action="process_subscribe.php" method="post">
      <div class="input-field">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <button type="submit" class="submit-btn">
  <i class="fas fa-plus-circle"></i> Subscribe
</button>

    </form>
    <br>        
  </div>
</body>

</html>
