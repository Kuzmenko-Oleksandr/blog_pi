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
                    <h6>Додати категорію</h6>
                </div>
                <form action="{{ route('admin.category.store') }}" method="POST" class="col-4">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Ім`я">
                        @error('title')
                        <div class="text-danger">Використовуйте це поле</div>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Додати категорію">
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
