@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content mt-5">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <h6>Редагування тегу</h6>
                </div>
                <form action="{{ route('admin.tag.update', $tag->id) }}" method="POST" class="col-4">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Назва тегу"
                               value="{{$tag->title}}">
                        @error('title')
                        <div class="text-danger">Використовуйте дане поле</div>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Редагування">
                </form>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
