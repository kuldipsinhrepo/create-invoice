<?php
ini_set('display_errors', false);
//print_r($_POST);

function numberTowords($num)
{
    $ones = array(
        1 => "one",
        2 => "two",
        3 => "three",
        4 => "four",
        5 => "five",
        6 => "six",
        7 => "seven",
        8 => "eight",
        9 => "nine",
        10 => "ten",
        11 => "eleven",
        12 => "twelve",
        13 => "thirteen",
        14 => "fourteen",
        15 => "fifteen",
        16 => "sixteen",
        17 => "seventeen",
        18 => "eighteen",
        19 => "nineteen"
    );
    $tens = array(
        1 => "ten",
        2 => "twenty",
        3 => "thirty",
        4 => "forty",
        5 => "fifty",
        6 => "sixty",
        7 => "seventy",
        8 => "eighty",
        9 => "ninety"
    );
    $hundreds = array(
        "hundred",
        "thousand",
        "million",
        "billion",
        "trillion",
        "quadrillion"
    ); //limit t quadrillion 
    $num = number_format($num, 2, ".", ",");
    $num_arr = explode(".", $num);
    $wholenum = $num_arr[0];
    $decnum = $num_arr[1];
    $whole_arr = array_reverse(explode(",", $wholenum));
    krsort($whole_arr);
    $rettxt = "";
    foreach ($whole_arr as $key => $i) {
        if ($i < 20) {
            $rettxt .= $ones[$i];
        } elseif ($i < 100) {
            $rettxt .= $tens[substr($i, 0, 1)];
            $rettxt .= " " . $ones[substr($i, 1, 1)];
        } else {
            $rettxt .= $ones[substr($i, 0, 1)] . " " . $hundreds[0];
            $rettxt .= " " . $tens[substr($i, 1, 1)];
            $rettxt .= " " . $ones[substr($i, 2, 1)];
        }
        if ($key > 0) {
            $rettxt .= " " . $hundreds[$key] . " ";
        }
    }
    if ($decnum > 0) {
        $rettxt .= " and ";
        if ($decnum < 20) {
            $rettxt .= $ones[$decnum];
        } elseif ($decnum < 100) {
            $rettxt .= $tens[substr($decnum, 0, 1)];
            $rettxt .= " " . $ones[substr($decnum, 1, 1)];
        }
    }
    return $rettxt;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        REYAN DIGITAL CREATION
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js">
    </script>
</head>
<style>

</style>
<style>
    * {
        box-sizing: border-box;
    }

    .table-bordered td,
    .table-bordered th {
        border: 1px solid #ddd;
        padding: 10px;
        word-break: break-all;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
        font-size: 16px;
    }

    .h4-14 h4 {
        font-size: 12px;
        margin-top: 0;
        margin-bottom: 5px;
    }

    .img {
        margin-left: "auto";
        margin-top: "auto";
        height: 30px;
    }

    pre,
    p {
        /* width: 99%; */
        /* overflow: auto; */
        /* bpicklist: 1px solid #aaa; */
        padding: 0;
        margin: 0;
    }

    table {
        font-family: arial, sans-serif;
        width: 100%;
        border-collapse: collapse;
        padding: 1px;
    }

    .hm-p p {
        text-align: left;
        padding: 1px;
        padding: 5px 4px;
    }

    td,
    th {
        text-align: left;
        padding: 8px 6px;
    }

    .table-b td,
    .table-b th {
        border: 1px solid #ddd;
    }

    th {
        /* background-color: #ddd; */
    }

    .hm-p td,
    .hm-p th {
        padding: 3px 0px;
    }

    .cropped {
        float: right;
        margin-bottom: 20px;
        height: 100px;
        /* height of container */
        overflow: hidden;
    }

    .cropped img {
        width: 400px;
        margin: 8px 0px 0px 80px;
    }

    .main-pd-wrapper {
        box-shadow: 0 0 10px #ddd;
        background-color: #fff;
        border-radius: 10px;
        padding: 15px;
    }

    .table-bordered td,
    .table-bordered th {
        border: 1px solid #ddd;
        padding: 10px;
        font-size: 14px;
    }

    .text-center {
        text-align: center !important;
    }

    .text-left {
        text-align: left !important;
    }

    .text-right {
        text-align: right !important;
    }

    .amount_tbl th {
        padding: 3px !important;
        text-align: center;
    }
</style>

<body>

    <div class="container">

        <!-- <input type="button" value="Convert HTML to PDF" onclick="convertHTMLtoPDF()"> -->
        <div id="invoice_layout">

            <section class="main-pd-wrapper" style="width: 1000px; margin: auto">
                <div style="display: table-header-group">


                    <table style="width: 100%; table-layout: fixed">
                        <tr>
                            <td
                                style="border-left: 1px solid #ddd; border-right: 1px solid #ddd;width: 30%; padding-left: 20px;">
                                <div
                                    style="text-align: center;margin: auto;line-height: 1.5;font-size: 14px;color: #4a4a4a;">
                                    <img src="img/logo.png" width="280">
                                </div>
                            </td>
                            <td align="right" style="padding-left: 50px;line-height: 1.5;color: #323232;">
                                <div>
                                    <h1 style="text-align: left; margin: 0"><b>REYAN DIGITAL CREATION</b></h1>

                                    <!-- <p>NAME   :- {{ customer["name"]}}</p>
                        <p>ADDRESS:- {{customer['address']}}</p>
                        <p>MOBILE :- {{customer['mobile']}}</p>
                        <p>OrderID   :- {{customer['order_id']}}</p>  -->
                                    <p style="font-size: 14px">
                                        SY No. 191-1-A, Sub Plot-1 F.F Kadiwala Estate, Opp. Shivram Dyeing, <br>B/h Opera House Khatodara, Surat - 395002
                                        Surat 394317.
                                        <br><strong>E-mail: </strong>hmp3178@gmail.com,<strong> (M):</strong> 92653 51832<strong> (W):</strong> 99044 11239
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <table class="table table-bordered h4-14 amount_tbl"
                    style="width: 100%; -fs-table-paginate: paginate; margin-top: 15px">
                    <thead style="display: table-header-group">
                        <tr
                            style="margin: 0;padding: 15px;padding-left: 20px;-webkit-print-color-adjust: exact;">
                            <td colspan="2" class="text-center"><img src="img/barcode.png" width="100"></td>
                            <td colspan="10" style="vertical-align: baseline;">
                                <table>
                                    <tr>
                                        <td colspan="3" style="text-align: center;font-weight:bold;font-size:16px">TAX
                                            INVOICE</td>
                                    </tr>
                                    <tr>
                                        <td><b>Ack Date:</b>
                                            <?php echo $_POST['ack_date'] ?>
                                        </td>
                                        <td><b>Invoice No:</b>
                                            <?php echo $_POST['invoice_no'] ?>
                                        </td>
                                        <td><b>Invoice Date:</b>
                                            <?php echo $_POST['invoice_date'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Ack No:</b>
                                            <?php echo $_POST['ack_no'] ?>
                                        </td>
                                        <td><b>Due Date:</b>
                                            <?php echo $_POST['due_date'] ?>
                                        </td>
                                        <td><b>Due Days:</b>
                                            <?php echo $_POST['due_days'] ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td colspan="12" class="text-center"><strong>Irn No: </strong>
                                <?php echo $_POST['irn_no'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-center"><b>Details of Receiver ( Billed To)</b></td>
                            <td colspan="6" class="text-center"><b>Details of Consignee ( Shipped To )</b></td>
                        </tr>
                        <tr
                            style="margin: 0;padding: 15px;padding-left: 20px;-webkit-print-color-adjust: exact;">
                            <td colspan="6">
                                <h3>
                                    <?php echo $_POST['rec_name'] ?>
                                </h3>
                                <p
                                    style="font-weight: 300;font-size: 85%;color: #626262;margin-top: 7px;margin-bottom: 25px;">
                                    <?php echo $_POST['rec_address'] ?>
                                </p>
                                <span><strong>PAN No. </strong>:
                                    <?php echo $_POST['rec_pan'] ?>
                                </span>
                                <span style="float: right;"><strong>GST No. <strong>:
                                            <?php echo $_POST['rec_gst'] ?></span>
                            </td>
                            <td colspan="6">
                                <h3>
                                    <?php echo $_POST['con_name'] ?>
                                </h3>
                                <p
                                    style="font-weight: 300;font-size: 85%;color: #626262;margin-top: 7px;margin-bottom: 25px;">
                                    <?php echo $_POST['con_address'] ?>
                                </p>
                                <span><strong>PAN No. </strong>:
                                    <?php echo $_POST['con_pan'] ?>
                                </span>
                                <span style="float: right;"><strong>GST No. <strong>:
                                            <?php echo $_POST['con_gst'] ?></span>
                            </td>
                        </tr>

                        <tr>
                            <th style="width: 50px">Sr.</th>
                            <th style="width: 200px"> Description</th>
                            <th style="width: 100px">HSN Code</th>
                            <th style="width: 80px">D.No</th>
                            <th style="width: 60px">Lot No</th>
                            <th style="width: 80px">Ch No</th>
                            <th style="width: 80px">Pcs</th>
                            <th style="width: 80px">Gr Mtc</th>
                            <th style="width: 80px">Fin Mts</th>
                            <th style="width: 80px">Short (%)</th>
                            <th style="width: 120px">Rate</th>
                            <th style="width: 120px">Amount</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i <= count($_POST['tbl_desc']); $i++) { ?>
                            <tr>
                                <td>
                                    <?php echo $i + 1 ?>
                                </td>
                                <td>
                                    <?php echo $_POST['tbl_desc'][$i] ?>
                                </td>
                                <td>
                                    <?php echo $_POST['hsn_code'][$i] ?>
                                </td>
                                <td>
                                    <?php echo $_POST['d_no'][$i] ?>
                                </td>
                                <td>
                                    <?php echo $_POST['lot_no'][$i] ?>
                                </td>
                                <td>
                                    <?php echo $_POST['ch_no'][$i] ?>
                                </td>
                                <td>
                                    <?php echo $_POST['pcs'][$i] ?>
                                </td>
                                <td>
                                    <?php echo $_POST['gr_mts'][$i] ?>
                                </td>
                                <td>
                                    <?php echo $_POST['fin_mts'][$i] ?>
                                </td>
                                <td>
                                    <?php echo $_POST['short'][$i] ?>
                                </td>
                                <td>
                                    <?php echo $_POST['rate'][$i] ?>
                                </td>
                                <td>
                                    <?php echo $_POST['amount'][$i] ?>
                                </td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan='6'></td>
                            <td>
                                <?php echo $_POST['ttl_pcs'] ?>
                            </td>
                            <td>
                                <?php echo $_POST['ttl_gr_mts'] ?>
                            </td>
                            <td>
                                <?php echo $_POST['ttl_fin_mts'] ?>
                            </td>
                            <td colspan="2"></td>
                            <td>
                                <?php echo $_POST['ttl_amount'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8"></td>
                            <td colspan="2"><b>BASIC VALUE</b></td>
                            <td colspan="2" class="text-right"><?php echo $_POST['basic_value'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="8"></td>
                            <td colspan="2"><b>IGST @5.00</b></td>
                            <td colspan="2" class="text-right"><?php echo $_POST['igst'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="8"></td>
                            <td colspan="2"><b>TOTAL AMOUNT</b></td>
                            <td colspan="2" class="text-right"><?php echo $_POST['final_amount'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center"><b>Amount In Word</b></td>
                        <td colspan="9" style="vertical-align: top;text-transform: uppercase;"><b>
                            <?php
                        if(intval($_POST['final_amount']) > 0){
                        echo numberTowords($_POST['final_amount']);
                        }
                        ?> only</b></td>
                        </tr>
                    </tfoot>
                </table>

                <table class="hm-p table-bordered" style="width: 100%; margin-top: 30px;display:none">
                    <tr>
                        <th style="width: 400px">BASIC VALUE</th>
                        <td style="vertical-align: top; color: #000"> <b>
                                <?php echo $_POST['basic_value'] ?>
                            </b></td>
                    </tr>
                    <tr>
                        <th style="width: 400px">IGST @5.00</th>
                        <td style="vertical-align: top; color: #000"><b>
                                <?php echo $_POST['igst'] ?>
                            </b></td>
                    </tr>
                    <tr>
                        <th style="vertical-align: top"></th>
                    </tr>
                    <tr>
                        <th style="vertical-align: top">TOTAL AMOUNT</th>
                        <td style="vertical-align: top"><b>
                                <?php echo $_POST['final_amount'] ?>
                            </b></td>
                    </tr>
                    <tr>
                        <th style="vertical-align: top">Amount In Word</th>
                        <td style="vertical-align: top;text-transform: uppercase;"><b><?php
                        
                        if(intval($_POST['final_amount']) > 0){
                            echo numberTowords($_POST['final_amount']);
                            }
                        ?> only</b></td>
                    </tr>


                </table>
                <table class="hm-p table-bordered" style="width: 100%; margin-top: 30px">
                    <tr>
                        <th style="width: 400px"> BANK NAME</th>
                        <td style="vertical-align: top; color: #000">
                            <?php echo $_POST['bank_name'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th style="width: 400px">A/C NO</th>
                        <td style="vertical-align: top; color: #000">
                            <?php echo $_POST['acc_no'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th style="vertical-align: top">IFS CODE</th>
                        <td style="vertical-align: top; color: #000">
                            <?php echo $_POST['ifc_code'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th style="vertical-align: top">BRANCH</th>
                        <td style="vertical-align: top">
                            <?php echo $_POST['branch'] ?>
                        </td>
                    </tr>


                </table>



                <table style="width: 100%" cellspacing="0" cellspadding="0" border="0">
                    <tr>
                        <td>
                            <h4 style="margin: 10px 0">Temo No.:
                                <?php echo $_POST['tempo_no'] ?>
                            </h4>
                        </td>
                        <td>
                            <h4 style="margin: 0; text-align: right">For REYAN DIGITAL CREATION</h4>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="height: 60px;text-align:right"></td>
                    </tr>
                    <tr>
                        <td>
                            <h4 style="margin: 10px 0">CHECKED BY:
                                <?php echo $_POST['checked_by'] ?>
                            </h4>
                        </td>
                        <td>
                            <h4 style="margin: 0; text-align: right">Auth Sign.</h4>
                        </td>
                    </tr>
                </table>
            </section>
</body>

</html>

</div>
</div> <!-- /container -->

<script type="text/javascript">
    function convertHTMLtoPDF() {
        const { jsPDF } = window.jspdf;

        var doc = new jsPDF('p', 'pt', [595.28, 841.89]);
        var pdfjs = document.querySelector('#invoice_layout');

        doc.html(pdfjs, {
            callback: function (doc) {
                doc.save("newpdf.pdf");
            },
            x: 12,
            y: 12
        });
    }           
</script>
</body>

</html>