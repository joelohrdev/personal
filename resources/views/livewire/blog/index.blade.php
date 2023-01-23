<div class="space-y-16">
    @foreach($posts as $post)
        <article class="md:col-span-3 group relative flex flex-col items-start">
            <h2 class="text-base font-semibold tracking-tight text-zinc-800">
                <div class="absolute -inset-y-6 -inset-x-4 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl"></div>
                <a href="{{ route('blog.show', $post) }}">
                    <span class="absolute -inset-y-6 -inset-x-4 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                    <span class="relative z-10">{{ $post->title }}</span>
                </a>
            </h2>
            <div aria-hidden="true" class="relative z-10 mt-4 flex items-center text-sm font-medium text-teal-500">Read more<svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="ml-1 h-4 w-4 stroke-current"><path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
        </article>
    @endforeach
    <div>
        {{ $posts->links() }}
    </div>
</div>
