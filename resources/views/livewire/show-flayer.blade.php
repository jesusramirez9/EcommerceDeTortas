<div>
    <x-jet-dialog-modal wire:model="open_edit">
        <x-slot name="title">
           Post Publicitario
        </x-slot>
        <x-slot name="content">
            @foreach ($posts as $item)
            <div class="pb-2 text-gray-700 text-lg">
                {{$item->title}}
            </div>
            <img src="{{ Storage::url($item->image) }}" alt="">
            <div class="py-2 text-gray-700 text-lg text-justify">
                {{$item->description}}
            </div>
            @endforeach
        </x-slot>
        <x-slot name="footer">
            <x-jet-button wire:click="$set('open_edit', false)" class="mr-4">
                Aceptar
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
