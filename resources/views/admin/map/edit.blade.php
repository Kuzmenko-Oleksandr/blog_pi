@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content mt-5">
            <div class="container-fluid">
                <h1>Редагувати маркер на карті</h1>
                <!-- Form for editing the marker -->
                <form action="{{ route('admin.marker.update', $marker->id) }}" method="POST" class="col-4">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Заголовок</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $marker->title }}" required>
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Опис</label>
                        <textarea name="description" id="summernote" class="form-control" required>{{ $marker->description }}</textarea>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lat">Широта</label>
                        <input type="text" class="form-control" name="lat" id="lat" value="{{ $marker->lat }}" required>
                        @error('lat')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lng">Довгота</label>
                        <input type="text" class="form-control" name="lng" id="lng" value="{{ $marker->lng }}" required>
                        @error('lng')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="post">Пост</label>
                        <select name="post_id" id="post" class="form-control">
                            @foreach($posts as $post)
                                <option value="{{ $post->id }}" @if($marker->post_id == $post->id) selected @endif>{{ $post->title }}</option>
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
@endsection
