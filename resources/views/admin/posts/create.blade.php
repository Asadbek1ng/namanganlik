@extends('admin.layouts.main')
@section('content')
      <!-- Form Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Add Posts</h6>
                    <div class="m-n2">
                        <a href="/admin/categories/"> <button type="button" class="btn btn-primary m-2" >Back</button> </a>
                       </div>
                    <form method="POST" action="{{ route('admin.posts.store') }}">
                        @csrf
                       
                        <div class="mb-3 mt-3">
                             <select class="form-select" name="category_id">
                             <option  value="1">1</option>
                             <option  value="2">2</option>
                             <option  value="3">3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title uz</label>
                            <input name="title_uz" type="text" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title ru</label>
                            <input name="title_ru" type="text" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Body uz</label>
                            <input name="body_uz" type="text" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Body ru</label>
                            <input name="body_ru" type="text" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="image-upload" id="image-label"><h4>Add image</h4></label>
                            <input id="image-upload" name="image" type="file" class="form-control" required name="image">
                          </div>   
                        </div>
                        @error('image') <div class="alert alert-danger">{{ $message }}</div> @enderror
                      </div>                   
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection