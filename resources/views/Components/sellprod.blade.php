

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label for="userName" class="form-label cardfnt">Your name</label>
                    <input type="text" class="form-control cardfnt" id="userName" name="name">
                    <div id="emailHelp" class="form-text cardfnt">We'll never share your data with anyone else.</div>
                </div>
                
                <div class="mb-3">
                    <label for="itemProduct" class="form-label cardfnt">Item</label>
                    <input type="text" class="form-control cardfnt" id="item" name="item">
                </div>

                <div class="mb-3">
                    <label for="itemDesc" class="form-label cardfnt">Product description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control cardfnt"></textarea>
                </div>

                <div class="mb-3">
                    <label for="itemPrice" class="form-label cardfnt">Price</label>
                    <input type="number" step="0.01"class="form-control cardfnt" id="price" name="price">
                </div>

                <div class="mb-3">
                    <label for="img" class="form-label cardfnt">Add image</label>
                    <input type="file" class="form-control cardfnt" id="img" name="img">
                </div>





                <button type="submit" class="btn btncol cardfnt">Sell!</button>

            </form>
        </div>
    </div>
</div>