    
    
    <footer id="footer" class="site-footer">
        <p class="source" ><a href="<?php echo esc_url( home_url('/')); ?>" rel="home"><span style="color:#ff77a4;">&#60;</span><span style="color:#ffd79c">JONO</span><span style="color:#ff77a4;">&#62;</span><span style="color:#aef1ff">Web</span><span style="color:#ff77a4;">++</span></a></p>
    </footer>
    
    </div>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    //intersection observer #contact section
   const contact = document.querySelector('#contact');

   const icons = document.querySelector('.contact-icons');
   
   const contactObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
        entry.target.classList.toggle('show', entry.isIntersecting);
        console.log(entry);
        
        // icons.classList.toggle('show', entry.isIntersecting);
    })
   
   }, { });

   contactObserver.observe(contact);


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
 const sectionTechnology = document.querySelector('#technology');

 const observerTechnology = new IntersectionObserver( 
     entries => {
        entries.forEach(entry => {
        entry.target.classList.toggle('show', entry.isIntersecting);
            console.log(entry);
        //animate letters
         // Wrap every letter in a span
         var textWrapper = document.querySelector('.ml10 .letters');
         textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

         //after splitting letters add link break between love / websites
         const insertAfter = (element, htmlString) => element.insertAdjacentHTML("afterend",htmlString);
         const element = document.querySelector('#technology .letters .letter:nth-child(9)');
         const htmlString = '<br>'
         insertAfter(element, htmlString);


         anime.timeline()
         .add({
             targets: '.ml10 .letter',
             translateY: ["1.1em", 0],
             translateZ: 0,
             duration: 750,
             delay: (el, i) => 50 * i
         }).add({
             targets: '.ml10',
             opacity: 1,
             duration: 1000,
             easing: "easeOutExpo",
             delay: 1000
         });



 })

 }, {
     threshold: 0,
    
     
 });

    observerTechnology.observe(sectionTechnology);




</script>




<script>

  // animate
document.addEventListener("DOMContentLoaded", ()=>{
	let options = {
		root: null,
		threshold: 0.5
	};
	let observer = new IntersectionObserver(beTouching,options);
	document.querySelectorAll('.svg-animate').forEach(line=>{
		observer.observe(line);
	})
});

function beTouching(entries, observer){

	entries.forEach(entry=> {

		if(entry.isIntersecting){
      entry.target.classList.add('visible');
          anime({
            targets: ".svg-animate.visible #image-svg path",
            strokeDashoffset: [anime.setDashoffset,0],
            easing: 'linear',
            duration: 1500,
            direction: 'normal',
            })

            // observer.unobserve(entry.target);
            } 
 
	});

};
</script>
<style>
    .svg-animate {
    width: 100%;
    height: auto;
    position: relative;
    left: 290px;
    top: 420px;
    max-width: 500px;
}
.svg-animate {
    opacity: 0;
}

  .svg-animate.visible {
    opacity: 1;
  }
</style>


    <?php wp_footer(); ?>
    </body>
</html>