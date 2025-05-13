<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PflegePur - Ihr Partner für umfassende Pflege und Gesundheit </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <script src="{{ asset('assets/index.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        
<meta name="google-adsense-account" content="ca-pub-8218213656808471">




<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://pflegepur.matomo.cloud/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src='//cdn.matomo.cloud/pflegepur.matomo.cloud/matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->


<style>
   

    .blog-kate span:not(:last-child)::after {
        content: ', ';
    }
    </style>        

</head>
    
<body>
<!-- 
    <div class="header-container service-header-bg blog-header-bg">
       


        <div class="service-header-content">
            <span>Tipps, Ratgeber und aktuelle Informationen für Pflegebedürftige und Angehörige</span>
            <div>Blog</div>
        </div>
    </div>
    
-->


@if ($partnerid == 'l-und-m')
    @php 
        $bgcolor="#F8E9E9";
    @endphp
@elseif ($partnerid == 'hameln-pyrmont')
    @php 
        $bgcolor="#E0EDF5";
    @endphp
@else
    @php 
        $bgcolor="#ffffff";
    @endphp
@endif


    <div class="service-section1-container" style="text-align:center;padding-top:0px;margin-top:20px;background-color:{{$bgcolor;}};">    
        
    <div>
                <a href="https://pflegepur.de" target="_blank"><img class="header-img" src="https://pflegepur.de/assets/Images/pflegepur_logo.png" alt="Header Image" style="width:30%;" /></a>
    </div>
        Unser Blog bietet Ihnen wertvolle Einblicke, praxisnahe Informationen und inspirierende Geschichten aus dem
        Alltag der Pflege. <br>Gemeinsam möchten wir die Pflege menschlicher, einfacher und verständlicher gestalten.
        Begleiten Sie uns auf diesem Weg!</span>
    </div>


 @if ($partnerid=='l-und-m' OR $partnerid=='hameln-pyrmont') 

    <div class="blog-section1-container">
        <div class="row">                        
            <div class="col-lg-4 blog-left" style="background-color:{{$bgcolor;}};">
                <div class="blog-search-container" style="background-color:{{$bgcolor;}};">                                                    
                    <div class="blog-search-sub-container">
                        <input type="search" id="searchInput" placeholder="Suchbegriff"
                            onkeyup="filterMarketplaces()" />
                        <img src="{{ asset('assets/Images/Blog_search_icon.svg') }}" alt="" />
                    </div>

                    <div
                        style="
                display: flex;
                justify-content: space-between;
                width: 100%;
                align-items: center;
                margin-top: 2rem;
              ">
                        <div class="blog-search-main-heading">Kategorien</div>
                        <div class="d-flex d-lg-none">
                            <img class="hide-show-btn" style="cursor: pointer"
                                src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="" />
                        </div>
                    </div>
                    <div class="hide-show-content" id="categoryList">
                        <div class="blog-search-sub-heading category-item">
                            <a style="text-decoration: none;color:black" href="{{ route('partner.blog', ['partnerid' => $partnerid]) }}"
                                class="{{ request()->routeIs('partner.blog') && !request()->category ? 'active' : '' }}">
                                Alle</a>
                        </div>
                        @foreach ($testCategories as $category)
                            <div class="blog-search-sub-heading category-item">
                                <a style="text-decoration: none;color:black"
                                    href="{{ route('partner.blog', ['category' => $category['name'], 'partnerid' => $partnerid]) }}"
                                    class="{{ request()->routeIs('partner.blog') && request()->category === $category['name'] ? 'active' : '' }}">

                                    {{ $category['name'] }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-3">


                <div class="row" id="marketplace-items">
                    @forelse ($blogs as $blog)
                        <div class="col-lg-6 marketplace-item" data-name="{{ $blog->title }}"
                            data-content="{{ $blog->data }}">
                            <div class="blog-card" style="width: 94%;">
                                <a style="text-decoration: none" href="{{ route('partner.show', [$blog->slug, 'partnerid' => $partnerid]) }}">
                                    <div class="blog-card-img">
                                        <img src="{{ Storage::url($blog->image) }}" alt="" />
                                    </div>
                                    <div class="blog-card-body">
                                        <span
                                            class="blog-date">{{ \Carbon\Carbon::parse($blog->blog_date)->format('d.m.Y') }}</span>
                                        <div class="blog-kate">
                                            Kategorie:
                                        @if ($blog->category1_name)
                                            <span class="blog-kate">{{ trim($blog->category1_name) }}</span>
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
                                            
                                            
                                            
<!--                                            @if ($blog->category1_name)
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
-->                                            
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

                                    <button class="blog-card-btn mb-5">Weiterlesen</button>
                                </a>
                            </div>
                        </div>

                    @empty
                        No Blogs Available
                    @endforelse



                </div>


                <div class="col-8 mx-auto">
                    @if ($blogs->hasMorePages())
                        <button id="load-more" data-next-page="{{ $blogs->currentPage() + 1 }}"
                            class="blog-card-btn2  text-center mt-5">Mehr laden</button>
                    @endif
                </div>




            </div>
        </div>
    </div>
    
 @endif     
    
    
    <!--
    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Blog_bottom.svg') }}" alt="" />
    </div>
    -->





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#load-more').on('click', function() {
                var nextPage = $(this).data('next-page');
                var url = '{{ route('blogs.loadMore') }}?page=' + nextPage;

                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        // Append the new items to the existing list
                        $('#marketplace-items').append(response.blogs);

                        // Update the "Load More" button
                        if (response.nextPage) {
                            $('#load-more').data('next-page', response.nextPage);
                        } else {
                            $('#load-more').remove(); // Remove the button if no more pages
                        }
                    },
                    error: function(error) {
                        console.log(error);
                        alert('Error loading more items.');
                    }
                });
            });
        });
    </script>


    <script>
        function filterMarketplaces() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase(); // Get input value
            const marketplaceItems = document.querySelectorAll('.marketplace-item'); // Get all marketplace items

            marketplaceItems.forEach(function(item) {
                const name = item.getAttribute('data-name').toLowerCase(); // Get marketplace name
                const content = item.getAttribute('data-content').toLowerCase(); // Get marketplace content
                // const categories = item.getAttribute('data-categories').toLowerCase(); // Get marketplace categories

                // If search term is found in name or content, show the item, otherwise hide it
                if (name.indexOf(searchInput) > -1 || content.indexOf(searchInput) > -1) {
                    item.style.display = ''; // Show the marketplace item
                } else {
                    item.style.display = 'none'; // Hide the marketplace item
                }
            });
        }
    </script>
</body>

</html>
