<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('page_title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="{{ app()->getLocale() }}">
    <meta name="base-url" content="{{ url()->to('/') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @yield('seo')

    <link rel="icon" href="{{ asset('assets/images/img001.video2b.com/1818/file1666229369504.png') }}"
        type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets/images/img001.video2b.com/1818/file1666229369504.png') }}"
        type="image/x-icon" />

    <!-- css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/common_3a8c9.css') }}">

    <link href="{{ asset('assets/css/ail_detail.css') }}" rel='stylesheet' type='text/css' />

    <!-- header style start -->
    <link rel="stylesheet" id="construction-fonts-css"
        href="http://fonts.googleapis.com/css?family=Poppins%3A100%2C300%2C400%2C500%2C600%2C700%2C900%7C"
        type="text/css" media="all">

</head>

<body class=" new_u_body  body_color_bgs body_pages_index" id="html_body">

    <!-- ======= Header ======= -->
    <div class="header_con_box">
        <header id="v6350debc83ff1" module_id="5010" class="_header no_bg_src" header_edit="114" no_index_edit
            module_type="header" bg_img_url="" switch_fixed="nav">
            <div class="_header_box no_bg_src" header_id="5010" style="">
                <div class="nav_button" id="head_button">
                    <div class="nav_button_icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div style="background-color: rgba(0,0,0,0);" class="header-slogan-box">
                    <div class="_header_con container" container="">
                        {{-- <div class="_head_top" modular-edit="custom">
                            <div class="head_h1">
                                <section template-edit="title_languages" module_name="header">
                                    <p><span style="font-size:16px;">Bespoke and custom built led screen solutions
                                            provider.</span></p>
                                </section>
                            </div>
                            <div class="icon_bx iconfenxiang_boxs" btn_show="1"></div>

                            <div class="icon_bx">
                                <span class="head_i iconfont iconsousuo head_shousuos" btn_show="1"></span>
                                <div class="language_modal_click icon_bx" btn_show="1">
                                    <span class="head_i iconfont icondiqu"></span><span
                                        class="head_lan_txt">Language</span>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="_header_con _header_con--bottom container" container="">
                    <div class="_head_bottom">
                        <div class="logo">
                            <a href="/">
                                <img head_logo_src="{{ asset('assets/images') }}"
                                    alt="IP SCREEN">
                            </a>
                        </div>
                        <nav>
                            <div class="nav_btns btn_l bg-color iconfont iconchaopimiaotuangou-" data-left="-80"></div>
                            <div class="nav_btns btn_r bg-color iconfont iconleft" data-left="80"></div>
                            <div class="nav_box">

                                <ul class="nav border-color">
                                    <li class="{{ request()->route()->getName() == 'index' ? 'active' : '' }}">
                                        <a href="/">HOME</a>
                                    </li>
                                    <li
                                        class="xia {{ str_contains(request()->route()->getName(), 'category') ? 'active' : '' }}">
                                        CATEGORIES
                                        <i class="i_con iconfont iconxiala1"></i>
                                        <ul class="nav_ul">
                                            <?php $categories = \App\Models\Category::where('status', 'ACTIVE')->whereNull('parent_id')->orderBy('id', 'DESC')->get(); ?>
                                            @foreach ($categories as $category)
                                                <?php $has_children = $category->children->count(); ?>
                                                <li
                                                    class="{{ $has_children ? 'xia' : '' }} {{ str_contains(request()->url(), $category->slug) ? 'font-color-a' : '' }}">
                                                    <a
                                                        href="/category/{{ $category->slug }}">{{ $category->name }}</a>
                                                    @if ($has_children)
                                                        <i class="i_con iconfont iconxiala1"></i>
                                                        <ul class="nav_ul">
                                                            @foreach ($category->children as $child)
                                                                <li
                                                                    class="{{ str_contains(request()->url(), $child->slug) ? 'font-color-a' : '' }}">
                                                                    <a
                                                                        href="/category/{{ $child->slug }}">{{ $child->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif

                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="{{ request()->route()->getName() == 'services' ? 'active' : '' }}">
                                        <a href="{{ route('services') }}">SERVICE</a>
                                    </li>

                                    {{-- <li class=" ">
                                        <a href="list-8-1.html">CASE</a>
                                    </li>
                                    <li class=" ">
                                        <a href="list-7-1.html">NEWS</a>
                                    </li> --}}

                                    <li class="{{ request()->route()->getName() == 'about_us' ? 'active' : '' }}">
                                        <a href="{{ route('about_us') }}">ABOUT US</a>
                                    </li>


                                    <li class="{{ request()->route()->getName() == 'contact_us' ? 'active' : '' }}">
                                        <a href="{{ route('contact_us') }}">CONTACT US</a>
                                    </li>


                                </ul>
                            </div>
                            <div class="m_iconfenxiang_boxs iconfenxiang_boxs" btn_show="1"></div>
                        </nav>
                    </div>
                </div>
            </div>

        </header>
    </div>

    @yield('content')

    <!-- ======= Footer ======= -->
    <div class="public_inquiry_tem_3 content-section" module_center="left" id="v63523b96ccd69" module_id="5055"
        bg_img_url="" module_type="module" data-unique-selector="2379893854128643">
        <div class="container public_inquiry_tem_3__container" direction="">
            <div class="text top_text" modular-edit="custom">
                <div class="public_inquiry_tem_3__sticky">
                    <div class="top_title">
                        <section template-edit="title_languages" module_name="module">
                            <p><span style="font-size:48px;"><span style="color:#FFFFFF;">Get In Touch</span></span>
                            </p>
                        </section>
                    </div>
                    <div class="top_details">
                        <section template-edit="describe_languages" module_name="module">
                            <div style="line-height:1.9;"><span style="color:rgb(255 255 255 / 65%);"><span
                                        style="font-size:16px;">If you have any questions about our products or
                                        services, please feel free to contact IP SCREEN.</span></span></div>
                        </section>
                    </div>
                    <ul class="contact-list">
                        <li class="contact-list__item list_row_li" list_cols="1" mobile_list_cols="">
                            <div class="img_par contact-list__icon show_img">
                                <img video-img="https://img001.video2b.com/1818/file_01666333832908.png"
                                    alt="<p>HOTLINE</p>"
                                    src="https://img001.video2b.com/1818/file_01666333832908.png?x-oss-process=image/resize,m_lfit,w_1560/format,webp/quality,80">
                            </div>
                            <div class="contact-list__text">
                                <div class="describe">
                                    <p>HOTLINE</p>
                                </div>
                                <div class="title">
                                    <a title="phone" href="tel:+8613141214113" target="_self">
                                        <p>+8613141214113</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="contact-list__item list_row_li" list_cols="1" mobile_list_cols="">
                            <div class="img_par contact-list__icon show_img">
                                <img video-img="https://img001.video2b.com/1818/file_11666333832908.png"
                                    alt="<p>EMAIL</p>"
                                    src="https://img001.video2b.com/1818/file_11666333832908.png?x-oss-process=image/resize,m_lfit,w_1560/format,webp/quality,80">
                            </div>
                            <div class="contact-list__text">
                                <div class="describe">
                                    <p>EMAIL</p>
                                </div>
                                <div class="title">
                                    <p><a data-cke-saved-href="mailto:info@ip-screens.com"
                                            href="mailto:info@ip-screens.com">info@ip-screens.com</a><a
                                            data-cke-saved-href="mailto:info@ip-screens.com&nbsp;"
                                            href="mailto:info@ip-screens.com&nbsp;" rel="">&nbsp;</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="con enquiry_box">
                <form no_form_enovation="" action="/add-enquiry" class="public_inquiry_tem_3__sticky"
                    onsubmit="return form_submit(this);">
                    <input type="hidden" name="enquiry_type" id="enquiry_type_v63523b96ccd69" value="0">
                    <input type="hidden" name="visitlength" id="visitlength_v63523b96ccd69"
                        value="====1714830174====">
                    <input type="hidden" name="source" id="source_v63523b96ccd69" value="0">
                    <input type="hidden" name="id" id="id_v63523b96ccd69" value="0">
                    <ul class="row_small">
                        <li class="">
                            <label class="enquiry_label form_inp body_border_box" inp-types="deep">
                                <input type="text" class="enquiry_inp enquiry_inp_placeholder" autocorrect="off"
                                    autocomplete="off" required="" name="name" id="name_v63523b96ccd69"
                                    title="" placeholder="Enter your name"
                                    oninvalid="setCustomValidity('Please fill in this field')"
                                    oninput="setCustomValidity('')">
                                <span class="required_span">Name</span>
                                <p class="required_tips">Format error</p>
                            </label>
                        </li>
                        <li class="">
                            <label class="enquiry_label form_inp body_border_box" inp-types="deep">
                                <input type="text" class="enquiry_inp enquiry_inp_placeholder" autocorrect="off"
                                    autocomplete="off" required="" name="email" id="email_v63523b96ccd69"
                                    title="" placeholder="Enter your e-mail"
                                    oninvalid="setCustomValidity('Please fill in this field')"
                                    oninput="setCustomValidity('')">
                                <span class="required_span">E-mail</span>
                                <p class="required_tips">Format error</p>
                            </label>
                        </li>
                        <li class="">
                            <label class="enquiry_label form_inp" inp-types="deep">
                                <input type="text" class="enquiry_inp enquiry_inp_placeholder" autocorrect="off"
                                    autocomplete="off" name="phone" id="phone_v63523b96ccd69"
                                    oninput="this.value=this.value.replace(/[^\d]/,'');setCustomValidity('')"
                                    title="" placeholder="Enter your phone"
                                    oninvalid="setCustomValidity('Please fill in this field')">
                                <span class="required_span">Phone/WhatsApp/Skype</span>
                                <p class="required_tips">Format error</p>
                            </label>
                        </li>
                        <li class="">
                            <label class="enquiry_label form_inp" inp-types="deep">
                                <input type="text" class="enquiry_inp enquiry_inp_placeholder" autocorrect="off"
                                    autocomplete="off" name="company" id="company_v63523b96ccd69" title=""
                                    placeholder="Enter your company name"
                                    oninvalid="setCustomValidity('Please fill in this field')"
                                    oninput="setCustomValidity('')">
                                <span class="required_span">Company Name</span>
                                <p class="required_tips">Format error</p>
                            </label>
                        </li>
                        <li class="" style="width:100%;">
                            <label class="enquiry_label form_inp body_border_box" inp-types="deep">
                                <textarea class="enquiry_inp enquiry_inp_placeholder" rows="4" autocorrect="off" autocomplete="off"
                                    required="" name="msg" id="msg_v63523b96ccd69" title=""
                                    placeholder="Enter the content of your inquiry" oninvalid="setCustomValidity('Please fill in this field')"
                                    oninput="setCustomValidity('')"></textarea>
                                <span class="required_span">Content</span>
                                <p class="required_tips">Format error</p>
                            </label>
                        </li>
                    </ul>
                    <div class="enquiry_btn_box btn_box">
                        <button id="submit_v63523b96ccd69" type="submit" class="btn" btn-types="deep">
                            <section template-edit="btn_languages" module_name="module">SEND INQUIRY NOW</section>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div>
        <div id="v63523dbd008c4" module_id="5052" bg_img_url="" class="tem_footer_section_02 no_bg_src boxs_m_show"
            module_type="footer" no_index_edit>

            <div class="tem_footer_02">
                <div class="container">
                    <!-- 移动端社媒 -->
                    {{-- <div class="iconfenxiang_boxs_m" style="display: none;">
                        <!-- <div class="go_fast">Go fast</div> -->
                        <div class="iconfenxiang_wauto flex"></div>
                    </div> --}}
                    {{-- <a href="sitemap/a1.html" target="_blank" class="sitemap-box">
                        <span class="sitemap" style="vertical-align:middle;">Sitemap</span>
                    </a> --}}
                    <ul class="footer_ul flex">
                        <li class="footer_li">
                            <div class="li_head">
                                <section template-edit="common_footer_txt0_languages" module_name="footer">
                                    QUICK LINKS
                                </section>
                            </div>

                            <div class="con_ul">
                                <section template-edit="common_footer_txt1_languages" module_name="footer">
                                    <div style="line-height:2.3;"><a data-cke-saved-href="/" href="/"
                                            rel="">Home</a></div>
                                    <div style="line-height:2.3;"><a data-cke-saved-href="{{ route('services') }}"
                                            href="{{ route('services') }}" rel="">Service</a></div>
                                    {{-- <div style="line-height:2.3;"><a data-cke-saved-href="/cases"
                                            href="list-8-1.html" rel="">Cases</a></div>
                                    <div style="line-height:2.3;"><a data-cke-saved-href="/news" href="list-7-1.html"
                                            rel="">News</a></div> --}}
                                    <div style="line-height:2.3;"><a data-cke-saved-href="{{ route('about_us') }}"
                                            href="{{ route('about_us') }}" rel="">About Us</a></div>
                                    <div style="line-height:2.3;"><a data-cke-saved-href="{{ route('contact_us') }}"
                                            href="{{ route('contact_us') }}" rel="">Contact Us</a></div>
                                    <div style="line-height:2.3;">
                                        <p><a data-cke-saved-href="{{ route('privacy_policy') }}"
                                                href="{{ route('privacy_policy') }}" rel="">Privacy
                                                Policy</a></p>
                                    </div>
                                </section>
                            </div>
                        </li>

                        <li class="footer_li">
                            <div class="li_head">
                                <section template-edit="common_footer_txt2_languages" module_name="footer">
                                    <p>PRODUCT</p>
                                </section>
                            </div>

                            <div class="con_ul">
                                <section template-edit="common_footer_txt3_languages" module_name="footer">

                                    <div style="line-height:2.3;">
                                        <?php $footer_products = \App\Models\Product::where('status', 'ACTIVE')->get()->random(1); ?>
                                        @foreach ($footer_products as $footer_product)
                                            <a data-cke-saved-href="{{ route('product', $footer_product->url_key) }}"
                                                href="{{ route('product', $footer_product->url_key) }}"
                                                rel="">{{ $footer_product->name }}</a><br>
                                        @endforeach
                                    </div>
                                </section>
                            </div>
                        </li>

                        <li class="footer_li">
                            <div class="li_head">
                                <section template-edit="common_footer_txt4_languages" module_name="footer">
                                    CONTACT US
                                </section>
                            </div>

                            <div class="con_ul">
                                <section template-edit="common_footer_txt5_languages" module_name="footer">
                                    {{-- <div style="line-height:2.3;"><span
                                            style="color:rgb(255 255 255 / 40%);">Contacts: Mohamad Shata</span></div> --}}

                                    <div style="line-height:2.3;"><span
                                            style="color:rgb(255 255 255 / 40%);">Tel:</span>&nbsp;<a
                                            data-cke-saved-href="tel:+8613141214113"
                                            href="tel:+8613141214113">+8613141214113</a>&nbsp;</div>

                                    <div style="line-height:2.3;"><span
                                            style="color:rgb(255 255 255 / 40%);">Email:</span>&nbsp;<a
                                            data-cke-saved-href="mailto:info@ip-screens.com"
                                            href="mailto:info@ip-screens.com">info@ip-screens.com</a>&nbsp;</div>


                                    <div style="line-height:2.3;"><span
                                            style="color:rgb(255 255 255 / 40%);">WhatsApp:</span>&nbsp;<a
                                            data-cke-saved-href="whatsapp://send?phone=+8613141214113"
                                            href="whatsapp://send?phone=+8613141214113">+8613141214113</a>&nbsp;</div>


                                    <div style="line-height:2.3;"><span style="color:rgb(255 255 255 / 40%);">Address:
                                            Room 306, No. 255 New Jinqiao Road, Pudong New Area,
                                            Shanghai 201206, China</span>
                                    </div>
                                </section>
                            </div>
                        </li>

                        <li class="footer_li">
                            <div class="li_head">
                                <section template-edit="common_footer_txt6_languages" module_name="footer">
                                    <p><a data-cke-saved-href="/"
                                            href="/" rel=""><img alt=""
                                                data-cke-saved-src="{{ asset('assets/images/') }}"
                                                src="{{ asset('assets/images/') }}"
                                                style="width: 250px; height: 61px;"></a></p>
                                </section>
                            </div>

                            <div class="con_ul">
                                <section template-edit="common_footer_txt7_languages" module_name="footer">
                                    <p><span style="color:rgb(255 255 255 / 40%);">Committed to provide a good service
                                            and good quality led panel to our customers.</span></p>
                                </section>
                            </div>

                            <div class="btn_con_box">
                                <div class="btn_box" btn_show="1">
                                    <a href="{{ route('contact_us') }}" target="_self">
                                        <div class="btn" btn-types="deep">
                                            <section template-edit="btn_languages" module_name="module">
                                                CONTACT US
                                            </section>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div>
                                <div class="lan_a">
                                    {{-- <a href="javascript:;" class="icon_bx language_modal_click">
                                        <span class="iconfont icondiqu" style="vertical-align:middle;"></span>
                                        <span class="visible_lgss" style="vertical-align:middle;">
                                            Language
                                        </span>
                                    </a>
                                    <a href="sitemap/a1.html" target="_blank">
                                        <span class="sitemap-line" style="vertical-align:middle;"></span>
                                        <span class="sitemap" style="vertical-align:middle;">Sitemap</span>
                                    </a> --}}
                                </div>
                                <div class="iconfenxiang_boxs footer" footer-social-media="true"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="tem01_copyright no_bg_src" id="v6350debc84016" module_id="5012" no_index_edit
            module_type="footer" module_type1="copy" bg_img_url="">
            <div class="container">
                <div class="copyright_text">
                    <div modular-edit="custom">
                        <div editable="footer_text">
                            Copyright © 2024 IP SCREENS CO. - www.ip-screens.com All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 引用内容 end -->
    <div id="backTop_click" onclick="backtop_click_fun()" ta_click="top" class="back_top font-color"><i
            class="iconfont iconxiangshang1"></i></div>

    <svg style="position:absolute;bottom:100%;right:100%" width="1" height="1">
        <clipPath id="chatOnlineFormPath" clipPathUnits="objectBoundingBox">
            <path d="M0 .4L0 1L1 1L1 .7C.5 -.6 .5 1.7 0 .4z" />
        </clipPath>
    </svg>

    <div class="share_fun_box fun_scr_hide">
        <ul>
            <li class="">
                <div class="text network_bg" data-network="linkedin">
                    <a href="#" target="_blank" rel="nofollow">
                        <div class="share_img_box">
                            <div class="img icon_bgs"></div>
                        </div>
                        <div class="tit">linkedin</div>
                    </a>
                </div>
            </li>
            <li class="share_m_hide">
                <div class="text network_bg" data-network="whatsapp">
                    <a href="#" target="_blank" rel="nofollow">
                        <div class="share_img_box">
                            <div class="img icon_bgs"></div>
                        </div>
                        <div class="tit">whatsapp</div>
                    </a>
                </div>
            </li>
            <li class="share_pc_hide">
                <div class="text network_bg" data-network="whatsapp">
                    <a href="#" target="_blank" rel="nofollow">
                        <div class="share_img_box">
                            <div class="img icon_bgs"></div>
                        </div>
                        <div class="tit">whatsapp</div>
                    </a>
                </div>
            </li>
            <li class="">
                <div class="text network_bg" data-network="facebook">
                    <a href="#" target="_blank" rel="nofollow">
                        <div class="share_img_box">
                            <div class="img icon_bgs"></div>
                        </div>
                        <div class="tit">facebook</div>
                    </a>
                </div>
            </li>
            <li class="">
                <div class="text network_bg" data-network="twitter">
                    <a href="#" target="_blank" rel="nofollow">
                        <div class="share_img_box">
                            <div class="img icon_bgs"></div>
                        </div>
                        <div class="tit">twitter</div>
                    </a>
                </div>
            </li>
            <li>
                <div class="text network_bg" data-network="share">
                    <a href="javascript:;">
                        <div class="share_img_box">
                            <div class="img icon_bgs"></div>
                        </div>
                        <div class="tit">share</div>
                    </a>
                </div>
            </li>
            <li class="network_click_li">
                <div class="img icon_bgs"></div>
            </li>
        </ul>
    </div>
    <div class="share_fun_box2 switch_module_no fun_scr_hide" id="bottomShareBox">
        <ul>
            <li data-network="share">
                <button type="button" class="share_fun_box2__share">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        class="share_fun_box2__icon">
                        <path
                            d="M13.576 17.271l-5.11-2.787a3.5 3.5 0 1 1 0-4.968l5.11-2.787a3.5 3.5 0 1 1 .958 1.755l-5.11 2.787a3.514 3.514 0 0 1 0 1.458l5.11 2.787a3.5 3.5 0 1 1-.958 1.755z" />
                    </svg>
                    Share
                </button>
            </li>
            <li class="share_fun_box2__btn-box">
                <button type="button" class="btn share_fun_box2__inquiry" id="showInquiry" btn-types="deep">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18"
                        class="share_fun_box2__icon">
                        <path
                            d="M17.125839,9.93057662 C17.3305824,9.87918721 17.5475837,9.92518095 17.7138749,10.0552117 C17.8801661,10.1852424 17.9771275,10.3847506 17.9766253,10.5958441 L17.9766253,17.1637402 C17.9766253,17.5427532 17.6704208,17.8479584 17.2924052,17.8479584 L0.707594815,17.8479584 C0.525955926,17.8479584 0.35177103,17.7757347 0.223426519,17.6472031 C0.0950820074,17.5186715 0.0231118462,17.3443816 0.0233758954,17.1627429 L0.0233758954,10.5958441 C0.0233758954,10.1510026 0.442285714,9.82385454 0.874161029,9.93157402 L8.83343376,13.0444675 C8.94314805,13.0713974 9.05685195,13.0713974 9.16556882,13.0444675 L17.125839,9.93257144 L17.125839,9.93057662 Z M15.9818182,8.68282597 L8.90025975,11.4177039 L1.81969869,8.68282597 L1.81969869,1.59628053 C1.82069611,0.728540269 2.52486234,0.0233766234 3.39459741,0.0233766234 L14.4059221,0.0233766234 C15.2766546,0.0233766234 15.9818182,0.726545455 15.9818182,1.59628053 L15.9818182,8.68282597 Z M7.25753767,5.13705974 L13.5511481,5.13705974 L13.5511481,3.56315844 L7.25753767,3.56315844 L7.25753767,5.13705974 Z M4.46082078,8.25892986 L6.03472208,8.25892986 L6.03472208,6.68502856 L4.46082078,6.68502856 L4.46082078,8.25793247 L4.46082078,8.25892986 Z M4.46082078,5.13705974 L6.03472208,5.13705974 L6.03472208,3.56315844 L4.46082078,3.56315844 L4.46082078,5.13705974 Z M7.25753767,8.25892986 L13.5511481,8.25892986 L13.5511481,6.68502856 L7.25753767,6.68502856 L7.25753767,8.25793247 L7.25753767,8.25892986 Z" />
                    </svg>
                    <span>Send Inquiry</span>
                </button>
            </li>
            <li class="share_fun_box2__btn-box">
                <button type="button" class="btn chat_online_clicks" btn-types="deep">
                    <svg width="20" height="17" viewBox="0 0 20 17" class="share_fun_box2__icon">
                        <path
                            d="M8.34648449,7.37780455 C9.75187587,6.81309866 10.7478925,5.4388328 10.7478925,3.83394163 C10.7478925,1.72748494 9.03421028,0.0138026772 6.92805002,0.0138026772 C4.82188976,0.0138026772 3.10791106,1.72778138 3.10791106,3.83394163 C3.10791106,5.4388328 4.10422417,6.81309864 5.50961557,7.37780455 C2.37572024,8.03410839 0.0149235827,10.8182121 0.0149235827,14.1439 C0.0149235827,14.9573136 0.584075965,15.2258824 1.04176933,15.4419824 L1.06844835,15.4532469 C2.90900415,16.1030292 5.57127372,16.2764428 6.85394163,16.2764428 C8.25310791,16.2764428 10.9912645,16.0496711 12.8104771,15.421232 C13.4940528,15.1588884 13.84088,14.7290597 13.84088,14.1441964 C13.8411765,10.8182121 11.4800834,8.03410837 8.34648449,7.37780455 L8.34648449,7.37780455 Z M18.947837,0.165873091 L13.5886151,0.165873091 C12.9592867,0.165873091 12.7671978,0.833737835 12.7671978,1.41652616 L12.7671978,2.55186661 C12.7671978,2.95116258 12.5333117,3.41270961 12.4434924,3.54284392 C12.3776841,3.63740622 11.8918295,4.01535898 11.5248448,4.3082353 C11.4362112,4.37908291 11.3733673,4.49498843 11.4027142,4.60466882 C11.4317647,4.71375636 11.5103196,4.79586844 11.6223715,4.81306159 C11.9392589,4.86197313 12.3029829,4.92837423 12.5101899,4.97610004 C12.5134507,5.62558593 13.1267717,5.62558593 13.3588791,5.62558593 L18.8971468,5.62380732 C19.5083928,5.62380732 19.8816026,5.21591478 19.8816026,4.63194071 L19.8816026,1.4168226 C19.8816026,0.831366378 19.5685688,0.165873091 18.947837,0.165873091 L18.947837,0.165873091 Z M16.6208337,4.31594256 L14.2493655,4.31594256 C14.086327,4.31594256 13.9529319,4.18254746 13.9529319,4.01950904 C13.9529319,3.85647061 14.086327,3.72307549 14.2493655,3.72307549 L16.6208337,3.72307549 C16.7838722,3.72307549 16.9172672,3.85647059 16.9172672,4.01950904 C16.9172672,4.18254748 16.7835757,4.31594256 16.6208337,4.31594256 Z M17.8065679,3.13020843 L14.2493655,3.13020843 C14.086327,3.13020843 13.9529319,2.99681333 13.9529319,2.8337749 C13.9529319,2.67073648 14.086327,2.53734136 14.2493655,2.53734136 L17.8065679,2.53734136 C17.9696063,2.53734136 18.1030014,2.67073646 18.1030014,2.8337749 C18.1030014,2.99681335 17.9693099,3.13020843 17.8065679,3.13020843 Z M18.6958685,1.94447429 L14.2493655,1.94447429 C14.086327,1.94447429 13.9529319,1.81107919 13.9529319,1.64804077 C13.9529319,1.48500234 14.086327,1.35160722 14.2493655,1.35160722 L18.6958685,1.35160722 C18.8589069,1.35160722 18.992302,1.48500232 18.992302,1.64804077 C18.992302,1.81107921 18.8586105,1.94447429 18.6958685,1.94447429 Z" />
                    </svg>
                    <span>Chat Now</span>
                </button>
            </li>
        </ul>
    </div>
    <div id="bottomInquiry" class="bottom-inquiry-box bottom-inquiry-box--hidden">
        <div class="bottom-inquiry-box__bg" data-inquiry-close></div>
        <form action="#" class="bottom-inquiry-box__form">
            <button type="button" data-inquiry-close class="bottom-inquiry-box__close iconfont iconguanbi"></button>
            <h4 class="bottom-inquiry-box__title">Send your inquiry</h4>
            <input type="hidden" name="enquiry_type" value="0">
            <input type="hidden" name="visitlength" value="====1711972871====">
            <input type="hidden" name="source" value="0">
            <input type="hidden" name="id" value="0">
            <div class="bottom-inquiry-box__scroll">
                <label class="bottom-inquiry-box__label">
                    <input class="bottom-inquiry-box__input" title autocorrect="off" autocomplete="off" required
                        name="name" placeholder="Enter your name"
                        oninvalid="setCustomValidity('Please fill in this field')" oninput="setCustomValidity('')" />
                    <span class="bottom-inquiry-box__tip">Name</span>
                </label>
                <label class="bottom-inquiry-box__label">
                    <input class="bottom-inquiry-box__input" title autocorrect="off" autocomplete="off" required
                        name="email" type="email" placeholder="Enter your e-mail"
                        oninvalid="setCustomValidity('Please fill in this field')" oninput="setCustomValidity('')" />
                    <span class="bottom-inquiry-box__tip">E-mail</span>
                    <span class="bottom-inquiry-box__error">Format error</span>
                </label>
                <label class="bottom-inquiry-box__label">
                    <input class="bottom-inquiry-box__input" title autocorrect="off" autocomplete="off"
                        name="phone" placeholder="Enter your phone"
                        oninvalid="setCustomValidity('Please fill in this field')" oninput="setCustomValidity('')" />
                    <span class="bottom-inquiry-box__tip">Phone/WhatsApp/Skype</span>
                </label>
                <label class="bottom-inquiry-box__label">
                    <input class="bottom-inquiry-box__input" title autocorrect="off" autocomplete="off"
                        name="company" placeholder="Enter your company name"
                        oninvalid="setCustomValidity('Please fill in this field')" oninput="setCustomValidity('')" />
                    <span class="bottom-inquiry-box__tip">Company Name</span>
                </label>
                <label class="bottom-inquiry-box__label">
                    <textarea class="bottom-inquiry-box__input" rows="3" title autocorrect="off" autocomplete="off" required
                        name="msg" placeholder="Enter the content of your inquiry"
                        oninvalid="setCustomValidity('Please fill in this field')" oninput="setCustomValidity('')"></textarea>
                    <span class="bottom-inquiry-box__tip">Content</span>
                </label>
            </div>
            <button type="submit" class="bottom-inquiry-box__btn bg-color" id="submit_main">SEND INQUIRY
                NOW</button>
        </form>
    </div>

    <div class="language_modal_mask"></div>
    <div class="language_modal_blade">
        <div class="lang_head title">
            <span>Choose a different language</span>
            <div class="head_close_box" onclick="$('.language_modal_mask').click();">
                <span class="head_close">╳</span>
            </div>
        </div>
        <div class="language_con">
            <a href="/" class="language_modal_a  font-color" title="English"
                style="display: flex;flex-direction: column;align-items: center;">

                <div class="icon-en"></div>
                <span>English</span>
            </a>
            <a href="vi.html" class="language_modal_a " title="Tiếng Việt"
                style="display: flex;flex-direction: column;align-items: center;">

                <div class="icon-vi"></div>
                <span>Tiếng Việt</span>
            </a>
            <a href="tr.html" class="language_modal_a " title="Türkçe"
                style="display: flex;flex-direction: column;align-items: center;">

                <div class="icon-tr"></div>
                <span>Türkçe</span>
            </a>
            <a href="ru.html" class="language_modal_a " title="русский"
                style="display: flex;flex-direction: column;align-items: center;">

                <div class="icon-ru"></div>
                <span>русский</span>
            </a>
            <a href="pt.html" class="language_modal_a " title="Português"
                style="display: flex;flex-direction: column;align-items: center;">

                <div class="icon-pt"></div>
                <span>Português</span>
            </a>
            <a href="ko.html" class="language_modal_a " title="한국어"
                style="display: flex;flex-direction: column;align-items: center;">

                <div class="icon-ko"></div>
                <span>한국어</span>
            </a>
            <a href="ja.html" class="language_modal_a " title="日本語"
                style="display: flex;flex-direction: column;align-items: center;">

                <div class="icon-ja"></div>
                <span>日本語</span>
            </a>
            <a href="it.html" class="language_modal_a " title="italiano"
                style="display: flex;flex-direction: column;align-items: center;">

                <div class="icon-it"></div>
                <span>italiano</span>
            </a>
            <a href="fr.html" class="language_modal_a " title="français"
                style="display: flex;flex-direction: column;align-items: center;">

                <div class="icon-fr"></div>
                <span>français</span>
            </a>
            <a href="es.html" class="language_modal_a " title="Español"
                style="display: flex;flex-direction: column;align-items: center;">

                <div class="icon-es"></div>
                <span>Español</span>
            </a>
            <a href="de.html" class="language_modal_a " title="Deutsch"
                style="display: flex;flex-direction: column;align-items: center;">

                <div class="icon-de"></div>
                <span>Deutsch</span>
            </a>
            <a href="ar.html" class="language_modal_a " title="العربية"
                style="display: flex;flex-direction: column;align-items: center;">

                <div class="icon-ar"></div>
                <span>العربية</span>
            </a>
        </div>
        <div class="active_locale_v">Current language：English</div>
    </div>
    <div class="head_sousuos_modal">
        <div class="mengban head_sousuos_close"></div>
        <div class="close_btn head_sousuos_close  iconfont iconguanbi4"></div>
        <form action="https://www.ledIP SCREEN.com/search" class="sousuos_box" onsubmit="return head_form_fun(this);">
            <div class="search_cons">
                <input type="text" name="search" placeholder="SEARCH" required autocomplete="off"
                    autocorrect="off">
                <button class="bg-color">
                    <span class="iconfont iconsousuo"></span>
                    <span class="btn_txt">SEARCH</span>
                </button>
                <i class="iconfont iconsousuo"></i>
            </div>
        </form>
    </div>


    <div class="import_template_box">

        <div class="google_dialog_box" id='google_dialog_box'>
            <div class="google_dialog_box__dialog">
                <div id="google_dialog"></div>
            </div>
        </div>
    </div>

    <svg style="position:absolute;bottom:100%;right:100%" width="1" height="1">
        <clipPath id="chatOnlineFormPath" clipPathUnits="objectBoundingBox">
            <path d="M0 .4L0 1L1 1L1 .7C.5 -.6 .5 1.7 0 .4z" />
        </clipPath>
    </svg>
    <div id="inquiry-dialog" style="display: none;">
        <div class="inquiry-dialog  inquiry-dialog--1">
            <div class="header">
                <div class="header-title">Send Your Inquiry</div>
                <div class="header_btn" onclick="onClose()">
                    <i class="iframe_conceal iconfont iconguanbi4"></i>
                </div>
            </div>
            <form class="" onsubmit="return inquiryDialogFromSubmit(this)">
                <div class="body">
                    <div class="inquiry_from">
                        <div class="form-group">
                            <label><i class="red">*</i>Name</label>
                            <input type="text" class="form-control" required name="name"
                                oninput="setCustomValidity('')"
                                oninvalid="this.setCustomValidity('Please fill in this field')" />
                        </div>
                        <div class="form-group">
                            <label>
                                Phone
                            </label>
                            <input type="text" class="form-control" oninput="setCustomValidity('')"
                                name="phone" oninvalid="this.setCustomValidity('Please fill in this field')">
                        </div>
                        <div class="form-group">
                            <label><i class="red">*</i>E-mail</label>
                            <input type="text" class="form-control" required oninput="setCustomValidity('')"
                                onchange="checkemail(this)" name="email" oninvalid="checkemail(this,true)" />
                        </div>
                        <div class="form-group">
                            <label><i class="red">*</i>Content</label>
                            <textarea class="form-control" required oninput="setCustomValidity('')" style="resize: none;height: auto;"
                                name="content"></textarea>
                        </div>
                    </div>
                </div>
                <div class="dialog-footer el-dialog__footer">
                    <button type="submit" id="submit_popup_inquiry" class="dialog-foot-btn">
                        Send Inquiry Now
                    </button>
                </div>
            </form>
        </div>
    </div>


    <div class="v-modal" tabindex="0" style="z-index: 1000003 ; display: none"></div>
    <div id="captcha-dialog" class="captcha-dialog__wrapper" style="display: none">
        <div class="captcha-dialog">
            <div class="captcha-dialog__header">
                <span class="captcha-dialog__title">
                    Please enter the calculation result.
                </span>
                <div class="captcha-dialog__headerbtn"><i class="iframe_conceal iconfont iconguanbi4"></i></div>
            </div>
            <div class="captcha-dialog__body">
                <div class="captcha-dialog__phoneTitle">
                    Please enter the calculation result.
                </div>
                <div class="captcha-content">
                    <input type="text" name="captchaCode" class="captcha-content__code" />
                    <div class="captcha-content__box" style="display: flex">
                        <div class="captcha-content__img"><img src="#" alt=""></div>
                        <div class="captcha-content__refresh"><img src="{{ asset('assets/images/refresh3.png') }}"
                                alt="" style="height:24px">
                        </div>
                    </div>
                </div>
                <div class="captcha-dialog__tips">
                    <span class="captcha-dialog__error">Verification failed. Please re-enter. </span>
                </div>
            </div>
            <div class="captcha-dialog__footer">
                <div id="close2" class="btn btn-submit">
                    <div style="font-weight: 400; color: #ffffff; line-height: 20px">
                        submit
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.scripts')

</body>

</html>
