<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				@if(auth()->user()->role == 'anggota')
				<li><a href="/dashboard" class=" {{ Request::is('dashboard') ? 'active' :''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
				@endif

				@if(auth()->user()->role == 'admin')
				<li><a href="/dashboard" class=" {{ Request::is('dashboard') ? 'active' :''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
				<li><a href="/user" class=""><i class="lnr lnr-user"></i> <span>User</span></a></li>
				@endif
				<li><a href="/my-profile" class=""><i class="glyphicon glyphicon-user"></i> <span>My Profile</span></a></li>
			</ul>
		</nav>
	</div>
</div>