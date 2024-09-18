<x-dynamic-component :component="$getFieldWrapperView()" :id="$getId()" :label="$getLabel()"
    :label-sr-only="$isLabelHidden()" :helper-text="$getHelperText()" :hint="$getHint()" :hint-action="$getHintAction()"
    :hint-color="$getHintColor()" :hint-icon="$getHintIcon()" :required="$isRequired()" :state-path="$getStatePath()">
    <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}').defer }">
        <!-- Interact with the `state` property in Alpine.js -->
        <div wire:model.defer="{{ $getStatePath() }}">

        </div>
        {{-- <input type="text" wire:model.defer="{{ $getStatePath() }}" /> --}}
    </div>

</x-dynamic-component>