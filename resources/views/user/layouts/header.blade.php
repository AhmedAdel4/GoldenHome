@if ($header != null)
<header class="masthead" style="background-image: url({{ '/images/header/'.$header->image}}) !important">    
    <div class="container">
      <div class="intro-text">
        <h1 class="text-primary"> {!! htmlspecialchars_decode($header->text) !!}</h1>
        
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">تصفح المنتجات</a>
      </div>
    </div>
    <br>
  </header>
  @endif
