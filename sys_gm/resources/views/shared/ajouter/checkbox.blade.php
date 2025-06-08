@php

$type ??='text';
$class ??=null;
$name ??='';
$value ??='';
$label ??= ucfirst($name);
@endphp
<div @class(["form-check form-switch", $class])>
    <input type="hidden" name="{{$name}}" value="{{$value}}">
    <input @checked(old($name, $value ?? false)) type="checkbox" id="{{$name}}" name="{{$name}}" role="switch">
    <label class="form-check-label" for="{{$name}}">{{$label}}</label>
    @endif

    @error($name)
    <div class="invalid-feedback">
        {{$message}}
    </div>
    @enderror
</div>


<div class="form-check">
    <input class="form-check-input" type="checkbox" id="gridCheck">
    <label class="form-check-label" for="gridCheck">
      Check me out
    </label>
</div>