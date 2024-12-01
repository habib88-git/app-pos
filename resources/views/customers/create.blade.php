@extends('admin.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">Form Create Customers</h3>
            </div>
            <form action="{{ route('customer.store')}}" method="POST">
                {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label class="form-label" for="customer_name">Customer Name :</label>
                    <input type="text" class="form-control" name="customer_name" value="{{old('customer_name')}}"></br>

                    @if ($errors->has('customer_name'))
                        <span class="text-danger">{{ $errors->first('customer_name') }}</span>
                    @endif</br>

                <div class="form-group">
                    <label class="form-label" for="email">Email :</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}">

                    @if ($errors->has('email'))
                        <span class="label label-danger">{{ $errors->first('email') }}</span>
                    @endif</br>

                <div class="form-group">
                    <label class="form-label" for="phone">Phone :</label>
                    <input type="number" class="form-control" name="phone" value="{{old('phone')}}"></br>

                    @if ($errors->has('phone'))
                        <span class="label label-danger">{{ $errors->first('phone') }}</span>
                    @endif</br>

                <div class="form-group">
                    <label class="form-label" for="member_status">Member Status :</label>
                    <input type="radio" name="member_status" value=1>True
                    <input type="radio" name="member_status" value=0>False</br>

                     @if ($errors->has('member_status'))
                        <span class="label label-danger">{{ $errors->first('member_status') }}</span>
                    @endif</br>

                <div class="form-group">
                    <label class="form-group" for="address">Address :</label>
                    <textarea name="address">{{old('address')}}</textarea></br>
                    @if ($errors->has('address'))
                        <span class="label label-danger">{{ $errors->first('address') }}</span>
                    @endif</br>
                </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                        <a href="{{ route('customer.index')}}" class="btn btn-danger btn-sm">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
