@extends('layouts.app2')
@section('admin')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
   <!-- Main Content -->
   <div id="content">
      <!-- Begin Page Content -->
      <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 text-right">
          <a href="{{ route('banner.index') }}" class="btn btn-primary"><i class="fas fa-list" aria-hidden="true"></i> Banner List </a>
        </h1>
         <!-- DataTales Example -->
         <div class="row">
            <form method="post" action="{{ route('banner.update',$banner->id) }}" enctype="multipart/form-data">
              @csrf
               <div class="col-md-10 offset-1">
                  <div class="card shadow mb-4">
                     <div class="card-body">
                        <h4>Banner Edit</h4>
                        <hr>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="title_en">Banne Title (English): <span class="text-danger">*</span></label>
                                <input type="text" name="title_en"  id="title_en" class="form-control"  value="{{ $banner->title_en }}">
                                @error('title_en')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="title_bn">Banne Title (Bangla): <span class="text-danger">*</span></label>
                                <input type="text" name="title_bn"  id="title_bn" class="form-control" value="{{ $banner->title_bn }}">
                                @error('title_bn')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="description_en">Banner Description (English): <span class="text-danger">*</span></label>
                                <input type="text" name="description_en"  id="description_en" class="form-control" value="{{ $banner->description_en }}">
                                @error('description_en')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="description_bn">Banner Description (Bangla): <span class="text-danger">*</span></label>
                                <input type="text" name="description_bn"  id="description_bn" class="form-control" value="{{ $banner->description_bn }}">
                                @error('description_bn')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="button_name_en">Button Name(English): <span class="text-danger">*</span></label>
                                <input type="text" name="button_name_en"  id="button_name_en" class="form-control"  value="{{ $banner->button_name_en }}">
                                @error('button_name_en')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="button_name_bn">Button Name(Bangla): <span class="text-danger">*</span></label>
                                <input type="text" name="button_name_bn"  id="button_name_bn" class="form-control" value="{{ $banner->button_name_bn }}">
                                @error('button_name_bn')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                            <div class="form-group">
                                <img id="showImage"  class="rounded avatar-lg" src="{{ asset($banner->banner_image)}}" alt="Card image cap" width="100px" height="80px;">
                            </div>
                             <div class="form-group">
                                 <label for="banner_image" class="col-form-label col-md-2" style="font-weight: bold;">Banner Image</label>
                                <input name="banner_image" class="form-control" type="file" id="image">
                                @error('banner_image')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            </div>
                           </div>


                           <div class="col-md-12">
                              <div class="form-group pl-2">

                            <div class="controls">
                                <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status"  value="1" {{ $banner->status == 1 ? 'checked': '' }}>
                                <label class="form-check-label cursor" for="status">Status</label>
                            </div>
                              </div>
                           </div>
                           <div class="col-md-12 text-right">
                              <div class="form-group">
                                <button class="btn btn-success" type="submit">Update</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- End of Main Content -->
</div>

<!-- blood Image Show -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#banner_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#banner_showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection
