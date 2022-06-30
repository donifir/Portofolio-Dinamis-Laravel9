@extends('layouts.dasboard')

@section('content-title')

@endsection

@section('content-body')
<form action="/admin/project/{{$project->id}}/edit" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="namaproject" class="form-label">Nama Project</label>
        <input type="text" class="form-control" id="namaproject" name="namaproject" value="{{ old('namaproject') ? old('namaproject') : $project->nama_project}}">
        @error('namaproject')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <input type="text" class="form-control" id="category" name="category" value="{{ old('category') ? old('category') : $project->category}}">
        @error('category')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="client" class="form-label">Client</label>
        <input type="text" class="form-control" id="client" name="client" value="{{ old('client') ? old('client') : $project->client}}">
        @error('client')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="projectdate" class="form-label">Project Date</label>
        <input type="text" class="form-control" id="projectdate" name="projectdate" value="{{ old('projectdate') ? old('projectdate') : $project->project_date}}">
        @error('projectdate')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi') ? old('deskripsi') : $project->deskripsi}}</textarea>
        @error('deskripsi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="gambar1">File input</label>

        <div class="form-group">
            <input type="file" class="form-control-file" id="gambar1" name="gambar1">
            @error('gambar1')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="file" class="form-control-file" id="gambar2" name="gambar2">
            @error('gambar2')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="file" class="form-control-file" id="gambar3" name="gambar3">
            @error('gambar3')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

@section('content-footer')
content-footer
@endsection