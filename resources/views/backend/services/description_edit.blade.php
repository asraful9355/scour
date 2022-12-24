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
          <a href="{{ route('services.description.index') }}" class="btn btn-primary"><i class="fas fa-list" aria-hidden="true"></i> All Description </a>
        </h1>
         <!-- DataTales Example -->
         <div class="row">
            <form method="post" action="{{ route('services.description.update',$description->id)}}" enctype="multipart/form-data">
              @csrf
               <div class="col-md-10 offset-1">
                  <div class="card shadow mb-4">
                     <div class="card-body">
                        <h4>Edit Service Description</h4>
                        <hr>
                        <div class="row">
                           
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="image">Festured Image</label>
                              <span class="text-danger">*</span>
                              @error('image')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                              <div class="mb-2">
                                <img id="showImage" class="rounded avatar-lg showImage" src="{{ asset($description->image) }}" alt="No Image" width="100px" height="80px;">
                              </div>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="form-control" name="image" id="image">
                                </div>
                                <div class="input-group-append">
                                  <span class="input-group-text">Upload</span>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                              <div class="form-group">
                                <label for="service_descrption_en">Write Your Service Description (English): <span class="text-danger">*</span></label>
                                <textarea name="service_descrption_en" id="service_descrption_en" cols="30" rows="7" class="form-control summernote"> {!! $description->service_descrption_en !!} </textarea>
                                @error('service_descrption_en')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                            <div class="form-group">
                                <label for="service_descrption_bn">Write Your Service Description (Bangla): <span class="text-danger">*</span></label>
                                <textarea name="service_descrption_bn" id="service_descrption_bn" cols="30" rows="7" class="form-control summernote"> {!! $description->service_descrption_bn !!} </textarea>
                                @error('service_descrption_bn')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>


                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="status">Status</label>
                                    <span class="text-danger">*</span>

                                  <select name="status" id="status" class="form-control">
                                    @if ($description->status == 1)
                                    <option value="1" selected>Active</option>
                                    <option value="0">Disable</option>
                                    @else
                                    <option value="1">Active</option>
                                    <option value="0" selected>Disable</option>
                                    @endif

                                </select>
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
