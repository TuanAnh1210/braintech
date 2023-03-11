<?php ipView('client.component.header') ?>
<div class="wrapper">
    <div class="container">
        <h1 class="container_h2">Bài viết đã lưu</h1>
        <div class="content">
            <div>
                <div class="title">
              
                    <p class="title1">Bài viết (0)</p> 
                 <hr>
                </div>
                    <div class="hr">
                        <hr>
                    </div>
                
                <div class="content1">
                    <p class="content1_p"> Bạn chưa lưu bài viết nào.</p>
                    <span>
                 
                       <p>   Bấm vào đây để  </p> 
                         <a href="<?= $GLOBALS['domainPage'] ?>/blog">
                            <p class="p1">  xem các bài viết nổi bật. </p>
                        </a>
                    </span>
                </div>
            </div>




            <div class="aside_img">
                <img src="<?= $GLOBALS['domainPage'] ?>/public/imgs/blog left.png" alt="" width="350">
            </div>
        </div>
    </div>

</div>
<?php ipView('client.component.footer') ?>