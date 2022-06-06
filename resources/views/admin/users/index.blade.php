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
<div class="content-header">

    @if (session('status'))
        <div class="alert alert-danger text-white alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            {{-- <h5><i class="icon fas fa-check"></i> Alert!</h5> --}}
            {{ session('status') }}
        </div>
    @endif

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">USERS</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Database</li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- /.card -->

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Database for Users</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="{{ route('admin.users.create') }}" class="btn btn-success mb-2"><i
                            class="fas fa-plus-square mr-2"></i>Add Users</a>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Nickname</th>
                                <th>Email</th>
                                <th>NIM</th>
                                <th>Saldo</th>
                                <th>Role</th>
                                <th>Created at</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dtusers as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->nickname }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->nim }}</td>
                                    <td>{{ $item->saldo }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td class="flex row">
                                        <form action="{{ route('admin.users.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="ml-2 btn btn-danger mt-1" style="width:45px" type="submit"><span class="fas fa-trash"></span></button>
                                        </form>
                                        <a href="{{ route('admin.users.edit', $item->id) }}" class="btn btn-secondary ml-2 mt-1" style="width:45px" type="submit"><span class="fas fa-edit"></a>
                                        <a href="" class="btn btn-primary ml-2 mt-1" style="width:45px" type="submit"><span class="fas fa-eye"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Nickname</th>
                                <th>Email</th>
                                <th>NIM</th>
                                <th>Saldo</th>
                                <th>Role</th>
                                <th>Created at</th>
                                <th>Tools</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
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
