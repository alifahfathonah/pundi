<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>Trending</strong>
                        <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                        <div class="trending-animated">
                            <ul id="js-news" class="js-hidden">
                                @foreach ($get_artikel->take(3) as $i)
                                    <li class="news-item">{{ $i->judul }}</li>
                                @endforeach
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 0px">
                <div class="col-lg-8">
                    {{-- <div class="trending-top mb-30">
                        <div class="trend-top-img">
                            <img src="assets/img/trending/trending_top.jpg" alt="">
                            <div class="trend-top-cap">
                                <span>Appetizers</span>
                                <h2><a href="details.html">Welcome To The Best Model Winner<br> Contest At Look of the year</a></h2>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Trending Top -->
                    @foreach ($get_artikel->take(1) as $i)
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <input type="hidden" value="{{ $i->id }}" name="id">
                                <img src="{{ asset('post/' . $i->gambar) }}" alt="">
                                <div class="trend-top-cap">
                                    <span>Appetizers</span>
                                    <h2><a href="#">{{ $i->judul }}</a></h2>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            <!-- card 1 -->
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="assets/img/trending/trending_bottom1.jpg" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1">Lifestyple</span>
                                        <h4><a href="#">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- card 2 -->
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="assets/img/trending/trending_bottom2.jpg" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color2">Sports</span>
                                        <h4><h4><a href="#">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- card 3 -->
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="assets/img/trending/trending_bottom3.jpg" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color3">Travels</span>
                                        <h4><a href="#"> Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Riht content -->
                <div class="col-lg-4">
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/trending/right1.jpg" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color1">Concert</span>
                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                        </div>
                    </div>
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/trending/right2.jpg" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color3">sea beach</span>
                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                        </div>
                    </div>
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/trending/right3.jpg" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color2">Bike Show</span>
                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                        </div>
                    </div> 
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/trending/right4.jpg" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color4">See beach</span>
                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                        </div>
                    </div>
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="assets/img/trending/right5.jpg" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color1">Skeping</span>
                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>