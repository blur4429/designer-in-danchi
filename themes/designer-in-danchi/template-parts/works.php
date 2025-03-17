<?php $url = get_template_directory_uri(); ?>
<main>
    <div class="pagetitle container-fluid d-md-flex flex-md-wrap align-items-end px-3 px-lg-5 pb-3 bg-blue">
        <h1 class="me-4 mb-2 mb-md-0">Works</h1>
        <ul class="row align-items-end smaller pb-2">
            <li class="col-auto"><a class="me-1" href="#web">⚫︎&nbsp;Web sites</a></li>
            <li class="col-auto"> <a class="me-1" href="#lp">⚫︎&nbsp;Landing page</a></li>
            <li class="col-auto"> <a class="me-1" href="#banners">⚫︎&nbsp;Banners</a></li>
            <li class="col-auto"><a class="" href="#others">⚫︎&nbsp;Others</a></li>
        </ul>
    </div>
     <!--breadcrumb-->
     <div class="container breadcrumb fw-light p-2 mt-5">
        <?php if (function_exists('custom_breadcrumb')) {
          custom_breadcrumb();
        } ?>
    </div>
    <!--web sites-->

    <section id="web" class="container">
        <!--row1-->
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col col-lg-2 ">
                <h2 id="profile" class="mb-3">⚫︎ Web sites</h2>
            </div>
            <div class="col col-lg-10 ">
                <!--row2-->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-scale px-3 px-lg-0">

                    <div class=" col px-3 mb-5">
                        <a href="https://willof-construction.co.jp/" target="_blank">
                            <img class="gscale" src="<?php echo $url; ?>/img/works_web1.jpg" alt="web1">
                            <p class="smaller fw-bold pt-2">willof-construction.jp</p>
                            <span class="x-small gray2">コーポレートサイト<br>Direction</span>
                        </a>
                    </div>

                    <div class=" col px-3 mb-5">
                        <a href="https://start.willof-construction.co.jp/" target="_blank">
                            <img class="gscale" src="<?php echo $url; ?>/img/works_web2.jpg" alt="web2">
                            <p class="smaller fw-bold pt-2">start.willof-construction.co.jp</p>
                            <span class="x-small gray2">新卒中途採用サイト<br>Direction / Renual Design / Cording</span>
                        </a>
                    </div>

                    <div class=" col px-3 mb-5">
                        <a href="https://sekokan-navi.jp/saiyo/" target="_blank">
                            <img class="gscale" src="<?php echo $url; ?>/img/works_web3.jpg" alt="web3">
                            <p class="smaller fw-bold pt-2">sekokan-navi.jp/saiyo</p>
                            <span class="x-small gray2">企業採用後担当者さま向け集客サイト<br>Direction / Design / Cording</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--LP-->

    <section class="container">

        <!--row1-->
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col col-lg-2 ">
                <h2 id="lp" class="mb-3">⚫︎&nbsp;Landing page</h2>
            </div>
            <div class="col col-lg-10 ">
                <!--row2-->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-scale px-3 px-lg-0">

                    <div class=" col px-3 mb-5">
                        <a href="https://sekokan-navi.jp/registration_form/" target="_blank">
                            <img src="<?php echo $url; ?>/img/lp/works_lp5.jpg" alt="lp5">
                            <p class="smaller fw-bold pt-2">施工管理経験者が選ぶサイトNo.1
                            </p>
                            <span class="x-small gray2">Design / Cording</span>
                        </a>
                    </div>

                    <div class=" col px-3 mb-5">
                        <a href="https://sekokan-navi.jp/saiyo_sekoukanri" target="_blank">
                            <img src="<?php echo $url; ?>/img/lp/works_lp1.jpg" alt="lp1">
                            <p class="smaller fw-bold pt-2">即戦力の施工管理技士を今すぐ採用するなら
                            </p>
                            <span class="x-small gray2">Design / Cording</span>
                        </a>
                    </div>

                    <div class=" col px-3 mb-5">
                        <img src="<?php echo $url; ?>/img/lp/works_lp7.jpg" alt="lp7">
                        <p class="smaller fw-bold pt-2">建設業界で市場価値を上げる(closed)</p>
                        <span class="x-small gray2">Design / Cording</span>
                    </div>

                    <div class=" col px-3 mb-5">
                        <a href="https://sekokan-navi.jp/sekoukanri_agent/?utm_source=media&utm_medium=banner&utm_campaign=agent" target="_blank">
                            <img src="<?php echo $url; ?>/img/lp/works_lp3.jpg" alt="lp3">
                            <p class="smaller fw-bold pt-2">正社員転職なら施工管理求人ナビへ
                            </p>
                            <span class="x-small gray2">Design</span>
                        </a>
                    </div>

                    <div class=" col px-3 mb-5">
                        <img src="<?php echo $url; ?>/img/lp/works_lp8.jpg" alt="lp8">
                        <p class="smaller fw-bold pt-2">仕事探しならウィルオブ(closed)
                        </p>
                        <span class="x-small gray2">Design / Cording</span>
                    </div>

                    <div class=" col px-3 mb-5">
                        <img src="<?php echo $url; ?>/img/lp/works_lp9.jpg" alt="lp9">
                        <p class="smaller fw-bold pt-2">カレーなる施工管理人生(closed)
                        </p>
                        <span class="x-small gray2">Design / Cording</span>
                    </div>

                    <div class=" col px-3 mb-5">
                        <img src="<?php echo $url; ?>/img/lp/works_lp10.jpg" alt="lp10">
                        <p class="smaller fw-bold pt-2">施工にほえろ！(closed)
                        </p>
                        <span class="x-small gray2">Design / Cording</span>
                    </div>

                    <div class=" col px-3 mb-5">
                        <a href="/l-page/accede/" target="_blank">
                            <img src="<?php echo $url; ?>/img/lp/works_lp6.jpg" alt="lp6">
                            <p class="smaller fw-bold pt-2">デジタルハリウッドweb課題
                            </p>
                            <span class="x-small gray2">Design / Cording</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!--banners-->

    <section id="banners" class="container-fluid bg-light py-5">

        <div class="container">

            <!--row1-->
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col col-lg-2 ">
                    <h2 id="profile" class="mb-3">⚫︎&nbsp;Banners</h2>
                </div>
                <div class="col col-lg-10 ">
                    <!--row2-->
                    <div class="row">
                        <!--slick-->
                        <div class="responsive g-scale">
                            <div class="slider-img mx-3">
                                <img class="px-3" src="<?php echo $url; ?>/img/banners/banner1.gif" alt="banner1" />
                            </div>
                            <div class="slider-img mx-3">
                                <img class="px-3" src="<?php echo $url; ?>/img/banners/banner2.jpg" alt="banner2" />
                            </div>
                            <div class="slider-img mx-3">
                                <img class="px-3" src="<?php echo $url; ?>/img/banners/banner3.jpg" alt="banner3" />
                            </div>
                            <div class="slider-img mx-3">
                                <img class="px-3" src="<?php echo $url; ?>/img/banners/banner4.gif" alt="banner4" />
                            </div>
                            <div class="slider-img mx-3">
                                <img class="px-3" src="<?php echo $url; ?>/img/banners/banner5.gif" alt="banner5" />
                            </div>
                            <div class="slider-img mx-3">
                                <img class="px-3" src="<?php echo $url; ?>/img/banners/banner6.jpg" alt="banner6" />
                            </div>
                            <div class="slider-img mx-3">
                                <img class="px-3" src="<?php echo $url; ?>/img/banners/banner7.jpg" alt="banner7" />
                            </div>
                            <div class="slider-img mx-3">
                                <img class="px-3" src="<?php echo $url; ?>/img/banners/banner8.gif" alt="banner8" />
                            </div>
                            <div class="slider-img mx-3">
                                <img class="px-3" src="<?php echo $url; ?>/img/banners/banner10.jpg" alt="banner10" />
                            </div>
                            <div class="slider-img mx-3">
                                <img class="px-3" src="<?php echo $url; ?>/img/banners/banner11.png" alt="banner11" />
                            </div>


                        </div>
                    </div><!--//row2-->
                </div>
            </div>
        </div>
    </section>

    <!--others-->

    <section id="others" class="container">

        <!--row1-->
        <div class="others row row-cols-1 row-cols-lg-2">
            <div class="col col-lg-2 ">
                <h2 id="lp" class="mb-3">⚫︎&nbsp;Others</h2>
            </div>
            <div class="col col-lg-10">
                <div class="row" data-masonry="{&quot;percentPosition&quot;: true }">

                    <!--★works_other1 242408-->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card bg-light p-3">
                            <a type="button" class="btn border-0 text-start g-scale" data-bs-toggle="modal" data-bs-target="#Modal1">
                                <img src="<?php echo $url; ?>/img/works/other1.jpg" width="595" height="842" alt="other1">
                                <div class="card-body p-0">
                                    <p class="smaller fw-bold pt-2">2024夏 JAPAN BUILD
                                    </p>
                                    <span class="x-small gray2">A4フライヤー<br>Design</span>
                                </div>
                            </a>
                        </div>
                        <!-- 1-Modal -->
                        <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content border-0">
                                    <img src="<?php echo $url; ?>/img/works/other1_L.jpg" alt="other6L">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--★works_other2 202312-->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card bg-light p-3">
                            <a type="button" class="btn border-0 text-start g-scale" data-bs-toggle="modal" data-bs-target="#Modal2">
                                <img src="<?php echo $url; ?>/img/works/other2.jpg" width="1024" height="562" alt="other2">
                                <div class="card-body p-0">
                                    <p class="smaller fw-bold pt-2">2023冬 JAPAN BUILD
                                    </p>
                                    <span class="x-small gray2">展示会ブース<br>Design</span>
                                </div>
                            </a>
                        </div>
                        <!-- 2-Modal -->
                        <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content border-0">
                                    <img src="<?php echo $url; ?>/img/works/other2.jpg" alt="other2">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--works_ohter3 202211-->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card bg-light p-3">
                            <a type="button" class="btn border-0 text-start g-scale" data-bs-toggle="modal" data-bs-target="#Modal3">
                                <img src="<?php echo $url; ?>/img/works/other3.jpg" width="595" height="842" alt="other3">
                                <div class="card-body p-0">
                                    <p class="smaller fw-bold pt-2">2022年秋 JAPAN BUILD
                                    </p>
                                    <span class="x-small gray2">A4フライヤー<br>Design</span>
                                </div>
                            </a>
                        </div>
                        <!-- 3-Modal -->
                        <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content px-3">
                                    <img src="<?php echo $url; ?>/img/works/other3_L.jpg" alt="other3">
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--works_other4 202312-->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card bg-light p-3">
                            <a type="button" class="btn border-0 text-start g-scale" data-bs-toggle="modal" data-bs-target="#Modal4">
                                <img src="<?php echo $url; ?>/img/works/other4.jpg" width="595" height="842" alt="other4">
                                <div class="card-body p-0">
                                    <p class="smaller fw-bold pt-2">2023冬 JAPAN BUILD
                                    </p>
                                    <span class="x-small gray2">B5二つ折りパンフレット<br>Design</span>
                                </div>
                            </a>
                        </div>
                        <!-- 4-Modal -->
                        <div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable-y">
                                <div class="modal-content border-0">
                                    <img src="<?php echo $url; ?>/img/works/other4_L.jpg" alt="other4L">
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--works_other5 202204-->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card bg-light p-3">
                            <a type="button" class="btn border-0 text-start g-scale" data-bs-toggle="modal" data-bs-target="#Modal5">
                                <img src="<?php echo $url; ?>/img/works/other5.jpg" width="595" height="842" alt="other5">
                                <div class="card-body p-0">
                                    <p class="smaller fw-bold pt-2">建設業に特化した人材派遣、紹介、メディアサービス
                                    </p>
                                    <span class="x-small gray2">営業用 BむけフライヤーA<br>Design</span>
                                </div>
                            </a>
                        </div>
                        <!-- 5-Modal -->
                        <div class="modal fade" id="Modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content border-0">
                                    <img src="<?php echo $url; ?>/img/works/other5_L.jpg" alt="other5L">
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--works_other6 202106-->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card bg-light p-3">
                            <a type="button" class="btn border-0 text-start g-scale" data-bs-toggle="modal" data-bs-target="#Modal6">
                                <img src="<?php echo $url; ?>/img/works/other6.jpg" width="595" height="842" alt="other6">
                                <div class="card-body p-0">
                                    <p class="smaller fw-bold pt-2">採用にお悩みの皆様へ
                                    </p>
                                    <span class="x-small gray2">営業用 BむけフライヤーB<br>Design</span>
                                </div>
                            </a>
                        </div>
                        <!-- 6-Modal -->
                        <div class="modal fade" id="Modal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content border-0">
                                    <img src="<?php echo $url; ?>/img/works/other6_L.jpg" alt="other6L">
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--works_other7 201504-->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card bg-light p-3">
                            <a type="button" class="btn border-0 text-start g-scale" data-bs-toggle="modal" data-bs-target="#Modal7">
                                <img src="<?php echo $url; ?>/img/works/other7.jpg" width="1024" height="562" alt="other7">
                                <div class="card-body p-0">
                                    <p class="smaller fw-bold pt-2">カレーなる施工管理人生</p>
                                    <span class="x-small gray2">ゴーゴーカレーコラボ パッケージ<br>Design</span>
                                </div>
                            </a>
                        </div>
                        <!-- 7-Modal -->
                        <div class="modal fade" id="Modal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content border-0">
                                    <img src="<?php echo $url; ?>/img/works/other7_L.jpg" alt="other7L">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--works_other8 201501-->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card bg-light p-3">
                            <a type="button" class="btn border-0 text-start g-scale" data-bs-toggle="modal" data-bs-target="#Modal8">
                                <img src="<?php echo $url; ?>/img/works/other8.jpg" width="595" height="842" alt="other8">
                                <div class="card-body p-0">
                                    <p class="smaller fw-bold pt-2">元気をありがとう!プロジェクト
                                    </p>
                                    <span class="x-small gray2">Yahoo!協賛イベント A3四つ折りカタログ<br>Design</span>
                                </div>
                            </a>
                        </div>
                        <!-- 8-Modal -->
                        <div class="modal fade" id="Modal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content border-0">
                                    <img src="<?php echo $url; ?>/img/works/other8_L.jpg" alt="other8L">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--works_other9 201407-->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card bg-light p-3">
                            <a type="button" class="btn border-0 text-start g-scale" data-bs-toggle="modal" data-bs-target="#Modal9">
                                <img src="<?php echo $url; ?>/img/works/other9.jpg" width="595" height="842" alt="other9">
                                <div class="card-body p-0">
                                    <p class="smaller fw-bold pt-2">施工管理の志士たちよ、今こそ沿岸部に力を!
                                    </p>
                                    <span class="x-small gray2">Cむけ A3フライヤー<br>Design</span>
                                </div>
                            </a>
                        </div>
                        <!-- 9-Modal -->
                        <div class="modal fade" id="Modal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable-y">
                                <div class="modal-content border-0">
                                    <img src="<?php echo $url; ?>/img/works/other9_L.jpg" alt="other9">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--works_other10 201703-->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card bg-light p-3">
                            <a class="g-scale" href="https://sekokan-navi.jp/magazine/interview_writer_recruit" target="_blank">
                                <img src="<?php echo $url; ?>/img/works/other10.jpg" width="1024" height="562" alt="other10">
                                <div class="card-body p-0">
                                    <p class="smaller fw-bold pt-2">取材ライター募集
                                    </p>
                                    <span class="x-small gray2">施工の神様<br>Design / Writing</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div><!--//row2-->
            </div>
        </div>
    </section>

</main>