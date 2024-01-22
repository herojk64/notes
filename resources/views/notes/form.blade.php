@extends('layout.layout')

@section("content")
    <main class="container">
        <formfield class="row border m-4 p-4">
                <legend class="mb-5">{{$legend}}</legend>
                <x-form
                    action="{{$action}}"
                    method="POST"

                    class="col-lg-6 col mx-auto"
                >
                    @method($method)
                    @if($method == 'PUT')
                    <x-input types="hidden" name="slug" :value="$note['slug']" id="oldSlug" label=""/>
                    @endif
                        <x-input
                        :value="isset($note['title'])?$note['title']:''"
                        types="text"
                        label="Title"
                        name="title"
                        id="title"
                        placeholder="Enter the title of the note"
                    />
                    <x-textarea
                        label="Body:"
                        id="body"
                        name="body"
                        placeholder="Enter the body of the note"
                        :value="isset($note['body'])?$note['body']:''"
                    />
                    <x-button btnName="Submit" type="submit" @class("btn btn-primary w-100")/>
                </x-form>
        </formfield>
    </main>
@endsection
