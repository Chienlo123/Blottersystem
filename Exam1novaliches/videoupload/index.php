<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
	
	<script>
function validateForm() {
  var y = document.forms["form"]["name"].value; 
  if (y == null || y == "") {
    document.getElementById("errormsg").innerHTML="Name must be filled out.";
    return false;
  }
  var br = document.forms["form"]["branch"].value;
  if (br == "") {
    document.getElementById("errormsg").innerHTML="Please select your branch";
    return false;
  }
  if (m.length < 10) {
    document.getElementById("errormsg").innerHTML="Passwordr must be 12 digits long";
    return false;
  }
  var g = document.forms["form"]["gender"].value;
  if (g=="") {
    document.getElementById("errormsg").innerHTML="Please select your gender";
    return false;
  }
  var x = document.forms["form"]["username"].value;
  if (x.length == 0) {
    document.getElementById("errormsg").innerHTML="Please enter a valid username";
    return false;
  }
  if (x.length < 4) {
    document.getElementById("errormsg").innerHTML="Username must be at least 4 characters long";
    return false;
  }
  var m = document.forms["form"]["phno"].value;
  if (m.length != 10) {
    document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
    return false;
  }
  var a = document.forms["form"]["password"].value;
  if(a == null || a == ""){
    document.getElementById("errormsg").innerHTML="Password must be filled out";
    return false;
  }
  if(a.length<4 || a.length>15){
    document.getElementById("errormsg").innerHTML="Passwords must be 4 to 15 characters long.";
    return false;
  }
  var b = document.forms["form"]["cpassword"].value;
  if (a!=b){
    document.getElementById("errormsg").innerHTML="Passwords must match.";
    return false;
  }
}
</script>
</head>

<style>
div.back-button
{
margin-left:15px;
margin-top:10px;

}

    body {
  
  background-color: black; 
}

.back-button {
  position: absolute;
  text-indent: -15px;
  padding: 5px 0 5px 10px;
  width: 80px;
  /* modified by label length */
  overflow: auto;
  margin-bottom:100px;
}

.label {
  display: block;
  width: auto;
  line-height: 26px;
  font-size: 12px;
  font-weight: 900;
  font-family: helvetica, sans-serif;
  color: #fff;
  text-decoration: none;
  text-align: center;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
  background-color: #efefef;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIvPjxzdG9wIG9mZnNldD0iNjAlIiBzdG9wLWNvbG9yPSIjZWZlZmVmIi8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZTFkZmUyIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #ffffff), color-stop(60%, #efefef), color-stop(100%, #e1dfe2));
  background-image: -moz-linear-gradient(top, #ffffff 0%, #efefef 60%, #e1dfe2 100%);
  background-image: -webkit-linear-gradient(top, #ffffff 0%, #efefef 60%, #e1dfe2 100%);
  background-image: linear-gradient(to bottom, #ffffff 0%, #efefef 60%, #e1dfe2 100%);
  -moz-box-shadow: 0 1px 3px #cfcfcf;
  -webkit-box-shadow: 0 1px 3px #cfcfcf;
  box-shadow: 0 1px 3px #cfcfcf;
  border: 1px solid #bcbcbc;
  border-left: 0;
  color: #888;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);
  -moz-transition: color 0.1s 0;
  -o-transition: color 0.1s 0;
  -webkit-transition: color 0.1s 0;
  transition: all 0.5s ease;
}
.label:before {
  float: left;
  margin-top: 1px;
  margin-left: -4px;
  display: block;
  height: 12px;
  width: 15px;
  content: " ";
  -moz-transform: skew(-35deg, 0);
  -ms-transform: skew(-35deg, 0);
  -webkit-transform: skew(-35deg, 0);
  transform: skew(-35deg, 0);
  background-color: #efefef;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIwLjAiLz48c3RvcCBvZmZzZXQ9IjElIiBzdG9wLWNvbG9yPSIjZmZmZmZmIi8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZjBmMGYwIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(1%, #ffffff), color-stop(100%, #f0f0f0));
  background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #ffffff 1%, #f0f0f0 100%);
  background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #ffffff 1%, #f0f0f0 100%);
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, #ffffff 1%, #f0f0f0 100%);
  border-left: 1px solid #aaa;
}
.label:after {
  position: relative;
  margin-top: -13px;
  margin-bottom: 1px;
  margin-left: -4px;
  margin-right: auto;
  display: block;
  height: 12px;
  width: 15px;
  content: " ";
  -moz-transform: skew(35deg, 0);
  -ms-transform: skew(35deg, 0);
  -webkit-transform: skew(35deg, 0);
  transform: skew(35deg, 0);
  background-color: #efefef;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2YwZjBmMCIvPjxzdG9wIG9mZnNldD0iMTAlIiBzdG9wLWNvbG9yPSIjZWZlZmVmIi8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZTFkZmUyIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #f0f0f0), color-stop(10%, #efefef), color-stop(100%, #e1dfe2));
  background-image: -moz-linear-gradient(top, #f0f0f0 0%, #efefef 10%, #e1dfe2 100%);
  background-image: -webkit-linear-gradient(top, #f0f0f0 0%, #efefef 10%, #e1dfe2 100%);
  background-image: linear-gradient(to bottom, #f0f0f0 0%, #efefef 10%, #e1dfe2 100%);
  border-left: 1px solid #aaa;
  -moz-box-shadow: -2px 1px 2px rgba(100, 100, 100, 0.1);
  -webkit-box-shadow: -2px 1px 2px rgba(100, 100, 100, 0.1);
  box-shadow: -2px 1px 2px rgba(100, 100, 100, 0.1);
}

/* .label:hover {
  color: #0066cc;
} */

.label:active {
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2U2ZTZlNiIvPjxzdG9wIG9mZnNldD0iNjAlIiBzdG9wLWNvbG9yPSIjZWZlZmVmIi8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZTFkZmUyIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #e6e6e6), color-stop(60%, #efefef), color-stop(100%, #e1dfe2));
  background-image: -moz-linear-gradient(top, #e6e6e6 0%, #efefef 60%, #e1dfe2 100%);
  background-image: -webkit-linear-gradient(top, #e6e6e6 0%, #efefef 60%, #e1dfe2 100%);
  background-image: linear-gradient(to bottom, #e6e6e6 0%, #efefef 60%, #e1dfe2 100%);
  -moz-box-shadow: 0 0 1px #cfcfcf, inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(255, 255, 255, 0.7);
  -webkit-box-shadow: 0 0 1px #cfcfcf, inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(255, 255, 255, 0.7);
  box-shadow: 0 0 1px #cfcfcf, inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(255, 255, 255, 0.7);
}
.label:active:before {
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2U2ZTZlNiIgc3RvcC1vcGFjaXR5PSIwLjAiLz48c3RvcCBvZmZzZXQ9IjElIiBzdG9wLWNvbG9yPSIjZTZlNmU2Ii8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZjBmMGYwIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, rgba(230, 230, 230, 0)), color-stop(1%, #e6e6e6), color-stop(100%, #f0f0f0));
  background-image: -moz-linear-gradient(top, rgba(230, 230, 230, 0) 0%, #e6e6e6 1%, #f0f0f0 100%);
  background-image: -webkit-linear-gradient(top, rgba(230, 230, 230, 0) 0%, #e6e6e6 1%, #f0f0f0 100%);
  background-image: linear-gradient(to bottom, rgba(230, 230, 230, 0) 0%, #e6e6e6 1%, #f0f0f0 100%);
}
.label:active:after {
  -moz-box-shadow: -1px 0 0 rgba(255, 255, 255, 0.7);
  -webkit-box-shadow: -1px 0 0 rgba(255, 255, 255, 0.7);
  box-shadow: -1px 0 0 rgba(255, 255, 255, 0.7);
}

 </style>
<body>
<div class="back-button">
	<a href="../../Exam1novaliches/index.php" class="label">Back</a>
</div>

	
	<div class="col-md-3"></div>
	<div class="col-md-6 well" style="margin-top:50px;">
		<h3 class="text-primary">Exam Motorcycle school</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add Video</button>
		<br /><br />
		<hr style="border-top:3px solid #ccc;"/>
		<?php
			require 'conn.php';
			
			$query = mysqli_query($conn, "SELECT * FROM `videonovaliches` ORDER BY `video_id` ASC") or die(mysqli_error());
			while($fetch = mysqli_fetch_array($query)){
		?>
		<div class="col-md-12">
			<div class="col-md-4" style="word-wrap:break-word;">
				<br />
				<h4>Video Name</h4>
				<h5 class="text-primary"><?php echo $fetch['videosname']?></h5>
			</div>
			<div class="col-md-8">
				<video width="100%" height="240" controls>
					<source src="<?php echo $fetch['location']?>">
				</video>
			</div>
			<br style="clear:both;"/>
			<hr style="border-top:1px groovy #000;"/>
		</div>
		<?php
			}
		?>
	</div>
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog">
			<form action="save_video.php" method="POST" enctype="multipart/form-data">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="form-group">
							<center><h4>Upload Video</h4></center>
								<label>Video File</label>
								<input type="file" name="video" class="form-control-file"/>
								<br><br>
								
								<label>Name</label>
								<input type="text" required="" name="videosname" class="form-control-file"/>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>