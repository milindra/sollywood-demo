<?php
include_once('user_head.php');
include('user_session.php');
//more features to implement

?>
<!DOCTYPE html>
<html>
<head>
	<title>User - Dashboard</title>
	
</head>
<body>
<div class="container">
<div class="mail-box">
                  <aside class="sm-side">
                      <div class="user-head">
                          <a class="inbox-avatar" href="javascript:;">
                              <img  width="64" height="64" src="../books.jpg">
                          </a>
                          <div class="user-name">
                              <h5><a href="#">Milindra</a></h5>
                              <span><a href="#">Welcome</a></span>
                          </div>
                          <a class="mail-dropdown pull-right" href="javascript:;">
                              <i class="fa fa-chevron-down"></i>
                          </a>
                      </div>
                      <div class="inbox-body">
                          <form action="" method="post">
                            <div>
                        <input type="submit" name="home" id="home" tabindex="4" class="form-control btn btn-info" value="Home">
                      </div>
                          </form>
                      </div>
                      <div class="inbox-body">
                          <form action="" method="post">
                            <div>
                        <input type="submit" name="stores" id="stores" tabindex="4" class="form-control btn btn-info" value="stores">
                      </div>
                          </form>
                      </div>
                      <ul class="inbox-nav inbox-divider nav nav-pills nav-stacked labels-info inbox-divider">
                      <!--<li> <h4>Available Electives</h4> </li>-->

                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>User - Dashboard</h3>
                          <form action="#" class="pull-right position">
                              <div class="input-append">
                                  <a href=""><button class="btn sr-btn" type="button"><i class="fa fa-external-link"></i> Logout</button></a>
                              </div>
                          </form>
                      </div>
<?php

if(isset($_POST['stores']))
{
  include_once('stores.php');
}
else if(isset($_POST['home']))
{
  include_once('home.php');
}
else if(isset($_POST['flipkart-upload-recipt']))
{
  include_once('recipt.php');
}
else if(isset($_POST['amazon-upload-recipt']))
{
  include_once('recipt.php');
}
else if(isset($_POST['ebay-upload-recipt']))
{
  include_once('recipt.php');
}
else if(isset($_POST['infibeam-upload-recipt']))
{
  include_once('recipt.php');
}
else if(isset($_POST['recipt-uploaded']))
{
  include_once('upload.php');
}
else
{
  include_once('home.php'); 
}

?>
</div>
</body>
</html>