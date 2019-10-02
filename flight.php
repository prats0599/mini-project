<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Check the Status of Your Flight|Mumbai Airport</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/homepage.css">
        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    </head>

<body>
  <div class="header">
      <div class="container">
          <div>
              <ul class="nav1">
                  <li style="float:left"><a href="index.php">Mumbai Airport</a></li>
                  <li><a href="http://indiaairport.com/airports/mumbai/parking.htm">Car Parking</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="flight.php">Check Flight Status</a></li>
                  <li><a href="index.php">Home</a></li>
                  </ul>
          </div>

      </div>
  </div>

  <section class="banner">
       <div class="container">
           <div class="row">
               <div class="col-md-6 col-md-offset-3">
                   <h2>Check Flight Status</h2>
                   <p>Checking Flight Status Made Easy</p>
               </div>
           </div>
       </div>
   </section>


      <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "flights";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * from departures ORDER BY flighttime";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>flighttime</th><th>flightid</th><th>Destination</th><th>airline</th><th>Status</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["flighttime"]. "</td><td>" . $row["flightid"].  "</td><td>" . $row["fltto"]. "</td><td>" . $row["airline"]. "</td><td>" . $row["status"]. "</td></tr>" ;
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $sql = "SELECT * from arrivals ORDER BY flighttime";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>flighttime</th><th>flightid</th><th>From</th><th>airline</th><th>Status</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["flighttime"]. "</td><td>" . $row["flightid"].  "</td><td>" . $row["fltfrom"]. "</td><td>" . $row["airline"]. "</td><td>" . $row["status"]. "</td></tr>" ;
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>


</body>
</html>
