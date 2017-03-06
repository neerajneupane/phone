@extends('layouts.app')

@section('content')
<div id='headerWrapper' class="container">
	<div id='logotext'></div>
	<div id='buy'>
		<div class="img-responsive">
			<a href="buy.php">
				<img class="img-responsive" id="buy-sell-image" src="images/buy.png" >
			</a>
		</div>
	</div>
	<div id='sell'>
		<div class="img-responsive">
			<a href="customer">
				<img class="img-responsive" id="buy-sell-image" src="images/sell.png" >
			</a>
		</div>
	</div>
</div>
<div class="container-fluid" id="contents">
	
	<!-- Left Sidebar -->

	<div class="col-md-2"></div>
	
	<!-- Main Content -->
	
	<div class="col-md-8">
		<div class="row" id="info">
			<h2 class="text-center">What is PhoneColony?</h2><br>
			<p class="text-center">PhoneColony is a Nepali online marketplace for advertising Mobile Phones and related Accessories. Started on 2017, PhoneColony connects the gadget buyers and sellers from all over Nepal to buy, sell or even exchange their used and new gadgets by making it easy and fast to post their advertisement online. Every single person in the country is free to sell their phones and accessories to anyone. We have created that platform for you. So, find your perfect match and sell it online. We believe in connecting our users together for their own profit. Start using PhoneColony today and feel free to post ads without any cost.</p>
		</div>
	</div>

	<!-- Right Sidebar -->

	<div class="col-md-2"></div>
	
</div>
@endsection

