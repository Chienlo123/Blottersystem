
           

	<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
   
  
    <?php include "includes/navigationlaspinas.php"; ?>

	
	<style>
	.main-tariff {
    text-align: center;
}

.inner-tarrif {
    display: flex;
    justify-content: space-between;
}

.tarrif-container {
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 5px 5px 15px 0 rgba(0, 0, 0, 0.1);
    padding: 20px;
    transform: perspective(1000px) rotateY(20deg);
    transition: transform 0.3s;
    width: 300px;
    text-align: center;
}

.tarrif-container:hover {
    transform: perspective(1000px) rotateY(0deg);
    transition: transform 0.3s;
}
.main-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    background-color: #f7f7f7;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.background-text {
    max-width: 60%;
    text-align: left;
    padding: 20px;
}
.main-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    background-color: #f7f7f7;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.background-text {
    max-width: 60%;
    text-align: left;
    padding: 20px;
}

.taxi-image {
    max-width: 40%;
}

.main-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #0074e4;
    padding: 20px;
    color: #fff;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}
.tarrif-container {
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 5px 5px 15px 0 rgba(0, 0, 0, 0.1);
    padding: 20px;
    transform: perspective(1000px) rotateY(20deg);
    transition: transform 0.3s;
    width: 300px;
    text-align: center;
}

.tarrif-container:hover {
    transform: perspective(1000px) rotateY(0deg);
    transition: transform 0.3s;
    background-color: #0074e4;
    color: #fff;
}

/* Change the link color on hover */
.tarrif-container a:hover {
    color: #0074e4;
}
.booknow {
    display: inline-block;
    padding: 12px 20px;
    margin-top: 20px;
    background-color: #007BFF; /* Button background color */
    color: #fff; /* Text color */
    text-decoration: none;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s;
}

.booknow:hover {
    background-color: #0056b3; /* Change the background color on hover */
}


body {
    background-color: #f2f2f2;
  
    height: 100vh;
    margin: 0;
}

.box {
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    border-radius: 10px;
    transform: rotate(-3deg);
}

.inner-content {
    text-align: center;
}

h3 {
    font-size: 24px;
    font-weight: bold;
    color: #333;
}

h2 {
    font-size: 30px;
    font-weight: bold;
    color: #333;
}

p {
    font-size: 16px;
    color: #555;
    line-height: 1.5;
}

.booknow {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
    font-weight: bold;
    transition: background-color 0.3s;
}

.booknow:hover {
    background-color: #0056b3;
}
.clients {
    text-align: center;
    padding: 20px;
    transition: transform 0.3s;
}

.clients:hover {
    transform: scale(1.2); /* Adjust the scale factor for the desired zoom level */
}

/* Additional CSS for styling and layout can be added here */

h1 {
    font-size: 20px;
    font-weight: bold;
    color: #333;
}
.taxi-image:hover{
	transform: scale(1.2); /* Adjust the scale factor for the desired zoom level */
}
.img-responsive:hover{
	transform: scale(1.2); /* Adjust the scale factor for the desired zoom level */
	
}

/* Animation for the heading */
    h2 {
        animation: fadeInUp 1.5s ease both;
    }

    /* Animation for the paragraph */
    p {
        animation: fadeIn 1.5s ease both;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
	</style>

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="stylelaspinas1.css">
   <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
</head>

<body style="padding-top: 1px;">
    <div class="main-container">

<?php include "includes/sidebarlaspinas.php"; ?>

        <div class="background-text">
            <h2 style="margin-top:-200px ">Driving School<span> Laspinas</span></h2>
			
        </div>
        <div class="taxi-image" style="margin-left:-100px; ">
            <img style="width:1000px; margin-top:100px;" src="images/y1.png" alt="">
        </div>
			 
		
    </div>

<!-- home section -->
<div class="home-container">
    <div class="home-content">
        <div class="inner-content">
              <h2>Practice for License Tests</h2>
            <p>These schools offer a structured curriculum designed to teach students the necessary skills and knowledge to become competent and responsible motorcyclists.Motorcycle driving schools are crucial for new riders, as they provide a structured and safe environment for learning, reducing the risk associated with inexperienced riders taking to the road without proper training. Additionally, they help promote responsible and safe riding practices, which can contribute to overall road safety.</p>
          <a href="contactlaspinas.php" class="booknow">Contact Us:</a>
        </div>
        <div class="inner-content">
           <div id="header" class="shadow mb-4" >
              <div class="d-flex justify-content-center h-100 w-100 align-items-center flex-column px-3">
                  
                  <center ><a class="btn btn-lg btn-light rounded-pill w-25" id="enrollment"><img class="img-responsive" src="images/enroll2.png" alt=""></a></center>
				    <a href="registrationlaspinas.php" style="margin-left: 500px; margin-top: 10px; "class="btn btn-primary">Go to Registration</a>

              </div>
          </div>
           
        </div>
    </div>
</div>
<!-- home section ended -->

<!-- our tariff -->




<div class="main-tariff">
    <h1>Driving Schools <span>Branches</span></h1>
    <div class="inner-tarrif">
        <div class="tarrif-container">
    <div class="inner-box">
        <img src="images/car3.jpg" alt="">
        <h2>Muntinlupa</h2>
        <p>
           
        </p>
        <a href="index.php" class="btn-yellow">Login_Marikina</a>
    </div>
</div>


       

        <div class="tarrif-container">
            <div class="inner-box">
                <img src="images/vehicle1.png" alt="">
                <h2>Novaliches</h2>
                <p> </p>
               
                  
				<a href="indexnovaliches.php" class="btn-yellow">Login_Novaliches</a>
            </div>
        </div>
		
		<div class="tarrif-container">
            <div class="inner-box">
                <img src="images/image1.png" alt="">
                <h2 class="heading-yellow">Pila</h2>
                <p> </p>
              
                  <a href="indexpila.php" class="btn-yellow">Login_Pila</a>
            </div>
        </div>
		
		
    </div>
</div>


<!-- our tariff ended -->

<!-- fast booking -->
<div class="fast-booking">
     <h1 class="fast-hading">Motorcycle Driving Skills</h1>
    <div class="inner-fast">
        <div class="booking-content">
            <div class="icon-fast">
                <span><i class="fas fa-star"></i></span>
            </div>
            <div class="inner-fast-text">
             
              <h1>Managing Space</h1>
                <p>If another driver near you makes a mistake, you will need time to <br>
				react to the situation. The only way to be sure you will have enough <br>
				time to react is to leave plenty of space between you and the vehicles around you.</p>
                
            </div>
                
        </div>
        <div class="booking-content">
            <div class="icon-fast">
                <span><i class="fas fa-star"></i></span>
            </div>
            <div class="inner-fast-text">
                <h1>Managing Speed</h1>
               <p>What is a safe speed? How fast is too fast? There are no simple<br> 
			      answers to these questions because there is not a single speed<br>
				  that is safe at all times. In addition to the posted speed limit,<br>
				  you must consider road conditions, visibility conditions, and the <br>
				  flow of other traffic in choosing a safe speed to drive. Also, when <br>
				  you plan to change speeds, it will help you stay safe, by communicating 
				  your intentions to other drivers.</p>
                
            </div>
        </div>
        <div class="booking-content">
            <div class="icon-fast">
                <span><i class="fas fa-star"></i></span>
            </div>
            <div class="inner-fast-text">
                <h1>Turning, Merging, And Passing</h1>
                  <p>You must concentrate on many factors when making a turn. Speed <br>
				  is probably the most important factor. When turning, reduce to a<br>
				  speed that allows you to maintain control of your vehicle, allows<br>
				  you to stay in your lane during the turn and allows you to react <br>
				  to unexpected situations. Watch out for pedestrians and for other <br>
				  traffic in the street you are turning onto. Many streets have signs,<br>
				  signals or markings to guide you. Some signs show what lanes you<br>
				  can or must use for turns.</p>
               
            </div>
        </div>
        <div class="booking-content">
            <div class="icon-fast">
                <span><i class="fas fa-star"></i></span>
            </div>
            <div class="inner-fast-text">
                <h1>​Negotiating Intersections</h1>
               <p>The law does not give anyone the right-of-way at <br>
			   intersections; it only says who must yield. Even when <br>
			   one driver is legally required to  yield right-of-way,<br>
			   if they fail to do so, other drivers are still required <br>
			   to stop or yield as necessary to avoid a crash. Never insist<br>
			   on having the right-of-way; it may result in a crash.</p>
                
            </div>
        </div>
		
		<div class="booking-content">
            <div class="icon-fast">
                <span><i class="fas fa-star"></i></span>
            </div>
            <div class="inner-fast-text">
                <h1>​Negotiating Curves</h1>
               <p>The most important thing to understand about curves is<br>
			   you cannot beat the laws of physics. Vehicles are heavy, <br>
			   and they have lots of inertia. This means if you are driving<br>
			   too fast on a curve, your vehicle is going to keep moving<br>
			   straight ahead instead of around the curve, no matter how<br>
			   much you try to steer it or slow it down to keep it in your <br>
			   lane. You will either run off of the road (on a left-bending curve)<br>
			   or go into the other lane of traffic (on a right-bending curve).<br>
			   You do not have to be traveling very fast for this to happen. If<br>
			   the curve is sharp and the road is wet or icy the most reduction<br>
			   in speed is needed.</p>
                
                
            </div>
        </div>
		
		<div class="booking-content">
            <div class="icon-fast">
                <span><i class="fas fa-star"></i></span>
            </div>
            <div class="inner-fast-text">
                <h1>Negotiating Highways and Interchanges</h1>
                <p>Crashes on highways are the most severe because traffic is A<br>
				moving at a high speed. You are at greatest risk at highway <br>
				interchanges, when you are changing lanes, and when traffic<br>
				unexpectedly slows or stops, due to congestion.</p>
                
                
            </div>
        </div>
		
    </div>
</div>




<!-- fast booking end -->


<div class="testimonials" style="margin-bottom:-50px;">
    <h1 class="heading-test">Your Journey, Our Passion</h1>
    <div class="main-testimonials">
        <div class="inner-test">
		
           <div class="clients">
                <img src="images/car8.png" alt="">
				<h1>Safety Emphasis</h1>
                
            </div>
			   <p> Safety is a fundamental focus of motorcycle driving schools. Students are taught to prioritize safety and responsible riding practices to reduce the risk of accidents and injuries.</p>
          
        </div>
        <div class="inner-test">
           <div class="clients">
                <img src="images/yy1.png" alt="">
                <h1>Education and Training</h1>
            </div>
			  <p>Motorcycle driving schools offer a structured curriculum that covers topics such as traffic rules, road safety, motorcycle maintenance, and practical riding skills. This education is typically provided through a combination of classroom lessons and on-road training.</p>
           
        </div>
		<div class="inner-test">
           <div class="clients">
                <img src="images/car7.png" alt="">
                <h1>Instructor Guidance</h1>
            </div>
			  <p> Qualified and experienced instructors lead the training sessions, providing guidance, feedback, and expertise to help students become competent and confident motorcycle riders.</p>
           
        </div>
		<div class="inner-test">
           <div class="clients">
                <img src="images/images__8_-removebg-preview.png" alt="">
                <h1>Licensing and Certification</h1>
            </div>
			  <p>Many motorcycle driving schools assist students in obtaining the necessary licenses and certifications required to legally operate motorcycles on public roads. They often offer courses that align with the requirements of the local licensing authorities.</p>
           
        </div>
		
		<div class="inner-test">
           <div class="clients">
                <img src="images/gg1.png" alt="">
                <h1>Instructor Guidance</h1>
            </div>
			  <p> These schools aim to develop students' riding skills, including handling, braking, turning, and maneuvering in various traffic conditions and environments.</p>
           
        </div>
		<div class="inner-test">
           <div class="clients">
                <img src="images/images__3_-removebg-preview.png" alt="">
                <h1>Preparation for Real-World Riding</h1>
            </div>
			  <p>Motorcycle driving schools prepare students to handle real-world riding situations, including city traffic, highway riding, and challenging weather conditions.</p>
           
        </div>
		
		
		
	
    </div>
</div>



    <script src="script.js"></script>
</body>
</html>



<?php include "includes/footer.php"; ?>