<x-layout title="{{$page_meta['title']}}">
    <x-slot name="heading">
        {{$page_meta['title']}}
    </x-slot>
    <form action="{{$page_meta['url']}}" method="post" class="space-y-6">
        @csrf
        @method($page_meta['method'])
        <div class="">
            <label for="name">Name</label>
            <input class="border py-2 px-4 rounded block md-1" type="text" name="name" id="name" value="{{old('name', $user->name)}}">
            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="email">Email</label>
            <input class="border py-2 px-4 rounded block md-1" type="email" name="email" id="email" value="{{old('email', $user->email)}}">
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
        <x-button>
            {{$page_meta['submit_text']}}
        </x-button>
    </form>
</x-layout>
