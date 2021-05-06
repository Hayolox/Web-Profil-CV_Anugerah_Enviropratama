@extends('layout.admin')
@section('title', 'News')
@section('content')

<div class="container-fluid">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>

                        <div class="row">
                            <div class="col mt-2">
                                <a href="{{ route('News.create') }}">
                                        <div class="btn btn-primary">
                                            Tambahkan Data
                                        </div>
                                </a>
                            </div>

                            <div class="col">
                                <nav class="navbar d-flex justify-content-end">
                                 <form class="form-inline" method="GET">
                                    @csrf
                                     <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                                     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                                </nav>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                @php
                                    $new = \App\Models\News::count();
                                @endphp
                               @if ($new)
                                   <div class="table-responsive">
                                    <table class="table table-bordered  table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>

                                          <tbody>
                                          @foreach ($news as $aye => $new)
                                                <tr>
                                                <th scope="row">{{$news->firstItem()+$aye}}</th>
                                                <td>
                                                     <img src="{{ Storage::url($new->image) }}" alt="" style="width: 150px">
                                                </td>
                                                <td>{{ $new->title }}</td>
                                                <td>
                                                    <a href="{{ route('News.edit',$new->id) }}" class=" btn btn-info"> <i class="fas fa-pencil-alt"></i></a>
                                                    <form action="{{ route('News.destroy', $new->id) }}" method="POST" class="d-inline" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                    </form>
                                                </td>
                                                </tr

                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <div>
                                    Showing
                                    {{ $news->firstItem() }}
                                    to
                                    {{ $news->lastItem() }}
                                    of
                                    {{ $news->total() }}

                                </div>
                                <div class="d-flex justify-content-end">
                                    {{$news->onEachSide(5)->links()}}
                                </div>

                                @else
                                <div class="row">
                                    <div class="col btn  btn-info">
                                               Data Kosong
                                    </div>
                                </div>
                               @endif
                            </div>
                        </div>
                    </div>

@endsection
