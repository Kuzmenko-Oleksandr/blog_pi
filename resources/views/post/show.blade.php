@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up"> {{$post->title}} </h1>
            @if(count($post->comments) == 1)
            <p class="edica-blog-post-meta" data-aos="fade-up"
               data-aos-delay="200">{{ $date->translatedFormat('F') }} {{$date->day}}, {{$date->year}}
                • {{$date->format('H:i')}} • {{$post->comments->count()}} коментар</p>
            @else
                <p class="edica-blog-post-meta" data-aos="fade-up"
                   data-aos-delay="200">{{ $date->translatedFormat('F') }} {{$date->day}}, {{$date->year}}
                    • {{$date->format('H:i')}} • {{$post->comments->count()}} коментарі</p>
            @endif
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('storage/' . $post->main_image) }}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        {!!  $post->content !!}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">

                    <section class="py-3">
                        @auth()
                            <form action="{{ route('post.like.store', $post->id) }}" method="post">
                                @csrf
                                <button type="submit" class="border-0 bg-transparent">

                                    @if (auth()->user()->likedPosts->contains($post->id) )
                                        <i class="fas fa-heart"></i>
                                    @else
                                        <i class="far fa-heart"></i>
                                    @endif

                                </button>
                            </form>
                        @endauth
                        @guest()
                            <div>
                                <span> {{ $post->liked_users_count }} </span>
                                <i class="far fa-heart"></i>
                            </div>
                        @endguest

                    </section>
                    <section class="comment-list mb-5">
                        @if(count($post->comments) == 1)
                            <h2 class="section-title mb-5" data-aos="fade-up">Коментар ({{ $post->comments->filter(function($comment) { return $comment->user !== null; })->count() }})</h2>
                        @else
                            <h2 class="section-title mb-5" data-aos="fade-up">Коментарі ({{ $post->comments->filter(function($comment) { return $comment->user !== null; })->count() }})</h2>
                        @endif
                        @foreach($post->comments as $comment)
                            @if ($comment->user)
                                <div class="comment-text mb-3">
                                    <span class="username">
                                        <div>{{ $comment->user->name }}</div>
                                        <span
                                            class="text-muted float-right">{{ $comment->dateAsCarbon->locale('uk')->diffForHumans() }}</span>
                                    </span>
                                    {{ $comment->message }}
                                </div>
                            @endif
                        @endforeach


                    </section>
                    @auth()
                        <section class="comment-section">
                            <h2 class="section-title mb-5" data-aos="fade-up">Написати коментар</h2>
                            <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12" data-aos="fade-up">
                                        <textarea name="message" id="comment" class="form-control"
                                                  placeholder="Твій коментар" rows="10"></textarea>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12" data-aos="fade-up">
                                        <input type="submit" value="Відправити коментар" class="btn btn-warning">
                                    </div>
                                </div>
                            </form>
                        </section>
                    @endauth
                </div>
            </div>
        </div>
    </main>
@endsection
