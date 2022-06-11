@extends('layouts.admin')

@section('title')
    <title>eCanteen - View a User</title>
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
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Database</li>
                        <li class="breadcrumb-item active">Users - View</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="card card-primary card-outline">
            <h3 class="mt-3 ml-4 card-title">You are viewing <span
                    class="text-primary text-bold">{{ $dtusers->name }}</span></h3>
            <div class="card-body">

                <div action="{{ route('admin.users.view', $dtusers->id) }}" class="mt-3 ">

                    <div>
                        <div class="d-flex justify-content-between text-lg border px-2 py-1 rounded my-2">Name : <span
                                class="text-bold">{{ $dtusers->name }}</span></div>
                        <div class="d-flex justify-content-between text-lg border px-2 py-1 rounded my-2">Nickname : <span
                                class="text-bold">{{ $dtusers->nickname }}</span></div>
                        <div class="d-flex justify-content-between text-lg border px-2 py-1 rounded my-2">NIM : <span
                                class="text-bold">{{ $dtusers->nim }}</span></div>
                        <div class="d-flex justify-content-between text-lg border px-2 py-1 rounded my-2">Email : <span
                                class="text-bold">{{ $dtusers->email }}</span></div>
                        <div class="d-flex justify-content-between text-lg border px-2 py-1 rounded my-2">Saldo : <span
                                class="text-bold">Rp.
                                {{ number_format($dtusers->saldo, 0, '.', '.'), $dtusers->saldo }}</span></div>
                        <div class="d-flex justify-content-between text-lg border px-2 py-1 rounded my-2">Nomor Telp. :
                            <span class="text-bold">{{ $dtusers->phone }}</span></div>
                        <div class="d-flex justify-content-between text-lg border px-2 py-1 rounded my-2">Fakultas : <span
                                class="text-bold">{{ $dtusers->fakultas }}</span></div>
                        <div class="d-flex justify-content-between text-lg border px-2 py-1 rounded my-2">Jurusan : <span
                                class="text-bold">{{ $dtusers->jurusan }}</span></div>
                        <div class="d-flex justify-content-between text-lg border px-2 py-1 rounded my-2">Semester : <span
                                class="text-bold">{{ $dtusers->semester }}</span></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
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
