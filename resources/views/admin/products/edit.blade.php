@extends('layouts.admin')

@section('title')
    <title>eCanteen - Edit a Products</title>
@endsection

@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">PRODUCTS</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Database</li>
                        <li class="breadcrumb-item active">Product - Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-primary card-outline">
            <h3 class="mt-3 ml-4 card-title">Edit a Product</h3>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form
                    action="{{ auth()->user()->role == 'admin' ? route('admin.products.update', $products->id) : route('dashboardSeller.admin.products.update', $products->id) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <h4 class="text-md">Name :</h4>
                        <input type="text" id="nama" name="name" class="form-control" placeholder="Product Name..."
                            autocomplete="off" value="{{ $products->name }}">
                    </div>
                    <div class="form-group">
                        <h4 class="text-md">Category :
                            <select name="category" id="category" class="btn btn-white rounded border">
                                <option value="Makanan" {{ $products->category == 'Makanan' ? 'selected' : '' }}>Makanan
                                </option>
                                <option value="Minuman" {{ $products->category == 'Minuman' ? 'selected' : '' }}>Minuman
                                </option>
                                <option value="Lainnya" {{ $products->category == 'Lainnya' ? 'selected' : '' }}>Lainnya
                                </option>
                            </select>
                        </h4>
                    </div>
                    <div class="form-group">
                        <h4 class="text-md">Price :</h4>
                        <input type="text" id="nama" name="price" class="form-control" placeholder="Price..."
                            autocomplete="off" value="{{ $products->price }}">
                    </div>
                    <div class="form-group">
                        <h4 class="text-md">Stock :</h4>
                        <input type="text" id="nama" name="stock" class="form-control" placeholder="Stock..."
                            autocomplete="off" value="{{ $products->stock }}">
                    </div>
                    <div class="form-group">
                        <h4 class="text-md">Description :</h4>
                        <input type="text" id="nama" name="description" class="form-control"
                            placeholder="Product Description..." value="{{ $products->description }}"></input>
                    </div>

                    <div class="form-group">
                        <h4 class="text-md">Status :
                            <select name="status" id="status" class="btn btn-white rounded border">
                                <option value="Available" {{ $products->status == 'Available' ? 'selected' : '' }}>
                                    Available</option>
                                <option value="Not Available"
                                    {{ $products->status == 'Not Available' ? 'selected' : '' }}>Not
                                    Available</option>
                            </select>
                        </h4>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content -->

@endsection

@section('script')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
