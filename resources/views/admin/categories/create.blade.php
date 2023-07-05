@extends('admin.layouts.main')
@section('content')
      <!-- Form Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Add Categories</h6>
                    <div class="m-n2">
                        <a href="/admin/categories/"> <button type="button" class="btn btn-primary m-2" >Back</button> </a>
                       </div>
                    <form method="POST" action="{{ route('admin.categories.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name uz</label>
                            <input name="name_ru" type="text" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Name ru</label>
                            <input name="name_uz" type="text" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection