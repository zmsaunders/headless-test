<x-layout>
    <x-slot:title>
        Recent Entries
    </x-slot>


    <h2 class="text-xl text-white pb-4">Entries</h2>
    <ul>
    @foreach($posts as $post)
        <li class="pb-2">
            <a class="text-indigo-300 hover:underline hover:underline-offset-8 hover:underline-1" href="/blog/{{$post->slug}}">
                {{ $post->title }}
            </a> - {{$post->date->format('m/d/y')}}
        </li>
    @endforeach
    </ul>
</x-layout>
