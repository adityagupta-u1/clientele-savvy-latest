


//GSAP animations
// home animation
window.onload = ()=>{
    let tl = gsap.timeline({ defaults:{ ease:'power4.inOut', duration: 2}})
    tl.to('.header-title',{'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)', opacity:1 , y:0 , duration:2.2})
    tl.to('.sub-container',{'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)', opacity:1 , y:0} , "-=2")
    tl.to('.home-img',{'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)' , opacity:1 , y:0 } , "-=1.8")

    // work ladder animation
    let tl2=gsap.timeline({
    scrollTrigger:{
        trigger:'.work-ladder',
        start:'top center'
    }
    })

    tl2.to('.wl-text-container',{
    opacity:1,
    'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)',
    y:0,
    duration:1,
    ease:'power4.inOut'
    })


    tl2.to('.wl-image',{
        opacity:1,
        'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)',
        y:0,
        ease:'power4.inOut',
        duration:1,
    },
    '-=.8'
    )

    // services animation
    let tl3=gsap.timeline({
    scrollTrigger:{
        trigger:'.services',
        start:'top center'
    }
    })


    tl3.to('.services-col__text',{
    duration:1,
    opacity:1,
    'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)',
    y:0,
    ease:'power4.inOut',
    },
    )
    let tl4=gsap.timeline({
    scrollTrigger:{
        trigger:'.grid-items',
        start:'top bottom'
    }
    })
    tl4.to('.grid-items',{
        duration:1,
        opacity:1,
        'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)',
        y:0,
        ease:'power4.inOut',
        stagger:0.1
    },
    '+=.4'
    )

    // work animation
    // work item 1
    let tl5=gsap.timeline({
    scrollTrigger:{
        trigger:'.work-item__1',
        start:'top bottom'
    }
    })

    tl5.to('.work-item__text__1',{
    duration:1,
    opacity:1,
    'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)',
    y:0,
    ease:'power4.inOut',
    })
    tl5.to('.work-item__img__1',{
    duration:1,
    opacity:1,
    'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)',
    y:0,
    ease:'power4.inOut',
    },
    '-=.8'
    )
    // work item 2
    let tl6=gsap.timeline({
    scrollTrigger:{
        trigger:'.work-item__2',
        start:'top bottom'
    }
    })

    tl6.to('.work-item__text__2',{
    duration:1,
    opacity:1,
    'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)',
    y:0,
    ease:'power4.inOut',
    })
    tl6.to('.work-item__img__2',{
    duration:1,
    opacity:1,
    'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)',
    y:0,
    ease:'power4.inOut',
    },
    '-=.8'
    )
    // work item 3
    let tl7=gsap.timeline({
    scrollTrigger:{
        trigger:'.work-item__3',
        start:'top bottom'
    }
    })

    tl7.to('.work-item__text__3',{
    duration:1,
    opacity:1,
    'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)',
    y:0,
    ease:'power4.inOut',
    })
    tl7.to('.work-item__img__3',{
    duration:1,
    opacity:1,
    'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)',
    y:0,
    ease:'power4.inOut',
    },
    '-=.8'
    )

    // contact animation

    let tl8=gsap.timeline({
    scrollTrigger:{
        trigger:'.contact-us',
        start:'top bottom'
    }
    })

    tl8.to('.contact-us-text',{
    duration:1,
    opacity:1,
    'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)',
    y:0,
    ease:'power4.inOut',
    })
    tl8.to('.form',{
    duration:1,
    opacity:1,
    'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)',
    y:0,
    ease:'power4.inOut',
    },
    '-=.8'
    )

    //coa animation

    let tl9=gsap.timeline({
    scrollTrigger:{
        trigger:'.coa',
        start:'top center'
    }
    })

    tl9.to('.coa-text',{
    duration:1,
    opacity:1,
    'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)',
    y:0,
    ease:'power4.inOut',
    })
    tl9.to('.coa-container',{
    duration:1,
    opacity:1,
    'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)',
    y:0,
    ease:'power4.inOut',
    },
    '-=.8'
    )

}

//about page 




let sections = gsap.utils.toArray(".beliefs-items");

let scrollTween = gsap.to(sections, {
    xPercent: -100 * (sections.length - 1),
    ease: "none", // <-- IMPORTANT!
    scrollTrigger: {
      trigger: ".pb-beliefs-scrollbar",
      start: "center center",
      pin: true,
      scrub: 0.1,
      end: "+=3000"
    }
});