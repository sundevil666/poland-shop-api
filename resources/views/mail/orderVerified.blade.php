<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div style="font-size: 20px;">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#eceff1">
        <tbody>
        <tr>
            <td width="100%" align="center">

    <table cellpadding="0" cellspacing="0" border="0" width="600">
        <tbody>
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

                <td>
                    <ul>
                        @foreach($order->items as $item)
                        <li>{{$item->product->name}}</li>
                        @endforeach
                    </ul>
                </td>

                <td>{{$order->getClearPrice()}} zł</td>
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

            <tr>
                <td class="2">Przewidywany czas dostawy {{ date('d.m.Y', strtotime("+3 day")) }} u Ciebie</td>
            </tr>

        @if (!empty($order->alt_deliver_information))

            <tr>
                <td colspan="2">Proszę użyć innego adresu rozliczeniowego</td>
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
        </tbody>
    </table>
    @endif

            </td>
        </tr>
        </tbody>
    </table>
</div>


</body>
</html>
