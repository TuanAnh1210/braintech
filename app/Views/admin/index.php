<?php ipView("admin.component.header") ?>

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">groups</i>
                        </div>
                        <p class="card-category ">Học viên</p>
                        <h3 class="card-title learner">
                            49/50

                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">

                            <i class="material-icons text-warning">person_add</i>
                            <a href="#pablo" class="warning-link">Tổng học viên</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">code</i>
                        </div>
                        <p class="card-category">Front-End</p>
                        <h3 data-course="1" class="card-title course-js">$34,24</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i>Tổng khóa học
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">data_object</i>
                        </div>
                        <p class="card-category">Back-End</p>
                        <h3 data-course="2" class="card-title course-js">75</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i>Tổng khóa học
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">data_array</i>
                        </div>
                        <p class="card-category">Khóa Pro</p>
                        <h3 data-course="3" class="card-title course-js">+245</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i>Tổng khóa học
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content: space-between;" class="card-header card-header-primary">
                        <div class="courses-heading">
                            <h4 class="card-title ">Doanh thu năm 2023</h4>
                            <p class="card-category"> Tổng doanh thu: <strong
                                    style="font-size: 20px; letter-spacing: 1px; margin-left: 10px;"
                                    class="totalRevenue"></strong></p>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th width="5%">
                                        ID
                                    </th>
                                    <th width="35%">
                                        Khóa học
                                    </th>
                                    <th width="20%">
                                        Số lượng bán
                                    </th>

                                    <th width="20%">
                                        Giá
                                    </th>
                                    <th width="20%">
                                        Tổng
                                    </th>
                                </thead>

                                <tbody>
                                    <?php foreach ($data as $key => $value) :

                                    ?>


                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<script>
const data = <?= json_encode($data) ?>;
const users = <?= json_encode($users) ?>;
const courses = <?= json_encode($courses) ?>;



data.forEach(element => {
    for (let i in element) {
        if (!isNaN(Number(i))) {
            delete element[i];
        }
    }
});

users.forEach(element => {
    for (let i in element) {
        if (!isNaN(Number(i))) {
            delete element[i];
        }
    }
});
courses.forEach(element => {
    for (let i in element) {
        if (!isNaN(Number(i))) {
            delete element[i];
        }
    }
});


const totalRevenue = document.querySelector(".totalRevenue")
const totalMoney = data.reduce((pre, cur) => pre + cur.price * cur.bought, 0)

totalRevenue.innerText = totalMoney.toLocaleString() + "đ"

const newData = data.map(item => {
    const total = item.bought * item.price
    return {
        ...item,
        total
    }
})

document.querySelector("tbody").innerHTML = newData.map((item, i) => `
<tr>
                                        <td>
                                            ${++i}
                                        </td>
                                        <td>
                                            ${item.name}
                                        </td>
                                        <td>
                                        ${item.bought}
                                        </td>
                                        <td>
                                        ${item.price.toLocaleString()}đ
                                        </td>
                                        <td>
                                        ${item.total.toLocaleString()}đ
                                        </td>

                                    </tr>
`).join("")


// 

const learner = document.querySelector(".learner")
learner.innerText = users.filter(item => item.role == 1).length

const course_js = document.querySelectorAll(".course-js")

course_js.forEach(item => {
    item.innerText = courses.filter(ele => ele.cate_id == item.dataset.course).length
})
</script>
<?php ipView("admin.component.footer") ?>