@if( session()->has('message.content') )
    <div class="alert alert-{{ session()->get('message.type') }}">
        {{ session()->get('message.content') }}
    </div>
@endif
