 <!-- Nav Bar Start -->
 <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="{{route('home')}}" class="navbar-brand">Beauty <span>Center</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @php
                $mainCategories= \App\Http\Controllers\HomeController::maincategorylist()
                @endphp

               


                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
                            <div class="dropdown-menu">

                    @foreach($mainCategories as $rs)
                    <li class="dropdown side-dropdown">
                    <a href="" class="dropdown-item">{{$rs->title}}</a>
                        <div class="custom-menu">
                            <div class="row">
                                @if(count($rs->children))
                                @include('home.categorytree',['children'=> $rs->children])
                                @endif
                            </div>
                        </div>
                     </li>
                 @endforeach
                 </div>
          </div>
                        <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                        <a href="{{route('references')}}" class="nav-item nav-link">References</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="price.html" class="nav-item nav-link">Price</a>
                        <a href="team.html" class="nav-item nav-link">Barber</a>
                        <a href="portfolio.html" class="nav-item nav-link">Gallery</a>
                        <a href="{{route('faq')}}" class="nav-item nav-link">FAQ</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
