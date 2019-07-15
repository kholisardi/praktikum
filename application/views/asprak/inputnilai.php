<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><?= $title; ?></h2>
        </div>

        <!-- Example Tab -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <?= $title; ?>
                        </h2>

                    </div>
                    <div class="body">

                        <!-- query -->
                        <?php
                        $matkul = $datamatkul;
                        

                        ?>

                        <!-- NAMA MATKUL -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <!-- looping Matkul -->

                            <?php foreach ($matkul as $mat) : ?>

                                <li role="presentation">
                                    <a href="#<?= $mat['namamatkul']; ?>" data-toggle="tab"><?= $mat['namamatkul']; ?></a>
                                </li>

                            <?php endforeach; ?>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <?php foreach ($matkul as $mat) : ?>

                                <!-- query matakuliah dengan slot / hari -->
                                <?php

                                $querySlot =    "SELECT `slot`.`kodeslot`,`hari`,`jam`
                                                FROM `slot` JOIN `asprak`
                                                ON `slot`.`kodeslot` = `asprak`.`kodeslot`
                                                WHERE `asprak`.`kodeslot` = `slot`.`kodeslot`
                                                
                                                ORDER BY `slot`.`hari` ASC";

                                $slot = $this->db->query($querySlot)->result_array();

                                ?>

                                <!-- looping jadwal atau hari -->

                                <?php foreach ($slot as $sl) : ?>

                                    <div role="tabpanel" class="tab-pane fade in active" id="<?= $mat['namamatkul']; ?>">
                                        ada
                                    </div>

                                <?php endforeach; ?>

                            <?php endforeach; ?>
                            <div role="tabpanel" class="tab-pane fade in active" id="RWEB">

                                <!-- JADWAL -->
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#senin" data-toggle="tab">SENIN</a>
                                    </li>
                                </ul>



                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="senin">

                                        <!-- JADWAL -->
                                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                            <li role="presentation" class="active"><a href="#minggu1" data-toggle="tab">Minggu 1</a></li>
                                            <li role="presentation"><a href="#minggu2" data-toggle="tab">Minggu 2</a></li>
                                            <li role="presentation"><a href="#minggu3" data-toggle="tab">Minggu 3</a></li>
                                            <li role="presentation"><a href="#minggu4" data-toggle="tab">Minggu 4</a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="minggu1">
                                                <b>Minggu 1</b>
                                                <p>
                                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                                    sadipscing mel.
                                                </p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade in active" id="minggu2">
                                                <b>Minggu 2</b>
                                                <p>
                                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                                    sadipscing mel.
                                                </p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade in active" id="minggu3">
                                                <b>Minggu 3</b>
                                                <p>
                                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                                    sadipscing mel.
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="selasa">
                                        <b>Selasa</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel.
                                        </p>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="rabu">
                                        <b>rabu</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel.
                                        </p>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="kamis">
                                        <b>kamis</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel.
                                        </p>
                                    </div>

                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <b>Profile Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="messages">
                                <b>Message Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="settings">
                                <b>Settings Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Example Tab -->

    </div>
    </div>
</section>