<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <a class="info-box mb-3 text-dark" href="{{ route('user-tables') }}">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number">{{ $users }}</span>
            </div>
            <!-- /.info-box-content -->
        </a>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <a class="info-box text-dark" href="{{ route('submission-tables') }}">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Submissions</span>
                <span class="info-box-number">
                    {{ $subms }}
                </span>
            </div>
            <!-- /.info-box-content -->
        </a>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number"></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number"></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

</div>
