@extends('admin.layouts.main')
@section('content')


<div class="container-fluid pt-4 px-4">
    @if ($message = Session::get('success'))
    <div class="alert alert-primary" role="alert">
        {{ $message }}
     </div>
    @endif
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Categories</h6>
                <div class="m-n2">
                   <a href="/admin/posts/create"><button type="button" class="btn btn-primary m-2">Create</button></a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ct_id</th>
                                <th scope="col">Title uz</th>
                                <th scope="col">Title ru</th>
                                <th scope="col">Body uz</th>
                                <th scope="col">Body ru</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{ $item->category_id }}</td>
                                <td>{{ $item->title_uz }}</td>
                                <td>{{ $item->title_ru }}</td>
                                <td>{{ $item->body_uz }}</td>
                                <td>{{ $item->body_ru }}</td>
                                {{-- <td>{{ $item->image }}</td> --}}
                                <td>
                                    <img alt="image" src="/images/{{ $item->img }}" width="59">
                                  </td>
                                <td>
                                    <form action="admin/posts/destroy" method="POST">
                                        <a class="btn btn-primary" href="{{ route('admin.posts.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
                                        <a class="btn btn-primary" href="{{ route('admin.posts.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>
    
                                        @csrf
                                        @method('DELETE')
    
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>
    
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                         
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection