@foreach ($marketPlaces as $marketplace)
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 marketplace-item" data-name="{{ $marketplace->name }}"
        data-content="{{ $marketplace->content_text }}">
        <!-- Blog Card Container -->
        <div class="blog-card">
            <a style="text-decoration: none" href="{{ $marketplace->link }}" target="_blank">
            <div class="blog-card-img">
                @if (strpos($marketplace->image, 'https') === 0)
                    <!-- Check if the image is an external URL -->
                    <img src="{{ $marketplace->image }}" alt="" class="img-fluid" />
                @else
                    <img src="{{ asset('storage/' . $marketplace->image) }}" alt="" class="img-fluid" />
                @endif
            </div>
            </a>
            <div class="blog-card-body">
                <div class="blog-kate">
                    Kategorie:
                    @if ($marketplace->category1_name)
                        <span class="blog-kate">{{ $marketplace->category1_name }}</span>
                    @endif
                    @if ($marketplace->category2_name)
                        <span class="blog-kate">{{ $marketplace->category2_name }}</span>
                    @endif
                    @if ($marketplace->category3_name)
                        <span class="blog-kate">{{ $marketplace->category3_name }}</span>
                    @endif
                    @if ($marketplace->category4_name)
                        <span class="blog-kate">{{ $marketplace->category4_name }}</span>
                    @endif
                </div>
                <div class="blog-card-heading">
                    {{ $marketplace->name }} <!-- Dynamically display marketplace name -->
                </div>
                <div class="blog-card-sub-heading">
                    {{ Str::limit($marketplace->content_text, 150) }}
                    <!-- Limit the content text for a preview -->
                </div>
            </div>
            <a style="text-decoration: none" href="{{ $marketplace->link }}" target="_blank">
                <button class="blog-card-btn">Weiterlesen</button>
            </a>
        </div>
    </div>
@endforeach
