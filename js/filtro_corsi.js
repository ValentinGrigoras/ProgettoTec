function filterSelection(c) {
  displayAll();
  if (c!=0){
    var x, i;
    x = document.getElementsByClassName("filterDiv"); 
    for (i = 0; i < x.length; i++) {
      var arr=x[i].className.split(" ");
      if (c==0) 
        x[i].style.display="block";
      else
        if (arr[2]!=String(c)) 
            x[i].style.display = "none"; 
    }
  }
}
function displayAll(){
  x = document.getElementsByClassName("filterDiv"); 
  for (i = 0; i < x.length; i++) {
    x[i].style.display="block";
  }
}
var sel = document.getElementById("seleziona_corso");
sel.addEventListener('change', function() {filterSelection(sel.options[sel.selectedIndex].value)} ,false);