<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div style="font-size: 16px;">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#eceff1">
        <tbody>
        <tr>
            <td width="100%" align="center">

                <table cellpadding="0" cellspacing="0" border="0" width="600">
                    <tbody>
                    <tr>
                        <td align="center" style="padding:8px 0 0">
                            <table cellpadding="0" cellspacing="0" border="0" width="600" bgcolor="#ffffff">
                                <tbody>
                                <tr>
                                    <td colspan="2" style="text-align: center">
                                        <a href="https://polandgroups.pl/shop/">
                                            <img src="https://polandgroups.pl/shop/img/logo.9332798f.png" alt="logo">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="padding: 0 16px;">
                                        <div>Dzień
                                            dobry {{ empty($order->alt_deliver_information) ? $order->deliver_information['fullname'] : $order->alt_deliver_information['fullname'] }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=2" style="padding: 0 16px;">
                                        <div>Twój zakup</div>
                                        <div>z dnia {{ date('d.m.Y', strtotime('now')) }}</div>
                                    </td>
                                </tr>

                                <tr>

                                    <td style="padding: 0 16px;">
                                        <ul>
                                            @foreach($order->items as $item)
                                                <li>{{$item->product->name}}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td style="padding: 0 16px;">{{$order->getClearPrice()}} zł</td>
                                </tr>

                                <tr>
                                    <td style="padding: 0 16px;">Kurier DPD></td>
                                    <td style="padding: 0 16px;">
                                        <div>{{$order->getBoxPrice()}} zł</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td style="padding: 0 16px;">
                                        <div>RAZEM {{$order->getPrice()}} zł</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="padding:8px 0 0">
                            <table cellpadding="0" cellspacing="0" border="0" width="600" bgcolor="#ffffff">
                                <tbody>
                                <td class="2" style="padding: 0 16px;">Przewidywany czas dostawy {{ date('d.m.Y', strtotime("+3 day")) }} u Ciebie</td>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="padding:16px 0">
                            <table cellpadding="0" cellspacing="0" border="0" width="600" bgcolor="#ffffff">
                                <tbody>
                                <tr>
                                    <td style="padding: 0 16px;">Adres e-mail</td>
                                    <td style="padding: 0 16px;">{{$order->user_information['email']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 16px;">Firma</td>
                                    <td style="padding: 0 16px;">{{$order->deliver_information['business']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 16px;">NIP UE</td>
                                    <td style="padding: 0 16px;">{{$order->deliver_information['nip_ue']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 16px;">Adress</td>
                                    <td style="padding: 0 16px;">{{$order->deliver_information['address']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 16px;">Kod pocztowy</td>
                                    <td style="padding: 0 16px;">{{$order->deliver_information['zip_code']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 16px;">Country</td>
                                    <td style="padding: 0 16px;">{{$order->deliver_information['country']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 16px;">Miasto</td>
                                    <td style="padding: 0 16px;">{{$order->deliver_information['city']}}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 16px;">Telefoniczny numer kontaktowy</td>
                                    <td style="padding: 0 16px;">{{$order->deliver_information['phone']}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>


                    @if (!empty($order->alt_deliver_information['name']))
                        <tr>
                            <td align="center" style="padding-bottom:16px">
                                <table cellpadding="0" cellspacing="0" border="0" width="600" bgcolor="#ffffff">
                                    <tbody>

                                    <tr>
                                        <td colspan="2" style="padding: 0 16px;">Proszę użyć innego adresu rozliczeniowego</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 16px;">Imię</td>
                                        <td style="padding: 0 16px;">{{$order->alt_deliver_information['fullname']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 16px;">Firma</td>
                                        <td style="padding: 0 16px;">{{$order->alt_deliver_information['business']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 16px;">NIP UE</td>
                                        <td style="padding: 0 16px;">{{$order->alt_deliver_information['nip_ue']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 16px;">Adress</td>
                                        <td style="padding: 0 16px;">{{$order->alt_deliver_information['address']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 16px;">Kod pocztowy</td>
                                        <td style="padding: 0 16px;">{{$order->alt_deliver_information['zip_code']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 16px;">Country</td>
                                        <td style="padding: 0 16px;">{{$order->alt_deliver_information['country']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 16px;">Miasto</td>
                                        <td style="padding: 0 16px;">{{$order->alt_deliver_information['city']}}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 16px;">Telefoniczny numer kontaktowy</td>
                                        <td style="padding: 0 16px;">{{$order->alt_deliver_information['phone']}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>


            </td>
        </tr>
        </tbody>
    </table>
</div>


</body>
</html>
