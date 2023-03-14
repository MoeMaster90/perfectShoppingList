<div>
    <div class="flex px-2 py-4">
        <input type="number" class="flex-none w-20 border-l border-y border-gray-300 rounded-l-md text-2xl px-3 py-2 focus:outline-none focus:ring-transparent" placeholder="{{ __('Amount') }}" wire:model="newProductAmount"/>
        <input type="text" list="units" class="flex-none w-32 border-y border-l-0 border-gray-300 text-2xl px-3 py-2 focus:outline-none focus:ring-transparent" wire:model="newProductUnit"/>
        <input type="text" class="flex-1 w-full border-y border-l-0 border-gray-300 text-2xl px-3 py-2 focus:outline-none focus:ring-transparent" placeholder="{{ __('Product Name') }}" wire:model="newProductName"/>
        <button class="flex-none w-16 bg-green-600 border-l-0 border-y border-r border-green-600 rounded-r-md text-2xl text-white" wire:click="addProduct">+</button>
    </div>

    <div class="my-4">
        @foreach($addedProducts as $key => $addedProduct)
            <div class="flex">
                <input type="checkbox" class="flex-none w-12" wire:model="addedProducts.{{ $key }}.checked"/>
                <input type="number" class="flex-none w-20 text-2xl px-3 py-2 focus:outline-none focus:ring-transparent" placeholder="{{ __('Amount') }}" wire:model="addedProducts.{{ $key }}.amount"/>
                <input type="text" list="units" class="flex-none w-32 text-2xl px-3 py-2 focus:outline-none focus:ring-transparent" wire:model="addedProducts.{{ $key }}.unit"/>
                <input type="text" class="flex-1 w-full text-2xl px-3 py-2 focus:outline-none focus:ring-transparent" placeholder="{{ __('Product Name') }}" wire:model="addedProducts.{{ $key }}.name"/>
            </div>
        @endforeach
    </div>

    <datalist id="units">
        <option>{{ __('Piece') }}</option>
        <option>{{ __('Milliliters') }}</option>
        <option>{{ __('Gram') }}</option>
    </datalist>
</div>
