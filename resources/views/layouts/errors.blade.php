@if (count($errors->all()) > 0)
    @foreach($errors->all() as $error)
        <ul class="bg-danger p-3">
            <li>{{$error}}</li>
        </ul>
    @endforeach
@endif
