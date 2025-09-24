<section class="news d-block d-md-none">
    <div class="container">
        <div class="news-header">
            <h2 class="text-center">Новости</h2>
        </div>
        <div class="news-block">
            <?php
            $news = \App\Models\News::where('category', '=', 1)
                ->where('archive', '=', 0)
                ->orderBy('published', 'DESC')
                ->limit(3)
                ->get()
            ?>
            @foreach ($news as $new)
            <a href="/news{{ $new['link_title'] }}" class="news-item d-flex flex-column">
                <div class="cover">
                    <img src="{{ $new['image'] }}" alt="">
                </div>
                <div class="flex-grow-1 d-flex flex-column align-items-start justify-content-between">
                    <h3>{{ $new['name'] }}</h3>
                    <p class="publicdate">
                        {{ date("d.m.Y", strtotime($new['published'])) }}
                    </p>
                </div>
            </a>
                @endforeach
        </div>
        <div>
            <a href="/news" class="btn btn-trnsp-black">Все новости</a>
        </div>
    </div>
</section>

