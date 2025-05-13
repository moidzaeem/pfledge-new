@extends('layouts.app')

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container-fluid -->
    </div>

    <div class="page-content-wrapper mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <h4 class="mt-0 header-title">{{ __('Blog Kategorie erstellen') }}</h4>
                              
                            </div>

                            <!-- Form to create a new blog category -->
                            <form action="{{ route('admin.blog.category.store') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="name">{{ __('Kategorie Name') }}</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">{{ __('Kategorie Beschreibung') }}</label>
                                    <textarea id="description" name="description" class="form-control" rows="5">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">{{ __('Kategorie speichern') }}</button>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container-fluid -->
    </div>

@endsection
