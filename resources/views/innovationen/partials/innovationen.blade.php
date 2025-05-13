@foreach ($innovationen as $innovation)
    <div class="col-lg-6 marketplace-item mt-5" data-name="{{ $innovation->name }}" data-content="{{ $innovation->data }}">
        <div class="blog-card" style="width: 94%;">
            <a style="text-decoration: none" href="{{ route('innovationen.show', $innovation->slug) }}">
                <div class="blog-card-img">
                    <img src="{{ Storage::url($innovation->image) }}" alt="" />
                </div>
                <div class="blog-card-body">
                    <span class="innovation-date">{{ \Carbon\Carbon::parse($innovation->innovation_date)->format('d.m.Y') }}</span>
                    <div class="blog-kate">
                        Kategorie:
                        @if ($innovation->category1_name)
                            <span class="blog-kate">{{ $innovation->category1_name }}</span>
                        @endif

                        @if ($innovation->category2_name)
                            <span class="blog-kate">{{ $innovation->category2_name }}</span>
                        @endif

                        @if ($innovation->category3_name)
                            <span class="blog-kate">{{ $innovation->category3_name }}</span>
                        @endif

                        @if ($innovation->category4_name)
                            <span class="blog-kate">{{ $innovation->category4_name }}</span>
                        @endif
                    </div>

                    <div class="blog-card-heading">
                        {{ $innovation->title }}
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
