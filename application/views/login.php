]
<!doctype html>
<html lang="<?php echo current_language_code(); ?>">

<head>
  <meta charset="utf-8">
	<base href="<?php echo base_url(); ?>">
	<title><?php echo $this->config->item('company') . '&nbsp;|&nbsp;' . $this->lang->line('common_software_short')  . '&nbsp;|&nbsp;' .  $this->lang->line('login_login'); ?></title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="noindex, nofollow" name="robots">
	<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo 'dist/bootswatch-5/' . (empty($this->config->item('theme')) || 'paper' == $this->config->item('theme') || 'readable' == $this->config->item('theme') ? 'flatly' : $this->config->item('theme')) . '/bootstrap.min.css'; ?>" rel="stylesheet" type="text/css">
  <!-- start css template tags -->
  <link rel="stylesheet" type="text/css" href="css/login.min.css"/>
  <!-- end css template tags -->
	<meta content="#2c3e50" name="theme-color">
  <style>
    .footer_logo{
      width : 30px;
      height : 30px;
      margin-right: 6px;
    }
body .container-wrapper {
	background-color: #f8f9fa;
	display: flex;
	justify-content: center;
  flex-direction: column;
	align-items: center;
	height: 100vh;
}

footer {
  background-color: #f8f9fa;
  position: fixed;
  bottom: 0;
  width: 100%;
  text-align: center;
  padding: 10px;
  font-size: 12px;
}

.login-card {
	width: 100%;
	max-width: fit-content;
	box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
	border-radius: 10px;
	/* overflow: hidden; */
}
.login-title {
	text-align: center;
	margin-bottom: 20px;
	font-size: 1.5rem;
	color: #333;
}
form.form {
	display: flex;
	flex-direction: column;
	gap: 10px;
	padding: 30px;
	width: 450px;
	border-radius: 20px;
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
		Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}

::placeholder {
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
		Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}

.form button {
	align-self: flex-end;
}

.flex-column > label {
	color: #151717;
	font-weight: 600;
}

.inputForm {
	border: 1.5px solid #ecedec;
	border-radius: 10px;
	height: 50px;
	display: flex;
	align-items: center;
	padding-left: 10px;
	transition: 0.2s ease-in-out;
}

.input {
	margin-left: 10px;
	border-radius: 10px;
	border: none;
	width: 85%;
	background: transparent;
	height: 100%;
}

.input:focus {
	outline: none;
}

.inputForm:focus-within {
	border: 1.5px solid #2d79f3;
}

.flex-row {
	display: flex;
	flex-direction: row;
	align-items: center;
	gap: 10px;
	justify-content: space-between;
}

.flex-row > div > label {
	font-size: 14px;
	color: black;
	font-weight: 400;
}

.span {
	font-size: 14px;
	margin-left: 5px;
	color: #2d79f3;
	font-weight: 500;
	cursor: pointer;
}

.button-submit {
	margin: 20px 0 10px 0;
	background-color: #151717;
	border: none;
	color: white;
	font-size: 15px;
	font-weight: 500;
	border-radius: 10px;
	height: 50px;
	width: 100%;
	cursor: pointer;
}

.button-submit:hover {
	background-color: #252727;
}

.p {
	text-align: center;
	color: black;
	font-size: 14px;
	margin: 5px 0;
}

.btn {
	margin-top: 10px;
	width: 100%;
	height: 50px;
	border-radius: 10px;
	display: flex;
	justify-content: center;
	align-items: center;
	font-weight: 500;
	gap: 10px;
	border: 1px solid #ededef;
	background-color: white;
	cursor: pointer;
	transition: 0.2s ease-in-out;
}

.btn:hover {
	border: 1px solid #2d79f3;
}
.logo-wrapper {
  display: flex;
  width: full;
  justify-content: center;
  alight-items: center;
}
.logo-wrapper .brand-logo {
  width: 150px;
  height: 150px;
}
  </style>
</head>

<body>
    <div class="container-wrapper">
    <div class="card login-card">
        <div class="card-body">
        <div class="logo-wrapper">
      <?php if ($this->Appconfig->get('company_logo')): ?>
        <img class="" src="<?php echo base_url('uploads/' . $this->Appconfig->get('company_logo')); ?>" alt="Devsort Point of sale hub logo">
      <?php else: ?>
        <img class="brand-logo" src="/images/company_logo.png" alt="Devsort Point of sale hub logo">
      <?php endif; ?>
      </div>

      
      <?php echo form_open('login'); ?>
        <h3 class="text-center m-0"><?php echo $this->lang->line('login_welcome', $this->lang->line('common_software_short')); ?></h3>
        <?php if (validation_errors()): ?>
        <div class="alert alert-danger mt-3 mb-3">
          <?php echo validation_errors(); ?>
        </div>
        <?php endif; ?>
				<?php if (!$this->migration->is_latest()): ?>
        <div class="alert alert-info mt-3">
					<?php echo $this->lang->line('login_migration_needed', $this->config->item('application_version')); ?>
				</div>
				<?php endif; ?>

        
<form class="form">
  
    <div class="form-floating mt-3 mb-3">
          <input class="form-control" id="input-username" name="username" type="text" placeholder="<?php echo $this->lang->line('login_username'); ?>">
          <label for="input-username"><?php echo $this->lang->line('login_username'); ?></label>
        </div>
        <div class="form-floating mb-3">
          <input class="form-control" id="input-password" name="password" type="password" placeholder="<?php echo $this->lang->line('login_password'); ?>">
          <label for="input-password"><?php echo $this->lang->line('login_password'); ?></label>
        </div>
    <button class="button-submit">Sign In</button>
</form>
        </div>
    </div>

    


    <!-- Footer  -->

    <style>
      .footer-wrapper{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 5px;
        background-color: #f5f5f5;
        padding: 40px;
        font-size: 17px;
      }
      .login-footer{
        background-color: #f5f5f5;
      }
    </style>
    <footer class="footer-wrapper">
    <div class="login-footer">
      <span class="text-muted">
        <img class="footer_logo" src="/images/company_logo.png" alt="Devsort Point of sale hub logo">
      </span>
      <span>Devsort Point of sale hub</span>
    </div>
  </footer>
    </div>



</body>

</html>



