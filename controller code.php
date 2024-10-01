public function search(Request $request)
{
    $query = $request->input('query');
    
    // Search for students or classes based on the query
    $students = Student::where('name', 'LIKE', "%$query%")->get();
    $classes = Class::where('name', 'LIKE', "%$query%")->get();

    return view('search-results', compact('students', 'classes'));
}
