<footer class="pb-3">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">TOP</a></li>
        <li class="nav-item"><a href="/works" class="nav-link px-2 text-body-secondary">WORKS</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link px-2 text-body-secondary">CONTACT</a></li>
    </ul>
    <p class="smaller text-center text-body-secondary">©&nbsp;&nbsp;2025&nbsp;&nbsp;<?php echo get_bloginfo(
        'name'
      ); ?></p>

    <p id="page-top">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/icons/arrow-up-short.svg" alt="up"></a>
    </p>
</footer>


<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" async></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js' defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-core.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/autoloader/prism-autoloader.min.js" defer>
</script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" defer></script>


<script src=" <?php echo esc_url(get_template_directory_uri() . '/js/script.js'); ?>" defer></script>

</body>

</html>