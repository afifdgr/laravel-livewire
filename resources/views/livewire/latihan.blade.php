<div>
    <div class="mb-3">
        <input type="number" class="form-control" wire:model="keranjang">
        <button class="btn btn-success" wire:click="tambah">Plus</button>
        @if($keranjang >= 1)
        <button class="btn btn-danger" wire:click="kurang">Minus</button>
        @endif
    </div>
</div>