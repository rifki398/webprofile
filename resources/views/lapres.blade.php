@extends('layout.main')
@section('title','Pengumpulan')

@section('content')
<section class="position-relative" id="lapres-section" style="max-height: 1800px; overflow:hidden;">
    <div class="position-absolute d-flex flex-wrap"id="background-lapres">
        <?php
            for($j=1;$j<290;$j++){
                echo "<span></span>";
            }
        ?>
    </div>
    <div class="position-absolute top-50 start-50 translate-middle d-flex"
        style="min-width:25%; max-width: 70%; z-index:4;">
        <div class="bg-white p-4 m-auto rounded-3">
            <div class="text-center font-georgia">
                <h6 class="fw-bold fs-5 mb-3" style="border-bottom:2px solid #ccc; padding-bottom:12px;">
                    Submission <span class="text-warning">Form</span>
                </h6>
            </div>
            <form action="#">
                <div class="mb-3">
                    <label for="name" class="form-label font-georgia"><span class="text-danger">*</span>Name: </label>
                    <input type="text" class="form-control font-georgia" id="name" name="name">
                    <div class="form-text fs-10 font-georgia">Please use your full name</div>
                </div>
                <div class="mb-3">
                    <label for="nrp" class="form-label font-georgia"><span class="text-danger">*</span>
                        NRP: </label>
                    <input type="text" class="form-control font-georgia" id="nrp" name="nrp">
                    <div class="form-text fs-10 font-georgia">Ex. 5001201129</div>
                </div>
                <div class="mb-3 d-flex justify-content-start">
                    <div class="mr-3">
                        <label for="subject" class="form-label font-georgia">
                            <span class="text-danger">*</span>
                        Subject: </label>
                        <select name="subject" id="subject" class="font-georgia form-control"
                        style="padding-right:80px;">
                            <option class="font-georgia" value="lapres">Final Report</option>
                            <option class="font-georgia" value="tp">Pra-Test</option>
                        </select>
                    </div>
                    <div style="margin-left: 20px">
                        <label for="week" class="form-label font-georgia"><span class="text-danger">*</span>
                        Week: </label>
                        <select name="week" id="week" class="font-georgia form-control">
                            <?php
                                for($i=1;$i<11;$i++){
                                    echo "<option class='font-georgia' value='{$i}'>{$i}</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="file" class="form-label font-georgia"><span class="text-danger">*</span>
                        File: </label>
                    <br>
                    <input type="file" name="file" id="file" class="font-georgia" accept=".pdf">
                </div>
                <div class="mb-3">
                    <a href="{{'/view_lapres'}}" class="font-georgia" target="_blank"
                    style="font-size:11pt; text-decoration:underline;">View submitted file.</a>
                </div>
                <div class="d-flex justify-content-center" style="width:100%;">
                    <button type="submit" class="font-georgia btn btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection