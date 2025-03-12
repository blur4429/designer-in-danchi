<?php $url = get_template_directory_uri(); ?>
<main>
    <div class="pagetitle container-fluid d-md-flex flex-md-wrap align-items-end px-3 px-lg-5 pb-3 bg-green">
        <h1 class="me-4 mb-2 mb-md-0">Contact</h1>


    </div>

    <!--web sites-->

    <section id="web" class="container">
        <p class="fs-4 fs-lg-2 fw-light text-center mb-5">WEBサイト制作を中心とした<br class="lg-hide">デザイン業務をお受けしています。</p>

        <div class="row ">
            <div class="col col-md-10 col-lg-8 col-xl-6 mx-auto px-3 px-xl-0">
                <ul class="smaller fw-light border rounded p-3 mb-5">
                    <li class="ti">・業務に関するご依頼・ご相談はメールにてお気軽にお問い合わせください。4営業日以内に返信させていただきます。</li>
                    <li class="ti">・お問合わせの内容によってはお時間を頂戴する場合や返信を控えさせていただく場合がございます。</li>
                </ul>
                <form class="w-100" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSe5ep0CDQ8t-0N6s_TEKjznqK1Y4XLU32H1Pa_BdCYKTsloZA/formResponse" id="form" class="form"
                    method="POST"
                    target="hidden_iframe"
                    onsubmit="submitted=true;">

                    <label class="x-small" for="email">メールアドレス<span>*</span></label>
                    <input id="email" class="w-100 px-2 py-2 my-2" name="entry.237985859" type="text" placeholder="example@mail.co.jp">

                    <label class="x-small" for="name">お名前<span>*</span></label>
                    <input id="name" class="w-100  px-2 py-2 my-2" name="entry.164028259" type="text" placeholder="佐藤 太郎">

                    <label for="msg" class="x-small">お問い合わせ内容<span>*</span></label>
                    <textarea id="msg" class="w-100 px-2 py-2 my-2" jsname="YPqjbf" placeholder="お気軽にお問い合わせください。"></textarea>

                    <label for="robot" class="x-small">ロボットではありませんか？ 下の欄に表示されている言葉を入力してください。<span>*</span>
                    </label>
                    <input
                        id="robot"
                        class="w-100 px-2 py-2 my-2"
                        name="entry.1701202513"
                        placeholder="だんち"
                        required="required"
                        type="text"
                        pattern="だんち">

                    <div class="col-6 mx-auto my-3">
                        <button class="w-100 text-center border-0 rounded p-3 my-3" type="submit" name="entry.1781184618" value="送信">送信する</button>
                    </div>
                </form>
                <script type="text/javascript">
                    var submitted = false;
                </script>
                <iframe
                    name="hidden_iframe"
                    id="hidden_iframe"
                    style="display: none"
                    onload="if(submitted)  {window.location='/thanks';}"></iframe>

            </div>
        </div>

    </section>

</main>