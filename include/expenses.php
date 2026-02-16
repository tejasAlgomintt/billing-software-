          <div class="mainBox mx-auto">
              <div class="content-wrapper">
                  <div class="page-header">
                      <nav aria-label="breadcrumb">
                          <button class="btn bgPurpal text-white btn-sm addNew">New</button>
                      </nav>
                      <h3 class="page-title animate__animated animate__bounce">
                          Expenses
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
                      <div class="col-12 col-lg-2">
                          <label class="form-label">Select
                              City</label>
                          <select
                              class="form-select rounded-0 shadow-none selectHeight">
                              <option>All</option>
                              <option>Sangli</option>
                              <option>Karad</option>
                          </select>
                      </div>
                      <div class="col-12 col-lg-4">
                          <label class="form-label">Search
                              Party</label>
                          <input type="text"
                              class="form-control rounded-0 inputHeight"
                              placeholder="Search Party">
                      </div>
                  </div>

                  <div class="table-responsive">
                      <table class="table table-bordered mt-5">
                          <thead>
                              <tr>
                                  <th class="tableHeadingColor">No</th>
                                  <th class="tableHeadingColor">Date</th>
                                  <th class="tableHeadingColor">Enquiry</th>
                                  <th class="tableHeadingColor">Customer</th>
                                  <th class="tableHeadingColor">Contact</th>
                                  <th class="tableHeadingColor">CIB</th>
                                  <th class="tableHeadingColor">Description</th>
                                  <th class="tableHeadingColor">Quantity</th>
                                  <th class="tableHeadingColor">Amount</th>
                                  <th class="tableHeadingColor">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>2026-02-09</td>
                                  <td>#ENQ-001</td>
                                  <td>John Doe</td>
                                  <td>+1 234 567 890</td>
                                  <td>CIB-99</td>
                                  <td>Building Materials</td>
                                  <td>50</td>
                                  <td class="text-end">42,000.00</td>
                                  <td>
                                      <i class="bi bi-pencil-fill textPurpal fs-6 cp"></i>
                                      <i class="bi bi-trash3-fill textPurpal fs-6 cp"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>2026-02-10</td>
                                  <td>#ENQ-002</td>
                                  <td>Jane Smith</td>
                                  <td>+1 987 654 321</td>
                                  <td>CIB-102</td>
                                  <td>Structural Steel</td>
                                  <td>5</td>
                                  <td class="text-end">186,500.00</td>
                                  <td>
                                      <i class="bi bi-pencil-fill textPurpal fs-6 cp"></i>
                                      <i class="bi bi-trash3-fill textPurpal fs-6 cp"></i>
                                  </td>
                              </tr>
                          </tbody>
                          <tfoot>
                              <tr class="fw-bold">
                                  <td colspan="8" class="text-end">Total Amount:</td>
                                  <td class="text-end">228,500.00</td>
                                  <td></td>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>

              <!-- Form Wrapper -->

              <div class="content-wrapper formWrapper mt-5">
                  <div class="page-header">
                      <h3 class="page-title animate__animated animate__bounce">
                          Enquiry
                          <span class="page-title-icon bgPurpal text-white me-2">
                              <i class="mdi mdi-home"></i>
                          </span>
                      </h3>
                  </div>
                  <div class="row g-2 d-flex justify-content-start">
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Name</label>
                          <input type="text"
                              class="form-control rounded-0 inputHeight"
                              placeholder="Name">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label  mb-1">HSN</label>
                          <input type="text"
                              class="form-control rounded-0 inputHeight"
                              placeholder="HSN">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label  mb-1">Rate</label>
                          <input type="text"
                              class="form-control rounded-0 inputHeight"
                              placeholder="Rate">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label  mb-1">GST</label>
                          <select
                              class="form-select rounded-0 shadow-none selectHeight">
                              <option>10</option>
                              <option>25</option>
                              <option>50</option>
                              <option>100</option>
                          </select>
                      </div>
                  </div>
                  <div class="row g-2 align-items-end mt-2">
                      <div class="col-12 col-lg-2">
                          <label class="form-label  mb-1">Category</label>
                          <input type="text"
                              class="form-control rounded-0 inputHeight"
                              placeholder="Category">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label  mb-1">Name</label>
                          <input type="text"
                              class="form-control rounded-0 inputHeight"
                              placeholder="Name">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label  mb-1">HSN</label>
                          <input type="text"
                              class="form-control rounded-0 inputHeight"
                              placeholder="HSN">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label  mb-1">Rate</label>
                          <input type="text"
                              class="form-control rounded-0 inputHeight"
                              placeholder="Rate">
                      </div>

                      <div class="col-12 col-lg-2">
                          <label class="form-label  mb-1">GST</label>
                          <input type="text"
                              class="form-control rounded-0 inputHeight"
                              placeholder="GST">
                      </div>

                      <div class="col-12 col-lg-2">
                          <label class="form-label  mb-1">Operation</label>
                          <input type="text"
                              class="form-control rounded-0 inputHeight"
                              placeholder="Operation">
                      </div>
                      <div class="col-12 col-lg-2">
                          <button class="btn btn-sm bgPurpal text-white">Add</button>
                      </div>
                  </div>
                  <div class="table-responsive">
                      <table class="table table-bordered mt-5">
                          <thead>
                              <tr>
                                  <th class="tableHeadingColor">No</th>
                                  <th class="tableHeadingColor">Date</th>
                                  <th class="tableHeadingColor">Enquiry</th>
                                  <th class="tableHeadingColor">Customer</th>
                                  <th class="tableHeadingColor">Contact</th>
                                  <th class="tableHeadingColor">CIB</th>
                                  <th class="tableHeadingColor">Description</th>
                                  <th class="tableHeadingColor">Quantity</th>
                                  <th class="tableHeadingColor">Amount</th>
                                  <th class="tableHeadingColor">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>2026-02-09</td>
                                  <td>#ENQ-001</td>
                                  <td>John Doe</td>
                                  <td>+1 234 567 890</td>
                                  <td>CIB-99</td>
                                  <td>Building Materials</td>
                                  <td>50</td>
                                  <td class="text-end">42,000.00</td>
                                  <td>
                                      <i class="bi bi-pencil-fill textPurpal fs-6 cp"></i>
                                      <i class="bi bi-trash3-fill textPurpal fs-6 cp"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>2026-02-10</td>
                                  <td>#ENQ-002</td>
                                  <td>Jane Smith</td>
                                  <td>+1 987 654 321</td>
                                  <td>CIB-102</td>
                                  <td>Structural Steel</td>
                                  <td>5</td>
                                  <td class="text-end">186,500.00</td>
                                  <td>
                                      <i class="bi bi-pencil-fill textPurpal fs-6 cp"></i>
                                      <i class="bi bi-trash3-fill textPurpal fs-6 cp"></i>
                                  </td>
                              </tr>
                          </tbody>
                          <tfoot>
                              <tr class="fw-bold">
                                  <td colspan="8" class="text-end">Total Amount:</td>
                                  <td class="text-end">228,500.00</td>
                                  <td></td>
                              </tr>
                          </tfoot>
                      </table>
                      <div class="mt-3 d-flex justify-content-end ms-auto gap-2">
                          <button class="btn btn-sm btn-danger text-white">Cancel</button>
                          <button class="btn btn-sm bgPurpal text-white">Save</button>
                      </div>
                  </div>
              </div>
          </div>