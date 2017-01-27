@extends('layouts.layout')

@section('description', '')
@section('title', '')

@section('content')
    <div class="container coupon">

        <table class="table table-condensed">
            <thead>
            <tr>
                <th>ID</th>
                <th>URL</th>
                <th>Free Days</th>
                <th>Price</th>
                <th>Was Used</th>
                <th colspan="2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($coupons as $coupon)
                <tr class="@if($coupon->was_used) danger @else success @endif">
                    <td>{{ $coupon->id }}</td>
                    <td><input type="text" value="{{ 'https://www.frootvpn.com/?c=' . $coupon->code }}" class="form-control" readonly></td>
                    <td>{{ $coupon->free_days }}</td>
                    <td>{{ $coupon->price->discount }}</td>
                    <td>{{ $coupon->was_used }}</td>
                    <td><a href="{{ url('coupons', [$coupon->id, 'edit']) }}" class="btn btn-primary btn-xs">Edit</a></td>
                    <td>
                        <form action="{{ url('coupons', $coupon->id) }}" method="delete">
                            {{ method_field('delete') }}
                            {{ csrf_field() }}
                            <input type="button" class="btn btn-danger btn-xs btn_delete_form" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop