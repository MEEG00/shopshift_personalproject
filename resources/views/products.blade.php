<x-layout>
    <x-header maintitle='EXPLORE OUR PRODUCTS'/>
<div class="container my-5">
    <div class="row">
        @foreach($products as $product)
        <div class="col-12 col-md-4 mt-5">
           <div class="card">
            <img src="{{Storage::url($product->img)}}" class="card-img-top imgcl" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$product->item}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <a href="{{route('info',['id'=>$product->id])}}" class="btn btn-primary">More info</a>
            </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
</x-layout>



