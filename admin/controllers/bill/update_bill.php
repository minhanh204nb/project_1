<div class="page-wrapper" style="min-height: 1000px;">
    <div class="content container-fluid">

        <div class="page-header invoices-page-header">
            <div class="row align-items-center">
                <div class="col">
                    <ul class="breadcrumb invoices-breadcrumb">
                        <li class="breadcrumb-item invoices-breadcrumb-item">
                            <a href="invoices.html">
                                <i class="fe fe-chevron-left"></i> Back to Invoice List
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <div class="invoices-create-btn">
                        <a class="invoices-preview-link" href="#" data-bs-toggle="modal" data-bs-target="#invoices_preview"><i class="fe fe-eye"></i> Preview</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices_details" class="btn delete-invoice-btn">
                            Delete Invoice
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#save_invocies_details" class="btn save-invoice-btn">
                            Save Draft
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card invoices-add-card">
                    <div class="card-body">
                        <form action="#" class="invoices-form">
                            <div class="invoices-main-form">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label>Customer Name</label>
                                            <div class="multipleSelection">
                                                <div class="selectbox">
                                                    <p class="mb-0">Select Customer</p>
                                                    <span class="down-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg></span>
                                                </div>
                                                <div id="checkboxes-one">
                                                    <p class="checkbox-title">Customer Search</p>
                                                    <div class="form-custom">
                                                        <input type="text" class="form-control bg-grey" placeholder="Enter Customer Name">
                                                    </div>
                                                    <div class="selectbox-cont">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Brian Johnson
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Russell Copeland
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Greg Lynch
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> John Blair
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Barbara Moore
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Hendry Evan
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Richard Miles
                                                        </label>
                                                    </div>
                                                    <button type="submit" class="btn w-100 btn-primary">Apply</button>
                                                    <button type="reset" class="btn w-100 btn-grey">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Po Number</label>
                                            <input class="form-control" type="text" placeholder="Enter Reference Number">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-md-6 col-sm-12 col-12">
                                        <h4 class="invoice-details-title">Invoice details</h4>
                                        <div class="invoice-details-box">
                                            <div class="invoice-inner-head">
                                                <span>Invoice No. <a href="view-invoice.html">IN093439#@09</a></span>
                                            </div>
                                            <div class="invoice-inner-footer">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="invoice-inner-date">
                                                            <span>
                                                                Date <input class="form-control datetimepicker" type="text" placeholder="15/02/2022">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="invoice-inner-date invoice-inner-datepic">
                                                            <span>
                                                                Due Date <input class="form-control datetimepicker" type="text" placeholder="Select">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                                        <div class="inovices-month-info">
                                            <div class="form-group mb-0">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" id="enableTax" name="invoice">
                                                    <span class="checkmark"></span> Enable tax
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" id="chkYes" name="invoice">
                                                    <span class="checkmark"></span> Recurring Invoice
                                                </label>
                                            </div>
                                            <div id="show-invoices">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select class="select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                                <option data-select2-id="3">By month</option>
                                                                <option>March</option>
                                                                <option>April</option>
                                                                <option>May</option>
                                                                <option>June</option>
                                                                <option>July</option>
                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-7g4p-container"><span class="select2-selection__rendered" id="select2-7g4p-container" role="textbox" aria-readonly="true" title="By month">By month</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" placeholder="Enter Months">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="invoice-info">
                                            <strong class="customer-text">Invoice From <a class="small" href="edit-invoice.html">Edit Address</a></strong>
                                            <p class="invoice-details invoice-details-two">
                                                Darren Elder <br>
                                                806 Twin Willow Lane, Old Forge,<br>
                                                Newyork, USA <br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="invoice-info">
                                            <strong class="customer-text">Invoice To</strong>
                                            <p class="invoice-details invoice-details-two">
                                                Walter Roberson <br>
                                                299 Star Trek Drive, Panama City, <br>
                                                Florida, 32405, USA <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-add-table">
                                <h4>Item Details</h4>
                                <div class="table-responsive">
                                    <table class="table table-center add-table-items">
                                        <thead>
                                            <tr>
                                                <th>Items</th>
                                                <th>Category</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Amount</th>
                                                <th>Discount</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-form-control add-row">
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Item Name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Category Name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="2">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="$10">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="$20">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="4%">
                                                </td>
                                                <td class="add-remove text-end">
                                                    <a href="javascript:void(0);" class="add-btn me-2"><i class="fas fa-plus-circle"></i></a>
                                                    <a href="#" class="copy-btn me-2"><i class="fe fe-copy"></i></a><a href="javascript:void(0);" class="remove-btn"><i class="fe fe-trash-2"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="table-form-control add-row">
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Item Name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Category Name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="4">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="$10">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="$40">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="6%">
                                                </td>
                                                <td class="add-remove text-end">
                                                    <a href="javascript:void(0);" class="add-btn me-2"><i class="fas fa-plus-circle"></i></a>
                                                    <a href="#" class="copy-btn me-2"><i class="fe fe-copy"></i></a><a href="javascript:void(0);" class="remove-btn"><i class="fe fe-trash-2"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-7 col-md-6">
                                    <div class="invoice-fields">
                                        <h4 class="field-title">More Fields</h4>
                                        <div class="field-box">
                                            <p>Payment Details</p>
                                            <div class="payment-details">
                                                <p>Debit Card XXXXXXXXXXXX-2541 HDFC Bank</p>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_bank_details"><i class="fe fe-trash-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-faq">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="faq-tab">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <p class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                <i class="fas fa-plus-circle me-1"></i> Add Terms &amp; Conditions
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                                        <div class="panel-body">
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="faq-tab">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <p class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                <i class="fas fa-plus-circle me-1"></i> Add Notes
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                                        <div class="panel-body">
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="invoice-total-card">
                                        <h4 class="invoice-total-title">Summary</h4>
                                        <div class="invoice-total-box">
                                            <div class="invoice-total-inner">
                                                <p>Taxable Amount <span>$21</span></p>
                                                <p>Round Off
                                                    <input type="checkbox" id="status_1" class="check">
                                                    <label for="status_1" class="checktoggle">checkbox</label>
                                                    <span>$54</span>
                                                </p>
                                                <div class="links-info-one">
                                                    <div class="links-info">
                                                        <div class="links-cont">
                                                            <a href="#" class="service-trash">
                                                                <i class="feather-trash-2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="add-links">
                                                    <i class="fas fa-plus-circle me-1"></i> Additional Charges
                                                </a>
                                                <div class="links-info-discount">
                                                    <div class="links-cont-discount">
                                                        <a href="javascript:void(0);" class="add-links-one">
                                                            <i class="fas fa-plus-circle me-1"></i> Add more Discount
                                                        </a>
                                                        <a href="#" class="service-trash-one">
                                                            <i class="feather-trash-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="invoice-total-footer">
                                                <h4>Total Amount <span>$894.00</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="upload-sign">
                                        <div class="form-group service-upload">
                                            <span>Upload Sign</span>
                                            <input type="file" multiple="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name of the Signatuaory">
                                        </div>
                                        <div class="form-group float-end mb-0">
                                            <button class="btn btn-primary" type="submit">Save Invoice</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>