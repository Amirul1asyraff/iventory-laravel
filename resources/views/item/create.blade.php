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
                    <form action="{{ route('item.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="color">Item Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Item Name" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="color">Quantity</label>
                            <input type="integer" name="quantity" class="form-control" id="quantity" placeholder="Enter Quantity" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="color">Item Type</label>
                            <select name="type" class="form-control" id="type" required>
                                <option value="">Select Item Type</option>
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="color">Item Color</label>
                            <select  name="color" class="form-control" id="name" required>
                                <option value="">Select Item Color</option>
                                @foreach($colors as $color)
                                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('home') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
