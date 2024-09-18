@props(['messages'])

@if ($messages)
<div {{ $attributes->merge(['class' => 'text-sm space-y-1']) }}>
    @foreach ((array) $messages as $message)
    <p style="color:red">{{ $message }}</p>
    @endforeach
</div>
@endif
