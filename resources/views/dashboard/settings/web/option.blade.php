<div>
    <label
        class="btn btn-sm btn-success"
        wire:click="edit('{{ $id }}')"
        wire:loading.attr="disabled"
        wire:loading.class="btn-disabled"
        wire:target="edit"
    >
        <x-phosphor-pen class="w-4 h-4" />
        <span class="ml-2">
            Edit
        </span>
    </label>
</div>
