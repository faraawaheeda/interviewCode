namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    public function model(array $row)
    {
        // Skip existing records based on 'name' and 'class'
        return Student::updateOrCreate(
            ['name' => $row[0], 'class' => $row[1]],
            ['level' => $row[2], 'parent_contact' => $row[3]]
        );
    }
}
