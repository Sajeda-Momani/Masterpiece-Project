@extends('Layout.admin_master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create customer</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('customers.index') }}" class="btn btn-primary">Back</a>
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
                        <form action="{{ route('customers.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="phone" class="form-control"
                                            placeholder="password">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="image">Image</label>

                                    <input class="form-control" name="image" type="file" id="photo"> </br>

                                    {{-- <div class="mb-3">
												<label for="image">{{ __('Upload new image') }}</label>
												<input id="image" name="image" type="file" accept="image/*"
													class="form-control-file" autocomplete="image" />
												{{-- <x-input-error class="mt-2" :messages="$errors->get('image')" /> --}}
                                    {{-- </div>  --}}
                                </div>

                            </div>
                            <div class="pb-5 pt-3">
                                <button class="btn btn-primary">Create</button>
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
