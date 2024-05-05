@extends('layouts.layout')


@section('page_title')
    {{ $product->name }}
@endsection

@section('content')
    <div class="content_box">
        <div class="tem_breadcrumb_1 no_bg_src" id="v635257de02560" module_id="5005"
            bg_img_url="https://img001.video2b.com/1818/file_01666340821896.jpg" module_type="module">


            <div modular-edit="custom">
                <div class="absolute_box">
                    <span video-type="" video-src="" video-m3u8src="" playback_mode=""></span>
                </div>
                <div class="text">
                    <div class="container">
                        <div class="text">
                            <div class="top_title">{{ $product->name }}</div>
                        </div>
                        <div class="top_describe">
                            <span><a href="/" style="display: inline;">HOME</a></span>
                            <i>&gt;</i>
                            <span><a href="{{ route('products') }}" style="display: inline;">PRODUCTS</a></span>
                            <i>&gt;</i>
                            <span><a href="{{ route('category', $product->category->slug) }}"
                                    style="display: inline;">{{ $product->category->name }}</a></span>
                            <i>&gt;</i>
                            <span><a href="{{ route('product', $product->url_key) }}"
                                    style="display: inline;">{{ $product->name }}</a></span>
                        </div>
                    </div>
                </div>
                <a target="_self" href="#" class="home_banner_vr_btn" btn_show="0">
                    <div><span class="iconfont iconVR"></span></div>
                    <div class="vr_txt">
                        <section template-edit="btn_languages" module_name="module">VR</section>
                    </div>
                </a>
            </div>
        </div>
        <div class="tem_detail_6 no_bg_src content-section" id="v63525804e831e" module_id="5040" bg_img_url=""
            module_type="module">


            <div class="container">
                <div class="body_advertisement ">
                    <div class="product_video_box">
                        <div class="body_border_box body_border_box--top mabs">
                            <div class="product_video clearfix mabs" direction itemscope
                                itemtype="http://schema.org/VideoObject">
                                <div class="img_box w_50">
                                    <div class="sticky_box" modular-edit="custom">
                                        <div class="magnifier_box body_border_box" style="position: relative;">
                                            <div class="img_par left_img">
                                                <div class="swiper-container swiper-container1">
                                                    <div class="swiper-wrapper">
                                                        {{-- <div class="swiper-slide" modular-edit="custom">
                                                            <div class="recommend_swiper_list">
                                                                <div class="recommend_swiper_list_con">
                                                                    <div class="undo_icon_box">
                                                                        <img swiper_src="/images/undo.png"
                                                                            class="undo_icon">
                                                                        <div class="undo_text">Replay</div>
                                                                    </div>

                                                                    <div class="recommended_title">Recommended</div>
                                                                    <div
                                                                        class="swiper-container product_recommend_swiper_2 product_recommend_swiper_2_swiper">
                                                                        <div class="iconfont iconios-arrow-back left_icon">
                                                                        </div>
                                                                        <div
                                                                            class="iconfont iconios-arrow-forward right_icon">
                                                                        </div>
                                                                        <div class="swiper-wrapper">
                                                                            <div module_list class="swiper-slide">
                                                                                <a class="slide_boxs" target="_blank"
                                                                                    href="show-17-1-1.html">
                                                                                    <div class="img_par proportion">
                                                                                        <div class="img_parbs">
                                                                                            <img swiper_src="https://imgbd.weyesimg.com/prod/moving/img/06e671192fe5d11d89799b2f28262d60/33ad54bb1256282976022fbfa8bf70ad.jpg"
                                                                                                img_preview_gif=""
                                                                                                alt="{{ $product->name }}"
                                                                                                video_w="600">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="text">IP SCREEN - hot
                                                                                        selling Indoor P3 Die-Casting
                                                                                        LED Display for wholesale</div>
                                                                                </a>
                                                                            </div>

                                                                            <div module_list class="swiper-slide">
                                                                                <a class="slide_boxs" target="_blank"
                                                                                    href="show-18-44-1.html">
                                                                                    <div class="img_par proportion">
                                                                                        <div class="img_parbs">
                                                                                            <img swiper_src="https://imgbd.weyesimg.com/prod/moving/img/06e671192fe5d11d89799b2f28262d60/46c861fc8733d30b0e89a669c39d2564.jpg"
                                                                                                img_preview_gif=""
                                                                                                alt="{{ $product->name }}"
                                                                                                video_w="600">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="text">IP SCREEN-Quality
                                                                                        Outdoor P4.81 Die-Casting LED
                                                                                        Display Manufacturer</div>
                                                                                </a>
                                                                            </div>

                                                                            <div module_list class="swiper-slide">
                                                                                <a class="slide_boxs" target="_blank"
                                                                                    href="show-17-42-1.html">
                                                                                    <div class="img_par proportion">
                                                                                        <div class="img_parbs">
                                                                                            <img swiper_src="https://imgbd.weyesimg.com/prod/moving/img/06e671192fe5d11d89799b2f28262d60/543f84e171a34a17ea30f51ac8713649.jpg"
                                                                                                img_preview_gif=""
                                                                                                alt="Indoor P6 Die-casting LED Display"
                                                                                                video_w="600">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="text">Indoor P6
                                                                                        Die-casting LED Display</div>
                                                                                </a>
                                                                            </div>

                                                                            <div module_list class="swiper-slide">
                                                                                <a class="slide_boxs" target="_blank"
                                                                                    href="show-17-28-1.html">
                                                                                    <div class="img_par proportion">
                                                                                        <div class="img_parbs">
                                                                                            <img swiper_src="https://imgbd.weyesimg.com/prod/moving/img/06e671192fe5d11d89799b2f28262d60/4b46789b665cf54b43a50657d92b01ef.jpg"
                                                                                                img_preview_gif=""
                                                                                                alt="Indoor P3.91 Die-Casting LED Display"
                                                                                                video_w="600">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="text">Indoor P3.91
                                                                                        Die-Casting LED Display</div>
                                                                                </a>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="img_par no_img_src mousemove_boxs" v_id="977941"
                                                                lang="en" img_par_proportion="2">
                                                                <img alt="Best Quality Indoor 500 Pro+ Die-Casting LED Display Manufacturer  - IP SCREEN"
                                                                    video-img="https://img001.video2b.com/1818/file_01672046907407.jpg"
                                                                    video-src="https://img001.video2b.com/hls/1818/file_01672043208122.mp4"
                                                                    video-type="1" video_w="600">
                                                                <span class="hide"
                                                                    video-src="https://img001.video2b.com/hls/1818/file_01672043208122.mp4"
                                                                    video-m3u8src="https://img001.video2b.com/m3u8/file_01672043208122.m3u8"
                                                                    editable="video" video-type="1" video_mid="2"
                                                                    playback_mode=""></span>

                                                                <span class="there_video_icons videos_js_icons"
                                                                    style="display:none;"><i
                                                                        class="iconfont iconbofang"></i></span>
                                                            </div>
                                                        </div> --}}

                                                        @if ($product->images)
                                                            @foreach (json_decode($product->images) as $image)
                                                                <div class="swiper-slide">
                                                                    <div class="img_par no_img_src mousemove_boxs"
                                                                        img_par_proportion="2">
                                                                        <img video-img="{{ Voyager::image($image) }}"
                                                                            alt="{{ $product->name }}" video_w="600">
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif


                                                    </div>
                                                    <div class="swiper-pagination videos_js_hides"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="min_img">
                                            <ul class="border-color">
                                                @if ($product->images)
                                                    @foreach (json_decode($product->images) as $key => $image)
                                                        <li class="body_border_box {{ $key == 0 ? 'active' : '' }}">
                                                            <div class="img_par no_img_src" img_par_proportion="2">
                                                                <img alt="{{ $product->name }}" img_preview_gif=""
                                                                    video-img="{{ Voyager::image($image) }}"
                                                                    video_w="100">
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                @endif

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_text2 w_50">
                                    <div style="display: none !important;">
                                        <video style="display:none!important;"
                                            poster="../img001.video2b.com/1818/file_01672046907407.jpg" muted
                                            src="https://img001.video2b.com/hls/1818/file_01672043208122.mp4"></video>
                                        <div itemprop="thumbnailUrl"
                                            content="../img001.video2b.com/1818/file_01672046907407.jpg"></div>
                                        <div itemprop="duration" content="PT2M17S"></div>
                                        <div itemprop="contentUrl"
                                            content="https://img001.video2b.com/hls/1818/file_01672043208122.mp4"></div>
                                        <div itemprop="embedUrl" content="show-17-29-1.html"></div>
                                        <div itemprop="uploadDate" content="2022-10-27T16:55:41+08:00"></div>
                                    </div>
                                    <div class="sticky_box">
                                        <div class="top_title_box">
                                            <h1 class="top_title" itemprop="name">{{ $product->name }}</h1>
                                        </div>


                                        {!! $product->short_description !!}
                                        {{-- <div class="inqury_btn_box" btn_show="1">
                                            <a href="#v6352580c46b41" target="_self" class="">
                                                <div data-product-inquiry module_edit_btn="btn1" class="btn"
                                                    btn-types="deep">
                                                    <section template-edit="btn_languages" module_name="module">SEND
                                                        INQUIRY NOW</section>
                                                </div>
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body_border_box mabs" style="border-top:none;">
                            <div class="detail_description_2">
                                <div class="content_detail_edit">
                                    <div class="pagination" style="display: none">
                                        <div class="arrow left-arrow"></div>
                                        <div class="arrow right-arrow"></div>
                                    </div>
                                    <ul class="description_tab_box body_border_box" style="border: 0">

                                        <li class="detail_tabbox_item body_border_box active font-color"
                                            data-id="product_details_cont">
                                            <span class="border-color li_tab_t"></span>
                                            Product Details
                                        </li>
                                        {{-- <li class="detail_tabbox_item body_border_box" data-id="company_profile_cont">
                                            <span class="border-color li_tab_t"></span>
                                            Company Profile
                                        </li> --}}


                                    </ul>

                                    <div>
                                        {!! $product->description !!}
                                    </div>
                                    {{--
                                    <div class="cons_box ls-product" con_ids="company_profile_cont">
                                        <div class="details_cont_title" style="margin-top:0;">Basic Information</div>
                                        <ul class="base_info_box">
                                            <li>
                                                <div>Year Established</div>
                                                <div title="2013">2013</div>
                                            </li>
                                            <li>
                                                <div>Business Type</div>
                                                <div title="Manufacturing Industry">Manufacturing Industry</div>
                                            </li>
                                            <li>
                                                <div>Country / Region</div>
                                                <div title="SHENZHEN">SHENZHEN</div>
                                            </li>
                                            <li>
                                                <div>Main Industry</div>
                                                <div title="Optoelectronic Displays">Optoelectronic Displays</div>
                                            </li>
                                            <li>
                                                <div>Main Products</div>
                                                <div
                                                    title="ed modules,small pitch conference  displays,   indoor and outdoor commercial displays, stage rental events displays and stadium led displays.">
                                                    ed modules,small pitch conference displays, indoor and outdoor
                                                    commercial displays, stage rental events displays and stadium led
                                                    displays.</div>
                                            </li>
                                            <li>
                                                <div>Enterprise Legal Person</div>
                                                <div title="Mr. Peng">Mr. Peng</div>
                                            </li>
                                            <li>
                                                <div>Total Employees</div>
                                                <div title="16~100 people">16~100 people</div>
                                            </li>
                                            <li>
                                                <div>Annual Output Value</div>
                                                <div title="10000000 USD">10000000 USD</div>
                                            </li>
                                            <li>
                                                <div>Export Market</div>
                                                <div title="European Union,Middle East,Southeast Asia,America,Others">
                                                    European Union,Middle East,Southeast Asia,America,Others</div>
                                            </li>
                                            <li>
                                                <div>Cooperated Customers</div>
                                                <div
                                                    title="Malaysia, Korea, South Africa, Kenya, Nigeria, India, Cambodia, Bangladesh, Italy, Germany,Thailand, The United States, Vietnam, Chile, Peru, Spain, Argentina, Colombia, Mexico,Kuwait and so on.">
                                                    Malaysia, Korea, South Africa, Kenya, Nigeria, India, Cambodia,
                                                    Bangladesh, Italy, Germany,Thailand, The United States, Vietnam,
                                                    Chile, Peru, Spain, Argentina, Colombia, Mexico,Kuwait and so on.
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="details_cont_title">Company Profile</div>
                                        <div id="company_profile_content">SHENZHEN IP SCREEN CO.,LIMITED was established
                                            in 2013, is a reliable manufacturer in production,R&D,sales in China,
                                            specialized in high quality, high refresh outdoor & indoor led modules,small
                                            pitch conference displays, indoor and outdoor commercial displays, stage
                                            rental events displays and stadium led displays.<br />After 9 years
                                            development, we now become a leading led screen supplier in China, now our
                                            factory equipped with modern automatic assembly line, with Sony high-speed
                                            placement machine, YAMAHA high-speed SMT machine, full automatic solder
                                            paste printing machine and a group of professional production equipment,
                                            which is to keep the quality and provide the led cabinet to the customers
                                            with a short time after order confirmation. <br />We have a series of
                                            full-color LED Display products, including led indoor full color led screen
                                            with
                                            P1.2/P1.5/P1.6/P1.8/P1.9/P2/P2.5/P2.6/P2.9/P3/P3.91/P4/P4.8/P5/P6/P7.62/P10
                                            and outdoor led video visual display with P3/P3.91/P4./P4.81/P5/P6/P8/P10,
                                            also including with transparent led screen with P3.91/P7.81/P10.4, tax led
                                            sign with P4/P5/P6, football stadium with P6/8P10/P12.5, Totem pole led
                                            display with P4/P5/P6/P8 for street advertising display, Indoor Poster
                                            standing led cabinet with P2/P2.5/P3, LED DJ booth, Flexible led module with
                                            P2/P2.5/P3/P4/P5 and so on. We here can supply all that you
                                            want.<br /><br />IP SCREEN focused on the led video wall products with
                                            professional assembling, aging test to keep the high quality before delivery
                                            to the customers. Therefore, all our led panel will have CE,ROHS,FCC
                                            certificates, our factory would have ISO9001/ISO2000 standard certificates.
                                            With these certificates, our products now export to many countries,
                                            including Malaysia, Korea, South Africa, Kenya, Nigeria, India, Cambodia,
                                            Bangladesh, Italy, Germany,Thailand, The United States, Vietnam, Chile,
                                            Peru, Spain, Argentina, Colombia, Mexico,Kuwait and so on.<br />According to
                                            the led display business development, IP SCREEN now existed with sales
                                            department, engineering department,finance department, R&D department,
                                            logistics department, after-sales department, which is committed to provide
                                            a good service and good quality led panel to our customers.<br />The
                                            advantages of our pantalla led:<br />1.Environmental protection.<br />2.QC
                                            to inspect the quality.<br />3.Energy-saving, low power
                                            consumption.<br />4.Real raw materials of led lamp, IC Driver, power supply
                                            to supply.<br />5.Long lifespan with 2 years warranty at least.<br />6.Safe
                                            and convenient assemble and dismantle.<br /><br />The advantages of R&D
                                            team:<br />1.Great LED engineer to research and design the led cabinets with
                                            new pixel pitch.<br />2.At least develop a new led screen during three
                                            months.<br />3.Will provide professional led media panel solution for the
                                            big project.</div>
                                        <div class="details_cont_title">Certifications</div>
                                        <div class="details_cont_certifications">
                                            <div class="certifications_item">
                                                <div class="certifications_img">
                                                    <img src="../img001.video2b.com/1818/file_01669798031038.jpg"
                                                        alt="">
                                                </div>
                                                <div>CE-EMC</div>
                                                <div>Issue by：Shenzhen Circle Testing Certification Co.,Ltd.</div>
                                            </div>
                                            <div class="certifications_item">
                                                <div class="certifications_img">
                                                    <img src="../img001.video2b.com/1818/file_01669798123566.jpg"
                                                        alt="">
                                                </div>
                                                <div>FCC</div>
                                                <div>Issue by：Shenzhen Circle Testing Certification Co.,Ltd.</div>
                                            </div>
                                            <div class="certifications_item">
                                                <div class="certifications_img">
                                                    <img src="../img001.video2b.com/1818/file_01669798164366.jpg"
                                                        alt="">
                                                </div>
                                                <div>CE-LVD</div>
                                                <div>Issue by：Shenzhen Circle Testing Certification Co.,Ltd.</div>
                                            </div>
                                            <div class="certifications_item">
                                                <div class="certifications_img">
                                                    <img src="../img001.video2b.com/1818/file_01669798187465.jpg"
                                                        alt="">
                                                </div>
                                                <div>RoHs</div>
                                                <div>Issue by：Shenzhen Circle Testing Certification Co.,Ltd.</div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="cons_box ls-product" con_ids="service_profile_cont">

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="product_sidebar" sidebar_form="">
                        <div>
                            <div class="body_border_box body_modular_box">
                                <h2 class="title">
                                    <section template-edit="sidebar_recommended_languages" module_name="module">
                                        Recommended</section>
                                </h2>
                                <ul class="recommended_ul">
                                    <li class="recommended_li">
                                        <a href="show-17-1-1.html" class="articles_img body_border_box">
                                            <div class="img img_par no_img_src" img_par_proportion="2">
                                                <img video-img="https://imgbd.weyesimg.com/prod/moving/img/06e671192fe5d11d89799b2f28262d60/33ad54bb1256282976022fbfa8bf70ad.jpg"
                                                    alt="{{ $product->name }}" video_w="100"
                                                    onerror="onerror=null;src='/images/errorImg.png'">
                                            </div>
                                        </a>
                                        <div class="text">
                                            <div class="title" title="{{ $product->name }}">
                                                <a href="show-17-1-1.html">IP SCREEN - hot selling Indoor P3 Die-Casting
                                                    LED Display for wholesale</a>
                                            </div>
                                            <div class="date"
                                                title="hot selling Indoor P3 Die-Casting LED Display for wholesale  compared with similar products on the market, it has incomparable outstanding advantages in terms of performance, quality, appearance, etc., and enjoys a good reputation in the market.IP SCREEN summarizes the defects of past products, and continuously improves them. The specifications of hot selling Indoor P3 Die-Casting LED Display for wholesale can be customized according to your needs.">
                                                hot selling Indoor P3 Die-Casting LED Display for wholesale  compared
                                                with similar products on the market, it has incomparable outstanding
                                                advantages in terms of performance, quality, appearance, etc., and
                                                enjoys a good reputation in the market.IP SCREEN summarizes the defects
                                                of past products, and continuously improves them. The specifications of
                                                hot selling Indoor P3 Die-Casting LED Display for wholesale can be
                                                customized according to your needs.</div>
                                        </div>
                                    </li>
                                    <li class="recommended_li">
                                        <a href="show-18-44-1.html" class="articles_img body_border_box">
                                            <div class="img img_par no_img_src" img_par_proportion="2">
                                                <img video-img="https://imgbd.weyesimg.com/prod/moving/img/06e671192fe5d11d89799b2f28262d60/46c861fc8733d30b0e89a669c39d2564.jpg"
                                                    alt="{{ $product->name }}" video_w="100"
                                                    onerror="onerror=null;src='/images/errorImg.png'">
                                            </div>
                                        </a>
                                        <div class="text">
                                            <div class="title" title="{{ $product->name }}">
                                                <a href="show-18-44-1.html">IP SCREEN-Quality Outdoor P4.81 Die-Casting
                                                    LED Display Manufacturer</a>
                                            </div>
                                            <div class="date"
                                                title="Outdoor P4.81 Die-Casting LED Display  compared with similar products on the market, it has incomparable outstanding advantages in terms of performance, quality, appearance, etc., and enjoys a good reputation in the market.IP SCREEN summarizes the defects of past products, and continuously improves them. The specifications of Outdoor P4.81 Die-Casting LED Display can be customized according to your needs.">
                                                Outdoor P4.81 Die-Casting LED Display  compared with similar products on
                                                the market, it has incomparable outstanding advantages in terms of
                                                performance, quality, appearance, etc., and enjoys a good reputation in
                                                the market.IP SCREEN summarizes the defects of past products, and
                                                continuously improves them. The specifications of Outdoor P4.81
                                                Die-Casting LED Display can be customized according to your needs.</div>
                                        </div>
                                    </li>
                                    <li class="recommended_li">
                                        <a href="show-17-42-1.html" class="articles_img body_border_box">
                                            <div class="img img_par no_img_src" img_par_proportion="2">
                                                <img video-img="https://imgbd.weyesimg.com/prod/moving/img/06e671192fe5d11d89799b2f28262d60/543f84e171a34a17ea30f51ac8713649.jpg"
                                                    alt="Indoor P6 Die-casting LED Display" video_w="100"
                                                    onerror="onerror=null;src='/images/errorImg.png'">
                                            </div>
                                        </a>
                                        <div class="text">
                                            <div class="title" title="Indoor P6 Die-casting LED Display"><a
                                                    href="show-17-42-1.html">Indoor P6 Die-casting LED Display</a></div>
                                            <div class="date" title=""></div>
                                        </div>
                                    </li>
                                    <li class="recommended_li">
                                        <a href="show-17-28-1.html" class="articles_img body_border_box">
                                            <div class="img img_par no_img_src" img_par_proportion="2">
                                                <img video-img="https://imgbd.weyesimg.com/prod/moving/img/06e671192fe5d11d89799b2f28262d60/4b46789b665cf54b43a50657d92b01ef.jpg"
                                                    alt="Indoor P3.91 Die-Casting LED Display" video_w="100"
                                                    onerror="onerror=null;src='/images/errorImg.png'">
                                            </div>
                                        </a>
                                        <div class="text">
                                            <div class="title" title="Indoor P3.91 Die-Casting LED Display"><a
                                                    href="show-17-28-1.html">Indoor P3.91 Die-Casting LED Display</a>
                                            </div>
                                            <div class="date" title=""></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>


                            <div class="body_border_box body_modular_box navigation_box">
                                <h2 class="title">PRODUCTS</h2>
                                <ul class="right_navigation_ul">
                                    <li class="">
                                        <div class="text">
                                            <a href="list-12-1.html">Rental LED Display</a>
                                            <i class="i_con iconfont iconios-arrow-forward"></i>
                                        </div>
                                        <ul class="nav_ul">
                                            <li class="">
                                                <div class="text">
                                                    <a href="list-17-1.html">Indoor Rental LED Display</a>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="text">
                                                    <a href="list-18-1.html">Outdoor Rental LED Display</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <div class="text">
                                            <a href="list-13-1.html">Fixed LED Display</a>
                                            <i class="i_con iconfont iconios-arrow-forward"></i>
                                        </div>
                                        <ul class="nav_ul">
                                            <li class="">
                                                <div class="text">
                                                    <a href="list-19-1.html">Indoor Fixed LED Display</a>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="text">
                                                    <a href="list-20-1.html">Outdoor Fixed LED Display</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <div class="text">
                                            <a href="list-14-1.html">Transparent LED Display</a>
                                            <i class="i_con iconfont iconios-arrow-forward"></i>
                                        </div>
                                        <ul class="nav_ul">
                                            <li class="">
                                                <div class="text">
                                                    <a href="list-21-1.html">Glass Transperant LED Display</a>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="text">
                                                    <a href="list-22-1.html">Outdoor LED Mesh Curtain Display</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <div class="text">
                                            <a href="list-11-1.html">Small Pitch LED Display</a>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="text">
                                            <a href="products-63448.html">Creative LED Display</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="body_border_box body_modular_box inquiry_right_sticky_box" id="v63525804e831einquiry">
                            <h2 class="title">
                                <section template-edit="sidebar_inquiry_languages" module_name="module">Send your
                                    inquiry</section>
                            </h2>
                            <div class="product_enquiry_box">
                                <form no_form_enovation action="https://www.ledIP SCREEN.com/add-enquiry" class="fl_box_s"
                                    onsubmit="return form_submit(this);">
                                    <input type="hidden" name="enquiry_type" id="enquiry_type_v63525804e831e"
                                        value="1">
                                    <input type="hidden" name="visitlength" id="visitlength_v63525804e831e"
                                        value="====1711972898====">
                                    <input type="hidden" name="source" id="source_v63525804e831e" value="0">
                                    <input type="hidden" name="id" id="id_v63525804e831e" value="977941">
                                    <ul class="fl_row_s">
                                        <li class="fl12_s">
                                            <label class="enquiry_label">
                                                <input type="text" class="enquiry_inp enquiry_inp_placeholder" title
                                                    placeholder="Enter your name" autocorrect="off" autocomplete="off"
                                                    required name="name" id="name_v63525804e831e"
                                                    oninvalid="setCustomValidity('Please fill in this field')"
                                                    oninput="setCustomValidity('')">
                                                <span class="required_span"><span class="font-color">*</span>Name</span>
                                                <div class="required_tips">Format error</div>
                                            </label>
                                        </li>
                                        <li class="fl12_s">
                                            <label class="enquiry_label">
                                                <input type="text" class="enquiry_inp enquiry_inp_placeholder" title
                                                    placeholder="Enter your e-mail" autocorrect="off" autocomplete="off"
                                                    required name="email" id="email_v63525804e831e"
                                                    oninvalid="setCustomValidity('Please fill in this field')"
                                                    oninput="setCustomValidity('')">
                                                <span class="required_span"><span class="font-color">*</span>E-mail</span>
                                                <div class="required_tips">Format error</div>
                                            </label>
                                        </li>
                                        <li class="fl12_s">
                                            <label class="enquiry_label">
                                                <input type="text" class="enquiry_inp enquiry_inp_placeholder" title
                                                    placeholder="Enter your phone" autocorrect="off" autocomplete="off"
                                                    name="phone" id="phone_v63525804e831e"
                                                    oninput="this.value=this.value.replace(/[^\d]/,'');setCustomValidity('')"
                                                    oninvalid="setCustomValidity('Please fill in this field')">
                                                <span class="required_span"><span
                                                        class="font-color">*</span>Phone/WhatsApp/Skype</span>
                                                <div class="required_tips">Format error</div>
                                            </label>
                                        </li>
                                        <li class="fl12_s">
                                            <label class="enquiry_label">
                                                <input type="text" class="enquiry_inp enquiry_inp_placeholder" title
                                                    placeholder="Enter your company name" autocorrect="off"
                                                    autocomplete="off" name="company" id="company_v63525804e831e"
                                                    oninvalid="setCustomValidity('Please fill in this field')"
                                                    oninput="setCustomValidity('')">
                                                <span class="required_span"><span class="font-color">*</span>Company
                                                    Name</span>
                                                <div class="required_tips">Format error</div>
                                            </label>
                                        </li>
                                        <li class="fl12_s">
                                            <label class="enquiry_label textarea_boxs">
                                                <textarea class="enquiry_inp enquiry_inp_placeholder" rows="3" title
                                                    placeholder="Enter the content of your inquiry" autocorrect="off" autocomplete="off" required name="msg"
                                                    id="msg_v63525804e831e"></textarea>
                                                <span class="required_span"><span
                                                        class="font-color">*</span>Content</span>
                                                <div class="required_tips">Format error</div>
                                            </label>
                                        </li>
                                    </ul>
                                    <div class="enquiry_btn_box">
                                        <button module_edit_btn="btn3" class="btn read_more_a"
                                            id="submit_v63525804e831e">
                                            <section template-edit="btn3_languages" module_name="module">Submit
                                            </section>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div> --}}
                </div>
            </div>


        </div>

    </div>

@endsection
