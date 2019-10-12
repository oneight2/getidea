var i =0;
setInterval(function(){
  $.each($('.slide .item .slide-item'),function(index){
    $('.slide .item .slide-item').eq(index).removeClass('active')
    $('.indicator-gambar').eq(index).parent().removeClass('active')
  })
  $('.slide .item .slide-item').eq(i).addClass('active');
  $('.indicator-gambar').eq(i).parent().addClass('active')
  i++;
  if(i>($('.slide .item .slide-item').length-1)) i = 0;
}, 3000);
 $('.timeline-3').Timeline({
  autoplay: true,
  mode: 'vertical',
  itemClass: 'box-item'
   });
 $('.carousel').carousel({
  interval: 2000
})
$("#menu-toggle").click(function(e){
   e.preventDefault();
   $("#wrapper").toggleClass("menuDisplayed");
});
$('#fullpage').fullpage({
  // sectionsColor: ['#B8AE9C', '#348899', '#F2AE72', '#5C832F', '#B8B89F'],
  sectionSelector: '.vertical-scrolling',
  navigation: true,
  slidesNavigation: true,
  controlArrows: false,
  anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection' ],
  menu: '#menu',
  
});

  if ($('.prettyprint').length) {
    window.prettyPrint && prettyPrint();
  }
AOS.init({
	duration : 2000,
});


const bg = document.querySelector('.content__img');
const tl = document.querySelector('.content__title');
const windowWidth = window.innerWidth / 35;
const windowHeight = window.innerHeight / 35 ;

window.addEventListener('mousemove', (e) => {
  const mouseX = e.clientX / windowWidth;
  const mouseY = e.clientY / windowHeight;
  
  bg.style.transform = `translate3d(-${mouseX}%, -${mouseY}%, 0)`;
  tl.style.transform = `translate3d(-${mouseX}%, -${mouseY}%, 0)`;


});

