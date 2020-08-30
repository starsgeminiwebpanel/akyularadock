<?php

namespace Modules\Frontsection\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;
use Modules\Frontsection\Transformers\UserResource;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
       //Route::apiResource('user','UserController');
        // Route::middleware('auth:api');
        //     $this->middleware('auth:api')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     * @return UserResource
     */
    public function index()
    {
        return new UserResource(User::first());
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        /*
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
        */
        /*
        $user = new User();
        //$user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        */
        $user = User::create([
            //'name' => $request->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return new UserResource($user);

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
