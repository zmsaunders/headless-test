<x-layout>
    <x-slot:title>
        {{$post->title}}
    </x-slot>

    {!! $post->content !!}
</x-layout>
