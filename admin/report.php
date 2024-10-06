<?php include "includes/admin_header.php"; ?>
<style>
    .info-box-3d .card {
        transform: perspective(1200px) rotateY(10deg);
        transition: transform 0.5s;
    }

    .info-box-3d .card:hover {
        transform: perspective(1200px) rotateY(0);
    }

    .info-box-3d .card-body {
        padding: 20px;
        text-align: center;
    }

    .info-box-3d .card-title {
        font-size: 1.25rem;
        margin-top: 10px;
    }

    .info-box-3d .card-text {
        font-size: 1.5rem;
        margin-top: 10px;
        font-weight: bold;
    }

    .info-box-3d .card-link {
        display: block;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        background: rgba(255, 255, 255, 0.2);
        transition: background 0.3s;
    }

    .info-box-3d .card-link:hover {
        background: rgba(255, 255, 255, 0.4);
    }
	
	.info-box-3d .card {
    transform: perspective(1200px) rotateY(10deg);
    transition: transform 0.5s;
}

.info-box-3d .card:hover {
    transform: perspective(1200px) rotateY(0);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
}
.canvas{
      -webkit-tap-highlight-color: rgba(0,0,0,0);
    --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
    --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Free";
    --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Free";
    -webkit-font-smoothing: antialiased;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    aspect-ratio: auto 679 / 339;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    vertical-align: baseline;
    animation: chartjs-render-animation 1ms;
    display: block;
    height: 377px;
    width: 755px;
	margin-left:100px;
}
</style>

<div id="wrapper">
	   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>

    <!-- Navigation -->
    <?php include "includes/Notifications/admin_navigation.php"; ?>

    <div id="page-wrapper" style="background-color:lightblue">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Dashboard
                        <small><?php echo ucfirst($_SESSION['s_username']); ?></small>
                    </h1>
                </div>
            </div>
            <?php
                $curr_date = date('Y-m-d');
                $query = "SELECT *  FROM  posts WHERE confirm='Complete'";
                $Learners_count_total = mysqli_query($connection, $query);
                $total_Learners_provided = mysqli_num_rows($Learners_count_total);

                $query = "SELECT * FROM usersmarikina WHERE user_role='admin'";
                $get_admin = mysqli_query($connection, $query);
                $total_admin = mysqli_num_rows($get_admin);

                $query = "SELECT * FROM usersmarikina WHERE user_role='Enroll'  ";
                $get_users = mysqli_query($connection, $query);
                $total_users = mysqli_num_rows($get_users);

                $query = "SELECT * FROM contact ";
                $get_contact = mysqli_query($connection, $query);
                $total_contact = mysqli_num_rows($get_contact);

                $query = "SELECT * FROM categories ";
                $get_categories = mysqli_query($connection, $query);
                $total_categories = mysqli_num_rows($get_categories);
            ?>

            <!-- Bootstrap Grid System -->
            <div class="row">
                <!-- Total Users Box -->
               
				
				
				
						<div class="col-md-3">
					<div class="card bg-warning text-white info-box-3d">
						<div class="card-body">
							<i class="fas fa-user-check fa-3x"></i>
							<h5 class="card-title">Total Users</h5>
							<p class="card-text"><?php echo $total_users; ?></p>
						</div>
						<a href="../admin/usersaccept.php" class="card-link text-white">View Details</a>
					</div>
				</div>

                <!-- Total Req accepted Box -->
                <div class="col-md-3">
                    <div class="card bg-info text-white info-box-3d">
                        <div class="card-body">
                            <i class="fas fa-user-check fa-3x"></i>
                            <h5 class="card-title">Total Req accepted</h5>
                            <p class="card-text"><?php echo $total_Learners_provided; ?></p>
                        </div>
                        <a href="../admin/Learnersaccept.php" class="card-link text-white">View Details</a>
                    </div>
                </div>

                <!-- Total Admin Box -->
                <div class="col-md-3">
                    <div class="card bg-success text-white info-box-3d">
                        <div class="card-body">
                            <i class="fas fa-users-cog fa-3x"></i>
                            <h5 class="card-title">Total Admin</h5>
                            <p class="card-text"><?php echo $total_admin; ?></p>
                        </div>
                        <a href="../admin/report.php" class="card-link text-white">View Details</a>
                    </div>
                </div>

                <!-- Total Contact Box -->
                <div class="col-md-3">
                    <div class="card bg-danger text-white info-box-3d">
                        <div class="card-body">
                            <i class="fas fa-address-card fa-3x"></i>
                            <h5 class="card-title">Contact</h5>
                            <p class="card-text"><?php echo $total_contact; ?></p>
                        </div>
                        <a href="../admin/query.php" class="card-link text-white">View Details</a>
                    </div>
                </div>
            </div>
			
			<br><br>
            <!-- /.row -->
			
			<div class="col-md-3">
    <div class="card bg-danger text-white info-box-3d" style="margin-left:-15px; margin-right:10px;">
        <div class="card-body">
            <i class="fas fa-user-check fa-3x"></i>
            <h5 class="card-title">Total Categories</h5>
            <p class="card-text"><?php echo $total_categories; ?></p>
        </div>
        <a href="../admin/categories.php" class="card-link text-white">View Details</a>
    </div>
</div>


            </div>
        </div>
		
		<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                     <h1  class="page-header">
                        Info Graphics
						<small>Feedback</small>
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                    <div style="padding:10px;">
                                  
                                    </div>                            
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                
        
                                 <div class="container-fluid">
			<div class="row">
				
				
				
				<div class="col-md-6" >
					<div class="card mt-6">
						<div class="card-header" > Students</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="pie_chart1"></canvas>
							</div>
						</div>
					</div>
				</div>
				
				
				
						<div class="col-md-6"  >
					<div class="card mt-6">
						<div class="card-header">Requirements </div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas  id="pie_chart2"></canvas>
							</div>
						</div>
					</div>
				</div>
					
				
				
								<div class="col-md-6" >
					<div class="card mt-4 mb-6">
						<div class="card-header">Questions 1</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart1" ></canvas>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6" >
					<div class="card mt-4 mb-6">
						<div class="card-header" style="margin-left:150px;">Questions 2</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart2" ></canvas>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-6" >
					<div class="card mt-4 mb-6">
						<div class="card-header" style="margin-left:150px;">Questions 3</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart3" ></canvas>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-6" >
					<div class="card mt-4 mb-6">
						<div class="card-header" style="margin-left:150px;">Questions 4</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart4" ></canvas>
							</div
						</div>
					</div>
				</div>


				
				
				
				
				
				
			</div>
		</div>
                                    


                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            


                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        <!-- /.container-fluid -->
    </div>
	
	  <!-- header logo: style can be found in header.less -->
      

            <!-- Right side column. Contains the navbar and content of the page -->
            
        </div><!-- ./wrapper -->
     
    <!-- /#page-wrapper -->
    <?php include "includes/admin_footer.php"; ?>

<!-- Additional CSS in the header -->

<script>
	
$(document).ready(function(){

	

	makechart();

	function makechart()
	{
		$.ajax({
			url:"bargraph/data1.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var user_role = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					user_role.push(data[count].user_role);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:user_role,
					datasets:[
						{
							label:'Students',
							backgroundColor:color,
							color:'#fff',
							data:total
						}
					]
				};

				var options = {
					responsive:true,
					scales:{
						yAxes:[{
							ticks:{
								min:0
							}
						}]
					}
				};

				var group_chart1 = $('#pie_chart1');

				var graph1 = new Chart(group_chart1, {
					type:"pie",
					data:chart_data
				});

				

				
			}
		})
	}

});
</script>



<script>
	
$(document).ready(function(){

	

	makechart();

	function makechart()
	{
		$.ajax({
			url:"bargraph/data2.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var confirm = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					confirm.push(data[count].confirm);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:confirm,
					datasets:[
						{
							label:'Requirements',
							backgroundColor:color,
							color:'#fff',
							data:total
						}
					]
				};

				var options = {
					responsive:true,
					scales:{
						yAxes:[{
							ticks:{
								min:0
							}
						}]
					}
				};

				var group_chart1 = $('#pie_chart2');

				var graph1 = new Chart(group_chart1, {
					type:"pie",
					data:chart_data
				});

				

				
			}
		})
	}

});
</script>


<script>
	
$(document).ready(function(){

	

	makechart();

	function makechart()
	{
		$.ajax({
			url:"bargraph/data3.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var choices1 = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					choices1.push(data[count].choices1);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:choices1,
					datasets:[
						{
							label:'Feedback',
							backgroundColor:color,
							color:'#fff',
							data:total
						}
					]
				};

				var options = {
					responsive:true,
					scales:{
						yAxes:[{
							ticks:{
								min:0
							}
						}]
					}
				};

				var group_chart1 = $('#bar_chart1');

				var graph1 = new Chart(group_chart1, {
					type:"bar",
					data:chart_data
				});

				

				
			}
		})
	}

});
</script>


<script>
	
$(document).ready(function(){

	

	makechart();

	function makechart()
	{
		$.ajax({
			url:"bargraph/data4.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var choices2 = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					choices2.push(data[count].choices2);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:choices2,
					datasets:[
						{
							label:'Feedback',
							backgroundColor:color,
							color:'#fff',
							data:total
						}
					]
				};

				var options = {
					responsive:true,
					scales:{
						yAxes:[{
							ticks:{
								min:0
							}
						}]
					}
				};

				var group_chart1 = $('#bar_chart2');

				var graph1 = new Chart(group_chart1, {
					type:"bar",
					data:chart_data
				});

				

				
			}
		})
	}

});
</script>
<script>
	
$(document).ready(function(){

	

	makechart();

	function makechart()
	{
		$.ajax({
			url:"bargraph/data5.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var choices3 = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					choices3.push(data[count].choices3);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:choices3,
					datasets:[
						{
							label:'Feedback',
							backgroundColor:color,
							color:'#fff',
							data:total
						}
					]
				};

				var options = {
					responsive:true,
					scales:{
						yAxes:[{
							ticks:{
								min:0
							}
						}]
					}
				};

				var group_chart1 = $('#bar_chart3');

				var graph1 = new Chart(group_chart1, {
					type:"bar",
					data:chart_data
				});

				

				
			}
		})
	}

});
</script>

<script>
	
$(document).ready(function(){

	

	makechart();

	function makechart()
	{
		$.ajax({
			url:"bargraph/data6.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var choices4 = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					choices4.push(data[count].choices4);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:choices4,
					datasets:[
						{
							label:'Feedback',
							backgroundColor:color,
							color:'#fff',
							data:total
						}
					]
				};

				var options = {
					responsive:true,
					scales:{
						yAxes:[{
							ticks:{
								min:0
							}
						}]
					}
				};

				var group_chart1 = $('#bar_chart4');

				var graph1 = new Chart(group_chart1, {
					type:"bar",
					data:chart_data
				});

				

				
			}
		})
	}

});
</script>