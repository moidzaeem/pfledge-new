<!DOCTYPE html>
<html lang="en">
@include('components.header.head')
<style>
   

.blog-kate span:not(:last-child)::after {
    content: ', ';
}
</style>
<body>
    <div class="header-container service-header-bg"
        style="background-image: url('{{ asset('assets/Images/Bucher_header_bg.svg') }}') !important">
        @include('components.header.header')


        <div class="service-header-content">
            <span>Ihr zentraler Anlaufpunkt für Pflege- und Gesundheitsprodukte</span>
            <div>Marktplatz</div>
        </div>
    </div>


    <!-- ######################## MARKTPLATZ PAGE SECTION 1 ######################## -->
    <div class="academy-page-section1-container">
        <div class="row">
            <div class="col-md-6 academy-page-section1-top mb-3 mb-md-0 pe-md-4">
                Unser Marktplatz bietet Ihnen eine sorgfältig ausgewählte Vielfalt an
                Produkten und Dienstleistungen rund um die Themen Pflege, Gesundheit
                und Wohlbefinden. Wir arbeiten mit vertrauenswürdigen Partnern
                zusammen, um Ihnen hochwertige Lösungen anzubieten, die Ihren Alltag
                erleichtern und die bestmögliche Versorgung Ihrer Liebsten
                unterstützen.
                <br /><br />
                Bei einigen Angeboten verwenden wir Affiliate-Links. Das bedeutet,
                dass wir eine kleine Provision vom Anbieter erhalten, wenn Sie über
                diese Links ein Produkt oder eine Dienstleistung erwerben. Für Sie
                bleibt der Preis jedoch unverändert – es entstehen keine zusätzlichen
                Kosten.
            </div>
            <div class="col-md-6 academy-page-section1-top ps-md-4">
                Unser Ziel ist es, Ihnen die besten und nützlichsten Angebote
                bereitzustellen. Wo und wann Sie ein Produkt oder eine Dienstleistung
                kaufen, liegt ganz bei Ihnen. Mit Ihrem Einkauf unterstützen Sie uns
                dabei, weiterhin wertvolle Inhalte und Ressourcen für die
                Pflege-Community anzubieten.
                <br /><br />
                Entdecken Sie unser umfangreiches Angebot und finden Sie genau das,
                was Sie brauchen!
            </div>
        </div>
    </div>

    <!-- ############################ MARKTPLATZ PAGE SECTION 2 ######################## -->
    <div class="row bucher-card-container" style="width: 90% !important">
        <div class="col-lg-4 blog-left">
            <div class="blog-search-container">
                <div class="blog-search-sub-container">
                    <input type="search" id="searchInput" placeholder="Suchbegriff" onkeyup="filterMarketplaces()" />
                    <img src="{{ asset('assets/Images/Blog_search_icon.svg') }}" alt="" />
                </div>

                <div
                    style="display: flex;justify-content: space-between;width: 100%;align-items: center;margin-top: 2rem;">
                    <div class="blog-search-main-heading">Kategorien</div>
                    <div class="d-flex d-lg-none">
                        <img class="hide-show-btn" style="cursor: pointer"
                            src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="" />
                    </div>
                </div>
                <div class="hide-show-content" id="categoryList">
                    <div class="blog-search-sub-heading category-item">
                        <a style="text-decoration: none;color:black" href="{{ route('marketplace.index') }}"
                            class="{{ request()->routeIs('marketplace.index') && !request()->category ? 'active' : '' }}">
                            Alle
                        </a>
                    </div>
                    @foreach ($testCategories as $category)
                        <div class="blog-search-sub-heading category-item">
                            <a style="text-decoration: none;color:black"
                                href="{{ route('marketplace.index', ['category' => $category['name']]) }}"
                                class="{{ request()->routeIs('marketplace.index') && request()->category === $category['name'] ? 'active' : '' }}">
                                {{ $category['name'] }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-8 mt-4">
            <div class="row" id="marketplace-items">
                @foreach ($marketPlaces as $marketplace)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 marketplace-item" data-name="{{ $marketplace->name }}"
                        data-content="{{ $marketplace->content_text }}">
                        <!-- Blog Card Container -->
                        <div class="blog-card">
                            <a target="{{ $marketplace->external_link === 'ja' ? '_blank' : '' }}"
                                style="text-decoration: none" href="{{ $marketplace->link }}">
                                <div class="blog-card-img">
                                    @if (strpos($marketplace->image, 'https') === 0)
                                        <!-- Check if the image is an external URL -->
                                        <img src="{{ $marketplace->image }}" alt="" class="img-fluid" />
                                    @else
                                        <img src="{{ asset('storage/' . $marketplace->image) }}" alt=""
                                            class="img-fluid" />
                                    @endif
                                </div>
                                <div class="blog-card-body">
                                    <div class="blog-kate">
                                        Kategorie:
                                        @if ($marketplace->category1_name)
                                            <span class="blog-kate">{{ trim($marketplace->category1_name) }}</span>
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
                            </a>
                            <a target="{{ $marketplace->external_link === 'ja' ? '_blank' : '' }}"
                                style="text-decoration: none" href="{{ $marketplace->link }}">
                                <button class="blog-card-btn">Weiterlesen</button>
                            </a>
                        </div>
                    </div>
                @endforeach

                {{-- Pagination links --}}
                {{-- Load More button --}}


            </div>
            <div class="col-8 mx-auto">
                @if ($marketPlaces->hasMorePages())
                    <button id="load-more" data-next-page="{{ $marketPlaces->currentPage() + 1 }}"
                        class="blog-card-btn2  text-center mt-5">Mehr laden</button>
                @endif
            </div>


        </div>

    </div>
    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Bucher_bottom_img.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')

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

        // Function to filter marketplaces by category
        // function filterByCategory(category) {
        //     const marketplaceItems = document.querySelectorAll('.marketplace-item'); // Get all marketplace items

        //     marketplaceItems.forEach(function(item) {
        //         const categories = item.getAttribute('data-categories').toLowerCase(); // Get marketplace categories

        //         if (category === 'Alle' || categories.indexOf(category.toLowerCase()) > -1) {
        //             item.style.display = ''; // Show the marketplace item
        //         } else {
        //             item.style.display = 'none'; // Hide the marketplace item
        //         }
        //     });
        // }
    </script>

    {{-- JavaScript to handle Load More --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#load-more').on('click', function() {
                var nextPage = $(this).data('next-page');
                var url = '{{ route('marketplace.loadMore') }}?page=' + nextPage;

                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        // Append the new items to the existing list
                        $('#marketplace-items').append(response.marketPlaces);

                        // Update the "Load More" button
                        if (response.nextPage) {
                            $('#load-more').data('next-page', response.nextPage);
                        } else {
                            $('#load-more').remove(); // Remove the button if no more pages
                        }
                    },
                    error: function() {
                        alert('Error loading more items.');
                    }
                });
            });
        });
    </script>

</body>

</html>
