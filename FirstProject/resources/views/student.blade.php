<h2>Student List</h2>
<!-- using for each loop -->
<!-- @foreach($students as $student)
{{ $student }} <br>
@endforeach -->

<!-- using implode instead of for each loop -->
{{implode($students)}}