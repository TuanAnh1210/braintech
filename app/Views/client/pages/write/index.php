<?php ipView('client.component.header') ?>

<div class="wrapper">
    <div class="conntainer">
        <h1 class="content-1">
            Viết Blog
        </h1>
        <div class="tieude">
            <input type="text" name="tieude" id="" class="td" placeholder="Tiêu đề blog...">
        </div>
        <div class="khoahoc">
            <select name="khoahoc1" id="" class="khoahoc1">
                <option value="0">Js</option>
                <option value="1">PHP</option>
                <option value="2">HTML</option>
                <option value="3">JAVA</option>
            </select>
        </div>
        <div class="image">
            <input type="file" name="" id="">
        </div>
        <div class="tieude">
            <p class="a">Nội dung bài viết</p>
        <textarea name="" id="" cols="30" class="nd" rows="10"  >
        </textarea>
    </div>

    <div  class="gui">
        <input type="submit" value="Gửi ">
    </div>
</div> <!--end Content-1  -->
</div> <!--end wrapper  -->

<?php ipView('client.component.footer') ?>