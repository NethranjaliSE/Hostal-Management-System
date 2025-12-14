<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #2C1A1A,  #4A1C1A,  #B56551,   #F2C0B1);
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            
        }

        header {
            background-color: #FFD8C2;
            color: #7B3F00;
            text-align: left;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 25px;
            font-weight: bold;
            padding-right: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        .login-container {
            background-color: #FFFFFF;
           border: 1px solid #B56551;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px; 
        }

        h2 {
            color: #6E260E;
        }

        input {
            padding: 10px;
            margin: 10px 0;
        }

        button {
            background-color:  #B56551;
            color: rgb(54, 14, 52);
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: 	#D97B66;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
        .back-to-home {
            position: fixed;
            bottom: 10px;
            right: 10px;
            background-color: #2C1A1A;
            color:#ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .back-to-home:hover {
            background-color: #D97B66;
        }
    </style>
</head>

<body>
    <header style="background-color: #FFD8C2; color: #8B3A3A; text-align: left; padding: 10px; display: flex; justify-content: space-between; align-items: center; font-size: 25px; font-weight: bold; padding-right: 10px; width: 100%;">
        <img src="uokname.png" alt="University of kelaniya Logo" style="height: 80px; mix-blend-mode: multiply;">
        <div style="display: inline-block;">
            <div style="color: #4A1C1A;">Hostel Management System <br> University of Kelaniya</div>
        </div>
    </header>
    <div class="login-container">
        <h2>Admin Login</h2>

        <?php
        // Display error message if it exists
        if (isset($_GET["error"]) && $_GET["error"] == 1) {
            echo "<p class='error-message'>Invalid username or password</p>";
        }
        ?>

        <form method="post" action="admin_dashboard.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Login</button>
        </form>
        <a href="index.php" class="back-to-home">Go back</a>
    </div>
</body>

</html>
