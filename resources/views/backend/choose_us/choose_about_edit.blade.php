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
          <a href="{{ route('choose_about.index') }}" class="btn btn-primary"><i class="fas fa-list" aria-hidden="true"></i> Choose List </a>
        </h1>
         <!-- DataTales Example -->
         <div class="row">
            <form method="post" action="{{ route('choose_about.update',$choose->id) }}">
              @csrf
               <div class="col-md-10 offset-1">
                  <div class="card shadow mb-4">
                     <div class="card-body">
                        <h4>Choose About Edit</h4>
                        <hr>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="title_en">Title(English): <span class="text-danger">*</span></label>
                                <input type="text" name="title_en" value="{{ $choose->title_en }}" id="title_en" class="form-control" >
                                @error('title_en')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="title_bn">Title(Bangla): <span class="text-danger">*</span></label>
                                <input type="text" name="title_bn" value="{{ $choose->title_bn }}" id="title_bn" class="form-control" >
                                @error('title_bn')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="description_en">Description(English): <span class="text-danger">*</span></label>
                                <textarea name="description_en" id="description_en" cols="30" rows="7" class="form-control summernote">{{ $choose->description_en }}</textarea>

                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="description_bn">Description(Bangla): <span class="text-danger">*</span></label>
                                <textarea name="description_bn" id="description_bn" cols="30" rows="7" class="form-control summernote">{{ $choose->description_bn }}</textarea>

                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="icon_url">Icon Url: <span class="text-danger">*</span></label>
                                <input type="text" name="icon_url" value="{{ $choose->icon_url }}" id="icon_url" class="form-control" >
                                @error('icon_url')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>

                           <div class="col-md-12">
                              <div class="form-group pl-3">
                                <div class="controls">
                                    <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status" checked value="1" {{ $choose->status == 1 ? 'checked': '' }}>
                                    <label class="form-check-label cursor" for="status">Status</label>
                                </div>
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
@endsection
