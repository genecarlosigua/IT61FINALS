<?php

namespace App\Http\Controllers;

use App\Models\userData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    
    public function index()
    {
        //
    }

    public function create()
    {
        //
        return view('Create');
    }

    public function store(Request $request)
    {
        userData::create([
            'fullname'=> $request->fullname,
            'Age' => $request->Age,
            'Email' => $request->Email
        ]);
        
        return redirect()->route('home');
    }

    public function show()
    {
        return view('Home' , [ 'fullname' => DB::select('select * from user_data') ]);
    }

    public function edit(string $id)
    {   
        $data = DB::select('select * from user_data where id = ?', [$id]);
        return view('Edit' , ['data' => $data] );
    }

    public function update(Request $request, string $id)
    {
        $fullname = $request->fullname;
        DB::table('user_data')
            ->where('id', $request->id)
            ->update(
                [
                    'fullname' => $request->fullname,
                    'Age' => $request->Age,
                    'Email' => $request->Email
                ]);
        return redirect()->route('home');
    }

    public function destroy(string $id)
    {

        userData::destroy($id);
        return redirect()->route('home')->with('message' , 'User has been deleted');
        

    }
}
