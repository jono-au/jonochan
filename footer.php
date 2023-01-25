    
    
    <footer id="footer" class="site-footer">
        <p class="source" ><a href="<?php echo esc_url( home_url('/')); ?>" rel="home">&#60;<span style="color:#ffd79c">JONO</span>&#62;<span style="color:#aef1ff">WebDeveloper</span></a></p>
    </footer>
    
    </div>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
   
</script>
<script>
   $(window).scroll(function() {
        $(".top").css("opacity", 1 - $(window).scrollTop() / 150);
        $(".top-content").css("opacity", 1 - $(window).scrollTop() / 700);
});
</script>


<script>

window.addEventListener("scroll", function() {
    if (window.scrollY > 50) {
        document.querySelector(".contact-icons").style.transform= "translateX(0)";
    } else {
        document.querySelector(".contact-icons").style.transform= "translateX(-35px)";
    }
});

</script>



<script>

</script>

    <?php wp_footer(); ?>
    </body>
</html>