window.addEventListener('load', () => {
  scrollIn("js-scrollIn");
  clickToggle("js-toggle");
});
window.addEventListener('scroll', () => {
  scrollIn("js-scrollIn");
});


document.addEventListener( 'DOMContentLoaded', function() {
  const splide = new Splide( '.splide', {
      autoWidth: true,
      pagination: false,
      arrows: false,    
  } );
  
  const counters    = document.querySelectorAll('.js-splide_count');
  const leftArrows  = document.querySelectorAll('.js-splide_arrowLeft');
  const rightArrows = document.querySelectorAll('.js-splide_arrowRight');

  splide.on('mounted move', function () {
    const index = splide.index + 1;          // 現在のスライド番号（1始まり）
    const total = splide.length;             // 全スライド数
    counters.forEach(
      counter => { counter.textContent = `${index} / ${total}`;
    });
    const currentSlide = splide.Components.Slides.getAt(splide.index).slide;
    currentSlide.focus();
  });
  leftArrows.forEach(left => {
    left.addEventListener('click', () => {
    splide.go('<'); });
  });
  rightArrows.forEach(right => {
    right.addEventListener('click', () => {
      splide.go('>');
    });
  });
  
  splide.mount();
} );




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