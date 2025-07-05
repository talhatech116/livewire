<div>
    <h2>Hello World</h2>

    <p>{{ $count }}</p>

    <input type="number" wire:model.live='count' />

    <button wire:click='changeCount(8)'> Change Count </button>


</div>
