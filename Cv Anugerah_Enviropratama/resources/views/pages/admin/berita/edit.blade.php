@extends('layout.admin')
@section('title', 'News')
@section('content')

<div class="container-fluid">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('News.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables / News</li>
                        </ol>

                        <div class="row">
                           <div class="col">
                                <form action="{{route('News.update',$new->id)}}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    @method('PUT')
                                <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="Image">Thumbnail</label>
                                        <input type="file" name="image" class="form-control-file  @error('image') is-invalid @enderror" id="Thumbnail">
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

            
                                    </div>

                                     <div class="form-group mt-4">
                                        <label for="title">Title</label>
                                        <input value="{{ $new->title }}"  type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" >
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                     <div class="from-group mt-4">
                                            <label for="my-editor">Boddy</label>
                                            <textarea   rows="10"  name="body" id="my-editor" class="form-control  @error('body') is-invalid @enderror" placeholder="@error('Pilih') {{$message}} @enderror">{{ $new->body }}</textarea>
                                            @error('body')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>

                                      <button type="submit" class="btn btn-primary mt-2">Update</button>
                                </div>
                                </div>
                            </form>
                           </div>
                        </div>
                    </div>

                    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                <script>
                                var options = {
                                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                                };
                                </script>
                                <script>
                                CKEDITOR.replace('my-editor', options);
                                </script>
@endsection
