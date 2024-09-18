@extends('layout-new')

@section('websit_content')

<section class="inner-hero">
    <img style="width: -webkit-fill-available;" src="{{ asset('storage/pages/accreditations.jpg') }}" alt="">
    <div class="container">
        <h1 class="hero-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">
            Become Accredited
        </h1>
        <h1 class="hero-subtitle aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">
            Our Services/Become Accredited
        </h1>
    </div>
    <div class="icon-section">
        <img class="icon" src="{{ asset('storage/pages/services.png') }}" alt="">
    </div>
</section>

<style>
    .steps {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 2rem;
        position: relative;
    }

    .step-button {
        width: 150px;
        height: auto;
        padding: 10px 20px;
        border: none;
        color: white;
        background-color: #e30618;
        transition: .4s;
    }

    .step-button[aria-expanded="true"] {
        width: 150px;
        height: auto;
        padding: 10px 20px;
        border: none;
        color: white;
        background-color: #e30618;
        transition: .4s;
    }

    .done {
        background-color: var(--prm-color);
        color: #fff;
    }

    .step-item {
        z-index: 10;
        text-align: center;
        margin: 0 1em;
    }

    #progress {
        -webkit-appearance: none;
        position: absolute;
        width: 95%;
        z-index: 5;
        height: 10px;
        margin-left: 18px;
        margin-bottom: 18px;
    }

    /* to customize progress bar */
    #progress::-webkit-progress-value {
        background-color: var(--prm-color);
        transition: .5s ease;
    }

    #progress::-webkit-progress-bar {
        background-color: var(--prm-gray);

    }
</style>
<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                @if (Session::has('message'))
                <div class="modal" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="mod-header d-flex">
                                <h2 style="color: white;" class="modal-title m-auto" id="exampleModalLabel"> <i
                                        class="fa-solid fa-circle-check fa-lg" style="color: white;"></i> Success
                                </h2>
                                <button onclick="document.getElementById('exampleModal1').style.display = 'none'"
                                    type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body my-3">
                                <h4> <b> Many thanks for your registration request! </b></h4>

                                <h6>
                                    Please check your emails within a Week whether you have received a message with a
                                    confirmation link. Follow the instructions in the email to complete the registration
                                    request.</h6>
                            </div>
                            <div style="background-color: white" class="modal-footer py-3">

                                <a href="/">
                                    <button type="button" style="background-color: #e30618;color: white;"
                                        class="btn ms-4">Back to Home Page</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    (function() {
                    var modalx = document.getElementById("exampleModal1");
                    modalx.style.display = "block";
                    })();
                </script>
                @endif

                <form method="POST" action="{{ route('corporate_acc') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <h3 style="color:#e30618">Become one of our Accrediting Business Administration
                                            Standards </h3>
                                        <p class="fw-bold">Become one of our services providers network</p>
                                        <input name="type" type="hidden" value="{{$type}}">
                                        {{-- <input name="train_center" type="hidden" value="1"> --}}
                                        <div class="mb-3">
                                            <input required name="org_name" type="text" class="form-control"
                                                aria-label="Organization Name" id="org-name"
                                                placeholder="Organization Name">
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col ps-0">
                                                <input name="org_phone" required type="tel" class="form-control"
                                                    placeholder="Phone" aria-label="Phone">
                                            </div>
                                            <div class="col pe-0">
                                                <input name="org_email" required type="email" class="form-control"
                                                    placeholder="Email" aria-label="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col ps-0">
                                                <select name="country" required style="color:#212529"
                                                    class="form-select" aria-label="Select Your Country">
                                                    <option style="color:#212529" selected> Select Your Country
                                                    </option>
                                                    <?php
                                                    use App\Models\Country;
                                                    $all_country=Country::orderBy('short_name','asc')->get();
                                                    foreach ($all_country as $all_countries) { ?>
                                                    <option value="{{ $all_countries->short_name }}">
                                                        {{ $all_countries->short_name }}
                                                    </option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                            <div class="col pe-0">
                                                <input name="city" required type="text" class="form-control"
                                                    placeholder="City" aria-label="City">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input name="website" type="text" class="form-control"
                                                aria-label="Website URL" id="org-name" placeholder="Website URL">
                                        </div>
                                        <div class="mb-3 d-flex align-items-baseline">
                                            <p class="fw-bold col-5">Upload Organization's Tax Registration <b
                                                    class="red">*</b> </p>
                                            <input name="tax_reg" required class=" file-input col-5" type="file"
                                                id="formFile">
                                        </div>
                                        <div class="mb-3 d-flex align-items-baseline">
                                            <p class="fw-bold col-5">Upload Organization's Commercial Registration<b
                                                    class="red">*</b></p>
                                            <input name="commercial_reg" required class=" file-input col-5" type="file"
                                                id="formFile">
                                        </div>
                                        <div class="mb-3 d-flex align-items-baseline">
                                            <p class="fw-bold col-5">Upload Organization's License<b class="red">*</b>
                                            </p>
                                            <input name="org_lic" class=" file-input col-5" type="file" id="formFile">
                                        </div>
                                        <div class="mb-3 d-flex align-items-baseline">
                                            <p class="fw-bold col-5">Upload Organization's Quality Manual</p>
                                            <input name="Qlty_man" class=" file-input col-5" type="file" id="formFile">
                                        </div>
                                        <div class="mb-5 d-flex align-items-baseline">
                                            <p class="fw-bold col-5">Upload Accreditation</p>
                                            <input name="accreditation" class=" file-input col-5" type="file"
                                                id="formFile">
                                        </div>
                                        <h3 class="mt-2 mb-3" style="color:#e30618">Contact Person</h3>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <input name="con_name" required type="text" class="form-control"
                                                    placeholder="Name" aria-label="Name">
                                            </div>
                                            <div class="col">
                                                <input name="con_title" required type="text" class="form-control"
                                                    placeholder="Title" aria-label="Title">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <input name="con_phone" required type="tel" class="form-control"
                                                    placeholder="Phone" aria-label="Phone">
                                            </div>
                                            <div class="col">
                                                <input name="con_email" required type="email" class="form-control"
                                                    placeholder="Email" aria-label="Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body" style="height: 740px; overflow:auto">
                                        <ol>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Organizational Structure and Governance:</b></p>
                                                    <fieldset id="group1">
                                                        <div class="form-check">
                                                            <input required class="form-check-input" type="radio"
                                                                value="Clear organizational chart and hierarchy"
                                                                name="group1" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Clear organizational chart and hierarchy.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                value="Defined roles and responsibilities for each position"
                                                                required class="form-check-input" type="radio"
                                                                name="group1" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Defined roles and responsibilities for each position.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                value="Regular review and update of organizational structure"
                                                                required class="form-check-input" type="radio"
                                                                name="group1" id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Regular review and update of organizational structure.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Policies and Procedures:</b></p>
                                                    <fieldset id="group2">
                                                        <div class="form-check">
                                                            <input value="Comprehensive employee handbook" required
                                                                class="form-check-input" type="radio" name="group2"
                                                                id="flexRadioDefault4">
                                                            <label class="form-check-label" for="flexRadioDefault4">
                                                                Comprehensive employee handbook.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                value=" Documented policies and procedures for key processes (e.g.,HR,finance, IT)"
                                                                required class="form-check-input" type="radio"
                                                                name="group2" id="flexRadioDefault5">
                                                            <label class="form-check-label" for="flexRadioDefault5">
                                                                Documented policies and procedures for key processes
                                                                (e.g.,
                                                                HR,
                                                                finance, IT). </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                value="Regular review and update of policies to ensure compliance."
                                                                required class="form-check-input" type="radio"
                                                                name="group2" id="flexRadioDefault6">
                                                            <label class="form-check-label" for="flexRadioDefault6">
                                                                Regular review and update of policies to ensure
                                                                compliance.
                                                            </label>
                                                        </div>
                                                    </fieldset>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Communication:</b></p>
                                                    <fieldset id="group3">
                                                        <div class="form-check">
                                                            <input value="Effective internal communication channels."
                                                                required class="form-check-input" type="radio"
                                                                name="group3" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Effective internal communication channels.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Regular team meetings and updates." required
                                                                class="form-check-input" type="radio" name="group3"
                                                                id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Regular team meetings and updates.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                value="Clear channels for upward and downward communication."
                                                                required class="form-check-input" type="radio"
                                                                name="group3" id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Clear channels for upward and downward communication.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Financial Management:</b></p>
                                                    <fieldset id="group4">
                                                        <div class="form-check">
                                                            <input value="Budgeting process in place." required
                                                                class="form-check-input" type="radio" name="group4"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Budgeting process in place.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Regular financial reporting and analysis."
                                                                required class="form-check-input" type="radio"
                                                                name="group4" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Regular financial reporting and analysis.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                value="Adherence to accounting standards and regulations."
                                                                required class="form-check-input" type="radio"
                                                                name="group4" id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Adherence to accounting standards and regulations.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Human Resources:</b></p>
                                                    <fieldset id="group5">
                                                        <div class="form-check">
                                                            <input value="Recruitment and onboarding processes."
                                                                required class="form-check-input" type="radio"
                                                                name="group5" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Recruitment and onboarding processes.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Employee performance management system."
                                                                required class="form-check-input" type="radio"
                                                                name="group5" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Employee performance management system.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Training and development programs." required
                                                                class="form-check-input" type="radio" name="group5"
                                                                id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Training and development programs.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>IT and Data Security:</b></p>
                                                    <fieldset id="group6">
                                                        <div class="form-check">
                                                            <input value="Data protection policies in place." required
                                                                class="form-check-input" type="radio" name="group6"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Data protection policies in place.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Regular IT security audits." required
                                                                class="form-check-input" type="radio" name="group6"
                                                                id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Regular IT security audits.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Disaster recovery plan." required
                                                                class="form-check-input" type="radio" name="group6"
                                                                id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Disaster recovery plan.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Quality Assurance:</b></p>
                                                    <fieldset id="group7">
                                                        <div class="form-check">
                                                            <input
                                                                value="Quality control measures for products/services."
                                                                required class="form-check-input" type="radio"
                                                                name="group7" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Quality control measures for products/services.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                value="Customer feedback and satisfaction monitoring."
                                                                required class="form-check-input" type="radio"
                                                                name="group7" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Customer feedback and satisfaction monitoring.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Continuous improvement processes." required
                                                                class="form-check-input" type="radio" name="group7"
                                                                id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Continuous improvement processes.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Legal Compliance:</b></p>
                                                    <fieldset id="group8">
                                                        <div class="form-check">
                                                            <input value="Regular legal compliance audits." required
                                                                class="form-check-input" type="radio" name="group8"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Regular legal compliance audits.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                value="Documentation of compliance with industry regulations."
                                                                required class="form-check-input" type="radio"
                                                                name="group8" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Documentation of compliance with industry regulations.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                value="Employee training on legal and ethical standards."
                                                                required class="form-check-input" type="radio"
                                                                name="group8" id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Employee training on legal and ethical standards.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Risk Management:</b></p>
                                                    <fieldset id="group9">
                                                        <div class="form-check">
                                                            <input value="Risk assessment and mitigation strategies."
                                                                required class="form-check-input" type="radio"
                                                                name="group9" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Risk assessment and mitigation strategies.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Insurance coverage and review." required
                                                                class="form-check-input" type="radio" name="group9"
                                                                id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Insurance coverage and review.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Crisis management plan." required
                                                                class="form-check-input" type="radio" name="group9"
                                                                id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Crisis management plan.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Ethical Standards:</b></p>
                                                    <fieldset id="group10">
                                                        <div class="form-check">
                                                            <input value="Code of conduct for employees." required
                                                                class="form-check-input" type="radio" name="group10"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Code of conduct for employees.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Whistleblower policy." required
                                                                class="form-check-input" type="radio" name="group10"
                                                                id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Whistleblower policy.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Ethical decision-making training." required
                                                                class="form-check-input" type="radio" name="group10"
                                                                id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Ethical decision-making training.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Customer Relations:</b></p>
                                                    <fieldset id="group11">
                                                        <div class="form-check">
                                                            <input value="Customer service standards." required
                                                                class="form-check-input" type="radio" name="group11"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Customer service standards.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Process for handling customer complaints."
                                                                required class="form-check-input" type="radio"
                                                                name="group11" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Process for handling customer complaints.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Regular customer feedback collection."
                                                                required class="form-check-input" type="radio"
                                                                name="group11" id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Regular customer feedback collection.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Supply Chain Management:</b></p>
                                                    <fieldset id="group12">
                                                        <div class="form-check">
                                                            <input value="Vendor selection and management procedures."
                                                                required class="form-check-input" type="radio"
                                                                name="group12" id="flexRadioDefault4">
                                                            <label class="form-check-label" for="flexRadioDefault4">
                                                                Vendor selection and management procedures.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                value="Supply chain sustainability practices. </label>"
                                                                required class="form-check-input" type="radio"
                                                                name="group12" id="flexRadioDefault5">
                                                            <label class="form-check-label" for="flexRadioDefault5">
                                                                Supply chain sustainability practices. </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Emergency supply chain contingency plans."
                                                                required class="form-check-input" type="radio"
                                                                name="group12" id="flexRadioDefault6">
                                                            <label class="form-check-label" for="flexRadioDefault6">
                                                                Emergency supply chain contingency plans.
                                                            </label>
                                                        </div>
                                                    </fieldset>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Environmental Sustainability:</b></p>
                                                    <fieldset id="group13">
                                                        <div class="form-check">
                                                            <input value="Environmental impact assessment." required
                                                                class="form-check-input" type="radio" name="group13"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Environmental impact assessment.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Sustainability policies and practices."
                                                                required class="form-check-input" type="radio"
                                                                name="group13" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Sustainability policies and practices.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Regular environmental audits." required
                                                                class="form-check-input" type="radio" name="group13"
                                                                id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Regular environmental audits.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Health and Safety:</b></p>
                                                    <fieldset id="group14">
                                                        <div class="form-check">
                                                            <input value="Workplace safety policies." required
                                                                class="form-check-input" type="radio" name="group14"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Workplace safety policies.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Regular safety training for employees."
                                                                required class="form-check-input" type="radio"
                                                                name="group14" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Regular safety training for employees.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Emergency response plans." required
                                                                class="form-check-input" type="radio" name="group14"
                                                                id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Emergency response plans.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Documentation and Record Keeping:</b></p>
                                                    <fieldset id="group15">
                                                        <div class="form-check">
                                                            <input value="Document control procedures." required
                                                                class="form-check-input" type="radio" name="group15"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Document control procedures.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Secure and organized record-keeping system."
                                                                required class="form-check-input" type="radio"
                                                                name="group15" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Secure and organized record-keeping system.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                value="Regular review and disposal of obsolete records."
                                                                required class="form-check-input" type="radio"
                                                                name="group15" id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Regular review and disposal of obsolete records.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Performance Metrics and Key Performance Indicators (KPIs):</b>
                                                    </p>
                                                    <fieldset id="group16">
                                                        <div class="form-check">
                                                            <input value="Defined KPIs for each department." required
                                                                class="form-check-input" type="radio" name="group16"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Defined KPIs for each department.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                value="Regular performance evaluations and adjustments."
                                                                required class="form-check-input" type="radio"
                                                                name="group16" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Regular performance evaluations and adjustments.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Metrics aligned with organizational goals."
                                                                required class="form-check-input" type="radio"
                                                                name="group16" id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Metrics aligned with organizational goals.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Continuous Improvement:</b></p>
                                                    <fieldset id="group17">
                                                        <div class="form-check">
                                                            <input
                                                                value="Mechanism for collecting and implementing employee"
                                                                required class="form-check-input" type="radio"
                                                                name="group17" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Mechanism for collecting and implementing employee
                                                                feedback.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Regular review of processes for efficiency."
                                                                required class="form-check-input" type="radio"
                                                                name="group17" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Regular review of processes for efficiency.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Innovation and improvement initiatives."
                                                                required class="form-check-input" type="radio"
                                                                name="group17" id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Innovation and improvement initiatives.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Training and Development:</b></p>
                                                    <fieldset id="group18">
                                                        <div class="form-check">
                                                            <input value="Employee training needs assessment." required
                                                                class="form-check-input" type="radio" name="group18"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Employee training needs assessment.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                value="Training programs aligned with organizational goals."
                                                                required class="form-check-input" type="radio"
                                                                name="group18" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Training programs aligned with organizational goals.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Evaluation of training effectiveness."
                                                                required class="form-check-input" type="radio"
                                                                name="group18" id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Evaluation of training effectiveness.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Social Responsibility and Community Engagement:</b></p>
                                                    <fieldset id="group19">
                                                        <div class="form-check">
                                                            <input value="Corporate social responsibility initiatives."
                                                                required class="form-check-input" type="radio"
                                                                name="group19" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Corporate social responsibility initiatives.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Community engagement programs" required
                                                                class="form-check-input" type="radio" name="group19"
                                                                id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Community engagement programs. </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="Ethical sourcing practices." required
                                                                class="form-check-input" type="radio" name="group19"
                                                                id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Ethical sourcing practices.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-5">
                                                    <p><b>Technology Adoption and Integration:</b></p>
                                                    <fieldset id="group20">
                                                        <div class="form-check">
                                                            <input value="Regular assessment of new technologies."
                                                                required class="form-check-input" type="radio"
                                                                name="group20" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Regular assessment of new technologies.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input value="IT infrastructure updates and maintenance."
                                                                required class="form-check-input" type="radio"
                                                                name="group20" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                IT infrastructure updates and maintenance.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                value="Integration of technology to improve efficiency."
                                                                required class="form-check-input" type="radio"
                                                                name="group20" id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Integration of technology to improve efficiency.
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="steps mt-5">
                            <div class="step-item">
                                <button class="step-button text-center" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    First Step
                                </button>
                            </div>
                            <div class="step-item">
                                <button class="step-button text-center collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Second Step
                                </button>

                            </div>
                        </div>
                    </div>








                    <div class="text-end mt-5">
                        <button type="submit" class="btn acc-btn">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection
<script>
    const stepButtons = document.querySelectorAll('.step-button');
    const progress = document.querySelector('#progress');
    
    Array.from(stepButtons).forEach((button,index) => {
        button.addEventListener('click', () => {
            progress.setAttribute('value', index * 100 /(stepButtons.length - 1) );//there are 3 buttons. 2 spaces.
    
            stepButtons.forEach((item, secindex)=>{
                if(index > secindex){
                    item.classList.add('done');
                }
                if(index < secindex){
                    item.classList.remove('done');
                }
            })
        })
    })
</script>