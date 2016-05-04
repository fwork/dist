// open a window for editing text

//  ********  Alert1 **********

function alert1_success (title,msg) {
swal(title, msg, 'success');
}


function alert1_basic (msg) {
swal( msg);
}

function alert1_basic_title (title,msg) {
swal(title,msg);
}

function alert1_warning (title,msg) {
swal({
  title: title,
  text: msg,
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "OK !",
  closeOnConfirm: false
},
function(){
  swal("Deleted!", "Your imaginary file has been deleted.", "success");
});
}



function alert1_input (title,msg) {

swal({
  title: title,
  text: msg,
  type: "input",
  showCancelButton: true,
  closeOnConfirm: false,
  animation: "slide-from-top",
  inputPlaceholder: "Write something"
},
function(inputValue){
  if (inputValue === false) return false;
  
  if (inputValue === "") {
    swal.showInputError("You need to write something!");
    return false
  }
  
  swal("Nice!", "You wrote: " + inputValue, "success");
});

}
























function EditWindow(theURL)
{ 
  var _W=window.open(theURL,'EditWindow','width=570,height=600,resizeable=1,scrollbars=1,left=20,top=40');
  _W.focus();
  _W.moveTo(50,50); 
}

function popupWindow(url,title,w,h,r,s) {
 var winl = (screen.width - w) / 2;
 var wint = (screen.height - h) / 2;
 var winprops = 'height='+h+',width='+w+',top='+wint+',left='+winl+',resizable='+r+',scrollbars='+s+',toolbar=0';
 var w = window.open(url, title, winprops);
 w.focus();
}

function popupWindow2(url,title,w,h,r,s,t) {
 var winl = (screen.width - w) / 2;
 var wint = (screen.height - h) / 2;
 var winprops = 'height='+h+',width='+w+',top='+wint+',left='+winl+',resizable='+r+',scrollbars='+s+',toolbar='+t;
 var w = window.open(url, title, winprops);
 w.focus();
}
