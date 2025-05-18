<x-layout :title="$title">
  <h3 class="text-xl">{{ $title }}</h3>


<article class="py-8 max-w-screen-md border-b border-gray-300" >

  <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-600">{{ $post ['title'] }}</h2>
  <div>
      By
  <a href="/authors/{{ $post->author->username }}"class="hover:underline text-base text-gray-500 ">{{ $post->author->name }}</a> | {{ $post->created_at->diffForHumans() }}
    In
  <a href="/categories/{{ $post->category->id }}"class="hover:underline text-base text-gray-500 ">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
  <p class="my-4 font-light">{{ $post ['body'] }}</p>
  <a href="/posts" class="font-medium text-blue-600 hover:underline">&laquo; Back To Post </a>
</article>


</x-layout>