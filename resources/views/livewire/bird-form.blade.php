<div>
    <form wire:submit.prevent="submit">
        <div>
            <label for="count">Bird Count</label>
            <input wire:model='bird_count' type="number" />
        </div>
        
        <div>
            <label for="notes">Notes</label>
            <textarea wire:model='notes'></textarea>
        </div>
      
        <button type="submit">Add new Bird Entry</button>
    </form>

    <div>
        @foreach ($enteries as $entry)
            <div>
                <strong>Count:</strong> {{ $entry->bird_count }}
            </div>
            <div>
                <strong>Notes:</strong> {{ $entry->notes }}
            </div>
            <hr>
        @endforeach
    </div>
</div>
