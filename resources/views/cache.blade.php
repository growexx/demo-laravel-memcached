<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memcached Demo</title>
</head>
<body>
    <h1>Laravel Memcached Cache Demo</h1>

    <!-- Form to set data in cache -->
    <form action="{{ url('/cache/set') }}" method="POST">
        @csrf
        <label for="key">Cache Key:</label>
        <input type="text" name="key" id="key" required>
        <label for="value">Cache Value:</label>
        <input type="text" name="value" id="value" required>
        <button type="submit">Set Cache</button>
    </form>

    <h2>Get Cached Value</h2>
    <!-- Form to get data from cache -->
    <form action="{{ url('/cache/get') }}" method="GET">
        <label for="get_key">Enter Cache Key:</label>
        <input type="text" name="get_key" id="get_key" required>
        <button type="submit">Get Cache</button>
    </form>

    @if(isset($cachedValue))
        <h3>Cached Value: {{ $cachedValue }}</h3>
    @endif

</body>
</html>