@extends('layouts.layout')

@section('description', '')
@section('title', '')

@section('content')

    <div class="container">
        <div class="col-md-6">

            @include('errors.list')

            <form class="form-horizontal" action="{{ url('coupons', $coupons->id) }}" method="post">

                {{ csrf_field() }}
                {{ method_field('patch') }}

                <div class="form-group">
                    <label for="code" class="col-sm-4 control-label">URL</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="text" class="form-control coupon_code_link" name="code" id="code" readonly
                                   placeholder="Coupon code" value="{{ isset($coupons) ? $coupons ->code : '' }}">
                            <span class="input-group-btn">
                                <button title="Get new coupon link" class="btn btn-default btn_coupon_code_refresh" type="button">
                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div><!-- /input-group -->
                    </div>
                </div>

                <div class="form-group">
                    <label for="free_days" class="col-sm-4 control-label">Free days</label>
                    <div class="col-sm-8">
                        <input name="free_days" type="number" class="form-control" id="free_days"
                               value="{{ isset($coupons) ? $coupons->free_days : '' }}" placeholder="Free Days" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="price" class="col-sm-4 control-label">Price</label>
                    <div class="col-sm-8">
                        <select name="price_id" id="" class="form-control">
                            @foreach($prices as $id => $value)
                                <option @if(isset($coupons) && $coupons->price_id == $id) selected @endif value="{{ $id }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@stop