<?php ipView('client.component.header') ?>
<div class="wrapper">
    <div class="container">
        <h1 class="container_h2">Bài viết của tôi</h1>
        <div class="content">
            <div>
                <div class="title">
                <a href="<?= $GLOBALS['domainPage'] ?>/posts">
                    <p class="title1">Bản Nháp</p> 
                     
                    </a>
                <a href="<?= $GLOBALS['domainPage'] ?>/posts/published">
                    <p class="title2">Đã Xuất Bản</p>
                    <hr> 
                </a>
                </div>
                    <div class="hr">
                        <hr>
                    </div>
                
                <div class="content1">
                    <p class="content1_p"> Chưa có xuất bản nào.</p>
                    <span>
                       <p> Bạn có thể </p> 
                         <a href="<?= $GLOBALS['domainPage'] ?>/write">
                            <p class="p1"> viết bài mới </p>
                        </a>
                        <p> hoặc</p> 
                         <a href="<?= $GLOBALS['domainPage'] ?>/blog">
                            <p  class="p1"> đọc bài viết</p>
                        </a>
                        <p>  khác trên F8 nhé. </p> 
                    </span>
                    <span>
                       <p> Bạn có thể xem</p> 
                         <a href="<?= $GLOBALS['domainPage'] ?>/posts/postsSaved">
                            <p class="p1"> bài viết đã lưu .</p>
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