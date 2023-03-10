<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view('create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $user = User::query()->findOrFail($id);
        $user->delete();

        return redirect()
            ->route('index')
            ->with('success', 'Success deleted a user');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        $user = User::query()->findOrFail($id);

        return response()->view('edit', compact('user'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $users = User::query()->paginate();

        return response()->view('index', compact('users'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        $user = User::query()->findOrFail($id);

        return response()->view('show', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate(User::$rules);

        $user = User::query()->create($request->except('_token'));

        return redirect()
            ->route('show', $user->id)
            ->with('success', __('Success create new user :name', [
                'name' => $user->customer_fullname,
            ]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $attributes = $request->validate(User::$rules);

        if ($user = User::query()->find($id)) {
            $user->fill($request->except(['_token', '_method']))->save();

            return redirect()
                ->route('show', $user->id)
                ->with('success', __('Success update a user :name', [
                    'name' => $user->customer_fullname
                ]));
        }

        return redirect()
            ->route('index')
            ->with('failed', "User with id [$id] not found.");
    }
}
