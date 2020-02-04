@foreach($product as $pro)
<h2>Product Name: </h2>
<p>{{ $pro->name }} || ${{ money_format($pro->price, 2) }}</p>

<h3>Product Belongs to</h3>

<ul>
    
   
   @foreach($pro->shops as $shop)

   <li>
       {{$shop->title}}
   </li>
   @endforeach
   
   
</ul>
@endforeach