@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content mt-5">
            <div class="container-fluid">
                <h1>Добавить новый маркер</h1>
                <!-- Форма создания нового маркера -->
                <form action="{{ route('admin.marker.store') }}" method="POST" class="col-4">
                    @csrf
                    <div class="form-group">
                        <label for="title">Заголовок</label>
                        <input type="text" class="form-control" name="title" id="title" required>
                        @error('title')
                        <div class="text-danger">Введіть заголовок</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="summernote" required>{{ old('description') }}</textarea>
                        @error('description')
                        <div class="text-danger">Введите описание</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lat">Широта</label>
                        <input type="text" class="form-control" name="lat" id="lat" required>
                        @error('lat')
                        <div class="text-danger">Введіть широту</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lng">Долгота:</label>
                        <input type="text" class="form-control" name="lng" id="lng" required>
                        @error('lng')
                        <div class="text-danger">Введіть довготу</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="post">Пости</label>
                        <select name="post_id" id="post" class="form-control">
                            @foreach($posts as $post)
                                <option value="{{ $post->id }}">{{ $post->title }}</option>
                            @endforeach
                        </select>
                        @error('post_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Сохранить">
                </form>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
