@if ($errors->any())
    <div class="alert alert-danger" id="form_errors">
        <p><strong>Alguns itens precisam de sua atenção:</strong></p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif