<x-layout title="Users">
    <x-slot name="heading">
        Users
    </x-slot>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->format('d M Y')}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</x-layout>
