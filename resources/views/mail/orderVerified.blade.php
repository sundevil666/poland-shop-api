<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div style="font-size: 20px;">
    <table width="100%" border="1px solid #999" cellpadding="5" cellspacing="0" bgcolor="#f5f5f5" style="margin-bottom: 10px;">
        <tr>
            <td colspan="2" style="text-align: center">
                <a href="https://polandgroups.pl/shop/">
                    <img src="https://polandgroups.pl/shop/img/logo.9332798f.png" alt="logo">
                </a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div>Dzień dobry {{ empty($order->alt_deliver_information) ? $order->deliver_information['fullname'] : $order->alt_deliver_information['fullname'] }}</div>
            </td>
        </tr>
        <tr>
            <td colspan=2">
                <div>Twój zakup</div>
                <div>z dnia {{ date('d.m.Y', strtotime('now')) }}</div>
            </td>
        </tr>
        <tr>
            @foreach($order->items as $item)
            <td style="width: auto;" ">{{$item->product->name}}</td>
            @endforeach
            <td style="width: 100%;">{{$order->getClearPrice()}} zł</td>
        </tr>
        <tr>
            <td>Kurier DPD, <strong>(Ulica dom klienta) Zagrodowa 3</strong></td>
            <td>
                <div>{{$order->getBoxPrice()}} zł</div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <div>RAZEM {{$order->getPrice()}} zł</div>
            </td>
        </tr>
    </table>

    <table width="100%" border="1px solid #999" cellpadding="5" cellspacing="0" bgcolor="#f5f5f5" style="margin-bottom: 10px;">
        <tr>
            <td>Przewidywany czas dostawy {{ date('d.m.Y', strtotime("+3 day")) }} u Ciebie</td>
        </tr>
    </table>

    <table width="100%" border="1px solid #999" cellpadding="5" cellspacing="0" bgcolor="#f5f5f5" style="margin-bottom: 10px;">
        <tr>
            <td style="width: auto;">Adres e-mail</td>
            <td style="width: 100%;">{{$order->user_information['email']}}</td>
        </tr>
        <tr>
            <td>Firma</td>
            <td>{{$order->deliver_information['business']}}</td>
        </tr>
        <tr>
            <td>NIP UE</td>
            <td>{{$order->deliver_information['nip_ue']}}</td>
        </tr>
        <tr>
            <td>Adress</td>
            <td>{{$order->deliver_information['address']}}</td>
        </tr>
        <tr>
            <td>Kod pocztowy</td>
            <td>{{$order->deliver_information['zip_code']}}</td>
        </tr>
        <tr>
            <td>Country</td>
            <td>{{$order->deliver_information['country']}}</td>
        </tr>
        <tr>
            <td>Miasto</td>
            <td>{{$order->deliver_information['city']}}</td>
        </tr>
        <tr>
            <td>Telefoniczny numer kontaktowy</td>
            <td>{{$order->deliver_information['phone']}}</td>
        </tr>
    </table>
    @if (!empty($order->alt_deliver_information))
    <table width="100%" border="1px solid #999" cellpadding="5" cellspacing="0" bgcolor="#f5f5f5">
        <tr>
            <td style="width: auto;">Proszę użyć innego adresu rozliczeniowego</td>
            <td style="width: 100%;"></td>
        </tr>
        <tr>
            <td>Imię</td>
            <td>{{$order->alt_deliver_information['fullname']}}</td>
        </tr>
        <tr>
            <td>Firma</td>
            <td>{{$order->alt_deliver_information['business']}}</td>
        </tr>
        <tr>
            <td>NIP UE</td>
            <td>{{$order->alt_deliver_information['nip_ue']}}</td>
        </tr>
        <tr>
            <td>Adress</td>
            <td>{{$order->alt_deliver_information['address']}}</td>
        </tr>
        <tr>
            <td>Kod pocztowy</td>
            <td>{{$order->alt_deliver_information['zip_code']}}</td>
        </tr>
        <tr>
            <td>Country</td>
            <td>{{$order->alt_deliver_information['country']}}</td>
        </tr>
        <tr>
            <td>Miasto</td>
            <td>{{$order->alt_deliver_information['city']}}</td>
        </tr>
        <tr>
            <td>Telefoniczny numer kontaktowy</td>
            <td>{{$order->alt_deliver_information['phone']}}</td>
        </tr>
    </table>
    @endif
</div>


</body>
</html>
