var modal = document.getElementById("myModal");
var imgnewsmodal = document.getElementById("myModal1");
var vidnewsmodal = document.getElementById("myModal2");
var visitormodal = document.getElementById("myModal3");
var carouselmodal = document.getElementById("myModal4");

var span = document.getElementsByClassName("close")[0];
var nwesimgspan = document.getElementsByClassName("close")[1];
var nwesvidspan = document.getElementsByClassName("close")[2];
var visitorspan = document.getElementsByClassName("close")[3];
var carouselspan = document.getElementsByClassName("close")[4];

$(document).ready(function(){
    $(".SlickCarousel").slick({
      rtl:false, // If RTL Make it true & .slick-slide{float:right;}
      autoplay:true, 
      autoplaySpeed:1500, //  Slide Delay
      speed:800, // Transition Speed
      slidesToShow:4, // Number Of Carousel
      slidesToScroll:1, // Slide To Move 
      pauseOnHover:false,
      appendArrows:$(".Container .Head .Arrows"), // Class For Arrows Buttons
      prevArrow:'<span class="Slick-Prev"></span>',
      nextArrow:'<span class="Slick-Next"></span>',
      easing:"linear",
      responsive:[
        {breakpoint:801,settings:{
          slidesToShow:3,
        }},
        {breakpoint:641,settings:{
          slidesToShow:3,
        }},
        {breakpoint:481,settings:{
          slidesToShow:1,
        }},
      ],
    })

    setTimeout(() => {
      document.getElementById('myModal3').style.display = 'block';
    },5000)


    $('.nblogvid').click(function(e) {
      // Clicked Row Button Id
      console.log(e.currentTarget.attributes.alt.value);
      console.log(e.currentTarget.alt);
      // document.getElementById('blogimgitemClick').value = e.currentTarget.alt;
      // vidnewsmodal.style.display = "block";
      $('#homePanel').fadeOut();
      $('#articleSectionId').fadeOut();
      $('#vadvt1').fadeOut();
      $('#aboutusPanel').fadeOut();
      $('#contactPanel').fadeOut();
      $('#carPosts').fadeOut();
      $('#nimgPosts').fadeOut();
      $('#nvidPosts').fadeIn();
      let blogid = '#blogvidpostRead' + e.currentTarget.attributes.alt.value;
      let blogid2 = 'blogvidpostRead' + e.currentTarget.attributes.alt.value;
      console.log(blogid);
      $(blogid).show();
      document.getElementById(blogid2).style.display = "block";
      window.scrollTo(0, 0);
      e.preventDefault();
      // your code here
      return false;
    })

    $('.cTitle').click(function(e) {
      // Clicked Row Button Id
      console.log(e.currentTarget.id);
      console.log(e.currentTarget.alt);
      // document.getElementById('blogimgitemClick').value = e.currentTarget.alt;
      // carouselmodal.style.display = "block";
      $('#homePanel').fadeOut();
      $('#articleSectionId').fadeOut();
      $('#vadvt1').fadeOut();
      $('#aboutusPanel').fadeOut();
      $('#contactPanel').fadeOut();
      $('#carPosts').fadeIn();
      $('#nimgPosts').fadeOut();
      $('#nvidPosts').fadeOut();
      let blogid2 = 'carimgpostRead' + e.currentTarget.id;
      document.getElementById(blogid2).style.display = "block";
      $('#carimgpostRead' + e.currentTarget.id).show();
      window.scrollTo(0, 0);
      e.preventDefault();
      // your code here
      // return false;
    })
  })

$('#researchReports').click( () => {
  modal.style.display = "block";
  document.getElementById('researchreportForm').style.display = "block";
  document.getElementById('aeorServicesForm').style.display = "none";
  document.getElementById('dataServicesForm').style.display = "none";
  document.getElementById('infoServicesForm').style.display = "none";
  document.getElementById('recyclingShivirForm').style.display = "none";
  document.getElementById('videoMagazineForm').style.display = "none";
  document.getElementById('rndTrainingForm').style.display = "none";
  document.getElementById('specialAssignmentsForm').style.display = "none";
  return false;
})

$('#aeorServices').click( () => {
  modal.style.display = "block";
  document.getElementById('researchreportForm').style.display = "none";
  document.getElementById('aeorServicesForm').style.display = "block";
  document.getElementById('dataServicesForm').style.display = "none";
  document.getElementById('infoServicesForm').style.display = "none";
  document.getElementById('recyclingShivirForm').style.display = "none";
  document.getElementById('videoMagazineForm').style.display = "none";
  document.getElementById('rndTrainingForm').style.display = "none";
  document.getElementById('specialAssignmentsForm').style.display = "none";
  return false;
})

$('#dataServices').click( () => {
  modal.style.display = "block";
  document.getElementById('researchreportForm').style.display = "none";
  document.getElementById('aeorServicesForm').style.display = "none";
  document.getElementById('dataServicesForm').style.display = "block";
  document.getElementById('infoServicesForm').style.display = "none";
  document.getElementById('recyclingShivirForm').style.display = "none";
  document.getElementById('videoMagazineForm').style.display = "none";
  document.getElementById('rndTrainingForm').style.display = "none";
  document.getElementById('specialAssignmentsForm').style.display = "none";
  return false;
})

$('#infoServices').click( () => {
  modal.style.display = "block";
  document.getElementById('researchreportForm').style.display = "none";
  document.getElementById('aeorServicesForm').style.display = "none";
  document.getElementById('dataServicesForm').style.display = "none";
  document.getElementById('infoServicesForm').style.display = "block";
  document.getElementById('recyclingShivirForm').style.display = "none";
  document.getElementById('videoMagazineForm').style.display = "none";
  document.getElementById('rndTrainingForm').style.display = "none";
  document.getElementById('specialAssignmentsForm').style.display = "none";
  return false;
})

$('#recyclingShivir').click( () => {
  modal.style.display = "block";
  document.getElementById('researchreportForm').style.display = "none";
  document.getElementById('aeorServicesForm').style.display = "none";
  document.getElementById('dataServicesForm').style.display = "none";
  document.getElementById('infoServicesForm').style.display = "none";
  document.getElementById('recyclingShivirForm').style.display = "block";
  document.getElementById('videoMagazineForm').style.display = "none";
  document.getElementById('rndTrainingForm').style.display = "none";
  document.getElementById('specialAssignmentsForm').style.display = "none";
  return false;
})

$('#videoMagazine').click( () => {
  modal.style.display = "block";
  document.getElementById('researchreportForm').style.display = "none";
  document.getElementById('aeorServicesForm').style.display = "none";
  document.getElementById('dataServicesForm').style.display = "none";
  document.getElementById('infoServicesForm').style.display = "none";
  document.getElementById('recyclingShivirForm').style.display = "none";
  document.getElementById('videoMagazineForm').style.display = "block";
  document.getElementById('rndTrainingForm').style.display = "none";
  document.getElementById('specialAssignmentsForm').style.display = "none";
  return false;
})

$('#rndTraining').click( () => {
  modal.style.display = "block";
  document.getElementById('researchreportForm').style.display = "none";
  document.getElementById('aeorServicesForm').style.display = "none";
  document.getElementById('dataServicesForm').style.display = "none";
  document.getElementById('infoServicesForm').style.display = "none";
  document.getElementById('recyclingShivirForm').style.display = "none";
  document.getElementById('videoMagazineForm').style.display = "none";
  document.getElementById('rndTrainingForm').style.display = "block";
  document.getElementById('specialAssignmentsForm').style.display = "none";
  return false;
})

$('#specialAssignments').click( () => {
  modal.style.display = "block";
  document.getElementById('researchreportForm').style.display = "none";
  document.getElementById('aeorServicesForm').style.display = "none";
  document.getElementById('dataServicesForm').style.display = "none";
  document.getElementById('infoServicesForm').style.display = "none";
  document.getElementById('recyclingShivirForm').style.display = "none";
  document.getElementById('videoMagazineForm').style.display = "none";
  document.getElementById('rndTrainingForm').style.display = "none";
  document.getElementById('specialAssignmentsForm').style.display = "block";
  return false;
})

$('.topnavLi').click((e)=>{
  console.log(e.currentTarget.innerText);
  let clickedElement = e.currentTarget.innerText;
  if(clickedElement == "Home"){
    $('#homePanel').fadeIn();
    $('#articleSectionId').fadeIn();
    $('#vadvt1').fadeIn();
    $('#aboutusPanel').fadeOut();
    $('#contactPanel').fadeOut();
    $('#carPosts').fadeOut();
    $('#nimgPosts').fadeOut();
    $('#nvidPosts').fadeOut();
    closeCarPosts();
    closeImgPosts();
    closeVidPosts();
  }
  else if(clickedElement == "About Us"){
    $('#homePanel').fadeOut();
    $('#articleSectionId').fadeOut();
    $('#vadvt1').fadeOut();
    $('#aboutusPanel').fadeIn();
    $('#contactPanel').fadeOut();
    $('#carPosts').fadeOut();
    $('#nimgPosts').fadeOut();
    $('#nvidPosts').fadeOut();
    closeCarPosts();
    closeImgPosts();
    closeVidPosts();
  }
  else if(clickedElement == "Contact"){
    $('#homePanel').fadeOut();
    $('#articleSectionId').fadeOut();
    $('#vadvt1').fadeOut();
    $('#aboutusPanel').fadeOut();
    $('#contactPanel').fadeIn();
    $('#carPosts').fadeOut();
    $('#nimgPosts').fadeOut();
    $('#nvidPosts').fadeOut();
    closeCarPosts();
    closeImgPosts();
    closeVidPosts();
  }
  else{
    alert("Error occured. Please try again later.");
  }
})

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
nwesimgspan.onclick = function() {
  imgnewsmodal.style.display = "none";
  closeImgPosts();
}
nwesvidspan.onclick = function() {
  vidnewsmodal.style.display = "none";
  closeVidPosts();
}
visitorspan.onclick = function() {
  visitormodal.style.display = "none";
}
carouselspan.onclick = function() {
  carouselmodal.style.display = "none";
  closeCarPosts();
}

function closeCarPosts(){
  let ele = document.getElementsByClassName('carimgpostReadClass');
  for (var i=0; i< ele.length; i++ ) {
    document.getElementById(ele[i].id).style.display = 'none';
  }
}

function closeImgPosts(){
  let ele = document.getElementsByClassName('blogimgpostReadClass');
  for (var i=0; i< ele.length; i++ ) {
    document.getElementById(ele[i].id).style.display = 'none';
  }
}

function closeVidPosts(){
  let ele = document.getElementsByClassName('blogvidpostReadClass');
  for (var i=0; i< ele.length; i++ ) {
    document.getElementById(ele[i].id).style.display = 'none';
  }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == imgnewsmodal) {
    imgnewsmodal.style.display = "none";
    closeImgPosts();
  }
  if (event.target == vidnewsmodal) {
    vidnewsmodal.style.display = "none";
    closeVidPosts();
  }
  if (event.target == visitormodal) {
    visitormodal.style.display = "none";
  }
  if (event.target == carouselmodal) {
    carouselmodal.style.display = "none";
    closeCarPosts();
  }
}

$('.nblogimg').click(function(e) {
  // Clicked Row Button Id
  console.log(e.currentTarget.id);
  console.log(e.currentTarget.alt);
  // document.getElementById('blogimgitemClick').value = e.currentTarget.alt;
  // imgnewsmodal.style.display = "block";
  $('#homePanel').fadeOut();
  $('#articleSectionId').fadeOut();
  $('#vadvt1').fadeOut();
  $('#aboutusPanel').fadeOut();
  $('#contactPanel').fadeOut();
  $('#carPosts').fadeOut();
  $('#nimgPosts').fadeIn();
  $('#nvidPosts').fadeOut();
  $('#blogimgpostRead' + e.currentTarget.alt).show();
  window.scrollTo(0, 0);
  e.preventDefault();
  // your code here
  return false;
})