@extends('layouts.app2')
@section('admin')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-right"><a href="{{ route('work.create') }}" class="btn btn-primary"><i class="fas fa-plus" aria-hidden="true"></i> Create</a></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
       <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Manage work</h6>
       </div>
       <div class="card-body">
          <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                   <tr>
                      <th width="5%">Serial</th>
                      <th width="5%">work Image</th>
                      <th width="15%">work Title En</th>
                      <th width="25%">work Title Bn</th>
                      <th width="15%">Description En</th>
                      <th width="25%">Description Bn</th>
                      <th width="25%">Category Name</th>
                      <th width="10%">Status</th>
                      <th width="15%">Action</th>
                   </tr>
                </thead>
                <tbody>
                @foreach($works as $item)
                   <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td><img src="{{ asset($item->work_image) }}" width="70" height="70" alt="work"></td>
                      <td>{{ $item->title_en }}</td>
                      <td>{{ $item->title_bn }}</td>
                      <td>{{ $item->description_en }}</td>
                      <td>{{ $item->description_bn }}</td>
                      <td>{{ $item->category->category_slug_en }}</td>
                      <td>
                        @if($item->status == 1)
                        <a href="{{ route('work.in_active',['id'=>$item->id]) }}" class="btn btn-success btn-sm">Active</a>
                                        @else
                        <a href="{{ route('work.active',['id'=>$item->id]) }}" class="btn btn-danger btn-sm">Inactive</a>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('work.edit', $item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('work.destroy', $item->id) }}" class="btn btn-danger" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
                      </td>
                   </tr>
                 @endforeach

                </tbody>
             </table>
          </div>
       </div>
    </div>
@endsection
