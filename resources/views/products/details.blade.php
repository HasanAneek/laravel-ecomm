<x-layout>
    <section class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" style="margin-top: 80px" src="{{ $product['gallery'] }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/" style="text-decoration: none; border-radius:20px; margin-bottom: 20px;margin-top: 30px" class="btn btn-outline-info ">Go Back</a>
                <h2>{{ $product->name }}</h2>
                <h5>Price: {{ $product->price }}</h5>
                <h5>Category: {{ $product->category }}</h5>
                <h6> {{ $product->description }}</h6>

                <div class="d-flex">
                    <form action="/addcart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value={{ $product['id'] }}>
                        <button class="global-btn btn-primary">Add To Cart</button>
                    </form>
                    <div style="margin-left: 30px">
                        <button class="global-btn btn-success">Buy Now</button>
                    </div>
                </div>
               <div>
               </div>
            </div>
        </div>
    </section>
</x-layout>
