<div>
    @if ($posts->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 rounded-md">
            @foreach ($posts as $post)
                <div>
                    <a href="{{ route('posts.show',  ['post' => $post, 'user' => $post->user]) }}">
                        <img class="rounded-xl shadow-md" src="{{ asset('uploads') . '/' . $post->imagen}}" alt="imagen del post {{$post->titulo}}">
                    </a>
                </div>
            @endforeach
        </div>
        <div class="m-10">
            {{ $posts->links() }}
        </div>
    @else
        <h1 class="text-center">Sigue a alguien para mostrar sus posts</h1>
    @endif
</div>