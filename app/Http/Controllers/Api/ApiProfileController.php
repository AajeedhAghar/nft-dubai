<?php

namespace App\Http\Controllers\Api;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiProfileController extends Controller
{
    //
    public function index() {

        return Profile::all();
    }

    public function show($id)
    {
        return Profile::find($id);
    }

    public function store(Request $request)
    {
        $profile = Profile::create($request->all());

        return response()->json($profile, 201);
    }

    public function update(Request $request, Profile $profile)
    {
        $profile->update($request->all());

        return response()->json($profile, 200);
    }

    public function delete(Profile $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}

