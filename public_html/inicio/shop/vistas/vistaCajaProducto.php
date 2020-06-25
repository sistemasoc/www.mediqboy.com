<input type="hidden" name="idItem" id="idItem_<?php echo $contador;?>" value="<?php echo $item;?>">
<input type="hidden" name="nombreItem" id="nombreItem_<?php echo $contador;?>" value="<?php echo $nombreProducto;?>">
<li>
  <div class="product">
    <div class="product-thumb">
      <a><img class="imagen" src="../images/130001.jpg" alt=""></a>
    </div>
    <div  class="caja product-description clearfix">
      <h3 style="height: 90px;">
        <a href="#"><?php echo $nombreProducto; ?></a>
      </h3>
      <div class="carro">
        <a  href="" class="product-cart-btn pull-left carrito" id="carrito_<?php echo $contador;?>" data-toggle="modal" data-target="#modalProductos">
          <i class="icon-shopping-cart"></i>Añadir al carro
        </a>
      </div>
    </div>
  </div>
</li>
