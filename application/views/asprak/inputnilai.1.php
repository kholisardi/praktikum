<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><?= $title; ?></h2>
        </div>

        <!-- card-->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2><?= $title; ?></h2>
                    </div>

                    <div class="body">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation" class="active"><a href="#spk" data-toggle="tab">SPK</a></li>
                            <li role="presentation"><a href="#mulmed" data-toggle="tab">MULTIMEDIA</a></li>
                            <li role="presentation"><a href="#rweb" data-toggle="tab">RWEB</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <!-- minggu1 -->
                            <div role="tabpanel" class="tab-pane fade in active" id="spk">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">

                                    <li role="presentation" class="active"><a href="#minggu1" data-toggle="tab">Minggu 1</a></li>
                                    <li role="presentation"><a href="#minggu2" data-toggle="tab">Minggu 2</a></li>
                                    <li role="presentation"><a href="#minggu3" data-toggle="tab">Minggu 3</a></li>

                                </ul>

                                <div role="tabpanel" class="tab-pane fade in active" id="minggu1">
                                    <div class="body table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nim</th>
                                                    <th>pretest</th>
                                                    <th>postest</th>
                                                    <th>keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>1600018244</td>
                                                    <td><input type="text" id="pretest" placeholder="pretest" value="0"></td>
                                                    <td><input type="text" id="postest" placeholder="postest" value="0"></td>
                                                    <td><input type="text" id="keterangan" placeholder="keterangan"></td>
                                                </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="minggu2">
                                <div class="body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nim</th>
                                                <th>pretest</th>
                                                <th>postest</th>
                                                <th>keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1600018245</td>
                                                <td><input type="text" id="pretest" placeholder="pretest" value="0"></td>
                                                <td><input type="text" id="postest" placeholder="postest" value="0"></td>
                                                <td><input type="text" id="keterangan" placeholder="keterangan"></td>

                                            </tr>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- END card-->

    </div>
    </div>
</section>