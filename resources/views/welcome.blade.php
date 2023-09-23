<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LenyAvery</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



</head>
<body>
	<header class="header">
		<div class="nav">
		<h3 class="logo-header">Leny<span>Avery</span></h3>
		<div class="nav-item">
			@if (Route::has('login'))
					<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
						@auth
							<a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
						@else
							<a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
						@endauth
					</div>
				@endif

		</div>
		</div>
		<br><br><br><br>
		@foreach($products as $product)
		<div class="all-product">
			<div class="product">
				<h1 class="name">{{ $product->name }}</h1>
				<div class="paragraph">
					<p>{{ $product->description }}</p>
				</div>
				<div class="button">
					<a href="#contact"><button class="btn btn1">Buy for {{ $product->price }}$</button></a>
					<a href="#more"><button class="btn btn2">Learn More</button></a>
				</div>
				<div class="cmd">
					<div class="pro">
					<img src="profil.png" alt="" class="profil"><br>
					<p class="profil-name">Med</p>
					</div>
					<div class="pro-talk">
						<p>HI!! i'm the owner, if you looking for a good Essential Oil Diffuser & a good Smell you are in the right place.
							<br>Thanks for visiting our wib Site. </p>
					</div>

				</div>

			</div>
			<div class="img-product">
				<img src="{{ $product->photo }}" alt="">
			</div>
		</div>
		@endforeach
	</header>
	<section class="section">
		<h1 class="header-section">Imformations You Need To Know</h1>
		<div class="desc" >
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At rerum ullam necessitatibus debitis! Magni harum maiores velit dolor, distinctio accusantium aliquam quas, impedit culpa quam quae suscipit perspiciatis amet et.</p>
		</div>
		@foreach($infos as $info )
		<div class="imformations">
			<h4 class="title"><span>{{ $info->title }}</span> :</h4>
			<div class="text-info">
				<p>{{ $info->desc }}</p>
			</div>
		</div>
		@endforeach
	<a Name="more"></a>
	</section>
	<main class="main">
	<h1 class="header-section">How to Use It ?</h1>
	<div class="all-main">
	<div class="main-img">
		<img src="how.png" alt="">
	</div>
	<div class="main-how">
		<ol>
		@foreach($hows as $how)
			<li>{{ $how->body }}</li>
		@endforeach
		</ol>
		
		<a href="#contact"><button class="btn btn3">Buy Now</button></a>
	</div>
	</div>
	</main>
	<a Name="contact"></a>
	<main class="buy">
		<h1 class="header-section">Get Your Product Now</h1>
		<p class="desc">Please Enter Your Informations Here:</p><br>
		<form  method="POST" action="{{ url('store') }}">
			@csrf
			@if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </ul>
        </div>
    @endif
			<label>Your Name:</label><br>
			<input type="text" name="name" placeholder="your name" ><br><br>
			<label>Your Email:</label><br>
			<input type="text" name="email" placeholder="your email" ><br><br>
			<label>Your Phone Number:</label><br>
			<input type="text" name="phone" placeholder="your phone number"><br><br><br>
			<button class="btn btn4" type="submit">Send</button>
		</form><br><br>
		@if(Session::has('message'))
			<script>
				swal("Message Sended","{{ Session::get('message') }}",'success',{
					button:true,
					button:'OK',
					timer:3000
				});
			</script>
		@endif
	</main>
	@foreach($about as $item)
	<main class="about">
		<div class="img-about">
			<img src="profil.png" alt="pas de image">
		</div>
		<div class="title-about">
			<h1 class="header-section">{{ $item->title }}</h1>
		</div>
		<div class="para-about">
		
		<p> {{ $item->about }} </p>

			<h3>Follow Us</h3>
			<div class="icons">
			<a href="{{$item->insta}}" target="_blank"><i class="fab fa-instagram"></i></a>
			<a href="{{$item->youtube}}" target="_blank"><i class="fab fa-youtube"></i></a>
			<a href="{{$item->facebook}}" target="_blank"><i class="fab fa-facebook"></i></a>
			<a href="{{$item->twiter}}" target="_blank"><i class="fab fa-twitter"></i></a>

			</div>
		</div>
	</main>
	@endforeach
	<footer>
        <div class="footer-content">
            <p>&copy; 2023 LenyAvery created by Med El Wakani. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>