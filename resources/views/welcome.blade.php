@extends('layouts.home')


@section('content')
    <div id="ei-slider" class="ei-slider">
                <div class="ei-slider-loading" style="display: none;">Loading</div>
                <ul class="ei-slider-large">
                    <li style="opacity: 0; z-index: 1;">
                        <a href="#">
                            <img width="660" height="330" src="{{ asset('img/1.jpg') }}" class="attachment-slider size-slider">
                        </a>
                    </li>

                    <li style="opacity: 0; z-index: 1;">
                        <a href="#">
                            <img width="660" height="330" src="{{ asset('img/2.jpg') }}" class="attachment-slider size-slider">
                        </a>
                    </li>
                    <li style="opacity: 0; z-index: 1;">
                        <a href="#">
                            <img width="660" height="330" src="{{ asset('img/3.jpg') }}" class="attachment-slider size-slider">
                        </a>
                    </li>
                    <li style="opacity: 0; z-index: 1;">
                        <a href="#">
                            <img width="660" height="330" src="{{ asset('img/4.jpg') }}" class="attachment-slider size-slider">
                        </a>
                    </li>
                    <li style="opacity: 0; z-index: 1;">
                        <a href="#">
                            <img width="660" height="330" src="{{ asset('img/5.jpg') }}" class="attachment-slider size-slider">
                        </a>
                    </li>
                    <li style="opacity: 0; z-index: 1;">
                        <a href="#">
                            <img width="660" height="330" src="{{ asset('img/6.jpg') }}" class="attachment-slider size-slider">
                        </a>
                    </li>
                    <li style="opacity: 0; z-index: 1;">
                        <a href="#">
                            <img width="660" height="330" src="{{ asset('img/7.jpg') }}" class="attachment-slider size-slider">
                        </a>
                    </li>
                </ul>
                <ul class="ei-slider-thumbs" style="display: block; max-width: 700%;">
                    <li class="ei-slider-element" style="max-width: 100%; width: 14.2857%; left: 0.03125px;">Current</li>
                    <li style="max-width: 100%; width: 14.2857%;"><a href="#">Slide 2</a><img width="272" height="125" src="{{ asset('img/1.jpg') }}" class="attachment-tie-medium size-tie-medium" ></li>
                    <li style="max-width: 100%; width: 14.2857%;"><a href="#">Slide 2</a><img width="272" height="125" src="{{ asset('img/2.jpg') }}" class="attachment-tie-medium size-tie-medium" ></li>
                    <li style="max-width: 100%; width: 14.2857%;"><a href="#">Slide 2</a><img width="272" height="125" src="{{ asset('img/3.jpg') }}" class="attachment-tie-medium size-tie-medium" ></li>
                    <li style="max-width: 100%; width: 14.2857%;"><a href="#">Slide 2</a><img width="272" height="125" src="{{ asset('img/4.jpg') }}" class="attachment-tie-medium size-tie-medium" ></li>
                    <li style="max-width: 100%; width: 14.2857%;"><a href="#">Slide 2</a><img width="272" height="125" src="{{ asset('img/5.jpg') }}" class="attachment-tie-medium size-tie-medium" ></li>
                    <li style="max-width: 100%; width: 14.2857%;"><a href="#">Slide 2</a><img width="272" height="125" src="{{ asset('img/6.jpg') }}" class="attachment-tie-medium size-tie-medium" ></li>
                    <li style="max-width: 100%; width: 14.2857%;"><a href="#">Slide 2</a><img width="272" height="125" src="{{ asset('img/7.jpg') }}" class="attachment-tie-medium size-tie-medium" ></li>
                </ul>
                <!-- ei-slider-thumbs -->
            </div>

            <script type="text/javascript">
                jQuery(function() {
                    jQuery('#ei-slider').eislideshow({
                        animation: 'center',
                        autoplay: true,
                        slideshow_interval: 3000,
                        speed: 800,
                        titlesFactor: 0.60,
                        titlespeed: 1000,
                        thumbMaxWidth: 100
                    });
                });
            </script>

            {{--  <section class="cat-box scroll-box">
                <div class="cat-box-title">
                    <h2><a href="http://gopp.gov.eg/category/plans/">مخططات</a></h2>
                    <div class="stripe-line"></div>
                </div>
                <!-- post-thumbnail /-->
                <div class="cat-box-content">
                    <div id="slideshow40" class="group_items-box">
                        <div class="group_items">
                            <div class="scroll-item">

                                <div class="post-thumbnail">
                                    <a href="http://gopp.gov.eg/category/plans/national-plans/" title="رابط ثابت لـ مخططات قومية" rel="bookmark">
                                        <img width="272" height="125" src="./file/Visions-272x125.jpg" class="attachment-tie-medium size-tie-medium" alt="مخططات قومية" title="مخططات قومية"> <span class="overlay-icon"></span>
                                    </a>
                                </div>
                                <!-- post-thumbnail /-->

                                <h3 class="post-box-title"><a href="http://gopp.gov.eg/category/plans/national-plans/" title="رابط ثابت لـ مخططات قومية" rel="bookmark">مخططات قومية</a></h3>
                                <p class="post-meta">
                                </p>
                            </div>
                            <div class="scroll-item">

                                <div class="post-thumbnail">
                                    <a href="http://gopp.gov.eg/category/plans/gavernorates-plans/" title="رابط ثابت لـ مخططات اقليمية ومحافظات" rel="bookmark">
                                        <img width="272" height="125" src="./file/temp_b14acd12A7ff1A470bA9f17Ad0fe28fdbcdc-272x125.gif" class="attachment-tie-medium size-tie-medium" alt="مخططات اقليمية ومحافظات" title="مخططات اقليمية ومحافظات">
                                        <span class="overlay-icon"></span>
                                    </a>
                                </div>
                                <!-- post-thumbnail /-->

                                <h3 class="post-box-title"><a href="http://gopp.gov.eg/category/plans/gavernorates-plans/" title="رابط ثابت لـ مخططات اقليمية ومحافظات" rel="bookmark">مخططات اقليمية ومحافظات</a></h3>
                                <p class="post-meta">
                                </p>
                            </div>
                            <div class="scroll-item">

                                <div class="post-thumbnail">
                                    <a href="http://gopp.gov.eg/%d8%a7%d9%84%d9%85%d8%ae%d8%b7%d8%b7-%d8%a7%d9%84%d8%a7%d8%b3%d8%aa%d8%b1%d8%a7%d8%aa%d9%8a%d8%ac%d9%8a-%d8%a7%d9%84%d8%b9%d8%a7%d9%85-%d9%84%d9%84%d9%85%d8%af%d9%86-%d8%a7%d9%84%d9%85%d8%b5%d8%b1/" title="رابط ثابت لـ المخططات الاستراتيجية العامة للمدن"
                                        rel="bookmark">
                                        <img width="272" height="125" src="./file/المخـططات-العمـرانيـة-الإستراتيجية_Page_14_Image_0001-272x125.jpg" class="attachment-tie-medium size-tie-medium" alt="المخططات الاستراتيجية العامة للمدن" title="المخططات الاستراتيجية العامة للمدن">                                        <span class="overlay-icon"></span>
                                    </a>
                                </div>
                                <!-- post-thumbnail /-->

                                <h3 class="post-box-title"><a href="http://gopp.gov.eg/%d8%a7%d9%84%d9%85%d8%ae%d8%b7%d8%b7-%d8%a7%d9%84%d8%a7%d8%b3%d8%aa%d8%b1%d8%a7%d8%aa%d9%8a%d8%ac%d9%8a-%d8%a7%d9%84%d8%b9%d8%a7%d9%85-%d9%84%d9%84%d9%85%d8%af%d9%86-%d8%a7%d9%84%d9%85%d8%b5%d8%b1/"
                                        title="رابط ثابت لـ المخططات الاستراتيجية العامة للمدن" rel="bookmark">المخططات الاستراتيجية العامة للمدن</a></h3>
                                <p class="post-meta">
                                </p>
                            </div>
                            <div class="scroll-item">

                                <div class="post-thumbnail">
                                    <a href="http://gopp.gov.eg/category/plans/villages-plans/" title="رابط ثابت لـ المخططات الاستراتيجية العامة للقرى والعزب" rel="bookmark">
                                        <img width="260" height="125" src="./file/المخـططات-العمـرانيـة-الإستراتيجية_Page_15_Image_0008-260x125.jpg" class="attachment-tie-medium size-tie-medium" alt="المخططات الاستراتيجية العامة للقرى والعزب" title="المخططات الاستراتيجية العامة للقرى والعزب">                                        <span class="overlay-icon"></span>
                                    </a>
                                </div>
                                <!-- post-thumbnail /-->

                                <h3 class="post-box-title"><a href="http://gopp.gov.eg/category/plans/villages-plans/" title="رابط ثابت لـ المخططات الاستراتيجية العامة للقرى والعزب" rel="bookmark">المخططات الاستراتيجية العامة للقرى والعزب</a></h3>
                                <p class="post-meta">
                                </p>
                            </div>
                        </div>



                        <div class="clear"></div>
                    </div>
                    <div id="nav40" class="scroll-nav"></div>
                </div>
                <!-- .cat-box-content /-->
            </section>  --}}
            <div class="clear"></div>
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    var vids = jQuery("#slideshow40 .scroll-item");
                    for (var i = 0; i < vids.length; i += 4) {
                        vids.slice(i, i + 4).wrapAll('<div class="group_items"></div>');
                    }
                    jQuery(function() {
                        jQuery('#slideshow40').cycle({
                            fx: 'scrollHorz',
                            timeout: 3000,
                            pager: '#nav40',
                            slideExpr: '.group_items',
                            speed: 300,
                            pause: true
                        });
                    });
                });
            </script>
@stop
