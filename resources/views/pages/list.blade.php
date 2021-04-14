@extends('layouts.index')

@section('content')
@if (session('status'))
    <div class="alert alert-success mb-3 mt-3">
        {{ session('status') }}
    </div>
@endif
        <form action="{{route('tambah')}}" method="post">
            @csrf
            <div class="todolist position-absolute top-20 start-50 translate-middle row mb-5 mt-3 d-inline-flex">
                <div class="mb-3 col-6">
                    <input type="text" id="target" name="target" class="form-control">
                </div>
                <div class="mb-3 col-2">
                    <button class="btn btn-primary">add</button>
                </div>
            </div>
        </form>
        <div class="list position-absolute top-50 start-50 translate-middle d-inline-block">
            <div class="progress mb-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: {{ $bar }}%"></div>
            </div>
            <div class="list-group">
                @forelse ($listTarget as $item)
                    <a href="{{ $item->id }}" class="list-group-item list-group-item-action @if ($item->status == 1) text-miring @endif">{{ $item->target }}</a>
                @empty
                <P class="list-group-item list-group-item-action">Tidak Ada Target Yang di Inginkan Hari ini</P>
                @endforelse
            </div>
        </div>
@endsection
