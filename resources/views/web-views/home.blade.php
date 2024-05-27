@extends('layouts.front-end.app')

@section('title',\App\CPU\translate('Welcome To').' '.$web_config['name']->value)

@push('css_or_js')
    <meta property="og:image" content="{{static_assets('app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="og:title" content="Welcome To {{$web_config['name']->value}} Home"/>
    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta property="og:description" content="{!! substr($web_config['about']->value,0,100) !!}">

    <meta property="twitter:card" content="{{static_assets('app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="twitter:title" content="Welcome To {{$web_config['name']->value}} Home"/>
    <meta property="twitter:url" content="{{env('APP_URL')}}">
    <meta property="twitter:description" content="{!! substr($web_config['about']->value,0,100) !!}">

    <link rel="stylesheet" href="{{static_assets('front-end')}}/css/home.css"/>
    <style>
        .media {
            background: white;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
        }

        .cz-countdown-days {
            color: white !important;
            background-color: #ffffff30;
            border: .5px solid{{$web_config['primary_color']}};
            padding: 0px 6px;
            border-radius: 3px;
            margin-right: 0px !important;
            display: flex;
	        flex-direction: column;
            -ms-flex: .4;  /* IE 10 */  
            flex: 1;
            
        }

        .cz-countdown-hours {
            color: white !important;
            background-color: #ffffff30;
            border: .5px solid{{$web_config['primary_color']}};
            padding: 0px 6px;
            border-radius: 3px;
            margin-right: 0px !important;
            display: flex;
	        flex-direction: column;
            -ms-flex: .4;  /* IE 10 */  
            flex: 1;
        }

        .cz-countdown-minutes {
            color: white !important;
            background-color: #ffffff30;
            border: .5px solid{{$web_config['primary_color']}};
            padding: 0px 6px;
            border-radius: 3px;
            margin-right: 0px !important;
            display: flex;
	        flex-direction: column;
            -ms-flex: .4;  /* IE 10 */  
            flex: 1;
        }

        .cz-countdown-seconds {
            color: white !important;
            background-color: #ffffff30;
            border: .5px solid{{$web_config['primary_color']}};
            padding: 0px 6px;
            border-radius: 3px;
            display: flex;
	        flex-direction: column;
            -ms-flex: .4;  /* IE 10 */  
            flex: 1;
        }

        .flash_deal_product_details .flash-product-price {
            font-weight: 700;
            font-size: 18px;
            color: {{$web_config['primary_color']}};
        }

        .featured_deal_left {
            height: 130px;
            background: {{$web_config['primary_color']}} 0% 0% no-repeat padding-box;
            padding: 10px 13px;
            text-align: center;
        }

        .category_div:hover {
            color: {{$web_config['secondary_color']}};
        }

        .deal_of_the_day {
            /* filter: grayscale(0.5); */
            /* opacity: .8; */
            background: {{$web_config['secondary_color']}};
            border-radius: 3px;
        }

        .deal-title {
            font-size: 12px;

        }

        .for-flash-deal-img img {
            max-width: none;
        }
        .best-selleing-image {
            background:{{$web_config['primary_color']}}10;
            width:30%;
            display:flex;
            align-items:center;
            border-radius: 5px;
        }
        .best-selling-details {
            padding:10px;
            width:50%;
        }
        .top-rated-image{
            background:{{$web_config['primary_color']}}10;
            width:30%;
            display:flex;
            align-items:center;
            border-radius: 5px;
        }
        .top-rated-details {
            padding:10px;width:70%;
        }
        
        .delivery-cycle img{
           padding: 10px!important;
            height: 250px!important;
            width: 256px!important;
            border-radius: 50%!important;
            border: 10px solid #9D7BC5!important;
        }
        .delivery-cycle {
            text-align: center!important;
        }
        .banner-midd-image{
            background-size:cover;
            width:100%;
        }

        @media (max-width: 300px) {
            .cz-countdown {
                display: flex !important;

            }

            .cz-countdown .cz-countdown-seconds {

                margin-top: -5px !important;
            }

            .for-feature-title {
                font-size: 20px !important;
            }
        }

        @media (max-width: 600px) {
            .flash_deal_title {
                /*font-weight: 600;*/
                /*font-size: 18px;*/
                /*text-transform: uppercase;*/

                font-weight: 700;
                font-size: 25px;
                text-transform: uppercase;
            }

            .cz-countdown .cz-countdown-value {
                /* font-family: "Roboto", sans-serif; */
                font-size: 11px !important;
                font-weight: 700 !important;
            
            }

            .featured_deal {
                opacity: 1 !important;
            }

            .cz-countdown {
                display: inline-block;
                flex-wrap: wrap;
                font-weight: normal;
                margin-top: 4px;
                font-size: smaller;
            }

            .view-btn-div-f {

                margin-top: 6px;
                float: right;
            }

            .view-btn-div {
                float: right;
            }

            .viw-btn-a {
                font-size: 10px;
                font-weight: 600;
            }


            .for-mobile {
                display: none;
            }

            .featured_for_mobile {
                max-width: 100%;
                margin-top: 20px;
                margin-bottom: 20px;
            }
            .best-selleing-image {
                width: 50%;
                border-radius: 5px;
            }
            .best-selling-details {
                width:50%;
            }
            .top-rated-image {
                width: 50%;
            }
            .top-rated-details {
            width:50%;
        }
        }

        
        @media (max-width: 300px) {
            .featured_for_mobile {
                max-width: 100%;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            .shipping-text{
                font-size:12px;
            }

            .featured_deal {
                opacity: 1 !important;
            }
        }

        @media (max-width: 375px) {
            .featured_for_mobile {
                max-width: 100%;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            .sliderbanner {
                    height: 150px!important;
                }

            .featured_deal {
                opacity: 1 !important;
            }
            .category_text{
                font-size: 10px!important;
            }
            
        }

        @media (min-width: 768px) {
            .displayTab {
                display: block !important;
            }
            
        }

        @media (max-width: 800px) {

            .latest-product-margin {
                margin-left: 0px !important;
                }
            .for-tab-view-img {
                width: 40%;
            }

            .for-tab-view-img {
                width: 105px;
            }

            .widget-title {
                font-size: 19px !important;
            }
            .flash-deal-view-all-web {
                display: none !important;
            }
            .categories-view-all {
                {{session('direction') === "rtl" ? 'margin-left: 10px;' : 'margin-right: 6px;'}}
            }
            .categories-title {
                {{Session::get('direction') === "rtl" ? 'margin-right: 0px;' : 'margin-left: 6px;'}}
            }
            .seller-list-title{
                {{Session::get('direction') === "rtl" ? 'margin-right: 0px;' : 'margin-left: 10px;'}}
            }
            .seller-list-view-all { 
                {{Session::get('direction') === "rtl" ? 'margin-left: 20px;' : 'margin-right: 10px;'}}
            }
            .seller-card {
                padding-left: 0px !important;
            }
            .category-product-view-title {
                {{Session::get('direction') === "rtl" ? 'margin-right: 16px;' : 'margin-left: -8px;'}}
            }
            .category-product-view-all {
                {{Session::get('direction') === "rtl" ? 'margin-left: -7px;' : 'margin-right: 5px;'}}
            }
            .recomanded-product-card {
                background: #F8FBFD;margin:20px;height: 535px; border-radius: 5px;
            }
            .recomanded-buy-button {
                text-align: center;
                margin-top: 30px;
            }
        }
        @media(min-width:801px){
            .flash-deal-view-all-mobile{
                display: none !important;
            }
            .categories-view-all {
                {{session('direction') === "rtl" ? 'margin-left: 30px;' : 'margin-right: 27px;'}}
            }
            .categories-title {
                {{Session::get('direction') === "rtl" ? 'margin-right: 25px;' : 'margin-left: 25px;'}}
            }
            .seller-list-title{
                {{Session::get('direction') === "rtl" ? 'margin-right: 6px;' : 'margin-left: 10px;'}}
            }
            .seller-list-view-all { 
                {{Session::get('direction') === "rtl" ? 'margin-left: 12px;' : 'margin-right: 10px;'}}
            }
            .seller-card {
                {{Session::get('direction') === "rtl" ? 'padding-left:0px !important;' : 'padding-right:0px !important;'}}
            }
            .category-product-view-title {
                {{Session::get('direction') === "rtl" ? 'margin-right: 10px;' : 'margin-left: -12px;'}}
            }
            .category-product-view-all {
                {{Session::get('direction') === "rtl" ? 'margin-left: -20px;' : 'margin-right: 0px;'}}
            }
            .recomanded-product-card {
                background: #F8FBFD;margin:20px;height: 475px; border-radius: 5px;
            }
            .recomanded-buy-button {
                text-align: center;
                margin-top: 63px;
            }
            
        }

        .featured_deal_carosel .carousel-inner {
            width: 100% !important;
        }

        .badge-style2 {
            color: black !important;
            background: transparent !important;
            font-size: 11px;
        }
        .countdown-card{
            background:{{$web_config['primary_color']}}10;
            height: 150px!important;
            border-radius:5px;
            
        }
        .flash-deal-text{
            color: {{$web_config['primary_color']}};
            text-transform: uppercase;
            text-align:center;
            font-weight:700;
            font-size:20px;
            border-radius:5px;
            margin-top:25px;
        }
        .countdown-background{
            background: {{$web_config['primary_color']}};
            padding: 5px 5px;
            border-radius:5px;
            margin-top:15px;
        }
        .carousel-wrap{
            position: relative;
        }
        .owl-nav{
            top: 40%;
            position: absolute;
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
     }  
     .owl-prev{
         float: left;
         
     } 
     .owl-next{
         float: right;
     }
     .czi-arrow-left{
        color: {{$web_config['primary_color']}};
        background: {{$web_config['primary_color']}}10;
        padding: 5px;
        border-radius: 50%;
        margin-left: -12px;
        font-weight: bold;
        font-size: 12px;
     }
     .czi-arrow-right{
        color: {{$web_config['primary_color']}};
        background: {{$web_config['primary_color']}}10;
        padding: 5px;
        border-radius: 50%;
        margin-right: -15px;
        font-weight: bold;
        font-size: 12px;
     }
    .owl-carousel .nav-btn .czi-arrow-left{
      height: 47px;
      position: absolute;
      width: 26px;
      cursor: pointer;
      top: 100px !important;
  }
  .flash-deals-background-image{
    background: {{$web_config['primary_color']}}10;
    border-radius:5px;
    width:125px;
    height:125px;
  }
  .view-all-text{
    color:{{$web_config['secondary_color']}} !important;
    font-size:14px;
  }
  .feature-product-title {
    text-align: center;
    font-size: 22px;
    margin-top: 15px;
    font-style: normal;
    font-weight: 700;
  }
  .feature-product .czi-arrow-left{
        color: {{$web_config['primary_color']}};
        background: {{$web_config['primary_color']}}10;
        padding: 5px;
        border-radius: 50%;
        margin-left: -15px;
        font-weight: bold;
        font-size: 12px;
     }
     
     .feature-product .owl-nav{
        top: 40%;
        position: absolute;
        display: flex;
        justify-content: space-between;
        /* width: 100%; */
    }
     .feature-product .czi-arrow-right{
        color: {{$web_config['primary_color']}};
        background: {{$web_config['primary_color']}}10;
        padding: 5px;
        border-radius: 50%;
        font-weight: bold;
        font-size: 12px;
     }
     .shipping-policy-web{
        background: #ffffff;width:100%; border-radius:5px;
     }
     .shipping-method-system{
        height: 130px;width: 70%;margin-top: 15px;
     }
     .recommended_product{
         height:250px;
     }

     .flex-between {
         display: flex;
         justify-content: space-between;
     }
      .category_images {
          transition: transform .2s;
          margin: 0 auto;
          border-radius: 5px;
        }

        .category_images:hover {
            border-radius:50%;
            border :2px solid #0063a6;
            padding:5px;
             /*animation: shake 0.9s;*/
              /*transform: scale(1.1); */
            }
            @keyframes shake {
          0% { transform: translate(1px, 1px) rotate(0deg); }
          10% { transform: translate(-1px, -2px) rotate(-1deg); }
          20% { transform: translate(-3px, 0px) rotate(1deg); }
          30% { transform: translate(3px, 2px) rotate(0deg); }
          40% { transform: translate(1px, -1px) rotate(1deg); }
          50% { transform: translate(-1px, 2px) rotate(-1deg); }
          60% { transform: translate(-3px, 1px) rotate(0deg); }
          70% { transform: translate(3px, 1px) rotate(-1deg); }
          80% { transform: translate(-1px, -1px) rotate(1deg); }
          90% { transform: translate(1px, 2px) rotate(0deg); }
          100% { transform: translate(1px, -2px) rotate(-1deg); }
        }
        
        @media (min-width: 300px) and (max-width: 900px) {
            .category_navbar{
                display: none!important;
            }
            .listing_banner img{
                height:200px!important;
            }
            .svg_certificate1 p{
              font-size: 10px!important;
               text-align: center!important;
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
                height:55px!important;
                width: 55px!important;
                border-radius: 8%!important;
                margin: 7px;
            }
            .product_image_size{
                 height: 180px!important;
            }
            .In_the_Spotlight img{
                    height: 200px!important;
            }
            .delivery-cycle img {
                padding: 2px !important;
                height: 85px !important;
                width: 80px !important;
                border-radius: 50% !important;
                border: 1px solid #9D7BC5 !important;
            }
            }
    </style>

    <link rel="stylesheet" href="{{static_assets('front-end')}}/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="{{static_assets('front-end')}}/css/owl.theme.default.min.css"/>
@endpush

@section('content')
<section class="bg-transparent mb-3">
    <div class="container-fluid" style="padding:0 0 10px 0">
                @include('web-views.partials._home-top-slider')
           
    </div>
</section>
 <!--<a href="{{route('printify') }}">printify</a> -->

<div class="col-md-12 pl-0 pr-0">
    <div class="card">
        <div class="card-body" style="padding:0">
            <div class="row d-flex justify-content-center mt-3">
                @foreach($categories as $key=>$category)
                    @if ($key<11)
                    
                        <div class="text-center">
                            <a href="{{route('products',['id'=> $category['id'],'data_from'=>'category','page'=>1])}}">
                                <img
                                    onerror="this.src='{{static_assets("front-end/img/image-place-holder.png")}}'"
                                    src="{{static_assets('app/public/category/'.$category->icon)}}"
                                    alt="{{$category->name}}" class="category_images">
                                <p class="text-center category_text"
                                style="margin-top: 5px">{{Str::limit($category->name, 12)}}</p>
                            </a>
                        </div>
                    @endif 
                @endforeach    
            </div>
              <!--</marquee>-->
        </div>    
    </div>    
</div>

    {{--flash deal--}}
    @php($flash_deals=\App\Model\FlashDeal::with(['products'=>function($query){
        $query->with('product')->whereHas('product',function($q){
            $q->where('status',1);
        });
}])->where(['status'=>1])->where(['deal_type'=>'flash_deal'])->whereDate('start_date','<=',date('Y-m-d'))->whereDate('end_date','>=',date('Y-m-d'))->first())

@if (isset($flash_deals))
<div class="container-fluid p-3" style="background: #FBDD6D;">       
    <div class="container">
        <div class="flash-deal-view-all-web row d-flex justify-content-{{Session::get('direction') === "rtl" ? 'start' : 'end'}}" style="{{Session::get('direction') === "rtl" ? 'margin-left: 2px;' : 'margin-right:2px;'}}">
            <a class="text-capitalize view-all-text" href="{{route('flash-deals',[isset($flash_deals)?$flash_deals['id']:0])}}">
                {{ \App\CPU\translate('view_all')}}
                <i class="czi-arrow-{{Session::get('direction') === "rtl" ? 'left-circle mr-1 ml-n1 mt-1 float-left' : 'right-circle ml-1 mr-n1'}}"></i>
            </a>
        </div>
        <div class="row d-flex {{Session::get('direction') === "rtl" ? 'flex-row-reverse' : 'flex-row'}}">
            <div class="col-md-3 mt-2 countdown-card" >
                <div class="m-2">
                    <div class="flash-deal-text">
                        <span>{{ \App\CPU\translate('flash deal')}}</span>
                    </div>
                    <div style=" text-align: center;color: #ffffff !important;">
                        <div class="countdown-background">
                            <span class="cz-countdown d-flex justify-content-center align-items-center"
                                data-countdown="{{isset($flash_deals)?date('m/d/Y',strtotime($flash_deals['end_date'])):''}} 11:59:00 PM">
                                <span class="cz-countdown-days">
                                    <span class="cz-countdown-value"></span>
                                    <span>{{ \App\CPU\translate('day')}}</span>
                                </span>
                                <span class="cz-countdown-value p-1">:</span>
                                <span class="cz-countdown-hours">
                                    <span class="cz-countdown-value"></span>
                                    <span>{{ \App\CPU\translate('hrs')}}</span>
                                </span>
                                <span class="cz-countdown-value p-1">:</span>
                                <span class="cz-countdown-minutes">
                                    <span class="cz-countdown-value"></span>
                                    <span>{{ \App\CPU\translate('min')}}</span>
                                </span>
                                <span class="cz-countdown-value p-1">:</span>
                                <span class="cz-countdown-seconds">
                                    <span class="cz-countdown-value"></span>
                                    <span>{{ \App\CPU\translate('sec')}}</span>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flash-deal-view-all-mobile col-md-12" style="{{Session::get('direction') === "rtl" ? 'margin-left: 2px;' : 'margin-right:2px;'}}">
                <a class="{{Session::get('direction') === "rtl" ? 'float-left' : 'float-right'}} mt-2 text-capitalize view-all-text" href="{{route('flash-deals',[isset($flash_deals)?$flash_deals['id']:0])}}">
                    {{ \App\CPU\translate('view_all')}}
                    <i class="czi-arrow-{{Session::get('direction') === "rtl" ? 'left-circle mr-1 ml-n1 mt-1 float-left' : 'right-circle ml-1 mr-n1'}}"></i>
                </a>
            </div>
            <div class="col-md-9 {{Session::get('direction') === "rtl" ? 'pr-md-4' : 'pl-md-4'}}">
                <div class="carousel-wrap">
                    <div class="owl-carousel owl-theme mt-2" id="flash-deal-slider">
                        @foreach($flash_deals->products as $key=>$deal)
                            @if( $deal->product)
                                @include('web-views.partials._product-card-1',['product'=>$deal->product])
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif


<!--<div class="container-fluid pb-3" style="background: #FBDD6D;">-->
<!--    <div class="rtl mt-2">-->
<!--        <div class="row d-flex justify-content-center">-->
<!--            <div style="margin-top:24px;font-weight: 700;font-size: 26px;">-->
<!--                <p style="float: right">{{ \App\CPU\translate('NEW ARRIVALS')}}</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="container rtl mb-3" style="padding-left: 5px !important; padding-right:11px !important;">-->
<!--        <div class="col-md-12">-->
<!--            <div class="carousel-wrap">-->
<!--                <div class="owl-carousel owl-theme mt-2" id="new-arrivals-product">-->
<!--                    @foreach($latest_products as $key=>$product)-->
                        
<!--                            @include('web-views.partials._product-card-1',['product'=>$product])-->
                        
<!--                    @endforeach-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

    
    {{--deal of the day--}}
    <div class="container-fluid pb-3" style="background: #FBDD6D;">
    <div class="container rtl">
        <div class="row">
            {{-- Deal of the day/Recommended Product --}}
            <div class="col-xl-3 col-md-4 pb-4 mt-3 pl-0 pr-0">
                <div class="deal_of_the_day" style="background: {{$web_config['primary_color']}};height: 784px;">
                    @if(isset($deal_of_the_day))
                        <div class="d-flex justify-content-center align-items-center" style="width: 70%;margin:auto;">
                            <h1 class="align-items-center" style="color: white"> {{ \App\CPU\translate('deal_of_the_day') }}</h1>
                        </div>
                        <div class="recomanded-product-card">
                            
                            <div class="d-flex justify-content-center align-items-center" style="margin:20px 20px -20px 20px;padding-top: 20px;">
                                <img style="border-radius:5px 5px 0px opx;"
                                    src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$deal_of_the_day->product['thumbnail']}}"
                                    onerror="this.src='{{static_assets("front-end/img/image-place-holder.png")}}'"
                                    alt="">
                            </div>
                            <div style="background:#ffffff;margin:20px;padding-top: 10px;height: 200px;border-radius: 0px 0px 5px 5px;">
                                <div style="text-align: left; padding: 20px;">
                                    
                                    @php($overallRating = \App\CPU\ProductManager::get_overall_rating($deal_of_the_day->product['reviews']))
                                    <div class="rating-show" style="height:125px; ">
                                        <h5 style="font-weight: 600; color: {{$web_config['primary_color']}}">
                                            {{\Illuminate\Support\Str::limit($deal_of_the_day->product['name'],30)}}
                                        </h5>
                                        <span class="d-inline-block font-size-sm text-body">
                                            @for($inc=0;$inc<5;$inc++)
                                                @if($inc<$overallRating[0])
                                                    <i class="sr-star czi-star-filled active"></i>
                                                @else
                                                    <i class="sr-star czi-star" style="color:#fea569 !important"></i>
                                                @endif
                                            @endfor
                                            <label class="badge-style">( {{$deal_of_the_day->product->reviews_count}} )</label>
                                        </span>
                                    </div>
                                    <div class="float-right">

                                        @if($deal_of_the_day->product->discount > 0)
                                            <strike style="font-size: 12px!important;color: #E96A6A!important;">
                                                {{\App\CPU\Helpers::currency_converter($deal_of_the_day->product->unit_price)}}
                                            </strike>
                                        @endif
                                        <span class="text-accent" style="margin: 10px;font-size: 22px !important;">
                                            {{\App\CPU\Helpers::currency_converter(
                                                $deal_of_the_day->product->unit_price-(\App\CPU\Helpers::get_product_discount($deal_of_the_day->product,$deal_of_the_day->product->unit_price))
                                            )}}
                                        </span>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="recomanded-buy-button">
                            <button class="buy_btn" style="color:{{$web_config['primary_color']}}"
                                    onclick="location.href='{{route('product',$deal_of_the_day->product->slug)}}'">{{\App\CPU\translate('buy_now')}}
                            </button>
                        </div>
                    @else
                        @php($product=\App\Model\Product::active()->inRandomOrder()->first())
                        @if(isset($product))
                            <div class="d-flex justify-content-center align-items-center">
                                <h1 style="color: white"> {{ \App\CPU\translate('recommended_product') }}</h1>
                            </div>
                            <div class="recomanded-product-card">
                                
                                <div class="d-flex justify-content-center align-items-center" style="margin:20px 20px -20px 20px;padding-top: 20px;">
                                    <img style=""
                                        src="{{static_assets('app/public/product/thumbnail/'.$product->thumbnail)}}"
                                        onerror="this.src='{{static_assets("front-end/img/image-place-holder.png")}}'"
                                        alt="" class="recommended_product">
                                </div>
                                <div style="background:#ffffff;margin:20px;padding-top: 10px;height: 200px;border-radius: 0px 0px 5px 5px;">
                                    <div style="text-align: left; padding: 20px;">
                                        
                                        @php($overallRating = \App\CPU\ProductManager::get_overall_rating($product['reviews']))
                                        <div class="rating-show" style="height:125px; ">
                                            <h5 style="font-weight: 600; color: {{$web_config['primary_color']}}">
                                                {{\Illuminate\Support\Str::limit($product['name'],40)}}
                                            </h5>
                                            <span class="d-inline-block font-size-sm text-body">
                                                @for($inc=0;$inc<5;$inc++)
                                                    @if($inc<$overallRating[0])
                                                        <i class="sr-star czi-star-filled active"></i>
                                                    @else
                                                        <i class="sr-star czi-star" style="color:#fea569 !important"></i>
                                                    @endif
                                                @endfor
                                                <label class="badge-style">( {{$product->reviews_count}} )</label>
                                            </span>
                                        </div>
                                        <div class="float-right">
    
                                            @if($product->discount > 0)
                                                <strike style="font-size: 12px!important;color: #E96A6A!important;">
                                                    {{\App\CPU\Helpers::currency_converter($product->unit_price)}}
                                                </strike>
                                            @endif
                                            <span class="text-accent" style="margin: 10px;font-size: 22px !important;">
                                                {{\App\CPU\Helpers::currency_converter(
                                                    $product->unit_price-(\App\CPU\Helpers::get_product_discount($product,$product->unit_price))
                                                )}}
                                            </span>
                                            
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                            <div class="recomanded-buy-button">
                                <button class="buy_btn" style="color:{{$web_config['primary_color']}}"
                                        onclick="location.href='{{route('product',$product->slug)}}'">{{\App\CPU\translate('buy_now')}}
                                </button>
                            </div>
        
                        @endif
                    @endif
                </div>
                
            </div>
            {{-- Latest products --}}
            <div class="col-xl-9 col-md-8 mt-2 pl-0 pr-0">
                <div class="latest-product-margin" style="margin-{{Session::get('direction') === "rtl" ? 'right:30px' : 'left:30px'}}">
                    <div class="d-flex justify-content-between">
                        <div class="" style="text-align: center;">
                            <span class="for-feature-title" style="text-align: center;font-size:22px !important; font-weight:700">{{ \App\CPU\translate('latest_products')}}</span>
                        </div>
                        <div style="margin-right: 4px;">
                            <a class="text-capitalize view-all-text"
                               href="{{route('products',['data_from'=>'latest'])}}">
                                {{ \App\CPU\translate('view_all')}}
                                <i class="czi-arrow-{{Session::get('direction') === "rtl" ? 'left-circle mr-1 ml-n1 mt-1 float-left' : 'right-circle ml-1 mr-n1'}}"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="row mt-2">
                        @foreach($latest_products as $product)
                            <div class="col-xl-3 col-sm-6 col-md-6 col-6 mb-4">
                                <div style="margin:2px;">
                                    @include('web-views.partials._single-product',['product'=>$product])
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


<div class="container-fluid mt-2" style="background: #FBDD6D;">   
    <!-- Products grid (featured products)-->
    @if ($featured_products->count() > 0 )
    <div class="mb-2">
        <div class="row" style="">
            <div class="col-md-12" >
                <div class="feature-product-title" style="text-transform:uppercase; margin-top:24px;font-weight: 700;font-size: 26px;">
                    {{ \App\CPU\translate('featured_products')}}
                </div>
            </div>
            <div class="col-md-12 col-sm-5">
                <div class="feature-product" style="padding-left:5px;padding-right: 5px;padding-top: 10px;">
                    <div class="carousel-wrap p-1">
                        <div class="owl-carousel owl-theme " id="featured_products_list">
                            @foreach($featured_products as $product)
                                <div  style="margin:5px;margin-bottom: 30px;">
                                    @include('web-views.partials._feature-product',['product'=>$product])
                                    
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
 </div>    

    {{--featured deal--}}
    @php($featured_deals=\App\Model\FlashDeal::with(['products'=>function($query_one){
        $query_one->with('product.reviews')->whereHas('product',function($query_two){
            $query_two->where('status',1);
        });
    }])
    ->where(['status'=>1])->where(['deal_type'=>'feature_deal'])
    ->first())
    @if(isset($featured_deals))
        <section class="container-fluid featured_deal rtl mt-2">
            <div class="row" style="background: {{$web_config['primary_color']}};padding:5px;padding-bottom: 25px; border-radius:5px;">
                <div class="col-12 pb-2" >
                    <a class="text-capitalize mt-2 mt-md-0 {{Session::get('direction') === "rtl" ? 'float-left' : 'float-right'}}" href="{{route('products',['data_from'=>'featured_deal'])}}"
                        style="color: white !important;{{Session::get('direction') === "rtl" ? 'margin-left: 21px;' : 'margin-right: 21px;'}}">
                        {{ \App\CPU\translate('view_all')}}
                        <i class="czi-arrow-{{Session::get('direction') === "rtl" ? 'left-circle mr-1 ml-n1 mt-1 float-left' : 'right-circle ml-1 mr-n1'}}"></i>
                    </a>
                </div>
                <div class="col-xl-3 col-md-4 d-flex align-items-center justify-content-center right">
                    <div class="m-4">
                        <span class="featured_deal_title"
                            style="padding-top: 12px; text-transform:uppercase;">{{ \App\CPU\translate('featured_deal')}}</span>
                        <br>
                        
                        <span style="color: white;text-align: left !important;">{{ \App\CPU\translate('See the latest deals and exciting new offers ')}}!</span>
                        
                    </div>
                    
                </div>

                <div class="col-xl-9 col-md-8 d-flex align-items-center justify-content-center {{Session::get('direction') === "rtl" ? 'pl-4' : 'pr-4'}}">
                    <div class="owl-carousel owl-theme" id="web-feature-deal-slider">
                        @foreach($featured_deals->products as $key=>$product)
                            @include('web-views.partials._feature-deal-product',['product'=>$product->product])
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif



<!-- //banner images -->
<!-- <div>    
   <img src="{{ static_assets('app/public/banner/2.png') }}" alt="" class='banner-midd-image'>
</div>  -->   

@foreach($home_categories as $category)
<div class="container-fluid mt-2" style="background: #FBDD6D;">    
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12 mt-2 pl-0 pr-0">
                <div class="latest-product-margin" style="margin-{{Session::get('direction') === "rtl" ? 'right:30px' : 'left:30px'}}">
                    <div style="margin-top:12px;font-weight: 700;font-size: 26px;">
                        <p style="text-align: center; text-transform:uppercase;">{{ \App\CPU\translate($category->name)}}</p>
                    </div>
                    <div class="justify-content-between" style="text-align:right;">
                        <div style="margin-right: 4px;">
                            <a class="text-capitalize view-all-text"
                               href="{{route('products',['id'=> $category['id'],'data_from'=>'category','page'=>1])}}">
                                {{ \App\CPU\translate('view_all')}}
                                <i class="czi-arrow-{{Session::get('direction') === "rtl" ? 'left-circle mr-1 ml-n1 mt-1 float-left' : 'right-circle ml-1 mr-n1'}}"></i>
                            </a>
                        </div>
                    </div>
  
                    <div class="row mt-2">
                        @foreach($category['products'] as $key=>$product)
                            @if ($key<6)
                            <div class="col-xl-2 col-sm-6 col-md-6 col-6 mb-4">
                                <div style="margin:2px;">
                                   @include('web-views.partials._category-single-product',['product'=>$product])
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endforeach


     
@php($main_section_banner = \App\Model\Banner::where('banner_type','Main Section Banner')->where('published',1)->orderBy('id','desc')->latest()->first())
    @if (isset($main_section_banner))
    <div class="container rtl mb-3">
        <div class="row" >
            <div class="col-12 pl-0 pr-0">
                <a href="{{$main_section_banner->url}}"
                    style="cursor: pointer;">
                    <img class="d-block footer_banner_img" style="width: 100%;border-radius: 5px;height: auto !important;"
                            onerror="this.src='{{static_assets("front-end/img/image-place-holder.png")}}'"
                            src="{{static_assets('app/public/banner/'.$main_section_banner->photo)}}">
                </a>
            </div>
        </div>
    </div>
    @endif
{{-- Banner  --}}
<div class="container rtl">
    <div class="row">
        @foreach(\App\Model\Banner::where('banner_type','Footer Banner')->where('published',1)->orderBy('id','desc')->take(2)->get() as $banner)
            <div class="col-md-6 mt-2 mt-md-0">
                <a href="{{$banner->url}}"
                    style="cursor: pointer;">
                     <img class="" style="width: 100%; border-radius:5px;height:auto;"
                          onerror="this.src='{{static_assets("front-end/img/image-place-holder.png")}}'"
                          src="{{static_assets('app/public/banner')}}/{{$banner['photo']}}">
                 </a>
            </div>
        @endforeach
    </div>
</div>
 <!-- <div class="" style="background: url({{ static_assets('app/public/banner/delivery_process_back.jpg')  }})">
    <div class="container p-3">
        <div class="row d-flex justify-content-center">
            <div style="margin-top:24px;font-weight: 700;font-size: 26px;">
                <p style="float: right">{{ \App\CPU\translate('WHAT WE PROVIDE')}}</p>
            </div>
        </div>
        <div class="row delivery-cycle">
            <div class="col-3 col-lg-3 col-md-3 mt-2" style="background-size: cover; padding: 0px;">    
               <img src="{{ static_assets('app/public/banner/order-confirm.gif') }}" alt="">
            </div>  
            <div class="col-3 col-lg-3 col-md-3 mt-2" style="background-size: cover; padding: 0px;">    
               <img src="{{ static_assets('app/public/banner/delivery-step3.gif') }}" alt="">
            </div>    
            <div class="col-3 col-lg-3 col-md-3 mt-2" style="background-size: cover; padding: 0px;">    
               <img src="{{ static_assets('app/public/banner/shipping.gif') }}" alt="">
            </div>   
            <div class="col-3 col-lg-3 col-md-3 mt-2" style="background-size: cover; padding: 0px;">    
               <img src="{{ static_assets('app/public/banner/delivery-step4.gif') }}" alt="">
            </div>   
        </div>
    </div>
</div>    --> 
<div style="background: url({{ static_assets('app/public/banner/spotlight.jpg')  }})" class="mt-2">
    <div class="row d-flex justify-content-center">
        <div style="margin-top:24px;font-weight: 700;font-size: 26px;">
            <p style="float: right">{{ \App\CPU\translate('SPOTLIGHT')}}</p>
        </div>
    </div>
    <div class="row In_the_Spotlight">
        <div class="col-sm-6 mt-2" style="background-size: cover; padding: 0px;">    
           <img src="{{ static_assets('app/public/banner/fandom1.jpg') }}" alt="">
        </div>  
        <!--<div class="col-sm-4 mt-2" style="background-size: cover; padding: 0px;">    -->
        <!--   <img src="{{ static_assets('app/public/banner/fandom2.jpg') }}" alt="">-->
        <!--</div>  -->
        <div class="col-sm-6 mt-2" style="background-size: cover; padding: 0px;">    
           <img src="{{ static_assets('app/public/banner/fandom3.jpg') }}" alt="">
        </div> 
    </div>
</div>

        {{--delivery type --}}

    <div class="container rtl mb-2 pt-2">
        <div class="row shipping-policy-web" style="margin-right: 0px; margin-left:0px;">
            <div class="col-md-3 d-flex justify-content-center">
                <div class="shipping-method-system" >
                    <div style="text-align: center;">
                        <img style="height: 60px;width:60px;" src="{{static_assets('front-end/png/delivery.png')}}"
                                 alt="">
                    </div>
                    <div style="text-align: center;">
                        <p>
                        {{ \App\CPU\translate('Fast Delivery all accross the country')}}
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="shipping-method-system">
                    <div style="text-align: center;">
                        <img style="height: 60px;width:60px;" src="{{static_assets('front-end/png/Payment.png')}}"
                                 alt="">
                    </div>
                    <div style="text-align: center;">
                        <p class="shipping-text">
                        {{ \App\CPU\translate('Safe Payment')}}
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="shipping-method-system">
                    <div style="text-align: center;">
                        <img style="height: 60px;width:60px;" src="{{static_assets('front-end/png/money.png')}}"
                                 alt="">
                    </div>
                    <div style="text-align: center;">
                        <p class="shipping-text">
                        {{ \App\CPU\translate('7 Days Return Policy')}}
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="shipping-method-system">
                    <div style="text-align: center;">
                        <img style="height: 60px;width:60px;" src="{{static_assets('front-end/png/Genuine.png')}}"
                                 alt="">
                    </div>
                    <div style="text-align: center;">
                        <p class="shipping-text">
                        {{ \App\CPU\translate('100% Authentic Products')}}
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- //banner images -->
<!-- <div class="mt-2">    
   <img src="{{ static_assets('app/public/banner/3.png') }}" alt="" class="banner-midd-image">
</div>   -->

<!--<div class="container mt-2" style="background-size: cover; padding: 0px;">    -->
<!--   <div class="row">-->
<!--       <div class="col-sm-5 p-2" style="text-align:center;">-->
<!--           <img src="{{ static_assets('app/public/banner/product_ablout1.webp') }}" alt="">-->
<!--       </div>-->
<!--       <div class="col-sm-7" style="padding: 3px 24px 0px 24px;">-->
<!--        <h4 style="font-weight: bold; color:#C16BE1">About</h4>-->
<!--           <p>Agriculture encompasses crop and livestock production, aquaculture, fisheries, and forestry for food and non-food products. Agriculture was the key development in the rise of sedentary human civilization, whereby farming of domesticated species created food surpluses that enabled people to live in cities.</p>-->
<!--        <h4 style="font-weight: bold; color:#C16BE1">Conclusion</h4>-->
<!--        <ol>-->
<!--            <li>Plants are considered living entities, and they reproduce and grow to survive.</li>-->
<!--            <li>They go through a life cycle that starts with the germination of a seed and moves to the seedling phase and finally the growth phase.</li>-->
<!--            <li>Unlike animals, plants have the capacity to grow indefinitely.</li>-->
<!--        </ol>-->
<!--         <p>Agriculture encompasses crop and livestock production, aquaculture, fisheries, and forestry for food and non-food products. Agriculture was the key development in the rise of sedentary human civilization, whereby farming of domesticated .</p>-->
<!--       </div>-->
<!--   </div>-->
<!--</div>  -->
    


@endsection

@push('script')
    {{-- Owl Carousel --}}
    <script src="{{static_assets('front-end')}}/js/owl.carousel.min.js"></script>

    <script>
        $('#flash-deal-slider').owlCarousel({
            loop: false,
            autoplay: false,
            margin: 5,
            nav: true,
            navText: ["<i class='czi-arrow-left'></i>", "<i class='czi-arrow-right'></i>"],
            dots: false,
            autoplayHoverPause: true,
            '{{session('direction')}}': false,
            // center: true,
            responsive: {
                //X-Small
                0: {
                    items: 1
                },
                360: {
                    items: 1
                },
                375: {
                    items: 1
                },
                540: {
                    items: 2
                },
                //Small
                576: {
                    items: 2
                },
                //Medium
                768: {
                    items: 2
                },
                //Large
                992: {
                    items: 2
                },
                //Extra large
                1200: {
                    items: 2
                },
                //Extra extra large
                1400: {
                    items: 3
                }
            }
        })

        $('#web-feature-deal-slider').owlCarousel({
            loop: false,
            autoplay: true,
            margin: 5,
            nav: false,
            //navText: ["<i class='czi-arrow-left'></i>", "<i class='czi-arrow-right'></i>"],
            dots: false,
            autoplayHoverPause: true,
            '{{session('direction')}}': true,
            // center: true,
            responsive: {
                //X-Small
                0: {
                    items: 1
                },
                360: {
                    items: 1
                },
                375: {
                    items: 1
                },
                540: {
                    items: 2
                },
                //Small
                576: {
                    items: 2
                },
                //Medium
                768: {
                    items: 2
                },
                //Large
                992: {
                    items: 2
                },
                //Extra large
                1200: {
                    items: 2
                },
                //Extra extra large
                1400: {
                    items: 2
                }
            }
        })

        $('#new-arrivals-product').owlCarousel({
            loop: true,
            autoplay: false,
            margin: 5,
            nav: true,
            navText: ["<i class='czi-arrow-{{Session::get('direction') === "rtl" ? 'right' : 'left'}}'></i>", "<i class='czi-arrow-{{Session::get('direction') === "rtl" ? 'left' : 'right'}}'></i>"],
            dots: false,
            autoplayHoverPause: true,
            '{{session('direction')}}': true,
            // center: true,
            responsive: {
                //X-Small
                0: {
                    items: 1
                },
                360: {
                    items: 1
                },
                375: {
                    items: 1
                },
                540: {
                    items: 2
                },
                //Small
                576: {
                    items: 2
                },
                //Medium
                768: {
                    items: 2
                },
                //Large
                992: {
                    items: 2
                },
                //Extra large
                1200: {
                    items: 4
                },
                //Extra extra large
                1400: {
                    items: 4
                }
            }
        })
    </script>
<script>
    $('#featured_products_list').owlCarousel({
        loop: true,
            autoplay: false,
            margin: 5,
            nav: true,
            navText: ["<i class='czi-arrow-left'></i>", "<i class='czi-arrow-right'></i>"],
            dots: false,
            autoplayHoverPause: true,
            '{{session('direction')}}': false,
            // center: true,
            responsive: {
                //X-Small
                0: {
                    items: 1
                },
                360: {
                    items: 1
                },
                375: {
                    items: 1
                },
                540: {
                    items: 2
                },
                //Small
                576: {
                    items: 2
                },
                //Medium
                768: {
                    items: 3
                },
                //Large
                992: {
                    items: 4
                },
                //Extra large
                1200: {
                    items: 5
                },
                //Extra extra large
                1400: {
                    items: 5
                }
            }
        });
</script>
    <script>
        $('#brands-slider').owlCarousel({
            loop: false,
            autoplay: false,
            margin: 10,
            nav: false,
            '{{session('direction')}}': true,
            //navText: ["<i class='czi-arrow-left'></i>","<i class='czi-arrow-right'></i>"],
            dots: true,
            autoplayHoverPause: true,
            // center: true,
            responsive: {
                //X-Small
                0: {
                    items: 2
                },
                360: {
                    items: 3
                },
                375: {
                    items: 3
                },
                540: {
                    items: 4
                },
                //Small
                576: {
                    items: 5
                },
                //Medium
                768: {
                    items: 7
                },
                //Large
                992: {
                    items: 9
                },
                //Extra large
                1200: {
                    items: 11
                },
                //Extra extra large
                1400: {
                    items: 12
                }
            }
        })
    </script>

    <script>
        $('#category-slider, #top-seller-slider').owlCarousel({
            loop: false,
            autoplay: false,
            margin: 5,
            nav: false,
            // navText: ["<i class='czi-arrow-left'></i>","<i class='czi-arrow-right'></i>"],
            dots: true,
            autoplayHoverPause: true,
            '{{session('direction')}}': true,
            // center: true,
            responsive: {
                //X-Small
                0: {
                    items: 2
                },
                360: {
                    items: 3
                },
                375: {
                    items: 3
                },
                540: {
                    items: 4
                },
                //Small
                576: {
                    items: 5
                },
                //Medium
                768: {
                    items: 6
                },
                //Large
                992: {
                    items: 8
                },
                //Extra large
                1200: {
                    items: 10
                },
                //Extra extra large
                1400: {
                    items: 11
                }
            }
        })
    </script>
@endpush

