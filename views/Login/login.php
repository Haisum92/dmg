<?php $this->load->view('Login/header');?>

		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="login-header text-center custom-class">
			<!-- <img src="<?php echo $this->config->item('base_url_assets');?>img/logo-login.png" class="logo" alt="Logo">  -->
			<h1>User Login</h1>
		</div>
		<div class="login-wrapper">
			<!-- <div class="alert alert-warning alert-bold-border fade in alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  <strong>Warning!</strong> Better check yourself, you're <a href="#fakelink" class="alert-link">not looking too good</a>.
			</div> -->
			<?php if ($this->session->flashdata('redirectError') != ""){?>
                <div class="custom-class text-center">
	                <div class="alert alert-danger">
	                    <?php echo $this->session->flashdata('redirectError');?>
	                </div>
	            </div>
            <?php }?>
            
            <?php if ($this->session->flashdata('failure') != ""){?>
                <div class="custom-class text-center">
                	<div class="alert alert-danger">
                    	<?php echo $this->session->flashdata('failure');?>
                	</div>
                </div>
            <?php }?>
            <?php if ($this->session->flashdata('success') != ""){?>
                <div class="alert alert-success text-center">
                    <?php echo $this->session->flashdata('success');?>
                </div>
            <?php }?>
			  <?php
                // echo '<pre>';print_r($exam_info);echo '</pre>';die();
				$attributes = array('class' => 'web_form','id' => 'authentication_form', 'name' => 'authentication_form', 'role' => 'form' );
				/*echo form_open_multipart('authenticate.me',$attribute);*/echo form_open('authenticate.me',$attributes); ?>
				<div class="form-group has-feedback lg left-feedback no-label custom-class">
				  <input name="email" type="text" id="email" class="form-control no-border input-lg rounded" placeholder="Enter email" autofocus>
				  <span class="fa fa-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback lg left-feedback no-label custom-class">
				  <input name="password" id="password" type="password" class="form-control no-border input-lg rounded" placeholder="Enter password">
				  <span class="fa fa-unlock-alt form-control-feedback"></span>
				</div>
				<!-- <div class="form-group">
				  <div class="checkbox">
					<label>
					  <input type="checkbox" class="i-yellow-flat"> Remember me
					</label>
				  </div>
				</div> -->
				<div class="form-group custom-class">
					<button type="submit" name="login_form_submit" id="login_form_submit" value="login_form" class="btn btn-warning btn-lg btn-perspective btn-block">LOGIN</button>
				</div>
			</form>
			<!-- <p class="text-center"><strong><a href="forgot-password.html">Forgot your password?</a></strong></p> -->
			<!-- <p class="text-center">or</p>
			<p class="text-center"><strong><a href="register.html">Create new account</a></strong></p> -->
		</div><!-- /.login-wrapper -->
		<!--
		===========================================================
		END PAGE
		===========================================================
		-->
<?php $this->load->view('Login/footer');?>	