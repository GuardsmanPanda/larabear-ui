@props(['title', 'endpoint', 'submit_text' => 'Create', 'cancel_text' => 'Cancel'])
<form id="dialog-form" hx-post="{!! $endpoint !!}" autocomplete="off" {{ $attributes->merge(['class' => 'py-4 px-6']) }} hx-headers='{"hx-dialog": "close"}' >
    <x-bear::form.csrf-token-field/>
    {!!$slot!!}
</form>
<div class="border-t flex gap-2 py-3  px-4 flex-row-reverse">
    <form method="dialog">
        <x-bear::button type="submit">{!!$cancel_text!!}</x-bear::button>
    </form>
    <x-bear::buttonDark form="dialog-form" type="submit">{!!$submit_text!!}</x-bear::buttonDark>
</div>
<div id="dialog-title" hx-swap-oob="true">{!!$title!!}</div>