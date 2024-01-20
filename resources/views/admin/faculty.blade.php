@extends('admin.includes.layout', ['breadcrumb_title' => 'Faculty Department'])
@section('title', 'Faculty Department')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex bg-secondary">
                    <h4 class="card-title mb-0 flex-grow-1">{{ isset($edit) ? 'Update' : 'Add' }} Faculty Department</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{ isset($edit)?route('admin.faculty.update',$edit->id):route('admin.faculty.store')}}" enctype="multipart/form-data" method="post">
                            @if (isset($edit))
                                @method('patch')
                            @endif
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label for="name">Select Department Name</label>
                                    <select class="form-select dept_name" aria-label="Default select example" name="department_id">
                                        <option selected disabled>Open this select menu</option>
                                        @foreach ($department as $dept )
                                        <option value="{{$dept->id }}" >{{ $dept->department_name }}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                  <div class="col-6">
                                    <label for="name">Select Subject Name</label>
                                    <select class="form-select" id="select2Success" aria-label="Default select example" name="subject_id">
                                        
                                      </select>
                                  </div>
                              <div class="col-6">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control" value="{{ isset($edit)?$edit->name:'' }}" name="name" placeholder=" Name">
                              </div>
                              <div class="col-6">
                                <label for="email">Email</label>
                                <input type="text" id="email" class="form-control" value="{{ isset($edit)?$edit->email:'' }}" name="email" placeholder=" email">
                              </div>
                              <div class="col-6">
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" class="form-control" value="{{ isset($edit)?$edit->phone:'' }}" name="phone" placeholder=" Number">
                              </div>
                              <div class="col-6">
                                <label for="status">Status</label>
                                <input type="text" id="" class="form-control" value="{{ isset($edit)?$edit->status:'' }}" name="status" placeholder=" status">
                              </div>
                              <div class="col-6">
                                <label for="designation">Designation</label>
                                <input type="text" id="designation" class="form-control" value="{{ isset($edit)?$edit->designation:'' }}" name="designation" placeholder=" Designation">
                              </div>
                              <div class="col-6 mt-2">
                                <label for="image">Profile Image</label>
                                <input type="file" id="image" class="form-control" name="image">
                                @if(isset($edit))
                                    <img src="{{isset($edit)? asset($edit->image):'' }}" alt="image" height="100" width="150">
                                @endif
                              </div>
                              <div class="col-6 mt-2">
                                <label for="pdfFile">Upload Resume</label>
                                <input type="file" id="pdfFile" value="{{ isset($edit)?$edit->resume:'' }}" class="form-control" name="resume" accept=".pdf">    
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
                    <h4 class="card-title mb-0 flex-grow-1">Manage Faculty</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <table class="table container table-responsive table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Sr.No.</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Subject Name</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Status</th>
                                <th scope="col">Resume</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faculties as $faculty)
                                <tr>
                                    <th>{{ $loop->index + 1 }}</th>
                                    <td style="word-wrap: break-word;">{{ $faculty->department->department_name??'' }}</td>
                                    <td style="word-wrap: break-word;">{{ $faculty->subject->subject_name??'' }}</td>
                                    <td>{{ $faculty->name??'' }}</td>
                                    <td>{{ $faculty->email??'' }}</td>
                                    <td>{{ $faculty->phone??'' }}</td>
                                    <td>{{ $faculty->designation??'' }}</td>
                                    <td>{{ $faculty->status??'' }}</td>
                                    {{-- <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-modal-id="facultyModal" title="click to open">View</button></td> --}}
                                    {{-- <td><a href="{{ route('admin.faculty.show',$faculty->id) }}" data-target="#facultyModal{{ $faculty->id }}" title="click to open">view</a></td>    --}}
                                   <td><a href="{{ asset($faculty->resume??'') }}" class="button" title="click to download" download></i>Download</a></td> 
                                     <td><img src="{{ isset($faculty)?asset($faculty->image):''}}" alt="image" height="100" width="200"/></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('admin.faculty.edit',$faculty->id) }}" class="btn btn-primary me-3">edit</a>
                                            <form action="{{route('admin.faculty.destroy',$faculty->id) }}" method="post">
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
                        {!! $faculties->links('pagination::bootstrap-5') !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#pdfModal" title="click to open">View</button> --}}
    <div class="modal fade modal-dialog modal-lg" id="facultyModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                @foreach ($faculties as $faculty)
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{ $faculty->name??'' }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- <embed src="{{ isset($faculty)?asset($faculty->resume):'Resume Not Upload'  }}" type="application/pdf" width="100%" height="600px" /> --}}
                    <object data="{{ isset($faculty)?asset($faculty->resume):'Resume Not Upload'  }}" type="application/pdf" width="100%" height="600px" ></object>
                        
                    </div>
                    @endforeach
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


@section('script-area')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script>
    $(document).ready(function () {
        $('.dept_name').on('change', function () {     
        var dept_id=$(this).val();
        var new_url = "{{url('admin/sub-faculty')}}"+'/'+dept_id;
          $.ajax({
            type: "get",
            url: new_url,
            success: function (response) {
                $('#select2Success').html(response);
            }
          });
       });
    });
</script>
<script>
    function validateFile() {
        var fileInput = document.getElementById('pdfFile');
        var filePath = fileInput.value;
        var allowedExtensions = /(\.pdf)$/i;

        if (!allowedExtensions.exec(filePath)) {
            alert('Please select a PDF file.');
            fileInput.value = '';
            return false;
        }
    }
</script>

<script>
    $(document).ready(function() {
        // Click event for the button
        $('button[data-modal-id]').on('click', function() {
            // Get the modal ID from the data attribute
            var modalId = $(this).data('modal-id');
    
            // Open the modal with the specified ID
            $('#' + modalId).modal('show');
        });
    });
    </script>
@endsection

@endsection
