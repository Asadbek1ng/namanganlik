@extends('admin.layouts.main')
@section('content')
      <!-- Form Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Add Tags</h6>
                    <div class="m-n2">
                        <a href="/admin/tags/"> <button type="button" class="btn btn-primary m-2" >Back</button> </a>
                       </div>
                    <form method="POST" action="{{ route('admin.tags.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Title uz</label>
                            <input name="tag_uz" type="text" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp">
                        </div>   
                        <div class="mb-3">
                            <label class="form-label">Title ru</label>
                            <input name="tag_ru" type="text" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp">
                        </div>            
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection