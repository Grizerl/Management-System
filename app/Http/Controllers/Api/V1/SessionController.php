<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Session\SessionRequest;
use App\Models\AcademicSession;
use Illuminate\Http\JsonResponse;

class SessionController extends Controller
{
    /**
     * Summary of index
     * @return JsonResponse|mixed
     */
    public function index(): JsonResponse
    {
        $session = AcademicSession::paginate(15);
        return response()->json($session);
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\Session\SessionRequest $request
     * @return JsonResponse|mixed
     */
    public function store(SessionRequest $request): JsonResponse
    {
        $session = AcademicSession::create($request->validated());

        return response()->json([
            'message' => 'Session successfully create!',
            'data' => $session
        ], 201);
    }

    /**
     * Summary of show
     * @return JsonResponse|mixed
     */
    public function show(): JsonResponse
    {
        $session = AcademicSession::all();

        if (!$session) {
            return response()->json(['message' => 'Subject not found.'], 404);
        }

        return response()->json($session);
    }

    /**
     * Summary of destroy
     * @param int $id
     * @return JsonResponse|mixed
     */
    public function destroy(int $id): JsonResponse
    {
        AcademicSession::findOrFail($id)->delete();
        return response()->json(['message' => 'Session delete.'], 204);
    }
}
