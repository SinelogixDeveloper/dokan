

<style> 

   .badge { 

        position: relative; 

        top: -57px; 

        left: 27px; 

        background-color: red;

        border: 1px solid red; 

        border-radius: 50%; 

       }  

       a.btn.btn-info {

        background-color: #525f7f;

        border-color: #525f7f;

}

</style>

<div class="header pb-6 d-flex align-items-center" style="min-height: 160px;">



      <nav class="sidenav navbar nav_main" id="sidenav-main">

        

          <!-- Brand -->

          <div class="sidenav-header  align-items-center">

            <a class="navbar-brand" href="{{ url('/admin/dashboard')}}">

              <img src="{{asset('/assets/img/brand/logo.png')}}" class="navbar-brand-img" alt="...">

            </a>

          </div>

          <div class="navbar-inner">

            <!-- Collapse -->

            <div class="sidenav_mob" id="sidenav-collapse-main">

              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

              <!-- Nav items -->

              <ul class="navbar-nav m-main">

                <li data-id="nav-dashboard" class="nav-item dropdown d-none d-md-block">

                  <a class="nav-link" href="{{ url('/admin/dashboard')}}">

                    <i class=" text-white fa fa-home navbar-icon" ></i>

                    <span class="navbar-label">{{ __('Dashboard') }}</span>

                  </a>

                </li>

                <li data-id="nav-catalog" class="nav-item dropdown">

                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">

                    <i class=" text-white fa fa-cube navbar-icon"></i>

                    <span class="navbar-label">{{ __('catalog') }}</span>

                  </a>

                  <ul class="dropdown-menu">

                    <li data-id="categories-list">

                      <a class="dropdown-item" href="{{ url('/admin/category')}}">

                        <i class="fa-fw fa fa-sitemap"></i>

                        {{ __('categories') }}

                      </a>

                    </li>

                    <!-- <li data-id="categories-list">

                      <a class="dropdown-item" href="{{ url('/admin/business_upload')}}">

                        <i class="fa-fw fa fa-sitemap"></i>

                        {{ __('Business Upload') }}

                      </a>

                    </li> -->

                    <!--<li data-id="categories-list">-->

                    <!--  <a class="dropdown-item" href="{{ url('/admin/business_category')}}">-->

                    <!--    <i class="fa-fw fa fa-sitemap"></i>-->

                    <!--    Business Categories-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li data-id="categories-list">-->

                    <!--  <a class="dropdown-item" href="{{ url('/admin/business_subcategory')}}">-->

                    <!--    <i class="fa-fw fa fa-cube"></i>-->

                    <!--    Business SubCategories-->

                    <!--  </a>-->

                    <!--</li>-->

                    <li data-id="products">

                      <a class="dropdown-item" href="{{ url('/admin/product')}}">

                        <i class="fa-fw fa fa-cube"></i>

                        {{ __('Manage products') }}

                      </a>

                    </li>

                    <!--<li data-id="products-bulk-edit">-->

                    <!--  <a class="dropdown-item" href="{{ url('/admin/bulk-edit')}}">-->

                    <!--    <i class="fa-fw fa fa-cubes"></i>-->

                    <!--    {{ __('Bulk edit products') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <li data-id="reviews">

                      <a class="dropdown-item" href="{{ url('/admin/new-arrival')}}">

                        <i class="fa-fw far fa-star-half"></i>

                        New Arrival Product

                      </a>

                    </li>

                    <li data-id="reviews">
                      <a class="dropdown-item" href="{{ url('/admin/best_seller')}}">
                        <i class="fa-fw far fa-star-half"></i>
                        Best Seller Product
                      </a>
                    </li>
                    <li data-id="reviews">
                      <a class="dropdown-item" href="{{ url('/admin/most_rating')}}">
                        <i class="fa-fw far fa-star-half"></i>
                        Most Rating Product
                      </a>
                    </li>
                    
                     <li data-id="reviews">
                      <a class="dropdown-item" href="{{ url('/admin/best_offer')}}">
                        <i class="fa-fw far fa-star-half"></i>
                        Best Offer
                      </a>
                    </li>


                    <li data-id="reviews">

                      <a class="dropdown-item" href="{{ url('/admin/blog-section')}}">

                        <i class="fa-fw far fa-list-alt"></i>

                        Block Section

                      </a>

                    </li>

                    <!--<li data-id="manufacturers">-->

                    <!--  <a class="dropdown-item" href="manufacturer-list.html">-->

                    <!--    <i class="fa-fw far fa-building"></i>-->

                    <!--    {{ __('Manufacturers') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li data-id="tags">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw fa fa-tags"></i>-->

                    <!--    {{ __('Product tags') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li data-id="stockreport">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw fa fa-sort-numeric-down"></i>-->

                    <!--    {{ __('Low stock report') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <li data-id="stockreport">

                      <a class="dropdown-item" href="/admin/show-brands">

                        <i class="fa-fw fa fa-sort-numeric-down"></i>

                            Brand

                      </a>

                    </li>

                    <li class="dropdown-divider"></li>

                    <li data-id="attributes-header" class="dropdown-header h6">{{ __('Attributes') }}</li>

                    <li data-id="attributes">

                      <a class="dropdown-item" href="{{ url('/admin/attribute')}}">

                        <i class="fa-fw far fa-list-alt"></i>

                        Product Attributes

                      </a>

                    </li>

                    <!--<li data-id="specification-attributes">-->

                    <!--  <a class="dropdown-item" href="SpecificationAttribute.html">-->

                    <!--    <i class="fa-fw fa fa-list"></i>-->

                    <!--    {{ __('Specification Attributes') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li data-id="checkout-attributes">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw fa fa-list"></i>-->

                    <!--    {{ __('Checkout Attributes') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                  </ul>

                </li>

                <li data-id="nav-sales" class="nav-item dropdown">

                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">

                    <i class=" text-white fa fa-chart-line navbar-icon"></i>

                    <span class="navbar-label">{{ __('Sales') }}</span>

                  </a>

                  <ul class="dropdown-menu">

                    <li data-id="orders">

                      <a class="dropdown-item" href="{{ url('/admin/order')}}">

                        <i class="fa-fw far fa-chart-bar"></i>

                        {{ __('Orders') }}

                      </a>

                    </li>

                    <li data-id="orders">

                      <a class="dropdown-item" href="{{ url('/admin/admin_comission')}}">

                        <i class="fa-fw far fa-chart-bar"></i>

                        {{ __('Comission Management') }}

                      </a>

                    </li>

                    {{-- <li data-id="shipments">

                      <a class="dropdown-item" href="#">

                        <i class="fa-fw fa fa-truck-moving fa-flip-horizontal"></i>

                        {{ __('Shipments') }}

                      </a>

                    </li> --}}

                    <!--<li data-id="recurring-payments">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw fa fa-redo"></i>-->

                    <!--    {{ __('Recurring payments') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li data-id="return-requests">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw fa fa-truck-moving"></i>-->

                    <!--    {{ __('Return requests') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li data-id="gift-cards">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw fa fa-gifts"></i>-->

                    <!--    {{ __('Gift cards') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li class="dropdown-divider"></li>-->

                    <!--<li data-id="shopping-carts">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw fa fa-cart-arrow-down"></i>-->

                    <!--    {{ __('Current shopping carts') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li data-id="wishlists">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw far fa-heart"></i>-->

                    <!--    {{ __('Current wishlists') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li class="dropdown-divider"></li>-->

                    <!--<li data-id="bestsellers">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw far fa-thumbs-up"></i>-->

                    <!--    {{ __('Bestsellers') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li data-id="flopsellers">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw far fa-thumbs-down"></i>-->

                    <!--    {{ __('Products never purchased') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                  </ul>

                {{-- </li>

                <li data-id="nav-users"  class="nav-item dropdown">

                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">

                    <i class="text-white fa fa-users navbar-icon"></i>

                    <span class="navbar-label">{{ __('Customers') }}</span>

                  </a>

                  <ul class="dropdown-menu">

                    <li data-id="customers">

                      <a class="dropdown-item" href="customers.html">

                        <i class="fa-fw fa fa-user-alt"></i>

                        {{ __('Customers') }}

                      </a>

                    </li>

                    <li data-id="customer-roles">

                      <a class="dropdown-item" href="#">

                        <i class="fa-fw fa fa-users"></i>

                        {{ __('Customer roles') }}

                      </a>

                    </li>

                    <!--<li data-id="online-customers">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw fa fa-sign-in-alt"></i>-->

                    <!--    {{ __('Online customers') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li data-id="customer-reports">-->

                    <!--  <a class="dropdown-item" href="customer-reports.html">-->

                    <!--    <i class="fa-fw far fa-chart-bar"></i>-->

                    <!--    {{ __('Customer reports') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li data-id="external-auth">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw fab fa-facebook-square"></i>-->

                    <!--    {{ __('External authentication methods') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li class="dropdown-divider"></li>-->

                    <!--<li data-id="activity-log">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw far fa-eye"></i>-->

                    <!--    {{ __('Activity Log') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                  </ul>

                </li> --}}

                <li data-id="nav-promotions"  class="nav-item dropdown">

                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">

                    <i class="text-white fa fa-bullhorn navbar-icon"></i>

                    <span class="navbar-label">{{ __('Promotions') }}</span>

                  </a>

                  <ul class="dropdown-menu">

                    <li data-id="discounts">

                      <a class="dropdown-item" href="{{ url('/admin/home-banner') }}">

                        <i class="fa-fw far fa-stream"></i>

                        Home Banner

                      </a>

                    </li>

                    <li data-id="discounts">

                      <a class="dropdown-item" href="{{ url('/admin/sub-banner') }}">

                        <i class="fa-fw far fa-stream"></i>

                        Sub Banner

                      </a>

                    </li>

                    <li data-id="discounts">

                      <a class="dropdown-item" href="{{ url('/admin/promo-banner') }}">

                        <i class="fa-fw far fa-stream"></i>

                        Promo Banner

                      </a>

                    </li>

                    <li data-id="discounts">

                      <a class="dropdown-item" href="{{ url('/admin/client-logo') }}">

                        <i class="fa-fw far fa-stream"></i>

                        Client Logo

                      </a>

                    </li>

                    <!--<li data-id="discounts">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw fa fa-signal fa-flip-horizontal"></i>-->

                    <!--    {{ __('Discounts') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li data-id="affiliates">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw fa fa-user-friends"></i>-->

                    <!--    {{ __('Affiliates') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li data-id="newsletter-subscribers">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw fa fa-envelope"></i>-->

                    <!--    {{ __('Newsletter Subscribers') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                    <!--<li data-id="campaigns">-->

                    <!--  <a class="dropdown-item" href="#">-->

                    <!--    <i class="fa-fw fa fa-bullhorn"></i>-->

                    <!--    {{ __('Campaigns') }}-->

                    <!--  </a>-->

                    <!--</li>-->

                  </ul>

                </li>

                <!--<li data-id="nav-cms" class="nav-item dropdown">-->

                <!--  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">-->

                <!--    <i class="text-white fa fa-code-branch navbar-icon"></i>-->

                <!--    <span class="navbar-label">{{ __('CMS') }}</span>-->

                <!--  </a>-->

                <!--  <ul class="dropdown-menu">-->

                <!--    <li data-id="topics">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw far fa-file-alt"></i>-->

                <!--        {{ __('Topics') }}-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="menus">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw far fa-stream"></i>-->

                <!--        {{ __('Menus') }}-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="news" class="dropdown-group">-->

                <!--      <a class="dropdown-item" href="javascript:void(0)">-->

                <!--        <i class="fa-fw far fa-newspaper"></i>-->

                <!--        {{ __('News') }}-->

                <!--      </a>-->

                <!--      <ul class="dropdown-menu">-->

                <!--        <li data-id="news-items">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            {{ __('News items') }}-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="news-comments">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            {{ __('News comments') }}-->

                <!--          </a>-->

                <!--        </li>-->

                <!--      </ul>-->

                <!--    </li>-->

                <!--    <li data-id="blog" class="dropdown-group">-->

                <!--      <a class="dropdown-item" href="javascript:void(0)">-->

                <!--        <i class="fa-fw fa fa-blog"></i>-->

                <!--        Blog-->

                <!--      </a>-->

                <!--      <ul class="dropdown-menu">-->

                <!--        <li data-id="blog-posts">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Blog posts-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="blog-comments">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Blog comments-->

                <!--          </a>-->

                <!--        </li>-->

                <!--      </ul>-->

                <!--    </li>-->

                <!--    <li data-id="forums">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-users"></i>-->

                <!--        Forums-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="message-templates">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw far fa-envelope"></i>-->

                <!--        Message templates-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="polls">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-tasks"></i>-->

                <!--        Polls-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="widgets">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-plus-square"></i>-->

                <!--        Widgets-->

                <!--      </a>-->

                <!--    </li>-->

                <!--  </ul>-->

                <!--</li>-->

                <!--<li data-id="nav-configuration" class="nav-item dropdown">-->

                <!--  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">-->

                <!--    <i class="text-white fa fa-cogs navbar-icon"></i>-->

                <!--    <span class="navbar-label">Configuration</span>-->

                <!--  </a>-->

                <!--  <ul class="dropdown-menu">-->

                <!--    <li data-id="settings" class="dropdown-group">-->

                <!--      <a class="dropdown-item" href="javascript:void(0)">-->

                <!--        <i class="fa-fw fa fa-sliders-h"></i>-->

                <!--        Settings-->

                <!--      </a>-->

                <!--      <ul class="dropdown-menu">-->

                <!--        <li data-id="general-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            General and miscellaneous settings-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="catalog-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Catalog settings-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="search-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Search-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="customer-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Customer settings-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="cart-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Shopping cart settings-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="order-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Order settings-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="payment-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Payment-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="media-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Media settings-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="tax-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Tax settings-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="shipping-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Shipping settings-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="reward-points-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Reward points-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="blog-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Blog settings-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="news-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            News settings-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="forum-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Forum settings-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="dataexchange-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Data exchange-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li class="dropdown-divider"></li>-->

                <!--        <li data-id="all-settings">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            All settings (advanced)-->

                <!--          </a>-->

                <!--        </li>-->

                <!--      </ul>-->

                <!--    </li>-->

                <!--    <li data-id="stores">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-globe"></i>-->

                <!--        Stores-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="regional-settings" class="dropdown-group">-->

                <!--      <a class="dropdown-item" href="javascript:void(0)">-->

                <!--        <i class="fa-fw fa fa-language"></i>-->

                <!--        Regional Settings-->

                <!--      </a>-->

                <!--      <ul class="dropdown-menu">-->

                <!--        <li data-id="countries">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Countries-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="languages">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Languages-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="currencies">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Currencies-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li class="dropdown-divider"></li>-->

                <!--        <li data-id="shipping-header" class="dropdown-header h6">Shipping</li>-->

                <!--        <li data-id="shipping-methods">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Shipping methods-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="shipping-providers">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Shipping rate computation methods-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li class="dropdown-divider"></li>-->

                <!--        <li data-id="tax-header" class="dropdown-header h6">Tax</li>-->

                <!--        <li data-id="tax-providers">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Tax providers-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="tax-categories">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Tax categories-->

                <!--          </a>-->

                <!--        </li>-->

                <!--      </ul>-->

                <!--    </li>-->

                <!--    <li data-id="payment-methods">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw far fa-credit-card"></i>-->

                <!--        Payment methods-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="list-settings" class="dropdown-group">-->

                <!--      <a class="dropdown-item" href="javascript:void(0)">-->

                <!--        <i class="fa-fw fa fa-bars"></i>-->

                <!--        Lists-->

                <!--      </a>-->

                <!--      <ul class="dropdown-menu">-->

                <!--        <li data-id="delivery-times">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Delivery Times-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="quantity-units">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Quantity units-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="weights">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Weights-->

                <!--          </a>-->

                <!--        </li>-->

                <!--        <li data-id="dimensions">-->

                <!--          <a class="dropdown-item" href="#">-->

                <!--            Dimensions-->

                <!--          </a>-->

                <!--        </li>-->

                <!--      </ul>-->

                <!--    </li>-->

                <!--    <li data-id="email-accounts">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-envelope"></i>-->

                <!--        Email Accounts-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="activity-types">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-eye"></i>-->

                <!--        Activity Types-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="acl">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-lock"></i>-->

                <!--        Access control list-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li class="dropdown-divider"></li>-->

                <!--    <li data-id="import">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-download "></i>-->

                <!--        Import-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="export">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-upload "></i>-->

                <!--        Export-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li class="dropdown-divider"></li>-->

                <!--    <li data-id="themes">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-fill-drip"></i>-->

                <!--        Themes-->

                <!--      </a>-->

                <!--    </li>-->

                <!--  </ul>-->

                <!--</li>-->

                <!--<li data-id="nav-system" class="nav-item dropdown">-->

                <!--  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">-->

                <!--    <i class="text-white fa fa-database navbar-icon"></i>-->

                <!--    <span class="navbar-label">System</span>-->

                <!--  </a>-->

                <!--  <ul class="dropdown-menu">-->

                <!--    <li data-id="system-log">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-fire"></i>-->

                <!--        Log-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="queued-emails">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-mail-bulk"></i>-->

                <!--        Message Queue-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="maintenance">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-database"></i>-->

                <!--        Maintenance-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="scheduled tasks">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw far fa-clock"></i>-->

                <!--        Scheduled Tasks-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="seo-names">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-search"></i>-->

                <!--        SEO Names-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="warnings">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-exclamation-triangle"></i>-->

                <!--        Warnings-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li data-id="system-info">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-info-circle"></i>-->

                <!--        System information-->

                <!--      </a>-->

                <!--    </li>-->

                <!--  </ul>-->

                <!--</li>-->

                <!--<li  class="nav-item dropdown">-->

                <!--  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">-->

                <!--    <i class="text-white fa fa-puzzle-piece navbar-icon"></i>-->

                <!--    <span class="navbar-label">Plugins</span>-->

                <!--  </a>-->

                <!--  <ul class="dropdown-menu">-->

                <!--    <li>-->

                <!--      <a class="dropdown-item" href="">-->

                <!--        <i class="fa-fw far fa-paper-plane"></i>-->

                <!--        Clickatell SMS Provider-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li>-->

                <!--      <a class="dropdown-item" href="">-->

                <!--        <i class="fa-fw far fa-terminal"></i>-->

                <!--        Developer Tools-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li>-->

                <!--      <a class="dropdown-item" href="">-->

                <!--        <i class="fa-fw fab fa-google"></i>-->

                <!--        Google Merchant Center feed-->

                <!--      </a>-->

                <!--    </li>-->

                <!--    <li class="dropdown-divider"></li>-->

                <!--    <li data-id="plugins-manage">-->

                <!--      <a class="dropdown-item" href="#">-->

                <!--        <i class="fa-fw fa fa-puzzle-piece"></i>-->

                <!--        Manage plugins-->

                <!--      </a>-->

                <!--    </li>-->

                <!--  </ul>-->

                <!--</li>-->

                <li class="nav-item dropdown">

                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">

                      <i class="text-white fa fa-industry navbar-icon"></i>

                      <span class="navbar-label">Vendors</span>

                  </a>

                  <ul class="dropdown-menu">

                      <li data-id="8475916641">

                          <a class="dropdown-item" href="{{ url('/admin/vendor')}}">

                              <i class="fa-fw far fa-paper-plane"></i> List Vendor

                          </a>

                      </li>

                      <li data-id="7159073285">

                          <a class="dropdown-item" href="{{ url('/admin/vendor_report')}}">

                              <i class="fa-fw far fa-terminal"></i>Vendor Reports

                          </a>

                      </li>

                      

                    <!--<li data-id="8475916641">-->

                    <!--      <a class="dropdown-item" href="{{ url('admin/locale/en') }}">-->

                    <!--          <i class="fa-fw far fa-paper-plane"></i> english-->

                    <!--      </a>-->

                    <!--  </li>-->

                    <!--  <li data-id="8475916641">-->

                    <!--      <a class="dropdown-item" href="{{ url('admin/locale/ar') }}">-->

                    <!--          <i class="fa-fw far fa-paper-plane"></i> Aurbic-->

                    <!--      </a>-->

                    <!--  </li>-->

                      

                    <!--  <li data-id="8475916641">-->

                    <!--      <a class="dropdown-item" href="">-->

                    <!--          <i class="fa-fw far fa-paper-plane"></i> Clickatell SMS Provider-->

                    <!--      </a>-->

                    <!--  </li>-->

                    <!--  <li data-id="7159073285">-->

                    <!--      <a class="dropdown-item" href="">-->

                    <!--          <i class="fa-fw far fa-terminal"></i> Developer Tools-->

                    <!--      </a>-->

                    <!--  </li>-->

                    <!--  <li data-id="7892338319">-->

                    <!--      <a class="dropdown-item" href="">-->

                    <!--          <i class="fa-fw fab fa-google"></i> Google Merchant Center feed-->

                    <!--      </a>-->

                    <!--  </li>-->

                    <!--  <li class="dropdown-divider"></li>-->

                    <!--  <li data-id="plugins-manage">-->

                    <!--      <a class="dropdown-item" href="#">-->

                    <!--          <i class="fa-fw fa fa-puzzle-piece"></i> Manage plugins-->

                    <!--      </a>-->

                    <!--  </li>-->

                  </ul>

              </li>

              </ul>



              <ul class="navbar-nav pro_mnu">

                  

                <!--   notification    -->

                <li class="nav-item dropdown" title="Account" >

                    <span id="group"> 

                     <a href="{{ url('/admin/notification')}}" class="btn btn-info">  

                      <i class="fa fa-envelope"></i> 

                     </a> 

                     <span class="badge badge-light">{!! Helper::nottification() !!}</span> 

                    </span>

                </li>





                <!--  end here  -->  



                {{-- <li class="nav-item dropdown" title="Actions">

                  <a class="nav-link dropdown-toggle navbar-tool" href="javascript:void(0)"  

                    data-toggle="dropdown">

                    <i class="text-white fa fa-cog navbar-icon"></i>

                  </a>

                  <div class="dropdown-menu dropdown-menu-left">

                    <a class="dropdown-item" href="" title="Public store - A Classic Store">

                      <i class="fa fa-fw fa-globe"></i>

                      A Classic Store

                    </a>

                    <a class="dropdown-item" href="#">

                      <i class="far fa-fw fa-eye"></i>

                      Preview Mode

                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">

                      <i class="far fa-fw fa-trash-alt"></i>

                      Clear cache

                    </a>

                    <a class="dropdown-item" href="">

                      <i class="fa fa-fw"></i>

                      Clear database cache

                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" id="restart-application" href="#" data-url="#">

                      <i class="fa fa-fw fa-power-off"></i>

                      Restart application

                    </a>

                  </div>

                </li> --}}







                {{-- <li id="navtool-help"  title="Help" class="nav-item dropdown d-md-block">

                  <a class="nav-link dropdown-toggle navbar-tool" href="javascript:void(0)" 

                    data-toggle="dropdown">

                    <i class="text-white fa fa-question-circle navbar-icon"></i>

                  </a>

                  <div class="dropdown-menu dropdown-menu-left">

                      

                    <a class="dropdown-item" href="" data-lang="en"

                      target="help">

                      <i class="fa fa-fw fa-book"></i>

                      Documentation

                    </a>

                    <a class="dropdown-item" href="#"  data-lang="en" target="help">

                      <i class="fa fa-fw fa-comment"></i>

                      Community

                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">

                      <i class="fa fa-fw fa-info-circle"></i>

                      About SmartStore.NET

                    </a>

                  </div>

                </li> --}}



                <li class="nav-item dropdown" title="Account" >

                  <a id="current-user" class="nav-link dropdown-toggle navbar-tool" data-toggle="dropdown"

                  href="#">



                    <i class="text-white fa fa-user navbar-icon"></i>

                  </a>

                  <div class="dropdown-menu dropdown-menu-left">

                    <a class="dropdown-item" href="{{url('/admin/profile')}}">

                      <i class="fa fa-fw fa-user"></i>

                      Profile

                    </a>

                    <a class="dropdown-item" href="{{url('/admin/update-password')}}">

                      <i class="fa fa-fw fa-user"></i>

                      UpdatePassword

                    </a>

                    <a class="dropdown-item" href="{{route('admin.logout')}}">

                      <i class="fal fa-fw fa-sign-out-alt"></i>

                      Logout?

                    </a>

                  </div>

                </li>



              </ul>



            </div>









          </div>

        

      </nav>

      <!-- Mask -->

      <span class="mask bg-gradient-default"></span>

      <!-- Header container -->



    </div>