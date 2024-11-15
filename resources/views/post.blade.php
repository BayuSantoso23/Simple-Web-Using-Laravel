<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3>Welcome to Blog page</h3>


    {{-- Article 1 --}}
    <article class="py-4 max-w-screen-md ">
        <h3 class="my-2 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h3>
        <div class="">
            By
            <a href="/authors/{{ $post->author->username }}" class="hover:underline text-base text-gray-500" >
                {{ $post->author->name }}</a> 
            in
            <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-base text-gray-500" >
            {{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <div class="flex justify-end">
            <a href="/posts" class="bg-blue-500 text-white py-2 px-4 rounded">
                &laquo; Return
            </a>
        </div>
    </article>
</x-layout>