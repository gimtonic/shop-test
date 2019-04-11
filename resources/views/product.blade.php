
<p>Все продукты в категории <span style="font-size: 16px; font-weight: bold">{{ $category->name }}:</span></p>
<ul class="list-group">
    @foreach($category->products as $product)
        <li class="list-group-item">{{ $product->name }}</li>
    @endforeach
</ul>