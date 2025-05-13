<!DOCTYPE html>
<html lang="en">
@include('components.header.head')
<style>
   

    .innovation-kate span:not(:last-child)::after {
        content: ', ';
    }
    </style>
<body>
    <div style="position: relative" class="header-container service-header-bg blog-header-bg">
        @include('components.header.header')

        <!-- ########################### KATEGORIE HEADER TOP IMAGE ########################### -->

        <div class="header-top-image-lg">
            @if ($innovation->image)
                <img class="img-fluid" src="{{ Storage::url($innovation->image) }}" alt="Blog Image" />
            @endif
        </div>

        <!-- Mobile Image -->
        <div class="header-top-image-sm d-block d-md-none">
            @if ($innovation->image)
                <img class="img-fluid" src="{{ asset('storage/' . $innovation->image) }}" alt="Blog Image" />
            @endif
        </div>
    </div>

    <!-- ############################ KATEGORIE CONTENT ######################### -->

    <div class="kategorie-content" style="padding-top: 20px">
        <!-- <span class="kategorie-date">{{ \Carbon\Carbon::parse($innovation->innovation_date)->format('d.m.Y') }}</span> -->
        <div class="kategorie">Kategorie:
            @if ($innovation->category1Model?->name)
                <span class="innovation-kate">{{ $innovation->category1Model->name }}</span>
            @endif

            @if ($innovation->category2Model?->name)
                <span class="innovation-kate">{{ $innovation->category2Model->name }}</span>
            @endif
            @if ($innovation->category3Model?->name)
                <span class="innovation-kate">{{ $innovation->category3Model->name }}</span>
            @endif
            @if ($innovation->category4Model?->name)
                <span class="innovation-kate">{{ $innovation->category4Model->name }}</span>
            @endif

        </div>

        <div class="kategorie-main-heading">
            {{ $innovation->title }} </div>
        <div class="kategorie-data">
            {!! $innovation->data !!} <!-- Render HTML content -->

        </div>


        <div class="kategorie-btn">
            <a href="{{ route('innovationen.index') }}">
                <button>Zurück</button>
            </a>
        </div>
    </div>

    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Blog_bottom.svg') }}" alt="" />
    </div>

    <!-- ######################### FOOTER SECTION ######################### -->
    @include('components.footer.footer_second')
</body>

</html>
