<div style="margin:10px 50px;">
    <form>
        <input id="token" value="{{ @csrf_token() }}" hidden>
        <div class="row justify-content-between">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="width: 100%;color: blue;">
                <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 border-frm">
                        <label class="mr-top-20">Dạng bài toán</label>
                        <input type="text" name="" class="form-control border-input" value="" id="operator"
                               readonly>
                        <div class="file btn btn-success upfile mr-top-20" id="upfile">
                            Upload
                            <input type="file" name="file" class="upfile" id="upfiles"
                                   onchange="onFileSelected(event)"/>
                        </div>
                        <textarea class="form-control mr-top-20 border-input" id="exampleFormControlTextarea1"
                                  rows="10"></textarea>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                        <button class="btn btn-success mr-5" id="result"
                                style="text-align:center; padding: 15px 65px;position: absolute;bottom: 50%"><i
                                    class="fas fa-angle-double-right"></i></button>
                    </div>
                </div>

            </div>
            <!-- <textarea class="col-sm-7 border-frm" id="show"> </textarea> -->
            <div class="col-sm-4 col-md-6 col-lg-6 col-xl-7 border-frm" id="show"></div>
        </div>
    </form>
</div>