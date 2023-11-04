<x-app-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">

        <div class="flex items-center justify-between" style="margin-top: 2rem">
            <h2 class="font-semibold text-xl">List Products</h2>
            <a href="{{ route('products.create') }}">
                <button class="bg-gray-100 px-10 py-2 rounded-md font-semibold" >Add</button>
            </a>
            </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6" style="margin-top: 4rem">
            @foreach ($products as $product)
                <div>
                    <img src="{{ url('storage/'.$product->foto) }}" alt="">
                    <div class="my-2">
                        <p class="text-xl font-light">{{ $product->nama }}</p>
                        <p class="font-semibold text-gray-400">Rp. {{ number_format($product->harga) }}</p>
                    </div>
                    <button class="bg-gray-100 px-10 py-2 w-full rounded-md font-semibold">Edit</button>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $products->links()  }}
        </div>

    </div>
</x-app-layout>
