<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        jsPDF - Create PDFs with HTML5 JavaScript Library
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
    #invoice_layout {
        margin: 0px auto;
        display: table;
        width: 50%;
    }
</style>

<body>

    <div class="container">

        <input type="button" value="Convert HTML to PDF" onclick="convertHTMLtoPDF()">
        <div id="invoice_layout">
            <table>
                <tr>
                    <td><img src="img/logo.png" width="200"></td>
                    <td>
                        Riyan Digital Creation<br>
                        Block No. 194/2, Nr Vishnu Priya Dyening Mill, N.H No. 48, Palsana, Baleshwar, Surat 394317.
                        <strong>State Name: Gujarat(24)</strong><strong>Pan No.</strong>, AAIFV9067E, <strong>GSTIN:
                        </strong>24AAIFV9067E1ZW<strong>E-mail: </strong>account@veronicadigital.in,
                        veronica.digi@gmail.com <strong>(M):</strong> 9726670708

                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="width:50%"> QR Code</td>
                    <td>
                        <table>
                            <tr>
                                <td><strong>TAX INVOICE</strong></td>
                            </tr>
                            <tr>
                                <td>ACT Date</td>
                                <td>Invoice No</td>
                                <td>Invoice Date</td>

                            </tr>
                            <tr>
                                <td>ACT No</td>
                                <td>Due Date</td>
                                <td>Due Days</td>

                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>Irn No: </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>Details of Recevier (Billed To)</td>
                    <td>Details of Consignee (Shipped To)</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table class="table product_tbl">
                      <tr>
                        <td>Sr.</td>
                        <td>Description</td>
                        <td>Hsn Code</td>
                        <td>D.No</td>
                        <td>Lot No</td>
                        <td>Ch No</td>
                        <td>Pcs</td>
                        <td>Gr Mts</td>
                        <td>Fin Mts</td>
                        <td>Short (%)</td>
                        <td>Rate</td>
                        <td>Amount</td>
                      </tr>
                      <tr>
                        <td><td>
                      </tr>
                      <tr>
                        <td colspan="7"><td>
                        <td><td>
                        <td><td>
                        <td colspan="2"><td>
                      </tr>
                      <tr>
                        <td colspan="9">Basic Value<td>                        
                        <td colspan="2"><td>
                      </tr>
                      <tr>
                        <td colspan="9">IGST @5.00<td>                        
                        <td colspan="2"><td>
                      </tr>
                      <tr>
                        <td colspan="9">Total Amount<td>                        
                        <td colspan="2"><td>
                      </tr>
                  </table>
        </div>
    </div> <!-- /container -->

    <script type="text/javascript">
        function convertHTMLtoPDF() {
            const { jsPDF } = window.jspdf;

            var doc = new jsPDF('p', 'pt', [595.28, 841.89]);
            var pdfjs = document.querySelector('#divID');

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