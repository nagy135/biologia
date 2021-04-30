@extends('base')

@section('content')
<div class="about">
    <div class="container">
        @if($level)
            <h1 class="level-name">{{ $level->name }}</h1>
            @foreach($level->groups as $group)
                <h3 class="group-name">{{ $group->name }}</h3>
                <ul class="list-group">
                    @if($group->documents->count())
                        @foreach($group->documents as $document)
                            <li class="list-group-item">
                                <a href="{{ asset('storage/' . $document->file) }}" target="_blank">
                                    <button class="btn"><i class="fa fa-download"></i> {{ $document->name }}</span></button>
                                </a>
                            </li>
                        @endforeach
                    @else
                        <li class="list-group-item empty-item">prazdne...</li>
                    @endif
                </ul>
            @endforeach
        @else
            <h2>Ročník neexistuje</h2>
        @endif
    </div>
</div>
@endsection
