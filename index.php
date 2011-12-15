<?php

	header('Content-type: text/html; charset=utf-8');
	error_reporting(E_ALL);
	$page='start';
	$url = $_GET;
	
	foreach ($url as $page => $v);
	
	$date = array(
		'start'=> '',
		'registration' => '
					<div class="form">					
					<form action="">
					<p>
					<label>Username:</label>					
					<input type="text" autofocus id="Username" name="Username"/>
					</p>
					<p>
					<label>email:</label>
					<input type="email" name="email" id="email" required="required"/>
					</p>
					<p>
					<label>Password:</label>
					<input type="password" name="password" />
					</p>
					<p>
					<label>Confirm Password:</label>
					<input type="password" name="password2" />
					</p>
					
					<input type="submit" class="button" id="submit" value="Create an account"/>
					</form>
					</div>',
		'login' => '<div class="form">
					<form action="javascript:void(0);">
					<p>
					<label>email:</label>
					<input type="email" name="email" id="email" required="required"/>
					</p>
					<p>
					<label>Password:</label>
					<input type="password" name="password" />
					</p>
					
					<input type="submit" class="button" id="loginbutton" value="Login"/>
					</form>
					</div>',
		
	);	
	
	$navigation = array(		
		"registration" => array('href' => '?registration', 'text' => "Registration"), 
		"login" => array('href' => '?login', 'text' => "Login"),
		
	);
	
	$msg = $date[$page];

	include './header.html';
	include './context.html';
	include './footer.html';
	