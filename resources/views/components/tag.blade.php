@props(['tag','size' => 'base'])

@php
$classes = "bg-white/10 rounded-xl font-bold hover:bg-white/25 transition-colors duration-300";

if($size === 'base'){
$classes.= " px-2 py-1 text-sm";
}elseif($size === 'small'){
$classes.= " px-3 py-1 text-2xs";
}

@endphp


<a href="/tags/{{$tag->name}}" class="{{ $classes }}">{{ $tag->name}}</a>