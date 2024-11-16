<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h3>Welcome to Blog page</h3> --}}


    {{-- Article 1 --}}
    {{-- <article class="py-4 max-w-screen-md ">
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
    </article> --}}

    <!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-5xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                {{-- Return Button --}}
                <a href="/posts" class="font-medium text-lg text-blue-600 hover-underline">&laquo; Return</a>

                <address class="flex items-center my-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        {{-- Profile Picture --}}
                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                        <div>
                            
                            {{-- Author Name --}}
                            <a href="/authors/{{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                            
                            {{-- Timestamps --}}
                            <p class="text-base text-gray-500 dark:text-gray-400 ml-1">{{ $post->created_at->diffForHumans() }}</p>

                            <div class="flex justify-between items-center mb-5 text-gray-500">
                
                            {{-- Category --}}
                            <a href="/categories/{{ $post->category->slug }}">
            
                                {{-- Category Name --}}
                                <span class="bg-{{ $post->category->color }}-100 text-gray-600 text-xs font-medium inline-flex 
                                    items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:underline">
                                    {{ $post->category->name }}
                                </span>
            
                            </div>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
            </header>
            <p>
                {{ $post->body }}
            </p>
        </article>
    </div>
</main>
</x-layout>