


@if (session('status'))
    <div style="margin-top: 10px; border: 2px solid green; padding: 2px; background-color: palegreen;">
        <p>{{ session('status') }}</p>
    </div>
@endif
