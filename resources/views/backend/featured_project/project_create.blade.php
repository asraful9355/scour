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
          <a href="{{ route('project.index') }}" class="btn btn-primary"><i class="fas fa-list" aria-hidden="true"></i> All Project </a>
        </h1>
         <!-- DataTales Example -->
         <div class="row">
            <form method="post" action="{{ route('project.store') }}" enctype="multipart/form-data">
              @csrf
               <div class="col-md-10 offset-1">
                  <div class="card shadow mb-4">
                     <div class="card-body">
                        <h4>Project Create</h4>
                        <hr>
                        <div class="row">
                          
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="title_en">Title (English): <span class="text-danger">*</span></label>
                                <input type="text" name="title_en" value="" id="title_en" class="form-control" placeholder="Write about Title English">
                                @error('title_en')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="title_bn">Title (Bangla): <span class="text-danger">*</span></label>
                                <input type="text" name="title_bn" value="" id="title_bn" class="form-control" placeholder="Write about Title Bangla">
                                @error('title_bn')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>

                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="sub_title_en">Sub Title (English): <span class="text-danger">*</span></label>
                                <input type="text" name="sub_title_en" value="" id="sub_title_en" class="form-control" placeholder="Write about Title English">
                                @error('sub_title_en')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="sub_title_bn">Sub Title (Bangla): <span class="text-danger">*</span></label>
                                <input type="text" name="sub_title_bn" value="" id="sub_title_bn" class="form-control" placeholder="Write about Title Bangla">
                                @error('sub_title_bn')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="image">Priject Image</label>
                                <span class="text-danger">*</span>

                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="form-control" name="image" id="image">
                                  </div>
                                  <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                  </div>
                                </div>
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="mb-2">
                                  <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="No Image" width="100px" height="80px;">
                                </div>
                              </div>
                            </div>
                          
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="desccription_en">Description (English): <span class="text-danger">*</span></label>
                                <textarea name="desccription_en" id="desccription_en" cols="30" rows="7" class="form-control summernote" placeholder="Write Project English Description"></textarea>
                                @error('desccription_en')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="desccription_bn">Description (Bangla): <span class="text-danger">*</span></label>
                                <textarea name="desccription_bn" id="desccription_bn" cols="30" rows="7" class="form-control summernote" placeholder="Write Project Bangla Description"></textarea>
                                @error('desccription_bn')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                  <label for="status">Status</label>
                                   <span class="text-danger">*</span>
                                  <select name="status" id="status" class="form-control">
                                      <option selected disabled>choose status </option>
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


    <!-- Image Show -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
