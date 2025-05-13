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
                                <h4 class="mt-0 header-title">{{ __('Innovation Kategorie bearbeiten') }}</h4>
                            </div>

                            <!-- Form to edit an existing innovation category -->
                            <form action="{{ route('admin.innovation.category.update', $innovationCategory->id) }}" method="POST">
                                @csrf
                                @method('PUT') <!-- This is important for update actions -->

                                <div class="form-group">
                                    <label for="name">{{ __('Kategorie Name') }}</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $innovationCategory->name) }}" required>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">{{ __('Kategorie Beschreibung') }}</label>
                                    <textarea id="description" name="description" class="form-control" rows="5">{{ old('description', $innovationCategory->description) }}</textarea>
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">{{ __('Kategorie aktualisieren') }}</button>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container-fluid -->
    </div>

@endsection
