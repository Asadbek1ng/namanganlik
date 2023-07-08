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
                <h6 class="mb-4">Tags</h6>
                <div class="m-n2">
                   <a href="/admin/tags/create"><button type="button" class="btn btn-primary m-2">Create</button></a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tag uz</th>
                                <th scope="col">Tag ru</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $item)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{ $item->tag_uz }}</td>
                                <td>{{ $item->tag_ru }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $tags->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection