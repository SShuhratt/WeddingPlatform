<div class="card h-100">
    @if ($image)
        <img src="{{ $image }}" class="card-img-top" alt="{{ $title }}">
    @endif
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        @if ($description)
            <p class="card-text">{{ Str::limit($description, 100) }}</p>
        @endif
        @if ($price)
            <p class="text-success fw-bold">${{ $price }}</p>
        @endif
        @if ($url)
            <a href="{{ $url }}" class="btn btn-primary" target="_blank">Details</a>
        @endif
    </div>
</div>
