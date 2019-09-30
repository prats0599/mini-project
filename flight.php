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
        <style>
        table, th, td {
            border: 1px solid black;
        }
        </style>
    </head>

<body>
  <div class="header">
      <div class="container">
          <a href="index.html" class="navbar-brand scroll-top">Mumbai Airport</a>
      </div>
  </div>

  <div class="container">
    <div>
        <ul class="nav1">
            <li class="tabs"><a href="index.html">Home</a></li>
            <li class="tabs"><a href="#">Check Flight Status</a></li>
            <li class="tabs"><a href="contact.html">Contact Us</a></li>
            <li class="tabs"><a href="http://indiaairport.com/airports/mumbai/parking.htm">Car Parking</a></li>
        </ul>
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


   <!-- <div id="flight-details">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-12">
   					<div class="section-title text-center">
   						<h2>Flight Status</h2>
   					</div>
   				</div>
   			</div> -->

   			<div id="tabs">
   				<nav align="center" class="tabs-nav">
   					<a href="#" class="active" data-tab="tab1">
   						<i class="flaticon-plane-landing"></i>
   						<span>Arrivals</span>
   					</a>
   					<a href="#" data-tab="tab2">
   						<i class="flaticon-takeoff-the-plane"></i>
   						<span>Departures</span>
   					</a>

   				</nav>
   				<div class="tab-content-container">
   					<div class="tab-content active show" data-tab-content="tab1">
   						<div class="container">
   							<div class="row">
   								<div class="a-col">
   							<section>
   								<select class="cs-select cs-skin-border">
   									<option value="">Terminal Select</option>
   									<option value="email">Terminal 1</option>
   									<option value="twitter">Terminal 2</option>
   									</select>
   							</section>
   						</div>
   						<div class="a-col alternate">
   							<section>
   								<select class="cs-select cs-skin-border">
   									<option>Select Airline</option>
   									<option>Jet Airways</option>
   									<option>Airindia</option>
   									</select>
   							</section>
   						</div>

   							</div>
   						</div>
   					</div>
   					<div class="tab-content" data-tab-content="tab2">
   						<div class="container">
   							<div class="row">
   								<div class="col-md-12">
   									<img src="images/tab_img_2.jpg" class="img-responsive" alt="Image">
   								</div>
   								<!-- <div class="col-md-12">
   									<span class="super-heading-sm">World Class</span>
   									<h3 class="heading">Bars</h3>
   									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
   									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
   									<p class="service-hour">
   										<span>Service Hours</span>
   										<strong>7:30 AM - 8:00 PM</strong>
   									</p>
   								</div> -->
   							</div>
   						</div>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
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




   	</div>
   	<!-- END fh5co-page -->

   	</div>

</body>
</html>
