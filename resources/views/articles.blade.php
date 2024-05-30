<x-layout title="Artikel">

    <div class="row gap-3">
        <x-header>
            Artikel
        </x-header>

        @foreach ($articles as $article)
            <div class="col-md-4 p-0">
                <article class="card mb-4">
                    <div class="card-body px-4 py-3">
                        <h3 class="card-title mb-3">{{ $article['title'] }}</h3>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><small>{{ $article['created_at'] }}</small>
                        </h6>
                        <p class="card-text mt-5 mb-3">{{ Str::limit($article['body'], 150) }}</p>
                        <a href="/articles/{{ $article['slug'] }}"
                            class="card-link link-offset-2 link-underline link-underline-opacity-0 fw-medium">READ
                            MORE <span class="fs-4">&raquo;</span></a>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
</x-layout>
