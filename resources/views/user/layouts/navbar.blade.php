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
            <div class="btn-group">
              <button type="button" class="btn dropdown-toggle dropdown-toggle-split" style="color: blanchedalmond" data-toggle="dropdown">
              </button>
              <a href="#portfolio" class="btn  nav-link js-scroll-trigger">المنتجات</a>
              <div class="dropdown-menu" style="background-color: black">
                @foreach ($categories as $category) 
                  @if ($category->products != null)
                    <a class="dropdown-item nav-link js-scroll-trigger" style="float: right" href="#{{ 'cat-id'.$category->id }}">{{ $category->name }}</a>
                  @endif
                @endforeach
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">نبذه عنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">الأداره</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">تواصل معنا</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
