<?php
	$id=isset($GET['autorId'])?$_GET['autorId']:0;
	if($id!=0){
		$autor=Autor::buscarPorId($id);
	}else{
		$autor=new Autor();
	}

	<input type='text',
		    name='nombre', value="<?php echo $autor->nombre?>"
  		    value="<?=$autor->nombre?>"
        >

?>
