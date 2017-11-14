 
//jangan dihapus ~Afuwwu~

var textarea0 = document.getElementById('textarea0');
var textarea1 = document.getElementById('textarea1');
var textarea2 = document.getElementById('textarea2');
textarea0.addEventListener('keydown', autosize);
textarea1.addEventListener('keydown', autosize);
textarea2.addEventListener('keydown', autosize);

//

function autosize(){
  var el = this;
  setTimeout(function(){
    el.style.cssText = 'height:auto; padding:0';
    el.style.cssText = 'height:' + el.scrollHeight + 'px';
  },0);
}
