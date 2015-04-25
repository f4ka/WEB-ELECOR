addEvent(window,'load',inicializarEventos,false);

function inicializarEventos()
{
  var ob;
  for(f=1;f<=16;f++)
  {
    ob=document.getElementById('enlace'+f);
    
    addEvent(ob,'click',presionEnlace,false);
  }
}

function presionEnlace(e)
{
  if (window.event)
  {
    window.event.returnValue=false;
    var url=window.event.srcElement.getAttribute('href');
    cargarHoroscopo(url);     
  }
  else
    if (e)
    {
      e.preventDefault();
      var url=e.target.getAttribute('href');
      cargarHoroscopo(url);     
    }
}


var conexion1;
function cargarHoroscopo(url) 
{
  if(url=='')
  {
    return;
  }
  conexion1=crearXMLHttpRequest();
  conexion1.onreadystatechange = procesarEventos;
  conexion1.open("GET", url, true);
  conexion1.send(null);
}

function procesarEventos()
{
  var detalles = document.getElementById("detalles");
  if(conexion1.readyState == 4)
  {
    detalles.innerHTML = conexion1.responseText;
  } 
  else 
  {
    detalles.innerHTML = '';
  }
}

//***************************************
//Funciones comunes a todos los problemas
//***************************************
function addEvent(elemento,nomevento,funcion,captura)
{
  if (elemento.attachEvent)
  {
    elemento.attachEvent('on'+nomevento,funcion);
    return true;
  }
  else  
    if (elemento.addEventListener)
    {
      elemento.addEventListener(nomevento,funcion,captura);
      return true;
    }
    else
      return false;
}

function crearXMLHttpRequest() 
{
  var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else 
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}


$('enviar').click(function() {
    $.ajax({
        type: “POST”,
        url: “https://mandrillapp.com/api/1.0/messages/send.json”,
        data: {
        ‘key’: ‘7AK3eqF-ROo4Lr9pLw1Gyg’,
        ‘message’: {
        ‘from_email’: ‘facundo.gomezalgazan@gmail.com’,
        ‘to’: [
        {
        ‘email’: ‘nicolasbloj@gmail.com’,
        ‘name’: ‘Nico’,
        ‘type’: ‘to’
    },
           {
        ‘email’: ‘fgomezalgazan@gmail.com’,
        ‘name’: ‘Facu’,
        ‘type’: ‘to’
    }
           ],
           ‘autotext’: ‘true’,
           ‘subject’: ‘Test Envio mail’,
           ‘html’: ‘Texto del mail’
           }
           }
           }).done(function(response) {
        console.log(response); // if you're into that sorta thing
    });
});