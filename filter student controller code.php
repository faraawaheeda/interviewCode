public function filterByClass($classId)
{
    $students = Student::where('class_id', $classId)->get();
    return view('students.index', compact('students'));
}
