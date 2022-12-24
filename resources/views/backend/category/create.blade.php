@extends('layouts.app2')
@section('admin')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-right"><a href="{{ route('category.index') }}" class="btn btn-primary"><i class="fas fa-plus" aria-hidden="true"></i> All Category</a></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
       <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Add Category</h6>
       </div>
       <div class="card-body">

        <div class="table-responsive">
            <form action="{{ route('category.store') }}" method="post" >{{ csrf_field() }}
                <div class="form-group">
                    <h5>Category Name English</h5>
                    <div class="controls">
                        <input id="category_name_en" type="text" name="category_name_en" class="form-control">
                    </div>
                    @error('category_name_en')
                        <p class="text-danger">{{ $message  }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>Category Name Bangla</h5>
                    <div class="controls">
                        <input id="category_name_bn" type="text" name="category_name_bn" class="form-control">
                    </div>
                    @error('category_name_bn')
                        <p class="text-danger">{{ $message  }}</p>
                    @enderror
                </div>
                <div class="form-group pl-4">

                    <div class="controls">
                        <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status" checked value="1">
                        <label class="form-check-label cursor" for="status">Status</label>
                    </div>

                </div>

                <div class="form-group">
                    <input class="btn btn-rounded btn-info" type="submit" value="Add">
                </div>
            </form>
        </div>
       </div>
    </div>
@endsection
