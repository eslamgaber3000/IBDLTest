@extends('layouts.demo')
@section('websit_content')
<style>
    #body {
        background-color: #1d1a3d;
    }

    .big-font-size {
        font-size: 5rem;
    }

    .img-size {
        height: 40%;
    }

    .div_width {
        width: 18%;
    }

    .footer {
        position: absolute;
        bottom: 1%;
    }

    .form-select {
        border: none;
    }

    .form-select:focus {
        border: none;
        box-shadow: none
    }
</style>
<div style="overflow: hidden" id="body">

    <div class="row">
        <div class="d-flex justify-content-center mt-5 ">
            <img width="15%" height="auto" src="../../images/services/white/Qualifications.png" alt="">
        </div>
    </div>
    <div class="row">
        <div class="">
            <h2 style="font-size: 3.5em" class="d-flex justify-content-center mt-4  text-white">
                DEMO EXAM
            </h2>
        </div>
    </div>
    <div class="row bg-white my-5 d-flex justify-content-center " style="height: auto">

        <div class="d-flex justify-content-evenly" style="width: 95%;align-items: baseline;padding:80px 0 120px 0 ">

            <div class="d-flex flex-column justify-content-start px-4 col ">
                <img width="89%" height="auto" src="../../storage/pages/Essential.png" alt="" class="">
                <select onchange="handleDropdownChange(this.value,1)" class="form-select mt-2"
                    aria-label="Choose Language">
                    <option hidden value="0" selected>Choose Language</option>
                    <option value="1"> Arabic</option>
                    <option value="2">English</option>
                    <option value="3">French</option>
                </select>
            </div>



            <div class="d-flex flex-column justify-content-start mt-3 px-4 col">
                <img width="100%" height="auto" src="../../storage/pages/Professional.png" alt="" class="">
                <select onchange="handleDropdownChange(this.value,2)" class="form-select mt-2"
                    aria-label="Choose Language">
                    <option hidden value="0" selected>Choose Language</option>
                    <option value="1"> Arabic</option>
                    <option value="2">English</option>
                    <option value="3">French</option>
                </select>
            </div>


            <div class="d-flex flex-column justify-content-start mt-3 px-4 col">
                <img width="71%" height="auto" src="../../storage/pages/Master.png" alt="" class="">
                <select onchange="handleDropdownChange(this.value,3)" class="form-select mt-2"
                    aria-label="Choose Language">
                    <option hidden value="0" selected>Choose Language</option>
                    <option value="1"> Arabic</option>
                    <option value="2">English</option>
                </select>
            </div>
            <div class="d-flex flex-column justify-content-start mt-3 px-4 col">
                <img width="50%" height="auto" src="../../storage/pages/CE.png" alt="" class="">
                <select onchange="handleDropdownChange(this.value,4)" class="form-select mt-2"
                    aria-label="Choose Language">
                    <option hidden value="0" selected>Choose Language</option>
                    <option value="2">English</option>
                </select>
            </div>
            <div class="d-flex flex-column justify-content-start mt-3 px-4 col">
                <img width="50%" height="auto" src="../../storage/pages/CIE.png" alt="" class="">
                <select onchange="handleDropdownChange(this.value,5)" class="form-select mt-2"
                    aria-label="Choose Language">
                    <option hidden value="0" selected>Choose Language</option>
                    <option value="1"> Arabic</option>
                    <option value="2">English</option>
                </select>
                <select onclick="handleDropdownChange(language,5,this.value)" class="form-select "
                    aria-label="Choose Part">
                    <option hidden value="0" selected>Choose Part</option>
                    <option value="1"> Operation Management</option>
                    <option value="2">Supply Chain Management</option>
                    <option value="3">Project Management</option>
                    <option value="4">Quality Management</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="d-flex flex-column align-items-center">
            <div id="selected-cert" class="d-flex justify-content-center mt-5 fs-4 text-white">
                CHOOSE YOUR EXAM AND LANGUAGE
            </div>
            <button type="button" onclick="startExam()" style="background-color: #e30618;color:white"
                class="btn  mt-5">Start
                Exam</button>
        </div>
    </div>

    <div class="row">
        <footer class="">
            <div style="background-color: #e30618;font-size:13px" class=" d-flex justify-content-center text-white ">
                2023 IBDL
                Learning Group. All Rights
                Reserved</div>
        </footer>
        <hr>
    </div>

</div>


<script>
    const certText = document.getElementById("selected-cert");
    let language = 0 ;
    let level = "" ;
    let part = "";
    function handleDropdownChange(lang,selectedDropdown,ciePart) {
        if(selectedDropdown != 0){
            language = lang;
            if(ciePart){
                part = ciePart ;
            }
            switch(selectedDropdown) {
                case 1:
                    if(lang == '1'){
                        level = 3;
                        certText.innerText  = 'YOU CHOSE TO TRY IBDL ESSENTIAL EXAM IN ARABIC'
                    }else if(lang == '2'){
                        level = 1;
                        certText.innerText  = 'YOU CHOSE TO TRY IBDL ESSENTIAL EXAM IN ENGLISH'
                    }else if(lang == '3'){
                        level = 9;
                        certText.innerText  = 'YOU CHOSE TO TRY IBDL ESSENTIAL EXAM IN FRENCH'
                    }
                    break;
                case 2:
                    if(lang == '1'){
                        level = 21;
                        certText.innerText  = 'YOU CHOSE TO TRY IBDL PROFESSIONAL EXAM IN ARABIC'
                    }else if(lang == '2'){
                        level = 2;
                        certText.innerText  = 'YOU CHOSE TO TRY IBDL PROFESSIONAL EXAM IN ENGLISH'
                    }else if(lang == '3'){
                        level = 24;
                        certText.innerText  = 'YOU CHOSE TO TRY IBDL PROFESSIONAL EXAM IN FRENCH'
                    }
                    break;
                case 3:
                if(lang == '1'){
                        level = 22;
                        certText.innerText  = 'YOU CHOSE TO TRY IBDL MASTER EXAM IN ARABIC'
                    }else if(lang == '2'){
                        level = 20;
                        certText.innerText  = 'YOU CHOSE TO TRY IBDL MASTER EXAM IN ENGLISH'
                    }
                    break;
                case 4:
                if(lang == '2'){
                    level = 30;
                        certText.innerText  = 'YOU CHOSE TO TRY CE EXAM IN ENGLISH'
                    }
                    break;
                case 5:
                    if(lang == '1'){
                        if(part == 1){
                            level = 31
                            certText.innerText  = 'YOU CHOSE TO TRY CIE EXAM Part 1 IN ARABIC'
                        }else if(part == 2){
                            level = 32
                            certText.innerText  = 'YOU CHOSE TO TRY CIE EXAM Part 2 IN ARABIC'
                        }else if(part == 3){
                            level = 33
                            certText.innerText  = 'YOU CHOSE TO TRY CIE EXAM Part 3 IN ARABIC'
                        }else if(part == 4){
                            level = 34
                            certText.innerText  = 'YOU CHOSE TO TRY CIE EXAM Part 4 IN ARABIC'
                        }else{
                            certText.innerText  = 'YOU CHOSE TO TRY CIE EXAM IN ARABIC, PLEASE SELECT THE PART'
                        }
                    }else if(lang == '2'){
                        if(part == 1){
                            level = 35
                            certText.innerText  = 'YOU CHOSE TO TRY CIE EXAM Part 1 IN ENGLISH'
                        }else if(part == 2){
                            level = 36
                            certText.innerText  = 'YOU CHOSE TO TRY CIE EXAM Part 2 IN ENGLISH'
                        }else if(part == 3){
                            level = 37
                            certText.innerText  = 'YOU CHOSE TO TRY CIE EXAM Part 3 IN ENGLISH'
                        }else if(part == 4){
                            level = 38
                            certText.innerText  = 'YOU CHOSE TO TRY CIE EXAM Part 4 IN ENGLISH'
                        }else{
                            certText.innerText  = 'YOU CHOSE TO TRY CIE EXAM IN ENGLISH, PLEASE SELECT THE PART'
                        }
                    }else{
                        certText.innerText  = 'PLEASE SELECT THE LANGUAGE FIRST'
                    }
                    break;
            }
        }
    }
 
    function startExam() {
        console.log(level);
            if (level !== "") {
                window.location.href = "/Demo/Exam/" + level;
            } else {
                alert("Please select a level and language before starting the exam.");
            }
        }


</script>
@endsection