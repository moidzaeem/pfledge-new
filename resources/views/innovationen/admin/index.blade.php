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
                                <h4 class="mt-0 header-title">{{ __('Alle Innovationsartikel') }}</h4>
                                <a href="{{ route('admin.innovation.create') }}"
                                    class="btn btn-primary mb-5">{{ __('Innovationsartikel erstellen') }}</a>
                            </div>

                            @if (!empty($innovationen))
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Category') }}</th>
                                            <th>{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($innovationen as $innovation)
                                            <tr>
                                                <!-- Display the innovation ID -->
                                                <td>{{ $innovation->id }}</td>

                                                <!-- Display the name of the innovation -->
                                                <td>{{ $innovation->title ?? 'N/A' }}</td>



                                                <!-- Display the category names -->
                                                <td>
                                                    @if ($innovation->category1_name)
                                                        <span>{{ $innovation->category1_name }}</span><br>
                                                    @endif
                                                    @if ($innovation->category2_name)
                                                        <span>{{ $innovation->category2_name }}</span><br>
                                                    @endif
                                                    @if ($innovation->category3_name)
                                                        <span>{{ $innovation->category3_name }}</span><br>
                                                    @endif
                                                    @if ($innovation->category4_name)
                                                        <span>{{ $innovation->category4_name }}</span><br>
                                                    @endif
                                                </td>

                                                <!-- Display actions like Edit or Delete -->
                                                <td>
                                                    <!-- Edit Button -->
                                                    <a href="{{route('admin.innovation.edit', $innovation->id)}}" class="btn btn-link p-0" title="Edit">
                                                        <i class="mdi mdi-pencil text-primary"></i>
                                                    </a>

                                                    <!-- Delete Button -->
                                                    <form action="{{route('admin.innovation.destroy', $innovation->id)}}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button style="color: red" type="submit" class="btn btn-link p-0"
                                                            onclick="return confirm('Are you sure you want to delete this innovation?')">
                                                            <i style="color: red" class="mdi mdi-delete"></i>
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h4 class="text-center">No Innovations Available</h4>
                            @endif
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container-fluid -->
    </div>
@endsection
