<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="inner">
                        <h4>Bản tin</h4>
                        <p> Đăng ký nhận bản tin của chúng tôi và nhận <span>10%</span>  cho lần mua hàng đầu tiên của bạn</p>
                        <form action="{{route('subscribe')}}" method="post" class="newsletter-inner">
                            @csrf
                            <input name="email" placeholder="Nhập Email của bạn" required="" type="email">
                            <button class="btn" type="submit">Đăng Ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
