function fbCallback(value) {
  var statusHTML = [];

  console.dir(value);

  for (var i=0; i < value.data.length; i++){
    var msg;
    var foto    = value.data[i].picture;
    var link    = value.data[i].link;
    var saida;

    if(value.data[i].message){
        msg = value.data[i].message;
    } else {
    	// your default message
        msg = 'Confira mais novidades na nossa fanpage ;)';
    }

    //configure your layout here
    saida = '<a href="'+link+'" target="_blank"><div class="boxNovidade wow animated fadeIn">'+
               '<div class="imgNovidade"><img src="'+foto+'"/></div>'+
                '<div class="infoNovidade">'+
                   '<span>'+msg+'</span>'+
                '</div>'+
            '</div></a>';

    statusHTML.push(saida);

  }
  //div id put result
  document.getElementById('recebeFb').innerHTML = statusHTML.join('');

}