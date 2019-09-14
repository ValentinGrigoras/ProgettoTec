function isMobile() {
  var width = screen.width;
  return width<=480;
};
function filterSelection(op,classn) {
  displayAll(classn);
  if (op!=0){
    var x, i;
    x = document.getElementsByClassName(classn); 
    for (i = 0; i < x.length; i++) {
      var arr=x[i].className.split(" ");
      if (arr[2]!=String(op)) 
        x[i].style.display = "none"; 
    }
  }
}
function displayAll(classn){
  x = document.getElementsByClassName(classn); 
  for (i = 0; i < x.length; i++) {
    x[i].style.display="block";
  }
}
var sel = document.getElementById("seleziona_corso");
console.log(isMobile());
if (!isMobile()){
  sel.addEventListener('change', function() {filterSelection(sel.options[sel.selectedIndex].value, "deskFilterDiv")} ,false);
}else{
  sel.addEventListener('change', function() {filterSelection(sel.options[sel.selectedIndex].value, "mobileFilterDiv")} ,false);
}