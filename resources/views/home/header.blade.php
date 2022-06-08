 <!-- Top Bar Start -->
 <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-bar-left">
                            <div class="text">
                                <h2>9:00 - 19:00</h2>
                                <p>Monday – Friday: 9 to 7pm Saturday: 8 to 6pm Sunday: Closed</p>
                            </div>
                            <div class="text">
                                <h2>+123 456 7890</h2>
                                <p>Call Us For Appointment</p>
                            </div>
                            
                        </div>
                    </div>
                   
            
                    <div class="col-md-6 col-sm-6 col-xs-6">
                @auth
                <div class="top-bar-right">
                

                    <i class="fa fa-user-o"></i>
                    <div class="nav-item dropdown">
                  <strong class="nav-link dropdown-toggle" data-toggle="dropdown"><font color="white">{{Auth::user()->name}}</font></strong>
                  <div class="dropdown-menu">
                  <ul class="custom-menu">
    <li><a href="{{route('userpanel.index')}}"><i class="fa fa-user-o"></i> My Profile </a></li>
    <li><a href="#"><i class="fa fa-heart-o"></i> My Favourite Services </a></li>
    <li><a href="{{route('userpanel.reviews')}}"><i class="fa fa-exchange"></i> My Reviews </a></li>
    <li><a href="#"><i class="fa fa-check"></i> Checkout  </a></li>
    <li><a href="/logout"><i class="fa fa-user-plus"></i> Logout </a></li>
</ul>

</div>
</div>
                  <div class="text">
                  <a href="/logoutuser" class="aa-login"><font color="white">Logout </font></a>
                   </div>
                  
                  @endauth
                  @guest
                  <div class="top-bar-right">
                  <div class="text">
                  <a href="/registeruser" class="aa-register"> <font color="white">Register </font></a>
                  </div>
                  <div class="text">
                  <a href="/loginuser" class="aa-login"><font color="white">Login </font></a>
                </div>
                   @endguest
                </div>

              </div>
            </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->