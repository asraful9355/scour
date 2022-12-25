@extends('layouts.app2')
@section('admin')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-right"><a href="{{ route('work.index') }}" class="btn btn-primary"><i class="fas fa-plus" aria-hidden="true"></i> All Work</a></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
       <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Edit Work</h6>
       </div>
       <div class="card-body">

        <div class="table-responsive">
            <form action="{{ route('work.update',$work->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="category">Category_Id:</label>
                    <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $cat )
                    <option value="{{ $cat->id }}" @if ($cat->id == $work->category_id) selected @endif >{{$cat->category_name_en}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Title En</label>
                    <div class="controls">
                        <input id="title_en" type="text" name="title_en" class="form-control" value="{{ $work->title_en }}">
                    </div>
                    @error('title_en')
                        <p class="text-danger">{{ $message  }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Title Bn</label>
                    <div class="controls">
                        <input id="title_bn" type="text" name="title_bn" class="form-control"  value="{{ $work->title_bn }}">
                    </div>
                    @error('title_bn')
                        <p class="text-danger">{{ $message  }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description En</label>
                    <div class="controls">
                        <input id="description_en" type="text" name="description_en" class="form-control" value="{{ $work->description_en }}">
                    </div>
                    @error('category_name_bn')
                        <p class="text-danger">{{ $message  }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description Bn</label>
                    <div class="controls">
                        <input id="description_bn" type="text" name="description_bn" class="form-control" value="{{ $work->description_bn }}">
                    </div>
                    @error('description_bn')
                        <p class="text-danger">{{ $message  }}</p>
                    @enderror
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <img id="showImage"  class="rounded avatar-lg" src="{{ asset($work->work_image)}}" alt="Card image cap" width="100px" height="80px;">
                    </div>
                     <div class="form-group">
                         <label for="work_image" class="col-form-label col-md-2" style="font-weight: bold;">Work Image</label>
                        <input name="work_image" class="form-control" type="file" id="image">
                        @error('work_image')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                 </div>
                   <div class="col-md-12">
                    <div class="form-group pl-2">

                  <div class="controls">
                      <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status"  value="1" {{ $work->status == 1 ? 'checked': '' }}>
                      <label class="form-check-label cursor" for="status">Status</label>
                  </div>
                    </div>
                 </div>

                <div class="form-group">
                    <input class="btn btn-rounded btn-info" type="submit" value="Add">
                </div>
            </form>
        </div>
       </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#work_image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#work_showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
     </script>
@endsection
