<x-layout title="{{ $article['title'] }}">
    <nav class="my-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb fw-medium">
            <li class="breadcrumb-item" aria-current="page"><a href="/"
                    class="link-offset-2 link-underline link-underline-opacity-0 text-body-tertiary">Beranda</a>
            </li>
            <li class="breadcrumb-item" aria-current="page"><a href="/articles"
                    class="link-offset-2 link-underline link-underline-opacity-0 text-body-tertiary">Artikel</a>
            </li>
            <li class="breadcrumb-item text-primary" aria-current="page">
                {{ $article['title'] }}
            </li>
        </ol>
    </nav>

    <article class="card">
        <div class="card-body px-4 py-3">
            <h2 class="card-title text-center mb-3">{{ $article['title'] }}</h2>
            <p class="card-subtitle text-center  mb-2 text-body-secondary"><small>{{ $article['created_at'] }} |
                    {{ $article['author'] }}</small></p>
            <p class="card-text my-5">{{ $article['body'] }}</p>
        </div>
    </article>

</x-layout>
