<!-- Footer -->
<style>
    .social-media :hover {
        color: {{$web_config['secondary_color']}} !important;
    }
    .widget-list-link{
        color: white !important;
    }
    .logo_Up{
      margin-top: -110px;   
    }

    .widget-list-link:hover{
        color: #999898 !important;
    }
    .subscribe-border{
        border-radius: 5px;
    }
    .subscribe-button{
        background : {{$web_config['primary_color']}};;
        position: absolute;
        top: 0;
        color: white;
        padding: 11px;
        padding-left: 15px;
        padding-right: 15px;
        text-transform: capitalize;
        border: none;
    }
    .start_address{
        display: flex;
        justify-content: space-between;
    }
    .start_address_under_line{
        {{Session::get('direction') === "rtl" ? 'width: 344px;' : 'width: 331px;'}}
    }
    .address_under_line{
        width: 299px;
    }
    .end-footer{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .mobile_footer_menu{
        font-size: 10px;
    }
    @media only screen and (max-width: 500px) {
        .start_address {
            display: block;
        }
        .footer-web-logo {
            justify-content: center !important;
            padding-bottom: 25px;
        }
        .footer-padding-bottom {
            padding-bottom: 15px;
        }
        .mobile-view-center-align {
            justify-content: center !important;
            padding-bottom: 15px;
        }
        .last-footer-content-align {
            display: flex !important;
            justify-content: center !important;
            padding-bottom: 10px;
        }
    }
    @media only screen and (max-width: 800px) {
        .end-footer{
            
            display: block;
            
            align-items: center;
        }
    }
    @media only screen and (max-width: 1200px) {
        .start_address_under_line {
            display: none;
        }
        .address_under_line{
            display: none;
        }
    }
    @media (min-width: 300px) and (max-width: 900px) {
    .about_company p{
        font-size:12px;
      }
      .logo_Up
       {
          margin-top: 0px!important;   
       }
    }
</style>
<!-- <div class="d-flex justify-content-center about_company text-center {{Session::get('direction') === "rtl" ? 'text-md-right' : 'text-md-left'}} mt-2"
        style="background: {{$web_config['primary_color']}}10;padding-top:5px; font-size:13px">
        {{-- <div class="col-md-1">

        </div> --}}
    <div class="col-md-3 d-flex justify-content-center">
        <div >
            <a href="{{route('about-us')}}">
                <div style="text-align: center;">
                    <img style="height: 60px;width:60px;" src="{{static_assets('front-end/png/image1.png')}}"
                            alt="">
                </div>
                <div style="text-align: center;">
                    
                        <p>
                            {{ \App\CPU\translate('About Company')}}
                        </p>
                    
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center">
        <div >
            <a href="{{route('contacts')}}">
                <div style="text-align: center;">
                    <img style="height: 60px;width:60px;" src="{{static_assets('front-end/png/image2.png')}}"
                             alt="">
                </div>
                <div style="text-align: center;">
                    <p>
                    {{ \App\CPU\translate('Contact Us')}}
                </p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center">
        <div >
            <a href="{{route('helpTopic')}}">
                <div style="text-align: center;">
                    <img style="height: 60px;width:60px;" src="{{static_assets('front-end/png/image3.png')}}"
                             alt="">
                </div>
                <div style="text-align: center;">
                    <p>
                    {{ \App\CPU\translate('FAQ')}}
                </p>
                </div>
            </a>
        </div>
    </div>
    {{-- <div class="col-md-1">

    </div> --}}
</div> -->

<!--mobile view app-->

<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
    <div class="row align-items-center gutters-5">
        <div class="col">
            <a href="{{route('home')}}" class="text-reset d-block text-center pb-2 pt-3">
                <i class="fa fa-home fs-20 opacity-60 text-primary"></i>
                <span class="d-block fs-10 fw-600 opacity-60 mobile_footer_menu">{{ \App\CPU\translate('Home')}}</span>
            </a>

        </div>
        <div class="col">
            <a href="{{ route('categories') }}" class="text-reset d-block text-center pb-2 pt-3">
               <i class="fa fa-list-ul fs-20 opacity-60 "></i>
                <span class="d-block fs-10 fw-600 opacity-60 mobile_footer_menu">Categories</span>
            </a>
        </div>

        <div class="col">
            <a href="{{route('account-oder')}}" class="text-reset d-block text-center pb-2 pt-3">
                <i class="fa fa-shopping-bag"></i>       
             <span class="d-block fs-10 fw-600 opacity-60 mobile_footer_menu">My Order</span>
            </a>
        </div>

        <div class="col">
            <a href="{{route('shop-cart')}}" class="text-reset d-block text-center pb-2 pt-3">
               <i class="fa fa-shopping-cart fs-20 opacity-60 "></i>
                <span class="d-block fs-10 fw-600 opacity-60 mobile_footer_menu">Cart</span>
            </a>
        </div>
         <div class="col">
            @if(auth('customer')->check())
                <a href="{{route('user-account')}}" class="text-reset d-block text-center pb-2 pt-3">
                    <i class="fa fa-user-circle opacity-60" aria-hidden="true"></i>
                    <span class="d-block fs-10 fw-600 opacity-60 mobile_footer_menu">Account</span>
                </a>
            @else
                <a href="{{route('customer.auth.login')}}" class="text-reset d-block text-center pb-2 pt-3">
                    <i class="fa fa-user-circle opacity-60" aria-hidden="true"></i>
                    <span class="d-block fs-10 fw-600 opacity-60 mobile_footer_menu">Account</span>
                </a>    
           @endif
        </div>
    </div>
</div>

<footer class="page-footer fo font-small mdb-colorrtl pt-4" style="background:url({{ static_assets('app/public/banner/footer-img.png')  }}); background-repeat: no-repeat; background-size: cover;">
    <!-- Footer Links -->
    <div>
        <div class="container text-center" style="padding-bottom: 13px;">

            <!-- Footer links -->
            <div
                class="row text-center {{Session::get('direction') === "rtl" ? 'text-md-right' : 'text-md-left'}} mt-3 pb-3 ">
                <!-- Grid column -->
                <div class="col-md-2 d-flex justify-content-start align-items-center footer-web-logo" >
                    <a class="d-inline-block logo_Up" href="{{route('home')}}">
                        <img style="height: 60px!important; width: 165px;"
                             src="{{static_assets('app/public/company/')}}/{{ $web_config['footer_logo']->value }}"
                             onerror="this.src='{{static_assets("front-end/img/image-place-holder.png")}}'"
                             alt="{{ $web_config['name']->value }}"/></br>
                             <p class="widget-list-item pt-2" style="font-size:14px;"><span style="font-weight:bold; color:#0063a6">{{ $web_config['name']->value }}</p>
                    </a>
                </div>
                <div class="col-md-10" >
                    <div class="row">
                        
                        <div class="col-md-3 footer-padding-bottom" >
                            <h6 class="text-uppercase mb-4 font-weight-bold footer-heder">{{\App\CPU\translate('special')}}</h6>
                            <ul class="widget-list" style="padding-bottom: 10px">
                                @php($flash_deals=\App\Model\FlashDeal::where(['status'=>1,'deal_type'=>'flash_deal'])->whereDate('start_date','<=',date('Y-m-d'))->whereDate('end_date','>=',date('Y-m-d'))->first())
                                @if(isset($flash_deals))
                                    <li class="widget-list-item">
                                        <a class="widget-list-link"
                                        href="{{route('flash-deals',[$flash_deals['id']])}}">
                                            {{\App\CPU\translate('flash_deal')}}
                                        </a>
                                    </li>
                                @endif
                                @foreach(\App\CPU\CategoryManager::get_category()->take(5) as $category)
                                <li class="widget-list-item"><a class="widget-list-link"
                                                                href="{{route('products',['id'=> $category['id'],'data_from'=>'category','page'=>1])}}">{{$category['name']}}</a>
                                </li>
                                @endforeach
    
                            </ul>
                        </div>
                        <div class="col-md-4 footer-padding-bottom" style="{{Session::get('direction') === "rtl" ? 'padding-right:20px;' : ''}}">
                            <h6 class="text-uppercase mb-4 font-weight-bold footer-heder">{{\App\CPU\translate('account_&_shipping_info')}}</h6>
                            @if(auth('customer')->check())
                                <ul class="widget-list" style="padding-bottom: 10px">
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('user-account')}}">{{\App\CPU\translate('profile_info')}}</a>
                                    </li>
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('wishlists')}}">{{\App\CPU\translate('wish_list')}}</a>
                                    </li>
                                    
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('track-order.index')}}">{{\App\CPU\translate('track_order')}}</a>
                                    </li>
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{ route('account-address') }}">{{\App\CPU\translate('address')}}</a>
                                    </li>
                                    
                                </ul>
                            @else
                                <ul class="widget-list" style="padding-bottom: 10px">
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('customer.auth.login')}}">{{\App\CPU\translate('profile_info')}}</a>
                                    </li>
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('customer.auth.login')}}">{{\App\CPU\translate('wish_list')}}</a>
                                    </li>
                                    
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('track-order.index')}}">{{\App\CPU\translate('track_order')}}</a>
                                    </li>
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('customer.auth.login')}}">{{\App\CPU\translate('address')}}</a>
                                    </li>
                                    
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('return-policy')}}">{{\App\CPU\translate('Return Policy')}}</a>
                                    </li>
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('refund-policy')}}">{{\App\CPU\translate('Refund Policy')}}</a>
                                    </li>
                                    
                                    
                                    
                                </ul>
                            @endif
                        </div>
                        <div class="col-md-5 footer-padding-bottom" >
                                @php($ios = \App\CPU\Helpers::get_business_settings('download_app_apple_stroe'))
                                @php($android = \App\CPU\Helpers::get_business_settings('download_app_google_stroe'))
            
                                @if($ios['status'] || $android['status'])
                                    <div class="d-flex justify-content-center">
                                        <h6 class="text-uppercase font-weight-bold footer-heder align-items-center">
                                            {{\App\CPU\translate('download_our_app')}}
                                        </h6>
                                    </div>
                                @endif
            
            
                                <div class="store-contents d-flex justify-content-center" >
                                    @if($ios['status'])
                                        <div class="{{Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'}} mb-2">
                                            <a class="" href="{{ $ios['link'] }}" role="button"><img
                                                    src="{{static_assets('front-end/png/apple_app.png')}}"
                                                    alt="" style="height: 51px!important;">
                                            </a>
                                        </div>
                                    @endif
            
                                    @if($android['status'])
                                        <div class="{{Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'}} mb-2">
                                            <a href="{{ $android['link'] }}" role="button">
                                                <img src="{{static_assets('front-end/png/google_app.png')}}"
                                                     alt="" style="height: 51px!important;">
                                            </a>
                                        </div>
                                    @endif
                                </div>
                                <div class="text-nowrap mb-2">
                                    <span style="font-weight: 700;font-size: 14.3208px;">{{\App\CPU\translate('NEWS LETTER')}}</span><br>
                                    <span style="font-weight: 400;font-size: 11.066px;">{{\App\CPU\translate('subscribe to our new channel to get latest updates')}}</span>
                                </div>
                                <div class="text-nowrap mb-4" style="position:relative;">
                                    <form action="{{ route('subscription') }}" method="post">
                                        @csrf
                                        <input type="email" name="subscription_email" class="form-control subscribe-border"
                                            placeholder="{{\App\CPU\translate('Your Email Address')}}" required style="padding: 11px;text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                                        <button class="subscribe-button" type="submit"
                                            style="{{Session::get('direction') === "rtl" ? 'float:right;left:0px;border-radius:5px 0px 0px 5px;' : 'float:right;right:0px; border-radius:0px 5px 5px 0px;'}};font-size: .94rem;">
                                            {{\App\CPU\translate('subscribe')}}
                                        </button>
                                    </form>
                                </div>
                                <div>
                                    <span class="mb-4 font-weight-bold footer-heder">{{ \App\CPU\translate('address')}}</span>
                                </div>
                                <div class="row pl-2">
                                    <span style="font-size: 14px;"><i class="fa fa-map-marker m-2"></i> {{ \App\CPU\Helpers::get_business_settings('shop_address')}} </span>
                                </div>
                                <div class="col-11 start_address ">
                                    <div style="color:" class="">
                                        <a class="widget-list-link" href="tel: {{$web_config['phone']->value}}">
                                            <span ><i class="fa fa-phone m-2"></i>{{\App\CPU\Helpers::get_business_settings('company_phone')}} </span>
                                        </a>
                                        
                                    </div>
                                    <div style=""class="">
                                        <a class="widget-list-link" href="email:">
                                            <span ><i class="fa fa-envelope m-2"></i> {{\App\CPU\Helpers::get_business_settings('company_email')}} </span>
                                        </a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Footer links -->
        </div>
    </div>

    
    <!-- Grid row -->
    <div style="background: {{$web_config['primary_color']}}10;">
        <div class="container">
            <div class="row end-footer footer-end last-footer-content-align">
                <div class=" mt-3">
                    <p class="{{Session::get('direction') === "rtl" ? 'text-right ' : 'text-left'}}" style="font-size: 16px;">{{ $web_config['copyright_text']->value }}</p>
                </div>
                <div class="mt-md-3 mt-0 mb-md-3 {{Session::get('direction') === "rtl" ? 'text-right' : 'text-left'}}">
                    @php($social_media = \App\Model\SocialMedia::where('active_status', 1)->get())
                    @if(isset($social_media))
                        @foreach ($social_media as $item)
                            <span class="social-media ">
                                    <a class="social-btn sb-light sb-{{$item->name}} {{Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'}} mb-2"
                                       target="_blank" href="{{$item->link}}" style="color: white!important;">
                                        <i class="{{$item->icon}}" aria-hidden="true"></i>
                                    </a>
                                </span>
                        @endforeach
                    @endif
                </div>
                <div class="d-flex" style="font-size: 14px;">
                    <div class="{{Session::get('direction') === "rtl" ? 'ml-3' : 'mr-3'}}" >
                        <a class="widget-list-link"
                        href="{{route('terms')}}">{{\App\CPU\translate('terms_&_conditions')}}</a>
                    </div>
                    <div>
                        <a class="widget-list-link" href="{{route('privacy-policy')}}">
                            {{\App\CPU\translate('privacy_policy')}}
                        </a>
                    </div>
                    
                </div>
                <div class="d-flex" style="font-size: 14px;">
                    <div>
                        <a class="widget-list-link" href="">
                            {{\App\CPU\translate('Desinged by...')}}
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Grid row -->
    </div>
    <!-- Footer Links -->
</footer>

