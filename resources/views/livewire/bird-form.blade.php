<div>

    <form wire:submit="submit">
        <div>
            <label for="count">Bird Count</label>
            <input wire:model='bird_count' type="number"/>
        </div>
        
        <div>
            <label for="notes">Notes</label>
            <textarea wire:model='notes' ></textarea>
        </div>
      
        <Button>Add new Bird Entry</Button>
    </form>
  
</div>
