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
          <a href="{{ route('team.description.index') }}" class="btn btn-primary"><i class="fas fa-list" aria-hidden="true"></i> All Description </a>
        </h1>
         <!-- DataTales Example -->
         <div class="row">
            <form method="post" action="{{ route('team.description.store') }}">
              @csrf
               <div class="col-md-10 offset-1">
                  <div class="card shadow mb-4">
                     <div class="card-body">
                        <h4>Description Create</h4>
                        <hr>
                        <div class="row">
                          
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="team_descrption_en">Write Your Team Description (English): <span class="text-danger">*</span></label>
                                <textarea name="team_descrption_en" id="team_descrption_en" cols="30" rows="7" class="form-control summernote"></textarea>
                                @error('team_descrption_en')
                                  <span class="text-danger">{{ $message }}</span> 
                                @enderror
                              </div>
                            </div>
                            
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="team_descrption_bn">Write Your Team Description (Bangla): <span class="text-danger">*</span></label>
                                <textarea name="team_descrption_bn" id="team_descrption_bn" cols="30" rows="7" class="form-control summernote"></textarea>
                                @error('team_descrption_bn')
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


@endsection
