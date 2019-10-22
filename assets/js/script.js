//start script slide dong
var i =0;
$.each($('.indicator-gambar'),function(index){
  $(this).on("click",function(){
    i = index;
    slideDong();
  })
});
setInterval(function(){
  slideDong();
  i++;
  if(i>($('.slide .item .slide-item').length-1)) i = 0;
}, 4000);

function slideDong(){
  $('.slide .item .slide-item').removeClass('active');
  $('.indicator-gambar').parent().removeClass('active');

  $('.slide .item .slide-item').eq(i).addClass('active');
  $('.indicator-gambar').eq(i).parent().addClass('active');
}
//end scrip slide dong

var pageURL = $(location).attr("href");
if (  pageURL == "http://localhost/getidea/pemesanan") {
      $("html").css({
             'overflow' :  'auto'
         })            
}
if (  pageURL != "http://localhost/getidea/pemesanan") {
$('#fullpage').fullpage({
  sectionSelector: '.vertical-scrolling',
  navigation: true,
  slidesNavigation: true,
  controlArrows: false,
  anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection' ],
});       
}       
$("#menu-toggle").click(function(e){
   e.preventDefault();
   $("#wrapper").toggleClass("menuDisplayed");
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

