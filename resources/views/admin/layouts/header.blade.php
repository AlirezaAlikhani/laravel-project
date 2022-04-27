<header class="header">


<section class="sidbar-header bg-gray">
    <section class="d-flex justify-content-between flex-md-row-reverse px-4">
        <span id="sidebar-toggle-show" class="d-inline d-md-none pointer"><i class="fas fa-toggle-off"></i></span>
        <span id="sidebar-toggle-hide" class="d-none d-md-inline pointer"><i class="fas fa-toggle-on"></i></span>
        <span><img class="logo" src="{{ asset('admin-assets/images/logo.svg') }}" width="50px" alt=""></span>
        <span id="menue-toggle" class="d-md-none"><i class="fas fa-ellipsis-h"></i></span>

    </section>
</section>
<section class="body-header" id="body-header">
    <section class="d-flex justify-content-between">
        <section>
            <span class="mr-5">
                <span id="search-area" class="search-area d-none">
                    <i id="search-area-hide" class="fas fa-times pointer"></i>
                    <input id="search-input" type="text" class="search-input pointer">
                <i class="fas fa-search pointer"></i>
                </span>
                <i id="search-toggle" class="fas fa-search p-2 d-none d-md-inline pointer"></i>
            </span>

            <span id="full-screen" class="pointer p-1 d-none d-md-inline mr-5">
                <i id="screen-compress" class="fas fa-compress d-none"></i>
                <i id="screen-expand" class="fas fa-expand"></i>
            </span>
        </section>
        <section class="header-comment">
            <span class="ml-2 ml-md-4 position-relative">
                <span id="header-notification-toggle" class="pointer">
                    <i class="far fa-bell"></i><sup class="badge badge-danger">4</sup>
                </span>
                <section id="header-notification"  class="header-notification rounded">
                    <section class="d-flex justify-content-between">
                        <span class="px-2">نوتیفیکشن ها</span>
                        <span class="px-2">
                            <span class="badge badge-danger"> جدید</span>
                        </span>
                    </section>

                    <ul class="list-group rounded px-0">
                        <li class="list-group-item list-grop--item-action">
                            <section class="media">
                                <img class="notifiaciton-img" src="assets/images/logo.svg" alt=" avatar">
                                <section class="media-body pr-1">
                                    <h5 class="notification-user">حمد هاشمی</h5>
                                    <p class="notification-text">این یک متن است</p>
                                    <p class="notification-time">30 دیقه پیش</p>
                                </section>
                            </section>
                        </li>
                        <li class="list-group-item list-grop--item-action">
                            <section class="media">
                                <img class="notifiaciton-img" src="assets/images/logo.svg" alt="">
                                <section class="media-body pr-1">
                                    <h5 class="notification-user">حمد هاشمی</h5>
                                    <p class="notification-text">این یک متن است</p>
                                    <p class="notification-time">30 دیقه پیش</p>
                                </section>
                            </section>
                        </li>
                        <li class="list-group-item list-grop--item-action">
                            <section class="media">
                                <img class="notifiaciton-img" src="assets/images/logo.svg" alt="">
                                <section class="media-body pr-1">
                                    <h5  class="notification-user">حمد هاشمی</h5>
                                    <p class="notification-text">این یک متن است</p>
                                    <p class="notification-time"> 30 دیقه پیش</p>
                                </section>
                            </section>
                        </li>
                    </ul>
                </section>
            </span>



            <span class="ml-2 ml-md-4 position-relative">
                <span class="pointer" id="header-comment-toggle">
                    <i class="far fa-comment-alt"><sup class="badge badge-danger">3</sup></i>
                </span>

                <section id="header-comment" class="header-content">
                    <section class="border-bottom px-4">
                         <input type="text" class="form-control form-control-sm my-4" placeholder="جستجو....">
                    </section>

                    <section class="header-comment-wrapper">
                        <ul class="list-group rounded px-0">
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <img src="assets/images/logo.svg"  alt="avatar" class="notifiaciton-img">
                                    <section class="media-body pr-1">
                                        <section class="d-flex justify-content-between">
                                            <h5 class="comment-uoser">محمد هاشمی</h5>
                                            <span><i class="fas fa-circle text-success cooment-user-status"></i></span>
                                        </section>
                                    </section>
                                </section>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <img src="assets/images/logo.svg"  alt="avatar" class="notifiaciton-img">
                                    <section class="media-body pr-1">
                                        <section class="d-flex justify-content-between">
                                            <h5 class="comment-uoser">محمد هاشمی</h5>
                                            <span><i class="fas fa-circle text-success cooment-user-status"></i></span>
                                        </section>
                                    </section>
                                </section>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <img src="assets/images/logo.svg"  alt="avatar" class="notifiaciton-img">
                                    <section class="media-body pr-1">
                                        <section class="d-flex justify-content-between">
                                            <h5 class="comment-uoser">محمد هاشمی</h5>
                                            <span><i class="fas fa-circle text-success cooment-user-status"></i></span>
                                        </section>
                                    </section>
                                </section>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <img src="assets/images/logo.svg"  alt="avatar" class="notifiaciton-img">
                                    <section class="media-body pr-1">
                                        <section class="d-flex justify-content-between">
                                            <h5 class="comment-uoser">محمد هاشمی</h5>
                                            <span><i class="fas fa-circle text-success cooment-user-status"></i></span>
                                        </section>
                                    </section>
                                </section>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <img src="assets/images/logo.svg"  alt="avatar" class="notifiaciton-img">
                                    <section class="media-body pr-1">
                                        <section class="d-flex justify-content-between">
                                            <h5 class="comment-uoser">محمد هاشمی</h5>
                                            <span><i class="fas fa-circle text-success cooment-user-status"></i></span>
                                        </section>
                                    </section>
                                </section>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <img src="assets/images/logo.svg"  alt="avatar" class="notifiaciton-img">
                                    <section class="media-body pr-1">
                                        <section class="d-flex justify-content-between">
                                            <h5 class="comment-uoser">محمد هاشمی</h5>
                                            <span><i class="fas fa-circle text-success cooment-user-status"></i></span>
                                        </section>
                                    </section>
                                </section>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <img src="assets/images/logo.svg"  alt="avatar" class="notifiaciton-img">
                                    <section class="media-body pr-1">
                                        <section class="d-flex justify-content-between">
                                            <h5 class="comment-uoser">محمد هاشمی</h5>
                                            <span><i class="fas fa-circle text-success cooment-user-status"></i></span>
                                        </section>
                                    </section>
                                </section>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <img src="assets/images/logo.svg"  alt="avatar" class="notifiaciton-img">
                                    <section class="media-body pr-1">
                                        <section class="d-flex justify-content-between">
                                            <h5 class="comment-uoser">محمد هاشمی</h5>
                                            <span><i class="fas fa-circle text-success cooment-user-status"></i></span>
                                        </section>
                                    </section>
                                </section>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <img src="assets/images/logo.svg"  alt="avatar" class="notifiaciton-img">
                                    <section class="media-body pr-1">
                                        <section class="d-flex justify-content-between">
                                            <h5 class="comment-uoser">محمد هاشمی</h5>
                                            <span><i class="fas fa-circle text-success cooment-user-status"></i></span>
                                        </section>
                                    </section>
                                </section>
                            </li>
                        </ul>
                    </section>

                </section>





            </span>


            <span class="ml-3 ml-md-5 position-relative">

                <span class="pointer" id="header-profile-toggle">
                    <img class="header-avar=tar" src="assets/images/logo.svg" width="50px" alt="">
                    <span class="header-username" >کامران محممدی</span>
                    <i class="fas fa-angle-down"></i>
                </span>

                <section id="header-profile" class="header-profile rounded">
                    <section class="list-group rounded">
                        <a href="#" class="list-group-item list-group-item-action header-profile-link">
                            <i class="fas fa-cog"></i>تنظیمات
                        </a>
                        <a href="#" class="list-group-item list-group-item-action header-profile-link">
                            <i class="fas fa-user"></i>کاربر
                        </a>
                        <a href="#" class="list-group-item list-group-item-action header-profile-link">
                            <i class="far fa-envelope"></i>پیام ها
                        </a>
                        <a href="#" class="list-group-item list-group-item-action header-profile-link">
                            <i class="fas fa-lock"></i>قفل صحفه
                        </a>
                        <a href="#" class="list-group-item list-group-item-action header-profile-link">
                            <i class="fas fa-sign-out-alt"></i>خروج
                        </a>
                    </section>
                </section>

            </span>
        </section>
    </section>
</section>
</header>
