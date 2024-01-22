@props(["note"=>[],"link"=>false])

<div {{ $attributes(['class'=>"card"]) }}>
    <div class="card-body">
        <header class="card-title h5">
            @if($link)
            <a href="/notes/{{$note->slug}}">{{$note->title}}</a>
                @else
                {{$note->title}}
            @endif
        </header>
        <p class="h6">By {{$note->user->name}}</p>
        <p class="card-text">{{$note->body}}</p>
        {{$slot}}
    </div>
</div>
