<x-layout title="Video">
    <section class="video">
        <div class="container my-5">
            <div class="row gap-3">
                {{-- @foreach ($videos as $video)
                    <div class="col-md-4 p-0">
                        <article class="card mb-4">
                            <iframe class="rounded-3" src="{{ $video->url }}" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="card-body px-4 py-3">
                                <h3 class="card-title mb-3">{{ $video->title }}</h3>
                                <h6 class="card-subtitle mb-2 text-body-secondary">
                                    <small>{{ $video->created_at }}</small>
                                </h6>
                                <p class="card-text mt-5 mb-3">{{ Str::limit($video->description, 150) }}</p>
                                <a href="/articles/{{ $video->slug }}"
                                    class="card-link link-offset-2 link-underline link-underline-opacity-0 fw-medium">READ
                                    MORE <span class="fs-4">&raquo;</span></a>
                            </div>
                        </article>
                    </div>
                @endforeach --}}

                <div class="col-md-4">
                    <div class="card">
                        <iframe class="rounded-3" height="216"
                            src="https://www.youtube.com/embed/23eYUHRvUGQ?si=2tkh7K3pzfq0yrWV"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="card-body">
                            <p class="card-text">Gizi seimbang merupakan susunan pangan sehari-hari dengan mengandung
                                zat gizi pada jumlah dan jenis yang sesuai dengan kebutuhan tubuh seseorang</p>

                            <a href="#"
                                class="card-link link-offset-2 link-underline link-underline-opacity-0 fw-medium">READ
                                MORE <span class="fs-4">&raquo;</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
