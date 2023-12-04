@extends('Layout.admin_master')

@section('content')
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Orders</h1>
							</div>
							<div class="col-sm-6 text-right">
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
					
										
									  </div>
								</div>
							</div>
							<div class="card-body table-responsive p-0">								
								<table class="table table-hover text-nowrap">
									<thead>
										<tr>
											{{-- <th>Orders #</th>											 --}}
                                            {{-- <th>Image</th> --}}
                                            <th>Customer</th>
                                            <th>Email</th>
											{{-- <th>Status</th> --}}
                                            <th>Total</th>
                                            <th>Date Purchased</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($orders as $order)
                                        <tr>
											{{-- <td><a href="/ordersitem/{{ $order->id }}">{{ $order->id }}</a></td>
                                            <td>{{ $order->customer->image  }}</td> --}}
											<td>{{ $order->customer->name  }}</td>
                                            <td>{{ $order->customer->email  }}</td>
                                            {{-- <td>
                                                <span class="status {{ $order->statusClass }}">{{ $order->status }}</span>
                                            </td> --}}
											<td>${{ number_format($order->total_price, 2) }}</td>
                                            <td>{{ $order->order_date }}</td>

                                        </tr>
                                    @endforeach
										
									</tbody>
								</table>										
							</div>
							<div class="card-footer clearfix">
								<ul class="pagination pagination m-0 float-right">
		
									{{ $orders->links('vendor.pagination.tailwind') }}
		
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
