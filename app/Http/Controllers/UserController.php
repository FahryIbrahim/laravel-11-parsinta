<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->latest()->get();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.form', [
            'user' => new User(),
            'page_meta' => [
                'title' => 'Create New User',
                'method' => 'POST',
                'url' => route('users.store'),
                'submit_text' => 'Create'
            ]
        ]);
    }
    public function store(UserRequest $request)
    {
        User::create($request->validated());

        return to_route('users.index');
    }
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    public function edit(User $user)
    {
        return view('users.form', [
            'user' => $user,
            'page_meta' => [
                'title' => 'Edit User',
                'method' => 'PUT',
                'url' => route('users.update', $user),
                'submit_text' => 'Update'
            ]
        ]);
    }
    public function update(User $user, UserRequest $request)
    {
        $user->update($request->validated());

        return to_route('users.index');
    }
    public function destroy(User $user)
    {
        $user->delete();

        return to_route('users.index');
    }
}
