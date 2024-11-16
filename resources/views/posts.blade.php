<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h3>Welcome to Blog page</h3> --}}

    <section class="bg-white dark:bg-gray-900">
        <div class="py-6 px-5 mx-auto max-w-screen-xl lg:py-8 lg:px-6">
            {{-- Blog Title --}}
            <div class="mx-auto max-w-screen-sm text-center lg:mb-8 mb-4">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">My Blog</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">This blog is build using Laravel and Tailwind CSS</p>
            </div> 

            {{-- Blog Posts --}}
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            
    @foreach ($posts as $post)

    {{-- Article 1(First Edition) --}}
    {{-- <article class="py-4 max-w-screen-md border-b border-black">
        <a href="/posts/{{ $post['slug'] }}">
            <h3 class="my-2 text-3xl tracking-tight font-bold text-gray-900 hover:underline">{{ $post['title'] }}</h3>
        </a>
        <div class="">
            By
            <a href="/authors/{{ $post->author->username }}" class="hover:underline text-base text-gray-500" >
                {{ $post->author->name }}</a> 
            in
            <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-base text-gray-500" >
            {{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
        <div class="flex justify-end">
            <a href="/posts/{{ $post['slug'] }}" class="bg-blue-500 text-white py-2 px-4 rounded">
                Read more &raquo;
            </a>
        </div>
    </article> --}}
        
            {{-- Article --}}
            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                
                {{-- Category --}}
                <a href="/categories/{{ $post->category->slug }}">

                    {{-- Category Name --}}
                    <span class="bg-{{ $post->category->color }}-100 text-gray-600 text-xs font-medium inline-flex 
                        items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:underline">
                        {{ $post->category->name }}
                    </span>
                    
                    {{-- Timestamps --}}
                    <span class="text-sm">
                        {{ $post->created_at->diffForHumans() }}
                    </span>

                </div>
                </a> 

                {{-- Title --}}
                <a href="/posts/{{ $post->slug }}">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                        {{ $post->title }}
                    </h2>
                </a>
                
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                   {{ Str::limit($post->body, 150) }}
                </p>

                <div class="flex justify-between items-center">
                    <a href="authors/{{ $post->author->username }}">
                        <div class="flex items-center space-x-3">
                            {{-- Profile Picture --}}
                            <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $post->author->name }}" />
                            
                            {{-- Author Name --}}
                            <span class="font-medium dark:text-white text-xm hover:underline">
                                {{ $post->author->name }}
                            </span>

                        </div>
                    </a>
                    <a href="/posts/{{ $post->slug }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </article>     

    @endforeach

            </div>  
        </div>
    </section>

</x-layout>