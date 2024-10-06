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

</style>
<div id="wrapper">
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>

    <!-- Navigation -->
    <?php include"includes/admin_navigationadmin.php"; ?>

    <div id="page-wrapper" style="background-color:lightblue;">

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
                       $query = "SELECT * FROM usersmarikina WHERE user_role='Enroll' || user_role = 'Not Enroll'";
                        $get_admin1 = mysqli_query($connection,$query);
                        $total_admin1 = mysqli_num_rows($get_admin1);
						
						$query = "SELECT * FROM userslaspinas WHERE user_role='Enroll' || user_role = 'Not Enroll'";
                        $get_admin2 = mysqli_query($connection,$query);
                        $total_admin2 = mysqli_num_rows($get_admin2);
						
						$query = "SELECT * FROM usersnovaliches WHERE user_role='Enroll' || user_role = 'Not Enroll'";
                        $get_admin3 = mysqli_query($connection,$query);
                        $total_admin3 = mysqli_num_rows($get_admin3);
						
						$query = "SELECT * FROM userspila WHERE user_role='Enroll' || user_role = 'Not Enroll'";
                        $get_admin4 = mysqli_query($connection,$query);
                        $total_admin4 = mysqli_num_rows($get_admin4);

                      
                        $query = "SELECT * FROM contactadmin";
                        $get_admin5 = mysqli_query($connection,$query);
                        $total_admin5 = mysqli_num_rows($get_admin5);
            ?>

            <!-- Bootstrap Grid System -->
            <div class="row">
                <!-- Total Users Box -->
               
				
				
				
						<div class="col-md-3">
					<div class="card bg-warning text-white info-box-3d">
						<div class="card-body">
							<i class="fas fa-user-check fa-3x"></i>
							<h5 class="card-title">All Users Muntinlupa:</h5>
							<p class="card-text"><?php echo $total_admin1; ?></p>
						</div>
						<a href="../admin/usersadmin.php" class="card-link text-white">View Details</a>
					</div>
				</div>

                <!-- Total Req accepted Box -->
                <div class="col-md-3">
                    <div class="card bg-info text-white info-box-3d">
                        <div class="card-body">
                            <i class="fas fa-user-check fa-3x"></i>
                            <h5 class="card-title">All Users Laspinas:</h5>
                            <p class="card-text"><?php echo $total_admin2; ?></p>
                        </div>
                        <a href="../admin/userslaspinasadmin.php" class="card-link text-white">View Details</a>
                    </div>
                </div>

                <!-- Total Admin Box -->
                <div class="col-md-3">
                    <div class="card bg-success text-white info-box-3d">
                        <div class="card-body">
                            <i class="fas fa-users-cog fa-3x"></i>
                            <h5 class="card-title">All Users Novaliches:</h5>
                            <p class="card-text"><?php echo $total_admin3; ?></p>
                        </div>
                        <a href="../admin/usersnovalichesadmin.php" class="card-link text-white">View Details</a>
                    </div>
                </div>

                <!-- Total Contact Box -->
                <div class="col-md-3">
                    <div class="card bg-danger text-white info-box-3d">
                        <div class="card-body">
                            <i class="fas fa-address-card fa-3x"></i>
                            <h5 class="card-title">All Users pila:</h5>
                            <p class="card-text"><?php echo $total_admin4; ?></p>
                        </div>
                        <a href="../admin/userspilaadmin.php" class="card-link text-white">View Details</a>
                    </div>
                </div>
            </div>
			
			<br><br>
            <!-- /.row -->
			
			<div class="col-md-3">
    <div class="card bg-danger text-white info-box-3d" style="margin-left:-10px; margin-right:10px;">
        <div class="card-body">
            <i class="fas fa-user-check fa-3x"></i>
            <h5 class="card-title">Contact:</h5>
            <p class="card-text"><?php echo $total_admin5; ?></p>
        </div>
        <a href="../admin/queryadmin.php" class="card-link text-white">View Details</a>
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
						<div class="card-header" > Users Muntinlupa</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="pie_chart1"></canvas>
							</div>
						</div>
					</div>
				</div>
				
						<div class="col-md-6"  >
					<div class="card mt-6">
						<div class="card-header">Users Laspinas</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas  id="pie_chart2"></canvas>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-6"  >
					<div class="card mt-6">
						<div class="card-header">Users Novaliches</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas  id="pie_chart3"></canvas>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-md-6"  >
					<div class="card mt-6">
						<div class="card-header">Users Pila</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas  id="pie_chart4"></canvas>
							</div>
						</div>
					</div>
				</div>
			
			
				
				

				<div class="col-md-6" >
					<div class="card mt-4 mb-6">
						<div class="card-header" style="margin-left:150px;">Questions 1</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart1" ></canvas>
							</div>
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
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    <?php include "includes/admin_footer.php"; ?>
</div>

<!-- Additional CSS in the header -->

<script>
	
$(document).ready(function(){

	

	makechart();

	function makechart()
	{
		$.ajax({
			url:"bargraphadmin/data1.php",
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
							label:'Marikina',
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
			url:"bargraphadmin/data2.php",
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
							label:'Laspinas',
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
			url:"bargraphadmin/data3.php",
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
							label:'Novaliches',
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

				var group_chart1 = $('#pie_chart3');

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
			url:"bargraphadmin/data4.php",
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
							label:'Pila',
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

				var group_chart1 = $('#pie_chart4');

				var graph1 = new Chart(group_chart1, {
					type:"bar",
					data:chart_data
				});

				

				
			}
		})
	}

});
</script>

