@extends('font-end.master')
@section('title')
    Dashboard
@endsection
@section('main-content')
    <!--==================================
=            User Profile            =
===================================-->
<section class="dashboard section">
	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				@include('font-end.dashboard.includes')
			</div>
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					<h3 class="widget-header">My Ads</h3>
					<table id="datatable" class="table table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
						<thead>
							<tr>
								<th>Image</th>
								<th>Product Title</th>
								<th class="text-center">Category</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							 
							<tr>
								
								<td class="product-thumb">
									<img width="80px" height="auto" src="{{ asset('/') }}font-end/images/products/products-2.jpg" alt="image description">
								</td>
									
								<td class="product-details">
									<h3 class="title">Study Table Combo</h3>
									<span class="add-id ads-table-span"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
									<span class=" ads-table-span"><strong>Posted on: </strong><time>Feb 12, 2017</time> </span>
									<span class="status active ads-table-span"><strong>Status</strong>Active</span>
									<span class="location ads-table-span"><strong>Location</strong>USA</span>
								</td>
								<td class="product-category"><span class="categories">Laptops</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="view" href="">
													<i class="fa fa-eye"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
						 
							<tr>
								
								<td class="product-thumb">
									<img width="80px" height="auto" src="{{ asset('/') }}font-end/images/products/products-2.jpg" alt="image description">
								</td>
									
								<td class="product-details">
									<h3 class="title">Study Table Combo</h3>
									<span class="add-id ads-table-span"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
									<span class=" ads-table-span"><strong>Posted on: </strong><time>Feb 12, 2017</time> </span>
									<span class="status active ads-table-span"><strong>Status</strong>Active</span>
									<span class="location ads-table-span"><strong>Location</strong>USA</span>
								</td>
								<td class="product-category"><span class="categories">Laptops</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="view" href="">
													<i class="fa fa-eye"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
						 
							<tr>
								
								<td class="product-thumb">
									<img width="80px" height="auto" src="{{ asset('/') }}font-end/images/products/products-2.jpg" alt="image description">
								</td>
									
								<td class="product-details">
									<h3 class="title">Study Table Combo</h3>
									<span class="add-id ads-table-span"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
									<span class=" ads-table-span"><strong>Posted on: </strong><time>Feb 12, 2017</time> </span>
									<span class="status active ads-table-span"><strong>Status</strong>Active</span>
									<span class="location ads-table-span"><strong>Location</strong>USA</span>
								</td>
								<td class="product-category"><span class="categories">Laptops</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="view" href="">
													<i class="fa fa-eye"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
						 
							<tr>
								
								<td class="product-thumb">
									<img width="80px" height="auto" src="{{ asset('/') }}font-end/images/products/products-2.jpg" alt="image description">
								</td>
									
								<td class="product-details">
									<h3 class="title">Study Table Combo</h3>
									<span class="add-id ads-table-span"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
									<span class=" ads-table-span"><strong>Posted on: </strong><time>Feb 12, 2017</time> </span>
									<span class="status active ads-table-span"><strong>Status</strong>Active</span>
									<span class="location ads-table-span"><strong>Location</strong>USA</span>
								</td>
								<td class="product-category"><span class="categories">Laptops</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="view" href="">
													<i class="fa fa-eye"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
						 
							<tr>
								
								<td class="product-thumb">
									<img width="80px" height="auto" src="{{ asset('/') }}font-end/images/products/products-2.jpg" alt="image description">
								</td>
									
								<td class="product-details">
									<h3 class="title">Study Table Combo</h3>
									<span class="add-id ads-table-span"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
									<span class=" ads-table-span"><strong>Posted on: </strong><time>Feb 12, 2017</time> </span>
									<span class="status active ads-table-span"><strong>Status</strong>Active</span>
									<span class="location ads-table-span"><strong>Location</strong>USA</span>
								</td>
								<td class="product-category"><span class="categories">Laptops</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="view" href="">
													<i class="fa fa-eye"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
						 
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
</section>
@endsection