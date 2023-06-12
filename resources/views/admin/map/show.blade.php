@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content mt-5">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <div class="row">
                    <div class="col-6">
                        <table class="table table-dark">
                            <tbody>
                            <tr>
                                <th scope="row">ID</th>
                                <td>{{ $marker->id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Заголовок</th>
                                <td>{{ $marker->title }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Опис</th>
                                <td>{{ $marker->description }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Широта</th>
                                <td>{{ $marker->lat }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Довгота</th>
                                <td>{{ $marker->lng }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Пост</th>
                                <td>
                                    @foreach($posts as $post)
                                    @if ($marker->post_id == $post->id)
                                        {{ $post->title }}
                                    @endif
                                    @endforeach
                                </td>                            </tr>
                            <tr>
                                <td>
                                    <a href="{{ route('admin.marker.edit', $marker->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.marker.delete', $marker->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 bg-transparent">
                                            <i class="fas fa-trash text-danger" role="button"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
