
<?php
class Canvas_Pdc_Model_Observer {

	public function salesPostData(Varien_Event_Observer $observer)
	{
   //  $usuario=Mage::getSingleton('customer/session')->getCustomer()->getId();
   //  $last_order_increment_id = Mage::getModel("sales/order")->getCollection()->getLastItem()->getIncrementId();
   //  $_numero_pedido=$last_order_increment_id+1;
	  // $fecha=date('Y-m-d');
	  // $link = mysql_connect('localhost','root', '12345') OR DIE(mysql_error);
   //  mysql_select_db("pdc", $link);
   //  $dato=mysql_query("select clave_pdc from test_pdc where customer_entity_id='$usuario' AND fecha='$fecha'");
   //  while ($row=mysql_fetch_array($dato)) {
   //  	# code...
   //  	$a=$row['clave_pdc'];

   //  	mysql_query("INSERT INTO pedido_pdc(clave_pdc,customer_entity_id,no_p) VALUES('$a','$usuario','$_numero_pedido') ");
   //  	mysql_query("DELETE FROM test_pdc WHERE customer_entity_id='$usuario'");    	
   //  }

	}
   public function addPostData(Varien_Event_Observer $observer)
   {

   }

}