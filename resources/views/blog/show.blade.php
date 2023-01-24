<x-app>
    @section('title') {{ $post->title }} @endsection
    <div class="mx-auto max-w-2xl my-20 relative px-8">
        <a href="{{ route('blog.index') }}" aria-label="Go back to articles" class="group mb-8 flex h-10 w-10 items-center justify-center rounded-full bg-white shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 transition lg:absolute lg:-left-16 lg:mb-0 lg:-mt-2 xl:top-0 xl:-left-16 xl:mt-0"><svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="h-4 w-4 stroke-zinc-500 transition group-hover:stroke-zinc-700 dark:stroke-zinc-500 dark:group-hover:stroke-zinc-400"><path d="M7.25 11.25 3.75 8m0 0 3.5-3.25M3.75 8h8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a>
        <h1 class="mt-6 text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl">{{ $post->title }}</h1>
        <div class="mt-4">
            @foreach($post->tags as $tag)
                <a href="{{ route('blog.index', ['tag' => $tag->slug]) }}" class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-zinc-100 text-zinc-800">{{ $tag->name }}</a>
            @endforeach
        </div>
        <div class="mt-8 prose">
            <x-markdown theme="">
                {!! $post->body !!}
            </x-markdown>
        </div>
    </div>
</x-app>
