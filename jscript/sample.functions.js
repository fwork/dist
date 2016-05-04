

// **********  Show Division      *************

function showComment(str,str1)  {
 var tE  = document.getElementById(str);
 var obj = document.getElementById(str1);
 if(tE.style.display!= "block"){
 tE.style.display="block";
 obj.src = "../images/retract.gif";
 } else {
 tE.style.display="none";
 obj.src = "../images/collapse.gif";
 }
 }




// ******* Opening a Window  *************

 var helpWindow = '';
  function showHelp(url) {
   w = screen.availWidth;
   h = screen.availHeight;
    var popW = 775, popH = 550;
var leftPos = (w-popW)/2, topPos = (h-popH)/2;  

      helpWindow = window.open(url,'helpwindow','width=775,height=550,toolbar=no, location=no,directories=no,status=yes,menubar=no,scrollbars=yes,copyhistory=yes,resizable=no,top=' + topPos + ',left=' + leftPos);
  }   




// ************  Displaying live date/Time **************


function date_time(id)
{
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        result = ''+days[day]+' '+months[month]+' '+d+', '+year+' '+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time("'+id+'");','1000');
        return true;
}











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









//  ******* Windows **********


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
