<div class="mx-auto flex text-purple-600">
    {{-- sidebar --}}
    <div class= "hidden md:inline h-screen border-r-2 ml-6 pt-6 left-0 px-6">
        <h1 class = "text-gray-800 font-semibold text-sm mb-1">{{ $category->name }}</h1>
        @foreach ($subCategories as $subCategory)
            <div class="text-xs text-start ml-4 p-2">
                <ul class="border-b cursor-pointer hover:text-pink-500">{{ $subCategory->name }}</ul>
            </div>
        @endforeach
    </div>


    {{-- main section --}}
    <div class= "flex-1 grid grid-cols-1 sm:grid-cols-3 mt-2 mx-10 gap-x-10 gap-y-4">
        <div class=" flex h-60 items-start pt-10 justify-around gap-6 border px-4 rounded-md border-gray-300">
            <img src="https://m.media-amazon.com/images/I/61qJX973fRL._AC_SL1500_.jpg " class="size-20 " />
            <div class="border-l border-gray-200 h-full"></div>
            <div class="">
                <h1> Iphone 17 </h1>
                <p class="text-xs mt-2">
                    A brand new iphone 17 with no return policy.
                </p>
                <p></p>
                <p class="absolute bottom-0 text-xs pb-2"> price: NRs. 2,40,000 | condition: new </p>
            </div>

        </div>


    </div>
