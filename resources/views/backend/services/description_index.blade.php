@extends('layouts.app2')
@section('admin')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-right"><a href="{{ route('services.description.create') }}" class="btn btn-primary"><i class="fas fa-plus" aria-hidden="true"></i> Create</a></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
       <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Our Services</h6>
       </div>
       <div class="card-body">
          <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                   <tr>
                      <th width="5%">Serial</th>
                      <th width="5%">Featured</th>
                      <th width="60%">Description</th>
                      <th width="10%">Status</th>
                      <th width="15%">Action</th>
                   </tr>
                </thead>
                <tbody>
                @foreach($descriptions as $item)
                   <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td><img src="{{ asset($item->image) }}" width="70" height="70" alt="banner"></td>
                      <td>{!! $item->service_descrption_en !!}</td>
                      <td>
                        @if($item->status == 1)
                        <a href="{{ route('services.description.in_active',['id'=>$item->id]) }}" class="btn btn-success btn-sm">Active</a>
                        @else
                        <a href="{{ route('services.description.active',['id'=>$item->id]) }}" class="btn btn-danger btn-sm">Inactive</a>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('services.description.edit', $item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('services.description.destroy', $item->id) }}" class="btn btn-danger" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
                      </td>
                   </tr>
                 @endforeach

                </tbody>
             </table>
          </div>
       </div>
    </div>
@endsection
