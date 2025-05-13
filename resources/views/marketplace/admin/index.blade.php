@extends('layouts.app')

<!-- Use the latest jQuery version -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>

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

    {{-- DATATABLE --}}
    <div class="page-content-wrapper mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <h4 class="mt-0 header-title">{{ __('Alle Marktplatz-Einträge') }}</h4>
                                <a href="{{ route('admin.marketplace.create') }}"
                                    class="btn btn-primary mb-5">{{ __('Marktplatz-Eintrag erstellen') }}</a>
                            </div>

                            @if (!empty($marketplaces))
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Link') }}</th>
                                            <th>{{ __('Image') }}</th>
                                            <th>{{ __('Category') }}</th>
                                            <th>{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($marketplaces as $marketplace)
                                            <tr>
                                                <!-- Display the marketplace ID -->
                                                <td>{{ $marketplace->id }}</td>

                                                <!-- Display the name of the marketplace -->
                                                <td>{{ $marketplace->name ?? 'N/A' }}</td>

                                                <!-- Display the link to the marketplace -->
                                                <td>
                                                    <a href="{{ $marketplace->link }}" target="_blank">Visit</a>
                                                </td>

                                                <!-- Display the image (if it exists) -->
                                                <td>
                                                    @if ($marketplace->image)
                                                        <img src="{{ $marketplace->image }}" alt="Image"
                                                            style="width: 50px; height: auto;">
                                                    @else
                                                        N/A
                                                    @endif
                                                </td>

                                                <!-- Display the category names -->
                                                <td>
                                                    @if ($marketplace->category1_name)
                                                        <span>{{ $marketplace->category1_name }}</span><br>
                                                    @endif
                                                    @if ($marketplace->category2_name)
                                                        <span>{{ $marketplace->category2_name }}</span><br>
                                                    @endif
                                                    @if ($marketplace->category3_name)
                                                        <span>{{ $marketplace->category3_name }}</span><br>
                                                    @endif
                                                    @if ($marketplace->category4_name)
                                                        <span>{{ $marketplace->category4_name }}</span><br>
                                                    @endif
                                                </td>

                                                <!-- Display actions like Edit or Delete -->
                                                <td>
                                                    <!-- Edit Button -->
                                                    <a href="{{ route('admin.marketplace.edit', $marketplace->id) }}" class="btn btn-link p-0" title="Edit">
                                                        <i class="mdi mdi-pencil text-primary"></i> 
                                                    </a>
                                                    
                                                    <!-- Delete Button -->
                                                    <form action="{{ route('admin.marketplace.destroy', $marketplace->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button style="color: red" type="submit" class="btn btn-link p-0" onclick="return confirm('Are you sure you want to delete this marketplace?')">
                                                            <i style="color: red" class="mdi mdi-delete"></i> 
                                                        </button>
                                                    </form>
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h4 class="text-center">No Marketplaces Available</h4>
                            @endif
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container-fluid -->
    </div>
@endsection
