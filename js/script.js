
var login_btn = document.getElementById('login_btn');
var sign_up_btn = document.getElementById('sign_up_btn');

function popup(container, inside){
  container.style.display = 'block';

  document.addEventListener('keydown', function(e){
    if(e.keyCode == 27){
      container.style.display = 'none';
    }
  }, false);

  container.addEventListener('click', function(){
    this.style.display = 'none';
  }, false);

  inside.addEventListener('click', function(e){
    e.stopPropagation();
  }, false);
}

sign_up_btn.addEventListener('click', function(){
  var container = document.getElementById('sign_up_container');
  var inside = document.getElementById('sign_up');
  popup(container, inside);
}, false);

login_btn.addEventListener('click', function(){
  var container = document.getElementById('login_container');
  var inside = document.getElementById('login');
  popup(container, inside);
}, false);
