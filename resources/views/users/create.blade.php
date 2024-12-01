@extends('admin.admin')
@section('content')
<div class="row">
<div class="col-6">
    <div class="card">
        <div class="card-header bg-primary" >
            <h1 class="card-title">Form User</h1>
        </div>
        <form action="{{route('user.store')}}" method="POST">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="form-group">
            <label class="form-label" for="name"> Name : </label>
    <input type="text" name="name" value="{{old('name')}}"></br>
    @if ($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif</br>

    <label class="form-label" for="email"> Email : </label>
    <input type="email" name="email" value="{{old('email')}}"></br>
    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif</br>

    <label class="form-label" for="password"> Password : </label>
    <input type="password" name="password" value="{{old('password')}}"></br>
    @if ($errors->has('password'))
    <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif</br>

    <label class="form-label" for="role"> Password : </label>
    <input type="radio" name="role" value="Admin" checked>Admin
    <input type="radio" name="role" value="Cashier">Cashier</br>
    @if ($errors->has('role'))
    <span class="text-danger">{{ $errors->first('role') }}</span>
    @endif</br>

</div>

</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
</div>
</div>
</div>
@endsection
