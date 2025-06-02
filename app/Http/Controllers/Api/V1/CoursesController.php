<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\StoreRequest;
use App\Models\Course;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Summary of index
     * @return JsonResponse|mixed
     */
    public function index(): JsonResponse
    {
        $courses = Course::paginate(15);
        return response()->json($courses);
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\Course\StoreRequest $request
     * @return JsonResponse|mixed
     */
    public function store(StoreRequest $request): JsonResponse
    {
        $data = Course::create($request->validated());

        return response()->json([
            'data' => $data,
            'message' => 'Course created successfully.',
        ], 201);
    }

    /**
     * Summary of show
     * @param \App\Models\Course $course
     * @param int $id
     * @return JsonResponse|mixed
     */
    public function show(Course $course, int $id): JsonResponse
    {
        $course = Course::findOrFail($id);

        if (!$course) {
            return response()->json(['message' => 'Course not found.'], 404);
        }

        return response()->json($course);
    }

    /**
     * Summary of update
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return JsonResponse|mixed
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $course = Course::findOrFail($id);

        $validated = $request->validate([
            'short_name' => 'required|string|max:50|unique:courses,short_name,' . $id,
            'full_name' => 'required|string|max:250',
            'creation_date' => 'required|date',
        ]);

        $course->update($validated);

        return response()->json([
            'data' => $course,
            'message' => 'Course updated successfully.'
        ], 200);
    }

    /**
     * Summary of destroy
     * @param int $id
     * @return JsonResponse|mixed
     */
    public function destroy(int $id): JsonResponse
    {
        $course = Course::findOrFail($id)->delete();

        if (!$course) {
            return response()->json(['message' => 'Course not found.'], 404);
        }

        return  response()->json([
            'message' => 'Course deleted successfully.'
        ], 204);
    }
}
