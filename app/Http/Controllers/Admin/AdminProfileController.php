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
        $users = User::all();

       return view('admin.profile.index',compact('users'));
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

        // code here

        /* !You may add validation */

       /*  $data = $request->all(); */

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');


        /* Old Method */
        /* $user = new User();

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





        /* asd */
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.profile.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
        public function destroy(string $id)
    {
        //
    }
}
