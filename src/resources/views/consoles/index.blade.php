<html>
<head>
</head>
<body>
@foreach($consoles as $console)
<div>
    <a href="{{ route('swagger.consoles.show', $console->id) }}" class="btn btn-primary" role="button">
        {{ route('swagger.consoles.show', $console->id) }}
    </a>
</div>
@endforeach
</body>
</html>