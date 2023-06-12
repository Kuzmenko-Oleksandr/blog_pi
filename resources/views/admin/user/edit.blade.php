@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h6>Редагування користувача</h6>
                    </div>
                    <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="col-4">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Ім`я користувача"
                                   value="{{$user->name}}">
                            @error('name')
                            <div class="text-danger">Використовуйте дане поле</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Ел-пошта користувача"
                                   value="{{$user->email}}">
                            @error('email')
                            <div class="text-danger">Використовуйте дане поле</div>
                            @enderror
                        </div>
                        <div class="form-group w-50">
                            <label>Обреріть роль</label>
                            <select name="role" id="" class="form-control">
                                @foreach($roles as $id => $role)
                                    <option value="{{ $id }}"
                                        {{ $id == $user->role ? 'selected' : '' }}>
                                        {{ $role }}
                                    </option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="text-danger">Використовуйте дане поле</div>
                            @enderror
                        </div>
                        <div class="form-group w-50">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Редагувати користувача">
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
