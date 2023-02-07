//Intersection observer #projects section
 const sectionProjects = document.querySelector('#projects');

 const observerProjects = new IntersectionObserver( 
     entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting){
                document.querySelector('#projects .txtcontent').classList.add('show');
   
                    var textWrapper2 = document.querySelector('.ml7 .letters');
                    textWrapper2.innerHTML = textWrapper2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                    const insertAfter2 = (element2, htmlString2) => element2.insertAdjacentHTML("afterend",htmlString2);
                    const element2 = document.querySelector('#projects .letters .letter:nth-child(8)');
                    const htmlString2 = '<br>'
                    insertAfter2(element2, htmlString2);

                    anime.timeline()
                    .add({
                        targets: '.ml7 .letter',
                        translateY: ["1.1em", 0],
                        translateZ: 0,
                        duration: 750,
                        delay: (el, i) => 50 * i
                    }).add({
                        targets: '.ml7',
                        opacity: 1,
                        duration: 1000,
                        easing: "easeOutExpo",
                        delay: 1000
                    });

                    observerProjects.unobserve(sectionProjects);
            } return;
        })
     }, {
     threshold: 0.8,   
 });

 observerProjects.observe(sectionProjects);



