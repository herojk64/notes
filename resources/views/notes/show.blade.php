@extends('layout.layout')

@section('content')
    <main class="container p-3">
        <div class="row">
            <div class="col-12">
                <a href="/notes">Go back</a>
            </div>
            <x-note-preview-card :note="$notes" class="col-12 mt-3 border-0" >
                <div class="d-flex gap-2">
                    <a href="/note/edit/{{$notes->slug}}" class="btn btn-warning text-light d-block ms-auto">Edit</a>
                <x-form action="deleteNotes" :params="[$notes->slug]" method="POST">
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </x-form>
                </div>
            </x-note-preview-card>
        </div>
    </main>
@endsection
