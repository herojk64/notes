<div class='mb-4 {{$types === "hidden"?'d-none':''}}'>
   @if(isset($label) && $label)
    <label for="{{$id}}" class="form-label">
       {{$label}}
   </label>
    @endif
    <input
        id="{{$id}}"
        name="{{$name}}"
        type="{{$types}}"
        value="{{$value?:old($name)}}"
        class="form-control"
        placeholder="{{$placeholder}}"
    />
    <x-formerror :name="$name" />
</div>
