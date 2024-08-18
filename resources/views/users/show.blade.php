<x-layout title="User">
    <x-slot name="heading">
        {{ $user->name }}
    </x-slot>
    <div>
        {{ $user->email }}
    </div>
    <div>
        Registered at {{ $user->created_at->diffForHumans() }}
    </div>
</x-layout>
