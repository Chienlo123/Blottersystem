
<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Motorcycle Driving School</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <style>

/* Google Font Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
.sidebar{
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 78px;
  background: #11101D;
  padding: 6px 14px;
  z-index: 99;
  transition: all 0.5s ease;
}
.sidebar.open{
  width: 225px;
}
.sidebar .logo-details{
  height: 60px;
  display: flex;
  align-items: center;
  position: relative;
}
.sidebar .logo-details .icon{
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar .logo-details .logo_name{
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details .icon,
.sidebar.open .logo-details .logo_name{
  opacity: 1;
}
.sidebar .logo-details #btn{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  font-size: 22px;
  transition: all 0.4s ease;
  font-size: 23px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details #btn{
  text-align: right;
}
.sidebar i{
  color: #fff;
  height: 60px;
  min-width: 50px;
  font-size: 28px;
  text-align: center;
  line-height: 60px;
}
.sidebar .nav-list{
  margin-top: 20px;
  height: 100%;
  
}
.sidebar li{
  position: relative;
  margin: 8px 0;
  list-style: none;
}
.sidebar li .tooltip{
  position: absolute;
  top: -20px;
  left: calc(100% + 15px);
  z-index: 3;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 15px;
  font-weight: 400;
  opacity: 0;
  white-space: nowrap;
  pointer-events: none;
  transition: 0s;
}
.sidebar li:hover .tooltip{
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
  top: 50%;
  transform: translateY(-50%);
}
.sidebar.open li .tooltip{
  display: none;
}
.sidebar input{
  font-size: 15px;
  color: #FFF;
  font-weight: 400;
  outline: none;
  height: 50px;
  width: 100%;
  width: 50px;
  border: none;
  border-radius: 12px;
  transition: all 0.5s ease;
  background: #1d1b31;
}
.sidebar.open input{
  padding: 0 20px 0 50px;
  width: 100%;
}
.sidebar .bx-search{
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  font-size: 22px;
  background: #1d1b31;
  color: #FFF;
}
.sidebar.open .bx-search:hover{
  background: #1d1b31;
  color: #FFF;
}
.sidebar .bx-search:hover{
  background: #FFF;
  color: #11101d;
}
.sidebar li a{
  display: flex;
  height: 100%;
  width: 100%;
  border-radius: 12px;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  background: #11101D;
}
.sidebar li a:hover{
  background: #FFF;
}
.sidebar li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: 0.4s;
  
}
.sidebar.open li a .links_name{
  opacity: 1;
  pointer-events: auto;
}
.sidebar li a:hover .links_name,
.sidebar li a:hover i{
  transition: all 0.5s ease;
  color: #11101D;
}
.sidebar li i{
  height: 50px;
  line-height: 50px;
  font-size: 18px;
  border-radius: 12px;
}
.sidebar li.profile{
  position: fixed;
  height: 60px;
  width: 78px;
  left: 0;
  bottom: -8px;
  padding: 10px 14px;
  background: #1d1b31;
  transition: all 0.5s ease;
  overflow: hidden;
}
.sidebar.open li.profile{
  width: 250px;
}
.sidebar li .profile-details{
  display: flex;
  align-items: center;
  flex-wrap: nowrap;
}
.sidebar li img{
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 6px;
  margin-right: 10px;
}
.sidebar li.profile .name,
.sidebar li.profile .job{
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  white-space: nowrap;
}
.sidebar li.profile .job{
  font-size: 12px;
}
.sidebar .profile #log_out{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  background: #1d1b31;
  width: 100%;
  height: 60px;
  line-height: 60px;
  border-radius: 0px;
  transition: all 0.5s ease;
}
.sidebar.open .profile #log_out{
  width: 50px;
  background: none;
}

.sidebar.open ~ .home-section{
  left: 250px;
  width: calc(100% - 250px);
}
.home-section .text{
  display: inline-block;
  color: #11101d;
  font-size: 25px;
  font-weight: 500;
  margin: 18px
}
@media (max-width: 420px) {
  .sidebar li .tooltip{
    display: none;
  }
}
/* Add this CSS to your existing styles */
.dropdown-menu {
    display: none;
    position: absolute;
    background-color:black;
    list-style: none;
   
	
}

.dropdown-menu li {
    padding: 10px;
    text-align: center;
	
	
}

li:hover .dropdown-menu {
    display: block;
	 
	
}
/* Style for the dropdown items */
.dropdown .dropdown-menu li {
  text-align: center;
  padding: 10px;
  border-bottom: 1px solid #333; /* Add a separator between dropdown items */
  background: #dcdcdc; /* Apply a light blue gradient background effect */
}

/* Hover effect for dropdown items */
.dropdown .dropdown-menu li:hover {
  background: #dcdcdc; /* Change the background color on hover for a light blue gradient effect */
}

/* Style for the dropdown links */
.dropdown .dropdown-menu li a {
  text-decoration: none;
  color: #fff; /* Text color in the dropdown */
  font-size: 14px;
  display: block;
  padding: 8px 20px;
  transition: color 0.3s ease;
}

/* Hover effect for the dropdown links */
.dropdown .dropdown-menu li a:hover {
  color: #FFD700; /* Change the text color on hover */
}

/* Show the dropdown menu when hovering over the parent item */
li:hover .dropdown-menu {
  display: block;
  top: 100%; /* Position the dropdown below the parent item */
}


</style>
<body style="background-color:#dcdcdc">

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  
<a class="navbar-brand" href="indexlaspinas.php"  style="margin-left:220px; font-size:20px;"> System Admin Laspinas</a>
	   <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
            </div>
            <!-- Top Menu Items -->
             <ul class="nav navbar-right top-nav">
    
 
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i> <?php echo ucfirst($_SESSION['s_username']); ?> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu" >
            <li>
                <a href="../profilelaspinas.php"><i class="fa fa-fw fa-user"></i> Profile</a>
				  <a href="../includes/logoutlaspinas.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
           
        </ul>
    </li>
</ul>


            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
          <div class="sidebar">
      <div class="logo-details" >
        <i class="bx bxl-c-plus-plus icon"></i>
        <div class="logo_name">EZ AUTO</div>
		
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav-list">
       
				
					
		
	


				
		     	 <li>
          <a href="../profilelaspinas.php">
            <i  class="fa fa-fw fa-user"></i>
            <span class="links_name">Profile</span>
          </a>
          <span class="tooltip"> Profile</span>
        </li>
		                         
					
		  <li>
          <a href="../Exam1laspinas/indexuser.php">
           <i  class="fa fa-fw fa-book"></i>
            <span class="links_name">Exam</span>
          </a>
          <span class="tooltip">Exam</span>
        </li>
          
		  
		  	 <li>
          <a href="../chatlaspinas/index.php">
            <i  class="bx bx-chat"></i>
            <span class="links_name">ChatBox</span>
          </a>
          <span class="tooltip"> ChatBox</span>
        </li>
		  
		   <li>
          <a href="../feedbacklaspinas/index.php">
            <i   class="fa fa-smile-o"></i>
            <span class="links_name">feedback</span>
          </a>
          <span class="tooltip"> feedback</span>
        </li>
		 
        
      </ul>
    </div>
            <!-- /.navbar-collapse -->
			
			<script ">
	
	let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});

searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}
</script>
        </nav>
		</body>
		</html>