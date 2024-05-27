<style>
    .card-body.search-result-box {
        overflow: scroll;
        height: 400px;
        overflow-x: hidden;
    }

    .active .seller {
        font-weight: 700;
    }

    .for-count-value {
        position: absolute;

        right: 0.6875rem;;
        width: 1.25rem;
        height: 1.25rem;
        border-radius: 50%;
        color: {{$web_config['primary_color']}};

        font-size: .75rem;
        font-weight: 500;
        text-align: center;
        line-height: 1.25rem;
    }

    .count-value {
        width: 1.25rem;
        height: 1.25rem;
        border-radius: 50%;
        color: {{$web_config['primary_color']}};

        font-size: .75rem;
        font-weight: 500;
        text-align: center;
        line-height: 1.25rem;
    }
    .dropdown-menu {
        min-width:150px!important;
    }

    @media (min-width: 992px) {
        .navbar-sticky.navbar-stuck .navbar-stuck-menu.show {
            display: block;
            height: 55px !important;
        }
    }

    @media (min-width: 768px) {
        .navbar-stuck-menu {
            background-color: {{$web_config['primary_color']}};
            line-height: 15px;
            padding-bottom: 6px;
        }

    }

    @media (max-width: 767px) {
        .search_button {
            background-color: transparent !important;
        }

        .search_button .input-group-text i {
            color: {{$web_config['primary_color']}}                              !important;
        }

        .navbar-expand-md .dropdown-menu > .dropdown > .dropdown-toggle {
            position: relative;
            padding- {{Session::get('direction') === "rtl" ? 'left' : 'right'}}: 1.95rem;
        }

        .mega-nav1 {
            background: white;
            color: {{$web_config['primary_color']}}                              !important;
            border-radius: 3px;
        }

        .mega-nav1 .nav-link {
            color: {{$web_config['primary_color']}}                              !important;
        }
    }

    @media (max-width: 768px) {
        .tab-logo {
            width: 10rem;
        }
    }

    @media (max-width: 300px) {
        .mobile-head {
            padding: 3px;
        }
    }

    @media (max-width: 471px) {
        .navbar-brand img {

        }

        .mega-nav1 {
            background: white;
            color: {{$web_config['primary_color']}}                              !important;
            border-radius: 3px;
        }

        .mega-nav1 .nav-link {
            color: {{$web_config['primary_color']}} !important;
        }
    }
    #anouncement {
        width: 100%;
        padding: 2px 0;
        text-align: center;
        color:white;
    }
    .topbar{
        padding: 5px;
        background: #1b7fed;
    }
    @media (min-width: 300px) and (max-width: 900px) {
        .category_navbar{
            display: none!important;
        }
        .listing_banner img{
            height:140px!important;
        }
        .svg_certificate1 p{
          font-size: 10px;
           text-align: center;
        }
        .svg_certificate p{
           font-size: 11px;
           text-align: center;
        }
        .sliderbanner {
            height: 150px!important;
        }
        .category_images{
            vertical-align: middle; 
            height:55px;width: 55px!important;
            border-radius: 8%;
            margin: 7px;
        }
        .product_image_size{
             height: 180px!important;
        }
        .In_the_Spotlight img{
                height: 200px!important;
        }
        }
        
        @media (min-width: 300px) and (max-width: 900px) {
        .navbar-toolbar{
            display: none!important;
            }
        }
        .big_drop{
            min-height: 300px;
            width: 1289px;
            left: -194px;
        }
</style>
@php($announcement=\App\CPU\Helpers::get_business_settings('announcement'))
@if (isset($announcement) && $announcement['status']==1)
    <div class="d-flex justify-content-between align-items-center" id="anouncement" style="background-color: {{ $announcement['color'] }};color:{{$announcement['text_color']}}">
        <span></span>
        <span style="text-align:center; font-size: 15px;">{{ $announcement['announcement'] }} </span>
        <span class="ml-3 mr-3" style="font-size: 12px;cursor: pointer;color: darkred"  onclick="myFunction()">X</span>
    </div>
@endif


<header class="box-shadow-sm rtl" style="background-color:red">
    <!-- Topbar-->
    <div class="topbar">
        <div class="container">

            <div>
                <div class="topbar-text dropdown d-md-none {{Session::get('direction') === "rtl" ? 'mr-auto' : 'ml-auto'}}">
                    <a class="topbar-link" href="tel:91{{$web_config['phone']->value}}">
                        <i class="fa fa-phone"></i> +91- {{$web_config['phone']->value}}
                    </a>
                </div>
                <div class="d-none d-md-block {{Session::get('direction') === "rtl" ? 'mr-2' : 'ml-2'}} text-nowrap">
                    <a class="topbar-link d-none d-md-inline-block" href="tel:91{{$web_config['phone']->value}}">
                        <i class="fa fa-phone"></i> +91- {{$web_config['phone']->value}}
                    </a>
                </div>
            </div>
             <div>
                <div class="topbar-text">
                    <a class="topbar-link" href="">
                        <i class="fa fa-lock"></i> Login
                    </a>
                </div>
                <div class="topbar-text">
                    <a class="topbar-link" href="">
                        <i class="fa fa-user"></i> Register
                    </a>
                </div>
                
             </div>

           
        </div>
    </div>


    <div class="navbar-sticky bg-light mobile-head">
        <div class="navbar navbar-expand-md navbar-light">
            <div class="container ">
                <div class="row">
                    <div class="col-4">
                <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">-->
                <!--    <span class="navbar-toggler-icon"></span>-->
                <!--</button>-->
                <a class="navbar-brand d-none d-sm-block {{Session::get('direction') === "rtl" ? 'ml-3' : 'mr-3'}} flex-shrink-0"
                   href="{{route('home')}}"
                   style="min-width: 7rem;">
                    <img style="height: 50px!important; width:auto;"
                         src="{{static_assets('app/public/company').'/'.$web_config['web_logo']->value}}"
                         onerror="this.src='{{static_assets("front-end/img/image-place-holder.png")}}'"
                         alt="{{$web_config['name']->value}}"/>
                </a>
                <a class="navbar-brand d-sm-none {{Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'}}"
                   href="{{route('home')}}">
                    <img style="height: 48px!important;width:auto; padding-left:25px" class="mobile-logo-img"
                         src="{{static_assets('app/public/company').'/'.$web_config['mob_logo']->value}}"
                         onerror="this.src='{{static_assets("front-end/img/image-place-holder.png")}}'"
                         alt="{{$web_config['name']->value}}"/>
                </a>
                </div>
                <div class="col-8">
                <div class="navbar-toggler"
                     style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}}">
                    <form action="{{route('products')}}" type="submit" class="search_form">
                        <input class="form-control appended-form-control search-bar-input" type="text"
                               autocomplete="off"
                               placeholder="{{\App\CPU\translate('search')}}"
                               name="name">
                        <button class="input-group-append-overlay search_button" type="submit"
                                style="border-radius: {{Session::get('direction') === "rtl" ? '7px 0px 0px 7px; right: unset; left: 0' : '0px 7px 7px 0px; left: unset; right: 0'}};top:0">
                                <span class="input-group-text" style="font-size: 20px;">
                                    <i class="czi-search text-white" style="padding-top: 15px;"></i>
                                </span>
                        </button>
                        <input name="data_from" value="search" hidden>
                        <input name="page" value="1" hidden>
                        <diV class="card search-card"
                             style="position: absolute;background: white;z-index: 999;width: 58%;display: none">
                            <div class="card-body search-result-box"
                                 style="overflow:scroll; height:400px;overflow-x: hidden"></div>
                        </diV>
                    </form>
                </div>
                </div>
                </div>


                <!-- category -->
                <div class="navbar category_navbar">
                    <ul class="navbar-nav" style="{{Session::get('direction') === "rtl" ? 'padding-right: 0px' : ''}};">
                        <li class="nav-item dropdown {{request()->is('/')?'active':''}}">
                            <a class="nav-link" href="{{route('home')}}">{{ \App\CPU\translate('Home')}}</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"
                               data-toggle="dropdown">{{ \App\CPU\translate('shop') }}</a>
                            <ul class="dropdown-menu big_drop dropdown-menu-{{Session::get('direction') === "rtl" ? 'right' : 'left'}} scroll-bar"
                                style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                                 <div class="row d-flex">
                                @foreach(\App\CPU\CategoryManager::parents() as $category)
                                       <div class="col-sm-3">
                                            <a class="dropdown-item"
                                               href="{{route('products',['id'=> $category['id'],'data_from'=>'category','page'=>1])}}">
                                                {{$category['name']}}
                                            </a>
                                            <ul type="none">
                                                @foreach($category['childes'] as $subCategory)
                                                <li><a href="javascript:;" onclick="location.href='{{route('products',['id'=> $subCategory['id'],'data_from'=>'category','page'=>1])}}'">{{$subCategory['name']}}</a></li>
                                                @endforeach
                                            </ul>
                                      </div>
                                        <div class="align-baseline">
                                            @if($category['brand_products_count'] > 0 )
                                                <span class="count-value px-2">( {{ $category['brand_products_count'] }} )</span>
                                            @endif
                                        </div>

                                @endforeach
                                </div>
                                <!-- <li style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:center;">
                                    <div>
                                        <a class="dropdown-item" href="{{route('brands')}}"
                                        style="color: {{$web_config['primary_color']}} !important;">
                                            {{ \App\CPU\translate('View_more') }}
                                        </a>
                                    </div>
                                </li> -->
                            </ul>
                        </li>

                        @php($business_mode=\App\CPU\Helpers::get_business_settings('business_mode'))
                        @if ($business_mode == 'multi')
                            <li class="nav-item dropdown {{request()->is('/')?'active':''}}">
                                <a class="nav-link" href="{{route('about-us')}}">{{ \App\CPU\translate('about')}}</a>
                            </li>

                             <li class="nav-item dropdown {{request()->is('/')?'active':''}}">
                                <a class="nav-link" href="{{route('contacts')}}">{{ \App\CPU\translate('contact')}}</a>
                            </li>

                         <!--   @php($seller_registration=\App\Model\BusinessSetting::where(['type'=>'seller_registration'])->first()->value)-->
                         <!--   @if($seller_registration)-->
                         <!--       <li class="nav-item dropdown">-->
                         <!--           <a class="nav-link dropdown-toggle" href="#"-->
                         <!--              data-toggle="dropdown">{{ \App\CPU\translate('volunteer') }}</a>-->
                         <!--           <ul class="dropdown-menu dropdown-menu-{{Session::get('direction') === "rtl" ? 'right' : 'left'}} scroll-bar"-->
                         <!--               style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">-->
                         <!--               <li style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">-->
                         <!--                   <div>-->
                         <!--                       <a class="dropdown-item"-->
                         <!--                          href="{{route('shop.apply')}}">-->
                         <!--                           {{ \App\CPU\translate('Become a')}} {{ \App\CPU\translate('Seller')}}-->
                         <!--                       </a>-->
                         <!--                       <a class="dropdown-item"-->
                         <!--                          href="{{route('seller.auth.login')}}">-->
                         <!--                           {{ \App\CPU\translate('Seller')}}  {{ \App\CPU\translate('login')}}-->
                         <!--                       </a>-->
                         <!--                   </div>-->
                         <!--               </li>-->
                         <!--           </ul>-->
                         <!--       </li>-->
                         <!--    @endif-->
                         @endif
                    </ul>
                </div>

                <!-- Search-->
                <div class="input-group-overlay d-none d-md-block mx-4"
                     style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}}">
                    <form action="{{route('products')}}" type="submit" class="search_form">
                        <input class="form-control appended-form-control search-bar-input" type="text"
                               autocomplete="off"
                               placeholder="{{\App\CPU\translate('search')}}"
                               name="name">
                        <button class="input-group-append-overlay search_button" type="submit"
                                style="border-radius: {{Session::get('direction') === "rtl" ? '7px 0px 0px 7px; right: unset; left: 0' : '0px 7px 7px 0px; left: unset; right: 0'}};top:0">
                                <span class="input-group-text" style="font-size: 20px;">
                                    <i class="czi-search text-white"></i>
                                </span>
                        </button>
                        <input name="data_from" value="search" hidden>
                        <input name="page" value="1" hidden>
                        <diV class="card search-card"
                             style="position: absolute;background: white;z-index: 999;width: 100%;display: none">
                            <div class="card-body search-result-box"
                                 style="overflow:scroll; height:400px;overflow-x: hidden"></div>
                        </diV>
                    </form>
                </div>
                <!-- Toolbar-->
                <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center" style="margin-right: 10px;">
                    <a class="navbar-tool navbar-stuck-toggler" href="#">
                        <span class="navbar-tool-tooltip">{{\App\CPU\translate('Expand menu')}}</span>
                        <div class="navbar-tool-icon-box">
                            <i class="navbar-tool-icon czi-menu"></i>
                        </div>
                    </a>
                    @if(auth('customer')->check())
                        <div class="dropdown">
                            <a class="navbar-tool ml-2 mr-2 " type="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <div class="navbar-tool-icon-box bg-secondary">
                                    <div class="navbar-tool-icon-box bg-secondary">
                                        <img style="width: 40px;height: 40px"
                                             src="{{static_assets('app/public/profile/'.auth('customer')->user()->image)}}"
                                             onerror="this.src='{{static_assets("front-end/img/image-place-holder.png")}}'"
                                             class="img-profile rounded-circle">
                                    </div>
                                </div>
                                <div class="navbar-tool-text">
                                    <small>{{\App\CPU\translate('hello')}}, {{auth('customer')->user()->f_name}}</small>
                                    <!-- {{\App\CPU\translate('dashboard')}} -->
                                </div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item"
                                   href="{{route('account-oder')}}"> {{ \App\CPU\translate('my_order')}} </a>
                                <a class="dropdown-item"
                                   href="{{route('user-account')}}"> {{ \App\CPU\translate('my_profile')}}</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"
                                   href="{{route('customer.auth.logout')}}">{{ \App\CPU\translate('logout')}}</a>
                            </div>
                        </div>
                    @else
                        <div class="dropdown">
                            <a class="navbar-tool {{Session::get('direction') === 'rtl' ? 'mr-3' : 'ml-3'}}"
                               type="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <div class="navbar-tool-icon-box ">
                                    <div class="navbar-tool-icon-box">
                                        <i class="navbar-tool-icon czi-user"></i>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-{{Session::get('direction') === 'rtl' ? 'right' : 'left'}}" aria-labelledby="dropdownMenuButton"
                                 style="text-align: '{{Session::get('direction') === 'rtl' ? 'right' : 'left'}}';">
                                <a class="dropdown-item" href="{{route('customer.auth.login')}}">
                                    <i class="fa fa-sign-in {{Session::get('direction') === 'rtl' ? 'ml-2' : 'mr-2'}}"></i> {{\App\CPU\translate('sing_in')}}
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('customer.auth.register')}}">
                                    <i class="fa fa-user-circle {{Session::get('direction') === 'rtl' ? 'ml-2' : 'mr-2'}}"></i>{{\App\CPU\translate('sing_up')}}
                                </a>
                            </div>
                        </div>
                    @endif
                    <div id="cart_items">
                        @include('layouts.front-end.partials.cart')
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-expand-md navbar-stuck-menu">
            <div class="container" style="padding-left: 10px;padding-right: 10px;">
                <div class="collapse navbar-collapse" id="navbarCollapse"
                    style="text-align: '{{Session::get('direction') === 'rtl' ? 'right' : 'left'}}'; ">
                    <div class="input-group-overlay d-md-none my-3">
                        <form action="{{route('products')}}" type="submit" class="search_form">
                            <input class="form-control appended-form-control search-bar-input-mobile" type="text"
                                   autocomplete="off"
                                   placeholder="{{\App\CPU\translate('search')}}" name="name">
                            <input name="data_from" value="search" hidden>
                            <input name="page" value="1" hidden>
                            <button class="input-group-append-overlay search_button" type="submit"
                                    style="border-radius: {{Session::get('direction') === "rtl" ? '7px 0px 0px 7px; right: unset; left: 0' : '0px 7px 7px 0px; left: unset; right: 0'}};">
                            <span class="input-group-text" style="font-size: 20px;">
                                <i class="czi-search text-white"></i>
                            </span>
                            </button>
                            <diV class="card search-card"
                                 style="position: absolute;background: white;z-index: 999;width: 100%;display: none">
                                <div class="card-body search-result-box" id=""
                                     style="overflow:scroll; height:400px;overflow-x: hidden"></div>
                            </diV>
                        </form>
                    </div>
                    <ul class="navbar-nav mega-nav pr-2 pl-2 {{Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'}} d-none d-xl-block ">
                      
                    </ul>

                    <ul class="navbar-nav mega-nav1 pr-2 pl-2 d-block d-xl-none">
                    </ul>
                    <ul class="navbar-nav" style="{{Session::get('direction') === "rtl" ? 'padding-right: 0px' : ''}}">
                        <li class="nav-item dropdown {{request()->is('/')?'active':''}}">
                            <a class="nav-link" href="{{route('home')}}">{{ \App\CPU\translate('Home')}}</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"
                               data-toggle="dropdown">{{ \App\CPU\translate('shop') }}</a>
                            <ul class="dropdown-menu dropdown-menu-{{Session::get('direction') === "rtl" ? 'right' : 'left'}} scroll-bar"
                                style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                                @foreach(\App\CPU\CategoryManager::get_category() as $category)
                                    <li style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                               href="{{route('products',['id'=> $category['id'],'data_from'=>'category','page'=>1])}}">
                                                {{$category['name']}}
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            @if($category['brand_products_count'] > 0 )
                                                <span class="count-value px-2">( {{ $category['brand_products_count'] }} )</span>
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                                <li style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:center;">
                                    <div>
                                        <a class="dropdown-item" href="{{route('brands')}}"
                                        style="color: {{$web_config['primary_color']}} !important;">
                                            {{ \App\CPU\translate('View_more') }}
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        @php($business_mode=\App\CPU\Helpers::get_business_settings('business_mode'))
                        @if ($business_mode == 'multi')
                            <li class="nav-item dropdown {{request()->is('/')?'active':''}}">
                                <a class="nav-link" href="{{route('about-us')}}">{{ \App\CPU\translate('about')}}</a>
                            </li>
                            <li class="nav-item dropdown {{request()->is('/')?'active':''}}">
                                <a class="nav-link" href="{{route('contacts')}}">{{ \App\CPU\translate('contact us')}}</a>
                            </li>

                            <!--@php($seller_registration=\App\Model\BusinessSetting::where(['type'=>'seller_registration'])->first()->value)-->
                            <!--@if($seller_registration)-->
                            <!--    <li class="nav-item">-->
                            <!--        <div class="dropdown">-->
                            <!--            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"-->
                            <!--                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"-->
                            <!--                    style="color: white;margin-top: 5px; padding-{{Session::get('direction') === "rtl" ? 'right' : 'left'}}: 0">-->
                            <!--                {{ \App\CPU\translate('volunteer')}} -->
                            <!--            </button>-->
                            <!--            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"-->
                            <!--                style="min-width: 165px !important; text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">-->
                            <!--                <a class="dropdown-item" href="{{route('shop.apply')}}">-->
                            <!--                    {{ \App\CPU\translate('Become a')}} {{ \App\CPU\translate('Seller')}}-->
                            <!--                </a>-->
                            <!--                <div class="dropdown-divider"></div>-->
                            <!--                <a class="dropdown-item" href="{{route('seller.auth.login')}}">-->
                            <!--                    {{ \App\CPU\translate('Seller')}}  {{ \App\CPU\translate('login')}}-->
                            <!--                </a>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </li>-->
                            <!--@endif-->
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
function myFunction() {
  $('#anouncement').addClass('d-none').removeClass('d-flex')
}
</script>
