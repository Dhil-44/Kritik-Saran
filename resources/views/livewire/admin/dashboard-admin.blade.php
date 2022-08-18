<div class="row">
    <div class="col-12 col-sm-6 col-md-4">
        <a class="info-box mb-3 text-dark" href="{{ route('user-tables') }}">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number">{{ __($users) }}</span>
            </div>
            <!-- /.info-box-content -->
        </a>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-4">
        <a class="info-box text-dark" href="{{ route('submission-tables') }}">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Submissions</span>
                <span class="info-box-number">
                    {{ __($subms )}}
                </span>
            </div>

        </a>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
        <a class="info-box text-dark" href="{{ route('news-tables') }}">
            <span class="info-box-icon bg-green elevation-1"><i class="fas fa-newspaper"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">News</span>
                <span class="info-box-number">
                    {{ __($news) }}
                </span>
            </div>
        </a>
    </div>

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>
</div>
