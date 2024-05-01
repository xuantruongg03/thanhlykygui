<!-- $blog_title = $row['blog_title'];
        $blog_des = $row['blog_des'];
        $blog_image = $row['blog_image'];
        $blog_created_at = $row['blog_created_at']; -->

<div class="p-b-63">
    <a href="/kygui/src/pages/blog-detail.php?id=<?php echo $blog_id;?>" class="hov-img0 how-pos5-parent">
        <img src="<?php echo $blog_image; ?>" alt="IMG-BLOG">
        <div class="flex-col-c-m size-123 bg9 how-pos5">
            <span class="ltext-107 cl2 txt-center"><?php echo date('d', strtotime($row['blog_created_at'])); ?></span>
            <span class="stext-109 cl3 txt-center"><?php echo date("M Y", strtotime($blog_created_at)); ?></span>
        </div>
    </a>
    <div class="p-t-32">
        <h4 class="p-b-15">
            <a href="/kygui/src/pages/blog-detail.php?id=<?php echo $blog_id;?>" class="ltext-108 cl2 hov-cl1 trans-04"><?php echo $blog_title; ?></a>
        </h4>
        <p class="stext-117 cl6"><?php echo $blog_des; ?></p>
        <div class="flex-w flex-sb-m p-t-18">
            <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                <span><span class="cl4">By</span> Admin <span class="cl12 m-l-4 m-r-6">|</span></span>
                <a href="/kygui/src/pages/blog-detail.php?id=<?php echo $blog_id;?>" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">Continue Reading <i class="fa fa-long-arrow-right m-l-9"></i></a>
            </span>
        </div>
    </div>
</div>