@extends('Layout.admin_master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Category</h1>
                    </div>
                    <div class="col-sm-6 text-right">
						<a href="{{ route('categories.index') }}" class="btn btn-primary">Back</a>
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
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Enter Category Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="description">Description</label>
                                        <input type="text" name="description" id="description" class="form-control"
                                            placeholder="Enter Category Description">
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <button type="submit" class="btn btn-primary">Create</button>
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
