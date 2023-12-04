@extends('Layout.admin_master')

@section('content')
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Address</h1>
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
							
							<div class="card-body table-responsive p-0">								
								<table class="table table-hover text-nowrap">
									<thead>
										<tr>
											<th width="60">ID</th>
											<th width="100">Customer Name</th>
											<th width="100">Customer Address</th>
                                            <th width="100">Customer Phone Number</th>
											<th width="100">Notes</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($addresses as $address)

										<tr>
											<td>{{ $address->customer->name }}</td>
											<td>{{ $address->customer->name }}</td>
											<td>{{ $address->city }}, {{ $address->town }},{{ $address->street }},{{ $address->department_number }}</td>
											<td>{{ $address->phone }}</td>
											<td>{{ $address->additional_information }}</td>
											
										</tr>
										@endforeach
									</tbody>
								</table>										
							</div>
							<div class="card-footer clearfix">
								<ul class="pagination pagination m-0 float-right">
									<div class="pagination">
										{{ $addresses->links() }}
									</div>
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
