<x-layout title="Login">
    <x-slot name="heading">
        Login
    </x-slot>
    <form action="{{ route('login') }}" method="post" class="space-y-6">
        @csrf
        <div class="">
            <label for="email">Email</label>
            <input class="border py-2 px-4 rounded block md-1" type="email" name="email" id="email">
            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="password">Password</label>
            <input class="border py-2 px-4 rounded block md-1" type="password" name="password" id="password">
            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <x-button as="button">
            Login
        </x-button>
    </form>
</x-layout>
