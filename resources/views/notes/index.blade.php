@extends('layout.layout')

@section('content')
    <main class="container p-3">
        <div class="row gap-3">
            <div class="col-12">
                    <x-form action="viewNotes" method="GET">
                        <label class="input-group">
                            <input type="text" value="{{request('search')}}" class="form-control" name="search" placeholder="search">
                            <button type="submit" class="input-group-text">
                                <x-searchIcon></x-searchIcon>
                            </button>
                        </label>
                    </x-form>
            </div>

            @foreach($notes as $note)
                <x-note-preview-card :note="$note" :link="true" class="col-lg-2 col-md-4 col mx-auto"/>
            @endforeach

            {{$notes->links()}}
        </div>
    </main>
@endsection
