<?php
include('store_session.php');
include_once('store_head.php');
//more features to implement

?>
<!DOCTYPE html>
<html>
<head>
	<title>Stores - Dashboard</title>
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
                              <h5><a href="#">flipkart</a></h5>
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
                        <input type="submit" name="user-request" id="user-request" tabindex="4" class="form-control btn btn-info" value="User Request">
                      </div>
                          </form>
                      </div>
                      <ul class="inbox-nav inbox-divider nav nav-pills nav-stacked labels-info inbox-divider">
                      <!--<li> <h4>Available Electives</h4> </li>-->

                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>Stores - Dashboard</h3>
                          <form action="#" class="pull-right position">
                              <div class="input-append">
                                  <a href=""><button class="btn sr-btn" type="button"><i class="fa fa-external-link"></i> Logout</button></a>
                              </div>
                          </form>
                      </div>
<?php

if(isset($_POST['user-request']))
{
  include_once('user_request.php');
}
else if(isset($_POST['home']))
{
  include_once('home.php');
}
else if(isset($_POST['reject']))
{
  include_once('reject.php');
}
else if(isset($_POST['accept']))
{
  include_once('accept.php');
}
else
{
  include_once('home.php'); 
}

?>
</div>
</body>
</html>