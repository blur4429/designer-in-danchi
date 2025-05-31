<?php $url = get_template_directory_uri(); ?>

<main class="onscroll loading">

    <!--1-->
    <section class="intro align-items-center m-0 ">
        <div class="container h-75 p-xl-5">
            <!--bg-->
            <div class="intro__title-pre h-100 rounded-3"></div>
            <p class="intro__title-sub text-xxl-end poppins reg">&nbsp;Portfolio 2025</p>
        </div>
        <div class="title flex-column h-100"></div>

        <span class="intro__info poppins s-bold"><span>Scroll</span></span>
    </section>

    <!--2　　data-effect29-->
    <section>
        <div class="content mb-5">
            <h2 class="content__title poppins med" data-splitting data-effect29>
                <span>Web Design</span>
                <span>Frontend</span>
                <span>Graphic</span>
            </h2>
        </div>
    </section>

    <!--3-->
    <section id="about" class="slidein slidein-bottom">
        <div class="content">
            <h2 class="content__title text-center slidein-bottom mb-100"><span class="font-16">
                    <img src="<?php echo $url;?>/img/about.svg" alt="about"></span>
            </h2>

            <div class="col col-lg-3  mx-auto slidein slidein-bottom mb-5">
                <img class="rounded-circle" src="<?php echo $url;?>/img/self.jpg" alt="self">
            </div>


            <div>
                <h3 class="font-small mb-2">
                    神奈川県出身、東京のとある団地に住むデザイナーです。</h3>

                <p class="font-small mb-2">
                    長らく事務系派遣に従事するもリーマンショックを機に一念発起しWebデザイナーに転身、
                    2024年にお世話になった企業からフリーのWebデザイナーとして巣立ちました。
                    シンプルなデザインが好きですが、仕事以外に暮らしぶりにもそれを反映させています。新しいものを買う前にありモノを工夫して使う、作れるものは自分で作るなど、最小のリソースでいかに心地よくすてきに暮らすかを考え、実践することを楽しんでいます。
                </p>

                <p class="font-small">この暮らしの舞台として団地はぴったりです。最初は古くて狭くてイケてないという印象でしたが、全戸日当り抜群、手入れされた外壁や樹木などすてきなところもあるのです。
                </p>

                <p class="font-small">
                    野鳥たちのかわいらしい鳴声、公園で遊ぶ子供達の笑い声、お年寄りの井戸端会議など、癒しもたくさんあります。
                    このような環境の中で日々制作を行っています。
                </p>
            </div>

        </div>
        <!--btn1-->
        <div class="row justify-content-center slidein-bottom my-100">
            <div class="col-9 col-lg-4 mb-5">
                <a class="btn-l btn-right larger h-100 d-block poppins reg p-3" href="/works" target="_blank">WORKS</a>
            </div>
        </div>
    </section>

    <!--fixed-bg-->
    <div class="container-fluid fixed-bg my-100"></div>

    <!--4　　data-effect27-->
    <section>

        <h2 class="content__title small text-center ">
            <span><img src="<?php echo $url;?>/img/skills.svg" alt="skills"></span>
        </h2>

        <div class="container mb-5">
            <h3 class="content__title text-center mb-5" data-splitting data-effect27>
                <span class="poppins s-bold font-medium">
                    AdobeCC Canva Webflow Figma AWS Github Git Docker Wordpress
                    scss HTML php javascript jQuery Marketo
                </span>
            </h3>
            <!--btn2-->
            <div class="row justify-content-center slidein slidein-bottom my-100">
                <div class="col-9 col-lg-4 mb-5">
                    <a class="btn-l btn-right larger h-100 d-block poppins reg p-3" href="/contact"
                        target="_blank">CONTACT</a>
                </div>
            </div>
        </div>
    </section>

</main>