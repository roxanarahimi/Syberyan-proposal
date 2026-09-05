<?php

namespace App\Http\Controllers;

use App\Http\Resources\LinkedinUsersResource;
use App\Models\LinkedinUsers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function search(Request $request)
    {
        try {
            $data = LinkedinUsers::orderBy('id');
            if ($request->filled('job_title')) {
                $data = $data->where('job_title', 'like', '%' . $request['job_title'] . '%');
            }
            if ($request->filled('skill')) {
                $data = $data->where('skills', 'like', '%' . $request['skill'] . '%');
            }
            $data = $data->get();
            return response(LinkedinUsersResource::collection($data), 200);

        } catch (\Exception $e) {
            return $e;
        }
    }
    public function user($id)
    {
        try {
            $data = LinkedinUsers::find($id);
            return response($data, 200);

        } catch (\Exception $e) {
            return $e;
        }
    }
}
