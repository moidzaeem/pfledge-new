@foreach ($blogs as $blog)
    <div class="col-lg-6 marketplace-item mt-5" data-name="{{ $blog->name }}" data-content="{{ $blog->data }}">
        <div class="blog-card" style="width: 94%;">
            <a style="text-decoration: none" href="{{ route('blogs.show', $blog->slug) }}">
                <div class="blog-card-img">
                    <img src="{{ Storage::url($blog->image) }}" alt="" />
                </div>
                <div class="blog-card-body">
                    <span class="blog-date">{{ \Carbon\Carbon::parse($blog->blog_date)->format('d.m.Y') }}</span>
                    <div class="blog-kate">
                        Kategorie:
                        @if ($blog->category1_name)
                            <span class="blog-kate">{{ $blog->category1_name }}</span>
                        @endif

                        @if ($blog->category2_name)
                            <span class="blog-kate">{{ $blog->category2_name }}</span>
                        @endif

                        @if ($blog->category3_name)
                            <span class="blog-kate">{{ $blog->category3_name }}</span>
                        @endif

                        @if ($blog->category4_name)
                            <span class="blog-kate">{{ $blog->category4_name }}</span>
                        @endif
                    </div>

                    <div class="blog-card-heading">
                        {{ $blog->title }}
                    </div>
                    <div class="blog-card-sub-heading">
                        Die Pflege von Menschen mit seltenen Erkrankungen stellt eine besondere
                        Herausforderung
                        dar, die oft über das hinausgeht, was in der allgemeinen Pflege gelehrt
                        und
                        erwartet
                        wird. Seltene Krankheiten sind oft komplex, erfordern spezialisierte
                        Pflege
                        und
                        haben
                        tiefgreifende Auswirkungen auf das Leben der Betroffenen und ihrer
                        Familien.
                        Dieser
                        Blogartikel beleuchtet die Herausforderungen und Besonderheiten der
                        Pflege
                        von
                        Menschen
                        mit seltenen Erkrankungen und zeigt auf, welche Rolle Pflegekräfte in
                        diesem
                        sensiblen
                        Bereich spielen.
                    </div>
                </div>

                <button class="blog-card-btn">Weiterlesen</button>
            </a>
        </div>
    </div>
@endforeach
