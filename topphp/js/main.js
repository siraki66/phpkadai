(function() {
    'use strict';
  
    var cmds = document.getElementsByClassName('del');
    var i;
  
    for (i = 0; i < cmds.length; i++) {
      cmds[i].addEventListener('click', function(e) {
        e.preventDefault();
        if (confirm('are you sure?')) {
          document.getElementById('form_' + this.dataset.id).submit();
        }
      });
    }
  
  })();



  // function disp(){
  //   if(window.confirm('本当にいいんですね？')){
  //      return true;
  //   } else{
   
  //      window.alert('キャンセルされました');
  //      return false;
  //   }
  // }