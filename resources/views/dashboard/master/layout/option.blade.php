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

    <button
        class="btn btn-sm btn-error"
        wire:click="$emit(
            'delete',
            'Layout yang akan dihapus tidak dapat dikembalikan. Apakah Anda yakin ingin menghapus layout ini?',
            () => { @this.call('destroy', '{{ $id }}') }
        )"
        wire:loading.attr="disabled"
        wire:loading.class="btn-disabled"
        wire:target="edit"
    >
        <x-phosphor-trash class="w-4 h-4" />
        <span class="ml-2">
            Hapus
        </span>
    </button>
</div>
