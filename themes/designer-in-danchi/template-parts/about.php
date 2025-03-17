<?php $url = get_template_directory_uri(); ?>
<main>

    <div class="pagetitle container-fluid d-md-flex flex-md-wrap align-items-end px-3 px-lg-5 pb-3 bg-pink">
        <h1 class="me-4 mb-2 mb-md-0">About</h1>
        <ul class="row align-items-end smaller pb-2">
            <li class="col-auto"><a class="me-1" href="#profile">⚫︎&nbsp;Profile</a></li>
            <li class="col-auto"><a class="me-1" href="#skills">⚫︎&nbsp;Skills</a></li>
        </ul>
    </div>
    <!--breadcrumb-->
    <div class="container breadcrumb fw-light p-2 mt-5">
        <?php if (function_exists('custom_breadcrumb')) {
          custom_breadcrumb();
        } ?>
    </div>

    <!--profile-->
    <section class="container">
        <div class="row mb-5">
            <p class="fs-1 fw-light mb80">東京のとある自然豊かな団地に住む、<br class="lg-show">
                シンプルだけどクリエイティブな生活を心がける<br class="lg-show">デザイナーです</p>
        </div>

        <!--row1-->
        <div class="row row-cols-1 row-cols-lg-2 mb-5">
            <!--left-->
            <div class="col col-lg-2 pt-3 mb-5">
                <h2 id="profile">⚫︎ Profile</h2>
            </div>
            <!--right-->
            <div class="col col-lg-10">
                <!--row2-->
                <div class="row gy-5">
                    <div class="col-sm col-lg-7 fs-6 p-3 pe-lg-5">
                        <h3 class="mb-4">「団地に住んでるデザイナー」です。</h3>
                        <p class="fs-6 lh mb-3">神奈川県出身。長らく事務系派遣に従事するもリーマンショックを機に一念発起し、職業訓練校を卒業したのみでWebデザイナーに転身、
                            2024年にお世話になった企業からフリーのWebデザイナーとして巣立ちました。</p>

                        <p class="fs-6 lh mb-3">
                            シンプル、ミニマルでインパクトがあるデザインが好きですが、
                            仕事以外に暮らしぶりにもそれらを反映させています。</p>

                        <p class="fs-6 lh mb-3">
                            新しいものを買う前にありモノを工夫して使う、作れるものは自分で作るなど、
                            最小のリソースでいかに心地よくすてきに暮らすかということをよく考え、実践することを楽しんでいます。</p>

                        <p class="fs-6 lh mb-3">
                            団地というと古くてダサくて狭い、という印象があるかもしれませんが、<br class="lg-show">
                            全戸日当たり抜群、近隣住民がフレンドリー、手入れされた樹木や植物がたくさんあるなど、良いところも沢山あるのです。</p>

                        <p class="fs-6 lh mb-3">
                            公園で遊ぶ子供達の笑い声、お年寄りの井戸端会議、移動式の豆腐店や図書館の親しみを感じるやかましさ、
                            鴨やメジロ、鶯などのかわいい啼き声..癒しもたくさんあります。<br>
                            お気に入りの環境で、四季を感じながら制作を行なっています。</p>
                    </div>
                    <div class="col-sm col-lg-5 px-3 pb-3">
                        <img class="about1" src="<?php echo $url; ?>/img/about1.jpg" alt="about1">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Skills-->

    <section id="skills" class="container-fluid  bg-light py-5">
        <div class="container">
            <!--row1-->
            <div class="row row-cols-1 row-cols-lg-2 mb-5">
                <div class="col col-lg-2 pt-3 mb-5">
                    <h2>⚫︎ Skills</h2>
                </div>
                <div class="col col-lg-10">
                    <!--row2-->
                    <div class="row gy-5 mb-5">
                        <div class="col-sm col-lg-7 p-3 pe-lg-5">
                            <h3 class="fs-5 mb-2">Design</h3>
                            <p class="lh mb-5">
                                シンプルで洗練されたデザイン、情報設計に基づいた分かりやすいデザインを得意としていますが、
                                ターゲット層に響くことも重要視しながら引き算を繰り返し、デザインの正解を引き出します。<br>
                                <br>名刺、フライヤー、展示会ブースなどの印刷物から、ランディングページ、コーポレートサイトなどのWebデザインまで、
                                ヒアリング、コンセプト設計、デザイン制作、修正、納品まで丁寧に対応します。
                            </p>

                            <h3 class="fs-5 mb-2">Front End</h3>
                            <p class="lh mb-4">コーディング、WordPressカスタマイズ、Bootstrapを得意としています。
                                本サイトは、WordPressのテーマを自作し、Docker、Github、AWS Lightsailを利用して、
                                開発環境の構築からデプロイまでの一連のフローを構築しました。</p>
                            <p class="col-7 col-lg-6 mb-5">
                                <a class="btn btn-ob smaller h-100 d-block p-2" href="https://codepen.io/mazaka" target="_blank">Codepen</a>
                            </p>

                            <h3 class="fs-5 mb-2">Other</h3>
                            <p class="lh mb-2">長期間に渡り、事務系スキルの中でもデザインを活かしてきました。<br>
                                社内プレゼン資料作成、自作関数作成、社内各種レクチャー、HTMLメール作成、スクレイピング、マーケティングオートメーション(<a href="https://business.adobe.com/products/marketo.html#" target="_blank">Marketo</a>&nbsp;<img class="icons" src="<?php echo $url; ?>/icons/box-arrow-up-right.svg">)の運用と支援など多数経験しています。
                            </p>
                            <ul class="lh mb-4">
                                <li class="ti mb-2">・Microsoft MOUS expert<br>for Excel,WORD,PowerPoint,Access(2001年) </li>
                                <li class="ti mb-2">・Microsoft MOT(Microsoft Official Trainer) for Excel,WORD(2002年) </li>
                                <li class="ti mb-2">・VBAエキスパート資格取得(2009年)
                                <li class="ti mb-2">・Googleアナリティクス(GAIQ)認定資格取得(2016年)</li>
                            </ul>

                            <!-- ★★Button trigger modal★★-->
                            <p class="col-7 col-lg-6"><button type="button" class="btn btn-modal smaller h-100 w-100" data-bs-toggle="modal" data-bs-target="#skillModal">
                                    Skill Details</button></p>
                        </div>
                        <!--right２-->
                        <div class="col-sm col-lg-5 g-scale p-3">
                            <p class="bg-white p-3 mb-5"><img src="<?php echo $url; ?>/img/about_skills.jpg" alt="skills"></p>
                            <?php include locate_template('/template-parts/raderchart.php'); ?>
                        </div>

                        <!-- Modal skill detail-->
                        <div class="modal fade" id="skillModal" tabindex="-1" aria-labelledby="skillModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title text-center fs-5" id="skillModalLabel">Skill Details</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body x-small px-5 pb-5">
                                        <ul class="row d-flex justify-content-between fw-light p-0 mb-2">
                                            <li class="col p-0">Beginner</li>
                                            <li class="col text-center">Experienced</li>
                                            <li class="col text-end p-0">Expert</li>
                                        </ul>
                                        <ul class="level row d-flex justify-content-between fw-light text-center p-0">
                                            <li class="col-auto">1</li>
                                            <li class="col-auto">2</li>
                                            <li class="col-auto">3</li>
                                            <li class="col-auto">4</li>
                                            <li class="col-auto">5</li>
                                        </ul>
                                        <div class="ruler mt-3 mb-4">
                                            <span class="arrow-left"></span>
                                            <span class="arrow-right"></span>
                                        </div>

                                        <!--1-->

                                        <h3 class="mb-2">Design</h3>

                                        <div class="d-flex bar bar-1 one_1 mb-2">
                                            <div class="p-2 w-100">Web Design</div>
                                            <div class="p-2 flex-shrink-1">4.5</div>
                                        </div>

                                        <div class="d-flex bar bar-1 one_2 mb-2">
                                            <div class="p-2 w-100">UI/UX</div>
                                            <div class="p-2 flex-shrink-1">4</div>
                                        </div>

                                        <div class="d-flex bar bar-1 one_3 mb-2">
                                            <div class="p-2 w-100">DTP</div>
                                            <div class="p-2 flex-shrink-1">4</div>
                                        </div>

                                        <div class="d-flex bar bar-1 one_4 mb-2">
                                            <div class="p-2 w-100">ロゴ制作</div>
                                            <div class="p-2 flex-shrink-1">4</div>
                                        </div>

                                        <div class="d-flex bar bar-1 one_5 mb-2">
                                            <div class="p-2 w-100">イラスト制作</div>
                                            <div class="p-2 flex-shrink-1">4</div>
                                        </div>

                                        <div class="d-flex bar bar-1 one_6 mb-2">
                                            <div class="p-2 w-100">動画作成</div>
                                            <div class="p-2 flex-shrink-1">3</div>
                                        </div>

                                        <div class="d-flex bar bar-1 one_7 mb-2">
                                            <div class="p-2 w-100">レタッチ</div>
                                            <div class="p-2 flex-shrink-1">5</div>
                                        </div>

                                        <!--2-->

                                        <h3 class="mb-2">Tools</h3>

                                        <div class="d-flex bar bar-2 two_1 mb-2">
                                            <div class="p-2 w-100">Photoshop</div>
                                            <div class="p-2 flex-shrink-1">4.5</div>
                                        </div>

                                        <div class="d-flex bar bar-2 two_2 mb-2">
                                            <div class="p-2 w-100">Illustrator</div>
                                            <div class="p-2 flex-shrink-1">4.5</div>
                                        </div>

                                        <div class="d-flex bar bar-2 two_3 mb-2">
                                            <div class="p-2 w-100">Premiere</div>
                                            <div class="p-2 flex-shrink-1">3</div>
                                        </div>

                                        <div class="d-flex bar bar-2 two_4 mb-2">
                                            <div class="p-2 w-100">After Effect </div>
                                            <div class="p-2 flex-shrink-1">2</div>
                                        </div>

                                        <div class="d-flex bar bar-2 two_5 mb-2">
                                            <div class="p-2 w-100">Figma</div>
                                            <div class="p-2 flex-shrink-1">3</div>
                                        </div>

                                        <div class="d-flex bar bar-2 two_6 mb-2">
                                            <div class="p-2 w-100">Canva</div>
                                            <div class="p-2 flex-shrink-1">2</div>
                                        </div>

                                        <div class="d-flex bar bar-2 two_7 mb-2">
                                            <div class="p-2 w-100">Google Analytics</div>
                                            <div class="p-2 flex-shrink-1">3</div>
                                        </div>

                                        <!--3-->

                                        <h3 class="mb-2">Development</h3>

                                        <div class="d-flex bar bar-3 three_1 mb-2">
                                            <div class="p-2 w-100">html/css(sass)</div>
                                            <div class="p-2 flex-shrink-1">4.5</div>
                                        </div>

                                        <div class="d-flex bar bar-3 three_2 mb-2">
                                            <div class="p-2 w-100">javascript</div>
                                            <div class="p-2 flex-shrink-1">3</div>
                                        </div>

                                        <div class="d-flex bar bar-3 three_3 mb-2">
                                            <div class="p-2 w-100">php</div>
                                            <div class="p-2 flex-shrink-1">2</div>
                                        </div>

                                        <div class="d-flex bar bar-3 three_4 mb-2">
                                            <div class="p-2 w-100">jQuery</div>
                                            <div class="p-2 flex-shrink-1">2</div>
                                        </div>

                                        <div class="d-flex bar bar-3 three_5 mb-2">
                                            <div class="p-2 w-100">Git/Github</div>
                                            <div class="p-2 flex-shrink-1">3</div>
                                        </div>

                                        <div class="d-flex bar bar-3 three_6 mb-2">
                                            <div class="p-2 w-100">terminal</div>
                                            <div class="p-2 flex-shrink-1">3</div>
                                        </div>

                                        <div class="d-flex bar bar-3 three_7 mb-2">
                                            <div class="p-2 w-100">WordPress</div>
                                            <div class="p-2 flex-shrink-1">4</div>
                                        </div>

                                        <div class="d-flex bar bar-3 three_8 mb-2">
                                            <div class="p-2 w-100">Docker</div>
                                            <div class="p-2 flex-shrink-1">2</div>
                                        </div>

                                        <div class="d-flex bar bar-3 three_9 mb-2">
                                            <div class="p-2 w-100">AWS</div>
                                            <div class="p-2 flex-shrink-1">2</div>
                                        </div>

                                        <div class="d-flex bar bar-3 three_10 mb-2">
                                            <div class="p-2 w-100">Bootstrap</div>
                                            <div class="p-2 flex-shrink-1">4</div>
                                        </div>

                                        <!--4-->

                                        <h3 class="mb-2">Other</h3>

                                        <div class="d-flex bar bar-4 four_1 mb-2">
                                            <div class="p-2 w-100">Excel</div>
                                            <div class="p-2 flex-shrink-1">4.5</div>
                                        </div>

                                        <div class="d-flex bar bar-4 four_2 mb-2">
                                            <div class="p-2 w-100">PowerPoint</div>
                                            <div class="p-2 flex-shrink-1">4.5</div>
                                        </div>

                                        <div class="d-flex bar bar-4 four_3 mb-2">
                                            <div class="p-2 w-100">VBA</div>
                                            <div class="p-2 flex-shrink-1">4</div>
                                        </div>
                                        <!--
                                        <div class="d-flex bar bar-4 four_4 mb-2">
                                            <div class="p-2 w-100">Power Automate</div>
                                            <div class="p-2 flex-shrink-1">2</div>
                                        </div>-->

                                        <div class="d-flex bar bar-4 four_5 mb-2">
                                            <div class="p-2 w-100">Octoparse</div>
                                            <div class="p-2 flex-shrink-1">4</div>
                                        </div>

                                        <div class="d-flex bar bar-4 four_6 mb-2">
                                            <div class="p-2 w-100">Marketo</div>
                                            <div class="p-2 flex-shrink-1">4.5</div>
                                        </div>

                                    </div><!--//modal-body-->
                                </div>
                            </div>
                        </div>
                        <!--// Modal -->

                    </div>
                </div><!--col col-lg-10-->
            </div>
        </div>
    </section>
</main>