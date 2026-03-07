

// trigger
// ------------------------------------------------------------
modal("js-headButton", true);
parallax("js-parallax");
// accordion("js-accordion");


window.addEventListener('load', (e) => {
  loadIn("js-loadIn")
  scrollIn("js-scrollIn")
});
window.addEventListener('resize', (e) => {
});
window.addEventListener('scroll', (e) => {
  scrollIn("js-scrollIn")
  parallax("js-parallax");
},{passive: true});


// loadIn
// ------------------------------------------------------------
function loadIn(Class){
  const targetsClass  = document.getElementsByClassName(Class);
  const targetsArr    = Array.from(targetsClass);
  targetsArr.forEach(function(target){
      const removeClass = target.getAttribute("data-class");
      target.classList.remove(removeClass);
  });
}



// scrollIn
// ------------------------------------------------------------
function scrollIn(Class){
  const targetsClass  = document.getElementsByClassName(Class);
  const targetsArr    = Array.from(targetsClass);
  targetsArr.forEach(function(target){
      const removeClass = target.getAttribute("data-class");
      let targetRelative = (window.innerHeight / 5 * 4) - target.getBoundingClientRect().top;

      if(targetRelative > 0){
        target.classList.remove(removeClass);
      }
      // else{
      //   target.classList.add(removeClass);
      // }
      // if(target.getBoundingClientRect().bottom > window.innerHeight){
      //   target.classList.add(removeClass);
      // }
  });
}



// smoothScroll
// ------------------------------------------------------------
function smoothScroll(){
  const trigger = document.querySelectorAll('a[href^="/#"]');
  for (let i = 0; i < trigger.length; i++){
    trigger[i].addEventListener('click', (e) => {

      if(location.pathname !== "/"){
        return false;
      }

      e.preventDefault();
      let href = trigger[i].getAttribute('href');
      let targetElement = document.getElementById(href.replace('/#', ''));
      const rect = targetElement.getBoundingClientRect().top;
      const offset = window.scrollY;
      const gap = 0;
      const target = rect + offset - gap;
      window.scrollTo({
        top: target,
        behavior: 'smooth',
      });
    });
  }
}

// modal
// ------------------------------------------------------------
function modal(Class, sp){
  const thisClass  = document.getElementsByClassName(Class);
  const thisArr    = Array.from(thisClass);

  thisArr.forEach(function(isClass){
    isClass.onclick = function(){
      if(sp){
        document.getElementsByTagName('body')[0].classList.toggle("is-fixed-sp");
      }else{
        document.getElementsByTagName('body')[0].classList.toggle("is-fixed");
      }

      const target      = isClass.getAttribute("data-target");
      const targetClass = document.getElementsByClassName(target);
      const targetArr   = Array.from(targetClass);

      targetArr.forEach(function(isTarget){
        isTarget.classList.toggle("is-active");
        let targetChild    = isTarget.getElementsByClassName("js-modalImage")[0];
        if(targetChild !== undefined){
          let targetChildSrc = targetChild.getAttribute("data-image")
          targetChild.setAttribute("src", targetChildSrc);
        }
      });
    }
  });
}



// toggle
// ------------------------------------------------------------
function toggle(Class){
  const targetsClass  = document.getElementsByClassName(Class);
  const targetsArr    = Array.from(targetsClass);
  targetsArr.forEach(function(target){
    target.onclick = function(){
      const toggleClass = target.getAttribute("data-class");
      target.classList.toggle(toggleClass);
    }
  });
}


// accordion
// ------------------------------------------------------------
function accordion(Class){
  const targetsClass  = document.getElementsByClassName(Class);
  const targetsArr    = Array.from(targetsClass);
  targetsArr.forEach(function(target){
    let detailsTitleHeight  = target.children[0].offsetHeight;
    let detailsInnerHeight  = target.children[1].children[0].offsetHeight;

    target.style.minHeight = detailsTitleHeight + "px";
    target.children[1].children[0].style.paddingTop = detailsTitleHeight + "px";
    
    target.onclick = function(){
      this.classList.toggle('is-open');

      if(this.classList.contains('is-open')){
        this.children[1].style.height = detailsInnerHeight + "px";
      }else{
        this.children[1].style.height = "0px";
      }
    }
  });
}




// slider
// ------------------------------------------------------------


if(document.getElementsByClassName('js-slider').length >= 1){
  const slider = tns({
    container: '.js-slider',
    // controlsContainer: '.js-slider_nav',
    prevButton: '.js-slider_nav_prev',
    nextButton: '.js-slider_nav_next',
    // slideCount: 1,
    slideBy: 1,
    mouseDrag: false,
    loop: true,
    edgePadding: 30,
    nav: false,
    controls: true,
    items: 1,
    autoplay: false,
    autoplayButtonOutput: false,

    responsive: {
      768: {
        items: 3,
        edgePadding: 75,
      },
    },
  });

  window.addEventListener('load', (e) => {
    slideCOunt();
  });
  document.querySelector('.js-slideWrap').onclick = function () {
    slideCOunt();
  };

  function slideCOunt(){
    let display = slider.getInfo().displayIndex;
    let count = slider.getInfo().slideCount;
    document.querySelector('.js-slider_num').innerHTML = display + " / " + count;
  }

}




// parallax
// ------------------------------------------------------------
function parallax(Class){
  const targetsClass  = document.getElementsByClassName(Class);
  const targetsArr    = Array.from(targetsClass);
  targetsArr.forEach(function(target){
    let targetRelative = target.getBoundingClientRect().top;
    let targetMove = targetRelative / 8;
    let targetDepth = target.getAttribute("data-depth");
    let targetChild = target.children[0];

    let moveRate        = window.innerWidth >= 768 ?  1 : 0.6;
    let moveRateReverse = window.innerWidth >= 768 ?  1 : -0.4;

    if(targetDepth === "front01"){
      targetChild.style.transform = 'translateY(' + targetMove * moveRate + 'px)';
    }
    if(targetDepth === "front02"){
      targetChild.style.transform = 'translateY(' + 2 * targetMove * moveRate + 'px)';
    }
    if(targetDepth === "back01"){
      targetChild.style.transform = 'translateY(' + -1 * targetMove * moveRate + 'px)';
    }
    if(targetDepth === "back02"){
      targetChild.style.transform = 'translateY(' + -2 * targetMove * moveRate + 'px)';
    }
    if(targetDepth === "back01"){
      targetChild.style.transform = 'translateY(' + -1 * targetMove * moveRate + 'px)';
    }
    if(targetDepth === "front01-reverse"){
      targetChild.style.transform = 'translateY(' + 1 * targetMove * moveRateReverse + 'px)';
    }
  });
}