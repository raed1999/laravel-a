<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\password;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(5);

       return view('admin.profile.index',[
        'users' => $users,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        /* You may add validation */

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $name = $validated['name'];
        $email = $validated['email'];
        $password = $validated['password'];


        /* Old Method */
/*         $user = new User();

        $user->name = $name;
        $user->user_types_id = 1;
        $user->email = $email;
        $user->password = $password;

        $user->save(); */

        /* Mass assignment */
        User::create([
            'name' => $name,
            'user_types_id' => 1,
            'email' => $email,
            'password' => $password,
        ]);

        return redirect(route('admin.profile.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.profile.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        /* First option */
       $user = User::findOrFail($id);

        return view('admin.profile.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        /* Validation */
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect(route('admin.profile.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
        public function destroy(string $id)
    {
        //
    }
}
