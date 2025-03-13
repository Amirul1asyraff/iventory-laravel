@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    <div class="card-title">
                        <h4>WELCOME TO ITEM-MANAGEMENT</h4>
                    </div>
                    <div class="card-tools">
                        <a href="{{ route ('home') }}" class="btn btn-primary">Item Index</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group row mb-2">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Item Name</label>
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" id="name" value="{{ $item->name }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Item Name</label>
                        <div class="col-md-6">
                            <input type="text" name="color" class="form-control" id="name" value="{{ $item->color->name }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Item Name</label>
                        <div class="col-md-6">
                            <input type="text" name="type" class="form-control" id="name" value="{{ $item->type->name }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Item Name</label>
                        <div class="col-md-6">
                            <input type="text" name="quantity" class="form-control" id="name" value="{{ $item->quantity }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
