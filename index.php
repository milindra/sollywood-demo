<!DOCTYPE html>
<html>
<head>
	<title>Openelective management system</title>
<?php
	include_once('head.php');
  include_once('dbconnect.php');
?>
</head>
<body>
<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#home" class="smoothScroll">Home</a></li>
    		    <li> <a href="#about" class="smoothScroll"> About</a></li>
			  </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="user/">User Section</a></li>
          <li><a href="stores/"">Stores Section</a></li>
        </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>

<div class="jumbotron" style="background: transparent; color: yellow;">
  <br>
  <center>
    <h1>Sollywood.in stores</h1>
    <div class="container">
    <div class="row little-padding">          
        
        <div class="inbox-body">
          <table class="table ">
              <tbody>
              <tr class="unread">
                      <td class="view-message  dont-show">Name</td>
                  </tr>
                  <tr class="unread">
                      <td class="view-message dont-show">
                        <form action="user/" method="post">
                          <div>
                            <input type="submit" name="user-section" id="user-section" tabindex="4" class="btn " value="User section">
                          </div>
                        </form>
                      </td>
                  </tr>
                  <tr class="unread">
                      <td class="view-message dont-show">
                        <form action="stores/" method="post">
                          <div>
                            <input type="submit" name="stores-section" id="stores-section" tabindex="4" class="btn " value="Stores section">
                          </div>
                        </form>
                      </td>
                  </tr>
                  
              </tbody>
          </table> 
      </div>
        
    </div>
</div>
</center>
</div>
</body>
</html>
