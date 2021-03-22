@extends('layouts.master')

@section('title', '排行榜')

@section('content')

<?php
    $strPROG_ID = "MERP_TCC001";
    $strMENU_ID = "MERP_TCC000";
    $title = "Journals";

    $Layout = "layouts.master";

    $ValidErrorMsg = "";

?>

<!-- INLINE FORM ELELEMNTS -->
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb">
                <i class="fa fa-angle-right"></i> <?php echo $strPROG_ID ?>
                <i class="fa fa-angle-right"></i> <?php echo $title ?>
            </h4>

            <form action="{{ url('task')}}" method="POST"
                class = "form-inline form-horizontal style-form"
                    id = {{ $strPROG_ID }}   onSubmit = "return JSFunBefore_Post();" >

                <div class="form-group box-fullwidth">
                    <div class="col-lg-12">

                        <table class="table table-responsive rwd-table">
                            <tbody>
                                <tr>
                                    <td>

                                        <label class="control-label" for="id_StartDate">開始日期</label>
                                        <div>
                                            <input type="date" class="form-control" id="id_StartDate" name="na_StartDate" placeholder="Enter startdate">


                                        </div>
                                    </td>

                                    <td>
                                        <label class="control-label" for="id_EndDate">結束日期</label>
                                        <div>
                                            <input type="date" class="form-control" id="id_EndDate" name="na_EndDate" placeholder="Enter enddate">

                                        </div>
                                    </td>

                                    <td>

                                            <label class="control-label" for="id_IsDelAllColZero">刪除所有0欄位資料列?</label>
                                            <div>
                                                <input type="checkbox" id="ChkIsDelAllZero" name="ChkIsDelAllZero" class="form-control" data-toggle="switch" />
                                            </div>

                                    </td>
                                    <td>
                                        <label class="control-label" for="id_IsUseManSel">啟用督導選擇?</label>
                                        <div>
                                            <input type="checkbox" id="id_IsUseManSel" name="IsUseManSel" class="form-control" data-toggle="switch" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="control-label" for="id_ManagerSel">督導選擇</label>

                                            <div>
                                                <select multiple class="form-control" id="id_ManagerSel" name="na_ManagerSel" onchange="JsFun_SelManager();">
                                                    <option value="0000000003">陳瑞金</option>
                                                    <option value="0000000004">謝欣妤</option>
                                                    <option value="0000000005">陳琍珊</option>
                                                    <option value="0000000019">蘇琳兒</option>
                                                    <!-- option value="0000000139">簡怡寧</option -->
                                                    <option value="0000000196">吳啟銘</option>
                                                    <!-- option value="0000000224">賴品言</option -->
                                                    <!-- option value="0000000151">林奕潭</option -->
                                                </select>

                                            </div>


                                    </td>
                                    <td colspan="2">
                                        <label class="control-label" for="id_ClearAllManager">取消所有督導選取</label>
                                        <div>
                                            <button type="button" class="btn btn-theme" id="id_ClearAllManager" onclick="JsFun_ClearAllManageChkBoxGroup();">取消所有選取</button>
                                        </div>
                                        <h4>欲使用 督導選擇 請切換右上角[啟用督導選擇]開關為"啟用"</h4>
                                    </td>


                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <label class="control-label" for="id_ShopsGroup">店鋪選擇</label>
                                        <div>

                                       <!-- select multiple class="form-control" id="id_ShopsSel" name="na_ShopsSel">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select -->

                                            <div class="form-check form-check-inline" id="id_ShopsGroup">
                                                <input class="form-check-input" type="checkbox" id="id_SD001" name="na_ShopsSel" value="SD001">
                                                <label class="form-check-label" for="id_SD001">崇德</label>

                                                <input class="form-check-input" type="checkbox" id="id_SD002" name="na_ShopsSel" value="SD002">
                                                <label class="form-check-label" for="id_SD002">裕誠</label>

                                                <input class="form-check-input" type="checkbox" id="id_SD004" name="na_ShopsSel" value="SD004">
                                                <label class="form-check-label" for="id_SD004">台南民族</label>

                                                <input class="form-check-input" type="checkbox" id="id_SD006" name="na_ShopsSel" value="SD006">
                                                <label class="form-check-label" for="id_SD006">台南崇德</label>

                                                <input class="form-check-input" type="checkbox" id="id_SD007" name="na_ShopsSel" value="SD007">
                                                <label class="form-check-label" for="id_SD007">鳳林</label>

                                                <input class="form-check-input" type="checkbox" id="id_SD010" name="na_ShopsSel" value="SD010">
                                                <label class="form-check-label" for="id_SD010">華夏</label>

                                                <input class="form-check-input" type="checkbox" id="id_SD012" name="na_ShopsSel" value="SD012">
                                                <label class="form-check-label" for="id_SD012">天祥</label>

                                                <input class="form-check-input" type="checkbox" id="id_SD017" name="na_ShopsSel" value="SD017">
                                                <label class="form-check-label" for="id_SD017">大發</label>

                                                <input class="form-check-input" type="checkbox" id="id_SD019" name="na_ShopsSel" value="SD019">
                                                <label class="form-check-label" for="id_SD019">富國</label>

                                                <input class="form-check-input" type="checkbox" id="id_SD020" name="na_ShopsSel" value="SD020">
                                                <label class="form-check-label" for="id_SD020">明誠</label>

                                                <input class="form-check-input" type="checkbox" id="id_SD021" name="na_ShopsSel" value="SD021">
                                                <label class="form-check-label" for="id_SD021">瑞豐</label>

                                                <input class="form-check-input" type="checkbox" id="id_SD022" name="na_ShopsSel" value="SD022">
                                                <label class="form-check-label" for="id_SD022">林園</label>

                                                <input class="form-check-input" type="checkbox" id="id_SD023" name="na_ShopsSel" value="SD023">
                                                <label class="form-check-label" for="id_SD023">漢民</label>

                                                <input class="form-check-input" type="checkbox" id="id_SD024" name="na_ShopsSel" value="SD024">
                                                <label class="form-check-label" for="id_SD024">林園北</label>

                                                <input class="form-check-input" type="checkbox" id="id_SI024" name="na_ShopsSel" value="SI024">
                                                <label class="form-check-label" for="id_SI024">台南公園</label>

                                                <input class="form-check-input" type="checkbox" id="id_ND004" name="na_ShopsSel" value="ND004">
                                                <label class="form-check-label" for="id_ND004">信義</label>

                                                <input class="form-check-input" type="checkbox" id="id_ND005" name="na_ShopsSel" value="ND005">
                                                <label class="form-check-label" for="id_ND005">永吉</label>

                                                <input class="form-check-input" type="checkbox" id="id_ND008" name="na_ShopsSel" value="ND008">
                                                <label class="form-check-label" for="id_ND008">統領</label>

                                                <input class="form-check-input" type="checkbox" id="id_ND009" name="na_ShopsSel" value="ND009">
                                                <label class="form-check-label" for="id_ND009">通化</label>

                                                <input class="form-check-input" type="checkbox" id="id_ND010" name="na_ShopsSel" value="ND010">
                                                <label class="form-check-label" for="id_ND010">市府</label>

                                                <input class="form-check-input" type="checkbox" id="id_ND011" name="na_ShopsSel" value="ND011">
                                                <label class="form-check-label" for="id_ND011">延吉</label>

                                                <input class="form-check-input" type="checkbox" id="id_ND013" name="na_ShopsSel" value="ND013">
                                                <label class="form-check-label" for="id_ND013">信陽</label>

                                                <input class="form-check-input" type="checkbox" id="id_NI005" name="na_ShopsSel" value="NI005">
                                                <label class="form-check-label" for="id_NI005">內科園區</label>


                                            </div>



                                        </div>
                                    </td>
                                    <td>
                                        <label class="control-label" for="id_ClearAllShops">取消所有部門選取</label>
                                        <div>
                                            <button type="button" class="btn btn-theme" id="id_ClearAllShops" onclick="JsFun_ClearAllShopChkBoxGroup();">取消所有選取</button>
                                        </div>
                                        <h4>欲使用 部門選擇 請切換右上角[啟用督導選擇]開關為"關閉"</h4>
                                    </td>

                                </tr>
                                <!-- 20210225 CCL+ 改用選擇 -->
                                <tr>

                                    <td colspan="3">
                                        <label class="control-label" for="GroupSet">直合營加盟設定選擇</label>
                                        <div>

                                        </div>
                                    </td>

                                    <td >
                                        <button type="button" class="btn btn-theme" onclick="JSFun_GroupSetSelClick();">執行[直合營加盟設定]選擇</button>
                                    </td>
                                </tr>


                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="form-group has-success box-fullwidth">
                    <div class="col-lg-12">
                        <p>

                        </p>
                        <button type="submit" class="btn btn-theme">執行轉換</button>
                    </div>
                </div>

            </form>
        </div><!-- /form-panel -->
    </div><!-- /col-lg-12 -->
</div><!-- /row -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////  -->
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
    <!-- col-lg-12全佔12行; main-chart 上邊空20px -->
    <div class="col-lg-12">
        <div class="form-panel">

            <!-- form class="form-horizontal style-form" method="get" -->
            <h2> 月[本月]會計帳 </h2>
            <!-- div class="table-responsive  form-group" -->

            <div class="table-responsive  form-group" id="T_TCC_TAB_1">
                <!-- table class="table table-hover rwd-table" id="M_TCC_TAB_1" -->
                <!-- 一定要加boxscroll Div才會出現卷軸 -->
                <div class="boxscroll">

                    <table class="table table-hover rwd-table">
                        <thead>
                            <tr>
                                <!-- Total 39行 Cols + IsValid,createTime,updateTime -->
                                <th class="col-sm-3 "> 編號</th>
                                <th class="col-sm-3 "> 傳票類別</th>
                                <th class="col-sm-3 "> 借方金額</th>
                                <th class="col-sm-3 "> 貸方金額</th>
                                <th class="col-sm-3 "> 幣別</th>
                                <th class="col-sm-3 "> 會計年度</th>
                                <th class="col-sm-3 "> 會計期別</th>
                                <th class="col-sm-3 "> GUID</th>
                                <th class="col-sm-3 "> 傳票日期</th>
                                <th class="col-sm-3 "> 傳票號碼</th>
                                <th class="col-sm-3 "> 傳票摘要</th>
                                <th class="col-sm-3 "> 科目名稱</th>
                                <th class="col-sm-3 "> 科目編號</th>
                                <th class="col-sm-3 "> 明細科目編號</th>
                                <th class="col-sm-3 "> 明細科目名稱</th>
                                <th class="col-sm-3 "> 部門代號</th>
                                <th class="col-sm-3 "> 部門簡稱</th>
                                <th class="col-sm-3 "> 專案代號</th>
                                <th class="col-sm-3 "> 專案簡稱</th>
                                <th class="col-sm-3 "> 對象類別</th>
                                <th class="col-sm-3 "> 對象編號</th>
                                <th class="col-sm-3 "> 幣別代號</th>
                                <th class="col-sm-3 "> 匯率</th>
                                <th class="col-sm-3 "> 原幣金額</th>
                                <th class="col-sm-3 "> 本幣金額</th>
                                <th class="col-sm-1 "> 備用1編號</th>
                                <th class="col-sm-1 "> 備用1簡稱</th>
                                <th class="col-sm-1 "> 備用2編號</th>
                                <th class="col-sm-1 "> 備用2簡稱</th>
                                <th class="col-sm-1 "> 備用3編號</th>
                                <th class="col-sm-1 "> 備用3簡稱</th>
                                <th class="col-sm-1 "> 備用4編號</th>
                                <th class="col-sm-1 "> 備用4簡稱</th>
                                <th class="col-sm-1 "> 備用5編號</th>
                                <th class="col-sm-1 "> 備用5簡稱</th>
                                <th class="col-sm-3 "> 摘要1</th>
                                <th class="col-sm-3 "> 會計科目</th>
                                <th class="col-sm-3 "> 摘要</th>
                                <th class="col-sm-3 "> 類別</th>
                                <th class="col-sm-3 "> 科目別名</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($Model as $item)
                            {
                                <tr>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>


                                    </td>
                                    <td>


                                    </td>
                                    <td>


                                    </td>
                                    <td>


                                    </td>
                                    <td>


                                    </td>
                                    <td>


                                    </td>
                                    <td>


                                    </td>
                                    <td>


                                    </td>
                                    <td>

                                    </td>
                                    <td>


                                    </td>
                                    <td>


                                    </td>
                                    <td>


                                    </td>
                                    <td>


                                    </td>
                                    <td>


                                    </td>
                                    <td>


                                    </td>

                                </tr>
                            }
                        </tbody>

                    </table>

                </div>

            </div>


            <!-- /form -->

        </div>

    </div><!-- /col-lg-12 -->

</div><!-- /row -->
@stop


