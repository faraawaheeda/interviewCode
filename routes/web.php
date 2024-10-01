use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index']);
Route::post('/students/upload', [StudentController::class, 'upload']);
