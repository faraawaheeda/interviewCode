<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
</head>
<body>
    <h1>Student Management</h1>

    <!-- Success Message -->
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <!-- Excel File Upload Form -->
    <form action="/students/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
    </form>

    <!-- Search and Filter Form -->
    <form method="GET" action="/students">
        <input type="text" name="search" placeholder="Search by name" value="{{ request()->search }}">
        <select name="class_filter">
            <option value="">Filter by Class</option>
            <option value="Berlian" {{ request()->class_filter == 'Berlian' ? 'selected' : '' }}>Berlian</option>
            <option value="Zamrud" {{ request()->class_filter == 'Zamrud' ? 'selected' : '' }}>Zamrud</option>
            <option value="Delima" {{ request()->class_filter == 'Delima' ? 'selected' : '' }}>Delima</option>
        </select>
        <button type="submit">Search & Filter</button>
    </form>

    <!-- Student List Table -->
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Level</th>
                <th>Parent Contact</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->level }}</td>
                    <td>{{ $student->parent_contact }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
