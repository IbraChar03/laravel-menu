@if ($errors -> any())
<div class="error">
    <ul>
        @foreach ($errors as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif