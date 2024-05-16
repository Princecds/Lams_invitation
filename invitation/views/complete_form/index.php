<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/minty/bootstrap.min.css">
    <style>
    .multisteps-form__progress {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(0, 1fr));
    }

    .multisteps-form__progress-btn {
        transition-property: all;
        transition-duration: 0.15s;
        transition-timing-function: linear;
        transition-delay: 0s;
        position: relative;
        padding-top: 20px;
        color: rgba(108, 117, 125, 0.7);
        text-indent: -9999px;
        border: none;
        background-color: transparent;
        outline: none !important;
        cursor: pointer;
    }

    @media (min-width: 500px) {
        .multisteps-form__progress-btn {
            text-indent: 0;
        }
    }

    .multisteps-form__progress-btn:before {
        position: absolute;
        top: 0;
        left: 50%;
        display: block;
        width: 13px;
        height: 13px;
        content: '';
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        transition: all 0.15s linear 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
        transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
        transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
        border: 2px solid currentColor;
        border-radius: 50%;
        background-color: #fff;
        box-sizing: border-box;
        z-index: 3;
    }

    .multisteps-form__progress-btn:after {
        position: absolute;
        top: 5px;
        left: calc(-50% - 13px / 2);
        transition-property: all;
        transition-duration: 0.15s;
        transition-timing-function: linear;
        transition-delay: 0s;
        display: block;
        width: 100%;
        height: 2px;
        content: '';
        background-color: currentColor;
        z-index: 1;
    }

    .multisteps-form__progress-btn:first-child:after {
        display: none;
    }

    .multisteps-form__progress-btn.js-active {
        color: #007bff;
    }

    .multisteps-form__progress-btn.js-active:before {
        -webkit-transform: translateX(-50%) scale(1.2);
        transform: translateX(-50%) scale(1.2);
        background-color: currentColor;
    }

    .multisteps-form__form {
        position: relative;
    }

    .multisteps-form__panel {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 0;
        opacity: 0;
        visibility: hidden;
    }

    .multisteps-form__panel.js-active {
        height: auto;
        opacity: 1;
        visibility: visible;
    }

    /* Define your own CSS3 animations in the CSS. */

    .multisteps-form__panel[data-animation="scaleIn"] {
        -webkit-transform: scale(0.9);
        transform: scale(0.9);
    }

    .multisteps-form__panel[data-animation="scaleIn"].js-active {
        transition-property: all;
        transition-duration: 0.2s;
        transition-timing-function: linear;
        transition-delay: 0s;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    </style>
</head>

<body>

    <div class="multisteps-form">
        <!--progress bar-->
        <div class="row">
            <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress">
                    <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">User
                        Info</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Address">Address</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Order Info">SMTP Server</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Comments">Conform</button>
                </div>
                <div id="div"></div>
                <?php if ($this->session->flashdata('key')) : ?>
                <!--<div class="alert alert-success">-->
                <?php echo $this->session->flashdata('key'); ?>
                <!--</div>-->
                <?php endif; ?>

                <!--flashdata-->
            </div>
        </div>
        <!--form panels-->
        <div class="row">
            <div class="col-12 col-lg-8 m-auto">
                <!-- <form class="multisteps-form__form"> -->
                <form class="multisteps-form__form" hx-post="<?php echo base_url();?>auth/registration_details"
                    hx-target="#div">
                    <!--single form panel-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">User Registration </h3>

                        <div class="multisteps-form__content">
                            <div class="form-row mt-8">
                                <div class="col-12 col-sm-12">
                                    <input class="multisteps-form__input form-control" type="text" name="user_id"
                                        placeholder="User ID" />
                                    <?php if (isset($validation) && $validation->hasError('user_id')) echo $validation->getError('user_id'); ?>

                                </div>

                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-6">
                                    <input class="multisteps-form__input form-control" type="text" name="first_name"
                                        placeholder="First Name" />
                                </div>
                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="text" name="last_name"
                                        placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-6">
                                    <input class="multisteps-form__input form-control" type="text" name="phone_no"
                                        placeholder="Phone No" />
                                </div>
                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="email" name="email"
                                        placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-6">
                                    <input class="multisteps-form__input form-control" type="password" id="pass"
                                        name="pass" placeholder="Password" />
                                </div>
                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="password" id="repass"
                                        name="repass" placeholder="Repeat Password" />
                                </div>
                            </div>
                            <div id="password-mismatch" style="display:none; color:red;">Passwords do not match.</div>
                            <div class="button-row d-flex mt-4">
                                <button class="btn btn-primary ml-auto js-btn-next" type="btn"
                                    title="Next">Next</button>
                            </div>
                        </div>
                    </div>
                    <!--single form panel-->

                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Your Address</h3>
                        <!--<div id="div2"></div>-->
                        <div class="multisteps-form__content">
                            <div class="form-row mt-4">
                                <div class="col">
                                    <input class="multisteps-form__input form-control" type="text" name="address"
                                        placeholder="Address 1" />
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col">
                                    <input class="multisteps-form__input form-control" type="text" name="address2"
                                        placeholder="Address 2" />
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-6">
                                    <input class="multisteps-form__input form-control" type="text" name="city"
                                        placeholder="City" />
                                </div>
                                <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                    <select class="multisteps-form__select form-control" name="state">
                                        <option selected="selected">State...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" name="zip" type="text"
                                        placeholder="Zip" />
                                </div>
                            </div>
                            <div class="button-row d-flex mt-4">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                <button class="btn btn-primary ml-auto js-btn-next" type="submit"
                                    title="Next">Next</button>
                            </div>
                        </div>
                    </div>
                    <!--single form panel-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">SMTP Configuration</h3>
                        <div class="multisteps-form__content">
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-6">
                                    <input class="multisteps-form__input form-control" type="text" name="hostname"
                                        placeholder="Server HostName" />
                                </div>
                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="text" name="username"
                                        placeholder="Username" />
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-6">
                                    <input class="multisteps-form__input form-control" type="text" name="smtp_pass"
                                        placeholder="Password" />
                                </div>
                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="email" name="port_name"
                                        placeholder="Port No" />
                                </div>
                            </div>

                            <div class="button-row d-flex mt-4">
                                <button class="btn btn-primary ml-auto js-btn-next" type="submit"
                                    title="Next">Next</button>
                            </div>
                        </div>
                    </div>



                    <!--single form panel-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Conform Registration</h3>
                        <div class="multisteps-form__content">
                            <div class="form-row mt-4">
                                <h5>m*s*s*K E*mail...</h5>
                            </div>
                            <div class="form-row mt-4 ">
                                <div class="form-group">
                                    <input class="multisteps-form__textarea form-control" name="conf_otp"
                                        placeholder="Enter otp">
                                    <small id="emailHelp" class="form-text text-muted">
                                        <div id="response">
                                            <!-- Data will be loaded here -->
                                        </div>
                                    </small>
                                </div>



                            </div>


                            <button class="btn btn-primary float-center" type="submit"
                                hx-post="https://test.primetechnext.in/auth/otp_generate" hx-target="#response">Request
                                OTP</button>

                            <!--<button type="button" class="btn btn-primary">Primary</button>-->
                            <div class="button-row d-flex mt-4">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                <button class="btn btn-success ml-auto" type="submit" title="Send">Submit</button>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    <script>
    const DOMstrings = {
        stepsBtnClass: 'multisteps-form__progress-btn',
        stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
        stepsBar: document.querySelector('.multisteps-form__progress'),
        stepsForm: document.querySelector('.multisteps-form__form'),
        stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
        stepFormPanelClass: 'multisteps-form__panel',
        stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
        stepPrevBtnClass: 'js-btn-prev',
        stepNextBtnClass: 'js-btn-next'
    };

    //remove class from a set of items
    const removeClasses = (elemSet, className) => {
        elemSet.forEach(elem => {
            elem.classList.remove(className);
        });
    };
    //return exect parent node of the element
    const findParent = (elem, parentClass) => {
        let currentNode = elem;
        while (!currentNode.classList.contains(parentClass)) {
            currentNode = currentNode.parentNode;
        }
        return currentNode;
    };
    //get active button step number
    const getActiveStep = elem => {
        return Array.from(DOMstrings.stepsBtns).indexOf(elem);
    };
    //set all steps before clicked (and clicked too) to active
    const setActiveStep = activeStepNum => {
        //remove active state from all the state
        removeClasses(DOMstrings.stepsBtns, 'js-active');
        //set picked items to active
        DOMstrings.stepsBtns.forEach((elem, index) => {
            if (index <= activeStepNum) {
                elem.classList.add('js-active');
            }
        });
    };
    //get active panel
    const getActivePanel = () => {
        let activePanel;
        DOMstrings.stepFormPanels.forEach(elem => {
            if (elem.classList.contains('js-active')) {
                activePanel = elem;
            }
        });
        return activePanel;
    };
    //open active panel (and close unactive panels)
    const setActivePanel = activePanelNum => {
        //remove active class from all the panels
        removeClasses(DOMstrings.stepFormPanels, 'js-active');
        //show active panel
        DOMstrings.stepFormPanels.forEach((elem, index) => {
            if (index === activePanelNum) {
                elem.classList.add('js-active');
                setFormHeight(elem);
            }
        });
    };
    //set form height equal to current panel height
    const formHeight = activePanel => {
        const activePanelHeight = activePanel.offsetHeight;
        DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
    };
    const setFormHeight = () => {
        const activePanel = getActivePanel();
        formHeight(activePanel);
    };
    //STEPS BAR CLICK FUNCTION
    DOMstrings.stepsBar.addEventListener('click', e => {
        //check if click target is a step button
        const eventTarget = e.target;
        if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
            return;
        }
        //get active button step number
        const activeStep = getActiveStep(eventTarget);
        //set all steps before clicked (and clicked too) to active
        setActiveStep(activeStep);
        //open active panel
        setActivePanel(activeStep);
    });
    //PREV/NEXT BTNS CLICK
    DOMstrings.stepsForm.addEventListener('click', e => {
        const eventTarget = e.target;
        //check if we clicked on `PREV` or NEXT` buttons
        if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList
                .contains(`${DOMstrings.stepNextBtnClass}`))) {
            return;
        }
        //find active panel
        const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);
        let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);
        //set active step and active panel onclick
        if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
            activePanelNum--;
        } else {
            activePanelNum++;
        }
        setActiveStep(activePanelNum);
        setActivePanel(activePanelNum);
    });
    //SETTING PROPER FORM HEIGHT ONLOAD
    window.addEventListener('load', setFormHeight, false);
    //SETTING PROPER FORM HEIGHT ONRESIZE
    window.addEventListener('resize', setFormHeight, false);


    // <script>
    document.addEventListener("DOMContentLoaded", function() {
        const passInput = document.getElementById("pass");
        const repassInput = document.getElementById("repass");
        const mismatchMessage = document.getElementById("password-mismatch");

        repassInput.addEventListener("keyup", function() {
            const passValue = passInput.value;
            const repassValue = repassInput.value;

            if (passValue !== repassValue) {
                mismatchMessage.style.display = "block";
            } else {
                mismatchMessage.style.display = "none";
            }
        });
    });
    </script>

</body>

</html>s