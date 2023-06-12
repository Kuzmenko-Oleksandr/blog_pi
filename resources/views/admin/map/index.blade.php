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
                        <h6>Список маркерів карти</h6>
                    </div>
                    <div class="row">
                        <div class="col-auto mb-3">
                            <a href="{{ route('admin.marker.create') }}" type="button" class="btn btn-primary">Додати маркер на карту</a>
                        </div>
                    </div>
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Заголовок</th>
                            <th scope="col">Опис</th>
                            <th scope="col">Широта</th>
                            <th scope="col">Довгота</th>
                            <th scope="col">Пост</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($markers as $marker)
                            <tr>
                                <th scope="row">{{ $marker->id }}</th>
                                <td>{{ $marker->title }}</td>
                                <td>{{ Str::limit($marker->description, 100) }}</td>
                                <td>{{ $marker->lat }}</td>
                                <td>{{ $marker->lng }}</td>
                                <td>
                                    @foreach($posts as $post)
                                        @if ($marker->post_id == $post->id)
                                            {{ $post->title }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('admin.marker.show', $marker->id) }}" class="far fa-eye"></a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.marker.edit', $marker->id) }}" class="fas fa-pencil-alt"></a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.marker.delete', $marker->id) }}" method="POST" class="d-inline">
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
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
