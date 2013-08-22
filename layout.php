<div class="page-wrapper clearfix">

			<div class="logo-wrapper"><a href="/" class="logo">Logo</a></div>
			<nav class="main-menu">
				<ul>
					<li class="menu-element<?= ($file=='home') ? ' active': ''; ?>"><a class="link" href="home">Home</a></li>
					<li class="menu-element<?= ($file=='subpage1') ? ' active': ''; ?>"><a class="link" href="subpage1">Subpage1</a></li>
					<li class="menu-element<?= ($file=='subpage2') ? ' active': ''; ?>"><a class="link" href="subpage2">Subpage2</a></li>
					<li class="menu-element<?= ($file=='subpage3') ? ' active': ''; ?>"><a class="link" href="subpage3">Subpage3</a></li>
					<li class="menu-element<?= ($file=='subpage4') ? ' active': ''; ?>"><a class="link" href="subpage4">Subpage4</a></li>
					<li class="menu-element last<?= ($file=='subpage5') ? ' active': ''; ?>"><a class="link" href="subpage5">Subpage5</a></li>
				</ul>
			</nav>
		</div>

		<div class="content-wrapper clearfix">
			<?php
				if(file_exists($page)) {
					include($page);
				}
			?>
			<p class="clear-both"></p>
			<footer class="footer-wrapper">
				<p class="copy">Copyright © page.pl</p>
			</footer>
		</div>
</div>