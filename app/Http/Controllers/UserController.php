<?php

namespace App\Http\Controllers;

use App\Course;
use App\University;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json(
            [
                'status' => 'success',
                'users' => $users->toArray()
            ], 200);
    }

    public function show(Request $request, $id)
    {
        $user = User::find($id);
        if ($user->hasRole('admin')) {
            $user->userType = "admin";
        } elseif ($user->hasRole('student')) {
            $user->userType = "student";
            if ($user->university_id) {
                $user->university = University::find($user->university_id);
                $user->course = Course::find($user->course_id);
            }
        } elseif ($user->hasRole('agent')) {
            $user->userType = "agent";
            if ($user->university_id) {
                $user->university = University::find($user->university_id);
            }
        }
        return response()->json(
            [
                'status' => 'success',
                'user' => $user->toArray()
            ], 200);
    }

    public function agents()
    {
        $agents = [];
        $users = User::all();

        if (isset($users)) {
            foreach ($users as $user) {
                if ($user->hasRole('agent')) {
                    array_push($agents, $user);
                }
            }
        }

        return response()->json([
            'status' => 'success',
            'agents' => $agents
        ], 200);
    }

    public function agentsApprove(Request $request)
    {
        $agent = User::find($request->id);
        if ($request->approved) {
            $agent->approved = true;
            $agent->update();
        } else {
            $agent->delete();
        }

        return response()->json([
            'status' => 'success',
        ], 200);
    }

    public function usersUpdate(Request $request)
    {
        $user = User::find($request->id);
        $user->age = $request->age;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->number = $request->number;
        $user->update();

        return response()->json([
            'status' => 'success',
        ], 200);

    }

    public function usersDelete(Request $request)
    {
        $user = User::find($request->id);
        if ($user) {

            $user->delete();

            return response()->json([
                'status' => 'success',
            ], 200);
        }

    }

    public function agentFeedback(Request $request)
    {
        $feedback = DB::table('agent_feedback')->where('agent_id', '=', $request->agentId)
            ->get();

        if (isset($feedback)) {
            return response()->json([
                'status' => 'success',
                'agentId' => $request->all(),
                'feedbacks' => $feedback->toArray()
            ], 200);
        }
    }
}
