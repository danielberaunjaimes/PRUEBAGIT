// JavaScript Document
var msgRes  ="";
var activo  =true;
var bloqueo =false;
var lanzado =false;
var sstatus =false;
function startPop(thisurl,ancho,alto,x,y) 
{	popUp = window.open(thisurl, "Activos","scrollbars=no,toolbar=no,titlebar=yes,menubar=no,width="+ancho+",height="+alto+",top="+y+",left="+(x)+"");
}