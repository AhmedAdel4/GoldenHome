<!-- Portfolio Grid -->
<section class="page-section" id="portfolio" style="background-color: gainsboro" >
   
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">المنتجات</h2>
                <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
            </div>
        </div>


        @foreach ($categories as $category) 
            @if ($category->products != null)
                <h3 id="{{ 'cat-id'.$category->id }}" class="section-heading timeline-inverted"  style="float: right; text-align: right">{{ $category->name }}</h3>
                <br><br>
                <div class="post-wrapper">
                    @foreach ( $category->products as $product)
                        @if (sizeof($category->products) == 1)
                        <div class="col-md-12 col-sm-12 portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#{{ 'id'.$product->id }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fas fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="{{ asset('/images/product/'.$product->image) }}" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <h4>{{ $product->name }}</h4>
                            </div>
                        </div>
                        @else
                            @if(sizeof($category->products) == 2) 
                            <div class="col-md-6 col-sm-6 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#{{ 'id'.$product->id }}">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="{{ asset('/images/product/'.$product->image) }}" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <h4>{{ $product->name }}</h4>
                                </div>
                            </div>
                            @else
                            <div class="col-md-4 col-sm-4 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#{{ 'id'.$product->id }}">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="{{ asset('/images/product/'.$product->image) }}" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <h4>{{ $product->name }}</h4>
                                </div>
                            </div>
                            @endif
                        @endif
                    
                    
                    @endforeach
                </div>
                    
                <hr class="hl">
            @endif
        @endforeach



      

    </div>
</section>

<!-- About -->
<section class="page-section site-animate fadeInUp site-animated" id="about" style=" 
background-image: url('{{ '/images/about/'.$about->image }}') !important">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="section-heading text-uppercase" style="color: wheat;">نبذه عنا</h1>
                <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-primary">
                    {!! htmlspecialchars_decode($about->text) !!}

                </h1>
                <br>
            </div>
        </div>
    </div>
    <br>
</section>


<!-- الأداره -->
<section class="bg-light page-section" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">أدارة الشركه</h2>
            </div>
        </div>
        <div class="row">
            @if (count($managers) == 2)
                @foreach ($managers as $manager)
                    <div class="col-sm-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ 'images/manager/'.$manager->image }}" alt="">
                            <h4>{{ $manager->name }}</h4>
                            <p class="text-muted">{{  $manager->description }}</p>
                        </div>
                    </div>
                @endforeach
            @else 
             @if (count($managers) < 2)
                @foreach ($managers as $manager)
                    <div class="col-sm-12">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{'images/manager/'.$manager->image }}" alt="">
                            <h4>{{ $manager->name }}</h4>
                            <p class="text-muted">{{  $manager->description }}</p>
                        </div>
                    </div>
                @endforeach
             @else
                @foreach ($managers as $manager)
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ 'images/manager/'.$manager->image }}" alt="">
                            <h4>{{ $manager->name }}</h4>
                            <p class="text-muted">{{  $manager->description }}</p>
                        </div>
                    </div>
                @endforeach
                 
             @endif
                
            @endif
           
            
          
        </div>

    </div>
    <br>
</section>





<!-- Portfolio Modals -->

<!-- Modal 1 -->
@foreach ($products as $product)
    <div class="portfolio-modal modal fade" id="{{ 'id'.$product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" >
            <div class="modal-content" >
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase" style="color: darkblue">{{ $product->name }}</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="img-fluid mx-auto" src="{{ asset('/images/product/'.$product->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach ($product->images as $image)
                                        <div class="col-md-6">
                                            <img class="img-fluid mx-auto" src="/images/product/{{$image->name}}" alt="">
                                        </div>
                                    @endforeach
                                </div>

                                <ul style="list-style: none" >
                                    <li>{{ $product->length}} : {{ $product['length-name'] }}</li>
                                    <li>{{ $product->width}} : {{ $product['width-name'] }}</li>
                                    <li>{{ $product->hight}} : {{ $product['hight-name'] }}</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fas fa-times"></i>
                غلق النافذه</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
@endforeach

