<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Login</h4>
			</div>
			<div class="modal-body">
				<form name="newUser" action="<?php echo SITE_DIR . '/bin/login-process.php'; ?>" method="post">
		
					<div class="input-group form-group">
					  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
					  <input type="text" name="username" class="form-control" placeholder="Username">
					</div>					
		
					<div class="input-group form-group">
					  <span class="input-group-addon"><i class="fa fa-key"></i></span>
					  <input type="password" name="password" class="form-control" placeholder="Password">
					</div>					
		
		    		<input name="new" id="newfeedform" class="btn btn-lg btn-success btn-block" type="submit" value="Login">

					<div class="checkbox pull-right">
				      <label>
				      	<input type="checkbox" name="remember_me" value="1" />	
		                  Remember Me?
		              </label>
					</div>

				</form>
			</div>
			<div class="modal-footer">
				New to the website?
				<a href="#" data-toggle="modal" data-target="#RegisterModal" data-dismiss="modal" class="btn btn-primary">Register</a>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
