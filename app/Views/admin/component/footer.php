<footer class="footer">
    <div class="container-fluid">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="https://www.creative-tim.com"> Creative Tim </a>
                </li>
                <li>
                    <a href="https://creative-tim.com/presentation"> About Us </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com"> Blog </a>
                </li>
                <li>
                    <a href="https://www.creative-tim.com/license"> Licenses </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right" id="date">
            , made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
            for a better web.
        </div>
    </div>
</footer>
<script>
    const x = new Date().getFullYear();
    let date = document.getElementById("date");
    date.innerHTML = "&copy; " + x + date.innerHTML;
</script>
</div>
</div>

<!--   Core JS Files   -->
<script src="http://localhost/braintech/public/js/admin/core/jquery.min.js"></script>
<script src="http://localhost/braintech/public/js/admin/core/popper.min.js"></script>
<script src="http://localhost/braintech/public/js/admin/core/bootstrap-material-design.min.js"></script>

<script src="https://unpkg.com/default-passive-events"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="http://localhost/braintech/public/js/admin/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="http://localhost/braintech/public/js/admin/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="http://localhost/braintech/public/js/admin/material-dashboards.js?v=2.1.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="http://localhost/braintech/public/js/admin/demo.js"></script>
<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $(".sidebar");

            $sidebar_img_container = $sidebar.find(".sidebar-background");

            $full_page = $(".full-page");

            $sidebar_responsive = $("body > .navbar-collapse");

            window_width = $(window).width();

            $(".fixed-plugin a").click(function(event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass("switch-trigger")) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $(".fixed-plugin .active-color span").click(function() {
                $full_page_background = $(".full-page-background");

                $(this).siblings().removeClass("active");
                $(this).addClass("active");

                var new_color = $(this).data("color");

                if ($sidebar.length != 0) {
                    $sidebar.attr("data-color", new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr("filter-color", new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr("data-color", new_color);
                }
            });

            $(".fixed-plugin .background-color .badge").click(function() {
                $(this).siblings().removeClass("active");
                $(this).addClass("active");

                var new_color = $(this).data("background-color");

                if ($sidebar.length != 0) {
                    $sidebar.attr("data-background-color", new_color);
                }
            });

            $(".fixed-plugin .img-holder").click(function() {
                $full_page_background = $(".full-page-background");

                $(this).parent("li").siblings().removeClass("active");
                $(this).parent("li").addClass("active");

                var new_image = $(this).find("img").attr("src");

                if (
                    $sidebar_img_container.length != 0 &&
                    $(".switch-sidebar-image input:checked").length != 0
                ) {
                    $sidebar_img_container.fadeOut("fast", function() {
                        $sidebar_img_container.css(
                            "background-image",
                            'url("' + new_image + '")'
                        );
                        $sidebar_img_container.fadeIn("fast");
                    });
                }

                if (
                    $full_page_background.length != 0 &&
                    $(".switch-sidebar-image input:checked").length != 0
                ) {
                    var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                        .find("img")
                        .data("src");

                    $full_page_background.fadeOut("fast", function() {
                        $full_page_background.css(
                            "background-image",
                            'url("' + new_image_full_page + '")'
                        );
                        $full_page_background.fadeIn("fast");
                    });
                }

                if ($(".switch-sidebar-image input:checked").length == 0) {
                    var new_image = $(".fixed-plugin li.active .img-holder")
                        .find("img")
                        .attr("src");
                    var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                        .find("img")
                        .data("src");

                    $sidebar_img_container.css(
                        "background-image",
                        'url("' + new_image + '")'
                    );
                    $full_page_background.css(
                        "background-image",
                        'url("' + new_image_full_page + '")'
                    );
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css(
                        "background-image",
                        'url("' + new_image + '")'
                    );
                }
            });

            $(".switch-sidebar-image input").change(function() {
                $full_page_background = $(".full-page-background");

                $input = $(this);

                if ($input.is(":checked")) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn("fast");
                        $sidebar.attr("data-image", "#");
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn("fast");
                        $full_page.attr("data-image", "#");
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr("data-image");
                        $sidebar_img_container.fadeOut("fast");
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr("data-image", "#");
                        $full_page_background.fadeOut("fast");
                    }

                    background_image = false;
                }
            });

            $(".switch-sidebar-mini input").change(function() {
                $body = $("body");

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $("body").removeClass("sidebar-mini");
                    md.misc.sidebar_mini_active = false;

                    $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar();
                } else {
                    $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar(
                        "destroy"
                    );

                    setTimeout(function() {
                        $("body").addClass("sidebar-mini");

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event("resize"));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();
    });
</script>

<script>
    // handle active header__item
    const items = document.querySelectorAll(".nav-item");
    const pathPage = window.location.pathname;

    const arrPath = pathPage.split("/");

    items.forEach((item) => {
        if (item.getAttribute("data-item") == arrPath[arrPath.length - 1] || item.getAttribute("data-item") ==
            arrPath[arrPath.length - 2]) {
            item.classList.add("active");
        } else if (arrPath[arrPath.length - 1] == "admin_chapter" && item.getAttribute("data-item") ==
            "admin_courses" || arrPath[arrPath.length - 2] ==
            "admin_chapter" && item.getAttribute("data-item") ==
            "admin_courses") {
            item.classList.add("active");

        } else if (arrPath[arrPath.length - 1] == "admin_lesson" && item.getAttribute("data-item") ==
            "admin_courses" || arrPath[arrPath.length - 2] ==
            "admin_lesson" && item.getAttribute("data-item") ==
            "admin_courses") {
            item.classList.add("active");

        } else if (arrPath[arrPath.length - 1] == "admin_quizz" && item.getAttribute("data-item") ==
            "admin_courses") {
            item.classList.add("active");

        } else if (arrPath[arrPath.length - 1] == "admin_answer" && item.getAttribute("data-item") ==
            "admin_courses" || arrPath[arrPath.length - 2] ==
            "admin_answer" && item.getAttribute("data-item") ==
            "admin_courses") {
            item.classList.add("active");

        }
    });
</script>
</body>

</html>