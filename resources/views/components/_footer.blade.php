<footer @class("container-fluid mt-5 bg-secondary p-3 w-100 align-content-bottom")>
    <div @class("row")>
        <div @class("col-lg-6 col-12 mx-auto")>
            <x-form action="subscription" method="POST">
                <header class="h1 text-light text-center">Subscribe</header>
                <x-input
                    types="email"
                    name="subscribe"
                    id="subscribe_input"
                    placeholder="Enter email"
                    value="{{auth()->check()?auth()->user()->email:''}}"
                />
                <x-button type="submit" @class("btn btn-primary w-100") btnName="Subscribe"/>
            </x-form>
        </div>
    </div>
</footer>
