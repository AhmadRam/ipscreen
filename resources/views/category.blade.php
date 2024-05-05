@extends('layouts.layout')


@section('page_title')
    {{ $category->name }}
@endsection

@section('content')
    <div class="content_box">
        <div class="tem_breadcrumb_1 no_bg_src" id="v6352425e68b16" module_id="5005"
            bg_img_url="https://img001.video2b.com/1818/file_01666336131775.jpg" module_type="module">


            <div modular-edit="custom">
                <div class="absolute_box">
                    <span video-type="" video-src="" video-m3u8src="" playback_mode=""></span>
                </div>
                <div class="text">
                    <div class="container">
                        <div class="text">
                            <h1 class="top_title">{{ $category->name }}</h1>
                        </div>
                        <div class="top_describe">
                            <span><a href="/" style="display: inline;">HOME</a></span>
                            <i>&gt;</i>
                            <span><a href="{{ route('category', $category->slug) }}" style="display: inline;">CATEGORY
                                    PRODUCTS</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tem_data_list_1 no_bg_src content-section" id="v6352425e68b28" module_id="5000" bg_img_url=""
            module_type="module">
            <div class="container">

                <div class="li_container">
                    <div class="li_nav_left">
                        <div class="news_details_left_block right_navigation_menus left_con_colors">
                            <h2 class="title">CATEGORIES</h2>
                            <ul class="right_nav">
                                @foreach ($categories as $catego)
                                    <?php $has_children = $catego->children->count(); ?>
                                    <li class="{{ $has_children ? 'xia' : '' }}">
                                        <div class="text">
                                            <a href="{{ route('category', $catego->slug) }}">{{ $catego->name }}</a>
                                            @if ($has_children)
                                                <i class="i_con iconfont iconios-arrow-forward"></i>
                                            @endif
                                        </div>
                                        @if ($has_children)
                                            <ul class="nav_ul">
                                                @foreach ($catego->children as $child)
                                                    <li class="">
                                                        <div class="text ">
                                                            <a
                                                                href="{{ route('category', $child->slug) }}">{{ $child->name }}</a>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="sticky_box inquiry_right_sticky_box" btn_show="1">
                            <div class="sticky_inquiry product_enquiry_box news_details_left_block left_con_colors">
                                <div class="sticky_inquiry_head title">
                                    <section template-edit="title_languages" module_name="module">Send your inquiry
                                    </section>
                                </div>
                                <form no_form_enovation action="https://www.ledIP SCREEN.com/add-enquiry" class="fl_box_s"
                                    onsubmit="return form_submit(this);">
                                    <input type="hidden" name="enquiry_type" id="enquiry_type_v6352425e68b28"
                                        value="0">
                                    <input type="hidden" name="visitlength" id="visitlength_v6352425e68b28"
                                        value="====1711973326====">
                                    <input type="hidden" name="source" id="source_v6352425e68b28" value="0">
                                    <input type="hidden" name="id" id="id_v6352425e68b28" value="0">
                                    <ul class="fl_row_s">
                                        <li class="fl12_s">
                                            <label class="enquiry_label">
                                                <input type="text" class="enquiry_inp enquiry_inp_placeholder" title
                                                    placeholder="Enter your name" autocorrect="off" autocomplete="off"
                                                    required name="name" id="name_v6352425e68b28"
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
                                                    required name="email" id="email_v6352425e68b28"
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
                                                    name="phone" id="phone_v6352425e68b28"
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
                                                    autocomplete="off" name="company" id="company_v6352425e68b28"
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
                                                    id="msg_v6352425e68b28" oninvalid="setCustomValidity('Please fill in this field')"
                                                    oninput="setCustomValidity('')"></textarea>
                                                <span class="required_span"><span
                                                        class="font-color">*</span>Content</span>
                                                <div class="required_tips">Format error</div>
                                            </label>
                                        </li>
                                    </ul>
                                    <div class="btn_box">
                                        <button class="btn" id="submit_data_list_1" btn-types="deep"
                                            btn_screen="1">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="products_ul_box">

                        <div class="mobile-reverse">
                            <div class="products_text">
                                <div class="describe">
                                    <p>{!! $category->description !!}</p>
                                </div>
                            </div>
                            <div>
                                <div class="ai_products_list_ul">
                                    <ul>
                                        @foreach ($products as $product)
                                            <li class="list_row_li" modular-edit="custom" list_cols="3"
                                                mobile_list_cols="">
                                                <div class="li_border">
                                                    <a target="_blank" href="show-20-35-1.html">
                                                        <div class="img_par no_img_src list_module_1"
                                                            img_par_proportion="2" style="">
                                                            <?php $image = $product->images ? json_decode($product->images)[0] : ''; ?>

                                                            <img video-img="{{ Voyager::image($image) }}"
                                                                img_preview_gif="" alt="{{ $product->name }}"
                                                                video_w="600"
                                                                onerror="onerror=null;src='{{ Voyager::image($image) }}'"></img>
                                                        </div>
                                                    </a>
                                                    <div class="text">
                                                        <a target="_blank" href="show-20-35-1.html">
                                                            <div class="title" title="{{ $product->name }}"
                                                                title_lengths="1">{{ $product->name }}
                                                            </div>

                                                            <div class="describe" title="" title_lengths=""></div>

                                                        </a>
                                                        <div class="date" btn_show="0">
                                                            {{ $product->created_at->format('Y/m/d H:i:s') }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>

                                </div>
                                <div class="tem_pagination_1">
                                    {{ $products->links('layouts.pagination') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
