@extends('admin.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Category</h3>
            </div>
            <form action="{{route('category.update',$dataEditcategory->category_id)}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="category_name">Category Name</label>
                        <input type="text" name="category_name" class="form-control" value="{{$dataEditcategory->category_name}}" />
                        @if ($errors->has('category_name'))
                            <span class="text-danger">{{ $errors->first('category_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="description">Description</label>
                        <textarea name="description" class="form-control">{{$dataEditcategory->description}}</textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
