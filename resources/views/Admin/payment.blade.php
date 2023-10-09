@extends('Layout.admin_master')

@section('content')
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">					
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Payments</h1>
							</div>
							
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container-fluid">
						 <div class="card">
							<div class="card-header">
								<div class="card-tools">
									<div class="input-group input-group" style="width: 250px;">
										<input type="text" name="table_search" class="form-control float-right" placeholder="Search">
					
										<div class="input-group-append">
										  <button type="submit" class="btn btn-default">
											<i class="fas fa-search"></i>
										  </button>
										</div>
									  </div>
								</div>
							</div>
							<div class="card-body table-responsive p-0">								
								<table class="table table-hover text-nowrap">
									<thead>
										<tr>
											<th width="60">Orders #	</th>
											<th>Customer Name</th>
											<th>Payment Method</th>
											<th>Amount</th>
											<th>Payment Status</th>
											<th>Payment Date</th>
											<th>Payment Details</th>
										</tr>
									</thead>
									<tbody>
										@foreach ( $paymants as $paymant)
											
										<tr>

											<td>{{ $paymant->order->id }}</td>
											<td>{{ $paymant->customer->name }}</td>
											<td>{{ $paymant->payment_method }}</td>
											<td>{{ $paymant->payment_status }}</td>
											<td>{{ $paymant->payment_date }}</td>
											<td>{{ $paymant->payment_details }}</td>
											
										</tr>
										@endforeach
										
									</tbody>
								</table>										
							</div>
							<div class="card-footer clearfix">
								<ul class="pagination pagination m-0 float-right">
								  <li class="page-item"><a class="page-link" href="#">«</a></li>
								  <li class="page-item"><a class="page-link" href="#">1</a></li>
								  <li class="page-item"><a class="page-link" href="#">2</a></li>
								  <li class="page-item"><a class="page-link" href="#">3</a></li>
								  <li class="page-item"><a class="page-link" href="#">»</a></li>
								</ul>
							</div>
						</div> 
					</div>
					<!-- /.card -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			@endsection
