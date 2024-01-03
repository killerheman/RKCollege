@extends('admin.includes.layout', ['breadcrumb_title' => 'Department'])
@section('title', 'Department')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex bg-secondary">
                    <h4 class="card-title mb-0 flex-grow-1">{{ isset($edit) ? 'Update' : 'Add' }} Department</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{ isset($edit)?route('admin.department.update',$edit->id):route('admin.department.store')}}" enctype="multipart/form-data" method="post">
                            @if (isset($edit))
                                @method('patch')
                            @endif
                            @csrf
                            <div class="row">
                              <div class="col-6">
                                <label for="name">Department Name</label>
                                <input type="text" id="name" class="form-control" value="{{ isset($edit)?$edit->department_name:'' }}" name="department_name" placeholder="Department Name">
                              </div>
                              <div class="col-6 mb-2">
                                <label for="image">Department Image</label>
                                <input type="file" id="image" class="form-control" name="image">
                                @if(isset($edit))
                                    <img src="{{isset($edit)? asset($edit->image):'' }}" alt="image" height="100" width="150">
                                @endif
                              </div>
                              <div class="col-6">
                                <button type="submit" class="btn btn-success ">{{ isset($edit)?'Update':'Submit' }}</button>   
                              </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex bg-secondary">
                    <h4 class="card-title mb-0 flex-grow-1">Manage Department</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <table class="table container table-responsive table-hover">
                        <thead>
                            <tr>
                                <th scope="col-1">Sr.No.</th>
                                <th scope="col-8">Department Name</th>
                                <th scope="col-1">Department Image</th>
                                <th scope="col-1">Created at</th>
                                <th scope="col-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <th>{{ $loop->index + 1 }}</th>
                                    <td style="word-wrap: break-word;">{{ $data->department_name??'' }}</td>
                                    <td><img src="{{ isset($data)?asset($data->image):''}}" alt="image" height="100" width="200"/></td>
                                    <td>{{ $data->created_at??'' }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('admin.department.edit',$data->id) }}" class="btn btn-primary me-3">edit</a>
                                            <form action="{{route('admin.department.destroy',$data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </div>
                                       
                                    </td>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="card-footer">
                        {!! $datas->links('pagination::bootstrap-5') !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

  
    <!-- Grids in modals -->

@section('script-area')
@endsection

@endsection
