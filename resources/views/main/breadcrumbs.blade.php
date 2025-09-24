@unless ($breadcrumbs->isEmpty())
    <div class="breadcrumbs d-flex align-items-center">
        @foreach ($breadcrumbs as $key => $breadcrumb)

            @if (!is_null($breadcrumb->url) && !$loop->last)
                @if($key != 0)
                    <div class="breadcrumbs_delimietr">/</div>
                @endif
                    <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
            @else
                @if($key != 0)
                    <div class="breadcrumbs_delimietr">/</div>
                @endif
                {{ $breadcrumb->title }}
            @endif

        @endforeach
    </div>
@endunless
