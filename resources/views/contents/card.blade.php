@extends("layouts.master")
@section("content")

    <!-- Setting Popup Overlay -->
    <div id="setting-popup-overlay"></div>

    <!-- Setting Popup Card -->
    <div class="card setting-popup-card shadow-lg" id="settingCard">
        <div class="card-body">
            <div class="container">
                <div class="setting-heading d-flex align-items-center justify-content-between mb-3">
                    <p class="mb-0">Settings</p>
                    <div class="btn-close" id="settingCardClose"></div>
                </div>

                <div class="single-setting-panel">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="availabilityStatus" checked>
                        <label class="form-check-label" for="availabilityStatus">Availability status</label>
                    </div>
                </div>

                <div class="single-setting-panel">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="sendMeNotifications" checked>
                        <label class="form-check-label" for="sendMeNotifications">Send me notifications</label>
                    </div>
                </div>

                <div class="single-setting-panel">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="darkSwitch">
                        <label class="form-check-label" for="darkSwitch">Dark mode</label>
                    </div>
                </div>

                <div class="single-setting-panel">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="rtlSwitch">
                        <label class="form-check-label" for="rtlSwitch">RTL mode</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area -->
    <div class="header-area" id="headerArea">
        <div class="container">
            <!-- Header Content -->
            <div class="header-content position-relative d-flex align-items-center justify-content-between">
                <!-- Back Button -->
                <div class="back-button">
                    <a href="elements.html">
                        <i class="bi bi-arrow-left-short"></i>
                    </a>
                </div>

                <!-- Page Title -->
                <div class="page-heading">
                    <h6 class="mb-0">Card</h6>
                </div>

                <!-- Settings -->
                <div class="setting-wrapper">
                    <div class="setting-trigger-btn" id="settingTriggerBtn">
                        <i class="bi bi-gear"></i>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper py-3">

        <!-- Element Heading -->
        <div class="container">
            <div class="element-heading">
                <h6>Card 01</h6>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <div class="card-body text-center p-5">
                    <img class="mb-4" src={{asset("assets/img/bg-img/19.png")}} alt="">
                    <h2 class="mb-4">Creative ideas for your company</h2>
                    <a class="btn btn-creative btn-danger btn-lg" href="#">Discover More</a>
                </div>
            </div>
        </div>

        <!-- Element Heading -->
        <div class="container">
            <div class="element-heading mt-3">
                <h6>Card 02</h6>
            </div>
        </div>

        <div class="container">
            <div class="card card-round">
                <div class="card-body d-flex align-items-center direction-rtl">
                    <div class="card-img-wrap">
                        <img src={{asset("assets/img/bg-img/2.jpg")}} alt="">
                    </div>
                    <div class="card-content">
                        <h5 class="mb-3">Stunning creative branding ideas</h5>
                        <a class="btn btn-info rounded-pill" href="#">Get yours idea</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Element Heading -->
        <div class="container">
            <div class="element-heading mt-3">
                <h6>Card 03</h6>
            </div>
        </div>

        <div class="container">
            <div class="card card-gradient-bg">
                <div class="card-body p-5 direction-rtl">
                    <h2 class="display-3 mb-4">Get free consultation</h2>
                    <a class="btn btn-light rounded-pill" href="#">Contact Now</a>
                </div>
            </div>
        </div>

        <!-- Element Heading -->
        <div class="container">
            <div class="element-heading mt-3">
                <h6>Card 04</h6>
            </div>
        </div>

        <div class="container">
            <div class="card card-bg-img bg-img bg-overlay" style="background-image: url('img/bg-img/3.jpg')">
                <div class="card-body p-5 direction-rtl">
                    <h2 class="text-white display-3 mb-4">Modern branding ideas</h2>
                    <a class="btn btn-warning" href="#">View details</a>
                </div>
            </div>
        </div>

        <!-- Element Heading -->
        <div class="container">
            <div class="element-heading mt-3">
                <h6>Card 05</h6>
            </div>
        </div>

        <div class="container">
            <div class="card bg-primary bg-img" style="background-image: url('img/core-img/2.png')">
                <div class="card-body p-5 direction-rtl">
                    <i class="bi bi-cpu text-white mb-3 display-2"></i>
                    <h2 class="text-white">Modern branding ideas</h2>
                    <p class="text-white mb-0">Affan is a modern and latest technology based mobile template.</p>
                </div>
            </div>
        </div>

        <!-- Element Heading -->
        <div class="container">
            <div class="element-heading mt-3">
                <h6>Bootstrap Card</h6>
            </div>
        </div>

        <div class="container">
            <div class="card position-relative shadow-sm">
                <img class="card-img-top" src={{asset("assets/img/bg-img/1.jpg")}} alt="">
                <span class="badge bg-warning text-dark position-absolute card-badge">Now $24</span>
                <div class="card-body direction-rtl">
                    <h2>Howdy, Affan!</h2>
                    <p>Affan is a modern and latest technology based mobile template. It's come with creative design &amp; progressive web app (PWA) features.</p>
                    <a class="btn btn-primary" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>

@endsection
