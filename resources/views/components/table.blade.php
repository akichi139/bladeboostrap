@props([
    'header' => '',

    'striped' => false,

    'has_shadow' => false,
    'hasShadow' => false,

    'divided' => true,

    'divider' => 'regular',

    'hover_effect' => true,
    'hoverEffect' => true,

    'compact' => false,

    'name' => '',
])
@php
    $has_shadow = filter_var($has_shadow, FILTER_VALIDATE_BOOLEAN);
    $hasShadow = filter_var($hasShadow, FILTER_VALIDATE_BOOLEAN);
    $hover_effect = filter_var($hover_effect, FILTER_VALIDATE_BOOLEAN);
    $hoverEffect = filter_var($hoverEffect, FILTER_VALIDATE_BOOLEAN);
    $striped = filter_var($striped, FILTER_VALIDATE_BOOLEAN);
    $compact = filter_var($compact, FILTER_VALIDATE_BOOLEAN);
    $divided = filter_var($divided, FILTER_VALIDATE_BOOLEAN);
    if ($hasShadow) $has_shadow = $hasShadow;
    if (!$hoverEffect) $hover_effect = $hoverEffect;
@endphp
<div class="z-20">
    {{--max-w-screen overflow-x-hidden md:w-full--}}
    <div class="w-full">
        <table class="table {{$name}} @if($has_shadow) shadow-lg @endif @if($divided) table-divided @endif @if($striped) table-striped @endif @if($hover_effect) table-hover @endif @if($compact) table-sm @endif">
            <thead>
                <tr class="bg-light">{{ $header }}</tr>
            </thead>
            <tbody>{{ $slot }}</tbody>
        </table>
    </div>
</div>