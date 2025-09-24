<section class="news">
    <div class="container d-flex flex-column">
        <div class="news-header">
            <h2 class="text-uppercase mb-0">Новости</h2>
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
                <img class="cover" src="{{ $new['image'] }}" alt="">
                <div class="flex-grow-1 d-flex flex-column align-items-start justify-content-between">
                    <h3>{{ $new['name'] }}</h3>
                    <p class="publicdate">
                        {{ date("d.m.Y", strtotime($new['published'])) }}
                    </p>
                </div>
            </a>    
            @endforeach
        </div>
        <div class="d-block d-md-none">
            <a href="/news" class="btn btn-trnsp-black w-100">Все новости</a>
        </div>
    </div>
</section>

