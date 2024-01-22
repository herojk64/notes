<div class="mb-3">
    <label for="{{$id}}" class="form-label">
       {{$label}}
    </label>
    <textarea name="{{$name}}" id="{{$id}}" placeholder="{{$placeholder}}" class="form-control" style="resize: none" cols="{{$cols}}" rows="{{$rows}}">{{$value?:''}}</textarea>
    <x-formerror :name="$name" />
</div>
