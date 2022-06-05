//nav animation

window.onload=function(){
    let hamburger = document.querySelector("#ham")
    let navLinks=document.querySelector(".nav-links")
    let navLinksList=document.querySelectorAll(".nav-links__list")
    // link list animation
    hamburger.addEventListener("click",()=>{
      if(hamburger.classList[1] == 'active'){
        hamburger.classList.remove('active')
        console.log('yes')
        let tlnavlist2=gsap.timeline({defaults:{ ease:'power4.inOut' , duration:2}})
        tlnavlist2.to('.nav-links__list',{
          'clip-path':'polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)', 
          opacity:1 ,
          duration:.8,
          stagger:0.1,
          y:100
        },)
        tlnavlist2.to('.nav-links',{
          'clip-path':'polygon(0 100%, 100% 100%, 100% 100%, 0% 100%)', 
          opacity:1 ,
          duration:.4,
        },)
      }
      else{
        hamburger.classList.add('active')
        let tlnavlist=gsap.timeline({defaults:{ ease:'power4.inOut' , duration:2}})
            tlnavlist.to('.nav-links',{
              'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)', 
              opacity:1 ,
              duration:.4,
            },)
            tlnavlist.to('.nav-links__list',{
              'clip-path':'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)', 
              opacity:1 ,
              duration:.8,
              stagger:0.1,
              y:0
            },
            '+=1')
      }
  })

  window.onresize = ()=>{
    if(window.innerWidth > 640){
      navLinks.style.clipPath = 'polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)'
      navLinksList.forEach( links => {
        links.style.clipPath = "none"
        links.style.transform = "translateY(0)"
        console.log(links.style.clipPath)
      });
    }
    else{
      navLinks.style.clipPath = 'polygon(0 100%, 100% 100%, 100% 100%, 0% 100%)'
      navLinksList.forEach( links => {
        links.style.clipPath = "polygon(0 100%, 100% 100%, 100% 100%, 0% 100%)"
        links.style.transform = "translateY(100px)"
        console.log(links.style.clipPath)
      });
    }
  }

  //nav toggle


}

