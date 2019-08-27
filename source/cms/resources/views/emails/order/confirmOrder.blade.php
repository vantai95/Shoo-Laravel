<div style="padding: 15px 20px 30px;">
    <div style="color:#333; margin-bottom: 10px;">Dear Mr. {!! $order->full_name !!}</div>
    <br/>
    <div style="color:#333; margin-bottom: 10px;">Congratulations! Your order has been successfully created.</div>

    <div>
        <p>Shoe name: {{ $productPackage->name }}</p>
        <p>Model: {{ $shoeType->name }}</p>
        <p>Style: {{ $shoeStyle->sub_name }}</p>
        <p>Toe shapes: {{ $toeShape->name }}</p>
        <p>Leather color: {{ $leatherColor->name }}</p>
        <p>Outsole type: {{ $outsoleType->name }}</p>
    </div>

    <div>
        <div style="color:#000; line-height:22px;">To complete the order, please download the app to get your personal measurements.</div>
        <br/>
        <h5 style="font-size: 16px;"><a href="{{ $downloadAppLink }}">Click link to download app!</a></h5>
        <h5 style="font-size: 16px;"><a href="{{ $openAppLink }}">Click link to open app!</a></h5>
    </div>

    <div style="height: 3px; background: #dcbd89; margin: 30px 0;"></div>

    <div>
        <br/>
        <div>
            <i style="color:#000; line-height:22px;">Thank you very much!</i>
            <i style="color:#000; line-height:22px;">Virtus team.</i>
        </div>
    </div>

    <div style="background:#ececec; padding: 20px;">
        <table>
            <tr>
                <td style="font-size: 25px;">
                    <img src="http://virtusshoes.com/images/virtus%20cutom-fit%20shoes%20black.png" title="VIRTUS"/>
                </td>
                <td style="padding-left: 20px; color:#333;">
                    <div style="margin-bottom:5px;">80 Robinson Road #02-00</div>
                    <div style="margin-bottom:5px;">Singapore 068898</div>
                    <div>Info@virtusshoes.com</div>
                </td>
            </tr>
        </table>
    </div>
</div>