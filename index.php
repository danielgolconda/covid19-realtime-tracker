<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <?php include 'link/links.php'; ?>
      <?php include 'css/style.php'; ?>
   </head>
   <body onload = "fetch()">
      <nav class="navbar navbar-expand-lg nav_style p-3">
         <a class="navbar-brand pl-5" href="#">COVID - 19</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5 text-capitalize">
               <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#aboutid">about</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#symptomsid">symptoms</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#preventionid">prevention</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#contactid">contact</a>
               </li>
            </ul>
         </div>
      </nav>
      <div class = "mainheader">
         <div class = "row w-100 h-100 mt-1">
            <div class = "col-lg-5 col-md-5 col-12 order-lg-1 order-1">
               <div class = "leftside w-100 h-100 d-flex justify-content-center align-items-center">
                  <img src="images/coronavirus.png" width = "300" height="300">
               </div>
            </div>
            <div class = "col-lg-7 col-md-7 col-12 order-lg-2 order-2">
               <div class = "rightside w-100 h-100 d-flex justify-content-center align-items-center">
                  <h1>Let's All Stay Safe and Fight Against Cor<span class = "rot"><img src = "images/corona.png" width="65px" height = "65px"></span>na Virus Together.</h1>
               </div>
            </div>
         </div>
      </div>
      <!-- CORONA update-->
      <div class = "corona_update">
         <div class = "mb-4">
            <h3 class = "text-uppercase text-center">Covid-19 LIVE UPDATES</h3>
         </div>
         <div class = "table-responsive">
            <table class="table table-bordered table-striped text-center" id = "tb_val">
                  <tr>
                     <th>Country</th>
                     <th>Total Confirmed</th>
                     <th>Total Recovered</th>
                     <th>Total Deaths</th>
                     <th>New Recovered</th>
                     <th>New Deaths</th>
                  </tr>
            </table>
         </div>
      </div>
      <!-- About Section-->
      <div class = "container-fluid sub_section pt-5 pb-5" id = "aboutid">
         <div class = "section_header text-center mb-5 mt-4">
            <h1>About COVID - 19</h1>
         </div>
         <div class = "row pt-5">
            <div class = "col-lg-5 col-md-6 col-12">
               <img src="images/covid_diag.jpg" class = "img-fluid">			
            </div>
            <div class = "col-lg-7 col-md-6 col-12">
               <h2> What is COVID-19(Corona-Virus)</h2>
               <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
                  Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.
               </p>
               <p>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).
                  At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.
               </p>
            </div>
         </div>
      </div>
      <!-- symptoms-->
      <div class = "container-fluid pt-5 pb-5" id = "symptomsid">
         <div class = "section_header text-center mb-5 mt-4">
            <h1>COVID - 19 Symptoms</h1>
         </div>
         <div class = "container">
            <div class = "row">
               <div class = "col-lg-4 col-md-4 col-12 mt-5">
                  <figure class = "text-center">
                     <img src="images/cough.png" class = "img-fluid" width="120" height="120">
                     <figcaption>Cough</figcaption>
                  </figure>
               </div>
               <div class = "col-lg-4 col-md-4 col-12 mt-5">
                  <figure class = "text-center">
                     <img src="images/sick.png" class = "img-fluid" width="120" height="120">
                     <figcaption>Fever</figcaption>
                  </figure>
               </div>
               <div class = "col-lg-4 col-md-4 col-12 mt-5">
                  <figure class = "text-center">
                     <img src="images/running-nose.png" class = "img-fluid" width="120" height="120">
                     <figcaption>Running Nose</figcaption>
                  </figure>
               </div>
               <div class = "col-lg-4 col-md-4 col-12 mt-5">
                  <figure class = "text-center">
                     <img src="images/tired.png" class = "img-fluid" width="120" height="120">
                     <figcaption>Tiredness</figcaption>
                  </figure>
               </div>
               <div class = "col-lg-4 col-md-4 col-12 mt-5">
                  <figure class = "text-center">
                     <img src="images/breathing.png" class = "img-fluid" width="120" height="120">
                     <figcaption>Difficulty In Breathing</figcaption>
                  </figure>
               </div>
               <div class = "col-lg-4 col-md-4 col-12 mt-5">
                  <figure class = "text-center">
                     <img src="images/sad.png" class = "img-fluid" width="120" height="120">
                     <figcaption>Headache</figcaption>
                  </figure>
               </div>
            </div>
         </div>
      </div>

      <!-- Prevention --> 
      <div class = "container-fluid sub_section pt-5 pb-5" id = "preventionid">
         <div class = "section_header text-center mb-5 mt-4">
            <h1>Steps for Preventing COVID - 19</h1>
         </div>
         <div class = "container">
            <div class="row">
               <div class = "col-lg-4 col-md-4 col-12">
                  <div class = "row">
                     <div class = "col-lg-4 col-md-4 col-12">
                        <figure class = "text-center">
                           <img src="images/hand-sanitizer.png" class = "img-fluid" width="90" height="90">
                        </figure>
                     </div>
                     <div class= "col-lg-8 col-md-8 col-12">
                        <p>Wash your hands regularly for 20 seconds with water,soap or alcohol based sanitizer</p>
                     </div>
                  </div>
               </div>
               <div class = "col-lg-4 col-md-4 col-12">
                  <div class = "row">
                     <div class = "col-lg-4 col-md-4 col-12">
                        <figure class = "text-center">
                           <img src="images/face-mask.png" class = "img-fluid" width="90" height="90">
                        </figure>
                     </div>
                     <div class= "col-lg-8 col-md-8 col-12">
                        <p>Cover your nose and mouth with a face mask whenever leaving your house.</p>
                     </div>
                  </div>
               </div>
               <div class = "col-lg-4 col-md-4 col-12">
                  <div class = "row">
                     <div class = "col-lg-4 col-md-4 col-12">
                        <figure class = "text-center">
                           <img src="images/property.png" class = "img-fluid" width="90" height="90">
                        </figure>
                     </div>
                     <div class= "col-lg-8 col-md-8 col-12">
                        <p>Stay home and isolate yourself if you develop any symptoms.</p>
                     </div>
                  </div>
               </div>
               <div class = "col-lg-4 col-md-4 col-12">
                  <div class = "row">
                     <div class = "col-lg-4 col-md-4 col-12">
                        <figure class = "text-center">
                           <img src="images/broadcast.png" class = "img-fluid" width="90" height="90">
                        </figure>
                     </div>
                     <div class= "col-lg-8 col-md-8 col-12">
                        <p>Stay informed by watching the news and getting regular updates.</p>
                     </div>
                  </div>
               </div>
               <div class = "col-lg-4 col-md-4 col-12">
                  <div class = "row">
                     <div class = "col-lg-4 col-md-4 col-12">
                        <figure class = "text-center">
                           <img src="images/social-distancing.png" class = "img-fluid" width="90" height="90">
                        </figure>
                     </div>
                     <div class= "col-lg-8 col-md-8 col-12">
                        <p>Avoid close contact with the people who are unwell.</p>
                     </div>
                  </div>
               </div>
               <div class = "col-lg-4 col-md-4 col-12">
                  <div class = "row">
                     <div class = "col-lg-4 col-md-4 col-12">
                        <figure class = "text-center">
                           <img src="images/medical.png" class = "img-fluid" width="90" height="90">
                        </figure>
                     </div>
                     <div class= "col-lg-8 col-md-8 col-12">
                        <p>If you develop any of the symptoms seek medical care immediately.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Contact Us --> 
      <div class = "container-fluid sub_section pt-5 pb-5" id = "contactid">
         <div class = "section_header text-center mb-5 mt-4">
            <h1>Contact Us</h1>
         </div>
         <div class = "container">
            <div class = "row">
               <div class = "col-lg-8 offset-lg-12 col-12">
                  <form action = "" method = "POST">
                     <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name = "username"  placeholder="Enter Your Name" required>
                     </div>
                     <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="number" class="form-control" name = "mobile"  placeholder="Enter Your Number" required>
                     </div>
                     <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name = "email" placeholder="name@example.com" required autocomplete="off">
                     </div>
                     <div class="form-group">
                        <label>Describe your symptoms</label>
                        <textarea class="form-control" name = "message" rows="3"></textarea>
                     </div>

                     <button type = "submit" class = "btn btn-primary" name = "submit">Submit</button>
                  </form>
               </div>
            </div>
         </div>
      </div>

      	<!-- top cursor ---> 

      	<div class = "container-fluid sub_section pb-3" id = "contactid">
         <div class = "section_header text-center">
         	<i class="fas fa-chevron-circle-up fa-2x" id = "myBTN" onclick="scroll()" ></i>
         </div>
     </div>
      <!-- footer -->

      	<footer>
      		<div class = "footer_style text-white text-center container-fluid">
      			
      			<p> Copyright by Daniel Golconda</p>
      		</div>
       </footer>


      	<script type="text/javascript">

      		$("#myBTN").click(function() {
  				$("html, body").animate({ scrollTop: 0 });
  				return false;
				});
            

            function fetch(){
            $.get("https://api.covid19api.com/summary",

            function(data){
               //console.log(data['Countries'].length);
               var tb_val = document.getElementById('tb_val');

               for(var i = 1;i<(data['Countries'].length);i++)
               {
                  var x = tb_val.insertRow();
                  x.insertCell(0);

                  tb_val.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];

                  tb_val.rows[i].cells[0].style.background = '#d24dff';
                  tb_val.rows[i].cells[0].style.color = '#ffffff';

                  x.insertCell(1);

                  tb_val.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];

                  tb_val.rows[i].cells[1].style.color = '#000000';
                  tb_val.rows[i].cells[1].style.background = '#944dff';

                  x.insertCell(2);

                  tb_val.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];

                  tb_val.rows[i].cells[2].style.color = '#000000';
                  tb_val.rows[i].cells[2].style.background = '#ffa64d';

                  x.insertCell(3);

                  tb_val.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];

                  tb_val.rows[i].cells[3].style.color = '#000000';
                  tb_val.rows[i].cells[3].style.background = '#ff4d4d';

                  x.insertCell(4);

                  tb_val.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewRecovered'];

                  tb_val.rows[i].cells[4].style.color = '#000000';
                  tb_val.rows[i].cells[4].style.background = '#4dff4d';

                  x.insertCell(5);

                  tb_val.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewDeaths'];

                  tb_val.rows[i].cells[5].style.color = '#000000';
                  tb_val.rows[i].cells[5].style.background = '#ff4d88';
               }
            }
         )
      }
      	</script>
   </body>
</html>

<?php

   include 'dbcon.php';
   include 'corona.php';
   if(isset($_POST['submit']))
   {

      $username = $_POST['username'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $message = $_POST['message'];


      $insertquery = "insert into coronacase(username,email,mobile,message) values('$username','$email','$mobile','$message')";
      
      $query = mysqli_query($con,$insertquery);
   }
?>