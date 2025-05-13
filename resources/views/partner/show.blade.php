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

    <!-- ############################ KATEGORIE CONTENT ######################### -->

    <div class="kategorie-content" style="margin-top:0px;padding-top:0px;">

    <div class="header-container service-header-bg blog-header-bg" style="margin:0px;padding:0px;height:600px;background-size:none;background-position:none;">
        <div class="header-top-image-lg" style="height:500px;top:20px;">
            @if ($blog->image)
                <img class="img-fluid" src="{{ Storage::url($blog->image) }}" alt="Blog Image" style="margin:0px;padding:0px;height:80%;object-fit:contain;"/>
            @endif
        </div>

        <!-- Mobile Image -->
        <div class="header-top-image-sm d-block d-md-none" style="height:500px;top:20px;">
            @if ($blog->image)
                <img class="img-fluid" src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" />
            @endif
        </div>
    </div>
    
    
    
        <span class="kategorie-date">{{ \Carbon\Carbon::parse($blog->blog_date)->format('d.m.Y') }}</span>
        <div class="kategorie">Kategorie:                
        
            @if ($blog->category1Model?->name)
                <span class="blog-kate">{{ $blog->category1Model->name }}</span>
            @endif

            @if ($blog->category2Model?->name)
                <span class="blog-kate">{{ $blog->category2Model->name }}</span>
            @endif
            @if ($blog->category3Model?->name)
                <span class="blog-kate">{{ $blog->category3Model->name }}</span>
            @endif
            @if ($blog->category4Model?->name)
                <span class="blog-kate">{{ $blog->category4Model->name }}</span>
            @endif

        </div>

        <div class="kategorie-main-heading">
            {{ $blog->title }} </div>
        <div class="kategorie-data">
            {!! $blog->data !!} <!-- Render HTML content -->

        </div>


        <div class="kategorie-btn">
            <a href="{{ route('partner.blog', ['partnerid' => $partnerid]) }}">
                <button>Zurück</button>
            </a>
        </div>
    </div>


    <!-- ######################### FOOTER SECTION ######################### -->
    
</body>

</html>
