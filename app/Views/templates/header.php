<!-- HEADER: MENU + HEROE SECTION -->
<header>
	<div class="menu">
		<ul>
			<li class="logo"><h3>ProjectTemplate</h3></li>
			<li class="menu-toggle">
				<button onclick="toggleMenu();">&#9776;</button>
			</li>
			<?php
				$session = \Config\Services::session();
				if (!empty($session->get('logged_in'))){
					echo '<li class="menu-item hidden"><a href="/home">Home</a></li>
								<li class="menu-item hidden"><a href="/user/profile">'.esc($session->get('username')).'</a></li>
								<li class="menu-item hidden"><a href="/auth/logout">Logout</a></li>';
				}else{
					echo '<li class="menu-item hidden"><a href="/">Main</a></li>
								<li class="menu-item hidden"><a href="/auth/login">Login</a></li>
								<li class="menu-item hidden"><a href="/auth/register">Register</a></li>';
				}
			?>
		</ul>
	</div>
</header>
