<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->





  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->



    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Invoice Information</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <form method="post" action="invoice.php">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tax Invoice </h5>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label for="ack_date" class="form-label">AcK Dat</label>
                    <input type="date" class="form-control" id="ack_date" name="ack_date">
                  </div>
                  <div class="col-md-6">
                    <label for="ack_no" class="form-label">AcK No</label>
                    <input type="text" class="form-control" id="ack_no" name="ack_no">
                  </div>
                  <div class="col-md-6">
                    <label for="invoice_no" class="form-label">Invoice No</label>
                    <input type="text" class="form-control" id="invoice_no" name="invoice_no">
                  </div>
                  <div class="col-md-6">
                    <label for="invoice_date" class="form-label">Invoice Date</label>
                    <input type="date" class="form-control" id="invoice_date" name="invoice_date">
                  </div>
                  <div class="col-md-6">
                    <label for="due_date" class="form-label">Due Date</label>
                    <input type="date" class="form-control" id="due_date" name="due_date">
                  </div>
                  <div class="col-md-6">
                    <label for="due_days" class="form-label">Due Days</label>
                    <input type="text" class="form-control" id="due_days" name="due_days">
                  </div>
                  <div class="col-md-12">
                    <label for="irn_no" class="form-label">Irn No</label>
                    <input type="text" class="form-control" id="irn_no" name="irn_no">
                  </div>
                </div>

                <h5 class="card-title">Details of Recevier (Billed To)</h5>
                <div class="row g-3">
                  <div class="col-md-12">
                    <label for="rec_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="rec_name" name="rec_name">
                  </div>
                  <div class="col-md-6">
                    <label for="rec_pan" class="form-label">Pan No</label>
                    <input type="text" class="form-control" id="rec_pan" name="rec_pan">
                  </div>
                  <div class="col-md-6">
                    <label for="rec_gst" class="form-label">GST No</label>
                    <input type="text" class="form-control" id="rec_gst" name="rec_gst">
                  </div>
                  <div class="col-md-12">
                    <label for="rec_address" class="form-label">Address</label>
                    <textarea type="text" class="form-control" id="rec_address" name="rec_address"></textarea>
                  </div>
                </div>

                <h5 class="card-title">Details of Consignee (Shipped To) <button type="button"
                    class="btn btn-sm btn-warning copy_rec_btn">Copy Recevier Details</button></h5>
                <div class="row g-3">
                  <div class="col-md-12">
                    <label for="con_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="con_name" name="con_name">
                  </div>
                  <div class="col-md-6">
                    <label for="con_pan" class="form-label">Pan No</label>
                    <input type="text" class="form-control" id="con_pan" name="con_pan">
                  </div>
                  <div class="col-md-6">
                    <label for="con_gst" class="form-label">GST No</label>
                    <input type="text" class="form-control" id="con_gst" name="con_gst">
                  </div>
                  <div class="col-md-12">
                    <label for="con_address" class="form-label">Address</label>
                    <textarea type="text" class="form-control" id="con_address" name="con_address"></textarea>
                  </div>
                </div>


                <h5 class="card-title">Product Information</h5>
                <div class="row g-3">
                  <div class="col-md-12">
                    <table class="table product_tbl">
                      <thead>
                        <tr>
                          <th scope="col">Sr.</th>
                          <th scope="col">Description</th>
                          <th scope="col">Hsn Code</th>
                          <th scope="col">D.No</th>
                          <th scope="col">Lot No</th>
                          <th scope="col">Ch No</th>
                          <th scope="col">Pcs</th>
                          <th scope="col">Gr Mts</th>
                          <th scope="col">Fin Mts</th>
                          <th scope="col">Short (%)</th>
                          <th scope="col">Rate</th>
                          <th scope="col">Amount</th>
                          <th></th>

                        </tr>
                      </thead>
                      <tbody>


                      </tbody>
                    </table>
                  </div>
                  <div class="col-md-12">
                    <button type="button" class="btn btn-warning cal_ttl float-end">Calculate Total</button>
                  </div>
                  <div class="col-md-3">
                    <label for="ttl_pcs" class="form-label">Total Pcs</label>
                    <input type="text" class="form-control" id="ttl_pcs" name="ttl_pcs">
                  </div>
                  <div class="col-md-3">
                    <label for="ttl_gr_mts" class="form-label">Total Gr Mts</label>
                    <input type="text" class="form-control" id="ttl_gr_mts" name="ttl_gr_mts">
                  </div>
                  <div class="col-md-3">
                    <label for="ttl_fin_mts" class="form-label">Total Fin Mts</label>
                    <input type="text" class="form-control" id="ttl_fin_mts" name="ttl_fin_mts">
                  </div>
                  <div class="col-md-3">
                    <label for="ttl_amount" class="form-label">Total Amount</label>
                    <input type="text" class="form-control" id="ttl_amount" name="ttl_amount">
                  </div>
                  <div class="col-md-3">
                    <label for="basic_value" class="form-label">Basic Value</label>
                    <input type="text" class="form-control" id="basic_value" name="basic_value">
                  </div>
                  <div class="col-md-4 d-none">
                    <input type="hidden" class="form-control" id="sgst" name="sgst">
                    <input type="hidden" class="form-control" id="cgst" name="cgst">
                  </div>
                  <div class="col-md-4">
                    <label for="final_amount" class="form-label">Final Amount</label>
                    <input type="text" class="form-control" id="final_amount" name="final_amount">
                  </div>

                  <div class="col-md-12">
                    <label for="remark" class="form-label">Remark</label>
                    <textarea type="text" class="form-control" id="remark" name="remark"></textarea>
                  </div>
                </div>

                <h5 class="card-title">Challan Details</h5>
                <div class="row g-3">
                  <div class="col-md-12">
                    <table class="table challan_tbl">
                      <thead>
                        <tr>
                          <th scope="col">Sr.</th>
                          <th scope="col">OP7066</th>
                          <th scope="col">K-0428</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      <tfoot>
                      <tr>
                        <td colspan="4"> <button type="button" class="btn btn-warning cal_ttl2 float-end">Calculate Total</button></td>
                      </tr>
                        <tr>
                          <td></td>
                          <td>Total: <input type="text" name="ttl_val1" class="ttl_val1 form-control" readonly></td>
                          <td>Total: <input type="text" name="ttl_val2" class="ttl_val2 form-control" readonly></td>
                          <td></td>
                        </tr>
                        <tr>
                        <td></td>
                          <td>Items: <input type="text" name="ttl_item1" class="ttl_item1 form-control" readonly></td>
                          <td>Items: <input type="text" name="ttl_item2" class="ttl_item2 form-control" readonly></td>
                          <td></td>
                        </tr>
                        <tr>
                        <td></td>
                          <td>Short %</td>
                          <td><input type="text" name="short_val" class="short_val form-control" readonly></td>
                          <td></td>
                        </tr>
                      </tfoot>>
                    </table>
                  </div>
                  <div class="col-md-12">
                   
                  </div>
                  
                </div>



                <h5 class="card-title">Bank Details</h5>
                <div class="row g-3">
                  <div class="col-md-4">
                    <label for="bank_name" class="form-label">Bank Name</label>
                    <input type="text" class="form-control" id="bank_name" name="bank_name" value="IDBI Bank">
                  </div>
                  <div class="col-md-4">
                    <label for="acc_no" class="form-label">A/C No</label>
                    <input type="text" class="form-control" id="acc_no" name="acc_no" value="1335102000040859">
                  </div>
                  <div class="col-md-4">
                    <label for="ifc_code" class="form-label">IFS Code</label>
                    <input type="text" class="form-control" id="ifc_code" name="ifc_code" value="IBKL0001335">
                  </div>
                  <div class="col-md-6">
                    <label for="tempo_no" class="form-label">Tempo No</label>
                    <input type="text" class="form-control" id="tempo_no" name="tempo_no">
                  </div>
                  <div class="col-md-6">
                    <label for="checked_by" class="form-label">Checked By</label>
                    <input type="text" class="form-control" id="checked_by" name="checked_by">
                  </div>

                </div>


              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="card-body">
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </form>
      <table class="table_tr d-none">
        <td class="srno"></td>
        <td><textarea rows="1" class="form-control" name="tbl_desc[]"></textarea></td>
        <td><input type="text" class="form-control" name="hsn_code[]"></td>
        <td><input type="text" class="form-control" name="d_no[]"></td>
        <td><input type="text" class="form-control" name="lot_no[]"></td>
        <td><input type="text" class="form-control" name="ch_no[]"></td>
        <td><input type="text" class="form-control" name="pcs[]"></td>
        <td><input type="text" class="form-control" name="gr_mts[]"></td>
        <td><input type="text" class="form-control" name="fin_mts[]"></td>
        <td><input type="text" class="form-control" name="short[]"></td>
        <td><input type="text" class="form-control" name="rate[]"></td>
        <td><input type="text" class="form-control" readonly name="amount[]"></td>
        <td><button type="button" class="btn btn-primary btn-sm addmore"><i class="bi bi-plus"></i></button></td>
      </table>
      <table class="table2_tr d-none">
        <td class="srno"></td>
        <td><input class="form-control" name="val1[]"></td>
        <td><input type="text" class="form-control" name="val2[]"></td>
        <td><button type="button" class="btn btn-primary btn-sm addmore2"><i class="bi bi-plus"></i></button></td>
      </table>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Riyan Digital Creation</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="#">HK</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    $n = jQuery.noConflict();

    $n(document).ready(function () {
      $n('.product_tbl tbody').html("<tr>" + $n('.table_tr').html() + "</tr>");
      $n('.challan_tbl tbody').html("<tr>" + $n('.table2_tr').html() + "</tr>");
      ttl_tr();
      ttl_tr2();
    })
    $n(document).on('click', '.addmore', function () {
      $n('.product_tbl tbody').append("<tr>" + $n('.table_tr').html() + "</tr>");
      $n('.product_tbl tbody tr').not(':first').find('.addmore').removeClass('addmore').removeClass('btn-primary').addClass('remove').addClass('btn-danger').html('<i class="bi bi-dash"><i>');
      ttl_tr();
      table_ttl();
    })
    $n(document).on('click', '.addmore2', function () {
      
      $n('.challan_tbl tbody').append("<tr>" + $n('.table2_tr').html() + "</tr>");
      $n('.challan_tbl tbody tr').not(':first').find('.addmore2').removeClass('addmore2').removeClass('btn-primary').addClass('remove').addClass('btn-danger').html('<i class="bi bi-dash"><i>');
      ttl_tr2();
      table2_ttl();
    })
    $n(document).on('click', '.remove', function () {
      $n(this).closest('tr').remove();
      ttl_tr();
    })
    function ttl_tr() {
      var i = 1;
      $n('.product_tbl tbody tr').each(function () {
        $n(this).find('.srno').html(i++)
      })
    }
    function ttl_tr2() {
      var i = 1;
      $n('.challan_tbl tbody tr').each(function () {
        $n(this).find('.srno').html(i++)
      })
    }

    $n('.copy_rec_btn').click(function () {
      $n('#con_name').val($n('#rec_name').val());
      $n('#con_pan').val($n('#rec_pan').val());
      $n('#con_gst').val($n('#rec_gst').val());
      $n('#con_address').val($n('#rec_address').val());
    })
    $n('.cal_ttl').click(function () {
      table_ttl();
    })
    $n('.cal_ttl2').click(function () {
      table2_ttl();
    })
    $n(document).on('change', '[name="rate[]"]', function () {
      var fin_mts = $n(this).closest('tr').find('[name="fin_mts[]"]').val();
      var rate = $n(this).closest('tr').find('[name="rate[]"]').val();

      fin_mts = (isNaN(fin_mts)) ? 0 : fin_mts;
      rate = (isNaN(rate)) ? 0 : rate;
      var rate = $n(this).closest('tr').find('[name="amount[]"]').val(fin_mts * rate);
    })
    $n(document).on('change', '[name="fin_mts[]"]', function () {
      var fin_mts = $n(this).closest('tr').find('[name="fin_mts[]"]').val();
      var rate = $n(this).closest('tr').find('[name="rate[]"]').val();

      fin_mts = (isNaN(fin_mts)) ? 0 : fin_mts;
      rate = (isNaN(rate)) ? 0 : rate;
      var rate = $n(this).closest('tr').find('[name="amount[]"]').val(fin_mts * rate);
    })
    $n(document).on('change', '#invoice_date', function () {
      var date1 = $n(this).val();
      var date2 = $n('#due_date').val();
      if (date1 != "" && date2 != "") {
        var start = moment(date1);
        var end = moment(date2);

        $n('#due_days').val(end.diff(start, "days"));
      }

    })
    $n(document).on('change', '#due_date', function () {
      var date2 = $n(this).val();
      var date1 = $n('#invoice_date').val();
      if (date1 != "" && date2 != "") {
        var start = moment(date1);
        var end = moment(date2);

        $n('#due_days').val(end.diff(start, "days"));
      }

    })

    function table_ttl() {
      var ttl_pcs = 0;
      var ttl_gr = 0;
      var ttl_fin = 0;
      var ttl_amount = 0;
      var sgst = 0;
      var cgst = 0;
      var final_ttl = 0;
      $n('.product_tbl tbody tr').each(function () {
        var pcs = $n(this).find('[name="pcs[]"]').val();
        var gr = $n(this).find('[name="gr_mts[]"]').val();
        var fin = $n(this).find('[name="fin_mts[]"]').val();
        var amount = $n(this).find('[name="amount[]"]').val();
        pcs = pcs != "" ? parseInt(pcs) : 0;
        gr = gr != "" ? parseInt(gr) : 0;
        fin = fin != "" ? parseInt(fin) : 0;
        amount = amount != "" ? parseInt(amount) : 0;
        ttl_pcs = (ttl_pcs + pcs);
        ttl_gr = (ttl_gr + gr);
        ttl_fin = (ttl_fin + fin);
        ttl_amount = (ttl_amount + amount);
      })
      var sgst = (ttl_amount * 2.5) / 100;
      var cgst = (ttl_amount * 2.5) / 100;
      $n('#ttl_pcs').val(ttl_pcs)
      $n('#ttl_gr_mts').val(ttl_gr)
      $n('#ttl_fin_mts').val(ttl_fin)
      $n('#ttl_amount').val(ttl_amount)
      $n('#basic_value').val(ttl_amount)
      $n('#sgst').val(sgst)
      $n('#cgst').val(cgst)
      var fnamt = ttl_amount + sgst + cgst;
      $n('#final_amount').val(fnamt.toFixed(2))
    }
    function table2_ttl() {
      var ttl_val1 = 0;
      var ttl_val2 = 0;
      $n('.challan_tbl tbody tr').each(function () {
        var val1 = $n(this).find('[name="val1[]"]').val();
        var val2 = $n(this).find('[name="val2[]"]').val();
        val1 = val1 != "" ? parseFloat(val1) : 0;
        val2 = val2 != "" ? parseFloat(val2) : 0;
        ttl_val1 = (ttl_val1 + val1);
        ttl_val2 = (ttl_val2 + val2);
      })
      $n('.ttl_val1').val(ttl_val1)
      $n('.ttl_val2').val(ttl_val2)
      $n('.ttl_item1').val($n('.challan_tbl tbody tr').length)
      $n('.ttl_item2').val($n('.challan_tbl tbody tr').length)
    }
  </script>


</body>

</html>