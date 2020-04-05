<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\User;
use App\Http\Requests\User\StoreRequest;
use Illuminate\Http\RedirectResponse;


class UserController extends Controller
{
  	public function index()
	{
		$users = User::latest()->paginate(10);

		return view('dashboard.users.index', compact('users'));
	}

	public function show($id)
	{		
		$user = ( new User())->getOneUser($id);

		return view('dashboard.users.show', compact('user'));
	}

	public function create(): View
    {
        return view('dashboard.users.create');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
       User::create($request->all());

       return redirect()->route('dashboard.users.index');
    }

    public function edit($id)
    {
		$user = User::findOrFail($id);
        // dd($user );
		return view('dashboard.users.edit', compact('user'));
        // return "$id";
    }

    public function update(StoreRequest $request, User $id)
    {
        // User::create($request->all());
        $user = User::findOrFail($id);

        $user->fill($request->all());
        $user->save();

        return redirect('dashboard.users.index');        
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('dashboard.users.index')->with('success', 'User wase deleted Successfully!');
    }

}
