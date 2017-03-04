<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" href="assets/css/amazeui.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/index.css">

    <title>首页</title>
</head>
<body>
<div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-article-margin">
    <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{&quot;controlNav&quot;:false}' >
        <ul class="am-slides lunbo-ul">
            <?php foreach ($rs as $v){?>
            <li class="lunbo-li" >
                <img  src="<?php echo $v->blog_img?>">
                <div class="blog-slider-desc am-slider-desc ">
                    <div class="blog-text-center blog-slider-con">
                        <span><a href="" class="blog-color"><?php echo $v->cate_name?>&nbsp;</a></span>
                        <h1 class="blog-h-margin"><a href=""><?php echo $v->blog_title?></a></h1>
                        <p><?php echo $v->introduce?>
                        </p>
                        <span class="blog-bor"><?php echo $v->postdate?></span>
                        <br><br><br><br><br><br><br>
                    </div>
                </div>
            </li>
            <?php }?>
           
        </ul>
    </div>
</div>
<!-- banner end -->

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-12 am-u-sm-12">
        <?php foreach ($rs as $v){?>
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                <img src="<?php echo $v->blog_img?>" alt="" class="am-u-sm-12">
            </div>
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                <span><a href="" class="blog-color"><?php echo $v->cate_name?>&nbsp;</a></span>
                <span> <?php echo $v->user_name?> &nbsp;</span>
                <span><?php echo $v->postdate?></span>
                <h1><a href=""><?php echo $v->blog_title?></a></h1>
                <p><?php echo $v->blog_content?>
                </p>
                <p><a href="" class="blog-continue">continue reading</a></p>
            </div>
        </article>
<?php }?>
        <div class="partpage">
            <?php echo $this->pagination->create_links();?>

        </div>

<!--        <ul class="am-pagination">-->
<!--            <li class="am-pagination-prev"><a href="">&laquo; Prev</a></li>-->
<!--            <li class="am-pagination-next"><a href="">Next &raquo;</a></li>-->
<!--        </ul>-->
    </div>

</div>
<!-- content end -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/index.js"></script>

</body>
</html>