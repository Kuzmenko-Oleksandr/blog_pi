@extends('personal.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $data['likesCount'] }}<sup style="font-size: 20px"></sup></h3>

                            <p>Liked posts</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-heart"></i>
                        </div>
                        <a href="{{ route('personal.like.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $data['commentsCount'] }}</h3>

                            <p>Comments</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-comment"></i>
                        </div>
                        <a href="{{ route('personal.comment.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section>
</div>
<!-- /.content-wrapper -->
@endsection
