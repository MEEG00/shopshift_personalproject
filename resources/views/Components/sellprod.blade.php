

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form method="POST" action="{{route('store')}}">

                @csrf

                <div class="mb-3">
                    <label for="userName" class="form-label">Your name</label>
                    <input type="text" class="form-control" id="userName" name="name">
                    <div id="emailHelp" class="form-text">We'll never share your data with anyone else.</div>
                </div>
                
                <div class="mb-3">
                    <label for="itemProduct" class="form-label">Item</label>
                    <input type="text" class="form-control" id="item" name="item">
                </div>

                <div class="mb-3">
                    <label for="itemDesc" class="form-label">Product description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label for="itemPrice" class="form-label">Price</label>
                    <input type="number" step="0.01"class="form-control" id="price" name="price">
                </div>
                <button type="submit" class="btn btn-primary">Sell!</button>

            </form>
        </div>
    </div>
</div>