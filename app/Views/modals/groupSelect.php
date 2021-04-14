<div class="modal fade" id="group-select-modal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Group Select</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <div class="form-group col-md-4 pl-0">
                            <label for="exampleInputEmail1">商品ID（完全一致）</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group col-md-4 pl-0">
                            <label for="exampleInputPassword1">商品名（あいまい）</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary pl-4 pr-4">検索</button>
                        <button type="submit" class="btn btn-primary ml-2">条件クリア</button>
                    </div>
                </form>
                <br />
                <div class="card-body table-responsive p-0 ml-1" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap ml-1">
                        <thead>
                            <tr>
                                <th>選択(Select)</th>
                                <th>契約者ID(Contractor Id)</th>
                                <th>契約者名(Contractor Name)</th>
                                <th>住所(Address)</th>
                                <th>電話番号(Phn no)</th>
                                <th>メールアドレス(Mail Address)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(isset($group) && count($group) > 0){
                                    for($i = 0; $i < count($group); $i++){
                                        $data = $group[$i];
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $data->getId() ?></td>
                                <td><?php echo $data->getName() ?></td>
                                <td><?php echo $data->getAddress01() ?></td>
                                <td><?php echo $data->getTelNo() ?></td>
                                <td><?php echo $data->getMailAddress() ?></td>
                            </tr>
                            <?php
                                    }
                                }
                                else{
                                    echo "<h3>No data available</h3>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>