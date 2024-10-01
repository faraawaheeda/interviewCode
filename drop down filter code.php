<form action="{{ route('filter.students') }}" method="GET">
    <select name="class_id" onchange="this.form.submit()">
        @foreach ($classes as $class)
            <option value="{{ $class->id }}">{{ $class->name }}</option>
        @endforeach
    </select>
</form>
