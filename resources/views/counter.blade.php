<!DOCTYPE html>
<html>
<head>
    <title>Counter App</title>
</head>
<body>

    <h1>Counter Value: {{ $counter->count }}</h1>

    <form method="post" action="{{ route('counter.increment') }}">
        @csrf
        <button type="submit">Increment</button>
    </form>

    <form method="post" action="{{ route('counter.decrement') }}">
        @csrf
        <button type="submit">Decrement</button>
    </form>

</body>
</html>
