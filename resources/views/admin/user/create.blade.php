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
                    <h6>Додавання користувача</h6>
                </div>
                <form action="{{ route('admin.user.store') }}" method="POST" class="col-4">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Ім`я користувача">
                        @error('name')
                        <div class="text-danger">Використовуйте дане поле</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Ел-пошта користувача">
                        @error('email')
                        <div class="text-danger">Використовуйте дане поле</div>
                        @enderror
                    </div>
                    <div class="form-group w-50">
                        <label>Оберіть роль користувача</label>
                        <select name="role" id="" class="form-control">
                            @foreach($roles as $id => $role)
                                <option value="{{ $id }}" {{ $id == old('role') ? 'selected' : '' }}> {{ $role }}</option>
                            @endforeach
                        </select>
                        @error('role')
                        <div class="text-danger">Використовуйте дане поле</div>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Додати користувача">
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
