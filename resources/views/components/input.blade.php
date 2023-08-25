@props([
// name of the input field for use in forms
'name' => 'input-'.uniqid(),
// what type of input box are you displaying
// availalble options are text, password, email, search, tel
'type' => 'text',
// label to display on the input box
'label' => '',
// should the input accept numbers only. Default is false
'numeric' => false,
// is this a required field. Default is false
'required' => false,
// adds margin after the input box
'add_clearing' => true,
'addClearing' => true,
// placeholder text
'placeholder' => '',
// value to set when in edit mode or if you want to load the input with default text
'selected_value' => '',
'selectedValue' => '',
// should the placeholder always be visible even if a label is set
// by default the label overwrites the placeholder
// useful if you dont want this overwriting
'show_placeholder_always' => false,
'showPlaceholderAlways' => false,
// message to display when validation fails for this field
// this is just attached to the input field as a data attribute
'error_message' => '',
'errorMessage' => '',
// this is an easy way to pass a translatable heading to the notification component
// since it is triggered from Javascript, it is hard to translate any text from within js
'error_heading' => 'Error',
'errorHeading' => 'Error',
// how should error messages be displayed for this input
// by default error messages are displayed in the Bladewind notification component
// the component should exist on the page
'show_error_inline' => false,
'showErrorInline' => false,
// for numeric input only: should the numbers include dots
'with_dots' => true,
'withDots' => true,
// determines if the input field has a label
'has_label' => false,
'hasLabel' => false,
'is_datepicker' => false,
'isDatepicker' => false,
// set the prefix for the input field
'prefix' => '',
// set the suffix for the input field
'suffix' => '',
// define if prefix background is transparent
'transparent_prefix' => true,
'transparentPrefix' => true,
// define if suffix background is transparent
'transparent_suffix' => true,
'transparentSuffix' => true,
// force (or not) prefix to be an icon
'prefix_is_icon' => false,
'prefixIsIcon' => false,
// force (or not) suffix to be an icon
'suffix_is_icon' => false,
'suffixIsIcon' => false,
// define if icon prefix is outline or solid
'prefix_icon_type' => 'outline',
'prefixIconType' => 'outline',
// force (or not) suffix to be an icon
'suffix_icon_type' => 'outline',
'suffixIconType' => 'outline',
// should password be viewable
'viewable' => false,
// additional css for prefix
'prefix_icon_css' => '',
'prefixIconCss' => '',
// additional css for suffix
'suffix_icon_css' => '',
'suffixIconCss' => '',
])
@php
// reset variables for Laravel 8 support
$add_clearing = filter_var($add_clearing, FILTER_VALIDATE_BOOLEAN);
$addClearing = filter_var($addClearing, FILTER_VALIDATE_BOOLEAN);
$show_placeholder_always = filter_var($show_placeholder_always, FILTER_VALIDATE_BOOLEAN);
$showPlaceholderAlways = filter_var($showPlaceholderAlways, FILTER_VALIDATE_BOOLEAN);
$show_error_inline = filter_var($show_error_inline, FILTER_VALIDATE_BOOLEAN);
$showErrorInline = filter_var($showErrorInline, FILTER_VALIDATE_BOOLEAN);
$with_dots = filter_var($with_dots, FILTER_VALIDATE_BOOLEAN);
$withDots = filter_var($withDots, FILTER_VALIDATE_BOOLEAN);
$has_label = filter_var($has_label, FILTER_VALIDATE_BOOLEAN);
$hasLabel = filter_var($hasLabel, FILTER_VALIDATE_BOOLEAN);
$is_datepicker = filter_var($is_datepicker, FILTER_VALIDATE_BOOLEAN);
$isDatepicker = filter_var($isDatepicker, FILTER_VALIDATE_BOOLEAN);
$transparent_prefix = filter_var($transparent_prefix, FILTER_VALIDATE_BOOLEAN);
$transparentPrefix = filter_var($transparentPrefix, FILTER_VALIDATE_BOOLEAN);
$transparent_suffix = filter_var($transparent_suffix, FILTER_VALIDATE_BOOLEAN);
$transparentSuffix = filter_var($transparentSuffix, FILTER_VALIDATE_BOOLEAN);
$prefix_is_icon = filter_var($prefix_is_icon, FILTER_VALIDATE_BOOLEAN);
$prefixIsIcon = filter_var($prefixIsIcon, FILTER_VALIDATE_BOOLEAN);
$suffix_is_icon = filter_var($suffix_is_icon, FILTER_VALIDATE_BOOLEAN);
$suffixIsIcon = filter_var($suffixIsIcon, FILTER_VALIDATE_BOOLEAN);
$required = filter_var($required, FILTER_VALIDATE_BOOLEAN);
$numeric = filter_var($numeric, FILTER_VALIDATE_BOOLEAN);
$viewable = filter_var($viewable, FILTER_VALIDATE_BOOLEAN);

if (!$addClearing) $add_clearing = $addClearing;
if ($showPlaceholderAlways) $show_placeholder_always = $showPlaceholderAlways;
if ($showErrorInline) $show_error_inline = $showErrorInline;
if (!$withDots) $with_dots = $withDots;
if ($isDatepicker) $is_datepicker = $isDatepicker;
if (!$transparentPrefix) $transparent_prefix = $transparentPrefix;
if (!$transparentSuffix) $transparent_suffix = $transparentSuffix;
if (!$prefixIsIcon) $prefix_is_icon = $prefixIsIcon;
if (!$suffixIsIcon) $suffix_is_icon = $suffixIsIcon;

if ($selectedValue !== $selected_value) $selected_value = $selectedValue;
if ($errorMessage !== $error_message) $error_message = $errorMessage;
if ($errorHeading !== $error_heading) $error_heading = $errorHeading;
if ($prefixIconType !== $prefix_icon_type) $prefix_icon_type = $prefixIconType;
if ($suffixIconType !== $suffix_icon_type) $suffix_icon_type = $suffixIconType;
if ($prefixIconCss !== $prefix_icon_css) $prefix_icon_css = $prefixIconCss;
if ($suffixIconCss !== $suffix_icon_css) $suffix_icon_css = $suffixIconCss;
//--------------------------------------------------------------------

$name = preg_replace('/[\s-]/', '_', $name);
$required_symbol = ($label == '' && $required) ? ' *' : '';
$is_required = ($required) ? 'required' : '';
$placeholder_color = ($show_placeholder_always || $label == '') ? '' : 'placeholder-transparent
dark:placeholder-transparent';
$placeholder_label = ($show_placeholder_always) ? $placeholder : (($label !== '') ? $label : $placeholder);
$with_dots = ($with_dots) ? 1 : 0;

if($type == "password" && $viewable) {
$suffix = '<button type="button" class="btn btn-secondary">press to see password</button>';
$suffix_is_icon = true;
}
@endphp

<div class="position-relative w-100 dv-{{$name}} @if($add_clearing) mb-3 @endif">
    <input {{ $attributes->merge(['class' => "form-control peer $is_required $name $placeholder_color"]) }}
    type="{{ $type }}"
    id="{{ $name }}"
    name="{{ $name }}"
    value="{{ $selected_value }}"
    autocomplete="off"
    placeholder="{{ $placeholder_label }}{{$required_symbol}}"
    @if($numeric) onkeypress="return isNumberKey(event, {{$with_dots}})" @endif
    @if($error_message != '')
    data-error-message="{{$error_message}}"
    data-error-inline="{{$show_error_inline}}"
    data-error-heading="{{$error_heading}}"
    @endif
    />
    @if(!empty($error_message))<div class="text-danger text-sm p-1 {{ $name }}-inline-error d-none">{{$error_message}}
    </div>@endif
    @if(!empty($label))
    <label for="{{ $name }}" class="form-label" onclick="document.querySelector('.{{$name}}').focus()">{!! $label !!}
        @if($required) <i class="bi bi-star-fill text-danger"></i> @endif
    </label>
    @endif
    @if (!empty($prefix))
    <div class="{{$name}}-prefix prefix text-sm select-none ps-3.5 pe-2 z-20 text-primary-50/50 dark:text-slate-400 position-absolute start-0 top-0 d-inline-flex align-items-center @if(!$transparent_prefix) bg-secondary border-2 border-secondary dark:border-slate-700 dark:bg-secondary/50 dark:border-end-0 border-end-0 rounded-top-start rounded-bottom-start @endif"
        data-transparency="{{$transparent_prefix}}">
        @if($prefix_is_icon) <i class="{{$prefix}} {{$prefix_icon_css}}"></i> @else {!! $prefix !!} @endif</div>
    <script>positionPrefix('{{$name}}', 'blur', '{{$transparent_prefix}}');</script>
    @endif
    @if (!empty($suffix))
    <div class="{{$name}}-suffix suffix text-sm select-none ps-3.5 pe-2 z-20 text-primary-50/50 dark:text-slate-400 position-absolute end-0 top-0 d-inline-flex align-items-center @if(!$transparent_suffix) bg-secondary border-2 border-secondary border-start-0 dark:border-slate-700 dark:bg-secondary/50 dark:border-start-0 rounded-top-end rounded-bottom-end @endif"
        data-transparency="{{$transparent_prefix}}">
        @if($suffix_is_icon) <i class="{{$suffix}} {{$suffix_icon_css}}"></i> @else {!! $suffix !!} @endif</div>
    <script>positionSuffix('{{$name}}');</script>
    @endif
</div>
<input type="hidden" class="bw-raw-select" />