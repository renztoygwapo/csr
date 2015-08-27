<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pdfreport
 *
 * @author TOHIBA
 */tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, array(100, 100), true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "December 2015";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage('L');
ob_start();
$data = '';
for ($i = 0; $i < 30; $i++) {
    $data = $data . '<br> <tr >
    <td >2014-10-1</td>
    <td>2014-10-11</td>
    <td>Nelson Monilla</td>
    <td>Puok 9, Block 1</td>
    <td>Annual Fiesta</td>
    <td class = "info" >Charitable Contribution</td>
    <td class = "warning">Cash Assistance</td>
    <td class = "light-gray">500</td>
    <td class = "warning" ></td>
    <td class = "light-gray"></td>
    </tr>';
}
$data ='<table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr style="background-color:#F3F3F3;">
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
                                    <tbody>' . "<br>  $data </tbody>
                                </table>";
$content = $data;
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');

$obj_pdf->Output('output.pdf', 'I');
?>
