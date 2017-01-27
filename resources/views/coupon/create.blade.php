@extends('layouts.layout')

@section('description', '')
@section('title', '')

@section('content')

    <div class="container">
        <div class="col-md-6">

            @include('errors.list')

            @if( ! $prices->isEmpty())
            <form class="form-horizontal" action="{{ url('coupons') }}" method="post">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="code" class="col-sm-4 control-label">URL</label>
                    <div class="col-sm-8">
                        <input name="code" type="text" class="form-control" id="code" placeholder="Coupon link"
                               readonly required value="{{ $coupon_link }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="free_days" class="col-sm-4 control-label">Free days</label>
                    <div class="col-sm-8">
                        <input name="free_days" min="0" type="number" class="form-control" id="free_days" placeholder="Free Days" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="price" class="col-sm-4 control-label">Price</label>
                    <div class="col-sm-8">
                        <select name="price_id" id="" class="form-control">
                            @foreach($prices as $id => $value)
                                <option value="{{ $id }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn btn-success">Create new</button>
                    </div>
                </div>
            </form>
            @else
                <div class="alert alert-danger" role="alert">
                    <h4>No prices!</h4>
                    <p>You must create prices.</p>
                </div>
            @endif
        </div>
    </div>
    
@stop