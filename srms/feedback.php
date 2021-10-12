<?php
	session_start();
	//error_reporting(0);
	include('includes/config.php');
?>

<!DOCTYPE html>
<html>
	<head>
        <title>SRMS | Feedback Form</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/flat/blue.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
	<body>
		<div class="main-wrapper">
			<div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h5>Fill the Feedback Form</h5>
                        </div>
                    </div>
                    <div class="panel-body">
						<form action="index.php" class="form-horizontal" method="post">
							<div class="form-group">
								<label for="default" class="col-sm-2 control-label">Full Name</label>
								<div class="col-sm-10">
									<input type="text" name="fullname" class="form-control" id="fullname" required="required" autocomplete="off">
								</div>
							</div>

							<div class="form-group">
								<label for="default" class="col-sm-2 control-label">Email id</label>
								<div class="col-sm-10">
									<input type="email" name="emailid" class="form-control" id="emailid" required="required" autocomplete="off">
								</div>
							</div>

                        	<div class="form-group">
                            	<label for="default" class="col-sm-2 control-label">Rating</label>
                            	<div class="col-sm-10">
									<select name="class" class="form-control" id="default" required="required">
										<option value="">Select Rating</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
                            	</div>
                        	</div>
						
							<div class="form-group">
								<label for="default" class="col-sm-2 control-label">Comments</label>
								<div class="col-sm-10">
									<input type="text" name="comments" class="form-control" id="comments" required="required" autocomplete="off">
								</div>
                        	</div>
                                                  
                        	<div class="form-group">
                            	<div class="col-sm-offset-2 col-sm-10">
                                	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        		</div>
                        	</div>
                    	</form>

                    </div>
                </div>
            </div>
                                    <!-- /.col-md-12 -->
        </div>
		</div>
		
         <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>
</html>