<!-- HEADER: MENU + HEROE SECTION -->
<header>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<!--<img src="#" width="50" class="rounded-circle bg-white" style="padding: 2px">-->
		&nbsp;&nbsp;
		 <a class="navbar-brand" href="/">
		  <b><?php echo $_ENV['app.name'] ?></b>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="border:0">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="container-fluid">
		  <div class="collapse navbar-collapse" id="navbarCollapse">

			  <ul class="navbar-nav ml-auto">
					<?php
						$session = \Config\Services::session();
						if (!empty($session->get('logged_in'))){
							echo '
					  	<li class="nav-item">
					      <a class="nav-link text-white" href="/home">Home</a>
					    </li>

					    <li class="nav-item dropdown">
					        <a class="nav-link text-white dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.esc($session->get('username')).'</a>
					        <div class="dropdown-menu" aria-labelledby="dropdown01">
					       	  <a class="dropdown-item" href="/user/profile">Profile</a>
					          <a class="dropdown-item" href="/user/password">Security</a>
					          <a class="dropdown-item" href="/auth/logout">Logout</a>
					        </div>
					   </li>';
					}else{
		 					echo '
				  	<li class="nav-item">
				      <a class="nav-link text-white" href="/auth/login">Login</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link text-white" href="/auth/register">Register</a>
				    </li>';}
					?>
			  </ul>
		  </div>
		</div>
	</nav>
</header>
