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
                 <a href="/admin/categories/create"> <button type="button" class="btn btn-primary m-2" >Create</button> </a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nomi Uz</th>
                                <th scope="col">Nomi Ru</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $item)
                         
                        <tr>
                            <th scope="row">{{ +$loop->index }}</th>
                            <td>{{ $item->name_uz }}</td>
                            <td>{{ $item->name_ru }}</td>
                            <td>
                                <form action="admin/categories/destroy" method="POST">
                                    <a class="btn btn-primary" href="{{ route('admin.categories.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
                                    <a class="btn btn-primary" href="{{ route('admin.categories.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

                                </form>
                            </td>
                        </tr>
                          
                        @endforeach

                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection