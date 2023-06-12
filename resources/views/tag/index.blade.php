@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Теги</h1>
            <section class="featured-posts-section">
                <h3 class="mb-5">Оберіть тег або теги щоб відсортувати пости за тегом або тегами</h3>
                <form action="{{ route('tag.post.index') }}" method="GET">
                    <div class="row">
                        @foreach($tags as $tag)
                            <div class="col-md-3 mb-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" id="tag_{{ $tag->id }}">
                                    <label class="form-check-label ml-2" for="tag_{{ $tag->id }}">{{ $tag->title }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Відфільтрувати</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>
@endsection
