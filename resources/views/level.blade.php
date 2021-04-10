@extends('base')

@section('content')
<div class="about">
    <div class="container">
    <h1>{{ $level->name }}</h1>
    @foreach($level->groups as $group)
        <h3>{{ $group->name }}</h3>
        <ul class="list-group">
            @if($group->documents->count())
                @foreach($group->documents as $document)
                    <li class="list-group-item">
                        <a href="{{ asset('storage/' . $document->file) }}" target="_blank">
                            <button class="btn"><i class="fa fa-download"></i> {{ $document->name }}</button>
                        </a>
                    </li>
                @endforeach
            @else
                <li class="list-group-item">prazdne...</li>
            @endif
        </ul>
    @endforeach
    </div>
</div>
@endsection
