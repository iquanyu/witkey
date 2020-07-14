<nav class="navbar navbar-expand-lg navbar-light bg-white osahan-nav-mid px-0 border-top shadow-sm">
	<div class="container">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav">
        <li class="nav-item">
					<a class="nav-link" href="{{route('index')}}">首页</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('about')}}">关于我们</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('contact')}}">联系我们</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pages
						</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
						<a class="dropdown-item" href="{{route('questions.index')}}">Product List</a>
						<a class="dropdown-item" href="{{route('questions.index')}}">Product List 2</a>
						<a class="dropdown-item" href="{{route('questions.index')}}">List Detail</a>
						<a class="dropdown-item" href="{{route('index')}}">Profile</a>
						<a class="dropdown-item" href="{{route('index')}}">Company Profile</a>
						<a class="dropdown-item" href="{{route('index')}}">Alerts</a>
						<a class="dropdown-item" href="{{route('index')}}">Messages</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Other Pages
						</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownBlog">
						<a class="dropdown-item" href="{{route('index')}}">Login</a>
						<a class="dropdown-item" href="{{route('index')}}">Register</a>
					</div>
				</li>
			</ul>
		</div>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="{{route('index')}}">
					<i class="fa fa-fw fa-trophy"></i>
					<span>Become A Seller</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link">
					<img class="country-flag img-fluid" src="{{asset('images/india.png')}}">
					<span>English</span>
				</a>
			</li>
		</ul>
	</div>
</nav>