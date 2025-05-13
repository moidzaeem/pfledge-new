<!DOCTYPE html>
<html lang="en">
@include('components.header.head')
<style>
   

    .blog-kate span:not(:last-child)::after {
        content: ', ';
    }
    </style>
<body>
    <div class="header-container service-header-bg blog-header-bg">
        @include('components.header.header')


        <div class="service-header-content">
            <span>Von hochmodernen digitalen Tools bis hin zu praktischen analogen Hilfsmitteln</span>
            <div>Innovation</div>
        </div>
    </div>
    
           <!-- Display success message -->
           @if (session('success'))
            <div>           
               <div class="alert alert-success mt-3">
                   {{ session('success') }}
               </div>
            </div>   
           @endif
    

    <!-- ############################# INNOVATION SECTION 1 ########################### -->

    <div style="margin-bottom: 5rem">
        <div class="container-fluid section1-container" style="width: 85%">
            <div class="row" style="height: 100%">
                <div class="section1-right col-md-5 mb-4 mb-md-0">
                    <img style="border-radius: 20px; width: 100%; object-fit: cover"
                        src="{{ asset('assets/Images/innovation.webp') }}" alt="" />
                </div>
                <div class="section1-left col-md-7">
                    <span class="section1-top1">Innovationsbereich von PflegePur</span>
                    <div class="section1-top2 text-start">
                        Neue Definition von Pflege durch Innovation
                    </div>
                    <div class="section1-top4">
Die Pflegebranche steht vor großen Herausforderungen – doch mit kreativen Lösungen und fortschrittlichen Technologien können wir gemeinsam eine neue Ära der Pflege gestalten. In unserem Innovationsbereich stellen wir Ihnen eine Vielzahl von spannenden Produkten und Konzepten vor, die das Leben von Pflegebedürftigen und ihren Angehörigen erleichtern und die Arbeit von Pflegefachkräften unterstützen.
<br /><br />
Von hochmodernen digitalen Tools bis hin zu praktischen analogen Hilfsmitteln: Entdecken Sie, wie innovative Ansätze den Pflegealltag sicherer, einfacher und menschlicher machen. Lassen Sie sich inspirieren von nationalen und internationalen Projekten, die die Pflege revolutionieren, und erfahren Sie, welche Trends die Zukunft der Pflege prägen werden.
<br /><br />
Willkommen in einer Welt, in der Innovation Pflege neu definiert!
<br /><br />
Möchten auch Sie als Anbieter in unserer Liste aufgenommen werden oder haben Sie einen Hinweis auf einen entsprechenden Anbieter?
                    </div>
                    <div>
                        <button><a href="#contactForm" style="text-decoration: none;color:white">Kontaktieren Sie uns!</a></button>
                    </div>
                </div>
            </div>
            <div class="row" style="height: 100%;margin-top: 5rem">
                <div class="col-12 uberuns-section1-flex-cont">
                    <div class="uberuns-section1-flex-img-div">
                        <img src="{{ asset('assets/Images/Uber_uns_target_tag.svg') }}" alt="" />
                    </div>
                    <div class="uberuns-section1-flex2">
                        <span class="uberuns-section1-flex2-span">Digitale Lösungen</span>
                        <br />Vorstellung aktueller Apps (z.B. für Pflegeplanung, Erinnerungssysteme), Telemedizin, Robotik in der Pflege und intelligente Assistenzsysteme
                    </div>
                </div>

                <div class="col-12 uberuns-section1-flex-cont">
                    <div class="uberuns-section1-flex-img-div">
                        <img src="{{ asset('assets/Images/Uber_uns_target_tag.svg') }}" alt="" />
                    </div>
                    <div class="uberuns-section1-flex2">
                        <span class="uberuns-section1-flex2-span">Analoge Konzepte</span>
                        <br />Beschreibung innovativer Pflegehilfsmittel, z.B. ergonomische Betten, Transferhilfen, oder neue Mobilitätslösungen
                    </div>
                </div>
                
                <div class="col-12 uberuns-section1-flex-cont">
                    <div class="uberuns-section1-flex-img-div">
                        <img src="{{ asset('assets/Images/Uber_uns_target_tag.svg') }}" alt="" />
                    </div>
                    <div class="uberuns-section1-flex2">
                        <span class="uberuns-section1-flex2-span">Forschungsprojekte</span>
                        <br />Vorstellung aktueller Projekte aus der Pflegewissenschaft. Informationen über internationale Kooperationen und anstehende Markteinführungen
                    </div>
                </div>

                <div class="col-12 uberuns-section1-flex-cont">
                    <div class="uberuns-section1-flex-img-div">
                        <img src="{{ asset('assets/Images/Uber_uns_target_tag.svg') }}" alt="" />
                    </div>
                    <div class="uberuns-section1-flex2">
                        <span class="uberuns-section1-flex2-span">Best-Practice-Beispiele</span>
                        <br />Beispiele von Einrichtungen oder Organisationen, die innovative Konzepte erfolgreich eingeführt haben. Erfahrungsberichte und Lessons Learned
                    </div>
                </div>
            
            </div>            
        </div>
    </div>



    
    <!-- ############################# INNOVATION SECTION 2 ########################### -->

    <div class="partner-section2-container uberuns-section2-container" style="background-color: #b222221a; padding: 1rem 0; margin-bottom: 5rem">
        <div class="blog-container">
            <div class="blog-heading text-center w-100"
                style="font-size: 30px; line-height: 35.55px; margin-bottom: 1.8rem">
                Zukunftsausblick - Mitmachen & Feedback
            </div>
            <div class="partner-cards-container">
                <div class="partner-card">
                    <div class="partner-card-heading">Zukunftsausblick</div>
                    <div class="partner-card-data">
                        <p>Die Pflege steht niemals still – sie entwickelt sich ständig weiter, getrieben von Innovationen, die auf die Bedürfnisse einer alternden Gesellschaft und den Wunsch nach mehr Lebensqualität eingehen. Im „Zukunftsausblick“ werfen wir einen Blick auf die Trends und Technologien, die in den kommenden Jahren den Pflegealltag prägen könnten.</p>
<p>Von intelligenten Assistenzsystemen, die den Pflegebedürftigen ein selbstbestimmteres Leben ermöglichen, bis hin zu datenbasierten Lösungen, die Pflegefachkräften die tägliche Arbeit erleichtern – die Pflege der Zukunft wird vernetzter und individueller. Auch neue Materialien und Konzepte für den Wohnraum werden die Pflege revolutionieren, indem sie Barrieren abbauen und Sicherheit erhöhen.</p>
<p>Bleiben Sie mit uns am Puls der Zeit und erfahren Sie, welche Entwicklungen die Pflege neu definieren und welche Ideen schon heute das Potenzial haben, morgen Realität zu werden. Die Zukunft beginnt jetzt – und wir nehmen Sie mit auf diese spannende Reise!</p>
                    </div>
                </div>
                <div class="partner-card">
                    <div class="partner-card-heading">Mitmachen & Feedback</div>
                    <div class="partner-card-data">
<p>Innovation lebt vom Austausch und von den Ideen derer, die mitten im Pflegealltag stehen. Haben Sie selbst eine bahnbrechende Lösung entdeckt oder ein Konzept, das Sie inspiriert hat? Wir laden Sie herzlich ein, Teil unseres Innovationsbereichs zu werden und Ihre Erfahrungen zu teilen!</p>
<p>Ihre Perspektive ist uns wichtig: Welche Produkte haben Ihnen oder Ihren Angehörigen besonders geholfen? Wo sehen Sie noch ungenutztes Potenzial? Nutzen Sie unser Feedback-Formular, um uns Ihre Vorschläge, Anregungen oder Erfolgsgeschichten zu senden. Gemeinsam können wir den Innovationsraum für die Pflege noch lebendiger gestalten.</p>
<p>Werden Sie Teil einer Community, die Pflege neu denkt und die Zukunft aktiv mitgestaltet. Wir freuen uns auf Ihre Ideen und Ihr Engagement!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ############################ INNOVATION PAGE SECTION 2 ######################## -->
    <div class="blog-section1-container">
        <div class="row">
            <div class="col-lg-4 blog-left">
                <div class="blog-search-container">
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
                            <a style="text-decoration: none;color:black" href="{{ route('innovationen.index') }}"
                                class="{{ request()->routeIs('innovationen.index') && !request()->category ? 'active' : '' }}">
                                Alle</a>
                        </div>
                        @foreach ($testCategories as $category)
                            <div class="blog-search-sub-heading category-item">
                                <a style="text-decoration: none;color:black"
                                    href="{{ route('innovationen.index', ['category' => $category['name']]) }}"
                                    class="{{ request()->routeIs('innovationen.index') && request()->category === $category['name'] ? 'active' : '' }}">

                                    {{ $category['name'] }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-3">


                <div class="row" id="marketplace-items">
                    @forelse ($innovationen as $innovation)
                        <div class="col-lg-6 marketplace-item" data-name="{{ $innovation->title }}"
                            data-content="{{ $innovation->data }}">
                            <div class="blog-card" style="width: 94%;">
                                <a style="text-decoration: none" href="{{ route('innovationen.show', $innovation->slug) }}">
                                    <div class="blog-card-img">
                                        <img src="{{ Storage::url($innovation->image) }}" alt="" />
                                    </div>
                                    <div class="blog-card-body">
                                        <!-- <span class="blog-date">{{ \Carbon\Carbon::parse($innovation->innovation_date)->format('d.m.Y') }}</span> -->
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
                                        {{ Str::limit(html_entity_decode(strip_tags($innovation->description)),600) }}                                    
                                        <!-- {{ Str::limit(html_entity_decode(strip_tags($innovation->data), 1)) }} -->
                                        <!-- {!! Str::limit($innovation->data) !!} -->
                                        <!-- {{ Str::limit(strip_tags(nl2br($innovation->data)), 300) }} --> 
                                        <!-- {{ Str::limit($innovation->data, 150) }} -->
                                        <!-- Limit the content text for a preview -->
                                    </div>
                                        
     
                                    </div>

                                    <button class="blog-card-btn mb-5">Weiterlesen</button>
                                </a>
                            </div>
                        </div>

                    @empty
                        Keine Einträge vorhanden
                    @endforelse



                </div>


                <div class="col-8 mx-auto">
                    @if ($innovationen->hasMorePages())
                        <button id="load-more" data-next-page="{{ $innovationen->currentPage() + 1 }}"
                            class="blog-card-btn2  text-center mt-5">Mehr laden</button>
                    @endif
                </div>




            </div>
        </div>
    </div>

<div id="contactForm">
    @include('components.footer.footer_first')
</div>    

    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Blog_bottom.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#load-more').on('click', function() {
                var nextPage = $(this).data('next-page');
                var url = '{{ route('innovationen.loadMore') }}?page=' + nextPage;

                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        // Append the new items to the existing list
                        $('#marketplace-items').append(response.innovationen);

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
