@extends('layouts/master')

@section('contents')
    <!-- main -->
    <main>
        <div class="main">
            <div class="body__banner">
                <div class="body__banner-slide">
                    <!-- test slide -->
                    <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                
                                <div class="carousel-inner">
                                    <div class="item active">
                                    <img src="{{ asset('images/banner-Slide1.png') }}" alt="Los Angeles">
                                    </div>
                                
                                    <div class="item">
                                    <img src="{{ asset('images/banner-Slide1.png') }}" alt="Chicago">
                                    </div>
                                
                                    <div class="item">
                                    <img src="{{ asset('images/banner-Slide1.png') }}" alt="New York">
                                    </div>
                                </div>
                                
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div> -->
                    <img src="{{ asset('images/banner-Slide1.png') }}" alt="">
                    <!-- end -->

                </div>
                <div class="body__banner-noSlide">
                    <a href="##"><img src="{{ asset('images/banner.png') }}" alt=""></a>
                    <a href="##"><img src="{{ asset('images/banner.png') }}" alt=""></a>
                    <a href="##"><img src="{{ asset('images/banner.png') }}" alt=""></a>
                    <a href="##"><img src="{{ asset('images/banner.png') }}" alt=""></a>
                </div>



            </div>

            <!-- Show product laptop-->
            <div class="body__banner-product">
                <div class="body__title-product">
                    <div class="title__product-laptop">
                        laptop
                    </div>

                    <div class="title__product-laptop-sub">
                        <a href="" class="title__product-laptop-link">
                            TUF Gaming
                        </a>

                        <a href="" class="title__product-laptop-link">
                            Nitro 5
                        </a>

                        <a href="" class="title__product-laptop-link">
                            GF Series
                        </a>

                        <a href="" class="title__product-laptop-link">
                            Legion
                        </a>

                        <a href="" class="title__product-laptop-link">
                            Ideapad gaming
                        </a>

                        <a href="" class="title__product-laptop-link">
                            Strix G
                        </a>
                    </div>
                </div>

                <!-- element product -->
                <div class="element__product">
                    <a href="details" class="list__product">
                        <span class="inner__text">-14%</span>
                        <span class="excerpt">Refund 1,000,000 VND</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/laptop.png') }}" alt="" class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                Laptop Gaming MSI Cyborg 15 A12VE 240VN Geforce RTX…
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <!-- format cost -->
                                {{-- <!-- {{ number_format($number, 0, ',', '.') }} --> --}}
                                <del class="element__product-costs--old">30,490,000 <u>đ</u></del>
                                <div class="element__product-costs--new">26,890,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/cpu.png') }}" alt="">
                                <span>i5 13500HX</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/vga.png') }}" alt="">
                                <span>RTX 4060</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/ram.png') }}" alt="">
                                <span>DDR5 16GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/storage.png') }}" alt="">
                                <span>512GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/baohanh.png') }}" alt="">
                                <span>12 months 3s1</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/screen.png') }}" alt="">
                                <span>16" 2K+ 165Hz</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="inner__text">-12%</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/laptop2.png') }}" alt=""
                                    class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                Laptop Gaming MSI Cyborg 15 A12VE 240VN Geforce RTX…
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">30,490,000 <u>đ</u></del>
                                <div class="element__product-costs--new">26,890,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/cpu.png') }}" alt="">
                                <span>i5 13500HX</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/vga.png') }}" alt="">
                                <span>RTX 4060</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/ram.png') }}" alt="">
                                <span>DDR5 16GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/storage.png') }}" alt="">
                                <span>512GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/baohanh.png') }}" alt="">
                                <span>12 months 3s1</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/screen.png') }}" alt="">
                                <span>16" 2K+ 165Hz</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="excerpt">FREE 8GB DDR5 RAM</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/laptop3.png') }}" alt=""
                                    class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                Laptop Gaming MSI Cyborg 15 A12VE 240VN Geforce RTX…
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">30,490,000 <u>đ</u></del>
                                <div class="element__product-costs--new">26,890,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/cpu.png') }}" alt="">
                                <span>i5 13500HX</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/vga.png') }}" alt="">
                                <span>RTX 4060</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/ram.png') }}" alt="">
                                <span>DDR5 16GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/storage.png') }}" alt="">
                                <span>512GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/baohanh.png') }}" alt="">
                                <span>12 months 3s1</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/screen.png') }}" alt="">
                                <span>16" 2K+ 165Hz</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="excerpt">Free 8GB RAM</span>
                        <span class="inner__text">-14%</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/laptop.png') }}" alt="" class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                Laptop Gaming MSI Cyborg 15 A12VE 240VN Geforce RTX…
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">30,490,000 <u>đ</u></del>
                                <div class="element__product-costs--new">26,890,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/cpu.png') }}" alt="">
                                <span>i5 13500HX</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/vga.png') }}" alt="">
                                <span>RTX 4060</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/ram.png') }}" alt="">
                                <span>DDR5 16GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/storage.png') }}" alt="">
                                <span>512GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/baohanh.png') }}" alt="">
                                <span>12 months 3s1</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/screen.png') }}" alt="">
                                <span>16" 2K+ 165Hz</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="inner__text">-14%</span>
                        <span class="excerpt">VOUCHER 1.000.000 VNĐ</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/laptop4.png') }}" alt=""
                                    class="element__product-img">
                            </div>

                            <div class="element__product-title">
                                Laptop Gaming MSI Cyborg 15 A12VE 240VN Geforce RTX…
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">30,490,000 <u>đ</u></del>
                                <div class="element__product-costs--new">26,890,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/cpu.png') }}" alt="">
                                <span>i5 13500HX</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/vga.png') }}" alt="">
                                <span>RTX 4060</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/ram.png') }}" alt="">
                                <span>DDR5 16GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/storage.png') }}" alt="">
                                <span>512GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/baohanh.png') }}" alt="">
                                <span>12 months 3s1</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/screen.png') }}" alt="">
                                <span>16" 2K+ 165Hz</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="excerpt">FREE 8GB DDR5 RAM</span>
                        <span class="inner__text">-10%</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/laptop1.png') }}" alt=""
                                    class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                Laptop Gaming MSI Cyborg 15 A12VE 240VN Geforce RTX…
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">30,490,000 <u>đ</u></del>
                                <div class="element__product-costs--new">26,890,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/cpu.png') }}" alt="">
                                <span>i5 13500HX</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/vga.png') }}" alt="">
                                <span>RTX 4060</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/ram.png') }}" alt="">
                                <span>DDR5 16GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/storage.png') }}" alt="">
                                <span>512GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/baohanh.png') }}" alt="">
                                <span>12 months 3s1</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/screen.png') }}" alt="">
                                <span>16" 2K+ 165Hz</span>
                            </div>
                        </div>
                    </a>

                    @foreach ($products as $product)
                        @if ($product->id_typeProduct == 1)
                            <a href="details/{{ $product->id }}/{{ $product->name }}" class="list__product">
                                <span class="excerpt">FREE 8GB DDR5 RAM</span>
                                <span class="inner__text">-10%</span>
                                <div class="element__product-info">
                                    <div class="element__product-info--img">
                                        <img src="{{ asset('images/' . $product->image) }}" alt=""
                                            class="element__product-img">
                                    </div>
                                    <div class="element__product-title">
                                        {{ Str::limit($product->name, $limit = 51, $end = '...') }}
                                    </div>

                                    <div class="star-rating">
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                    </div>

                                    <div class="element__product-costs">
                                        <del class="element__product-costs--old">{{ number_format($product->cost_old, 0, ',', ',') }} <u>đ</u></del>
                                        <div class="element__product-costs--new">
                                            {{ number_format($product->cost, 0, ',', ',') }}
                                            <u>đ</u>
                                        </div>
                                    </div>
                                </div>

                                <div class="element__product-details">
                                    <div>
                                        <img src="{{ asset('images/cpu.png') }}" alt="">
                                        <span>{{ $product->cpu }}</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/vga.png') }}" alt="">
                                        <span>{{ $product->gpu }}</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/ram.png') }}" alt="">
                                        <span>{{ $product->ram }}</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/storage.png') }}" alt="">
                                        <span>{{ $product->storage }}</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/baohanh.png') }}" alt="">
                                        <span>{{ $product->warranty_period }}</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/screen.png') }}" alt="">
                                        <span>{{ $product->screen_size }}</span>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach

                </div>

                <div class="view__all-products">
                    <a href="$$" class="view__all-products-link">
                        <i class="far fa-eye fa-bounce "></i>
                        <span> View all products >></span>
                    </a>
                </div>
            </div>

            <!-- pc -->
            <div class="body__banner-product">
                <div class="body__title-product">
                    <div class="title__product-laptop">
                        monitor, pc
                    </div>

                    <div class="title__product-laptop-sub">
                        <a href="" class="title__product-laptop-link">
                            Gaming Monitor
                        </a>

                        <a href="" class="title__product-laptop-link">
                            Graphics Screen
                        </a>

                        <a href="" class="title__product-laptop-link">
                            PC Gaming
                        </a>

                        <a href="" class="title__product-laptop-link">
                            PC Graphics
                        </a>

                        <a href="" class="title__product-laptop-link">
                            Normal Monitor
                        </a>

                        <!-- <a href="" class="title__product-laptop-link">
                                    Strix G
                                </a> -->
                    </div>
                </div>

                <!-- element product -->
                <div class="element__product">
                    <a href="details.html" class="list__product">
                        <span class="inner__text">-14%</span>
                        <span class="excerpt">Refund 1,000,000 VND</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/casse.png') }}" alt="" class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                PC Xgear UD5 Intel i5-12400F 16GB RTX 3060 12G…
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">23,990,000 <u>đ</u></del>
                                <div class="element__product-costs--new">19.290,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/cpu.png') }}" alt="">
                                <span>Core i5-12400F</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/vga.png') }}" alt="">
                                <span>RTX 3060</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/ram.png') }}" alt="">
                                <span>DDR4 16GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/storage.png') }}" alt="">
                                <span>250GB NVMe</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/mainboard.png') }}" alt="">
                                <span>B760M</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/psu.png') }}" alt="">
                                <span>650W</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="inner__text">-12%</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/casse.png') }}" alt="" class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                PC Xgear UD5 Intel i5-12400F 16GB RTX 3060 12G…
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">23,990,000 <u>đ</u></del>
                                <div class="element__product-costs--new">19.290,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/cpu.png') }}" alt="">
                                <span>Core i5-12400F</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/vga.png') }}" alt="">
                                <span>RTX 3060</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/ram.png') }}" alt="">
                                <span>DDR4 16GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/storage.png') }}" alt="">
                                <span>250GB NVMe</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/mainboard.png') }}" alt="">
                                <span>B760M</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/psu.png') }}" alt="">
                                <span>650W</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="excerpt">FREE 8GB DDR5 RAM</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/casse.png') }}" alt="" class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                PC Xgear UD5 Intel i5-12400F 16GB RTX 3060 12G…
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">23,990,000 <u>đ</u></del>
                                <div class="element__product-costs--new">19.290,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/cpu.png') }}" alt="">
                                <span>Core i5-12400F</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/vga.png') }}" alt="">
                                <span>RTX 3060</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/ram.png') }}" alt="">
                                <span>DDR4 16GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/storage.png') }}" alt="">
                                <span>250GB NVMe</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/mainboard.png') }}" alt="">
                                <span>B760M</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/psu.png') }}" alt="">
                                <span>650W</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="excerpt">Free 8GB RAM</span>
                        <span class="inner__text">-14%</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/casse.png') }}" alt="" class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                PC Xgear UD5 Intel i5-12400F 16GB RTX 3060 12G…
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">23,990,000 <u>đ</u></del>
                                <div class="element__product-costs--new">19.290,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/cpu.png') }}" alt="">
                                <span>Core i5-12400F</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/vga.png') }}" alt="">
                                <span>RTX 3060</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/ram.png') }}" alt="">
                                <span>DDR4 16GB</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/storage.png') }}" alt="">
                                <span>250GB NVMe</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/mainboard.png') }}" alt="">
                                <span>B760M</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/psu.png') }}" alt="">
                                <span>650W</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="inner__text">-14%</span>
                        <span class="excerpt">VOUCHER 1.000.000 VNĐ</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/screen1.png') }}" alt=""
                                    class="element__product-img">
                            </div>

                            <div class="element__product-title">
                                Màn hình Philips 24M1N3200ZA/74 (24″/ IPS/ FullHD/ 165Hz/ 1ms…
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">4,990,000 <u>đ</u></del>
                                <div class="element__product-costs--new">3,790,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/screen size.png') }}" alt="">
                                <span>24 inch</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/solution.png') }}" alt="">
                                <span>FHD 1920 * 1080</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/screen type.png') }}" alt="">
                                <span>IPS</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/heart.png') }}" alt="">
                                <span>180 Hz (OC)</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/timer.png') }}" alt="">
                                <span>1ms MPRT</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/color mode.png') }}" alt="">
                                <span>95% DCI-P3</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="excerpt">FREE 8GB DDR5 RAM</span>
                        <span class="inner__text">-10%</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/screen1.png') }}" alt=""
                                    class="element__product-img">
                            </div>

                            <div class="element__product-title">
                                Màn hình Philips 24M1N3200ZA/74 (24″/ IPS/ FullHD/ 165Hz/ 1ms…
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">4,990,000 <u>đ</u></del>
                                <div class="element__product-costs--new">3,790,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/screen size.png') }}" alt="">
                                <span>24 inch</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/solution.png') }}" alt="">
                                <span>FHD 1920 * 1080</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/screen type.png') }}" alt="">
                                <span>IPS</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/heart.png') }}" alt="">
                                <span>180 Hz (OC)</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/timer.png') }}" alt="">
                                <span>1ms MPRT</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/color mode.png') }}" alt="">
                                <span>95% DCI-P3</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="inner__text">-14%</span>
                        <span class="excerpt">VOUCHER 1.000.000 VNĐ</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/screen1.png') }}" alt=""
                                    class="element__product-img">
                            </div>

                            <div class="element__product-title">
                                Màn hình Philips 24M1N3200ZA/74 (24″/ IPS/ FullHD/ 165Hz/ 1ms…
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">4,990,000 <u>đ</u></del>
                                <div class="element__product-costs--new">3,790,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/screen size.png') }}" alt="">
                                <span>24 inch</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/solution.png') }}" alt="">
                                <span>FHD 1920 * 1080</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/screen type.png') }}" alt="">
                                <span>IPS</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/heart.png') }}" alt="">
                                <span>180 Hz (OC)</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/timer.png') }}" alt="">
                                <span>1ms MPRT</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/color mode.png') }}" alt="">
                                <span>95% DCI-P3</span>
                            </div>
                        </div>
                    </a>
                    @foreach ($products as $product)
                        @if ($product->id_typeProduct == 2 || $product->id_typeProduct == 3)
                            <a href="details/{{ $product->id }}/{{ str_replace('/', '-', $product->name) }}" class="list__product">
                                <span class="inner__text">-14%</span>
                                <span class="excerpt">VOUCHER 1.000.000 VNĐ</span>
                                <div class="element__product-info">
                                    <div class="element__product-info--img">
                                        <img src="{{ asset('images/' . $product->image) }}" alt=""
                                            class="element__product-img">
                                    </div>

                                    <div class="element__product-title">
                                        {{ Str::limit($product->name, $limit = 51, $end = '...') }}
                                    </div>

                                    <div class="star-rating">
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                    </div>

                                    <div class="element__product-costs">
                                        <del class="element__product-costs--old">{{ number_format($product->cost_old, 0, ',', ',') }}<u>đ</u></del>
                                        <div class="element__product-costs--new">{{ number_format($product->cost, 0, ',', ',') }} <u>đ</u></div>
                                    </div>
                                </div>

                                <div class="element__product-details">
                                    <div>
                                        <img src="{{ asset('images/screen size.png') }}" alt="">
                                        <span>24 inch</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/solution.png') }}" alt="">
                                        <span>FHD 1920 * 1080</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/screen type.png') }}" alt="">
                                        <span>IPS</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/heart.png') }}" alt="">
                                        <span>180 Hz (OC)</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/timer.png') }}" alt="">
                                        <span>1ms MPRT</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/color mode.png') }}" alt="">
                                        <span>95% DCI-P3</span>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>

                <div class="view__all-products">
                    <a href="$$" class="view__all-products-link">
                        <i class="far fa-eye fa-bounce "></i>
                        <span> View all products >></span>
                    </a>
                </div>
            </div>




            <!-- mouse -->
            <div class="body__banner-product">
                <div class="body__title-product">
                    <div class="title__product-laptop">
                        GAMING GEAR
                    </div>

                    <div class="title__product-laptop-sub">
                        <a href="" class="title__product-laptop-link">
                            Logitech Mouse
                        </a>

                        <a href="" class="title__product-laptop-link">
                            Razer Mouse
                        </a>

                        <a href="" class="title__product-laptop-link">
                            Asus Mouse
                        </a>

                        <a href="" class="title__product-laptop-link">
                            Office Mouse
                        </a>

                        <a href="" class="title__product-laptop-link">
                            HyperX Earphone
                        </a>

                        <!-- <a href="" class="title__product-laptop-link">
                                    Strix G
                                </a> -->
                    </div>
                </div>

                <!-- element product -->
                <div class="element__product">
                    <a href="details.html" class="list__product">
                        <span class="inner__text">-14%</span>
                        <span class="excerpt">Refund 1,000,000 VND</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/logitech.png') }}" alt=""
                                    class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                Logitech G903 Hero Lightspeed Wireless Mouse
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">3,490,000 <u>đ</u></del>
                                <div class="element__product-costs--new">2,290,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/connector.png') }}" alt="">
                                <span>Wireless</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/mouse.png') }}" alt="">
                                <span>Gaming</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/charging.png') }}" alt="">
                                <span>Type C</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/color.png') }}" alt="">
                                <span>Black</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/brand.png') }}" alt="">
                                <span>Logitech</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/delivery.png') }}" alt="">
                                <span>Free Nationwide</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="inner__text">-12%</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/logitech.png') }}" alt=""
                                    class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                Logitech G903 Hero Lightspeed Wireless Mouse
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">3,490,000 <u>đ</u></del>
                                <div class="element__product-costs--new">2,290,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/connector.png') }}" alt="">
                                <span>Wireless</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/mouse.png') }}" alt="">
                                <span>Gaming</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/charging.png') }}" alt="">
                                <span>Type C</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/color.png') }}" alt="">
                                <span>Black</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/brand.png') }}" alt="">
                                <span>Logitech</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/delivery.png') }}" alt="">
                                <span>Free Nationwide</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="excerpt">FREE 8GB DDR5 RAM</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/logitech.png') }}" alt=""
                                    class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                Logitech G903 Hero Lightspeed Wireless Mouse
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">3,490,000 <u>đ</u></del>
                                <div class="element__product-costs--new">2,290,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/connector.png') }}" alt="">
                                <span>Wireless</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/mouse.png') }}" alt="">
                                <span>Gaming</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/charging.png') }}" alt="">
                                <span>Type C</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/color.png') }}" alt="">
                                <span>Black</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/brand.png') }}" alt="">
                                <span>Logitech</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/delivery.png') }}" alt="">
                                <span>Free Nationwide</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="excerpt">Free 8GB RAM</span>
                        <span class="inner__text">-14%</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/logitech.png') }}" alt=""
                                    class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                Logitech G903 Hero Lightspeed Wireless Mouse
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">3,490,000 <u>đ</u></del>
                                <div class="element__product-costs--new">2,290,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/connector.png') }}" alt="">
                                <span>Wireless</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/mouse.png') }}" alt="">
                                <span>Gaming</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/charging.png') }}" alt="">
                                <span>Type C</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/color.png') }}" alt="">
                                <span>Black</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/brand.png') }}" alt="">
                                <span>Logitech</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/delivery.png') }}" alt="">
                                <span>Free Nationwide</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="inner__text">-14%</span>
                        <span class="excerpt">VOUCHER 1.000.000 VNĐ</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/logitech.png') }}" alt=""
                                    class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                Logitech G903 Hero Lightspeed Wireless Mouse
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">3,490,000 <u>đ</u></del>
                                <div class="element__product-costs--new">2,290,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/connector.png') }}" alt="">
                                <span>Wireless</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/mouse.png') }}" alt="">
                                <span>Gaming</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/charging.png') }}" alt="">
                                <span>Type C</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/color.png') }}" alt="">
                                <span>Black</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/brand.png') }}" alt="">
                                <span>Logitech</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/delivery.png') }}" alt="">
                                <span>Free Nationwide</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="excerpt">FREE 8GB DDR5 RAM</span>
                        <span class="inner__text">-10%</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/logitech.png') }}" alt=""
                                    class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                Logitech G903 Hero Lightspeed Wireless Mouse
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">3,490,000 <u>đ</u></del>
                                <div class="element__product-costs--new">2,290,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/connector.png') }}" alt="">
                                <span>Wireless</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/mouse.png') }}" alt="">
                                <span>Gaming</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/charging.png') }}" alt="">
                                <span>Type C</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/color.png') }}" alt="">
                                <span>Black</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/brand.png') }}" alt="">
                                <span>Logitech</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/delivery.png') }}" alt="">
                                <span>Free Nationwide</span>
                            </div>
                        </div>
                    </a>

                    <a href="details.html" class="list__product">
                        <span class="inner__text">-14%</span>
                        <span class="excerpt">VOUCHER 1.000.000 VNĐ</span>
                        <div class="element__product-info">
                            <div class="element__product-info--img">
                                <img src="{{ asset('images/logitech.png') }}" alt=""
                                    class="element__product-img">
                            </div>
                            <div class="element__product-title">
                                Logitech G903 Hero Lightspeed Wireless Mouse
                            </div>

                            <div class="star-rating">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="element__product-costs">
                                <del class="element__product-costs--old">3,490,000 <u>đ</u></del>
                                <div class="element__product-costs--new">2,290,000 <u>đ</u></div>
                            </div>
                        </div>

                        <div class="element__product-details">
                            <div>
                                <img src="{{ asset('images/connector.png') }}" alt="">
                                <span>Wireless</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/mouse.png') }}" alt="">
                                <span>Gaming</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/charging.png') }}" alt="">
                                <span>Type C</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/color.png') }}" alt="">
                                <span>Black</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/brand.png') }}" alt="">
                                <span>Logitech</span>
                            </div>

                            <div>
                                <img src="{{ asset('images/delivery.png') }}" alt="">
                                <span>Free Nationwide</span>
                            </div>
                        </div>
                    </a>



                    {{-- test list products --}}
                    @foreach ($products as $product)
                        @if ($product->id_typeProduct == 4)
                            <a href="details/{{ $product->id }}/{{ str_replace('/', '-', $product->name) }}]7" class="list__product">
                                <span class="inner__text">-14%</span>
                                <span class="excerpt">VOUCHER 1.000.000 VNĐ</span>
                                <div class="element__product-info">
                                    <div class="element__product-info--img">
                                        <img src="{{ asset('images/logitech.png') }}" alt=""
                                            class="element__product-img">
                                    </div>
                                    <div class="element__product-title">
                                        {{ $product->name }}
                                    </div>

                                    <div class="star-rating">
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                    </div>

                                    <div class="element__product-costs">
                                        <del class="element__product-costs--old">
                                            {{ number_format($product->cost_old, 0, ',', ',') }}
                                            <u>đ</u></del>
                                        <div class="element__product-costs--new">
                                            {{ number_format($product->cost, 0, ',', ',') }}
                                            <u>đ</u>
                                        </div>
                                    </div>
                                </div>

                                <div class="element__product-details">
                                    <div>
                                        <img src="{{ asset('images/connector.png') }}" alt="">
                                        <span>Wireless</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/mouse.png') }}" alt="">
                                        <span>Gaming</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/charging.png') }}" alt="">
                                        <span>Type C</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/color.png') }}" alt="">
                                        <span>Black</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/brand.png') }}" alt="">
                                        <span>Logitech</span>
                                    </div>

                                    <div>
                                        <img src="{{ asset('images/delivery.png') }}" alt="">
                                        <span>Free Nationwide</span>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach

                </div>

                <div class="view__all-products">
                    <a href="$$" class="view__all-products-link">
                        <i class="far fa-eye fa-bounce "></i>
                        <span> View all products >></span>
                    </a>
                </div>
            </div>

        </div>
    </main>
@endsection
