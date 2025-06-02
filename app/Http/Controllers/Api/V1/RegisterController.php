<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register\RegisterRequest;
use App\Models\AcademicSession;
use App\Models\Course;
use App\Models\Register;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    /**
     * Summary of index
     * @return JsonResponse|mixed
     */
    public function index(): JsonResponse
    {
        $register = Register::paginate(15);
        return response()->json($register);
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\Register\RegisterRequest $request
     * @return JsonResponse|mixed
     */
    public function store(RegisterRequest $request): JsonResponse
    {
        $user = Register::create($request->validated());

        return response()->json([
            'message' => 'Student successfully registered!',
            'data' => $user
        ], 201);
    }

    /**
     * Summary of show
     * @param int $id
     * @return JsonResponse|mixed
     */
    public function show(int $id): JsonResponse
    {
        $register = Register::findOrFail($id);

        if (!$register) {
            return response()->json(['message' => 'Register not found.'], 404);
        }

        $course = Course::all();

        if (!$course) {
            return response()->json(['message' => 'Course not found.'], 404);
        }

        $session = AcademicSession::all();

        if (!$session) {
            return response()->json(['message' => 'Session not found.'], 404);
        }

        return response()->json([
            'register' => $register,
            'course' => $course,
            'session' => $session
        ]);
    }

    /**
     * Summary of update
     * @param \App\Http\Requests\Register\RegisterRequest $registerRequest
     * @param int $id
     * @return JsonResponse|mixed
     */
    public function update(RegisterRequest $registerRequest, int $id): JsonResponse
    {
        $register = Register::findOrFail($id);

        if (!$register) {
            return response()->json(['message' => 'Register not found.'], 404);
        }

        $register->update($registerRequest->validated());

        return response()->json([
            'message' => 'Student information successfully updated!',
            'data' => $register
        ], 200);
    }

    /**
     * Summary of destroy
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $user = Register::findOrFail($id)->delete();

        if (!$user) {
            return response()->json(['message' => 'Course not found.'], 404);
        }

        return response()->json(['message' => 'Student successfully deleted!'], 204);
    }
}
