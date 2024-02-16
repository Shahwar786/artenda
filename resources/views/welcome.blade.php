@extends('layouts.master')

      {{-- {!! Minify::stylesheet(['/css/jquery.datetimepicker.css']) !!} --}}
        <link href="{{ asset('/css/form-builder/form-builder.css') }}" rel="stylesheet">

        <style>
            .heading-container .title {
                color: #1528E5;
                font-size: 14px;
                font-weight: 600;
                display: flex;
                align-items: center;
                position: relative;
                width: 100%;
            }

            .heading-container {
                display: flex;
                align-items: center;
            }

            .heading-help-icon {
                margin-left: 10px;
                /* Adjust as needed */
            }

            .heading-container .title::after {
                content: '';
                flex: 1;
                border-bottom: 1px solid #3838ff;
                margin-left: 10px;
                transform: translateY(-50%);
            }

            /* CSS for the .steps div */
            .form-sidebar {
                position: relative;
                /* Initially positioned relative */
            }

            .fixed {

                position: fixed;
                /* When scrolled, fix the position */
                top: 20px;
                /* Position at the top */
                max-width: 250px;
            }

            .phone-input-container input {
                width: 80vw;
                outline: none;
                border: none;
                background: #f5f5f5;
                border-bottom: 1px solid #e0e0e2;
            }

            .phone-input-container select {
                width: 20vw;
                outline: none;
                border: none;
                background: #f5f5f5;
            }

            .phone-input-container {
                display: flex;
                flex-direction: row;
                gap: 2px;
                height: 37px;
                background: #f5f5f5;
                flex-direction: row-reverse;
                margin-top: 10px;
                height: 37px;
                border-bottom: 1px solid #e0e0e2;
                padding: 0px 10px;
            }
        </style>
    <div class="container content-sm">
        <div class="row body-content">
            
            <div class="col-md-8 form-area">
                <div class="personal-information-area">
                    <div class="heading-container mb-2">
                        <div class="title">
                            <span>Personal information about the applicant</span>
                            <img src="/img/icons/info-outline-circle.svg" width="20px" height="20px"
                                class="heading-help-icon">
                        </div>
                    </div>

                    <div class="existing-personal-questions">
                        {{-- @include('submission-form.partials.personal-information') --}}
                    </div>

                    <div class="element-drop-zone" id="personal-area">
                        <div class="form-element-section mb-5 draggable-section" id="upload-field" data-type="upload-file">
                            <div class="header">
                                <div class="left-icon">
                                    <img src="/img/icons/form-elements/svg/upload_file.svg" alt="Upload Input">
                                    <strong>Upload File</strong>
                                </div>
                
                                <div class="right-icons">
                                    <span class="move-item-btn"></span>
                                    <button class="duplicate-item-btn"></button>
                                    <button class="close-item-btn"></button>
                                </div>
                            </div>
                
                            <div class="section-body">
                                <div class="field-heading mt-2" contenteditable="true" id="field-heading"
                                    name="field-heading">Type your
                                    question here</div>
                                <div class="field-description mt-1" contenteditable="true" id="field-description"
                                    name="field-description">Type a description here (optional)</div>
                                <div class="mt-3">
                                    <div class="custom-file-input">
                                        <label for="file-upload">
                                            <i class="fa fa-plus"></i>
                                            <span>Add File</span>
                                            <span class="accepted-formats">Accepted: pdf, docx, jpg</span>
                                        </label>
                                        <input type="file" id="file-upload" name="file-upload" class="file-upload-input" accept=".pdf,.docx,.jpg">
                                    </div>
                                </div>
                
                                <h6 class="mt-3">Edit Settings</h6>
                                <div class="form-check form-switch mt-1">
                                    <div class="inline-items">
                                        <label class="custom-switch">
                                            <input type="checkbox" id="field-required-switch"
                                                name="field-required-switch" />
                                            <span class="custom-slider custom-round"></span>
                                        </label>
                                        <label class="form-check-label">Required</label>
                                    </div>
                                </div>
                                <div class="form-check form-switch mt-1">
                                    <div class="inline-items">
                                        <label class="custom-switch">
                                            <input type="checkbox" id="field-certain-types" class="field-certain-types" name="field-certain-types" />
                                            <span class="custom-slider custom-round"></span>
                                        </label>
                                        <label class="form-check-label">Accept only certain file formats</label>
                                    </div>
                                </div>
                                <div class="file-formats mt-1 hide">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input file-format-check" checked value=".jpeg"> JPEG
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input file-format-check" value=".png"> PNG
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input file-format-check" value=".gif"> GIF
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input file-format-check" value=".svg"> SVG
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input file-format-check" checked value=".pdf"> PDF
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input file-format-check" value=".zip"> ZIP
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input file-format-check" checked value=".docx"> DOCX
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input file-format-check" value=".txt"> TXT
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input file-format-check" value=".mp4"> MP4
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input file-format-check" value=".mov"> MOV
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input file-format-check" value=".avi"> AVI
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input file-format-check" value=".mp3"> MP3
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input file-format-check" value=".wav"> WAV
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                
                                </div>
                
                                <div class="row file-information m-2">
                                    <div class="col-md-6">
                                        <div class="flexed flex-baseline gap-20">
                                            <span>Maximum number of files</span>
                                            <select class="select-input-style width-80-px" id="field-maximum-files" name="field-maximum-files">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                
                                        <div class="flexed flex-baseline gap-20 mt-1">
                                            <span>Maximum file size <span class="info-span">(info) </span></span>
                                            <input class="form-control form-control-sm mt-3 field-input form-input-style width-80-px" type="text" id="maximum-file-size-field"
                                            name="maximum-file-size-field">
                                        </div>
                
                                    </div>
                                    <div class="col-md-6">
                                        <p class="file-info-message-box hide">
                                            Info: Restrict the size of the files to ensure fast file management during the jury process.
                                            <br><br>
                                            Suggestion: Images ≈ 5 MB,<br>
                                            Portfolios ≈ 10 MB, Videos ≈ 100 MB
                                        </p>
                                    </div>
                                </div>
                
                                <hr>
                
                                <div class="form-check form-switch mt-1">
                                    <div class="inline-items">
                                        <label class="custom-switch">
                                            <input type="checkbox" id="field-additional-file-information" class="field-additional-file-information" name="field-additional-file-information" />
                                            <span class="custom-slider custom-round"></span>
                                        </label>
                                        <label class="form-check-label">Ask for information about the uploaded file (e.g. title of the work, year, dimensions, materials...)</label>
                                    </div>
                                </div>
                
                                <div class="element-drop-zone mt-2 hide" id="file-upload-area">
                                    <div class="form-empty-state">
                                        <span>Place form element here to ask for further information about the uploaded file
                                            (e.g. year, dimensions, materials...)</span>
                                    </div>
                                </div>
                            </div>
                
                        </div>
                        <div class="form-empty-state">
                            <span>Place form elements in this section to ask for other personal
                                information about the applicant that you want to know.</span>
                        </div>
                    </div>
                </div>

                <div class="opencall-information-area mt-2">
                    <div class="heading-container mb-2">
                        <div class="title">
                            <span>Open call application questions</span>
                            <img src="/img/icons/info-outline-circle.svg" width="20px" height="20px"
                                class="heading-help-icon">
                        </div>
                    </div>

                    <div class="element-drop-zone" id="opencall-area">
                        <div class="form-empty-state">
                            <span>Place form elements in this section to ask the applicant any questions related
                                to the application for your open call.</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-2 pr-0">
                <div class="form-sidebar">
                    <div class="form-builder-items hide">
                        <div class="header">
                            <strong>Form element</strong>
                            <button class="close-btn close-builder-section"></button>
                        </div>
                        <div class="body mt-2">
                            <div class="form-element-item draggable" data-type="short-text">
                                <img src="/img/icons/form-elements/svg/short_text.svg" alt="Short Text"
                                    class="form-element-icon">
                                <span>Short Text</span>
                            </div>

                            <div class="form-element-item draggable" data-type="address">
                                <img src="/img/icons/form-elements/svg/address.svg" alt="Address"
                                    class="form-element-icon">
                                <span>Address</span>
                            </div>

                            <div class="form-element-item draggable" data-type="long-text">
                                <img src="/img/icons/form-elements/svg/long_text.svg" alt="Long Text"
                                    class="form-element-icon">
                                <span>Long Text</span>
                            </div>

                            <div class="form-element-item draggable" data-type="email">
                                <img src="/img/icons/form-elements/svg/email.svg" alt="Email Address"
                                    class="form-element-icon">
                                <span>Email Address</span>
                            </div>

                            <div class="form-element-item draggable" data-type="select-boxes">
                                <img src="/img/icons/form-elements/svg/selectbox.svg" alt="Select Box"
                                    class="form-element-icon">
                                <span>Select Box</span>
                            </div>

                            <div class="form-element-item draggable" data-type="phone-number">
                                <img src="/img/icons/form-elements/svg/phone_number.svg" alt="Phone Number"
                                    class="form-element-icon">
                                <span>Phone Number</span>
                            </div>

                            <div class="form-element-item draggable" data-type="check-boxes">
                                <img src="/img/icons/form-elements/svg/checkbox.svg" alt="Check Box"
                                    class="form-element-icon">
                                <span>Check Box</span>
                            </div>

                            <div class="form-element-item draggable" data-type="url">
                                <img src="/img/icons/form-elements/svg/url.svg" alt="URL" class="form-element-icon">
                                <span>URL</span>
                            </div>

                            <div class="form-element-item draggable" data-type="radio-button">
                                <img src="/img/icons/form-elements/svg/radiobutton.svg" alt="Radio Button"
                                    class="form-element-icon">
                                <span>Radio Button</span>
                            </div>

                            <div class="form-element-item draggable" data-type="nationality">
                                <img src="/img/icons/form-elements/svg/nationality.svg" alt="Nationality"
                                    class="form-element-icon">
                                <span>Nationality</span>
                            </div>

                            <div class="form-element-item draggable" data-type="header-line">
                                <img src="/img/icons/form-elements/svg/header_line.svg" alt="Header + Line"
                                    class="form-element-icon">
                                <span>Header + Line</span>
                            </div>

                            <div class="form-element-item draggable" data-type="date">
                                <img src="/img/icons/form-elements/svg/date.svg" alt="Date"
                                    class="form-element-icon">
                                <span>Date</span>
                            </div>

                            <div class="form-element-item draggable" data-type="upload-file">
                                <img src="/img/icons/form-elements/svg/upload_file.svg" alt="Upload File"
                                    class="form-element-icon">
                                <span>Upload File</span>
                            </div>

                            <div class="form-element-item draggable" data-type="time">
                                <img src="/img/icons/form-elements/svg/time.svg" alt="Time"
                                    class="form-element-icon">
                                <span>Time</span>
                            </div>

                            <div class="form-element-item draggable" data-type="collect-payments">
                                <img src="/img/icons/form-elements/svg/collect_payment.svg" alt="Collect Payments"
                                    class="form-element-icon">
                                <span>Collect Payments</span>
                            </div>

                            <div class="form-element-item draggable" data-type="consent-terms">
                                <img src="/img/icons/form-elements/svg/consent_terms.svg" alt="Consent Terms"
                                    class="form-element-icon">
                                <span>Consent Terms</span>
                            </div>

                            <div class="full-grid-column mt-1 mb-1">
                                <span class="bold-span">Use Templates</span>
                            </div>

                            <div class="form-element-item draggable" data-type="upload-document">
                                <span>Upload Document</span>
                            </div>

                            <div class="form-element-item draggable" data-type="candidate-info">
                                <span>Candidate Info</span>
                            </div>

                            <div class="form-element-item draggable" data-type="portfolio">
                                <img src="/img/icons/form-elements/svg/portfolio.svg" alt="Portfolio"
                                    class="form-element-icon">
                                <span>Portfolio</span>
                            </div>

                            <div class="form-element-item draggable" data-type="educational-info">
                                <img src="/img/icons/form-elements/svg/education_info.svg" alt="Educational Information"
                                    class="form-element-icon">
                                <span>Educational Info</span>
                            </div>

                            <div class="form-element-item draggable" data-type="artworks">
                                <img src="/img/icons/form-elements/svg/artworks.svg" alt="Artworks"
                                    class="form-element-icon">
                                <span>Artworks</span>
                            </div>

                            <div class="form-element-item draggable full-grid-column" data-type="public-art-reference">
                                <img src="/img/icons/form-elements/svg/public_art_references.svg"
                                    alt="Public Art References" class="form-element-icon">
                                <span>Public Art References</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-builder-menu">
                        <div class="button-row">
                            <button class="custom-button full-width btn btn-xs btn-blue add-form-elements">Add Form
                                Element</button>
                        </div>
                        <div class="button-row">
                            <button class="custom-button full-width btn btn-xs btn-blue-outline">Preview</button>
                        </div>
                        <div class="button-row">
                            <button class="custom-button btn btn-xs btn-blue-outline">Save</button>
                            <button class="custom-button btn btn-xs btn-blue-outline">Delete</button>
                        </div>
                        <div class="button-row">
                            <button class="custom-button full-width btn btn-xs btn-blue-outline">Go to next step</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
