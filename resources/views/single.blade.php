@extends('layouts.app')
@section('content')	
  <section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-md-8">
				<div class="product-details">
					<p class="product-title title-sa">{{$announcement->title}}</p>
					<div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-user-o"></i> By <a href="">{{$announcement->user->name}}</a></li>
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Categoria<a href="">{{$announcement->category->name}}</a></li>
							<li class="list-inline-item"><i class="fa fa-eur"></i> {{$announcement->price}}</li>
						</ul>
					</div>
					<div>
						<div class="col-md-8">
						<div class="product-slider">
						
							@foreach ($announcement->images as $image)
							<div class="product-slider">
								<img src="{{ $image->getUrl(330, 250) }}"
								class="rounded float-right" alt="">
							</div>
		             		@endforeach	
						</div>	
						</div>
						
					</div>
				
					<div class="content mt-5 pt-5">
						<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
								 aria-selected="false">{{__('ui.announ') }}</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
								 aria-selected="false">{{__('ui.review') }}</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
								 aria-selected="true">{{__('ui.re') }}</a>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<h3 class="tab-title">{{__('ui.recomen') }}</h3>
								<iframe width="560" height="315" src="https://www.youtube.com/embed/e2QAF8lXdbk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							
								<p> {{__('ui.video') }}</p>

							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<h3 class="tab-title">{{__('ui.announ') }}</h3>
								<h4>{{$announcement->body}}</h4>

								<table class="table table-bordered product-table">
									<tbody>
										<tr>
											<td>{{__('ui.price') }}</td>
											<td>{{$announcement->price}}</td>
										</tr>
										<tr>
											<td>{{__('ui.added') }}</td>
											<td>{{ $announcement->created_at->format('d/m/Y') }}</td>
										</tr>
										<tr>
											<td>{{__('ui.categorie') }}</td>
											<td>{{ $announcement->category->name }}</td>
										</tr>
										
									</tbody>
								</table>
							</div>
							
							<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
								<h3 class="tab-title">{{__('ui.pr') }}</h3>
								<div class="product-review">
									<div class="media">
										<!-- Avater -->
										<img src="images/user/user-thumb.jpg" alt="avater">
										<div class="media-body">
											<!-- Ratings -->
											<div class="ratings">
												<ul class="list-inline">
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
												</ul>
											</div>
											<div class="name">
												<h5>Fake</h5>
											</div>
											<div class="date">
												<p>Fake</p>
											</div>
											<div class="review-comment">
												<p>
													Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremqe laudant tota rem ape
													riamipsa eaque.
												</p>
											</div>
										</div>
									</div>
									<div class="review-submission">
										<h3 class="tab-title">{{__('ui.sr') }}</h3>
										<!-- Rate -->
										<div class="rate">
											<div class="starrr"></div>
										</div>
										<div class="review-submit">
											<form action="#" class="row">
												<div class="col-lg-6">
													<input type="text" name="name" id="name" class="form-control" placeholder="Name">
												</div>
												<div class="col-lg-6">
													<input type="email" name="email" id="email" class="form-control" placeholder="Email">
												</div>
												<div class="col-12">
													<textarea name="review" id="review" rows="10" class="form-control" placeholder="Message"></textarea>
												</div>
												<div class="col-12">
													<button type="submit" class="btn btn-main">Sumbit</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="widget price text-center">
						<h4>{{__('ui.dudas') }}</h4>
					</div>
					<!-- User Profile widget -->
					<div class="widget user text-center">
						<img class="rounded-circle img-fluid mb-5 px-5" src="https://image.freepik.com/foto-gratis/pequeno-gato-duerme-telefono-movil-dulces-agradables-suenos-colores-bebe-durmiendo_199743-337.jpg" alt="Gatito">
						<h4><a href="">{{__('ui.pim') }}</a></h4>

						<a href="mail.badabadum"><i class="fa fa-envelope"></i> <contact@pimpampumbadabadum class="com"></contact@pimpampumbadabadum></a>
						<a href="whatsapp"><i class="fa fa-whatsapp"></i> <whatsapp 666777222></a>
						<ul class="list-inline mt-20">
							<li class="list-inline-item"><a href="" class="btn btn-contact d-inline-block  btn-primary px-lg-5 my-1 px-md-3">{{__('ui.contact') }}</a></li>
							
						</ul>
					</div>
					<!-- Map Widget -->
					<div class="widget map">
						<div class="map">
							<div id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"></div>
						</div>
					</div>
					<!-- Rate Widget -->
					<div class="widget rate">
						<!-- Heading -->
						<h5 class="widget-header text-center">{{__('ui.c') }}
							<br>
							{{__('ui.t') }}</h5>
						<!-- Rate -->
						<div class="starrr"></div>
					</div>
					<!-- Safety tips widget -->
					<div class="widget disclaimer">
						<h5 class="widget-header">{{__('ui.safe') }}</h5>
						<ul>
							<li>{{__('ui.meet') }}</li>
							<li>{{__('ui.check') }}</li>
							<li>{{__('ui.pay') }}</li>
						</ul>
					</div>
					<!-- Coupon Widget -->
					<div class="widget coupon text-center">
						<!-- Coupon description -->
						<p>{{__('ui.have') }}
						</p>
						<!-- Submii button -->
						<a href="{{ route('announcement.new') }}" class="btn btn-transparent-white">{{__('ui.newannouncement') }}</a>
					</div>

				</div>
			</div>

		</div>
	</div>
	<!-- Container End -->
	
</section>
@endsection