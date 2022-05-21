<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="{{asset('adminpanel')}}/vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="{{asset('adminpanel')}}/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
				<li>
						<a href="/admin" class="dropdown-toggle no-arrow">
						<i class="micon icon-copy ion-android-home"></i><span class="mtext">    Dashboard</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
						<i class="micon icon-copy ion-ios-box"></i></span><span class="mtext">      Orders</span>
						</a>
						<ul class="submenu">
							<li><a href="index.html">New Orders</a></li>
							<li><a href="index2.html">Accepted Orders</a></li>
							<li><a href="index3.html">Shipping Orders</a></li>
							<li><a href="index4.html">Completed Orders</a></li>
						</ul>
					
					<li>
						<a href="/admin/category" class="dropdown-toggle no-arrow">
						<i class="micon icon-copy ion-grid"></i><span class="mtext">    Categories</span>
						</a>
					</li>
					<li>
						<a href="/admin/service" class="dropdown-toggle no-arrow">
						<i class="micon icon-copy ion-briefcase"></i><span class="mtext">    Services</span>
						</a>
					</li>
					<li>
						<a href="/admin/comment" class="dropdown-toggle no-arrow">
						<i class="micon icon-copy ion-chatbox-working"></i> <span class="mtext">    Comments</span>
						</a>
					</li>
					<li>
						<a href="{{route('admin.faq.index')}}" class="dropdown-toggle no-arrow">
						<i class="micon icon-copy ion-help"></i><span class="mtext">   FAQ</span>
						</a>
					</li>
					<li>
						<a href="{{route('admin.message.index')}}" class="dropdown-toggle no-arrow">
                    <i class="micon icon-copy ion-email"></i><span class="mtext">    Messages</span>
						</a>
					</li>
					<li>
						<a href="/admin/user" class="dropdown-toggle no-arrow">
						<i class="micon icon-copy ion-person"></i><span class="mtext">     Users</span>
						</a>
					</li>
					<li>
						<a href="/admin/social" class="dropdown-toggle no-arrow">
						<i class="icon-copy ion-social-facebook"></i>  <i class="icon-copy ion-social-instagram"></i> <i class="icon-copy ion-social-twitter-outline"></i><span class="mtext">       Social</span>
						</a>
					</li>
					
					
					
					<li>
						<div class="sidebar-small-cap">LABELS</div>
					</li>
					<li>
					<a href="admin/setting" class="dropdown-toggle no-arrow">
                        <span class="micon icon-copy ion-gear-a"></span><span class="mtext">    Settings</span>
                        </a>
						
					</li>
					
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>