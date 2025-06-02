<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subject\SubjectsRequest;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Summary of index
     * @return JsonResponse|mixed
     */
    public function index(): JsonResponse
    {
        $subject = Subject::paginate(15);
        return response()->json($subject);
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\Subject\SubjectsRequest $request
     * @return JsonResponse|mixed
     */
    public function store(SubjectsRequest $request): JsonResponse
    {
        $subject = Subject::create($request->validated());

        return response()->json([
            'data' => $subject,
            'message' => 'Subject created successfully.'
        ], 201);
    }

    /**
     * Summary of show
     * @param int $id
     * @return JsonResponse|mixed
     */
    public function show(int $id): JsonResponse
    {
        $subject = Subject::findOrFail($id);

        if (!$subject) {
            return response()->json(['message' => 'Subject not found.'], 404);
        }

        $course = Course::with('subject')->get();

        if (!$course) {
            return response()->json(['message' => 'Course not found.'], 404);
        }

        return response()->json([
            'subject' => $subject,
            'courses' => $course,
        ]);
    }

    /**
     * Summary of update
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return JsonResponse|mixed
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $subject = Subject::findOrFail($id);

        if (!$subject) {
            return response()->json(['message' => 'Subject not found.'], 404);
        }

        $valideted = $request->validate([
            'course_id' => 'required',
            'subject_1' => 'required|string|max:50',
            'subject_2' => 'required|string|max:50',
            'subject_3' => 'required|string|max:50',
        ]);

        $subject->update($valideted);

        return response()->json([
            'data' => $subject,
            'message' => 'Subject updated successfully.'
        ], 200);
    }

    /**
     * Summary of destroy
     * @param int $id
     * @return JsonResponse|mixed
     */
    public function destroy(int $id): JsonResponse
    {
        Subject::findOrFail($id)->delete();
        return response()->json(['message' => 'Subject delete successfully.'], 204);
    }
}
