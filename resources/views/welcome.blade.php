<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <title>Print bill</title>
</head>

<body>
    <main class="perfect-center">
        <a href="{{ route('print') }}">Click to print</a>
        <section class="invoice-container">
            <table class="header-invoice">
                <tr>
                    <td style="width: 30%">
                        <div class="restaurant-logo">
                            <img src="https://png.pngtree.com/png-clipart/20200727/original/pngtree-restaurant-logo-design-vector-template-png-image_5441058.jpg"
                                alt="" style="width: 100%;">
                        </div>
                    </td>
                    <td style="width: 70%">
                        <div class="restaurant-info">
                            <h4>CONG TY TNHH ARIS VN</h4>
                            <p>DETECH TOWER2 <br /> 107 Nguyen Phong Sac, Ha Noi</p>
                            <p>SĐT: 0123456789</p>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="body-invoice">
                <h3 class="title">Phiếu tính tiền</h3>
                <table class="info-container">
                    <tr>
                        <td>
                            <div class="left-info">
                                <p>Ngày: </p>
                                <p>Thu ngân: </p>
                                <p>Giờ vào: </p>
                                <p>Tổng thời gian: </p>
                            </div>
                        </td>
                        <td>
                            <div class="right-info">
                                <p>bla</p>
                                <p>blabla</p>
                                <p>bla</p>
                            </div>
                        </td>
                    </tr>
                </table>
                <div>
                    <table class="table-items" style="table-layout:fixed;">
                        <tr>
                            <th style="width: 30%;">Tên món</th>
                            <th style="width: 10%;">SL</th>
                            <th style="width: 25%;">Giá</th>
                            <th style="width: 20%;">C.khấu</th>
                            <th style="width: 25%;">T.tiền</th>
                        </tr>
                        <tr>
                            <td>Dê tái chanh</td>
                            <td class="d-align-center">10</td>
                            <td class="d-align-right">150.000</td>
                            <td class="d-align-center">5</td>
                            <td class="d-align-right">300.000</td>
                        </tr>
                        <tr>
                            <td>Bò nướng tảng</td>
                            <td class="d-align-center">2</td>
                            <td class="d-align-right">150.000</td>
                            <td class="d-align-center">5</td>
                            <td class="d-align-right">300.000</td>
                        </tr>
                        <tr>
                            <td>Tiết canh dê</td>
                            <td class="d-align-center">2</td>
                            <td class="d-align-right">150.000</td>
                            <td class="d-align-center">5</td>
                            <td class="d-align-right">300.000</td>
                        </tr>
                        <tr>
                            <td>Dê tái chanh</td>
                            <td class="d-align-center">2</td>
                            <td class="d-align-right">150.000</td>
                            <td class="d-align-center">5</td>
                            <td class="d-align-right">300.000</td>
                        </tr>
                        <tr>
                            <td>Bò nướng tảng</td>
                            <td class="d-align-center">2</td>
                            <td class="d-align-right">150.000</td>
                            <td class="d-align-center">5</td>
                            <td class="d-align-right">300.000</td>
                        </tr>
                        <tr>
                            <td>Tiết canh dê</td>
                            <td class="d-align-center">2</td>
                            <td class="d-align-right">150.000</td>
                            <td class="d-align-center">5</td>
                            <td class="d-align-right">300.000</td>
                        </tr>
                        <tr>
                            <td>Bò nướng tảng</td>
                            <td class="d-align-center">2</td>
                            <td class="d-align-right">150.000</td>
                            <td class="d-align-center">5</td>
                            <td class="d-align-right">300.000</td>
                        </tr>
                        <tr>
                            <td>Tiết canh dê</td>
                            <td class="d-align-center">2</td>
                            <td class="d-align-right">150.000</td>
                            <td class="d-align-center">5</td>
                            <td class="d-align-right">300.000</td>
                        </tr>
                        <tr>
                            <td>Dê tái chanh</td>
                            <td class="d-align-center">2</td>
                            <td class="d-align-right">150.000</td>
                            <td class="d-align-center">5</td>
                            <td class="d-align-right">300.000</td>
                        </tr>
                        <tr>
                            <td>Bò nướng tảng</td>
                            <td class="d-align-center">2</td>
                            <td class="d-align-right">150.000</td>
                            <td class="d-align-center">5</td>
                            <td class="d-align-right">300.000</td>
                        </tr>
                        <tr>
                            <td>Tiết canh dê</td>
                            <td class="d-align-center">2</td>
                            <td class="d-align-right">150.000</td>
                            <td class="d-align-center">5</td>
                            <td class="d-align-right">300.000</td>
                        </tr>
                    </table>
                </div>
                <div class="table-items-calculate-container">
                    <table class="table-items-calculate" style="table-layout: fixed;">
                        <tr>
                            <td class="d-bold d-bigger" style="width: 60%;">Tổng tiền: </td>
                            <td class="d-bold d-bigger" style="width: 30%;">750.000</td>
                        </tr>
                        <tr>
                            <td class="d-bold d-bigger" style="width: 60%;">Chiết khấu: </td>
                            <td class="d-bold d-bigger" style="width: 30%;"><span class="d-bold d-bigger">–</span>
                                50.000</td>
                        </tr>
                        <tr>
                            <td class="d-bold d-bigger" style="width: 60%;">Thành tiền: </td>
                            <td class="d-bold d-bigger" style="width: 30%;">700.000</td>
                        </tr>
                    </table>
                    <p class="d-bold d-bigger d-align-right">Bảy trăm ngàn đồng chẵn</p>
                </div>
            </div>
            <div class="footer-invoice">
                Cảm ơn quý khách, hẹn gặp lại!
            </div>
        </section>
    </main>
</body>

</html>
