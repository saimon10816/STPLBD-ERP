<form method="POST" action="{{ route('calculate') }}">
    @csrf
    <label for="production_speed">Production Speed (yards/min):</label>
    <input type="text" name="production_speed" id="production_speed">

    <label for="efficiency">Efficiency (%):</label>
    <input type="text" name="efficiency" id="efficiency">

    <label for="warp_length">Length of Warp on a Beam (yards):</label>
    <input type="text" name="warp_length" id="warp_length">

    <label for="yarn_count">Yarn Count:</label>
    <input type="text" name="yarn_count" id="yarn_count">

    <label for="ends">Number of Ends:</label>
    <input type="text" name="ends" id="ends">

    <button type="submit">Calculate</button>
</form>
