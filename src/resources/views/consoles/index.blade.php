@foreach($consoles as $console)
<div>
    <a href="{{ route('swagger.consoles.show', $console->id) }}">
        {{ route('swagger.consoles.show', $console->id) }}
    </a>
</div>
@endforeach