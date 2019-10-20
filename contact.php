<!DOCTYPE html>
<html>
    <head>
    <style>
    #ep{
      font-size: 19px;
      font-weight: bold;
    }



    </style>
      <script>
        function validation(){
           var name=document.getElementById("name").value;
           var email=document.getElementById("email").value;
           var phone=document.getElementById("phone").value;
           var message=document.getElementById("message").value;
           if(name==""||email==""||phone==""||message=="")
           {
             document.getElementById("ep").innerHTML="ALL FIELD REQUIRED";
             return false;
           }else{
             return myFunction();
           }
         }
         var data = {"name":name,"email":email,"phone":phone,"message":message};
         var formdata = new FormData();
         formdata.append('values',JSON.stringify(data));
         var request= ajax_call("POST","contact.php",formdata);
         request.done(function(msg){
           msg=JSON.parse(msg);
           if(msg.present){
             alert(msg.status);
           }
           else{
             alert("booked successfully");
             window.location="landing";
           }
         });

       </script>


     <script>
        function myFunction()
        {
        var inputVal = document.getElementById("name").value;
        alert("Thank you for contacting "+inputVal+" We will get back to you shortly");
        }
      </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Mumbai Airport</title>
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
                   <h2>Contact Us</h2>
                   <p>Providing Solutions To Your Problems is our Responsibility.</p>
               </div>
           </div>
       </div>
   </section>



    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h2>Message</h2>
                    </div>
                    <form id="contact" action="insert.php" method="post" onsubmit="return validation()">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                  <label>Name</label>&nbsp;<span id="ep"></span>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name...">
                                </fieldset>
                                <fieldset>
                                  <label>Email</label>&nbsp;<span id="ep"></span>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required>
                                </fieldset>
                                <fieldset>
                                  <label>Phone</label>&nbsp;<span id="ep"></span>
                                    <input name="phone" type="tel" class="form-control" id="phone" placeholder="Your phone..."pattern="[0-9]{10}"required >
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                  <label>Message</label>&nbsp;<span id="ep"></span>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..."></textarea>
                                </fieldset>
                                <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>

                <br>
                <div class="col-md-6">
                    <div class="section-heading contact-info">
                        <h2>Contact Info</h2>
                        <p>Terminal 2 Navpada, Vile Parle East, Vile Parle, Mumbai, Maharashtra 400099<br><em>Mumbai, <br>Maharashtra 400099</em></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.232871645443!2d72.87231301490152!3d19.097437287075564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c842b68282f1%3A0x200d8c72871da4f1!2sTerminal%202%2C%20Navpada%2C%20Vile%20Parle%20East%2C%20Vile%20Parle%2C%20Mumbai%2C%20Maharashtra%20400099!5e0!3m2!1sen!2sin!4v1569653009253!5m2!1sen!2sin" width="1350" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
