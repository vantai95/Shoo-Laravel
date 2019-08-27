<footer>
    <div class="widget-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget widget-menu">
                        <h3 class="title-widget">{{ @trans("pages.footer.infomation")}}</h3>
                        <ul class="menu">
                            <li><a href="{{ url('pages/DELIVERY_INFORMATION') }}"
                                   title="{{ @trans("pages.footer.title_delivery_information")}}">{{ @trans("pages.footer.delivery_information")}}</a></li>
                            <li><a href="{{ url('pages/TERM_AND_CONDITION') }}"
                                   title="{{ @trans("pages.footer.title_terms_conditions")}}">{{ @trans("pages.footer.terms_conditions")}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="widget widget-contactinfo">
                        <h3 class="title-widget">{{ @trans("pages.footer.contact_us")}}</h3>
                        <div class="contact-info">
                            <div class="contact-text">
                                CÔNG TY TNHH VERITAS SHOES VIỆT NAM 
                            </div>
                            <div class="contact-text">
                                <i class="fa fa-map-marker"></i>
                                <span>56 Lê Thánh Tôn, Phường Bến Nghé, Quận 1, TP.HCM</span>
                            </div>
                            <div class="contact-text">
                                <i class="fa fa-envelope"></i>
                                <a class="mail-contact" href="mailto:hello@shoex.net"
                                   title="{{ @trans("pages.footer.title_mail_contact")}}">
                                   hello@shoex.net
                                </a>
                            </div>
                            <div class="contact-text">
                                <i class="fa fa-phone"></i>
                                <span>+84 2862 865 865</span>
                            </div>
                            <div class="contact-text">
                                Mã số doanh nghiêp: 0313231485
                            </div>
                            <div class="contact-text">
                                Ngày cấp giấy phép: 25/04/2015
                            </div>
                            <div class="contact-text">
                                Nơi cấp: Sở kế hoạch và đầu tư TP Hồ Chí Minh
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="widget widget-contactinfo">
                        <h3 class="title-widget">{{ @trans("pages.footer.social_links")}}</h3>
                        <div class="contact-info">
                            <div class="contact-text">
                                <a class="mail-contact" target="_blank" href="https://www.facebook.com/ShoeX.net/"
                                   title="{{ @trans("pages.footer.virtus_shoes")}} facebook">Facebook</a>
                                <i class="fa fa-facebook-official"></i>
                            </div>
                           
                        </div>
                    </div>
                   
                    <div class="goverment-logo">
                        <div class="widget widget-contactinfo">
                            <div class="contact-info">
                                <div class="contact-text">
                                    <a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=44570" target="_blank">
                                    <img alt="Logo government" src="{{asset('images/dathongbao.png')}}" />
                                    </a>
                                </div>                           
                            </div>
                        </div>                    
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</footer>