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
                <h3 class="card-title">Responsive DataTable</h3>
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
@endsection
