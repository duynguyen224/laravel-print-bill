<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style>
        :root {
            --paper-57mm: 215.43307087px;
            /* 57mm */
            --paper-75mm: 283.46456693px;
            /* 75mm */
            --paper-80mm: 302.36220472px;
            /* 80mm */
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: DejaVu Sans, sans-serif;
            /* this font working with UTF-8 */
            font-size: 12px;
        }

        .d-align-center {
            text-align: center;
        }

        .d-align-right {
            text-align: right;
        }

        .d-bold {
            font-weight: 700;
        }

        .d-bigger {
            font-size: 1.1rem;
        }

        .w-30-percent {
            width: 30%;
        }

        .perfect-center {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .invoice-container {
            padding: 1rem;
            width: var(--paper-75mm);
            border: 1px solid black;
        }

        .header-invoice {
            text-align: center;
            width: 100%;
        }

        .header-invoice .restaurant-logo {
            width: 5rem;
        }

        .header-invoice .restaurant-info {
            text-align: center;
        }

        .body-invoice {}

        .body-invoice .title {
            text-align: center;
            text-transform: uppercase;
            font-size: 16px;
            margin-top: 2rem;
        }

        .body-invoice .info-container {
            width: 100%;
        }

        .body-invoice .left-info {
            text-align: left;
        }

        .body-invoice .right-info {
            text-align: right;
        }

        .table-items {
            margin-top: 1rem;
            width: 100%;
        }

        .table-items td,
        th {
            border: 1px solid #000;
            padding: 5px;
        }

        .table-items {
            border-collapse: collapse;
        }

        .table-items-calculate {
            text-align: right;
            padding-bottom: 1rem;
            width: 100%;
        }

        .table-items-calculate-container {
            border-bottom: 1px solid #000;
            padding-bottom: 2rem;
        }

        .table-items-calculate {
            text-align: right;
        }

        .footer-invoice {
            text-align: center;
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <main class="perfect-center">
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
