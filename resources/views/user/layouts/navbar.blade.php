<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Golden Home</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger float-right" href="#about">نبذه عنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger float-right" href="#team">الأداره</a>
          </li>
          <li class="nav-item">
            <div class="btn-group float-right">
              <button type="button" class="btn dropdown-toggle dropdown-toggle-split" style="color: blanchedalmond" data-toggle="dropdown">
              </button>
              <a href="#portfolio" class="btn  nav-link js-scroll-trigger">المنتجات</a>
              <div class="dropdown-menu" style="background-color: #212529; padding: 0%; margin: 0%">
                @foreach ($categories as $category) 
                  @if ($category->products != null)
                    <a class="dropdown-item nav-link js-scroll-trigger" style="text-align: center" href="#{{ 'cat-id'.$category->id }}">{{ $category->name }}</a>
                  @endif
                @endforeach
              </div>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>
