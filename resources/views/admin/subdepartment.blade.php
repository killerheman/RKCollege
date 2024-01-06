@extends('admin.includes.layout', ['breadcrumb_title' => 'Subject Department'])
@section('title', 'Subject Department')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex bg-secondary">
                    <h4 class="card-title mb-0 flex-grow-1">{{ isset($edit) ? 'Update' : 'Add' }} Subject Department</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{ isset($edit)?route('admin.subdepartment.update',$edit->id):route('admin.subdepartment.store')}}" enctype="multipart/form-data" method="post">
                            @if (isset($edit))
                                @method('patch')
                            @endif
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label for="name">Select Department Name</label>
                                    <select class="form-select" aria-label="Default select example" name="department_id">
                                        <option selected disabled>Open this select menu</option>
                                        @foreach ($department as $dept )
                                        <option value="{{$dept->id }}" >{{ $dept->department_name }}</option>
                                        @endforeach
                                      </select>
                                  </div>
                              <div class="col-6">
                                <label for="name">Subject Name</label>
                                <input type="text" id="name" class="form-control" value="{{ isset($edit)?$edit->subject_name:'' }}" name="subject_name" placeholder="Subject Name">
                              </div>
                              <div class="col-6 mt-2">
                                <label for="image">Department Image</label>
                                <input type="file" id="image" class="form-control" name="image">
                                @if(isset($edit))
                                    <img src="{{isset($edit)? asset($edit->image):'' }}" alt="image" height="100" width="150">
                                @endif
                              </div>
                              <div class="col-12 mt-4">
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
                    <h4 class="card-title mb-0 flex-grow-1">Manage Subject Department</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <table class="table container table-responsive table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Sr.No.</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Subject Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <th>{{ $loop->index + 1 }}</th>
                                    <td style="word-wrap: break-word;">{{ $data->department->department_name??'' }}</td>
                                    <td style="word-wrap: break-word;">{{ $data->subject_name }}</td>
                                    <td><img src="{{ isset($data)?asset($data->image):''}}" alt="image" height="100" width="200"/></td>
                                    <td>{{ $data->created_at??'' }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('admin.subdepartment.edit',$data->id) }}" class="btn btn-primary me-3">edit</a>
                                            <form action="{{route('admin.subdepartment.destroy',$data->id) }}" method="post">
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
