<!DOCTYPE html>
<html lang="en">
@include('components.header.head')

<body>
    <div class="header-container service-header-bg"
        style="
        background-image: url('{{ asset('assets/Images/Newundrateger_header_bg.svg') }}') !important;
      ">
        @include('components.header.header')
        <div class="service-header-content">
            <span>Aktuelles und praktische Tipps rund um Pflege und Betreuung</span>
            <div>News und Ratgeber</div>
        </div>
    </div>

    <!-- ########################### NEWS UND RATGEBER SECTION 1 ########################### -->

    <div class="newsund-ratgeber-section1">
        <div class="newsund-ratgeber-btn-top">
            <div class="newsund-btn1 newsund-btn">
                <button><a href="{{ url('/') }}">News</a></button>
            </div>
            <div class="newsund-btn2 newsund-btn">
                <button>
                    <a style="color: #b22222" href="{{ route('ratgeber') }}">Ratgeber</a>
                </button>
            </div>
        </div>

        <div class="newsund-ratgeber-btn-bottom">
            <div style="display: flex; gap: 0.7rem">
                <div class="newsund-btn3 newsund-btn">
                    <a href="{{ route('achrichten') }}">
                        <button id="news-bottom-btn1 " class="news-und-btns news-active-btn">
                            Ärztezeitung
                        </button>
                    </a>
                </div>
                <div class="newsund-btn4 newsund-btn">
                    <a href="{{ route('nachrichten') }}">
                        <button class="news-und-btns" id="news-bottom-btn2">
                            Ärztenachrichtendienst
                        </button>
                    </a>
                </div>
            </div>
            <div class="newsund-btn5 newsund-btn text-center">
                <a href="{{ route('nachrichten.bundesministerium') }}">
                    <button class="news-und-btns" id="news-bottom-btn3">
                        Bundesministerium für Gesundheit (BMG)
                    </button>
                </a>
            </div>
        </div>
    </div>

    <!-- ########################### NEWS UND RATGEBER SECTION 2 ########################### -->
    <div class="newsund-section2">
        <!-- ######################## Ärztezeitung CONTENT ######################## -->
        <div class="newund-section2-row row" id="newsund-section2-content1">
            <div class="col-12">
                <div class="row">
                    @foreach ($news as $new)
                        <div class="col-lg-4">
                            <div class="newsund-section2-card">
                                <div class="newsund-section2-card-heading">
                                    {{ $new['title'] }}
                                </div>
                                <div class="newsund-section2-card-content">
                                    {{ $new['description'] }}
                                </div>
                                <div class="newsund-section2-card-bottom">
                                    <div class="newsund-section2-card-date">
                                        Quelle:
                                        www.aerztezeitung.de
                                    </div>
                                    <div>
                                        <button>
                                            <a href="{{ $new['link'] }}" target="_blank"></a>Weiterlesen
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>

    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Newundrateger_bottom.svg') }}" alt="" />
    </div>
    @include('components.footer.footer_second')

</body>

</html>
