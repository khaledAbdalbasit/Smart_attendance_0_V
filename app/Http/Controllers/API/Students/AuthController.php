<?php

namespace App\Http\Controllers\API\Students;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return ApiResponse::sendResponse(Response::HTTP_UNPROCESSABLE_ENTITY, 'Validation error', $validator->errors());
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $student = Auth::user();
            $data['token'] = $student->createToken('auth_student_token')->plainTextToken;
            $data['name'] = $student->name;
            $data['email'] = $student->email;
            return ApiResponse::sendResponse(Response::HTTP_CREATED, 'User logied in successfully', $data);
        }
        return ApiResponse::sendResponse(Response::HTTP_UNAUTHORIZED, ' these credentials do not match our records.', []);

    }
}
