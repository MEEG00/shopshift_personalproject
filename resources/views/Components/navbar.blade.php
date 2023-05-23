<nav class="navbar navbar-expand-lg navcol sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand navcl" href="{{route('homepage')}}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link navcl" href="{{route('products')}}">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navcl" href="{{route('sell')}}">Sell</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled navcl">Info</a>
        </li>
      </ul>
    </div>
  </div>
</nav>