@extends('layouts.app')
@section('content')
@include('inc.carousel')

<div class="main-cover">
	<div class="main-cover-inner">
		
		<div class="hm-about-wrap">
			<div class="container-fluid hm-about-container">
				<div class="row hm-about-row">
					<div class="offset-md-1 col-md-5 hm-abt-col">
						<div class="hm-abt-inner">
							<div class="hm-abt-title">
								<h1 class="heading">
									about us
								</h1>
							</div>
							<div class="hm-abt-para">
								<p class="txtj">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ducimus non at sit nobis voluptatum nemo, ratione ipsam accusamus dolorum. Commodi facere voluptatem nesciunt id debitis facilis nulla fuga reprehenderit.
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ducimus non at sit nobis voluptatum nemo, ratione ipsam accusamus dolorum. Commodi facere voluptatem nesciunt id debitis facilis nulla fuga reprehenderit.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>

		<div class="flower-wrap">
			<div class="container flower-container">
				<div class="row flower-row">
					<div class="col-md-4 flow-col">
						<div class="flow-inner txtct">
							<div class="flow-img-wrap">
								<img src="{{asset('img/flow1.jpg')}}" alt="" class="img-fluid">
							</div>
							<div class="flow-title">
								<span>
									black paper oil
								</span>
							</div>
							<div class="flow-para">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 flow-col">
						<div class="flow-inner txtct">
							<div class="flow-img-wrap">
								<img src="{{asset('img/flow2.jpg')}}" alt="" class="img-fluid">
							</div>
							<div class="flow-title">
								<span>
									aloe pure white gel
								</span>
							</div>
							<div class="flow-para">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 flow-col">
						<div class="flow-inner txtct">
							<div class="flow-img-wrap">
								<img src="{{asset('img/flow3.jpg')}}" alt="" class="img-fluid">
							</div>
							<div class="flow-title">
								<span>
									almond oil
								</span>
							</div>
							<div class="flow-para">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="hm-range-wrap">
			<div class="container hm-range-container">
				<div class="row hm-range-row">
					<div class="offset-md-2 col-md-8 range-col">
						<div class="range-inner txtct">
							<div class="range-title">
								<h1 class="heading">
									our range
								</h1>
							</div>
							<div class="range-para ">
								<p class="txtj">
									Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Aspernatur qui, fuga dolorum nihil ipsum, dolore placeat distinctio amet consequatur, provident quidem ut necessitatibus. Odio eius dolore magni ipsam, vitae sit doloribus. Earum, cumque consequuntur quaerat! Incidunt quibusdam veritatis eum voluptas expedita maxime, mollitia ratione magnam sint. Molestias cum dolor modi facilis officia veniam dignissimos est vitae temporibus error ipsa deleniti sed, eligendi placeat fugit laborum. Explicabo debitis, laborum, odit non, cumque temporibus natus odio eveniet minus quam wow
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 pro-range-col">
						<div class="pro-range-inner">
							<div class="pro-range-pro">
								<img src="{{asset('img/pro1.jpg')}}" alt="" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="col-md-4 pro-range-col">
						<div class="pro-range-inner">
							<div class="pro-range-pro">
								<img src="{{asset('img/pro2.jpg')}}" alt="" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="col-md-4 pro-range-col">
						<div class="pro-range-inner">
							<div class="pro-range-pro">
								<img src="{{asset('img/pro3.jpg')}}" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>


@include('inc.footer')