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
          <a href="{{ route('menu.index') }}" class="btn btn-primary"><i class="fas fa-list" aria-hidden="true"></i> Menu List </a>
        </h1>
         <!-- DataTales Example -->
         <div class="row">
            <form method="post" action="{{ route('menu.store') }}" enctype="multipart/form-data">
              @csrf
               <div class="col-md-10 offset-3">
                  <div class="card shadow mb-4">
                     <div class="card-body">
                        <h4>Menu Create</h4>
                        <hr>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="name_en">Menu Name (English): <span class="text-danger">*</span></label>
                                <input type="text" name="name_en" value="" id="name_en" class="form-control" placeholder="Write menu Title English">
                                @error('name_en')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="name_bn">Menu Name (Bangla): <span class="text-danger">*</span></label>
                                <input type="text" name="name_bn" value="" id="name_bn" class="form-control" placeholder="Write menu Title Bangla">
                                @error('name_bn')
                                  <span class="text-danger">{{ $message }}</span>
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
@endsection
