          <div class="mainBox mx-auto">
              <div class="content-wrapper">
                  <div class="page-header">
                      <nav aria-label="breadcrumb">
                          <button class="btn bgPurpal text-white btn-sm addNew">New</button>
                      </nav>
                      <h3 class="page-title animate__animated animate__bounce">
                          Enquiry
                          <span
                              class="page-title-icon bgPurpal text-white me-2">
                              <i class="mdi mdi-home"></i>
                          </span>
                      </h3>

                  </div>

                  <div class="row g-2 align-items-end">
                      <div class="col-12 col-lg-2">
                          <label class="form-label">Display
                              Rows</label>
                          <select
                              class="form-select rounded-0 shadow-none selectHeight">
                              <option>10</option>
                              <option>25</option>
                              <option>50</option>
                              <option>100</option>
                          </select>
                      </div>
                      <div class="col-12 col-lg-4">
                          <label class="form-label">Search Item</label>
                          <input type="text"
                              class="form-control rounded-0 inputHeight"
                              placeholder="Search Item">
                      </div>
                  </div>

                  <div class="table-responsive">
                      <table class="table table-bordered mt-5">
                          <thead>
                              <tr>
                                  <th class="tableHeadingColor">No</th>
                                  <th class="tableHeadingColor">Date</th>
                                  <th class="tableHeadingColor">Received From</th>
                                  <th class="tableHeadingColor">Customer/Firm</th>
                                  <th class="tableHeadingColor">Contact Person</th>
                                  <th class="tableHeadingColor">Contact No</th>
                                  <th class="tableHeadingColor">City</th>
                                  <th class="tableHeadingColor">Email</th>
                                  <th class="tableHeadingColor">Enquiry For</th>
                                  <th class="tableHeadingColor">Price Quoted</th>
                                  <th class="tableHeadingColor">Amount Quoted</th>
                                  <th class="tableHeadingColor">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>2026-02-09</td>
                                  <td>Email</td>
                                  <td>Doe Construction</td>
                                  <td>John Doe</td>
                                  <td>+1 234 567 890</td>
                                  <td>New York</td>
                                  <td>john@example.com</td>
                                  <td>Building Materials</td>
                                  <td class="text-end">840.00</td>
                                  <td class="text-end">42,000.00</td>
                                  <td>
                                      <i class="bi bi-pencil-fill textPurpal fs-6 cp"></i>
                                      <i class="bi bi-trash3-fill textPurpal fs-6 cp"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>2026-02-10</td>
                                  <td>WhatsApp</td>
                                  <td>Smith Steel Co</td>
                                  <td>Jane Smith</td>
                                  <td>+1 987 654 321</td>
                                  <td>Chicago</td>
                                  <td>jane@steel.com</td>
                                  <td>Structural Steel</td>
                                  <td class="text-end">37,300.00</td>
                                  <td class="text-end">186,500.00</td>
                                  <td>
                                      <i class="bi bi-pencil-fill textPurpal fs-6 cp"></i>
                                      <i class="bi bi-trash3-fill textPurpal fs-6 cp"></i>
                                  </td>
                              </tr>
                          </tbody>
                          <tfoot>
                              <tr class="fw-bold">
                                  <td colspan="10" class="text-end">Total Amount:</td>
                                  <td class="text-end">228,500.00</td>
                                  <td></td>
                              </tr>
                          </tfoot>
                      </table>
                      <div class="d-flex justify-content-end">
                          <ul class="pagination pagination-sm mt-3">
                              <li class="page-item"><a class="page-link bgPurpal paginationStyle text-white" href="#">Previous</a></li>
                              <li class="page-item"><a class="page-link paginationStyle textPurpal" href="#">1</a></li>
                              <li class="page-item"><a class="page-link paginationStyle textPurpal" href="#">2</a></li>
                              <li class="page-item"><a class="page-link paginationStyle textPurpal" href="#">3</a></li>
                              <li class="page-item"><a class="page-link bgPurpal paginationStyle text-white" href="#">Next</a></li>
                          </ul>
                      </div>
                  </div>
              </div>

              <!-- form wrapper -->

              <div class="content-wrapper formWrapper mt-5">
                  <div class="page-header">
                      <h3 class="page-title animate__animated animate__bounce">
                          Enquiry
                          <span class="page-title-icon bgPurpal text-white me-2">
                              <i class="mdi mdi-home"></i>
                          </span>
                      </h3>
                  </div>

                  <div class="row g-2 d-flex justify-content-end">
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">No</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="Search Party">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Date</label>
                          <input type="date" class="form-control rounded-0 inputHeight">
                      </div>
                  </div>

                  <div class="row g-2 align-items-end mt-3">
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Received</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="Received">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label">From</label>
                          <select
                              class="form-select rounded-0 shadow-none selectHeight">
                              <option>From 1</option>
                              <option>From 2</option>
                              <option>From 3</option>
                              <option>From 4</option>
                          </select>
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Firm Name</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="Firm Name">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Contact Person</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="Contact Person">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Contact Email</label>
                          <input type="email" class="form-control rounded-0 inputHeight" placeholder="Email Address">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Contact Number</label>
                          <input type="email" class="form-control rounded-0 inputHeight" placeholder="Email Address">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">City</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="City">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Enquiry Description</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="Description">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Price Quoted</label>
                          <input type="number" class="form-control rounded-0 inputHeight" placeholder="0.00">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Amount Quoted</label>
                          <input type="number" class="form-control rounded-0 inputHeight" placeholder="0.00">
                      </div>
                      <div class="col-12 col-lg-2">
                          <button class="btn btn-sm bgPurpal text-white">Add</button>
                      </div>
                  </div>

                  <div class="table-responsive">
                      <table class="table table-bordered mt-5">
                          <thead>
                              <tr>
                                  <th class="tableHeadingColor">Firm Name</th>
                                  <th class="tableHeadingColor">Contact Person</th>
                                  <th class="tableHeadingColor">Contact Email</th>
                                  <th class="tableHeadingColor">City</th>
                                  <th class="tableHeadingColor">Enquiry Description</th>
                                  <th class="tableHeadingColor">Price Quoted</th>
                                  <th class="tableHeadingColor">Amount Quoted</th>
                                  <th class="tableHeadingColor">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>Acme Steel Corp</td>
                                  <td>John Doe</td>
                                  <td>john@acme.com</td>
                                  <td>CIB-123</td>
                                  <td>I-Beam Series 4 - Bulk Order</td>
                                  <td>1,000.00</td>
                                  <td class="text-end">11,800.00</td>
                                  <td>
                                      <i class="bi bi-pencil-fill textPurpal fs-6 cp"></i>
                                      <i class="bi bi-trash3-fill textPurpal fs-6 cp"></i>
                                  </td>
                              </tr>
                          </tbody>
                          <tfoot>
                              <tr class="fw-bold bg-light">
                                  <td colspan="6" class="text-end">Total Amount:</td>
                                  <td class="text-end">11,800.00</td>
                                  <td></td>
                              </tr>
                          </tfoot>
                      </table>
                  </div>

                  <div class="mt-3 d-flex justify-content-end ms-auto gap-2">
                      <button class="btn btn-sm btn-danger text-white">Cancel</button>
                      <button class="btn btn-sm bgPurpal text-white">Save</button>
                  </div>
              </div>
          </div>