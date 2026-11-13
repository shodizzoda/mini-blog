<div class="post-preview">
    <a href="{{ route('post.show', [$post->category->slug, $post->slug]) }}">
        <h2 class="post-title">{{ $post->title }}</h2>
        <h3 class="post-subtitle">{{ $post->excerpt }}</h3>
    </a>
    <p class="post-meta">
        {{ $post->created_at->format('d.m.Y') }}
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />

