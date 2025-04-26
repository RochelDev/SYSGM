@php

$type ??='text';
$class ??=null;
$name ??='';
$value ??='';
$valueMember ??='';
$displayMember ??='';
$label ??= ucfirst($name);
$condfor ??='';
@endphp
<div @class($class)>

    {{-- Mon code améliorer par copilot --}}
    <label for="{{$name}}" class="form-label">{{$label}}</label>
    <select name="{{$name}}" id="{{$name}}" class="form-select">
        @foreach($condfor as $item)
            <option value="{{ $item[$valueMember] }}" @if($item[$valueMember] == old($name, $value)) selected @endif>
                {{ $item[$displayMember] }}
            </option>
        @endforeach
    </select>


    {{-- @include('shared.select', [ 'class' => 'col', 'name' => 'commune_id', 'valueMember' => $commune->id, 'displayMember' => $commune->lib_com, 'condfor' => $communes, 'value' => $annonce->commune_id ]) --}}






    {{-- Mon code --}}
    {{-- <label for="{{$name}}" class="form-label">{{$label}}</label>
    <select name="{{$name}}" id="{{$name}}" class="form-select">
        @foreach($condfor)
        <option value="{{ $valueMember }}" @if($valueMember == {{old($name, $value)}}) @endif>
        {{ $displayMember }}
        </option>
        @endforeach
    </select> --}}
    
</div>



