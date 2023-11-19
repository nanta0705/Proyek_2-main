@extends('admin.dashboard')
@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Dashboard 01</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
        </ol>
    </div>
    <div class="ms-auto pageheader-btn">
        <a class="btn btn-primary" data-bs-target="#modaldemo1" data-bs-toggle="modal" href="">View Live Demo</a>
        <a href="javascript:void(0);" class="btn btn-success btn-icon text-white">
            <span>
                <i class="fe fe-log-in"></i>
            </span> Export
        </a>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Responsive DataTable</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">No</th>
                                <th class="wd-15p border-bottom-0">Username</th>
                                <th class="wd-20p border-bottom-0">Alamat</th>
                                <th class="wd-15p border-bottom-0">No Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->no_tlp}}</td>
                                <td>{{$data->username}}</td>
                                <td class="text-center">
                                    <a class="btn btn-warning" data-bs-target="#modaldemo2{{$data->id}}" data-bs-toggle="modal" href=""><i class="fa fa-edit"></i></a>
                                    <form method="POST" action="{{url('/admin/data_owner/'.$data->id)}}">
                                        @method('delete')
                                        @csrf
                                    <button type="submit" onclick="return confirm('apakah data ingin dihapus')"
                                        class="btn btn-danger ">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Create Modal --}}
<div class="modal fade" id="modaldemo1">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{url('/admin/data_owner')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">nama</label>
                            <input class="form-control  mb-4 is-valid state-valid" placeholder="Masukan Nama" required="" type="text" name="nama">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">alamat</label>
                            <input class="form-control  mb-4 is-valid state-valid" placeholder="Masukan alamat" required="" type="text" name="alamat">
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">no telepon</label>
                            <input class="form-control  mb-4 is-valid state-valid" placeholder="Masukan no telepon" required="" type="number" name="no_telepon">
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">email</label>
                            <input class="form-control  mb-4 is-valid state-valid" placeholder="Masukan email" required="" type="email" name="email">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Create Modal --}}

{{-- Start Edit Modal --}}
@foreach ($user as $edit)


<div class="modal fade" id="modaldemo2{{$edit->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Edit</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{url('/admin/data_owner/' .$edit->id)}}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">name</label>
                            <input value="{{$edit->name}}" class="form-control  mb-4 is-valid state-valid" placeholder="Masukan Nama" required="" type="text" name="nama">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">alamat</label>
                            <input value="{{$edit->alamat}}" class="form-control  mb-4 is-valid state-valid" placeholder="Masukan alamat" required="" type="text" name="alamat">
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">no telepon</label>
                            <input value="{{$edit->no_tlp}}" class="form-control  mb-4 is-valid state-valid" placeholder="Masukan no telepon" required="" type="number" name="no_telepon">
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">email</label>
                            <input value="{{$edit->email}}" class="form-control  mb-4 is-valid state-valid" placeholder="Masukan email" required="" type="email" name="email">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
{{-- End Edit Modal --}}
@endsection
