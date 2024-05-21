@extends('Layout')
@section('title')
{{ trans('home.about') }}
@endsection
@section('content-layout')
<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="index.html">{{trans('home.home')}}</a></li>
                <li class="active"><a href="about.html">{{trans('home.about')}}</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- About Us Start Here -->
<div class="about-us pt-100 pt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sidebar-img mb-all-30">
                    <img src="{{asset('source/assets/frontend/img/blog/vietdh.jpg')}}" alt="single-blog-img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-desc">
                    <h3 class="mb-10 about-title">GIỚI THIỆU CHUNG</h3>
                    <p class="mb-20">Công ty The11Laptop là một doanh nghiệp chuyên cung cấp các sản phẩm laptop chất lượng cao, phục vụ nhu cầu công nghệ của người dùng. The11Laptop do ông Doãn Huy Việt sở hữu và chính thức được thành lập vào ngày 1 tháng 1 năm 2024.</p>
                    <p class="mb-20">The11Laptop cam kết mang đến cho khách hàng những dòng sản phẩm laptop đa dạng từ các thương hiệu nổi tiếng trên thế giới. Công ty không chỉ chú trọng đến chất lượng sản phẩm mà còn đặt khách hàng lên hàng đầu với dịch vụ hỗ trợ tận tình, chu đáo.</p>
                    <p class="mb-20">Các sản phẩm của The11Laptop được chọn lọc kỹ càng để đảm bảo đáp ứng đầy đủ các tiêu chí về hiệu suất, độ bền và tính năng hiện đại. Bên cạnh việc cung cấp các dòng laptop mới, công ty còn cung cấp các dịch vụ bảo hành, sửa chữa và tư vấn kỹ thuật, nhằm đảm bảo rằng khách hàng sẽ luôn có được trải nghiệm tốt nhất khi sử dụng sản phẩm từ The11Laptop.</p>
                    <p class="mb-20 a">Với sự lãnh đạo của ông Doãn Huy Việt, một người có tầm nhìn và kinh nghiệm trong lĩnh vực công nghệ, The11Laptop đang dần khẳng định vị thế của mình trên thị trường, trở thành địa chỉ tin cậy cho những ai đang tìm kiếm các sản phẩm laptop chất lượng.</p>

                </div>
            </div>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- About Us End Here -->
<!-- About Us Team Start Here -->
<div class="about-team pt-100 pt-sm-60">
    <div class="container">
       <h3 class="mb-30 about-title">GIÁ TRỊ CỐT LÕI</h3>
        <div class="row text-center">
            <!-- Single Team Start Here -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="single-team mb-all-30">
                    <div class="team-img sidebar-img">
                        <img src="{{asset('source/assets/frontend/img/team/01.png')}}" alt="team-image">
{{--                        <div class="team-link">--}}
{{--                           --}}{{-- <ul>--}}
{{--                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                    <div class="team-info">
                        <h4>Marcos Alonso</h4>
                        <p>web designer</p>
                    </div>
                </div>
            </div>
            <!-- Single Team End Here -->
             <!-- Single Team Start Here -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="single-team mb-all-30">
                    <div class="team-img sidebar-img">
                        <img src="{{asset('source/assets/frontend/img/team/1.jpg')}}" alt="team-image">
                        <div class="team-link">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Luis Aragones</h4>
                        <p>web developer</p>
                    </div>
                </div>
            </div>
            <!-- Single Team End Here -->
             <!-- Single Team Start Here -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="single-team mb-xxs-30">
                    <div class="team-img sidebar-img">
                        <img src="{{asset('source/assets/frontend/img/team/3.jpg')}}" alt="team-image">
                        <div class="team-link">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Maria Alessis</h4>
                        <p>class master</p>
                    </div>
                </div>
            </div>
            <!-- Single Team End Here -->
             <!-- Single Team Start Here -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="single-team">
                    <div class="team-img sidebar-img">
                        <img src="{{asset('source/assets/frontend/img/team/4.jpg')}}" alt="team-image">
                        <div class="team-link">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>John Doe</h4>
                        <p>php developer</p>
                    </div>
                </div>
            </div>
            <!-- Single Team End Here -->
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- About Us Team End Here -->
<!-- About Us Skills Start Here -->
<div class="about-skill ptb-100 ptb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
               <h3 class="about-title mb-20">Our skills</h3>
                <div class="skill-progress mb-all-40">
                    <div class="progress">
                        <div class="skill-title">Strategy 79%</div>
                        <div class="progress-bar wow fadeInLeft" data-wow-delay="0.2s" role="progressbar" style="width: 79%; visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="skill-title">Marketing 96%</div>
                        <div class="progress-bar wow fadeInLeft" data-wow-delay="0.3s" role="progressbar" style="width: 96%; visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="skill-title">Wordpress Theme 65%</div>
                        <div class="progress-bar wow fadeInLeft" data-wow-delay="0.4s" role="progressbar" style="width: 65%; visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="skill-title">Shopify Theme 75%</div>
                        <div class="progress-bar wow fadeInLeft" data-wow-delay="0.5s" role="progressbar" style="width: 75%; visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="skill-title">UI/UX Design 92%</div>
                        <div class="progress-bar wow fadeInLeft" data-wow-delay="0.6s" role="progressbar" style="width: 89%; visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ht-single-about">
                    <h3 class="about-title mb-20">our works</h3>
                    <div class="ht-about-work">
                        <span>1</span>
                        <div class="ht-work-text">
                            <h5><a href="#">LOREM IPSUM DOLOR SIT AMET</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi</p>
                        </div>
                    </div>
                    <div class="ht-about-work">
                        <span>2</span>
                        <div class="ht-work-text">
                            <h5><a href="#">DONEC FERMENTUM EROS</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi</p>
                        </div>
                    </div>
                    <div class="ht-about-work">
                        <span>3</span>
                        <div class="ht-work-text">
                            <h5><a href="#">LOREM IPSUM DOLOR SIT AMET</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi</p>
                        </div>
                    </div>
                    <div class="ht-about-work">
                        <span>4</span>
                        <div class="ht-work-text">
                            <h5><a href="#">Adipiscing IPSUM DOLOR SIT AMET</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- About Us Skills End Here -->
@endsection
