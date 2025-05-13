@extends('layouts.app')
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  
<!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/t2zon7qplanf187l7c04trbgg1pvea5izo5333l2iwamz7ig/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    
<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
      // Your account includes a free trial of TinyMCE premium features
      // Try the most popular premium features until Jan 7, 2025:
      'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
  });
</script>
    

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">{{ __('Innovation Artikel bearbeiten') }}</h4>
                            <p class="text-muted m-b-30 font-14">{{ __('Ändern Sie die Innovation-Details') }}.</p>
                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="p-20">
                                <form action="{{ route('admin.innovation.update', $innovation->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <!-- Slug Field -->
                                        <input id="slug" type="hidden" name="slug"
                                            value="{{ old('slug', $innovation->slug) }}">

                                        <!-- Title Field -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Titel</label>
                                                <input type="text" class="form-control" name="title" id="title"
                                                    value="{{ old('title', $innovation->title) }}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Datum</label>
                                                <input type="date" class="form-control" name="innovation_date" id=""
                                                    value="{{ old('innovation_date', $innovation->innovation_date) }}" required>
                                            </div>
                                        </div>

                                        <!-- Image Field -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="image">Grafik</label>
                                                <input type="file" name="image" id="image" class="form-control">
                                                @if ($innovation->image)
                                                    <img src="{{ Storage::url($innovation->image) }}" alt="innovation Image"
                                                        width="150">
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Category Fields (1 to 4) -->
                                        @foreach (range(1, 4) as $category)
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('Kategorie') }} {{ $category }}</label>
                                                    <select name="category{{ $category }}"
                                                        class="form-control @error('category' . $category) is-invalid @enderror">
                                                        <option value="">{{ __('Bitte wählen') }}</option>
                                                        @foreach ($innovationCategories as $cat)
                                                            <option value="{{ $cat->id }}"
                                                                {{ old('category' . $category, $innovation->{'category' . $category}) == $cat->id ? 'selected' : '' }}>
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

                                        <!-- Description Field -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="description">Beschreibung</label>
                                                <textarea class="form-control" name="description" id="description">{{ old('description', $innovation->description) }}</textarea>
                                            </div>
                                        </div>

                                        <!-- Home Field -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>{{ __('Startseite') }}</label>
                                                <select name="home"
                                                    class="form-control @error('home') is-invalid @enderror">
                                                    <option value="nein"
                                                        {{ old('home', $innovation->home) == 'nein' ? 'selected' : '' }}>
                                                        {{ __('Nein') }}</option>
                                                    <option value="ja"
                                                        {{ old('home', $innovation->home) == 'ja' ? 'selected' : '' }}>
                                                        {{ __('Ja') }}</option>
                                                </select>
                                                @error('home')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- innovation Content Field (TinyMCE Editor) -->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="content">Inhalt</label>
                                                <textarea name="content" id="myeditorinstance">{{ old('content', $innovation->data) }}</textarea>
                                            </div>
                                        </div>

                                        <!-- Submit and Reset Buttons -->
                                        <div class="col-lg-12 text-center">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    {{ __('Speichern') }}
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
                </div>
            </div>
        </div>
    </div>

    <script>
        // Ensure TinyMCE editor loads content from the database (with old input fallback)
        document.addEventListener('DOMContentLoaded', function() {
            const content = @json($innovation->data);

            tinymce.init({
                selector: 'textarea#myeditorinstance',
                plugins: [
                    'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link',
                    'lists', 'media',
                    'searchreplace', 'table', 'visualblocks', 'checklist', 'mediaembed', 'casechange',
                    'export',
                    'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable',
                    'advcode',
                    'editimage', 'advtemplate', 'mentions', 'tinycomments', 'tableofcontents',
                    'footnotes', 'mergetags',
                    'autocorrect', 'typography', 'inlinecss'
                ],
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                images_file_types: 'jpg,svg,webp',
                file_picker_types: 'file image media',
                convert_urls: false,
                init_instance_callback(editor) {
                    editor.setContent(content);
                }
            });
        });
    </script>
@endsection
