<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3>Welcome to Blog page</h3>

    @foreach ($posts as $post)

    {{-- Article 1 --}}
    <article class="py-4 max-w-screen-md border-b border-black">
        <a href="/posts/{{ $post['slug'] }}">
            <h3 class="my-2 text-3xl tracking-tight font-bold text-gray-900 hover:underline">{{ $post['title'] }}</h3>
        </a>
        <div class="text-base text-gray-500">
            <a href="#" >{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
        <div class="flex justify-end">
            <a href="/posts/{{ $post['slug'] }}" class="bg-blue-500 text-white py-2 px-4 rounded">
                Read more &raquo;
            </a>
        </div>
    </article>

    @endforeach

</x-layout>