$(document).ready(function() {
    
});

// Get the modal
var modal = document.getElementById("myModal");
var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var add = document.getElementById("btncarAdd");
var addnewsImg = document.getElementById("btnnewsimgAdd");
var addnewsVid = document.getElementById("btnnewsvidAdd");
// var addAdvt = document.getElementById("btnadvtAdd");

// var update = document.getElementById("btncarUpdate");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close")[1];
var span2 = document.getElementsByClassName("close")[2];

// When the user clicks on the button, open the modal
add.onclick = function() {
  modal.style.display = "block";
  document.getElementById('addImage').style.display = "block";
  document.getElementById('updateImage').style.display = "none";
  document.getElementById('addnewsImage').style.display = "none";
  document.getElementById('updatenewsImage').style.display = "none";
  document.getElementById('addnewsVideo').style.display = "none";
  document.getElementById('updatenewsVideo').style.display = "none";
  return false;
}

addnewsImg.onclick = function() {
  modal1.style.display = "block";
  document.getElementById('addImage').style.display = "none";
  document.getElementById('updateImage').style.display = "none";
  document.getElementById('addnewsImage').style.display = "block";
  document.getElementById('updatenewsImage').style.display = "none";
  document.getElementById('addnewsVideo').style.display = "none";
  document.getElementById('updatenewsVideo').style.display = "none";
  return false;
}

addnewsVid.onclick = function() {
  modal1.style.display = "block";
  document.getElementById('addImage').style.display = "none";
  document.getElementById('updateImage').style.display = "none";
  document.getElementById('addnewsImage').style.display = "none";
  document.getElementById('updatenewsImage').style.display = "none";
  document.getElementById('addnewsVideo').style.display = "block";
  document.getElementById('updatenewsVideo').style.display = "none";
  return false;
}

// addAdvt.onclick = function() {
//   modal2.style.display = "block";
//   document.getElementById('addImage').style.display = "none";
//   document.getElementById('updateImage').style.display = "none";
//   document.getElementById('addnewsImage').style.display = "none";
//   document.getElementById('updatenewsImage').style.display = "none";
//   document.getElementById('addnewsVideo').style.display = "none";
//   document.getElementById('updatenewsVideo').style.display = "none";
//   document.getElementById('addAdvt').style.display = "block";
//   document.getElementById('updateAdvt').style.display = "none";
//   return false;
// }

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

span1.onclick = function() {
  modal1.style.display = "none";
}

span2.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}

$('.btncarouselUpdate').click(function(e) {
    // Clicked Row Button Id
    console.log(e.currentTarget.value);
    // Row number
    console.log(document.getElementById(e.currentTarget.id).parentNode.parentNode.rowIndex);
    document.getElementById('btncarcnfUpdate').value = e.currentTarget.value;//document.getElementById(e.currentTarget.id).parentNode.parentNode.rowIndex;
    console.log("btncarcnfUpdate " + document.getElementById('btncarcnfUpdate').value);
    modal.style.display = "block";
    document.getElementById('addImage').style.display = "none";
    document.getElementById('updateImage').style.display = "block";
    document.getElementById('addnewsImage').style.display = "none";
    document.getElementById('updatenewsImage').style.display = "none";
    document.getElementById('addnewsVideo').style.display = "none";
    document.getElementById('updatenewsVideo').style.display = "none";
    // prevent click action
    e.preventDefault();
    // your code here
    return false;
});

$('.btnnewsimgUpdate').click(function(e) {
  // Clicked Row Button Id
  console.log(e.currentTarget.id);
  // Row number
  console.log(document.getElementById(e.currentTarget.id).parentNode.parentNode.rowIndex);
  document.getElementById('btnnewsimgcnfUpdate').value = e.currentTarget.value;//document.getElementById(e.currentTarget.id).parentNode.parentNode.rowIndex;
  console.log("btncarcnfUpdate " + document.getElementById('btncarcnfUpdate').value);
  modal1.style.display = "block";
  document.getElementById('addImage').style.display = "none";
  document.getElementById('updateImage').style.display = "none";
  document.getElementById('addnewsImage').style.display = "none";
  document.getElementById('updatenewsImage').style.display = "block";
  document.getElementById('addnewsVideo').style.display = "none";
  document.getElementById('updatenewsVideo').style.display = "none";
  // prevent click action
  e.preventDefault();
  // your code here
  return false;
});

$('.btnnewsvidUpdate').click(function(e) {
  // Clicked Row Button Id
  console.log(e.currentTarget.id);
  // Row number
  console.log(document.getElementById(e.currentTarget.id).parentNode.parentNode.rowIndex);
  document.getElementById('btnnewsvidcnfUpdate').value = e.currentTarget.value;//document.getElementById(e.currentTarget.id).parentNode.parentNode.rowIndex;
  console.log("btncarcnfUpdate " + document.getElementById('btncarcnfUpdate').value);
  modal1.style.display = "block";
  document.getElementById('addImage').style.display = "none";
  document.getElementById('updateImage').style.display = "none";
  document.getElementById('addnewsImage').style.display = "none";
  document.getElementById('updatenewsImage').style.display = "none";
  document.getElementById('addnewsVideo').style.display = "none";
  document.getElementById('updatenewsVideo').style.display = "block";
  // prevent click action
  e.preventDefault();
  // your code here
  return false;
});

$('.btnadvtUpdate').click(function(e) {
  // Clicked Row Button Id
  console.log(e.currentTarget.id);
  // Row number
  console.log(document.getElementById(e.currentTarget.id).parentNode.parentNode.rowIndex);
  document.getElementById('btnadvtimgcnfUpdate').value = e.currentTarget.value;//document.getElementById(e.currentTarget.id).parentNode.parentNode.rowIndex;
  console.log("btncarcnfUpdate " + document.getElementById('btncarcnfUpdate').value);
  modal2.style.display = "block";
  document.getElementById('addImage').style.display = "none";
  document.getElementById('updateImage').style.display = "none";
  document.getElementById('addnewsImage').style.display = "none";
  document.getElementById('updatenewsImage').style.display = "none";
  document.getElementById('addnewsVideo').style.display = "none";
  document.getElementById('updatenewsVideo').style.display = "none";
  // document.getElementById('addAdvt').style.display = "none";
  document.getElementById('updateAdvt').style.display = "block";
  // prevent click action
  e.preventDefault();
  // your code here
  return false;
});

$('#liadminLogout').click(function(e) {
  $('#adminLogout').trigger('click');
})

$('#liadminHome').click(function(e) {
  $('#adminhomeDiv').show();
  $('#carouselUpdaterDiv').hide();
  $('#postsUpdaterDiv').hide();
  $('#submissionsDiv').hide();
  $('#advtUpdater').hide();
})

$('#liadminCarousel').click(function(e) {
  $('#adminhomeDiv').hide();
  $('#carouselUpdaterDiv').show();
  $('#postsUpdaterDiv').hide();
  $('#submissionsDiv').hide();
  $('#advtUpdater').hide();
})

$('#liadminPosts').click(function(e) {
  $('#adminhomeDiv').hide();
  $('#carouselUpdaterDiv').hide();
  $('#postsUpdaterDiv').show();
  $('#submissionsDiv').hide();
  $('#advtUpdater').hide();
})

$('#liadminSubmissions').click(function(e) {
  $('#adminhomeDiv').hide();
  $('#carouselUpdaterDiv').hide();
  $('#postsUpdaterDiv').hide();
  $('#submissionsDiv').show();
  $('#advtUpdater').hide();
})

$('#liadminAdvt').click(function(e) {
  $('#adminhomeDiv').hide();
  $('#carouselUpdaterDiv').hide();
  $('#postsUpdaterDiv').hide();
  $('#submissionsDiv').hide();
  $('#advtUpdater').show();
})