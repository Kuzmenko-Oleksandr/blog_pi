@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Категорії</h1>
            <section class="featured-posts-section">
                <h3>Оберіть категорію за якою будуть відсортовані пости</h3>
                <ul class="list-group">
                    @foreach($categories as $category)
                        <li class="list-group-item">
                            <a href="{{ route('category.post.index', $category->id) }}">{{ $category->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </section>
        </div>
    </main>
@endsection
