<form method="GET" action="/calc">
    <input type="number" name="x" placeholder="Enter X" required>
    <input type="number" name="y" placeholder="Enter Y" required>
    <button type="submit">Calculate</button>
</form>

@if(isset($result))
    <h3>Results:</h3>
    <p>Addition: {{ $result['sum'] }}</p>
    <p>Subtraction: {{ $result['diff'] }}</p>
    <p>Multiplication: {{ $result['mul'] }}</p>
    <p>Division: {{ $result['div'] }}</p>
@endif