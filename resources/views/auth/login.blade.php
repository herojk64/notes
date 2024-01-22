@extends('layout.layout')

@section('content')
    <main class="container mt-3">
        <formfield class="row">
            <legend @class('text-center font-bold text-primary')>Login !</legend>
          <x-form class="col" action="loginStore" method="POST">
              <x-input types="text" label="Username or Email!" id="user" name="user" placeholder="Enter your username or email!"></x-input>
              <x-input types="password" id="password" label="Password:" name="password" placeholder="Enter your Password!"></x-input>

              <p>don't have an Account yet: <a href="/signup">Create one</a></p>

              <x-button type="submit" @class('btn btn-primary w-50 d-block mx-auto') btnName="Login" />
              </x-form>
        </formfield>
    </main>
@endsection
