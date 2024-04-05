@extends('admin.app')
@section('style')
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản Lý</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
          <h5 class="mb-2">Người Dùng</h5>
          <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Tổng Người Chơi</span>
                  <span class="info-box-number">{{ \DB::table('account')->count() }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-success"><i class="far fa-user"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Tổng Players</span>
                  <span class="info-box-number">{{ \DB::table('player')->count() }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
  
          <!-- =========================================================== -->
          <h5 class="mb-2">Bài Viết</h5>
          <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box shadow-none">
                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Tổng</span>
                  <span class="info-box-number">{{ \DB::table('web_posts')->count() }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box shadow-sm">
                <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
  
                <div class="info-box-content">
                    <span class="info-box-text">Đã Duyệt</span>
                    <span class="info-box-number">{{ \DB::table('web_posts')->whereStatus('1')->count() }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box shadow-lg">
                <span class="info-box-icon bg-danger"><i class="far fa-flag"></i></span>
  
                <div class="info-box-content">
                    <span class="info-box-text">Chờ Duyệt</span>
                    <span class="info-box-number">{{ \DB::table('web_posts')->whereStatus('0')->count() }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </section>
@endsection
