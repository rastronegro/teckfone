<?php
//$busca = $_POST["filtro"];

//window.location.replace("http://localhost/teckfone/loja-".$id);

/*

if(isset($_GET['filtro']))
{
   $id = $_GET['filtro'];
   window.open("http://localhost/teckfone/loja-".$id);
}
*/


       if(isset($_GET['busca'])){
	     $id = $_GET['busca'];
      header('Location: http://localhost/teckfone/loja-'.$id);
        }

?>
