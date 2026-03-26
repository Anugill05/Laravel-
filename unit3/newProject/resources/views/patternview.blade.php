<form method="GET" action="/pattern">
    <input type="number" name="n" placeholder="Enter rows" required>
    <button type="submit">Generate</button>
</form>

@if(isset($pattern))
    <h3>Pattern:</h3>
    @foreach($pattern as $row)
        @foreach($row as $val)
            {{ $val }}
        @endforeach
        <br>
    @endforeach
@endif