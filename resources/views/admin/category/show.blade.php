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
                                <td>{{$category->id}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Ім`я</th>
                                <td>{{$category->title}}</td>
                                <td><a href="{{ route('admin.category.edit', $category->id) }}"><i class="fas fa-pencil-alt"></i></a></td>
                                <td>
                                    <form action="{{ route('admin.category.delete', $category->id) }}" method="POST">
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
