

window.addEventListener('load', (e) => {
  heartFix("js-heartTrigger");
  scrollIn("js-scrollIn");
  clickToggle("js-toggle");
});
window.addEventListener('resize', (e) => {
});
window.addEventListener('scroll', (e) => {
  heartFix("js-heartTrigger");
  scrollIn("js-scrollIn");
},{passive: true});



// heartFix
// ------------------------------------------------------------
function heartFix(Class){
  const targetsClass  = document.getElementsByClassName(Class);
  const targetsArr    = Array.from(targetsClass);
  const windowHeight  = window.innerHeight;

  targetsArr.forEach(function(target){
    const targetClass01   = document.getElementsByClassName(target.getAttribute("data-Class01"))[0];
    const targetClass02   = document.getElementsByClassName(target.getAttribute("data-Class02"))[0];
    let targetRelative = target.getBoundingClientRect().top - windowHeight / 2;
    let scale = window.innerWidth >= 768 ?  1 + (-0.04 * (targetRelative)) : 1 + (-0.04 * (targetRelative));


    if(scale >= 70){
      targetClass01.style.position = 'fixed';
      targetClass01.style.top = "50vh";
      targetClass02.style.transform = 'scale(' + scale + ')';
      targetClass02.style.opacity = 0;
    }else if(scale >= 1){
      targetClass01.style.position = 'fixed';
      targetClass01.style.top = "50vh";
      targetClass02.style.transform = 'scale(' + scale + ')';
      targetClass02.style.opacity = 1;
    }else{
      targetClass01.style.position = 'relative';
      targetClass01.style.top = "0";
      targetClass01.style.bottom = "0";
      targetClass02.style.transform = 'scale(1)';
      targetClass02.style.opacity = 1;
    }
  });
}


// clickToggle
// ------------------------------------------------------------
const clickToggle = (Class) =>{
  const targetClass = document.getElementsByClassName(Class);
  const targetArray = Array.from(targetClass);

  targetArray.forEach(element => {
    element.addEventListener("click", (e) =>{
      const targetDataName = element.getAttribute("data-target");

      if(targetDataName === null){
        element.classList.toggle("is-toggle");
      }else{
        const targetDataClass = document.getElementsByClassName(targetDataName)
        const targetDataArray = Array.from(targetDataClass);
        targetDataArray.forEach(targetDataElement => {
          targetDataElement.classList.toggle("is-toggle");
        });
      }
    });
  });
}

// scrollIn
// ------------------------------------------------------------
function scrollIn(Class){
  const targetsClass  = document.getElementsByClassName(Class);
  const targetsArr    = Array.from(targetsClass);
  targetsArr.forEach(function(target){
      let targetRelative = (window.innerHeight) - target.getBoundingClientRect().top;

      if(targetRelative > 0){
        target.classList.add("is-scrollIn");
      }
  });
}