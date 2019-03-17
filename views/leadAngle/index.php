<?php $this->setLayoutVar('title', 'ネジ切りリード角計算') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" style="background-color:white;"></div>
        <div class="col-md-10">
            <h3>ネジ切り加工　リード角計算</h3>
            <p>有効径とピッチまたは山数を入力してください。</p>
            <p>リード角を計算します。</p>

            <form>
                <div class="form-group row">
                    <div class="col-md-3 form-inline">
                        <label for="dia_1" class="col-form-label">有効径</label>
                        <input type="text" class="form-control mx-2" id="dia_1" size="5">
                        mm
                    </div>
                    <div class="col-md-3 form-inline">
                        <label for="picth" class="col-form-label">ピッチ</label>
                        <input type="text" class="form-control mx-2" id="pitch" size="5">
                        mm
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary" id="calc_1">計算</button>
                    </div>
                    <div class="col-md-3">
                        <div class="mt-2" id="res_1">リード角：</div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3 form-inline">
                        <label for="dia_2" class="col-form-label">有効径</label>
                        <input type="text" class="form-control mx-2" id="dia_2" size="5"> mm
                    </div>
                    <div class="col-md-3 form-inline">
                        <label for="perinch" class="col-form-label mr-3">山数</label>
                        <input type="text" class="form-control mx-2" id="perinch" size="5"> 山
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary" id="calc_2">計算</button>
                    </div>
                    <div class="col-md-3">
                        <div class="mt-2" id="res_2">リード角：</div>
                    </div>
                </div>
                <button type="button" class="btn btn-warning" onclick="location.reload(true)">リセット</button>
            </form>
        </div>
    </div>
</div>

<script type="text/JavaScript">
    <!--
    function calcLeadAngle(diameter, pitch){
        return (Math.atan(pitch/(diameter*Math.PI))/Math.PI*180).toPrecision(3);
    }   
    
    // リード角計算（ピッチ）
    document.getElementById("calc_1").addEventListener("click",function(){
        var d1=document.getElementById("dia_1").value;
        var p1=document.getElementById("pitch").value;
        var divRes_1 = document.getElementById("res_1");
        divRes_1.textContent='リード角：' + calcLeadAngle(d1,p1) + '°';
    });
    
    
    // リード角計算（山数）
    document.getElementById("calc_2").addEventListener("click",function(){
        var d2=document.getElementById("dia_2").value;
        var p2=25.4/document.getElementById("perinch").value;
        var divRes_2 =document.getElementById("res_2");
        divRes_2.textContent='リード角：' + calcLeadAngle(d2,p2) + '°';
    });
    
    //-->
</script> 