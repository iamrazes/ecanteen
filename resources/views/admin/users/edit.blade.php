@extends('layouts.admin')

@section('title')
<title>eCanteen - Users</title>
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
                <h1 class="m-0">USERS</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Database</li>
                    <li class="breadcrumb-item active">Users - Create</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="card card-primary card-outline">
        <h3 class="mt-3 ml-4 card-title">Add New Users</h3>
        <div class="card-body">
            <form action="{{route('admin.users.update',$dtusers->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <input type="text" id="nama" name="name" class="form-control" placeholder="Nama..." value="{{ $dtusers->name }}">
                </div>
                <div class="form-group">
                    <input type="text" id="nama" name="nickname" class="form-control" placeholder="Nickname..." value="{{ $dtusers->nickname }}">
                </div>
                <div class="form-group">
                    <input type="text" type="email" name="email" class="form-control" placeholder="Email..." value="{{ $dtusers->email }}">
                </div>
                <div class="form-group">
                    <input type="text" id="nama" name="nim" class="form-control" placeholder="Nim..." value="{{ $dtusers->nim }}">
                </div>
                <div class="form-group">
                    <input type="text" type="password" name="password" class="form-control" placeholder="Password..." >
                </div>
                <div class="form-group">
                    <p>Role :
                        <select name="role" id="role" class="btn btn-white rounded border">
                            <option value="Admin" {{  $dtusers->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="Seller" {{  $dtusers->role == 'seller' ? 'selected' : '' }}>Seller</option>
                            <option value="Buyer" {{  $dtusers->role == 'buyer' ? 'selected' : '' }}>Buyer</option>
                        </select>
                    </p>
                </div>
                <div class="form-group">
                    <input type="text" id="saldo" name="saldo" class="form-control" placeholder="Saldo..." value="{{ $dtusers->saldo }}">
                    <button id="50k">50k</button>
                    <button id="100k">100k</button>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- /.content -->

@endsection

@section('script')
    <script>
        const saldo50k = document.getElementById('50k')
        const saldo100k = document.getElementById('100k')
        const saldo = document.getElementById('saldo')

        saldo50k.addEventListener('click', (e) => {
            e.preventDefault()
            saldo.value = '50000'
        })

        saldo100k.addEventListener('click', (e) => {
            e.preventDefault()
            saldo.value = '100000'
        })
    </script>

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
