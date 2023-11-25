<article class="flex justify-between items-center px-8">
    @foreach ($categories as $category)
        <a href="/{{ $category->slug }}" class="block max-w-sm p-6 bg-blue-logo rounded-lg shadow hover:bg-blue-900 h-40">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">{{ $category->name }}</h5>
            <small class="font-medium text-gray-300">{{ $category->description }}</small>
        </a>
    @endforeach
</article>
