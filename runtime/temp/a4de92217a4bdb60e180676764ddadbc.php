<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"E:\www\ming\public/../application/admin\view\login\login.html";i:1527502796;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>明大集团</title>

    <!-- Bootstrap core CSS -->
    <link href="/static/ad/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/static/ad/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="/static/ad/css/style.css" rel="stylesheet">
    <link href="/static/ad/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="" method="post">
		        <h2 class="form-login-heading">后台登陆</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="" name="username" autofocus>
		            <br>
		            <input type="password" class="form-control" placeholder="" name="password">
		            <label class="checkbox">
                     <input type="text"  width="100" height="100"  name="code">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> 忘记密码？</a>
		
		                </span>
                        
                        <div><img height="50" width="200" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src=this.src+'?'+Math.random()" /></div>
		            </label>
		            <button class="btn btn-theme btn-block" href="" type="submit"><i class="fa fa-lock"></i> 登陆</button>
		            <hr>
		            
		           
		            <div class="registration">
		               <br/>
		                <a class="" href="#">
		                    
		                </a>
		            </div>
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <div><img src="<?php echo captcha_src(); ?>" alt="captcha" /></div>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                        
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/static/ad/js/jquery.js"></script>
    <script src="/static/ad/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="/static/ad/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("/static/ad/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
