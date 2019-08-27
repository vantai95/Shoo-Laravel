@extends('layouts.user.app')

@section('content')
    <div class="main-wrapper">
        <div class="container">
            <div class="widget-footer2">
                <h2 class="mg-top bd-recent">YOUR ORDER INFO</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 ">
                            <div class="widget widget-contactinfo">
                                <div class="contact-info">
                                    <div class="contact-text">
                                        <i class="fa fa-user"></i>
                                        <span>{{$order->full_name}}</span>
                                    </div>
                                    <div class="contact-text">
                                        <i class="fa fa-usd"></i>
                                        <span>{{$order->total_price}}</span>
                                    </div>
                                    <div class="contact-text">
                                        <i class="fa fa-envelope"></i>
                                        <a class="mail-contact">{{$order->email}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="widget widget-contactinfo">
                                <div class="contact-info">
                                    <div class="contact-text">
                                        <i class="fa fa-users"></i>
                                        <span>Who do you want to buy?</span>
                                    </div>
                                    <div class="radio" style="margin-left: 40px">
                                        <label><input id="1" type="radio" name="buyFor" src="" checked="checked"
                                                      onchange="changeStep('buy_for_a',this)">
                                            Yourself. </label>
                                    </div>
                                    <div class="radio" style="margin-left: 40px">
                                        <label><input id="2" type="radio" name="buyFor" src=""
                                                      onchange="changeStep('buy_for_a',this)" {{($order->owner_id == 1)?"":'checked="checked"'}}>
                                            Other
                                            People.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="widget widget-contactinfo">
                                <div class="contact-info contact-text">
                                    <i class="fa fa-circle-o " aria-hidden="true"></i>
                                    <label for="p1">Order Number : </label>
                                    <div style="display: inline" id="p1">{{$order->order_number}} </div>
                                    <a href="#" onclick="copyToClipboard('#p1')" style="color: #2a62bc">Copy</a>
                                    </input>
                                    <div id="selector" style="margin-left: 40px"></div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

           
        </div>
    </div>
@endsection

@section('extra_scripts')
    <script type="text/javascript">
        var default_img = "{{url('images/abc.png')}}";
        var changeStep = function (step, text, url, name, price) {
            $('#' + step).click();
            if (text.name == 'shoe_type') {
                $('input[name="shoeTypeS"]').val(text.value);
                $(".img1").attr("src", url);
                $(".detail1").text(name);
                $(".price1").text(price);
            }
            else if (text.name == 'shoe_style') {
                $('input[name="shoeStyleS"]').val(text.value);
                $(".img2").attr("src", url);
                $(".detail2").text(name);
                $(".price2").text(price);
            }
            else if (text.name == 'toe_shapes') {
                $('input[name="toeShapeS"]').val(text.value);
                $(".img3").attr("src", url);
                $(".detail3").text(name);
                $(".price3").text(price);
            }
            else if (text.name == 'leather_color') {
                $('input[name="leatherColorS"]').val(text.value);
                $(".img4").attr("src", url);
                $(".detail4").text(name);
                $(".price4").text(price);
            }
            else if (text.name == 'outsole_type') {
                $('input[name="outsoleTypeS"]').val(text.value);
                $(".img5").attr("src", url);
                $(".detail5").text(name);
                $(".price5").text(price);
            }
            else if (text.name == 'buyFor') {
                $('input[name="buyforS"]').val(text.id);
            }
        };

        var clearStep = function (current_step) {
            var input1 = ['shoeTypeS', 'shoeStyleS', 'toeShapeS', 'leatherColorS', 'outsoleTypeS'];
            var input2 = ['shoe_type', 'shoe_style', 'toe_shapes', 'leather_color', 'outsole_type'];
            for (var i = current_step; i <= 5; i++) {
                $('input[name=' + input1[i - 1] + ']').val('');
                $('input[name=' + input2[i - 1] + ']:checked').prop('checked', false);
                $(".img" + i).attr("src", default_img);
                $(".detail" + i).text("")
                $(".price" + i).text("")
            }
        };
        var uploadFile = function () {
            $('#fileloader').click();
        }
        var loadFile = function (event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);

        };

        $(document).ready(function () {
            $('#selector').qrcode({
                'text': '{{$order->order_number}}',
                'size': 70,
            });
        });

        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            alert("Order Number Copied")
            $temp.remove();
        }

        var validation = function () {
            if ($('#shoeTypeS').val() == "") {
                $('#shoe_type_a').click();
                return;
            }
            if ($('#shoeStyleS').val() == "") {
                $('#shoe_style_a').click();
                return;
            }
            if ($('#toeShapeS').val() == "") {
                $('#toe_shapes_a').click();
                return;
            }
            if ($('#leatherColorS').val() == "") {
                $('#leather_color_a').click();
                return;
            }
            if ($('#outsoleTypeS').val() == "") {
                $('#outsole_type_a').click();
                return;
            }
            $('#form1').submit();
        }

        var validation2 = function () {
            if ($('#output').attr('src').split("images/")[1] == "abc.png") {
                $('#notify').text('Please Update Picture.');
                return;
            }
            if (!$.trim($('#descrip').val())) {
                $('#notifyForDes').text('Please enter your description.');
                return;
            }
            if ($('#fileloader')[0].files[0].size > 2097152) {
                $('#notify').text("File size is greater than 2MB");
                return;
            }
            $('#form2').submit();
        }
        var loadData = function (id) {
            //alert(id);
            $.ajax({
                type: "GET",
                url: '{{url('/user/shoeStyle')}}' + '/' + id,
                success: function (response) {
                    var shoesStylesData = $("#shoesStylesData");
                    shoesStylesData.empty();
                    var html = '';
                    for (var key in response) {
                        var item = response[key];
                        html += '<div class="ss-blog-post kt-blog-post"><article class="col-md-3 text-center"><label for="shoe_style_' + item['id'] + '"><article class="blog-item"><div class="post-format"><div class="kt-team-member item-style1 text-center" style="display:block "> <div class="avatar-member"> <figure><img src="' + item['image_url'] + '" alt="" style=""> </figure> <input id="shoe_style_' + item['id'] + '" class="radio-button-middle" type="radio" name="shoe_style" value="' + item['id'] + '" ' +
                            'onchange="changeStep(\'toe_shapes_a\', this, \'' + item['image_url'] + '\', ' +
                            '\'' + item['sub_name'] + '\', \'' + item['price'] + '\')" ' +
                            'src=""></div> </div><a class="readmore"><span class="pe-icon pe-7s-right-arrow"></span></a></div></article></label></div></div>';
                    }
                    shoesStylesData.append(html);
                }
            });

        }
    </script>
@endsection




