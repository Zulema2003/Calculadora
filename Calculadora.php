<? php
$ valoruno = $ _POST [ '1er' ];
$ valordos = $ _POST [ '2do' ];


$ opcion = $ _POST [ 'operaciones' ];

$ Resultado = "Su resultado es:" ;

if ( $ opcion == 'suma' )
{
 echo  $ Resultado = ( $ valoruno + $ valordos );
}

otra cosa  si ( $ opcion == 'mult' )
{
 echo  $ Resultado = ( $ valoruno * $ valordos );
}

otra cosa  si ( $ opcion == 'divs' )
{
 echo  $ Resultado = ( $ valoruno / $ valordos );
}

otra cosa  si ( $ opcion == 'resto' )
{
 echo  $ Resultado = ( $ valoruno - $ valordos );
}
?>

< html >
< cabeza >
< link  rel = " stylesheet " type = " text / css " href = " diseño.css " />
</ cabeza >
< cuerpo >
< encabezado >
  < div  align = " center " id = " Titulo " >
   < h1 > RESPUESTA </ h1 >
 </ div >
</ header >
< sección >
 < div  align = " center " id = " Resultado " >
    < p >  <? php  echo  'EL RESULTADO DE LA OPERACIÓN ES:' . $ Resultado ; ?>  </ php >
 </ div >
 </ sección >
</ cuerpo >
</ html >
