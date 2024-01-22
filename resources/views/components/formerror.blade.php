@props(['name'=>""])

@error($name)
<p class="text-danger px-4 py-2">
    {{$message}}
</p>
@enderror
