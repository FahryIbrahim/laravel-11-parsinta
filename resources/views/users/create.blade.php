<x-layout title=" Create Users">
    <x-slot name="heading">
        Create Users
    </x-slot>
    <form action="/users" method="post" class="space-y-6">
        @csrf
        @method('POST')
        <div class="">
            <label for="name">Name</label>
            <input class="border py-2 px-4 rounded block md-1" type="text" name="name" id="name">
        </div>
        <div class="">
            <label for="email">Email</label>
            <input class="border py-2 px-4 rounded block md-1" type="email" name="email" id="email">
        </div>
        <div class="">
            <label for="password">Password</label>
            <input class="border py-2 px-4 rounded block md-1" type="password" name="password" id="password">
        </div>
        <x-button>
            Save
        </x-button>
    </form>
</x-layout>
