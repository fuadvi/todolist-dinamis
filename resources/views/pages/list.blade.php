@extends('layouts.index')

@section('content')
        <form action="{{route('/tambah')}}" method="post">
            @csrf
            <div class="todolist position-absolute top-20 start-50 translate-middle row">
                <div class="mb-3 col-6">
                    <input type="text" id="target" name="target" class="form-control">
                </div>
                <div class="mb-3 col-2">
                    <button class="btn btn-primary">add</button>
                </div>
            </div>
        </form>
        <div class="list position-absolute top-50 start-50 translate-middle">
            <div class="progress mb-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
            </div>
            <div class="list-group">
                @forelse ($listTarget as $item)
                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                @empty
                <P class="list-group-item list-group-item-action">Tidak Ada Target Yang di Inginkan Hari ini</P>
                @endforelse
            </div>
        </div>
@endsection
