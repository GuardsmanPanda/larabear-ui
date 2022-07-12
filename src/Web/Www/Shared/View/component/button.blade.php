<button {{$attributes->merge(['class' => $classes, 'type' => 'button'])}}>
    @if($icon !== null)
        <x-bear::icon class="-ml-1 mr-2 {{$icon_classes}}" icon="{{$icon}}"/>
    @endif
    {{$slot}}
</button>
