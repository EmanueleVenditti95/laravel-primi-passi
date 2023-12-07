<h1>{{$title}}</h1>
<ul>
    @foreach($products as $product)
    <li>{{$product}}</li>
    @endforeach
</ul>