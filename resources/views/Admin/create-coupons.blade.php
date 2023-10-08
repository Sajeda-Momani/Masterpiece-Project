@extends('Layout.admin_master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Coupons</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('coupons.index') }}" class="btn btn-primary">Back</a>
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
                    <div class="card-body">
                        <form action="{{ route('coupons.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="code">Coupon Name</label>
                                        <input type="text" name="code" id="code" class="form-control"
                                            placeholder="Coupon Code">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="discount">Discount Amount</label>
                                        <input type="text" name="discount" id="discount" class="form-control"
                                            placeholder="Discount Amount">
                                    </div>
                                </div>
                                

                            </div>
                            <div class="pb-5 pt-3">
                                <button class="btn btn-primary">Add Coupon</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
