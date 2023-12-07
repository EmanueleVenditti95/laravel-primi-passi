<h1>{{$title}}</h1>
<ul>
    @foreach ($contacts as $contact)
    <li>
        {{$contact}}
    </li>
    @endforeach
</ul>