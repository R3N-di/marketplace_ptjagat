@if (Session::get('success'))
    <div class="bg-cyan-100 text-center" role="alert">
        <strong>{{ Session::get('success') }}</strong>
    </div>
@endif
