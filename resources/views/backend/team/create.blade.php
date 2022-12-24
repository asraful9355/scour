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
          <a href="{{ route('team.index') }}" class="btn btn-primary"><i class="fas fa-list" aria-hidden="true"></i> All Team </a>
        </h1>
         <!-- DataTales Example -->
         <div class="row">
            <form method="post" action="{{ route('team.store') }}" enctype="multipart/form-data">
              @csrf
               <div class="col-md-10 offset-1">
                  <div class="card shadow mb-4">
                     <div class="card-body">
                        <h4>Team Create</h4>
                        <hr>
                        <div class="row">

                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="image">Image</label>
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
                                <label for="name_en">Name (English): <span class="text-danger">*</span></label>
                                <input type="text" name="name_en" value="" id="name_en" class="form-control" placeholder="Write .....">
                                @error('name_en')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="name_bn">Name (Bangla): <span class="text-danger">*</span></label>
                                <input type="text" name="name_bn" value="" id="name_bn" class="form-control" placeholder="Write .....">
                                @error('name_bn')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title_en">Designation (English): <span class="text-danger">*</span></label>
                                <input type="text" name="title_en" value="" id="title_en" class="form-control" placeholder="Write .....">
                                @error('title_en')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title_bn">Designation (Bangla): <span class="text-danger">*</span></label>
                                <input type="text" name="title_bn" value="" id="title_bn" class="form-control" placeholder="Write .....">
                                @error('title_bn')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="facebook_url">Facebool (URL): <span class="text-danger">*</span></label>
                                <input type="text" name="facebook_url" value="" id="facebook_url" class="form-control" placeholder="url .....">
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="twitter_url">Twitter (URL): <span class="text-danger">*</span></label>
                                <input type="text" name="twitter_url" value="" id="twitter_url" class="form-control" placeholder="url .....">
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="behance_url">Behance (URL): <span class="text-danger">*</span></label>
                                <input type="text" name="behance_url" value="" id="behance_url" class="form-control" placeholder="url .....">
                              </div>
                             </div>

                             <div class="col-md-12">
                              <div class="form-group">
                                <label for="envelope_url">Envelope (URL): <span class="text-danger">*</span></label>
                                <input type="text" name="envelope_url" value="" id="envelope_url" class="form-control" placeholder="url .....">
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
