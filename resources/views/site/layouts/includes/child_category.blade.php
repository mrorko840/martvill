<li class="border-b text-left text-gray-10 overflow-hidden w-63">
    <button class="w-full category-hover text-left flex items-center outline-none focus:outline-none">
        <div class="w-64 h-12 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left p-1 py-2 relative">
            <a href="{{ route('site.productSearch', ['categories' => $child_category->name]) }}"
                class="flex title-font font-medium items-center md:justify-start justify-center ml-2 m-1">
                <span
                    class="rtl-direction-space ml-3 text-sm cursor-pointer text-one">
                    {{ $child_category->name }}
                </span>
                @if(count($child_category->categories))
                <span
                    class="rtl-direction absolute top-0 -right-1 ml-3 text-center text-sm h-6 w-6 p-0.5 mt-3">
                    <svg class="fill-current h-4 w-4
                        " xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </span>
                @endif
            </a>
        </div>
    </button>
    @if ($child_category->categories->count() > 0)
    <ul class="bg-white border pb-0.5 absolute top-0 right-0.5
     ul-mr min-h-full w-63">
     @foreach ($child_category->categories as $childCategory)
        @include('../site/layouts.includes.child_category', ['child_category' => $childCategory])
     @endforeach
    </ul>
    @endif
</li>
