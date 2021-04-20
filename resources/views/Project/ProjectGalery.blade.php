<!-- section begin -->
<section id="section-portfolio" class="no-top no-bottom">
    <div class="container">

        <div class="spacer-single"></div>

        <!-- portfolio filter begin -->
        <div class="row">
            <div class="col-md-12 text-center">
                <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                    <li><a href="#" data-filter="*" class="selected">All Projects</a></li>
                    <li><a href="#" data-filter=".nhapho">Nhà Phố</a></li>
                    <li><a href="#" data-filter=".DCH">Decor Căn Hộ</a></li>
                    <li><a href="#" data-filter=".office">Office</a></li>
                    <li><a href="#" data-filter=".commercial">Commercial</a></li>
                </ul>

            </div>
        </div>
        <!-- portfolio filter close -->

    </div>

    <div id="gallery" class="gallery full-gallery de-gallery pf_full_width wow fadeInUp" data-wow-delay=".3s">

        <!-- gallery item -->
{{--      //  @dd($all_project)--}}
        @foreach($all_project as $p)
{{--            @dd($p)--}}
        <div class="item  {{ $p->TagName }} ">
            <div class="picframe">
                <!-- class="simple-ajax-popup-align-top" -->
                <a class="simple-ajax-popup-align-top" href="{{ route('project_detail', ['ProDetailID' => $p->ProjectID ]) }}">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name"> {{ $p->ProjectName }} </span>
                                    </span>
                                </span>
                </a>
                <img src=" {{ asset("$p->images") }} " alt="" />
            </div>
        </div>
    @endforeach
        <!-- close gallery item -->


    </div>

</section>
<!-- section close -->
