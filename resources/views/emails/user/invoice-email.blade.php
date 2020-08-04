<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE]><html xmlns="http://www.w3.org/1999/xhtml" class="ie"><![endif]-->
<html style="margin: 0;padding: 0;" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width">
</head>

<body style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;width:100%;">

    <table class="wrapper" style="border-collapse: collapse;table-layout: fixed;width: 100%;max-width: 800px;min-width: 500px;margin: 0 auto;background-color: #f9f9f9;" cellpadding="0" cellspacing="0" role="presentation">
        <tbody>
            <tr>
                <td>
                    <div style="float: left;width: 100%;background-color: #ffee00;padding: 50px 50px 190px;box-sizing: border-box;">
                        <div style="width: 50%;float: left;">
                            <img width="90px" src="{{ URL::to('/auraqatar/public/') }}/invoice/logo.png}}" alt="">
                        </div>
                        <div style="width: 50%;float: left;text-align: right;">
                            <p style="font-size: 14px;color: #000000;font-weight:400;font-family: 'gdsherpa',Helvetica,Arial,sans-serif;margin: 2px 0;">SAVING SQUARE</p>
                            <p style="font-size: 14px;color: #000000;font-weight:400;font-family: 'gdsherpa',Helvetica,Arial,sans-serif;margin: 2px 0;">awar Mall, Gate 3,</p>
                            <p style="font-size: 14px;color: #000000;font-weight:400;font-family: 'gdsherpa',Helvetica,Arial,sans-serif;margin: 2px 0;">Floor 1, Shop F15،</p>
                            <p style="font-size: 14px;color: #000000;font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-weight:400;margin: 2px 0;">Al Markhiya St, Doha.</p>
                            <p style="font-size: 14px;color: #000000;font-weight:400;font-family: 'gdsherpa',Helvetica,Arial,sans-serif;margin: 20px 0 4px;"><span style="color: #0984e2;margin-right: 10px;">@</span>company@gamil.com</p>
                            <p style="font-size: 14px;color: #000000;font-weight:400;font-family: 'gdsherpa',Helvetica,Arial,sans-serif;margin: 2px 0;"><span style="color: #0984e2;margin-right: 10px;">m</span>+974 4442 9100</p>

                        </div>
                    </div>
                    <div style="float: left;width: 100%;background-color: #f9f9f9;padding: 20px 35px;box-sizing: border-box;">
                        <div style="background-color: #fff;width: 100%;float: left;padding: 20px;box-sizing: border-box;margin-top: -160px;">
                            <h3 style="margin-top: 35px;margin-bottom: 35px;font-family:'gdsherpa',Helvetica,Arial,sans-serif;font-size: 40px;line-height: 20px;text-align: center;color: #0984e2;font-weight: 600;float: left;width: 100%;">ClickCheck</h3>
                            <h4 style="margin-top: 20px; margin-bottom: 0px; font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 28px; line-height: 20px; text-align: center; color: #7cc423; font-weight: 600; border-top: 1px solid #ebebeb; padding-top: 45px; float: left;width: 100%;">Thank you for your order!</h4>
                            <p style="margin-top: 0px;margin-bottom: 30px;font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-size: 18px;line-height: 20px;text-align: center;color: #888888;font-weight: 400;padding-top: 30px;float: left;width: 100%;">This is custom content from the Ticket Page Settings page in the admin.
                            </p>
                            <h5 style="margin-top: 15px;margin-bottom: 30px;font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-size: 26px;line-height: 20px;text-align: left;color: #333333;font-weight: 500;padding: 30px 20px;float: left;width: 100%;background-color: #f9f9f9;box-sizing: border-box;">Order Information</h5>
                            <table border="0">
                                <tbody>
                                    <tr>
                                        <td style="font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-size: 18px;text-align: left;color: #333333;font-weight: 400;vertical-align: top;padding-top: 10px;padding-bottom: 10px;padding-left: 15px;">Seller :</td>
                                        <td style="font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-size: 18px;text-align: left;color: #888888;font-weight: 400;padding-top: 10px;padding-bottom: 10px;vertical-align: top;padding-left: 15px;">{{ $data1["seller"] }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-size: 18px;text-align: left;color: #333333;font-weight: 400;padding-top: 10px;vertical-align: top;padding-bottom: 10px;padding-left: 15px;">Purchaser : </td>
                                        <td style="font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-size: 18px;text-align: left;color: #888888;font-weight: 400;padding-top: 10px;padding-bottom: 10px;vertical-align: top;line-height: 30px;padding-left: 15px;">{{ $data1["name"] }} <br>{{ $data1["address"] }} <br>, {{ $data1["zipcode"] }} {{ $data1["city"] }}, {{ $data1["country"] }} <br><span style="color: #13a6ef;">{{ $data1["email"] }}</span> <br>{{ $data1["mobile"] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-size: 18px;text-align: left;color: #333333;font-weight: 400;padding-top: 10px;padding-bottom: 10px;vertical-align: top;padding-left: 15px;">Invoice Number : </td>
                                        <td style="font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-size: 18px;text-align: left;color: #888888;font-weight: 400;padding-top: 10px;padding-bottom: 10px;vertical-align: top;padding-left: 15px;">{{ $data1["invoice_no"] }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-size: 18px;text-align: left;color: #333333;font-weight: 400;padding-top: 10px;padding-bottom: 10px;vertical-align: top;padding-left: 15px;">Customer ID : </td>
                                        <td style="font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-size: 18px;text-align: left;color: #888888;font-weight: 400;padding-top: 10px;padding-bottom: 10px;vertical-align: top;padding-left: 15px;">{{ $data1["customer_id"] }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-size: 18px;text-align: left;color: #333333;font-weight: 400;padding-top: 10px;padding-bottom: 10px;vertical-align: top;padding-left: 15px;">Date/Time :</td>
                                        <td style="font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-size: 18px;text-align: left;color: #888888;font-weight: 400;padding-top: 10px;padding-bottom: 10px;vertical-align: top;padding-left: 15px;">{{ $data1["datetime"] }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-size: 18px;text-align: left;color: #333333;font-weight: 400;padding-top: 10px;padding-bottom: 10px;vertical-align: top;padding-left: 15px;">Payment Type :</td>
                                        <td style="font-family: 'gdsherpa',Helvetica,Arial,sans-serif;font-size: 18px;text-align: left;color: #888888;font-weight: 400;padding-top: 10px;padding-bottom: 10px;vertical-align: top;padding-left: 15px;">Credit Card - ending 11</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h5 style="margin-top: 40px; margin-bottom: 20px; font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 26px; line-height: 20px; text-align: left; color: #333333; font-weight: 500; padding: 30px 20px; float: left; width: 100%; background-color: #f9f9f9; box-sizing: border-box; ">Order Details</h5>
                            <table style="width: 100%; border: 1px solid #ebebeb; padding: 0; border-collapse: collapse; ">
                                <tbody>
                                    <tr>
                                        <td style="font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #333333; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: middle; width: 9%; border-right: 1px solid #ebebeb; border-bottom: 1px solid #ebebeb; ">#</td>
                                        <td style="font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; color: #333333; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: middle; text-align: center; border-right: 1px solid #ebebeb; border-bottom: 1px solid #ebebeb; ">Description</td>
                                        <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #333333; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: middle; border-bottom: 1px solid #ebebeb; border-right: 1px solid #ebebeb; width: 11%; ">Qty</td>
                                        <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #333333; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: middle; width: 18%; border-bottom: 1px solid #ebebeb; border-right: 1px solid #ebebeb; ">Unit <br>Price</td>
                                        <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #333333; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: middle; width: 18%; border-bottom: 1px solid #ebebeb; ">Item <br> Total </td>
                                    </tr>
                                    <?php
                                    $no=1;
                                    foreach($data2 as $items)
                                    {
                                    ?>
                                    <tr>
                                        <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; border-right: 1px solid #ebebeb; "><?php echo $no; ?></td>
                                        <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: left; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; padding-left: 15px; border-right: 1px solid #ebebeb; "><?php echo $items['pro_name']; ?></td>
                                        <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; border-right: 1px solid #ebebeb; "><?php echo $items['pro_qty']; ?></td>
                                        <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; border-right: 1px solid #ebebeb; ">QAR <?php echo $items['pro_price']; ?></td>
                                        <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; ">QAR <?php echo $items['pro_total_price']; ?> </td>
                                    </tr>
                                    <?php $no++; } ?>
                                    <!--<tr>-->
                                    <!--    <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; border-right: 1px solid #ebebeb; display: table-cell; ">2</td>-->
                                    <!--    <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: left; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; padding-left: 15px; border-right: 1px solid #ebebeb; ">Samsung note 2020 Model Phone</td>-->
                                    <!--    <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; border-right: 1px solid #ebebeb; ">1</td>-->
                                    <!--    <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; border-right: 1px solid #ebebeb; ">QAR 1200</td>-->
                                    <!--    <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; ">QAR 1200</td>-->
                                    <!--</tr>-->
                                    <!--<tr>-->
                                    <!--    <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; border-right: 1px solid #ebebeb; display: table-cell; ">3</td>-->
                                    <!--    <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: left; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; padding-left: 15px; border-right: 1px solid #ebebeb; ">Magic lamp Coloring Book And Pencils</td>-->
                                    <!--    <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; border-right: 1px solid #ebebeb; ">2</td>-->
                                    <!--    <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; border-right: 1px solid #ebebeb; ">QAR 150</td>-->
                                    <!--    <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #888888; font-weight: 400; padding-top: 10px; padding-bottom: 10px; vertical-align: top; ">QAR 300</td>-->
                                    <!--</tr>-->
                                    <tr>
                                        <td colspan="4" style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: right; color: #333333; font-weight: 400; padding-top: 10px; padding-right: 15px; padding-bottom: 10px; vertical-align: middle; border-top: 1px solid #ebebeb; border-right: 1px solid #ebebeb; ">Shipping Charge</td>
                                        <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: left; color: #333333; font-weight: 400; padding-top: 15px; padding-left: 15px; padding-bottom: 15px; vertical-align: middle; border-top: 1px solid #ebebeb; ">QAR {{ $data1["shipping_charge"] }}.00</td>

                                    </tr>
                                    <tr>
                                        <td colspan="4" style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: right; color: #333333; font-weight: 400; padding-top: 10px; padding-right: 15px; padding-bottom: 10px; vertical-align: middle; border-top: 1px solid #ebebeb; border-right: 1px solid #ebebeb; ">Total</td>
                                        <td style=" font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: left; color: #333333; font-weight: 400; padding-top: 15px; padding-left: 15px; padding-bottom: 15px; vertical-align: middle; border-top: 1px solid #ebebeb; ">QAR {{ $data1["cart_total"]+$data1["shipping_charge"] }}.00</td>

                                    </tr>

                                </tbody>
                            </table>
                            <div style=" margin-top: 0px; margin-bottom: 20px; font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; line-height: 20px; text-align: center; color: #888888; font-weight: 400; padding-top: 30px; float: left; width: 100%; ">Click <a href="#" style=" color: #13a6ef; text-decoration: underline; "> here</a> for order Details.</div>
                        </div>
                    </div>
                    <div style="float: left;width: 100%;background-color: #f9f9f9;padding: 0px 35px 0px;box-sizing: border-box;">
                        <div style="background-color: #fff;width: 100%;float: left;padding: 46px 0px;box-sizing: border-box;margin-top: 0;">
                            <h3 style="margin-top: 0;margin-bottom: 35px;font-family:'gdsherpa',Helvetica,Arial,sans-serif;font-size: 24px;line-height: 20px;text-align: center;color: #000;font-weight: 600;float: left;width: 100%;">Download Saving Square App</h3>
                            <table style=" width: 100%; ">
                                <tbody>
                                    <tr>
                                        <td align="right" style="padding-right: 10px;">
                                            <a href="#"><img src="{{'/assets/invoice/images/playstore.png'}}" style="max-width: 175px;" alt=""></a>
                                        </td>
                                        <td align="left" style=" padding-left: 10px; ">
                                            <a href="#"><img src="{{'/assets/invoice/images/app-store.png'}}" style="max-width: 175px;" alt=""></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div style=" margin-top: 0px; margin-bottom: 50px; font-family: 'gdsherpa',Helvetica,Arial,sans-serif; font-size: 18px; text-align: center; color: #888888; font-weight: 400; padding-top: 30px; float: left; width: 100%; line-height: 30px; background: #f9f9f9; ">If you’d like to stop receiving these emails <a href="#" style=" color: #13a6ef; text-decoration: none; ">click here</a>.
                        <br>This emails is a service of <a href="mailto:sale@savingsquare.com" style=" color: #13a6ef; text-decoration: none; ">sale@savingsquare.com</a>
                        <br>SAVING SQUAREawar Mall, Gate 3, Floor 1, Shop F15،<br> Al Markhiya St, Doha. <br>88-66-899-899 </div>
                </td>
            </tr>
        </tbody>
    </table>





</body>

</html>