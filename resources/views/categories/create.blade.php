@extends('admin.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">Form Create Category</h3>
            </div>
            <form action="{{route('category.store')}}" method="POST">
                {{ csrf_field() }}
            <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="category_name">Category Name</label>
                        <input type="text" class="form-control" name="category_name" value="{{ old('category_name') }}"/></br>

                        @if ($errors->has('category_name'))
                            <span class="text-danger">{{ $errors->first('category_name') }}</span>
                        @endif</br>
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control">{{ old('description') }}</textarea></br>

                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif</br>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    <a href="{{ route('category.index')}}" class="btn btn-black btn-sm">Back</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection


