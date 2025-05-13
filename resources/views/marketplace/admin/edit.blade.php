@extends('layouts.app')

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">{{ __('Marktplatz-Eintrag bearbeiten') }}</h4>
                            <p class="text-muted m-b-30 font-14">{{ __('Bearbeiten Sie die Details des Marktplatzes.') }}</p>

                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            <div class="p-20">
                                <!-- Form to Edit Marketplace -->
                                <form action="{{ route('admin.marketplace.update', $marketplace->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <!-- Name Field -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>{{ __('Anbieter') }}</label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $marketplace->name) }}" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Text Field -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>{{ __('Beschreibung') }}</label>
                                                <textarea id="content_text" class="form-control @error('content_text') is-invalid @enderror" name="content_text">{{ old('content_text', $marketplace->content_text) }}</textarea>
                                                @error('content_text')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>{{ __('Bild') }}</label>
                                        
                                                <!-- Option to Upload Image -->
                                                <input id="image" type="file" onchange="readURL(this);" class="form-control @error('image') is-invalid @enderror" name="image">
                                                <p class="text-danger">
                                                    *{{ __('Bitte eine .PNG- oder .JPG-Datei hochladen (max. 2 MB)') }}</p>
                                        
                                                <!-- Or Image URL Input -->
                                                <label for="image_url" class="mt-3">{{ __('Oder Bild-URL (z.B. https://example.com/image.jpg)') }}</label>
                                                <input id="image_url" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image', $marketplace->image) }}">
                                        
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <!-- Image Preview -->
                                        <div class="col-lg-6">
                                            <img class="img-fluid" style="float: right" src="{{ old('image', $marketplace->image) }}" alt="" id="imagePlacement" />
                                        </div>
                                        

                                        <!-- Category Dropdowns -->
                                        @foreach (range(1, 4) as $category)
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('Kategorie') }} {{ $category }}</label>
                                                    <select name="category{{ $category }}" class="form-control @error('category' . $category) is-invalid @enderror">
                                                        <option value="">{{ __('Bitte wählen') }}</option>
                                                        @foreach ($marketplaceCategories as $cat)
                                                            <option value="{{ $cat->id }}" {{ old('category' . $category, $marketplace->{'category' . $category}) == $cat->id ? 'selected' : '' }}>
                                                                {{ $cat->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('category' . $category)
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endforeach

                                        <!-- Link -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>{{ __('Link') }}</label>
                                                <input id="link" type="url" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link', $marketplace->link) }}">
                                                @error('link')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- External Link (Ja/Nein Dropdown) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>{{ __('Link extern') }}</label>
                                                <select name="external_link" class="form-control @error('external_link') is-invalid @enderror">
                                                    <option value="nein" {{ old('external_link', $marketplace->external_link) == 'nein' ? 'selected' : '' }}>
                                                        {{ __('Nein') }}
                                                    </option>
                                                    <option value="ja" {{ old('external_link', $marketplace->external_link) == 'ja' ? 'selected' : '' }}>
                                                        {{ __('Ja') }}
                                                    </option>
                                                </select>
                                                @error('external_link')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Home (Ja/Nein Dropdown) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>{{ __('Startseite') }}</label>
                                                <select name="home" class="form-control @error('home') is-invalid @enderror">
                                                    <option value="nein" {{ old('home', $marketplace->home) == 'nein' ? 'selected' : '' }}>
                                                        {{ __('Nein') }}
                                                    </option>
                                                    <option value="ja" {{ old('home', $marketplace->home) == 'ja' ? 'selected' : '' }}>
                                                        {{ __('Ja') }}
                                                    </option>
                                                </select>
                                                @error('home')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Submit and Reset Buttons -->
                                        <div class="col-lg-12 text-center">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    {{ __('Absenden') }}
                                                </button>
                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                    {{ __('Abbrechen') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container-fluid -->
    </div>
@endsection

<script>
// Handle file upload or URL input for image preview
function readURL(input) {
    var imagePreview = document.getElementById("imagePlacement");

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            imagePreview.src = e.target.result;  // Display the uploaded image
            imagePreview.style.display = 'block';  // Show the image preview
        }
        reader.readAsDataURL(input.files[0]);
    } else {
        imagePreview.style.display = 'none';  // Hide the image preview if no file is uploaded
    }
}

// Update image preview when the URL field changes
document.getElementById('image').addEventListener('input', function (e) {
    var imagePreview = document.getElementById("imagePlacement");
    var url = e.target.value;

    if (url) {
        imagePreview.src = url;  // Show the image from URL
        imagePreview.style.display = 'block';
    } else {
        imagePreview.style.display = 'none';  // Hide if the URL field is empty
    }
});

</script>
