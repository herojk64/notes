@extends('layout.layout')
@section('content')
    <main>
            <x-form class="p-4" action="register" method="POST" enctype="multipart/form-data">
                <div @class('mb-4')>
                    <label for="profile" @class('form-label')>
                        Profile Picture
                    </label>
                    <input type="file" name="profile" id="profile" @class('form-control') accept="img/*"/>
                    <x-formerror name="profile"/>
                </div>
            <x-input types="text" label="Full Name:" name="name" id="name" placeholder="Enter your name!" />
            <x-input types="email" label="Email:" name="email" id="email" placeholder="Enter your Email!" />
            <x-input types="text" label="Username:" name="username" id="username" placeholder="Enter your Username!" />
            <x-input types="password" label="Password:" name="password" id="password" placeholder="Enter your Password!" />
            <x-button type="submit" class="btn btn-primary w-100" btnName="submit" />
            </x-form>
    </main>
@endsection
