<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Project Worlds || TEST YOUR SKILL </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
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
 
 
<body >

<div class="back-button">
	<a href="../Learners/index.php" class="label">Back</a>
</div>

<div class="header">
<div class="row">
<div class="col-lg-6" style="margin-left:100px; margin-top:5px;">
<span class="logo">Exam Motorcycle school</span></div>



<div class="col-md-7 col-md-offset-5" style="margin-top:-55px;">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a>
</div>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

</div><!--container end-->

<!--Footer start-->
<center><img class="img-responsive" src="image/pic3.jpeg" alt=""></center>









</body>
</html>
