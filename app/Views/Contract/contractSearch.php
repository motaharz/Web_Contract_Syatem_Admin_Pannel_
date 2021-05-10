<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- daterange picker -->
        <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <!-- Bootstrap4 Duallistbox -->
        <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="row col-md-12 pt-2 pl-4">
                            <span class="pl-2">WEB契約システム   / WEB Contract System</span>
                        </div>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <h1 class="mb-0 pt-2 pl-5">契約検索・一覧</h1>
                            </div>
                            <div class="col-md-6 text-right pt-4 pr-5">
                                <span>[<?= session()->get("userId") ?>]：[<?= session()->get("userName") ?>]</span>
                            </div>
                        </div>
                    </div>
                    <div class="underline mt-2"></div>

                    <div class="gap-2 mx-auto " style="max-width: 950px !important;">
                        <div class="card mt-5 text-left">
                            <div class="card-header">
                                <h3 class="card-title text-center">
                                    【検索条件】(Search Condition)
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group " >
                                            <label>契約ID(Contract ID)</label>
                                            <input type="text" class="form-control " name="contractIdSearch" id="contractIdSearch">
                                        </div>
                                        <div class="form-group">
                                            <label>契約者ID(Contractor ID)</label>
                                            <input type="text" class="form-control " name="contractorIdSearch" id="contractorIdSearch">
                                        </div>
                                        <div class="form-group">
                                            <label>商品ID(Product ID)</label>
                                            <input type="text" class="form-control " name="productIdSearch" id="productIdSearch">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group " >
                                            <label>店舗ID(Shop ID)</label>
                                            <input type="text" class="form-control " name="shopIdSearch" id="shopIdSearch">
                                        </div>
                                        <div class="form-group">
                                            <label>都道府県(Prefecture)</label>
                                            <select name="prefectureSearch" id="prefectureSearch" class="form-control">
                                                    <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group " >
                                            <label>契約者名(Contractor Name)</label>
                                            <input type="text" class="form-control " name="contractorNameSearch" id="contractorNameSearch">
                                        </div>
                                        <div class="form-group">
                                            <label>商品名(Product Name)</label>
                                            <input type="text" class="form-control " name="productNameSearch" id="productNameSearch">
                                        </div>
                                        <div class="form-group">
                                            <label>店舗名(Shop Name)</label>
                                            <input type="text" class="form-control " name="shopNameSearch" id="shopNameSearch">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button onclick="" id="contractSearchBtn" class="btn btn-primary text-bold text-left">検索(Search)</button>
                        <button onclick="" id="contractClearBtn" class="btn btn-primary text-bold text-left">クリア(Clear)</button>
                    </div>

                    <div class="gap-2 mx-auto text-center" style="max-width: 950px">
                        <div class="card mt-5 text-left">
                            <div class="card-header">
                                <h3 class="card-title text-center">【契約一覧】 (Search List)</h3>
                            </div>
                            <div class="card-body">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-center productTable productInfoTable">
                                        <thead>
                                            <tr>
                                                <th>契約ID (Contract ID)</th>
                                                <th>サービス (Service)</th>
                                                <th>店舗名 (Shop Name)</th>
                                                <th>店舗住所 (Shop Address)</th>
                                                <th>電話番号 (Phone Number)</th>
                                                <th>メールアドレス (Mail Address)</th>
                                                <th>業態 (Business Type)</th>
                                                <th>代表者名 (Representative name)</th>
                                                <th>契約日 (Contract Date)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>契約ID</td>
                                                <td>ぴゅあらば</td>
                                                <td>契約店舗名</td>
                                                <td>住所</td>
                                                <td>88888888888</td>
                                                <td>abcdefg@xyz.co.jp</td>
                                                <td>業態</td>
                                                <td>代表者名</td>
                                                <td>2021/01/01</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gap-2 mx-auto mt-3 mb-4 " style="max-width: 950px !important;">
                        <button onclick="" id="menu" class="btn btn-primary pl-3 pr-3 text-bold">
                            <a style="color: #fff" href="/home">メニュー(Menu)</a>
                        </button>
                    </div>
                </div>
            </section>
        </div>

        <script type="text/javascript" src="../../js/contractSearch.js"></script>
        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Select2 -->
        <script src="../../plugins/select2/js/select2.full.min.js"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
        <!-- InputMask -->
        <script src="../../plugins/moment/moment.min.js"></script>
        <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
        <!-- date-range-picker -->
        <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Bootstrap Switch -->
        <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
        <!-- Page specific script -->
    </body>
</html>