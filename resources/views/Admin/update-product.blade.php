@extends('Layout.admin_master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edite Product</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h2 class="h4 mb-3">Product Details </h2>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="name">Product Name</label>
                                                        <input type="text" name="name" id="title"
                                                            class="form-control" placeholder=" Product Name" value="{{ $product->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-mb-3">
                                                        <label for="brand">Brand Name</label>
                                                        <input type="text" name="brand" id="barcode"
                                                            class="form-control" placeholder="Brand Name" value="{{ $product->brand }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="brief">Product Brief</label>
                                                        <br>
                                                        <input class="form-control"name="brief" id="description" cols="50" rows="2" class="summernote" placeholder=" Product Brief"  value="{{ $product->brief }}"></input>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="description">Product Description</label>
                                                        <br>
                                                        <input class="form-control"name="description" id="description" cols="50" rows="5" class="summernote"
                                                            placeholder=" Product Description" value="{{$product->description}}"></input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h2 class="h4 mb-3">Pricing</h2>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="price">Price</label>
                                                        <input type="text" name="price" id="price"
                                                            class="form-control" placeholder="Product Price" value="{{ $product->price }}">
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="compare_price">Compare at Price</label>
                                                        <input type="text" name="compare_price" id="compare_price"
                                                            class="form-control" placeholder="Compare Price">
                                                        <p class="text-muted mt-3">
                                                            To show a reduced price, move the product’s original price
                                                            into
                                                            Compare at
                                                            price. Enter a lower value into Price.
                                                        </p>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h2 class="h4 mb-3">Media</h2>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="image1">Image 1</label>
                                                        <input type="file" class="form-control-file" id="image1"
                                                            name="image1" value="{{ $product->image1 }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="image2">Image 2</label>
                                                        <input type="file" class="form-control-file" id="image2"
                                                            name="image2" value="{{ $product->image2 }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="image3">Image 3</label>
                                                        <input type="file" class="form-control-file" id="image3"
                                                            name="image3" value="{{ $product->image3 }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="image4">Image 4</label>
                                                        <input type="file" class="form-control-file" id="image4"
                                                            name="image4" value="{{ $product->image4 }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h2 class="h4 mb-3">Inventory</h2>
                                                    <div class="mb-3">
                                                        <label for="quantity_in_stock">Quantity In Stock</label>
                                                        <input type="text" name="quantity_in_stock"
                                                            id="quantity_in_stock" class="form-control"
                                                            placeholder="Qty" value="{{ $product->quantity_in_stock }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h2 class="h4 mb-3">Product category</h2>
                                                    <div class="mb-3">
                                                        <label for="category">Category</label>
                                                        <select name="category_id" id="category" class="form-control">
                                                            <option value="">Select a category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}"{{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pb-5 pt-3">
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <script>
            Dropzone.autoDiscover = false;
            $(function() {
                // Summernote
                $('.summernote').summernote({
                    height: '300px'
                });

                const dropzone = $("#image").dropzone({
                    url: "create-product.html",
                    maxFiles: 5,
                    addRemoveLinks: true,
                    acceptedFiles: "image/jpeg,image/png,image/gif",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    success: function(file, response) {
                        $("#image_id").val(response.id);
                    }
                });

            });
        </script>
@endsection
