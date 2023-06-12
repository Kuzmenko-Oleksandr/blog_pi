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
                    <h6>Додавання посту</h6>
                </div>
                <form action="{{ route('admin.post.store') }}" method="POST" class="col-4" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Назва посту" value="{{ old('title') }}">
                        @error('title')
                        <div class="text-danger">Використовуйте дане поле</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="content" id="summernote">{{ old('content') }}</textarea>
                        @error('content')
                        <div class="text-danger">Використовуйте дане поле</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Фото превью</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="preview_image">
                                <label  class="custom-file-label"> Оберіть зображення для превью</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Додати фото</span>
                            </div>
                        </div>
                        @error('preview_image')
                        <div class="text-danger">Використовуйте дане поле</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Головне фото</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="main_image">
                                <label class="custom-file-label">Оберіть головне зображення</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Додати фото</span>
                            </div>
                        </div>
                        @error('main_image')
                        <div class="text-danger">Використовуйте дане поле</div>
                        @enderror
                    </div>
                    <div class="form-group w-50">
                        <label>Оберіть категорію</label>
                        <select name="category_id" id="" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{ $category->title }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="text-danger">Використовуйте дане поле</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Оберіть тег або теги</label>
                        <select data-placeholder="Оберіть тег або теги" name="tag_ids[]" multiple="multiple" id="" class="select2 w-100">
                            @foreach($tags as $tag)
                                <option {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                        @error('tag_ids')
                        <div class="text-danger">Використовуйте дане поле</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Додати пост" class="btn btn-primary">
                    </div>
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
