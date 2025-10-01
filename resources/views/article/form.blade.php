@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-700">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ html()->label('Имя', 'name') }}
{{ html()->input('text', 'name')->class('border-2 border-rose-400') }}
{{ html()->label('Содержание', 'body') }}
{{ html()->textarea('body')->class('border-2 border-rose-400') }}
