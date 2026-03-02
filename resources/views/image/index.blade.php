@extends('layouts.app')
@section('title', 'Image - Online Store')
@section('subtitle', 'Upload image')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Upload image</div>
        <div class="card-body">
          <form method="POST" action="{{ route('image.save') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="profile_image" class="form-label">Select image</label>
              <input type="file" class="form-control" id="profile_image" name="profile_image" accept="image/*" />
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
