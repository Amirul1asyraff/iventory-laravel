@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    <div class="card-title">
                        <h4>Edit Type</h4>
                    </div>
                    <div class="card-tools">
                        <a href="{{ route ('type.index') }}" class="btn btn-primary">Type Index</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('type.update',$type) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label for="type">Type</label>
                            <input type="text" name="name" class="form-control" placeholder="Type" value="{{ $type->name }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('type.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
