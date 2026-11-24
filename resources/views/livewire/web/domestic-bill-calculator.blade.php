<div>
    <x-breadcrumb-with-image title="Domestic Bill Calculator"/>

    <!-- Working Process Area Start -->
    <section class="tmp-working-process-area3 tmp-section-gap pt-5">
        <div class="container-3 pt-5">
            <div class="section-inner pt-5">
                <div class="row justify-content-center g-5 pt-5">
                    <div id="content" class="sixteen columns">

                        <section>
                            <style>
                                .bdr {
                                    border-bottom: 2px solid #ddd;
                                }

                                .cl1 {
                                    display: inline-block;
                                    padding: 5px;
                                    width: 150px;
                                    font-size: 1.1em;
                                }

                                .cl2 {
                                    display: inline-block;
                                    padding: 5px;
                                }

                                .cl1_inp {
                                    background-color: #ddd;
                                    font-size: 1.1em;
                                    font-family: "ColaborateLight";
                                    border: 1px solid #ccc;
                                    border-radius: 3px;
                                    text-align: right;
                                }

                                .cl1a_inp {
                                    font-size: 1.1em;
                                    font-family: "ColaborateLight";
                                    border: 1px solid #ccc;
                                    border-radius: 3px;
                                    text-align: right;
                                }

                                .cl1a_inp:active {
                                    border: 1px solid #339ecc;
                                    background-color: #c3e2f0;
                                }

                                .cl1a_inp:focus {
                                    border: 1px solid #339ecc;
                                    background-color: #c3e2f0;
                                }

                                .cl2_inp {
                                    background-color: #eee;
                                    font-size: 1em;
                                    font-family: "ColaborateLight";
                                    border: 1px solid #ccc;
                                    border-radius: 3px;
                                    text-align: right;
                                }

                                .cl2b_inp {
                                    background: linear-gradient(180deg, rgba(126, 199, 231, 1) 0%, rgba(58, 179, 231, 1) 100%);
                                    color: #333;
                                    font-size: 1em;
                                    font-family: "ColaborateLight";
                                    border: 1px solid #2bafe7;
                                    border-radius: 3px;
                                    text-align: right;
                                    font-weight: bold;
                                }

                                .cl3 {
                                    padding: 5px;
                                    font-size: 1.1em;
                                    background-color: #ddd;
                                    width: 130px;
                                }

                                .cl3rt {
                                    padding: 5px;
                                    padding-right: 30px;
                                    font-size: 1.1em;
                                    background-color: #ddd;
                                    width: 130px;
                                    text-align: right;
                                }

                                .cl4 {
                                    padding: 5px;
                                    font-size: 1.1em;
                                    border: 0px solid black;
                                }

                                .cl4rt {
                                    padding: 5px;
                                    padding-right: 30px;
                                    font-size: 1.1em;
                                    border: 0px solid black;
                                    text-align: right;
                                }

                                .cl4a {
                                    padding: 5px;
                                    font-size: 1.1em;
                                    border-top: 2px solid #ccc;
                                    padding-top: 5px;
                                }

                                .cl4art {
                                    padding: 5px;
                                    padding-right: 30px;
                                    font-size: 1.1em;
                                    border-top: 2px solid #ccc;
                                    padding-top: 5px;
                                    text-align: right;
                                }

                                .cl5 {
                                    padding: 5px;
                                    font-size: 1.1em;
                                    background-color: #ddd;
                                    width: 200px;
                                }
                            </style>

                            <div style="font-size:1.2em; padding:5px;"><strong>Please enter details below and click the
                                    Calculate
                                    button.</strong><br></div>

                            <div style="font-size:1.1em; padding:5px;">
                                <ul style="list-style-type: square;list-style-position: outside;">
                                    <li>All fields marked with <span style="color:red">*</span> are mandatory.</li>
                                    <li>Digits in black on your gas meter (first five digits from left) are the current
                                        reading of the meter
                                        in cubic meters (CMS).
                                    </li>
                                    <li>Calculations are based on the Meter Type of Cubic Meter.</li>
                                    <li>For more details about gas bill, please <a
                                            href="https://www.ssgc.com.pk/web/?page_id=111822">click
                                            here</a>.
                                    </li>
                                </ul>
                            </div>

                            <div style="font-size:1.1em; padding:5px;">
                                <span><strong>Please select category:</strong></span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category" id="category1"
                                           value="option1" checked="" onclick="enableProtected()">
                                    <label class="form-check-label" for="inlineRadio1">Protected</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category" id="category1"
                                           value="option2" onclick="enableNonProtected()">
                                    <label class="form-check-label" for="inlineRadio2">Non-Protected</label>
                                </div>
{{--                                <input type="radio" name="category" id="category1" style="margin-left:10px;" checked=""--}}
{{--                                       onclick="enableProtected()"> Protected--}}
{{--                                <input type="radio" name="category" id="category1" style="margin-left:20px;"--}}
{{--                                       onclick="enableNonProtected()"> Non-Protected--}}
                            </div>


                            <!------------------------------------------------------------------------------------------->
                            <!-- Protected Category --------------------------------------------------------------------->
                            <!------------------------------------------------------------------------------------------->
                            <div id="protected">
                                <h4 style="margin: 30px 0px 0px 5px; font-weight:bold;">Protected Category</h4>
                                <form id="pro_calcForm">
                                    <div class="bdr" style="border-top:2px solid #ddd; margin-top:10px;">
                                        <div class="cl1"><strong>Previous Reading<span
                                                    style="color:red">*</span></strong></div>
                                        <div class="cl2"><input type="text" name="pro_prev_reading"
                                                                id="pro_prev_reading" class="cl1a_inp" maxlength="5"
                                                                size="5"></div>
                                    </div>
                                    <div class="bdr">
                                        <div class="cl1"><strong>Current Reading<span
                                                    style="color:red">*</span></strong></div>
                                        <div class="cl2"><input type="text" name="pro_curr_reading"
                                                                id="pro_curr_reading" class="cl1a_inp" maxlength="5"
                                                                size="5"></div>
                                    </div>
                                    <div class="bdr">
                                        <div class="cl1"><strong>Pressure<span style="color:red">*</span></strong></div>
                                        <strong>
                                            <div class="cl2"><input type="text" name="pro_pressure" id="pro_pressure"
                                                                    class="cl1a_inp" maxlength="5" size="5"
                                                                    value="0.25"></div>
                                        </strong></div>
                                    <strong>
                                        <div class="bdr">
                                            <div class="cl1">GCV<span style="color:red">*</span></div>
                                            <div class="cl2"><input type="text" name="pro_gcv" id="pro_gcv" value="1000"
                                                                    class="cl1a_inp" maxlength="7" size="5">&nbsp;&nbsp;<input
                                                    type="button" value="Calculate Bill" onclick="pro_calc_pcf()">&nbsp;<input
                                                    type="button" value="Reset Form" onclick="pro_resetForm()"></div>
                                        </div>
                                        <div>
                                            <div class="cl1">&nbsp;</div>
                                            <div class="cl2">&nbsp;</div>
                                        </div>
                                        <div class="bdr">
                                            <div class="cl1"><strong>Units (CM)</strong></div>
                                            <div class="cl2"><input type="text" name="pro_units" id="pro_units"
                                                                    class="cl1_inp" maxlength="5" size="8" readonly="">
                                            </div>
                                        </div>
                                        <div class="bdr">
                                            <div class="cl1">PCF</div>
                                            <div class="cl2"><input type="text" name="pro_pcf" id="pro_pcf" readonly=""
                                                                    class="cl1_inp" maxlength="4" size="8"></div>
                                        </div>
                                        <div class="bdr">
                                            <div class="cl1">Standard CM</div>
                                            <div class="cl2"><input type="text" name="pro_scm" id="pro_scm" readonly=""
                                                                    class="cl1_inp" maxlength="5" size="8"></div>
                                        </div>
                                        <div>
                                            <div class="cl1">&nbsp;</div>
                                            <div class="cl2">&nbsp;</div>
                                        </div>


                                        <div style="display: table; width:940px;">

                                            <div style="display:table-row">
                                                <div style="display:table-cell" class="cl5">
                                                    <strong>Slabs</strong>
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl3rt">
                                                    <strong>SCM</strong>
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl3rt">
                                                    <strong>MMBTU</strong>
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl3rt">
                                                    <strong>Rs./MMBTU</strong>
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl3rt">
                                                    <strong>Gas Charges</strong>
                                                </div> <!-- Cell Ends -->
                                            </div> <!-- Row Ends -->

                                            <div style="display:table-row">
                                                <!-- Row Begins -->
                                                <div style="display:table-cell" class="cl4">
                                                    <strong>Minimum Gas Charges</strong>
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab0_scm" name="pro_slab0_scm" size="10"
                                                           class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab0_mmbtu" name="pro_slab0_mmbtu"
                                                           size="10" class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab0_rate" name="pro_slab0_rate"
                                                           value="107.37" size="10" class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab0_gascharges"
                                                           name="pro_slab0_gascharges" size="10" class="cl2_inp"
                                                           readonly="">
                                                </div> <!-- Cell Ends -->
                                            </div> <!-- Row Ends -->

                                            <!-- Up to 0.25 hm3 per month: -->
                                            <div style="display:table-row">
                                                <!-- Row Begins -->
                                                <div style="display:table-cell" class="cl4">
                                                    <strong>1. Up to 0.25 hm3 per month:</strong>
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab1_scm" name="pro_slab1_scm" size="10"
                                                           class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab1_mmbtu" name="pro_slab1_mmbtu"
                                                           size="10" class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab1_rate" name="pro_slab1_rate"
                                                           value="200.00" size="10" class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab1_gascharges"
                                                           name="pro_slab1_gascharges" size="10" class="cl2_inp"
                                                           readonly="">
                                                </div> <!-- Cell Ends -->
                                            </div> <!-- Row Ends -->

                                            <!-- Up to 0.5 hm3 per month: -->
                                            <div style="display:table-row">
                                                <!-- Row Begins -->
                                                <div style="display:table-cell" class="cl4">
                                                    <strong>2. Up to 0.5 hm3 per month:</strong>
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab2_scm" name="pro_slab2_scm" size="10"
                                                           class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab2_mmbtu" name="pro_slab2_mmbtu"
                                                           size="10" class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab2_rate" name="pro_slab2_rate"
                                                           value="250.00" size="10" class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab2_gascharges"
                                                           name="pro_slab2_gascharges" size="10" class="cl2_inp"
                                                           readonly="">
                                                </div> <!-- Cell Ends -->
                                            </div> <!-- Row Ends -->

                                            <!-- Up to 0.6 hm3 per month: -->
                                            <div style="display:table-row">
                                                <!-- Row Begins -->
                                                <div style="display:table-cell" class="cl4">
                                                    <strong>3. Up to 0.6 hm3 per month:</strong>
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab3_scm" name="pro_slab3_scm" size="10"
                                                           class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab3_mmbtu" name="pro_slab3_mmbtu"
                                                           size="10" class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab3_rate" name="pro_slab3_rate"
                                                           value="300.00" size="10" class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab3_gascharges"
                                                           name="pro_slab3_gascharges" size="10" class="cl2_inp"
                                                           readonly="">
                                                </div> <!-- Cell Ends -->
                                            </div> <!-- Row Ends -->

                                            <!-- Up to 0.9 hm3 per month: -->
                                            <div style="display:table-row">
                                                <!-- Row Begins -->
                                                <div style="display:table-cell" class="cl4">
                                                    <strong>4. Up to 0.9 hm3 per month:</strong>
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab4_scm" name="pro_slab4_scm" size="10"
                                                           class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab4_mmbtu" name="pro_slab4_mmbtu"
                                                           size="10" class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab4_rate" name="pro_slab4_rate"
                                                           value="350.00" size="10" class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_slab4_gascharges"
                                                           name="pro_slab4_gascharges" size="10" class="cl2_inp"
                                                           readonly="">
                                                </div> <!-- Cell Ends -->
                                            </div> <!-- Row Ends -->

                                            <div style="display:table-row">
                                                <!-- Row Begins -->
                                                <div style="display:table-cell" class="cl4a">
                                                    <strong>Total</strong>
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4art">
                                                    <input type="text" id="pro_total_scm" name="pro_total_scm"
                                                           style="font-weight:bold;" size="5" class="cl2_inp"
                                                           readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4art">
                                                    <input type="text" id="pro_total_mmbtu" name="pro_total_mmbtu"
                                                           style="font-weight:bold;" size="10" class="cl2_inp"
                                                           readonly="">
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4art">
                                                    &nbsp;
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4art">
                                                    <input type="text" id="pro_total1" name="pro_total1" size="10"
                                                           class="cl2_inp" readonly="">
                                                </div> <!-- Cell Ends -->
                                            </div> <!-- Row Ends -->

                                            <div style="display:table-row">
                                                <!-- Row Begins -->
                                                <div style="display:table-cell" class="cl4">
                                                    &nbsp;
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4">
                                                    &nbsp;
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4">
                                                    &nbsp;
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4">
                                                    <strong>Meter Rent</strong>
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_meterRent" name="pro_meterRent"
                                                           value="40.00" class="cl2_inp" size="10" readonly="">
                                                </div> <!-- Cell Ends -->
                                            </div> <!-- Row Ends -->

                                            <div style="display:table-row">
                                                <!-- Row Begins -->
                                                <div style="display:table-cell" class="cl4">
                                                    &nbsp;
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4">
                                                    &nbsp;
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4">
                                                    &nbsp;
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4">
                                                    <strong>Fixed Charges</strong>
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_fixedCharge" name="pro_fixedCharge"
                                                           value="400.00" class="cl2_inp" size="10" readonly="">
                                                </div> <!-- Cell Ends -->
                                            </div> <!-- Row Ends -->

                                            <div style="display:table-row">
                                                <!-- Row Begins -->
                                                <div style="display:table-cell" class="cl4">
                                                    &nbsp;
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4">
                                                    &nbsp;
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4">
                                                    &nbsp;
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4">
                                                    <strong>GST @ 18%</strong>
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_gst" name="pro_gst" class="cl2_inp"
                                                           size="10" readonly="">
                                                </div> <!-- Cell Ends -->
                                            </div> <!-- Row Ends -->

                                            <div style="display:table-row">
                                                <!-- Row Begins -->
                                                <div style="display:table-cell" class="cl4">
                                                    &nbsp;
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4">
                                                    &nbsp;
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4">
                                                    &nbsp;
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4">
                                                    <strong>Est. Total Gas Bill<br>for the Month</strong>
                                                </div> <!-- Cell Ends -->
                                                <div style="display:table-cell" class="cl4rt">
                                                    <input type="text" id="pro_grandTotal" name="pro_grandTotal"
                                                           class="cl2_inp" size="10"
                                                           style="background: linear-gradient(180deg, rgba(48,183,75,1) 0%, rgba(38,144,59,1) 100%); color:#000;"
                                                           readonly="">
                                                </div> <!-- Cell Ends -->
                                            </div> <!-- Row Ends -->

                                        </div> <!-- Table Ends -->

                                    </strong></form>
                            </div>
                            <strong>
                                <!-- Protected Category Ends ---------------------------------------------------------------->


                                <!------------------------------------------------------------------------------------------->
                                <!-- Non-Protected Category ----------------------------------------------------------------->
                                <!------------------------------------------------------------------------------------------->
                                <div id="non-protected" style="display:none">
                                    <h4 style="margin: 30px 0px 0px 5px; font-weight:bold;">Non-Protected Category</h4>
                                    <form id="non_pro_calcForm">
                                        <div class="bdr" style="border-top:2px solid #ddd; margin-top:10px;">
                                            <div class="cl1"><strong>Previous Reading<span
                                                        style="color:red">*</span></strong></div>
                                            <div class="cl2"><input type="text" name="non_pro_prev_reading"
                                                                    id="non_pro_prev_reading" class="cl1a_inp"
                                                                    maxlength="8" size="8" value=""></div>
                                        </div>
                                        <div class="bdr">
                                            <div class="cl1"><strong>Current Reading<span
                                                        style="color:red">*</span></strong></div>
                                            <div class="cl2"><input type="text" name="non_pro_curr_reading"
                                                                    id="non_pro_curr_reading" class="cl1a_inp"
                                                                    maxlength="8" size="8" value=""></div>
                                        </div>
                                        <div class="bdr">
                                            <div class="cl1"><strong>Pressure<span style="color:red">*</span></strong>
                                            </div>
                                            <strong>
                                                <div class="cl2"><input type="text" name="non_pro_pressure"
                                                                        id="non_pro_pressure" class="cl1a_inp"
                                                                        maxlength="5" size="8" value="0.25"></div>
                                            </strong></div>
                                        <strong>
                                            <div class="bdr">
                                                <div class="cl1">GCV<span style="color:red">*</span></div>
                                                <div class="cl2"><input type="text" name="non_pro_gcv" id="non_pro_gcv"
                                                                        value="1000" class="cl1a_inp" maxlength="7"
                                                                        size="8">&nbsp;&nbsp;<input type="button"
                                                                                                    value="Calculate Bill"
                                                                                                    onclick="non_pro_calc_pcf()">&nbsp;<input
                                                        type="button" value="Reset Form" onclick="non_pro_resetForm()">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="cl1">&nbsp;</div>
                                                <div class="cl2">&nbsp;</div>
                                            </div>
                                            <div class="bdr">
                                                <div class="cl1"><strong>Units (CM)</strong></div>
                                                <div class="cl2"><input type="text" name="non_pro_units"
                                                                        id="non_pro_units" class="cl1_inp" maxlength="5"
                                                                        size="8" readonly=""></div>
                                            </div>
                                            <div class="bdr">
                                                <div class="cl1">PCF</div>
                                                <div class="cl2"><input type="text" name="non_pro_pcf" id="non_pro_pcf"
                                                                        readonly="" class="cl1_inp" maxlength="4"
                                                                        size="8"></div>
                                            </div>
                                            <div class="bdr">
                                                <div class="cl1">Standard CM</div>
                                                <div class="cl2"><input type="text" name="non_pro_scm" id="non_pro_scm"
                                                                        readonly="" class="cl1_inp" maxlength="5"
                                                                        size="8"></div>
                                            </div>
                                            <div>
                                                <div class="cl1">&nbsp;</div>
                                                <div class="cl2">&nbsp;</div>
                                            </div>


                                            <div style="display: table; width:940px;">

                                                <div style="display:table-row">
                                                    <div style="display:table-cell" class="cl5">
                                                        <strong>Slabs</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl3rt">
                                                        <strong>SCM</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl3rt">
                                                        <strong>MMBTU</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl3rt">
                                                        <strong>Rs./MMBTU</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl3rt">
                                                        <strong>Gas Charges</strong>
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                                <div style="display:table-row">
                                                    <!-- Row Begins -->
                                                    <div style="display:table-cell" class="cl4">
                                                        <strong>Minimum Gas Charges</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab0_scm"
                                                               name="non_pro_slab0_scm" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab0_mmbtu"
                                                               name="non_pro_slab0_mmbtu" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab0_rate"
                                                               name="non_pro_slab0_rate" value="177.47" size="10"
                                                               class="cl2_inp" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab0_gascharges"
                                                               name="non_pro_slab0_gascharges" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                                <!-- Up to 0.25 hm3 per month: -->
                                                <div style="display:table-row">
                                                    <!-- Row Begins -->
                                                    <div style="display:table-cell" class="cl4">
                                                        <strong>1. Up to 0.25 hm3 per month:</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab1_scm"
                                                               name="non_pro_slab1_scm" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab1_mmbtu"
                                                               name="non_pro_slab1_mmbtu" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab1_rate"
                                                               name="non_pro_slab1_rate" value="500.00" size="10"
                                                               class="cl2_inp" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab1_gascharges"
                                                               name="non_pro_slab1_gascharges" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                                <!-- Up to 0.6 hm3 per month: -->
                                                <div style="display:table-row">
                                                    <!-- Row Begins -->
                                                    <div style="display:table-cell" class="cl4">
                                                        <strong>2. Up to 0.6 hm3 per month:</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab2_scm"
                                                               name="non_pro_slab2_scm" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab2_mmbtu"
                                                               name="non_pro_slab2_mmbtu" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab2_rate"
                                                               name="non_pro_slab2_rate" value="850.00" size="10"
                                                               class="cl2_inp" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab2_gascharges"
                                                               name="non_pro_slab2_gascharges" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                                <!-- Up to 1 hm3 per month: -->
                                                <div style="display:table-row">
                                                    <!-- Row Begins -->
                                                    <div style="display:table-cell" class="cl4">
                                                        <strong>3. Up to 1 hm3 per month:</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab3_scm"
                                                               name="non_pro_slab3_scm" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab3_mmbtu"
                                                               name="non_pro_slab3_mmbtu" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab3_rate"
                                                               name="non_pro_slab3_rate" value="1250.00" size="10"
                                                               class="cl2_inp" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab3_gascharges"
                                                               name="non_pro_slab3_gascharges" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                                <!-- Up to 1.5 hm3 per month: -->
                                                <div style="display:table-row">
                                                    <!-- Row Begins -->
                                                    <div style="display:table-cell" class="cl4">
                                                        <strong>4. Up to 1.5 hm3 per month:</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab4_scm"
                                                               name="non_pro_slab4_scm" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab4_mmbtu"
                                                               name="non_pro_slab4_mmbtu" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab4_rate"
                                                               name="non_pro_slab4_rate" value="1450.00" size="10"
                                                               class="cl2_inp" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab4_gascharges"
                                                               name="non_pro_slab4_gascharges" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                                <!-- Up to 2 hm3 per month: -->
                                                <div style="display:table-row">
                                                    <!-- Row Begins -->
                                                    <div style="display:table-cell" class="cl4">
                                                        <strong>5. Up to 2 hm3 per month:</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab5_scm"
                                                               name="non_pro_slab5_scm" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab5_mmbtu"
                                                               name="non_pro_slab5_mmbtu" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab5_rate"
                                                               name="non_pro_slab5_rate" value="1900.00" size="10"
                                                               class="cl2_inp" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab5_gascharges"
                                                               name="non_pro_slab5_gascharges" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                                <!-- Up to 3 hm3 per month: -->
                                                <div style="display:table-row">
                                                    <!-- Row Begins -->
                                                    <div style="display:table-cell" class="cl4">
                                                        <strong>6. Up to 3 hm3 per month:</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab6_scm"
                                                               name="non_pro_slab6_scm" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab6_mmbtu"
                                                               name="non_pro_slab6_mmbtu" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab6_rate"
                                                               name="non_pro_slab6_rate" value="3300.00" size="10"
                                                               class="cl2_inp" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab6_gascharges"
                                                               name="non_pro_slab6_gascharges" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                                <!-- Up to 4 hm3 per month: -->
                                                <div style="display:table-row">
                                                    <!-- Row Begins -->
                                                    <div style="display:table-cell" class="cl4">
                                                        <strong>7. Up to 4 hm3 per month:</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab7_scm"
                                                               name="non_pro_slab7_scm" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab7_mmbtu"
                                                               name="non_pro_slab7_mmbtu" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab7_rate"
                                                               name="non_pro_slab7_rate" value="3800.00" size="10"
                                                               class="cl2_inp" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab7_gascharges"
                                                               name="non_pro_slab7_gascharges" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                                <!-- Above 4 hm3 per month: -->
                                                <div style="display:table-row">
                                                    <!-- Row Begins -->
                                                    <div style="display:table-cell" class="cl4">
                                                        <strong>8. Above 4 hm3 per month:</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab8_scm"
                                                               name="non_pro_slab8_scm" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab8_mmbtu"
                                                               name="non_pro_slab8_mmbtu" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab8_rate"
                                                               name="non_pro_slab8_rate" value="4200.00" size="10"
                                                               class="cl2_inp" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_slab8_gascharges"
                                                               name="non_pro_slab8_gascharges" size="10" class="cl2_inp"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                                <div style="display:table-row">
                                                    <!-- Row Begins -->
                                                    <div style="display:table-cell" class="cl4a">
                                                        <strong>Total</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4art">
                                                        <input type="text" id="non_pro_total_scm"
                                                               name="non_pro_total_scm" style="font-weight:bold;"
                                                               size="5" class="cl2_inp" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4art">
                                                        <input type="text" id="non_pro_total_mmbtu"
                                                               name="non_pro_total_mmbtu" style="font-weight:bold;"
                                                               size="10" class="cl2_inp" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4art">
                                                        &nbsp;
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4art">
                                                        <input type="text" id="non_pro_total1" name="non_pro_total1"
                                                               size="10" class="cl2_inp" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                                <div style="display:table-row">
                                                    <!-- Row Begins -->
                                                    <div style="display:table-cell" class="cl4">
                                                        &nbsp;
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4">
                                                        &nbsp;
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4">
                                                        &nbsp;
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4">
                                                        <strong>Meter Rent</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_meterRent"
                                                               name="non_pro_meterRent" value="40.00" class="cl2_inp"
                                                               size="10" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                                <div style="display:table-row">
                                                    <!-- Row Begins -->
                                                    <div style="display:table-cell" class="cl4">
                                                        &nbsp;
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4">
                                                        &nbsp;
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4">
                                                        &nbsp;
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4">
                                                        <strong>Fixed Charges</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_fixedCharge"
                                                               name="non_pro_fixedCharge" value="0" class="cl2_inp"
                                                               size="10" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                                <div style="display:table-row">
                                                    <!-- Row Begins -->
                                                    <div style="display:table-cell" class="cl4">
                                                        &nbsp;
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4">
                                                        &nbsp;
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4">
                                                        &nbsp;
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4">
                                                        <strong>GST @ 18%</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_gst" name="non_pro_gst"
                                                               class="cl2_inp" size="10" readonly="">
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                                <div style="display:table-row">
                                                    <!-- Row Begins -->
                                                    <div style="display:table-cell" class="cl4">
                                                        &nbsp;
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4">
                                                        &nbsp;
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4">
                                                        &nbsp;
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4">
                                                        <strong>Est. Total Gas Bill<br>for the Month</strong>
                                                    </div> <!-- Cell Ends -->
                                                    <div style="display:table-cell" class="cl4rt">
                                                        <input type="text" id="non_pro_grandTotal"
                                                               name="non_pro_grandTotal" class="cl2_inp" size="10"
                                                               style="background: linear-gradient(180deg, rgba(48,183,75,1) 0%, rgba(38,144,59,1) 100%); color:#000;"
                                                               readonly="">
                                                    </div> <!-- Cell Ends -->
                                                </div> <!-- Row Ends -->

                                            </div> <!-- Table Ends -->

                                        </strong></form>
                                </div>
                                <strong>
                                    <!-- Non-Protected Category Ends ------------------------------------------------------------>

                                    <script>
                                        function addComma(x) {
                                            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                                        }

                                        // Protected Category
                                        function pro_calc_pcf() {
                                            // Clear all form fields
                                            document.getElementById("pro_units").value = "";
                                            document.getElementById("pro_pcf").value = "";
                                            document.getElementById("pro_scm").value = "";
                                            document.getElementById("pro_slab0_scm").value = "";
                                            document.getElementById("pro_slab1_scm").value = "";
                                            document.getElementById("pro_slab2_scm").value = "";
                                            document.getElementById("pro_slab3_scm").value = "";
                                            document.getElementById("pro_slab4_scm").value = "";
                                            // document.getElementById("pro_slab5_scm").value = "";
                                            // document.getElementById("pro_slab6_scm").value = "";
                                            // document.getElementById("pro_slab7_scm").value = "";
                                            // document.getElementById("pro_slab8_scm").value = "";
                                            document.getElementById("pro_slab0_mmbtu").value = "";
                                            document.getElementById("pro_slab1_mmbtu").value = "";
                                            document.getElementById("pro_slab2_mmbtu").value = "";
                                            document.getElementById("pro_slab3_mmbtu").value = "";
                                            document.getElementById("pro_slab4_mmbtu").value = "";
                                            // document.getElementById("pro_slab5_mmbtu").value = "";
                                            // document.getElementById("pro_slab6_mmbtu").value = "";
                                            // document.getElementById("pro_slab7_mmbtu").value = "";
                                            // document.getElementById("pro_slab8_mmbtu").value = "";
                                            document.getElementById("pro_slab0_gascharges").value = "";
                                            document.getElementById("pro_slab1_gascharges").value = "";
                                            document.getElementById("pro_slab2_gascharges").value = "";
                                            document.getElementById("pro_slab3_gascharges").value = "";
                                            document.getElementById("pro_slab4_gascharges").value = "";
                                            // document.getElementById("pro_slab5_gascharges").value = "";
                                            // document.getElementById("pro_slab6_gascharges").value = "";
                                            // document.getElementById("pro_slab7_gascharges").value = "";
                                            // document.getElementById("pro_slab8_gascharges").value = "";


                                            // Initialize/reset text field styles
                                            document.getElementById("pro_slab0_scm").className = "cl2_inp";
                                            document.getElementById("pro_slab1_scm").className = "cl2_inp";
                                            document.getElementById("pro_slab2_scm").className = "cl2_inp";
                                            document.getElementById("pro_slab3_scm").className = "cl2_inp";
                                            document.getElementById("pro_slab4_scm").className = "cl2_inp";
                                            // document.getElementById("pro_slab5_scm").className = "cl2_inp";
                                            // document.getElementById("pro_slab6_scm").className = "cl2_inp";
                                            // document.getElementById("pro_slab7_scm").className = "cl2_inp";
                                            // document.getElementById("pro_slab8_scm").className = "cl2_inp";
                                            document.getElementById("pro_slab0_mmbtu").className = "cl2_inp";
                                            document.getElementById("pro_slab1_mmbtu").className = "cl2_inp";
                                            document.getElementById("pro_slab2_mmbtu").className = "cl2_inp";
                                            document.getElementById("pro_slab3_mmbtu").className = "cl2_inp";
                                            document.getElementById("pro_slab4_mmbtu").className = "cl2_inp";
                                            // document.getElementById("pro_slab5_mmbtu").className = "cl2_inp";
                                            // document.getElementById("pro_slab6_mmbtu").className = "cl2_inp";
                                            // document.getElementById("pro_slab7_mmbtu").className = "cl2_inp";
                                            // document.getElementById("pro_slab8_mmbtu").className = "cl2_inp";
                                            document.getElementById("pro_slab0_rate").className = "cl2_inp";
                                            document.getElementById("pro_slab1_rate").className = "cl2_inp";
                                            document.getElementById("pro_slab2_rate").className = "cl2_inp";
                                            document.getElementById("pro_slab3_rate").className = "cl2_inp";
                                            document.getElementById("pro_slab4_rate").className = "cl2_inp";
                                            // document.getElementById("pro_slab5_rate").className = "cl2_inp";
                                            // document.getElementById("pro_slab6_rate").className = "cl2_inp";
                                            // document.getElementById("pro_slab7_rate").className = "cl2_inp";
                                            // document.getElementById("pro_slab8_rate").className = "cl2_inp";
                                            document.getElementById("pro_slab0_gascharges").className = "cl2_inp";
                                            document.getElementById("pro_slab1_gascharges").className = "cl2_inp";
                                            document.getElementById("pro_slab2_gascharges").className = "cl2_inp";
                                            document.getElementById("pro_slab3_gascharges").className = "cl2_inp";
                                            document.getElementById("pro_slab4_gascharges").className = "cl2_inp";
                                            // document.getElementById("pro_slab5_gascharges").className = "cl2_inp";
                                            // document.getElementById("pro_slab6_gascharges").className = "cl2_inp";
                                            // document.getElementById("pro_slab7_gascharges").className = "cl2_inp";
                                            // document.getElementById("pro_slab8_gascharges").className = "cl2_inp";

                                            // Check for empty values
                                            var pr = document.getElementById("pro_prev_reading").value;
                                            if (pr.length == 0) {
                                                alert("Please enter Previous Reading.");
                                                document.getElementById("pro_prev_reading").focus();
                                                return;
                                            }
                                            var cr = document.getElementById("pro_curr_reading").value;
                                            if (cr.length == 0) {
                                                alert("Please enter Current Reading.");
                                                document.getElementById("pro_curr_reading").focus();
                                                return;
                                            }
                                            var ps = document.getElementById("pro_pressure").value;
                                            if (ps.length == 0) {
                                                alert("Please enter Pressure.");
                                                document.getElementById("pro_pressure").focus();
                                                return;
                                            }

                                            var curr_reading = parseInt(document.getElementById("pro_curr_reading").value);

                                            var prev_reading = parseInt(document.getElementById("pro_prev_reading").value);

                                            var pressure = parseFloat(document.getElementById("pro_pressure").value);

                                            // Check if current reading is less than previous reading
                                            if (curr_reading < prev_reading) {
                                                alert("Current Reading cannot be less than Previous Reading");
                                                document.getElementById("pro_curr_reading").value = '';
                                                document.getElementById("pro_curr_reading").focus();
                                                return;
                                            }

                                            var gcv = parseFloat(document.getElementById("pro_gcv").value);
                                            // Check if GCV is less than 800 or greater than 1200
                                            if (gcv < 800 || gcv > 1200) {
                                                alert("GCV cannot be less than 800 or more than 1200.");
                                                document.getElementById("pro_gcv").value = '';
                                                document.getElementById("pro_gcv").focus();
                                                return;
                                            }

                                            var units = curr_reading - prev_reading;
                                            var meterRent = parseFloat(document.getElementById("pro_meterRent").value);
                                            var fixedCharge = parseFloat(document.getElementById("pro_fixedCharge").value);
                                            var pcf = (pressure + 14.65) / 14.65; // PCF
                                            var scm = units * pcf; // lStandard CM

                                            // If SCM is greater than 90 then the calculation falls in the Non-Protected category
                                            if (scm > 90) {
                                                alert('As per the meter readings provided by you, your bill falls in the Non-Protected Category.\n\nPlease select the Non-Protected Category option to calculate your estimated bill amount.');
                                                return true;
                                            }

                                            var scm = scm.toFixed(0);
                                            var gasCharges0a = 0;
                                            var gasCharges0b = 0;
                                            var gasCharges1a = 0;
                                            var gasCharges1b = 0;
                                            var gasCharges2a = 0;
                                            var gasCharges2b = 0;
                                            var gasCharges3a = 0;
                                            var gasCharges3b = 0;
                                            var gasCharges4a = 0;
                                            var gasCharges4b = 0;
                                            // var gasCharges5a = 0;
                                            // var gasCharges5b = 0;
                                            // var gasCharges6a = 0;
                                            var gasCharges6b = 0;

                                            // Display values
                                            document.getElementById("pro_units").value = units;
                                            document.getElementById("pro_pcf").value = pcf.toFixed(4);
                                            document.getElementById("pro_scm").value = Math.ceil(scm);


                                            // Case: IF Slab is the Minimum Gas Charges
                                            if (scm >= 0 && scm <= 0) {
                                                // calculate starting value for first slab
                                                var slab = scm;

                                                // calculate and set gas charges for first slab
                                                var gasRate = document.getElementById("pro_slab0_rate").value;
                                                var gasCharges0a = gasRate;
                                                document.getElementById("pro_slab0_gascharges").value = gasCharges0a;
                                                document.getElementById("pro_slab0_scm").className = "cl2b_inp";
                                                document.getElementById("pro_slab0_mmbtu").className = "cl2b_inp";
                                                document.getElementById("pro_slab0_rate").className = "cl2b_inp";
                                                document.getElementById("pro_slab0_gascharges").className = "cl2b_inp";
                                            }

                                            // Case: IF Slab is the 1st Slab (Up to 25 SCM)
                                            // SCM = hm3 x 100
                                            if (scm > 0 && scm <= 25) {
                                                // calculate starting value for first slab
                                                var slab = scm;

                                                // set SCM value for first slab
                                                document.getElementById("pro_slab1_scm").value = Math.ceil(slab);
                                                document.getElementById("pro_slab1_scm").className = "cl2b_inp";

                                                // set mmbtu for first slab
                                                var mmbtu = slab * gcv / 28173.85;
                                                document.getElementById("pro_slab1_mmbtu").value = mmbtu.toFixed(4);
                                                document.getElementById("pro_slab1_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for first slab
                                                var gasRate = document.getElementById("pro_slab1_rate").value;
                                                document.getElementById("pro_slab1_rate").className = "cl2b_inp";
                                                var gasCharges1a = mmbtu * gasRate;

                                                // If calculated gas charges are less than the minimum charges
                                                // then the gas charges will be equeal to minimum charges
                                                var minimumCharges = parseFloat(document.getElementById("pro_slab0_rate").value);
                                                if (gasCharges1a < minimumCharges) {
                                                    gasCharges1a = minimumCharges
                                                }

                                                document.getElementById("pro_slab1_gascharges").value = gasCharges1a.toFixed(2);
                                                document.getElementById("pro_slab1_gascharges").className = "cl2b_inp";

                                            }


                                            // Case: IF Slab is the 2nd Slab (Up to 50 SCM)
                                            // SCM = hm3 x 100
                                            if (scm > 25 && scm <= 50) {
                                                // calculate starting value for first slab
                                                var slab = 25;

                                                // set SCM value for first slab
                                                document.getElementById("pro_slab1_scm").value = Math.ceil(slab);
                                                document.getElementById("pro_slab1_scm").className = "cl2b_inp";

                                                // set mmbtu for first slab
                                                var mmbtu = slab * gcv / 28173.85;
                                                document.getElementById("pro_slab1_mmbtu").value = mmbtu.toFixed(4);
                                                document.getElementById("pro_slab1_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for first slab
                                                var gasRate = document.getElementById("pro_slab1_rate").value;
                                                document.getElementById("pro_slab1_rate").className = "cl2b_inp";
                                                document.getElementById("pro_slab1_rate").className = "cl2b_inp";
                                                var gasCharges2a = mmbtu * gasRate;
                                                document.getElementById("pro_slab1_gascharges").value = addComma(gasCharges2a.toFixed(2));
                                                document.getElementById("pro_slab1_gascharges").className = "cl2b_inp";

                                                // calculate starting value for next slab
                                                var slab2 = scm - slab;

                                                // calculate SCM for next slab
                                                document.getElementById("pro_slab2_scm").value = Math.ceil(slab2);
                                                document.getElementById("pro_slab2_scm").className = "cl2b_inp";

                                                // mmbtu for next slab
                                                var mmbtu2 = (slab2) * gcv / 28173.85;
                                                document.getElementById("pro_slab2_mmbtu").value = mmbtu2.toFixed(4);
                                                document.getElementById("pro_slab2_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for next slab
                                                var gasRate2 = document.getElementById("pro_slab2_rate").value;
                                                document.getElementById("pro_slab2_rate").className = "cl2b_inp";
                                                var gasCharges2b = mmbtu2 * gasRate2;
                                                document.getElementById("pro_slab2_gascharges").value = addComma(gasCharges2b.toFixed(2));
                                                document.getElementById("pro_slab2_gascharges").className = "cl2b_inp";

                                            }

                                            // Case: IF Slab is the 3rd Slab (Up to 60 SCM)
                                            // SCM = hm3 x 100
                                            if (scm > 50 && scm <= 60) {
                                                // calculate starting value for first slab
                                                var slab = 50;

                                                // set SCM value for first slab
                                                document.getElementById("pro_slab2_scm").value = Math.ceil(slab);
                                                document.getElementById("pro_slab2_scm").className = "cl2b_inp";

                                                // set mmbtu for first slab
                                                var mmbtu = slab * gcv / 28173.85;
                                                document.getElementById("pro_slab2_mmbtu").value = mmbtu.toFixed(4);
                                                document.getElementById("pro_slab2_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for first slab
                                                var gasRate = document.getElementById("pro_slab2_rate").value;
                                                document.getElementById("pro_slab2_rate").className = "cl2b_inp";
                                                var gasCharges3a = mmbtu * gasRate;
                                                document.getElementById("pro_slab2_gascharges").value = addComma(gasCharges3a.toFixed(2));
                                                document.getElementById("pro_slab2_gascharges").className = "cl2b_inp";

                                                // calculate starting value for next slab
                                                var slab2 = scm - slab;

                                                // calculate SCM for next slab
                                                document.getElementById("pro_slab3_scm").value = Math.ceil(slab2);
                                                document.getElementById("pro_slab3_scm").className = "cl2b_inp";

                                                // mmbtu for next slab
                                                var mmbtu2 = (slab2) * gcv / 28173.85;
                                                document.getElementById("pro_slab3_mmbtu").value = mmbtu2.toFixed(4);
                                                document.getElementById("pro_slab3_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for next slab
                                                var gasRate2 = document.getElementById("pro_slab3_rate").value;
                                                document.getElementById("pro_slab3_rate").className = "cl2b_inp";
                                                document.getElementById("pro_slab3_rate").className = "cl2b_inp";
                                                var gasCharges3b = mmbtu2 * gasRate2;
                                                document.getElementById("pro_slab3_gascharges").value = addComma(gasCharges3b.toFixed(2));
                                                document.getElementById("pro_slab3_gascharges").className = "cl2b_inp";

                                            }


                                            // Case: IF Slab is the 4th Slab (Up to 90 SCM)
                                            // SCM = hm3 x 100
                                            if (scm > 60 && scm <= 90) {
                                                // calculate starting value for first slab
                                                var slab = 60;

                                                // set SCM value for first slab
                                                document.getElementById("pro_slab3_scm").value = Math.ceil(slab);
                                                document.getElementById("pro_slab3_scm").className = "cl2b_inp";

                                                // set mmbtu for first slab
                                                var mmbtu = slab * gcv / 28173.85;
                                                document.getElementById("pro_slab3_mmbtu").value = mmbtu.toFixed(4);
                                                document.getElementById("pro_slab3_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for first slab
                                                var gasRate = document.getElementById("pro_slab3_rate").value;
                                                document.getElementById("pro_slab3_rate").className = "cl2b_inp";
                                                var gasCharges4a = mmbtu * gasRate;
                                                document.getElementById("pro_slab3_gascharges").value = addComma(gasCharges4a.toFixed(2));
                                                document.getElementById("pro_slab3_gascharges").className = "cl2b_inp";

                                                // calculate starting value for next slab
                                                var slab2 = scm - slab;

                                                // calculate SCM for next slab
                                                document.getElementById("pro_slab4_scm").value = Math.ceil(slab2);
                                                document.getElementById("pro_slab4_scm").className = "cl2b_inp";

                                                // mmbtu for next slab
                                                var mmbtu2 = (slab2) * gcv / 28173.85;
                                                document.getElementById("pro_slab4_mmbtu").value = mmbtu2.toFixed(4);
                                                document.getElementById("pro_slab4_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for next slab
                                                var gasRate2 = document.getElementById("pro_slab4_rate").value;
                                                document.getElementById("pro_slab4_rate").className = "cl2b_inp";
                                                var gasCharges4b = mmbtu2 * gasRate2;
                                                document.getElementById("pro_slab4_gascharges").value = addComma(gasCharges4b.toFixed(2));
                                                document.getElementById("pro_slab4_gascharges").className = "cl2b_inp";

                                            }

                                            slab0_scm = document.getElementById("pro_slab0_scm").value;
                                            if (!slab0_scm) {
                                                slab0_scm = 0;
                                            }
                                            slab1_scm = document.getElementById("pro_slab1_scm").value;
                                            if (!slab1_scm) {
                                                slab1_scm = 0;
                                            }
                                            slab2_scm = document.getElementById("pro_slab2_scm").value;
                                            if (!slab2_scm) {
                                                slab2_scm = 0;
                                            }
                                            slab3_scm = document.getElementById("pro_slab3_scm").value;
                                            if (!slab3_scm) {
                                                slab3_scm = 0;
                                            }
                                            slab4_scm = document.getElementById("pro_slab4_scm").value;
                                            if (!slab4_scm) {
                                                slab4_scm = 0;
                                            }
                                            // slab5_scm = document.getElementById("pro_slab5_scm").value;
                                            // if (!slab5_scm) {
                                            //     slab5_scm = 0;
                                            // }
                                            // slab6_scm = document.getElementById("pro_slab6_scm").value;
                                            // if (!slab6_scm) {
                                            //     slab6_scm = 0;
                                            // }
                                            //
                                            // slab7_scm = document.getElementById("pro_slab7_scm").value;
                                            // if (!slab7_scm) {
                                            //     slab7_scm = 0;
                                            // }
                                            //
                                            // slab8_scm = document.getElementById("pro_slab8_scm").value;
                                            // if (!slab8_scm) {
                                            //     slab8_scm = 0;
                                            // }


                                            // Calculate Total SCM
                                            var total_scm = parseFloat(slab0_scm) + parseFloat(slab1_scm) + parseFloat(slab2_scm) + parseFloat(slab3_scm) + parseFloat(slab4_scm);
                                            document.getElementById("pro_total_scm").value = total_scm.toFixed(0);


                                            slab0_mmbtu = document.getElementById("pro_slab0_mmbtu").value;
                                            if (!slab0_mmbtu) {
                                                slab0_mmbtu = 0;
                                            }
                                            slab1_mmbtu = document.getElementById("pro_slab1_mmbtu").value;
                                            if (!slab1_mmbtu) {
                                                slab1_mmbtu = 0;
                                            }
                                            slab2_mmbtu = document.getElementById("pro_slab2_mmbtu").value;
                                            if (!slab2_mmbtu) {
                                                slab2_mmbtu = 0;
                                            }
                                            slab3_mmbtu = document.getElementById("pro_slab3_mmbtu").value;
                                            if (!slab3_mmbtu) {
                                                slab3_mmbtu = 0;
                                            }
                                            slab4_mmbtu = document.getElementById("pro_slab4_mmbtu").value;
                                            if (!slab4_mmbtu) {
                                                slab4_mmbtu = 0;
                                            }
                                            // slab5_mmbtu = document.getElementById("pro_slab5_mmbtu").value;
                                            // if (!slab5_mmbtu) {
                                            //     slab5_mmbtu = 0;
                                            // }
                                            // slab6_mmbtu = document.getElementById("pro_slab6_mmbtu").value;
                                            // if (!slab6_mmbtu) {
                                            //     slab6_mmbtu = 0;
                                            // }

                                            // Calculate Total MMBTU
                                            var total_mmbtu = parseFloat(slab0_mmbtu) + parseFloat(slab1_mmbtu) + parseFloat(slab2_mmbtu) + parseFloat(slab3_mmbtu) + parseFloat(slab4_mmbtu);
                                            document.getElementById("pro_total_mmbtu").value = total_mmbtu.toFixed(4);


                                            // calculate Total Gas Charges
                                            var total1 = parseFloat(gasCharges0a + gasCharges0b + gasCharges1a + gasCharges1b + gasCharges2a + gasCharges2b + gasCharges3a + gasCharges3b + gasCharges4a + gasCharges4b);
                                            document.getElementById("pro_total1").value = addComma(total1.toFixed(2));


                                            // calculate GST
                                            var subtotal = total1 + meterRent + fixedCharge;
                                            var gst = subtotal * 0.18;
                                            document.getElementById("pro_gst").value = addComma(gst.toFixed(2));


                                            // calculate Grand Total
                                            var grandTotal = subtotal + gst;
                                            var grandTotal = Math.round(grandTotal / 10) * 10;
                                            document.getElementById("pro_grandTotal").value = addComma(grandTotal);

                                        }

                                        // Non-Protected Category
                                        function non_pro_calc_pcf() {
                                            // Clear all form fields
                                            document.getElementById("non_pro_units").value = "";
                                            document.getElementById("non_pro_pcf").value = "";
                                            document.getElementById("non_pro_scm").value = "";
                                            document.getElementById("non_pro_slab0_scm").value = "";
                                            document.getElementById("non_pro_slab1_scm").value = "";
                                            document.getElementById("non_pro_slab2_scm").value = "";
                                            document.getElementById("non_pro_slab3_scm").value = "";
                                            document.getElementById("non_pro_slab4_scm").value = "";
                                            document.getElementById("non_pro_slab5_scm").value = "";
                                            document.getElementById("non_pro_slab6_scm").value = "";
                                            document.getElementById("non_pro_slab7_scm").value = "";
                                            document.getElementById("non_pro_slab8_scm").value = "";
                                            document.getElementById("non_pro_slab0_mmbtu").value = "";
                                            document.getElementById("non_pro_slab1_mmbtu").value = "";
                                            document.getElementById("non_pro_slab2_mmbtu").value = "";
                                            document.getElementById("non_pro_slab3_mmbtu").value = "";
                                            document.getElementById("non_pro_slab4_mmbtu").value = "";
                                            document.getElementById("non_pro_slab5_mmbtu").value = "";
                                            document.getElementById("non_pro_slab6_mmbtu").value = "";
                                            document.getElementById("non_pro_slab7_mmbtu").value = "";
                                            document.getElementById("non_pro_slab8_mmbtu").value = "";
                                            document.getElementById("non_pro_slab0_gascharges").value = "";
                                            document.getElementById("non_pro_slab1_gascharges").value = "";
                                            document.getElementById("non_pro_slab2_gascharges").value = "";
                                            document.getElementById("non_pro_slab3_gascharges").value = "";
                                            document.getElementById("non_pro_slab4_gascharges").value = "";
                                            document.getElementById("non_pro_slab5_gascharges").value = "";
                                            document.getElementById("non_pro_slab6_gascharges").value = "";
                                            document.getElementById("non_pro_slab7_gascharges").value = "";
                                            document.getElementById("non_pro_slab8_gascharges").value = "";


                                            // Initialize/reset text field styles
                                            document.getElementById("non_pro_slab0_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab1_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab2_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab3_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab4_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab5_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab6_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab7_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab8_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab0_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab1_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab2_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab3_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab4_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab5_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab6_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab7_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab8_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab0_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab1_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab2_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab3_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab4_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab5_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab6_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab7_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab8_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab0_gascharges").className = "cl2_inp";
                                            document.getElementById("non_pro_slab1_gascharges").className = "cl2_inp";
                                            document.getElementById("non_pro_slab2_gascharges").className = "cl2_inp";
                                            document.getElementById("non_pro_slab3_gascharges").className = "cl2_inp";
                                            document.getElementById("non_pro_slab4_gascharges").className = "cl2_inp";
                                            document.getElementById("non_pro_slab5_gascharges").className = "cl2_inp";
                                            document.getElementById("non_pro_slab6_gascharges").className = "cl2_inp";
                                            document.getElementById("non_pro_slab7_gascharges").className = "cl2_inp";
                                            document.getElementById("non_pro_slab8_gascharges").className = "cl2_inp";

                                            // Check for empty values
                                            var pr = document.getElementById("non_pro_prev_reading").value;
                                            if (pr.length == 0) {
                                                alert("Please enter Previous Reading.");
                                                document.getElementById("non_pro_prev_reading").focus();
                                                return;
                                            }
                                            var cr = document.getElementById("non_pro_curr_reading").value;
                                            if (cr.length == 0) {
                                                alert("Please enter Current Reading.");
                                                document.getElementById("non_pro_curr_reading").focus();
                                                return;
                                            }
                                            var ps = document.getElementById("non_pro_pressure").value;
                                            if (ps.length == 0) {
                                                alert("Please enter Pressure.");
                                                document.getElementById("non_pro_pressure").focus();
                                                return;
                                            }

                                            var curr_reading = parseInt(document.getElementById("non_pro_curr_reading").value);

                                            var prev_reading = parseInt(document.getElementById("non_pro_prev_reading").value);

                                            var pressure = parseFloat(document.getElementById("non_pro_pressure").value);

                                            // Check if current reading is less than previous reading
                                            if (curr_reading < prev_reading) {
                                                alert("Current Reading cannot be less than Previous Reading");
                                                document.getElementById("non_pro_curr_reading").value = '';
                                                document.getElementById("non_pro_curr_reading").focus();
                                                return;
                                            }

                                            var gcv = parseFloat(document.getElementById("non_pro_gcv").value);
                                            // Check if GCV is less than 800 or greater than 1200
                                            if (gcv < 800 || gcv > 1200) {
                                                alert("GCV cannot be less than 800 or more than 1200.");
                                                document.getElementById("non_pro_gcv").value = '';
                                                document.getElementById("non_pro_gcv").focus();
                                                return;
                                            }

                                            var units = curr_reading - prev_reading;
                                            var meterRent = parseFloat(document.getElementById("non_pro_meterRent").value);
                                            var pcf = (pressure + 14.65) / 14.65; // PCF
                                            var scm = units * pcf; // Standard CM
                                            var scm = scm.toFixed(0);

                                            // Calculate Fixed Charges for the Non-Protected Category
                                            // Non-Protected Category to pay a fixed charge of Rs. 1,000/- up to 1.5 hm3 and meter rent of Rs. 40/-
                                            // while Rs. 2,000/- for exceeding consumption of 1.5 hm3 and meter rent of Rs. 40/-
                                            // hm3 = SCM / 100
                                            var fixedChargesSCM = scm / 100;
                                            if (fixedChargesSCM <= 1.5) {
                                                var fixedCharge = 1000;
                                                document.getElementById("non_pro_fixedCharge").value = parseFloat(fixedCharge);
                                            } else {
                                                var fixedCharge = 2000;
                                                document.getElementById("non_pro_fixedCharge").value = parseFloat(fixedCharge);
                                            }
                                            var gasCharges0a = 0;
                                            var gasCharges0b = 0;
                                            var gasCharges1a = 0;
                                            var gasCharges1b = 0;
                                            var gasCharges2a = 0;
                                            var gasCharges2b = 0;
                                            var gasCharges3a = 0;
                                            var gasCharges3b = 0;
                                            var gasCharges4a = 0;
                                            var gasCharges4b = 0;
                                            var gasCharges5a = 0;
                                            var gasCharges5b = 0;
                                            var gasCharges6a = 0;
                                            var gasCharges6b = 0;
                                            var gasCharges7a = 0;
                                            var gasCharges7b = 0;
                                            var gasCharges8a = 0;
                                            var gasCharges8b = 0;

                                            // Display values
                                            document.getElementById("non_pro_units").value = units;
                                            document.getElementById("non_pro_pcf").value = pcf.toFixed(4);
                                            document.getElementById("non_pro_scm").value = Math.ceil(scm);


                                            // Case: IF Slab is the Minimum Gas Charges
                                            if (scm >= 0 && scm <= 0) {
                                                // calculate starting value for first slab
                                                var slab = scm;

                                                // calculate and set gas charges for first slab
                                                var gasRate = document.getElementById("non_pro_slab0_rate").value;
                                                var gasCharges0a = gasRate;
                                                document.getElementById("non_pro_slab0_gascharges").value = gasCharges0a;
                                                document.getElementById("non_pro_slab0_scm").className = "cl2b_inp";
                                                document.getElementById("non_pro_slab0_mmbtu").className = "cl2b_inp";
                                                document.getElementById("non_pro_slab0_rate").className = "cl2b_inp";
                                                document.getElementById("non_pro_slab0_gascharges").className = "cl2b_inp";
                                            }

                                            // Case: IF Slab is the 1st Slab (Up to 25 SCM)
                                            // SCM = hm3 x 100
                                            if (scm > 0 && scm <= 25) {
                                                // calculate starting value for first slab
                                                var slab = scm;

                                                // set SCM value for first slab
                                                document.getElementById("non_pro_slab1_scm").value = Math.ceil(slab);
                                                document.getElementById("non_pro_slab1_scm").className = "cl2b_inp";

                                                // set mmbtu for first slab
                                                var mmbtu = slab * gcv / 28173.85;
                                                document.getElementById("non_pro_slab1_mmbtu").value = mmbtu.toFixed(4);
                                                document.getElementById("non_pro_slab1_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for first slab
                                                var gasRate = document.getElementById("non_pro_slab1_rate").value;
                                                document.getElementById("non_pro_slab1_rate").className = "cl2b_inp";
                                                var gasCharges1a = mmbtu * gasRate;

                                                // If calculated gas charges are less than the minimum charges
                                                // then the gas charges will be equal to minimum charges
                                                var minimumCharges = parseFloat(document.getElementById("non_pro_slab0_rate").value);
                                                if (gasCharges1a < minimumCharges) {
                                                    gasCharges1a = minimumCharges
                                                }

                                                document.getElementById("non_pro_slab1_gascharges").value = gasCharges1a.toFixed(2);
                                                document.getElementById("non_pro_slab1_gascharges").className = "cl2b_inp";

                                            }

                                            // Case: IF Slab is the 2nd Slab (Up to 60 SCM)
                                            // SCM = hm3 x 100
                                            if (scm > 25 && scm <= 60) {
                                                // calculate starting value for first slab
                                                var slab = 25;

                                                // set SCM value for first slab
                                                document.getElementById("non_pro_slab1_scm").value = Math.ceil(slab);
                                                document.getElementById("non_pro_slab1_scm").className = "cl2b_inp";

                                                // set mmbtu for first slab
                                                var mmbtu = slab * gcv / 28173.85;
                                                document.getElementById("non_pro_slab1_mmbtu").value = mmbtu.toFixed(4);
                                                document.getElementById("non_pro_slab1_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for first slab
                                                var gasRate = document.getElementById("non_pro_slab1_rate").value;
                                                document.getElementById("non_pro_slab1_rate").className = "cl2b_inp";
                                                document.getElementById("non_pro_slab1_rate").className = "cl2b_inp";
                                                var gasCharges2a = mmbtu * gasRate;
                                                document.getElementById("non_pro_slab1_gascharges").value = addComma(gasCharges2a.toFixed(2));
                                                document.getElementById("non_pro_slab1_gascharges").className = "cl2b_inp";

                                                // calculate starting value for next slab
                                                var slab2 = scm - slab;

                                                // calculate SCM for next slab
                                                document.getElementById("non_pro_slab2_scm").value = Math.ceil(slab2);
                                                document.getElementById("non_pro_slab2_scm").className = "cl2b_inp";

                                                // mmbtu for next slab
                                                var mmbtu2 = (slab2) * gcv / 28173.85;
                                                document.getElementById("non_pro_slab2_mmbtu").value = mmbtu2.toFixed(4);
                                                document.getElementById("non_pro_slab2_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for next slab
                                                var gasRate2 = document.getElementById("non_pro_slab2_rate").value;
                                                document.getElementById("non_pro_slab2_rate").className = "cl2b_inp";
                                                var gasCharges2b = mmbtu2 * gasRate2;
                                                document.getElementById("non_pro_slab2_gascharges").value = addComma(gasCharges2b.toFixed(2));
                                                document.getElementById("non_pro_slab2_gascharges").className = "cl2b_inp";

                                            }

                                            // Case: IF Slab is the 3rd Slab (Up to 100 SCM)
                                            // SCM = hm3 x 100
                                            if (scm > 60 && scm <= 100) {
                                                // calculate starting value for first slab
                                                var slab = 60;

                                                // set SCM value for first slab
                                                document.getElementById("non_pro_slab2_scm").value = Math.ceil(slab);
                                                document.getElementById("non_pro_slab2_scm").className = "cl2b_inp";

                                                // set mmbtu for first slab
                                                var mmbtu = slab * gcv / 28173.85;
                                                document.getElementById("non_pro_slab2_mmbtu").value = mmbtu.toFixed(4);
                                                document.getElementById("non_pro_slab2_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for first slab
                                                var gasRate = document.getElementById("non_pro_slab2_rate").value;
                                                document.getElementById("non_pro_slab2_rate").className = "cl2b_inp";
                                                var gasCharges3a = mmbtu * gasRate;
                                                document.getElementById("non_pro_slab2_gascharges").value = addComma(gasCharges3a.toFixed(2));
                                                document.getElementById("non_pro_slab2_gascharges").className = "cl2b_inp";

                                                // calculate starting value for next slab
                                                var slab2 = scm - slab;

                                                // calculate SCM for next slab
                                                document.getElementById("non_pro_slab3_scm").value = Math.ceil(slab2);
                                                document.getElementById("non_pro_slab3_scm").className = "cl2b_inp";

                                                // mmbtu for next slab
                                                var mmbtu2 = (slab2) * gcv / 28173.85;
                                                document.getElementById("non_pro_slab3_mmbtu").value = mmbtu2.toFixed(4);
                                                document.getElementById("non_pro_slab3_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for next slab
                                                var gasRate2 = document.getElementById("non_pro_slab3_rate").value;
                                                document.getElementById("non_pro_slab3_rate").className = "cl2b_inp";
                                                document.getElementById("non_pro_slab3_rate").className = "cl2b_inp";
                                                var gasCharges3b = mmbtu2 * gasRate2;
                                                document.getElementById("non_pro_slab3_gascharges").value = addComma(gasCharges3b.toFixed(2));
                                                document.getElementById("non_pro_slab3_gascharges").className = "cl2b_inp";

                                            }

                                            // Case: IF Slab is the 4th Slab (Up to 150 SCM)
                                            // SCM = hm3 x 100
                                            if (scm > 100 && scm <= 150) {
                                                // calculate starting value for first slab
                                                var slab = 100;

                                                // set SCM value for first slab
                                                document.getElementById("non_pro_slab3_scm").value = Math.ceil(slab);
                                                document.getElementById("non_pro_slab3_scm").className = "cl2b_inp";

                                                // set mmbtu for first slab
                                                var mmbtu = slab * gcv / 28173.85;
                                                document.getElementById("non_pro_slab3_mmbtu").value = mmbtu.toFixed(4);
                                                document.getElementById("non_pro_slab3_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for first slab
                                                var gasRate = document.getElementById("non_pro_slab3_rate").value;
                                                document.getElementById("non_pro_slab3_rate").className = "cl2b_inp";
                                                var gasCharges4a = mmbtu * gasRate;
                                                document.getElementById("non_pro_slab3_gascharges").value = addComma(gasCharges4a.toFixed(2));
                                                document.getElementById("non_pro_slab3_gascharges").className = "cl2b_inp";

                                                // calculate starting value for next slab
                                                var slab2 = scm - slab;

                                                // calculate SCM for next slab
                                                document.getElementById("non_pro_slab4_scm").value = Math.ceil(slab2);
                                                document.getElementById("non_pro_slab4_scm").className = "cl2b_inp";

                                                // mmbtu for next slab
                                                var mmbtu2 = (slab2) * gcv / 28173.85;
                                                document.getElementById("non_pro_slab4_mmbtu").value = mmbtu2.toFixed(4);
                                                document.getElementById("non_pro_slab4_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for next slab
                                                var gasRate2 = document.getElementById("non_pro_slab4_rate").value;
                                                document.getElementById("non_pro_slab4_rate").className = "cl2b_inp";
                                                var gasCharges4b = mmbtu2 * gasRate2;
                                                document.getElementById("non_pro_slab4_gascharges").value = addComma(gasCharges4b.toFixed(2));
                                                document.getElementById("non_pro_slab4_gascharges").className = "cl2b_inp";

                                            }

                                            // Case: IF Slab is the 5th Slab (Up to 200 SCM)
                                            // SCM = hm3 x 100
                                            if (scm > 150 && scm <= 200) {
                                                // calculate starting value for first slab
                                                var slab = 150;

                                                // set SCM value for first slab
                                                document.getElementById("non_pro_slab4_scm").value = Math.ceil(slab);
                                                document.getElementById("non_pro_slab4_scm").className = "cl2b_inp";

                                                // set mmbtu for first slab
                                                var mmbtu = slab * gcv / 28173.85;
                                                document.getElementById("non_pro_slab4_mmbtu").value = mmbtu.toFixed(4);
                                                document.getElementById("non_pro_slab4_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for first slab
                                                var gasRate = document.getElementById("non_pro_slab4_rate").value;
                                                document.getElementById("non_pro_slab4_rate").className = "cl2b_inp";
                                                var gasCharges5a = mmbtu * gasRate;
                                                document.getElementById("non_pro_slab4_gascharges").value = addComma(gasCharges5a.toFixed(2));
                                                document.getElementById("non_pro_slab4_gascharges").className = "cl2b_inp";

                                                // calculate starting value for next slab
                                                var slab2 = scm - slab;

                                                // calculate SCM for next slab
                                                document.getElementById("non_pro_slab5_scm").value = Math.ceil(slab2);
                                                document.getElementById("non_pro_slab5_scm").className = "cl2b_inp";

                                                // mmbtu for next slab
                                                var mmbtu2 = (slab2) * gcv / 28173.85;
                                                document.getElementById("non_pro_slab5_mmbtu").value = mmbtu2.toFixed(4);
                                                document.getElementById("non_pro_slab5_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for next slab
                                                var gasRate2 = document.getElementById("non_pro_slab5_rate").value;
                                                document.getElementById("non_pro_slab5_rate").className = "cl2b_inp";
                                                var gasCharges5b = mmbtu2 * gasRate2;
                                                document.getElementById("non_pro_slab5_gascharges").value = addComma(gasCharges5b.toFixed(2));
                                                document.getElementById("non_pro_slab5_gascharges").className = "cl2b_inp";

                                            }

                                            // Case: IF Slab is the 6th Slab (Up to 300 SCM)
                                            // SCM = hm3 x 100
                                            if (scm > 200 && scm <= 300) {
                                                // calculate starting value for first slab
                                                var slab = 200;

                                                // set SCM value for first slab
                                                document.getElementById("non_pro_slab5_scm").value = Math.ceil(slab);
                                                document.getElementById("non_pro_slab5_scm").className = "cl2b_inp";

                                                // set mmbtu for first slab
                                                var mmbtu = slab * gcv / 28173.85;
                                                document.getElementById("non_pro_slab5_mmbtu").value = mmbtu.toFixed(4);
                                                document.getElementById("non_pro_slab5_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for first slab
                                                var gasRate = document.getElementById("non_pro_slab5_rate").value;
                                                document.getElementById("non_pro_slab5_rate").className = "cl2b_inp";
                                                var gasCharges6a = mmbtu * gasRate;
                                                document.getElementById("non_pro_slab5_gascharges").value = addComma(gasCharges6a.toFixed(2));
                                                document.getElementById("non_pro_slab5_gascharges").className = "cl2b_inp";

                                                // calculate starting value for next slab
                                                var slab2 = scm - slab;

                                                // calculate SCM for next slab
                                                document.getElementById("non_pro_slab6_scm").value = Math.ceil(slab2);
                                                document.getElementById("non_pro_slab6_scm").className = "cl2b_inp";

                                                // mmbtu for next slab
                                                var mmbtu2 = (slab2) * gcv / 28173.85;
                                                document.getElementById("non_pro_slab6_mmbtu").value = mmbtu2.toFixed(4);
                                                document.getElementById("non_pro_slab6_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for next slab
                                                var gasRate2 = document.getElementById("non_pro_slab6_rate").value;
                                                document.getElementById("non_pro_slab6_rate").className = "cl2b_inp";
                                                var gasCharges6b = mmbtu2 * gasRate2;
                                                document.getElementById("non_pro_slab6_gascharges").value = addComma(gasCharges6b.toFixed(2));
                                                document.getElementById("non_pro_slab6_gascharges").className = "cl2b_inp";

                                            }

                                            // Case: IF Slab is the 7th Slab (Up to 400 SCM)
                                            // SCM = hm3 x 100
                                            if (scm > 300 && scm <= 400) {
                                                // calculate starting value for first slab
                                                var slab = 300;

                                                // set SCM value for first slab
                                                document.getElementById("non_pro_slab6_scm").value = Math.ceil(slab);
                                                document.getElementById("non_pro_slab6_scm").className = "cl2b_inp";

                                                // set mmbtu for first slab
                                                var mmbtu = slab * gcv / 28173.85;
                                                document.getElementById("non_pro_slab6_mmbtu").value = mmbtu.toFixed(4);
                                                document.getElementById("non_pro_slab6_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for first slab
                                                var gasRate = document.getElementById("non_pro_slab6_rate").value;
                                                document.getElementById("non_pro_slab6_rate").className = "cl2b_inp";
                                                var gasCharges7a = mmbtu * gasRate;
                                                document.getElementById("non_pro_slab6_gascharges").value = addComma(gasCharges7a.toFixed(2));
                                                document.getElementById("non_pro_slab6_gascharges").className = "cl2b_inp";

                                                // calculate starting value for next slab
                                                var slab2 = scm - slab;

                                                // calculate SCM for next slab
                                                document.getElementById("non_pro_slab7_scm").value = Math.ceil(slab2);
                                                document.getElementById("non_pro_slab7_scm").className = "cl2b_inp";

                                                // mmbtu for next slab
                                                var mmbtu2 = (slab2) * gcv / 28173.85;
                                                document.getElementById("non_pro_slab7_mmbtu").value = mmbtu2.toFixed(4);
                                                document.getElementById("non_pro_slab7_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for next slab
                                                var gasRate2 = document.getElementById("non_pro_slab7_rate").value;
                                                document.getElementById("non_pro_slab7_rate").className = "cl2b_inp";
                                                var gasCharges7b = mmbtu2 * gasRate2;
                                                document.getElementById("non_pro_slab7_gascharges").value = addComma(gasCharges7b.toFixed(2));
                                                document.getElementById("non_pro_slab7_gascharges").className = "cl2b_inp";

                                            }

                                            // Case: IF Slab is the 8th Slab (Above 400 SCM)
                                            // SCM = hm3 x 100
                                            if (scm > 400) {
                                                // calculate starting value for first slab
                                                var slab = scm;

                                                // set SCM value for first slab
                                                document.getElementById("non_pro_slab8_scm").value = Math.ceil(slab);
                                                document.getElementById("non_pro_slab8_scm").className = "cl2b_inp";

                                                // set mmbtu for first slab
                                                var mmbtu = slab * gcv / 28173.85;
                                                document.getElementById("non_pro_slab8_mmbtu").value = mmbtu.toFixed(4);
                                                document.getElementById("non_pro_slab8_mmbtu").className = "cl2b_inp";

                                                // calculate and set gas charges for first slab
                                                var gasRate = document.getElementById("non_pro_slab8_rate").value;
                                                document.getElementById("non_pro_slab8_rate").className = "cl2b_inp";
                                                var gasCharges8a = mmbtu * gasRate;
                                                document.getElementById("non_pro_slab8_gascharges").value = addComma(gasCharges8a.toFixed(2));
                                                document.getElementById("non_pro_slab8_gascharges").className = "cl2b_inp";
                                            }

                                            slab0_scm = document.getElementById("non_pro_slab0_scm").value;
                                            if (!slab0_scm) {
                                                slab0_scm = 0;
                                            }
                                            slab1_scm = document.getElementById("non_pro_slab1_scm").value;
                                            if (!slab1_scm) {
                                                slab1_scm = 0;
                                            }
                                            slab2_scm = document.getElementById("non_pro_slab2_scm").value;
                                            if (!slab2_scm) {
                                                slab2_scm = 0;
                                            }
                                            slab3_scm = document.getElementById("non_pro_slab3_scm").value;
                                            if (!slab3_scm) {
                                                slab3_scm = 0;
                                            }
                                            slab4_scm = document.getElementById("non_pro_slab4_scm").value;
                                            if (!slab4_scm) {
                                                slab4_scm = 0;
                                            }
                                            slab5_scm = document.getElementById("non_pro_slab5_scm").value;
                                            if (!slab5_scm) {
                                                slab5_scm = 0;
                                            }
                                            slab6_scm = document.getElementById("non_pro_slab6_scm").value;
                                            if (!slab6_scm) {
                                                slab6_scm = 0;
                                            }

                                            slab7_scm = document.getElementById("non_pro_slab7_scm").value;
                                            if (!slab7_scm) {
                                                slab7_scm = 0;
                                            }

                                            slab8_scm = document.getElementById("non_pro_slab8_scm").value;
                                            if (!slab8_scm) {
                                                slab8_scm = 0;
                                            }


                                            // Calculate Total SCM
                                            var total_scm = parseFloat(slab0_scm) + parseFloat(slab1_scm) + parseFloat(slab2_scm) + parseFloat(slab3_scm) + parseFloat(slab4_scm) + parseFloat(slab5_scm) + parseFloat(slab6_scm) + parseFloat(slab7_scm) + parseFloat(slab8_scm);
                                            document.getElementById("non_pro_total_scm").value = total_scm.toFixed(0);


                                            slab0_mmbtu = document.getElementById("non_pro_slab0_mmbtu").value;
                                            if (!slab0_mmbtu) {
                                                slab0_mmbtu = 0;
                                            }
                                            slab1_mmbtu = document.getElementById("non_pro_slab1_mmbtu").value;
                                            if (!slab1_mmbtu) {
                                                slab1_mmbtu = 0;
                                            }
                                            slab2_mmbtu = document.getElementById("non_pro_slab2_mmbtu").value;
                                            if (!slab2_mmbtu) {
                                                slab2_mmbtu = 0;
                                            }
                                            slab3_mmbtu = document.getElementById("non_pro_slab3_mmbtu").value;
                                            if (!slab3_mmbtu) {
                                                slab3_mmbtu = 0;
                                            }
                                            slab4_mmbtu = document.getElementById("non_pro_slab4_mmbtu").value;
                                            if (!slab4_mmbtu) {
                                                slab4_mmbtu = 0;
                                            }
                                            slab5_mmbtu = document.getElementById("non_pro_slab5_mmbtu").value;
                                            if (!slab5_mmbtu) {
                                                slab5_mmbtu = 0;
                                            }
                                            slab6_mmbtu = document.getElementById("non_pro_slab6_mmbtu").value;
                                            if (!slab6_mmbtu) {
                                                slab6_mmbtu = 0;
                                            }
                                            slab7_mmbtu = document.getElementById("non_pro_slab7_mmbtu").value;
                                            if (!slab7_mmbtu) {
                                                slab7_mmbtu = 0;
                                            }
                                            slab8_mmbtu = document.getElementById("non_pro_slab8_mmbtu").value;
                                            if (!slab8_mmbtu) {
                                                slab8_mmbtu = 0;
                                            }

                                            // Calculate Total MMBTU
                                            var total_mmbtu = parseFloat(slab0_mmbtu) + parseFloat(slab1_mmbtu) + parseFloat(slab2_mmbtu) + parseFloat(slab3_mmbtu) + parseFloat(slab4_mmbtu) + parseFloat(slab5_mmbtu) + parseFloat(slab6_mmbtu) + parseFloat(slab7_mmbtu) + parseFloat(slab8_mmbtu);
                                            document.getElementById("non_pro_total_mmbtu").value = total_mmbtu.toFixed(4);


                                            // calculate Total Gas Charges
                                            var total1 = parseFloat(gasCharges0a + gasCharges0b + gasCharges1a + gasCharges1b + gasCharges2a + gasCharges2b + gasCharges3a + gasCharges3b + gasCharges4a + gasCharges4b + gasCharges5a + gasCharges5b + gasCharges6a + gasCharges6b + gasCharges7a + gasCharges7b + gasCharges8a + gasCharges8b);
                                            document.getElementById("non_pro_total1").value = addComma(total1.toFixed(2));


                                            // calculate GST
                                            var subtotal = total1 + meterRent + fixedCharge;
                                            var gst = subtotal * 0.18;
                                            document.getElementById("non_pro_gst").value = addComma(gst.toFixed(2));


                                            // calculate Grand Total
                                            var grandTotal = subtotal + gst;
                                            var grandTotal = Math.round(grandTotal / 10) * 10;
                                            document.getElementById("non_pro_grandTotal").value = addComma(grandTotal);

                                        }

                                        // Reset Protected Category Form
                                        function pro_resetForm() {
                                            document.getElementById("pro_slab0_scm").className = "cl2_inp";
                                            document.getElementById("pro_slab0_mmbtu").className = "cl2_inp";
                                            document.getElementById("pro_slab0_rate").className = "cl2_inp";
                                            document.getElementById("pro_slab0_gascharges").className = "cl2_inp";

                                            document.getElementById("pro_slab1_scm").className = "cl2_inp";
                                            document.getElementById("pro_slab1_mmbtu").className = "cl2_inp";
                                            document.getElementById("pro_slab1_rate").className = "cl2_inp";
                                            document.getElementById("pro_slab1_gascharges").className = "cl2_inp";

                                            document.getElementById("pro_slab2_scm").className = "cl2_inp";
                                            document.getElementById("pro_slab2_mmbtu").className = "cl2_inp";
                                            document.getElementById("pro_slab2_rate").className = "cl2_inp";
                                            document.getElementById("pro_slab2_gascharges").className = "cl2_inp";

                                            document.getElementById("pro_slab3_scm").className = "cl2_inp";
                                            document.getElementById("pro_slab3_mmbtu").className = "cl2_inp";
                                            document.getElementById("pro_slab3_rate").className = "cl2_inp";
                                            document.getElementById("pro_slab3_gascharges").className = "cl2_inp";

                                            document.getElementById("pro_slab4_scm").className = "cl2_inp";
                                            document.getElementById("pro_slab4_mmbtu").className = "cl2_inp";
                                            document.getElementById("pro_slab4_rate").className = "cl2_inp";
                                            document.getElementById("pro_slab4_gascharges").className = "cl2_inp";

                                            document.getElementById("pro_calcForm").reset();
                                        }

                                        // Reset Non-Protected Category Form
                                        function non_pro_resetForm() {
                                            document.getElementById("non_pro_slab0_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab0_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab0_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab0_gascharges").className = "cl2_inp";

                                            document.getElementById("non_pro_slab1_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab1_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab1_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab1_gascharges").className = "cl2_inp";

                                            document.getElementById("non_pro_slab2_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab2_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab2_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab2_gascharges").className = "cl2_inp";

                                            document.getElementById("non_pro_slab3_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab3_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab3_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab3_gascharges").className = "cl2_inp";

                                            document.getElementById("non_pro_slab4_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab4_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab4_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab4_gascharges").className = "cl2_inp";

                                            document.getElementById("non_pro_slab5_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab5_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab5_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab5_gascharges").className = "cl2_inp";

                                            document.getElementById("non_pro_slab6_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab6_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab6_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab6_gascharges").className = "cl2_inp";

                                            document.getElementById("non_pro_slab7_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab7_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab7_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab7_gascharges").className = "cl2_inp";

                                            document.getElementById("non_pro_slab8_scm").className = "cl2_inp";
                                            document.getElementById("non_pro_slab8_mmbtu").className = "cl2_inp";
                                            document.getElementById("non_pro_slab8_rate").className = "cl2_inp";
                                            document.getElementById("non_pro_slab8_gascharges").className = "cl2_inp";

                                            document.getElementById("non_pro_calcForm").reset();
                                        }

                                        // Enable Protected Category
                                        function enableProtected() {
                                            document.getElementById("protected").style.display = "block";
                                            document.getElementById("non-protected").style.display = "none";
                                        }

                                        // Enable Non-Protected Category
                                        function enableNonProtected() {
                                            document.getElementById("protected").style.display = "none";
                                            document.getElementById("non-protected").style.display = "block";
                                        }
                                    </script>
                                </strong></strong></section>
                        <strong><strong>
                            </strong></strong></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Working Process Area End -->
</div>
