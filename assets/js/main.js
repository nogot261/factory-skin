document.addEventListener('DOMContentLoaded', function(){
  const btn=document.getElementById('accessToggle');
  const saved=localStorage.getItem('accessMode')==='1';
  if(saved) document.body.classList.add('access-mode');
  if(btn){btn.addEventListener('click', function(){document.body.classList.toggle('access-mode'); localStorage.setItem('accessMode', document.body.classList.contains('access-mode')?'1':'0');});}
});
