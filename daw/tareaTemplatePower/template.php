<? 
require "./clases/TemplatePower.inc.php"; 
$t = new TemplatePower("plantillas/cat_productos.tpl"); 
$t->prepare(); 
//Asignamos el valor “Material de cocina a la variable nombrecategoria en //el template
$t->assign(array(nombrecategoria => 'Material de cocina'));
//Preparamos la parte de productos 
 $nombreproducto=array("sarten","sarten","horno");
 $idproducto=range(0,3);
 $descripcionproducto=array("sarten 22cm","sarten 29cm","horno pirolitico");
	for ($i=0;i<count($nombreproducto);$i++) {
        $t->newBlock("productos");
        $t->assign(array( 
              nombreproducto => $nombreproducto[$i], 
              idproducto => $idproducto[$i], 
              descripcionproducto => $descripcionproducto[$i]
              )); 
	}
$t->printToScreen(); 
?>
