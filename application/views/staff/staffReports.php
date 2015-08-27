<?php $this->load->view('headfoot/header'); ?>
<body>
    <div class="row">

        <div class="col-md-12">
            <div class="tabs-framed">
                <div class="tab-content">
<!--                    //kuhaa ang in active para d makita-->
                    <div class="tab-pane fade in active" id="tab-13">
                        <div class="tab-body" style="padding-bottom: 0;">
                            <h3 class="title title-lg">December 2015</h3>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="bg-orange">Date Prepared</th>
                                            <th class="bg-orange">Date Process</th>
                                            <th class="bg-orange">Name of Payee</th>
                                            <th class="bg-orange">Requesting Party</th>
                                            <th class="bg-orange">Description</th>
                                            <th class="bg-orange">Nature of Expense</th>
                                            <th  class="bg-orange">Assistance Extended</th>
                                            <th class="bg-orange">Amount</th>
                                            <th class="bg-orange">Assistance Extended</th>
                                            <th class="bg-orange">Amount</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < 30; $i++) { ?>
                                            <tr>
                                                <td >2014-10-1</td>
                                                <td>2014-10-11</td>
                                                <td>Nelson Monilla</td>
                                                <td>Puok 9,Block 1</td>
                                                <td>Annual Fiesta</td>
                                                <td class="info">Charitable Contribution</td>
                                                <td class="warning">Cash Assistance</td>
                                                <td class="light-gray">500</td>
                                                <td class="warning"></td>
                                                <td class="light-gray"></td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>