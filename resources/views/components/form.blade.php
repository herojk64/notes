<form
    {{$attributes}}
      {{$action?"action=".route($action,$params):''}}
      {{$method?"method={$method}":''}}
    {{$enctype?"enctype={$enctype}":''}}
>
    @csrf
{{$slot}}
</form>
