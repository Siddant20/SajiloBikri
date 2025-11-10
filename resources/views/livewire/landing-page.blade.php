<div>
    {{-- Search box section --}}
    <div class= " bg-gradient-to-r from-purple-300 to-pink-300 flex justify-center items-center">
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

    {{-- Categories section --}}
    <p class="text-center mt-8 bg-gradient-to-r from-purple-500 to-pink-100 bg-clip-text text-transparent font-semibold"> Browse by categories </p>
    <div class="flex justify-center mt-10">
        <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-4 gap-12">

            @foreach ($categories as $category)
                @php
                    $no_of_ads = \App\Models\Product::where('category_id', $category->id)->count();
                @endphp
                <div class="cursor-pointer" a href="#">
                    <p>{{ $category->name }}</p>
                    <p class="text-gray-500 text-xs">{{ $no_of_ads }} ads</p>
                </div>
            @endforeach

        </div>
    </div>
</div>
