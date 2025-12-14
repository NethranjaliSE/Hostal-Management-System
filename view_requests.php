<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Room Requests</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #4b0082;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #bd72d5;
            color: rgb(54, 14, 52);
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        .go-back-button {
            background-color: #bd72d5;
            color: rgb(54, 14, 52);
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin: 20px 0;
        }

        .go-back-button:hover {
            background-color: #bea5d0;
        }
    </style>
</head>

<body>
 <header style="background-color: #FFD8C2; color: #8B3A3A; text-align: left; padding: 10px; display: flex; justify-content: space-between; align-items: center; font-size: 25px; font-weight: bold; padding-right: 10px; width: 100%;">
        <img src="uokname.png" alt="University of kelaniya Logo" style="height: 80px; mix-blend-mode: multiply; ">
        <div style="display: inline-block;">
            <div style="color: #4A1C1A;">Hostel Management System <br> University of Kelaniya</div>
        </div>
    </header>
    <center><h2>Room Requests</h2></center>
    <?php
    // database connection 
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="hostel_management";
$port=3307;
$conn=mysqli_connect($servername,$username,$password,$dbname,$port);
    // Check if the connection is successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch room requests from the database
   
$selectQuery = "SELECT rr.id, s.studentnumber, rr.room_no, rr.hostel, rr.status, rr.request_date
FROM room_requests rr
JOIN students s ON rr.student_id = s.id";

$result = $conn->query($selectQuery);

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='8'>";
    echo "<tr>
            <th>Request Id</th>
            <th>Student Number</th>
            <th>Room No</th>
            <th>Hostel</th>
            <th>Status</th>
            <th>Request Date</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["studentnumber"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["room_no"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["hostel"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["status"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["request_date"]) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>No room requests found.</p>";
}



    // Close the database connection
    $conn->close();
    echo "<a href='student_home.php' class='go-back-button'>Go Back</a>";
    echo" ";
    echo "<a href='index.php' class='go-back-button'>Home</a>";
    ?>
</body>

</html>
