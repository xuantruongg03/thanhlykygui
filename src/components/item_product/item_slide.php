<!-- 
    - $id: string
    - $type: string
    - $name: string
    - $price: string
    - $image: string
	- $description: string
 -->
<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
    <!-- Block2 -->
    <div class="block2">
        <div class="block2-pic hov-img0">
            <img src="<?php echo $image?>" alt="IMG-PRODUCT" style="height: 380px;">
			<div class="flex-col-c-m size-123 bg9 how-pos5">
            <span class="ltext-107 cl2 txt-center"><?php echo $size; ?></span>
            <span class="stext-109 cl3 txt-center">size</span>
        	</div>
        		<?php
	if($quantity == 0){
	 ?>
    <div style="position: absolute; top: 0; right: 0; background-color: rgba(255,255,255,0.7); padding: 5px;">
        hết hàng
    </div>
	<?php }?>
            <a href="#"
                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal4"
                id="<?php echo $id ?>">
                Xem nhanh
            </a>
        </div>

        <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l ">
                <a href="/kygui/src/pages/product-detail.php?id=<?php echo $id?>"
                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    <?php echo $name ?>
                </a>

                <span class="stext-105 cl3">
                    <?php echo number_format($price, 0, '', '.') ?> VNĐ
                </span>
            </div>

            <div class="block2-txt-child2 flex-r p-t-3">
                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                    <img class="icon-heart1 dis-block trans-04" src="/kygui/src/images/icons/icon-heart-01.png" alt="ICON">
                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/kygui/src/images/icons/icon-heart-02.png" alt="ICON">
                </a>
            </div>
        </div>
    </div>
</div>