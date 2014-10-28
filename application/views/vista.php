<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link  rel="stylesheet" href="<?php  echo base_url(); ?>/css/bootstrap.css"/>
	<script src="<?php  echo base_url(); ?>/js/jquery.js"></script>  
	<script type="text/javascript" src="<?php  echo base_url(); ?>/js/bootstrap.js"></script>

	
</head>
<body>	
	<div class="container">
	<div class="jumbotron col-lg-12">
		<h1> Hola esta es una prueba!</h1>
		<p>Hola! estas es una prueba bla bla bla</p>
		<button class="btn btn-info">Más Info</button>
		</div>
<div class="col-lg-2 col-sm-3 jumbotron">agregar Algo <span class="glyphicon glyphicon-globe"></span></div>
<div class="col-lg-3 col-sm-3 jumbotron">agregar Algo</div>
<div class="col-lg-3 col-sm-3 jumbotron">agregar Algo</div>
<div class="col-lg-3 col-sm-3 jumbotron">agregar Algo</div>
		
	</div>
	
	
	
	
	<?php echo NAV();?>
	<div id="container">
	<h1> :D </h1>
	<p>:p</p>
	<h1> la del pirata cojo con pata de palo :3 </h1>
	<button class="btn btn-warning"> Aqui</button>
	</div> 
	
<div class="container">
 
<!-------->
<div id="content">
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="active"><a href="#red" data-toggle="tab">Red</a></li>
        <li><a href="#orange" data-toggle="tab">Orange</a></li>
        <li><a href="#yellow" data-toggle="tab">Yellow</a></li>
        <li><a href="#green" data-toggle="tab">Green</a></li>
        <li><a href="#blue" data-toggle="tab">Blue</a></li>
    </ul>
    <div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="red">
            <h1>Red</h1>
            <p><?php 

// load the form helper so you can use set_value, form_open etc
$this->load->helper('form');

echo form_open('location/to/sumbit/to');

echo "Username : ". form_input('username', set_value('username'));
echo "Password : ". form_password('password', set_value('password'));
echo form_submit('submit', 'Login');

echo form_close();

?> 
</p>
        </div>
        <div class="tab-pane" id="orange">
            <h1>Orange</h1>
            <p>orange orange orange orange orange</p>
        </div>
        <div class="tab-pane" id="yellow">
            <h1>Yellow</h1>
            <p>yellow yellow yellow yellow yellow</p>
        </div>
        <div class="tab-pane" id="green">
            <h1>Green</h1>
            <p>green green green green green</p>
        </div>
        <div class="tab-pane" id="blue">
            <h1>Blue</h1>
            <p>blue blue blue blue blue</p>
        </div>
    </div>
</div>
 
 
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>    
</div> <!-- container -->
 
 
</body>
<!--<footer><?php echo FOO();?></footer>-->

<div class="container-fluid">
	<footer class="nav navbar-bottom navbar-inverse">
		<div class="nav navbar-header">
		<?php echo FOO();?>
		</div>
	</footer>
	
	
</div>


</html>