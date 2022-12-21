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
            <form method="post" action="{{ route('banner.store') }}" enctype="multipart/form-data">
              @csrf
               <div class="col-md-10 offset-1">
                  <div class="card shadow mb-4">
                     <div class="card-body">
                        <h4>Banner Create</h4>
                        <hr>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="title_en">Banne Title (English): <span class="text-danger">*</span></label>
                                <input type="text" name="title_en" value="" id="title_en" class="form-control" placeholder="Write Banner Title English">
                                @error('title_en')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="title_bn">Banne Title (Bangla): <span class="text-danger">*</span></label>
                                <input type="text" name="title_bn" value="" id="title_bn" class="form-control" placeholder="Write Banner Title Bangla">
                                @error('title_bn')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="description_en">Banner Description (English): <span class="text-danger">*</span></label>
                                <input type="text" name="description_en" value="" id="description_en" class="form-control" placeholder="Write Banner Description English ">
                                @error('description_en')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="description_bn">Banner Description (Bangla): <span class="text-danger">*</span></label>
                                <input type="text" name="description_bn" value="" id="description_bn" class="form-control" placeholder="Write Banner Description Bangla ">
                                @error('description_bn')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="button_name_en">Button Name(English): <span class="text-danger">*</span></label>
                                <input type="text" name="button_name_en" value="" id="button_name_en" class="form-control" placeholder="Write Button Name English">
                                @error('button_name_en')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="button_name_bn">Button Name(Bangla): <span class="text-danger">*</span></label>
                                <input type="text" name="button_name_bn" value="" id="button_name_bn" class="form-control" placeholder="Write Button Name Bangla">
                                @error('button_name_bn')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                            <div class="form-group">
                                <img id="banner_showImage" class="rounded avatar-lg" src="{{ (!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap" width="100px" height="80px;">
                             </div>
                             <div class="form-group">
                                <label for="banner_image" class="col-form-label col-md-4" style="font-weight: bold;">Banner Image:(size:324,346)</label>
                                <input name="banner_image" class="form-control" type="file" id="banner_image">
                                @error('banner_image')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                             </div>
                           </div>


                           <div class="col-md-12">
                              <div class="form-group">
                                  <label for="status">Status</label>
                                   <span class="text-danger">*</span>
                                  <select name="status" id="status" class="form-control">
                                      <option value="1">Active</option>
                                      <option value="0">Disable</option>
                                  </select>
                              </div>
                           </div>
                           <div class="col-md-12 text-right">
                              <div class="form-group">
                                <button class="btn btn-success" type="submit">Save</button>
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
