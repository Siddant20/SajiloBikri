<div>
    {{-- Search box section --}}
    <div class= " bg-gradient-to-r from-purple-300 to-blue-300 flex justify-center items-center">
        <div class="relative text-gray-700">
            <input wire:model.live="search" type="text" class="border-none rounded-xl bg-white w-80 px-14 py-3 my-8"
                placeholder="What are you looking for?" />
            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 px-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                </svg>
            </div>
        </div>
    </div>

    {{-- top selling items --}}

    {{-- Categories section --}}
    <p
        class="text-center mt-8 bg-gradient-to-r from-purple-300 to-blue-300 bg-clip-text text-transparent font-semibold">
        Browse by categories </p>
    <div class="flex justify-center mt-10" wire:key="category-list">
        <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-4 ">

            @foreach ($categories as $category)
                <div wire:key="category-{{ $category->id }}"
                    class="flex items-center gap-2 mx-6 mb-6 border p-3 border-gray-600 border-dotted rounded-md cursor-pointer text-gray-800 hover:bg-gradient-to-r hover:from-purple-500 hover:to-blue-500 hover:bg-clip-text hover:text-transparent"
                    a href="#">
                    <div>
                        <x-heroicon-o-computer-desktop class="w-8 h-8 text-purple-400" />
                    </div>
                    <div>
                        <p class=" font-medium">{{ $category->name }}</p>
                        <p class="text-gray-500 text-xs">{{ $category->products_count }} ads</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    {{-- pagination links --}}
    <div class="flex justify-end ">
        {{ $categories->links() }}
        <select wire:model.live="perPage" class="border-gray-600 rounded-md border-dotted mx-8">
            <option value=4> 4 per page</option>
            <option value=8> 8 per page </option>
            <option value=12> 12 per page </option>
            <option value=18> 18 per page </option>
            <option value=24> 24 per page </option>
            <option value=30> 30 per page </option>
        </select>
    </div>
</div>
