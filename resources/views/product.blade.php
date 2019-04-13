<p>Все продукты в категории <span style="font-size: 16px; font-weight: bold">{{ $product->name }}:</span></p>
<ul class="list-group">

    @foreach($product->getChildren() as $productDepthOne)

        @if($productDepthOne->hasChildren())
            <li class="list-group-item"> Подкатегория {{ $productDepthOne->name }}</li>

            @foreach($productDepthOne->getChildren() as $productDepthTwo)
                <ul class="list-group">
                    <li class="list-group-item"> Продукт {{ $productDepthTwo->name }}</li>
                </ul>
            @endforeach
        @else
            <li class="list-group-item"> Продукт {{ $productDepthOne->name }}</li>
        @endif
    @endforeach
</ul>