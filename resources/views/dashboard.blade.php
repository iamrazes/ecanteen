@extends('layouts.admin')

@section('title')
    <title>eCanteen - Admin Dashboard</title>
@endsection

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row pt-8">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>USER</h3>

                            <p>Database</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ route('users') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>PRODUCT</h3>

                            <p>Database</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <a href="{{ route('products') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>POST</h3>

                            <p>Content</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-feather"></i>
                        </div>
                        <a href="{{ route('posts') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>SUBMISSION</h3>

                            <p>Content</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <a href="{{ route('submissions') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
