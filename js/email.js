var x;
      var answer = document.getElementById("answer");
      answer.onclick = function(){
          x = document.getElementById("forUser").value;
          if(x){alert('Адрес' + ' ' + x + ' ' + 'успешно добавлен в список рассылки');}
          else{alert('Введите адрес!');}
      }
      $('button').click(function(){
   $('input[type="text"]').val('');
});