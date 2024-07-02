@extends('layouts.app')

@section('style')
    <style>
        #modalOverlay {
            display: none;
            position: fixed;
            cursor: pointer;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 999;
        }

        #modalContent {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        #fullSizeImage {
            max-width: 70%;
            max-height: 70%;
        }
    </style>
@endsection

@section('content')
<div id="modalOverlay">
    <div id="modalContent">
        <img id="fullSizeImage">
    </div>
</div>
{{-- awal --}}
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">INVENTARIS</h3>
            </div>
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body ">
                        <p class="card-title">Data Aset</p>
                        <div class="row">
                            <div class="col-12">
                                <a type="button" href="{{route('inventaris.create')}}" class="btn btn-primary float-right mb-3">tambah</a>
                                <div class="table-responsive">
                                    <!-- <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search"> -->
                                    <!-- TBL -->
                                    <table id="dataAset" class="table table-bordered display">
                                        <thead>
                                            <tr>
                                                {{-- <th>
                                                    NO.
                                                </th> --}}
                                                <th>
                                                    Kode Aset
                                                </th>
                                                <th>
                                                    Nama
                                                </th>
                                                <th>
                                                    Kondisi
                                                </th>
                                                <th>
                                                    Keterangan
                                                </th>
                                                <th>
                                                    Stok
                                                </th>
                                                <th>
                                                    Tanggal Register
                                                </th>
                                                @role('admin')
                                                <th>
                                                    Penanggung Jawab
                                                </th>
                                                @endrole
                                                <th>
                                                    Foto
                                                </th>
                                                <th>
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($inventaris as $aset)
                                            <tr>
                                                {{-- <td>{{$loop->iteration}}</td> --}}
                                                <td>{{$aset->id}}</td>
                                                <td>{{$aset->nama}}</td>
                                                <td>{{$aset->kondisi}}</td>
                                                <td>{{$aset->keterangan}}</td>
                                                <td>{{$aset->stok}}</td>
                                                <td>{{$aset->created_at}}</td>
                                                @role('admin')
                                                <td>{{$aset->organisasi->nama}}</td>
                                                @endrole
                                                <td><img class="thumbnail" data-fullsize="{{url('aset-inventaris/' .$aset->foto)}}" style="width: 50px; cursor: pointer;" src="{{url('aset-inventaris/' .$aset->foto)}}" alt=""></td>
                                                <td>
                                                    <a href="{{route('inventaris.edit', $aset->id)}}"  class="btn btn-info btn-rounded btn-icon-text"><i class="ti-pencil btn-icon-prepend"></i>ubah</a>
                                                    <a href="{{route('inventaris.destroy', $aset->id)}}" class="btn btn-danger btn-rounded btn-icon-text"><i class="ti-trash btn-icon-prepend"></i>Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- END-TBL -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
{{-- /awal --}}



@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
    	
        $('#dataAset').DataTable();
        
        const thumbnails = document.querySelectorAll(".thumbnail");
        const modalOverlay = document.getElementById("modalOverlay");
        const fullSizeImage = document.getElementById("fullSizeImage");

        thumbnails.forEach(function(thumbnail) {
            thumbnail.addEventListener("click", function() {
                const fullsize = this.getAttribute("data-fullsize");
                fullSizeImage.src = fullsize;
                modalOverlay.style.display = "block";
            });
        });

        modalOverlay.addEventListener("click", function() {
            modalOverlay.style.display = "none";
        });

        modalContent.addEventListener("click", function(event) {
            event.stopPropagation();
        });
    });
</script>
@endsection