<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
    table {
        counter-reset: tableCount;
    }

    .counterCell:before {
        content: counter(tableCount);
        counter-increment: tableCount;
    }
    </style>
</head>
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid mb-3 fw-bold alert alert-primary">
        <a class="navbar-brand" href="#">
            <img src="https://www.navoditmicrocredit.com/images/logo1.png" alt="Logo" width="30" height="24"
                class="d-inline-block align-text-top" style="
            width: 352px;
            height: 58px;
            ">
        </a>
        <div id="google_translate_element" class="float-right"></div>
    </div>
</nav>
<!-- 
      full_name`, `father_name`, `contact_no`, `email_id`, `present_address`, `dob`, `age`, `religion`, `birth_place`, `marital_status`, `no_child`, `gender -->

<body style="font-family:math;">
    <div class="container">
        <span class=" m-5 ">
            <h3 style="
               padding: 19px;
               font-weight:bold;
               border: 2px solid pink;
               ">Personal Information Form</h3>
        </span>
        <div class="accordion" id="accordionExample">
            <?php echo form_open(base_url().'invitation.php/Complete_form/create'); ?>

            <div class="accordion-item">

                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Employment_Details*
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">

                    <div class="accordion-body row">
                        <div class="col-md-3 col-sm-6">
                            <label for="exampleinputEmail1" class="form-label">Full_Name</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Enter Full Name"
                                id="exampleinputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label for="exampleinputPassword1" class="form-label">Father_Name</label>
                            <input type="text" class="form-control" name="father_name" placeholder="Enter Father's Name"
                                id="exampleinputPassword1">
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label for="exampleinputPassword1" class="form-label">Upload Your Photo</label>
                            <input type="file" class="form-control" name="image" id="image" accept="image/*">
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label for="exampleinputPassword1" class="form-label">Contact_no</label>
                            <input type="tel" class="form-control" name="contact_no" placeholder="Contact no"
                                id="exampleinputPassword1" maxlength="10">
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label for="exampleinputPassword1" class="form-label">Email_id</label>
                            <input type="email" class="form-control" name="email_id" placeholder="Current Email"
                                id="exampleinputPassword1">
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <label for="presentAddress" class="form-label mt-1">Permanent Address</label>
                            <input type="text" class="form-control" name="permanent_address" placeholder="Full address"
                                id="presentAddress" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-3 col-sm-6 mt-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="copyAddressCheckbox"
                                    onclick="copyPresentAddress()">
                                <label class="form-check-label" for="copyAddressCheckbox">Copy Present Address to
                                    Permanent Address</label>
                            </div>
                        </div>

                        <!-- Permanent Address -->
                        <div class="col-md-3 col-sm-6">
                            <label for="permanentAddress" class="form-label mt-1"> Current Address</label>
                            <input type="text" class="form-control" name="present_address" placeholder="Full address"
                                id="permanentAddress" aria-describedby="emailHelp">
                        </div>

                        <!-- Checkbox for copying present address to permanent address -->


                        <div class="col-md-3 col-sm-6">
                            <label for="exampleinputPassword1" class="form-label mt-1">DOB</label>
                            <input type="date" class="form-control" name="dob" placeholder="Enter DOB"
                                id="exampleinputPassword1">
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label for="exampleinputPassword1" class="form-label mt-1">Age</label>
                            <input type="number" class="form-control" name="age" placeholder="Your Age"
                                id="exampleinputPassword1">
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label for="exampleinputPassword1" class="form-label mt-1">Birth place</label>
                            <input type="text" class="form-control" name="birth_place" placeholder="Enter Birth Place"
                                id="exampleinputPassword1">
                        </div>
                        <!-- option -->
                        <div class="col-md-3 col-sm-6">
                            <label for="exampleinputPassword1" class="form-label mt-1">Religion</label>
                            <select class="form-select" name="religion" aria-label="Default select example">
                                <option selected>select</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Sikha">Sikha</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label for="exampleinputPassword1" class="form-label mt-1">marital_status</label>
                            <select class="form-select" name="marital_status" aria-label="Default select example">
                                <option selected>select </option>
                                <option value="Married">Married</option>
                                <option value="Unmarried">Unmarried</option>
                                <!-- <option value="3">Three</option> -->
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label for="exampleinputPassword1" class="form-label mt-1">no_child</label>
                            <select class="form-select" name="no_child" aria-label="Default select example">
                                <option selected>select </option>
                                <option value="1">none</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                                <option value="5">Five</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <label for="exampleinputPassword1" class="form-label mt-1">gender</label>
                            <select class="form-select" name="gender" aria-label="Default select example">
                                <option selected>select </option>
                                <option value="Male">male</option>
                                <option value="Female">Female</option>
                                <!-- <option value="3">Three</option> -->
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Details of Family Member*
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body row">
                        <p class="text-body-secondary">
                            Details of Family Members (Parents / spouse /Children)

                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field_1">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Relationship</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Occupation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="counterCell"></td>
                                        <td>
                                            <input type="text" name="family_details[0][family_name]"
                                                placeholder="Full Name" class="form-control name_list" />
                                        </td>
                                        <td>
                                            <input type="text" name="family_details[0][relationship]"
                                                placeholder="Relationship" class="form-control name_list" />
                                        </td>
                                        <td>
                                            <input type="number" name="family_details[0][age]" placeholder="Enter Age"
                                                class="form-control name_list" />
                                        </td>
                                        <td>
                                            <input type="text" name="family_details[0][occupation]"
                                                placeholder="Occupation" class="form-control name_list" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <td><button type="button" name="add" id="add_1" class="btn btn-success float-end">Add
                                    More</button></td>

                        </div>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Education Details*
                    </button>
                </h2>





                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body row">
                        <p class="text-body-secondary">
                            Education_1 (last qualification to be mentioned first)

                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field_2">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">School_detals</th>
                                    <th scope="col">Passing_year</th>
                                    <th scope="col">From</th>
                                    <th scope="col">To</th>
                                    <th scope="col">Marks</th>
                                </tr>

                                <tr>
                                    <td class="counterCell"></td>
                                    <td>
                                        <input type="text" name="education_details[0][school_detals]"
                                            placeholder="Education Details" class="form-control name_list" />
                                    </td>
                                    <td>
                                        <input type="year" name="education_details[0][passing_year]"
                                            placeholder="Passing Year" class="form-control name_list" />
                                    </td>
                                    <td>
                                        <input type="month" name="education_details[0][from]" placeholder="From"
                                            class="form-control name_list" />
                                    </td>
                                    <td>
                                        <input type="month" name="education_details[0][to]" placeholder="To"
                                            class="form-control name_list" />
                                    </td>
                                    <td>
                                        <input type="number" name="education_details[0][marks]" placeholder="Marks"
                                            class="form-control name_list" />
                                    </td>
                                </tr>

                            </table>
                            <!-- <input  type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> -->
                            <td><button type="button" name="add" id="add_2" class="btn btn-success float-end">Add
                                    More</button></td>
                        </div>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        Employment_Details ( experience)

                    </button>
                </h2>
                <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body row">
                        <p class="text-body-secondary">
                            Employment_Details ( Present / last emoloyment to be mentioned first)

                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field_3">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Company_name</th>
                                    <th scope="col">From</th>
                                    <th scope="col">To</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">At_joining</th>
                                    <th scope="col">At_present</th>
                                    <th scope="col">Reason_for_leaving</th>
                                </tr>
                                <tr>
                                    <td class="counterCell"></td>
                                    <td>
                                        <input type="text" name="Experience_details[0][company_name]"
                                            placeholder="Previous Company" class="form-control name_list" />
                                    </td>
                                    <td>
                                        <input type="month" name="Experience_details[0][from]" placeholder="From"
                                            class="form-control name_list" />
                                    </td>
                                    <td>
                                        <input type="month" name="Experience_details[0][to]" placeholder="To"
                                            class="form-control name_list" />
                                    </td>
                                    <td>
                                        <input type="text" name="Experience_details[0][designation]"
                                            placeholder="Designation" class="form-control name_list" />
                                    </td>
                                    <td>
                                        <input type="number" name="Experience_details[0][at_joining]"
                                            placeholder="CTC Was" class="form-control name_list" />
                                    </td>
                                    <td>
                                        <input type="number" name="Experience_details[0][at_present]"
                                            placeholder="CTC Was" class="form-control name_list" />
                                    </td>
                                    <td>
                                        <input type="text" name="Experience_details[0][reason_for_leaving]"
                                            placeholder="Reason" class="form-control name_list" />
                                    </td>
                                </tr>
                            </table>
                            <!-- <input  type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> -->
                            <td><button type="button" name="add" id="add_3" class="btn btn-success float-end">Add
                                    More</button></td>
                        </div>
                    </div>
                </div>
            </div>




            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        References Details*
                    </button>
                </h2>
                <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body row">
                        <p class="text-body-secondary">
                            References (persons mentioned should hold responsible positions).

                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field_4">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Occupation</th>
                                    <th scope="col">Year_acquaintance</th>
                                </tr>
                                <tr>
                                    <td class="counterCell"></td>
                                    <td>
                                        <input type="text" name="referral_details[0][referal_name]"
                                            placeholder="Refferred By" class="form-control name_list" />
                                    </td>
                                    <td>
                                        <input type="text" name="referral_details[0][relationship_ref]"
                                            placeholder="Relationship" class="form-control name_list" />
                                    </td>
                                    <td>
                                        <input type="date" name="referral_details[0][age_ref]" placeholder="Age"
                                            class="form-control name_list" />
                                    </td>
                                    <td>
                                        <input type="text" name="referral_details[0][occupation_ref]"
                                            placeholder="Occupation" class="form-control name_list" />
                                    </td>


                                </tr>
                            </table>
                            <td><button type="button" name="add" id="add_4" class="btn btn-success float-end">Add
                                    More</button></td>
                            <!-- <input  type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- accodian6 -->

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        Others Details*
                    </button>
                </h2>
                <div id="collapsesix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body row">
                        <div class="col-12 col-md-3">
                            <label for="exampleinputEmail1" class="form-label">Indicates your Position</label>
                            <input type="text" class="form-control" name="position_indicates"
                                placeholder="Enter Full Name" id="exampleinputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label">Are you related to anyone already
                                employed?</label>
                            <select class="form-select" name="company_relate" aria-label="Default select example">
                                <option selected>select </option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                                <option value="5">Five</option>
                            </select>
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label">Current CTC</label>
                            <input type="number" class="form-control" name="Current_ctc" placeholder="Enter Full Name"
                                id="exampleinputPassword1">
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="interview_yes_no" class="form-label">Have you been Interviewed
                                Previously?</label>
                            <select class="form-select" name="interview_anywhere" id="interview_yes_no"
                                aria-label="Default select example" onchange="showDateInput()">
                                <option selected>select </option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div id="interviewDateInput" class="col-12 col-md-3 mt-3 mt-md-0" style="display: none;">
                            <label for="interview_date" class="form-label">Interview Date Was?</label>
                            <input type="date" class="form-control" name="interview_date" id="interview_date"
                                onchange="checkEligibility()">
                        </div>

                        <div id="eligibilityMessage" class="col-12 col-md-3 mt-3 mt-md-0" style="display: none;">
                            <label class="form-label">Eligibility Message</label>
                            <input type="text" class="form-control" id="eligibilityMessageInput" readonly>
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label">Have you been prosecuted in a criminal
                                court?</label>
                            <select class="form-select" name="crime_happend" aria-label="Default select example">
                                <option selected>select </option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label">Treatment by any psychotropic
                                drugs</label>
                            <select class="form-select" name="mental_illness" aria-label="Default select example">
                                <option selected>select </option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>



            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        Regular Employee details*
                    </button>
                </h2>
                <div id="collapseseven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body row">
                        <div class="col-12 col-md-3">
                            <label for="exampleinputEmail1" class="form-label">Department</label>
                            <input type="text" class="form-control" name="Department"
                                placeholder="Enter Departments Name" id="exampleinputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label">Designation</label>
                            <input type="text" class="form-control" name="Designation_1" placeholder="Your Designation"
                                id="exampleinputPassword1">
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label">Date of Joining</label>
                            <input type="date" class="form-control" name="joining_date"
                                placeholder="Select Joining Date" id="exampleinputPassword1">
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label">Company name</label>
                            <input type="text" class="form-control" name="Company_n" placeholder="Present Company name"
                                id="exampleinputPassword1">
                        </div>

                        <div class="col-12 col-md-3 mt-3">
                            <label for="exampleinputEmail1" class="form-label">Location/Branch</label>
                            <input type="text" class="form-control" name="branch_location" placeholder="Branch Location"
                                id="exampleinputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label">Reporting To</label>
                            <input type="text" class="form-control" name="Reporting_to" placeholder="Repoting"
                                id="exampleinputPassword1">
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label">Bank Account Number</label>
                            <input type="number" class="form-control" name="Account_no" placeholder="Provide Acc. No."
                                id="exampleinputPassword1">
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label">Blood Group</label>
                            <input type="text" class="form-control" name="blood_grp" placeholder="Enter Blood Grp"
                                id="exampleinputPassword1">
                        </div>
                    </div>

                </div>
            </div>



            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseight" aria-expanded="false" aria-controls="collapseight">
                        Previous Employment Details*
                    </button>
                </h2>



                <div id="collapseight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body row">

                        <div class="col-12 col-md-3">
                            <label for="exampleinputPassword1" class="form-label mt-1">Universal account Number</label>
                            <input type="text" class="form-control" name="UnivAccNo" placeholder="Universal Acc. no."
                                id="exampleinputPassword1">
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label mt-1">Previous PF Account</label>
                            <input type="text" class="form-control" name="PrevPFAccNo" placeholder="Pf Account"
                                id="exampleinputPassword1">
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label mt-1">Exit Date</label>
                            <input type="date" class="form-control" name="ExitDate" placeholder="Exit Date"
                                id="exampleinputPassword1">
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label mt-1">Scheme Certificate No.</label>
                            <input type="number" class="form-control" name="SchemeCertNo"
                                placeholder="Scheme Certificate No." id="exampleinputPassword1">
                        </div>

                        <div class="col-12 col-md-3 mt-3">
                            <label for="exampleinputPassword1" class="form-label mt-1">Are You International
                                Worker?</label>
                            <select class="form-select" name="IntlWorker" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label mt-1">Bank IfSC Code</label>
                            <input type="text" class="form-control text-capitalize" name="BankIFSC"
                                placeholder="Bank IFSC" id="exampleinputPassword1">
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label mt-1">Aadhar Number</label>
                            <input type="number" class="form-control" name="AadharNo" placeholder=" Enter Aadhar"
                                id="exampleinputPassword1">
                        </div>

                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <label for="exampleinputPassword1" class="form-label mt-1">Permanent Account Number
                                (PAN)</label>
                            <input type="number" class="form-control" name="PAN" placeholder="Enter Pan No."
                                id="exampleinputPassword1">
                        </div>

                    </div>

                </div>
            </div>
            <!-- `school_detals`, `passing_year`, `from`, `to`, `marks` -->

            <input type="submit" name="submit" id="submit" class="btn btn-info float-end m-2" value="Submit" />

        </div>
        </form>
    </div>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script>
    function copyPresentAddress() {
        var presentAddress = document.getElementById("presentAddress").value;
        document.getElementById("permanentAddress").value = presentAddress;
    }

    function showDateInput() {
        var interviewSelect = document.getElementById("interview_yes_no");
        var interviewDateInput = document.getElementById("interviewDateInput");

        if (interviewSelect.value === "Yes") {
            interviewDateInput.style.display = "block";
        } else {
            interviewDateInput.style.display = "none";
        }
    }

    function checkEligibility() {
        var interviewSelect = document.getElementById("interview_yes_no");
        var eligibilityMessageDiv = document.getElementById("eligibilityMessage");
        var eligibilityMessageInput = document.getElementById("eligibilityMessageInput");
        var interviewDateInput = document.getElementById("interview_date");

        if (interviewSelect.value === "Yes" && interviewDateInput.value) {
            eligibilityMessageDiv.style.display = "block";

            // Get the current date
            var currentDate = new Date();

            // Get the interview date
            var interviewDate = new Date(interviewDateInput.value);

            // Add 3 months to the interview date
            interviewDate.setMonth(interviewDate.getMonth() + 3);

            // Compare the dates
            if (interviewDate > currentDate) {
                eligibilityMessageInput.value = "You are eligible!";
            } else {
                eligibilityMessageInput.value = "You are not eligible.";
            }
        } else {
            eligibilityMessageDiv.style.display = "none";
        }
    };


    $(document).ready(function() {
        var i = 1;


        $('#add_1').click(function() {
            i++;
            $('#dynamic_field_1').append('<tr id="row' + i +
                '"> <td class="counterCell"></td><td> <input  type="text" name="family_details[' +
                i +
                '][family_name]" placeholder="Full Name"class="form-control name_list" /></td><td><input  type="text" name="family_details[' +
                i +
                '][relationship]" placeholder="Relationship"class="form-control name_list" /></td><td><input  type="number"name="family_details[' +
                i +
                '][age]" placeholder="Enter age"class="form-control name_list" /></td><td><input  type="text" name="family_details[' +
                i +
                '][occupation]" placeholder="Occupation"class="form-control name_list" /></td><td><button type="button" name="remove" id="' +
                i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $('#add_2').click(function() {
            i++;
            $('#dynamic_field_2').append('<tr id="row' + i +
                '"><td class="counterCell"></td><td><input  type="text" name="education_details[' +
                i +
                '][school_detals]" placeholder="Education Details" class="form-control name_list" /></td><td><input  type="number" name="education_details[' +
                i +
                '][passing_year]" placeholder="Passing Year" class="form-control name_list" /></td><td><input  type="month" name="education_details[' +
                i +
                '][from]" placeholder="From" class="form-control name_list" /></td><td><input  type="month" name="education_details[' +
                i +
                '][to]" placeholder="To" class="form-control name_list" /></td><td><input  type="number" name="education_details[' +
                i +
                '][marks]" placeholder="Marks" class="form-control name_list" /></td><td><button type="button" name="remove" id="' +
                i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $('#add_3').click(function() {
            i++;
            $('#dynamic_field_3').append('<tr id="row' + i +
                '"><td class="counterCell"></td><td><input  type="text" name="Experience_details[' +
                i +
                '][company_name]" placeholder="Previous Company" class="form-control name_list" /></td><td><input  type="text" name="Experience_details[' +
                i +
                '][from]" placeholder="From" class="form-control name_list" /></td><td><input  type="text" name="Experience_details[' +
                i +
                '][to]" placeholder="To" class="form-control name_list" /></td><td><input  type="text" name="Experience_details[' +
                i +
                '][designation]" placeholder="Designation" class="form-control name_list" /></td><td><input  type="text" name="Experience_details[' +
                i +
                '][at_joining]" placeholder="CTC" class="form-control name_list" /></td><td><input  type="text" name="Experience_details[' +
                i +
                '][at_present]" placeholder="CTC" class="form-control name_list" /></td><td><input  type="text" name="Experience_details[' +
                i +
                '][reason_for_leaving]" placeholder="Reason" class="form-control name_list" /></td><td><button type="button" name="remove" id="' +
                i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $('#add_4').click(function() {
            i++;
            $('#dynamic_field_4').append('<tr id="row' + i +
                '"><td class="counterCell"></td> <td><input  type="text" name="referral_details[' +
                i +
                '][referal_name]" placeholder="Refferred By" class="form-control name_list" /></td><td><input  type="text" name="referral_details[' +
                i +
                '][relationship_ref]" placeholder="Relationship" class="form-control name_list" /></td><td><input  type="text" name="referral_details[' +
                i +
                '][age_ref]" placeholder="Age" class="form-control name_list" /></td><td><input  type="text" name="referral_details[' +
                i +
                '][occupation_ref]" placeholder="Occupation" class="form-control name_list" /></td><td><button type="button" name="remove" id="' +
                i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });




        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,hi', // English, Hindi, Bhojpuri
            // layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
    </script>
</body>

</html>