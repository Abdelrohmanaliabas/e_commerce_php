@props(['items'])
@props(['width' => 900])

<div class="bg-white">
    <div class="mx-auto max-w-2xl sm:px-6 sm:py-4 lg:max-w-7xl lg:px-8">

        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">


            @foreach ($items as $item)
                @php
                    $imagePath = json_decode($item['ItemImage'], true)[0] ?? '/home/abas/Downloads/1719907552199.jpeg';
                @endphp
                <a href="{{url('/itemdetails/'.$item->id)}}" class="group">

                    <img src="{{ asset('storage/' . $imagePath) }}" alt="{{ $item['ItemName'] ?? 'Item Image' }}"
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
                    <h3 class="mt-4 text-sm text-gray-700">{{ $item['ItemSalary'] }}</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">{{ $item['ItemName'] }}</p>
                </a>
            @endforeach
        </div>
    </div>
</div>
