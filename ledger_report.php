<?php
include('header.php');
include('left.php');
$total_invoice_amount = 0;

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Ledger Report</h1>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <form method="post">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Filter:</h5>
              <select name="rec_name" class="form-control">
                <option value="">-Select Biller-</option>
                <?php
                $qry2 = mysqli_query($conn, 'select * from invoice_details group by rec_name');
                if (mysqli_num_rows($qry2) > 0) {
                  while ($rs2 = mysqli_fetch_assoc($qry2)) {
                    $selected = "";
                    if (isset($_REQUEST['rec_name']) && $_REQUEST['rec_name'] != "") {
                      $selected = $_REQUEST['rec_name'] == $rs2['rec_name'] ? "selected" : "";
                    }

                    echo "<option $selected>" . $rs2['rec_name'] . "</option>";
                  }

                } ?>
              </select>
              <button class="btn btn-primary mt-3">Filter</button>
            </div>
          </div>
        </form>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"></h5>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th data-sortable="false" scope="col">#</th>
                  <th data-sortable="false" scope="col">Name</th>
                  <th data-sortable="false" scope="col">Invoice No</th>
                  <th data-sortable="false" scope="col">Invoice Date</th>
                  <th data-sortable="false" scope="col">Invoice Amount</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $where = "";
                if (isset($_REQUEST['rec_name']) && $_REQUEST['rec_name'] != "") {
                  $where = " where rec_name='" . $_REQUEST['rec_name'] . "'";
                }
                $qry = mysqli_query($conn, 'select * from invoice_details' . $where);
                $i = 1;
                if (mysqli_num_rows($qry) > 0) {
                  while ($rs = mysqli_fetch_assoc($qry)) {
                    $total_invoice_amount = $total_invoice_amount + $rs['invoice_amount'];
                    ?>
                    <tr>
                      <th scope="row">
                        <?php echo $i++; ?>
                      </th>
                      <td>
                        <?php echo $rs['rec_name'] ?>
                      </td>
                      <td>
                        <?php echo $rs['invoice_no'] ?>
                      </td>
                      <td>
                        <?php echo $rs['invoice_date'] ?>
                      </td>
                      <td>
                        <?php echo $rs['invoice_amount'] ?>
                      </td>
                    </tr>
                    <?php
                  }
                }
                ?>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><b>Outstanding Amount:</b></td>
                  <td><b>
                      <?php echo $total_invoice_amount ?>
                    </b></td>
                </tr>
              </tbody>

            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>


</main><!-- End #main -->
<?php include('footer.php') ?>