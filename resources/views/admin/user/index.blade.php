@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-auto mb-3">
                        <a href="{{route('admin.user.create')}}" type="button" class="btn btn-block btn-primary">Додати користувача</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Ім`я користувача</th>
                                <th scope="col">Ел-пошта користувача</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><a href="{{ route('admin.user.show', $user->id) }}"><i
                                                class="far fa-eye"></i></a></td>
                                    <td><a href="{{ route('admin.user.edit', $user->id) }}"><i
                                                class="fas fa-pencil-alt"></i></a></td>
                                    <td>
                                        <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash text-danger" role="button"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
