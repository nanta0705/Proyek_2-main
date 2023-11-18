@extends('admin.dashboard')
@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Dashboard 01</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Katalog Makeup</li>
        </ol>
    </div>
    <div class="ms-auto pageheader-btn">
        <a class="btn btn-primary" data-bs-target="#modaldemo1" data-bs-toggle="modal" href=""><i
            class="fa fa-plus">Tambah Data</i></a>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Makeup DataTable</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">No</th>
                                <th class="wd-15p border-bottom-0">name</th>
                                <th class="wd-20p border-bottom-0">description</th>
                                <th class="wd-15p border-bottom-0">price</th>
                                <th class="wd-15p border-bottom-0">image</th>
                                <th class="wd-15p border-bottom-0">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($katalog_makeup as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->description}}</td>
                                <td>{{'Rp', number_format($data->price, 0, ', ', ',')}}</td>
                                <td><img src="{{asset(''). $data->image}}" style="width:60px;height:60"></td>
                                <td class="text-center">
                                    <a class="btn btn-warning" data-bs-target="#modaldemo2{{$data->id}}" data-bs-toggle="modal" href=""><i class="fa fa-edit"></i></a>
                                    <form method="POST" action="{{url('/admin/katalog_makeup/'.$data->id)}}">
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

{{-- Start Tambah Modal --}}

<div class="modal fade" id="modaldemo1">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Tambah Data Makeup</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{url('/owner/katalog_makeup')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">nama makeup</label>
                            <input class="form-control  mb-4 is-valid state-valid" placeholder="Masukan nama makeup" required="" type="text" name="nama">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">deskripsi</label>
                            <input class="form-control  mb-4 is-valid state-valid" placeholder="Masukan deskripsi" required="" type="text" name="description">
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">harga</label>
                            <input class="form-control  mb-4 is-valid state-valid" placeholder="Masukan harga" required="" type="number" name="price">
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">image</label>
                            <input class="form-control  mb-4 is-valid state-valid" placeholder="Masukan image"  type="file" name="image">
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
{{-- End Tambah Modal --}}
@endsection
