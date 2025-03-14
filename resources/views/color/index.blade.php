@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                </div>
                <div class="card-title">
                    <h4>WELCOME TO COLOR-MANAGEMENT</h4>
                </div>
                    <div class="card-tools">
                        <a href="{{ route ('home') }}" class="btn btn-primary">Home</a>
                        <a href="{{ route('color.create') }}" class="btn btn-primary">Create Color </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Color</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($colors as $color)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $color->name }}</td>
                                    <td>{{ $color->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('color.edit',$color) }}" class="btn btn-primary">Edit</a>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $color->id }}">
                                            Delete
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal{{ $color->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $color->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel{{ $color->id }}">Confirm Delete</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        Are you sure you want to delete this color {{ $color->name }}?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        <form action="{{ route('color.destroy', $color) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">No data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                </div>
                <div class="card-footer">
                    <div class="col-12">
                        {{ $colors->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
