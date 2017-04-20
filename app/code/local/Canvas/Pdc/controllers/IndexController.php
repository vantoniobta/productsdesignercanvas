<?php
class Canvas_Pdc_IndexController extends Mage_Core_Controller_Front_Action { 

    // public function preDispatch(){
    //     parent::preDispatch();
    //     if (!Mage::getSingleton('customer/session')->authenticate($this)) {
    //         $this->getResponse()->setRedirect(Mage::helper('customer')->getLoginUrl());
    //         $this->setFlag('', self::FLAG_NO_DISPATCH, true);
    //     }
    // }
	public function indexAction() {
		$this->loadLayout();
        $this->renderLayout();
        return $this;
    }
    public function imagenpdcAction() {
      // if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
      //   $fecha=date('Y-m-d');
      //   $cliente=Mage::getSingleton('customer/session')->getCustomer()->getId();
      //   $rawImage=$GLOBALS['HTTP_RAW_POST_DATA'];
      //   $removeHeaders=substr($rawImage,strpos($rawImage, ",")+1);
      //    //GENERAR NOMBRE DEL PRODCUTOS ->FECHA->NUMERO RANDOM
      //   $imagen_Nombre='pdc-'.date('Y-m-d-H-s').rand(5,1000) . rand(1, 10). rand(10000, 150000) .rand(1500, 100000000).".png";
      //   $code=base64_decode($removeHeaders);
      //   $fopen=fopen($imagen_Nombre,'wb');
      //   fwrite($fopen, $code);
      //   fclose($fopen);
      //   # INSERTAR A LA BASE DE DATOS
      //   $link = mysql_connect('localhost','root', '12345') OR DIE(mysql_error);
      //   mysql_select_db("pdc", $link);
      //   mysql_query("INSERT INTO test_pdc (`clave_pdc`,`fecha`,`customer_entity_id`) VALUES ('$imagen_Nombre','$fecha','$cliente')") OR DIE(mysql_error());
      //   mysql_close($link);
      //   }

    }

    public function carritopdcAction() {
    }

    public function pedidoAction() {
        //optener el id del cliente logeado....!!!
    //$id_cliente=Mage::getSingleton('customer/session')->getCustomer()->getId();

     }

}
