          <div class="mainBox mx-auto">
              <div class="content-wrapper">
                  <div class="page-header">
                      <nav aria-label="breadcrumb">
                          <button class="btn bgPurpal text-white btn-sm addNew">New</button>
                      </nav>
                      <h3 class="page-title animate__animated animate__bounce">
                          Quotation
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
                          <label class="form-label">Search</label>
                          <input type="text"
                              class="form-control rounded-0 inputHeight"
                              placeholder="Search">
                      </div>
                  </div>


                  <div class="table-responsive mt-4 animate__animated animate__fadeIn">
                      <table class="table table-bordered table-hover align-middle">
                          <thead class="bgPurpal text-white">
                              <tr>
                                  <th class="tableHeadingColor">#</th>
                                  <th class="tableHeadingColor">Q. No</th>
                                  <th class="tableHeadingColor">Date</th>
                                  <th class="tableHeadingColor">Time</th>
                                  <th class="tableHeadingColor">By</th>
                                  <th class="tableHeadingColor">Firm Name</th>
                                  <th class="tableHeadingColor">Contact Person</th>
                                  <th class="tableHeadingColor">Contact No</th>
                                  <th class="tableHeadingColor">Email</th>
                                  <th class="tableHeadingColor">Quote Heading</th>
                                  <th class="tableHeadingColor">Amount</th>
                                  <th class="tableHeadingColor text-center">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>QTN-2026-001</td>
                                  <td>2026-02-14</td>
                                  <td>02:35 PM</td>
                                  <td>Admin</td>
                                  <td>Acme Corp</td>
                                  <td>John Doe</td>
                                  <td>9876543210</td>
                                  <td>john@example.com</td>
                                  <td>Industrial Supply</td>
                                  <td>11,800</td>
                                  <td class="text-center">
                                      <i class="bi bi-pencil-fill textPurpal fs-6 cp"></i>
                                      <i class="bi bi-trash3-fill textPurpal fs-6 cp"></i>
                                  </td>
                              </tr>
                          </tbody>
                          <tfoot class="bg-light fw-bold">
                              <tr>
                                  <td colspan="10" class="text-end">Total Summary:</td>
                                  <td>11,800</td>
                                  <td></td>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>
              <!-- form wrapper -->

              <div class="content-wrapper formWrapper mt-5">
                  <div class="page-header">
                      <h3 class="page-title animate__animated animate__bounce">
                          Quotation
                          <span class="page-title-icon bgPurpal text-white me-2">
                              <i class="mdi mdi-home"></i>
                          </span>
                      </h3>
                  </div>

                  <div class="row g-2 d-flex justify-content-end">
                      <div class="col-12 col-md-2 col-lg-2">
                          <label class="form-label mb-1">No</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="No.">
                      </div>
                      <div class="col-12 col-md-3 col-lg-2">
                          <label class="form-label mb-1">Date</label>
                          <input type="date" class="form-control rounded-0 inputHeight">
                      </div>
                      <div class="col-12 col-md-3 col-lg-2">
                          <label class="form-label mb-1">Time</label>
                          <input type="time" class="form-control rounded-0 inputHeight">
                      </div>
                      <div class="col-12 col-md-3 col-lg-2">
                          <label class="form-label mb-1">Quote By</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="Name">
                      </div>
                  </div>

                  <div class="row g-2 align-items-end mt-2">
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Firm Name</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="Firm Name">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Contact Person</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="Contact Person">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Quotation No</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="Quote No">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Email</label>
                          <input type="email" class="form-control rounded-0 inputHeight" placeholder="Email">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">GSTN</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="GST Number">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Description</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="Description">
                      </div>

                      <div class="col-6 col-lg-1">
                          <label class="form-label mb-1">Qty</label>
                          <input type="number" class="form-control rounded-0 inputHeight">
                      </div>
                      <div class="col-6 col-lg-2">
                          <label class="form-label mb-1">Rate</label>
                          <input type="number" class="form-control rounded-0 inputHeight">
                      </div>
                      <div class="col-6 col-lg-1">
                          <label class="form-label mb-1">GST %</label>
                          <input type="number" class="form-control rounded-0 inputHeight">
                      </div>
                      <div class="col-6 col-lg-2">
                          <label class="form-label mb-1">Tax Amount</label>
                          <input type="number" class="form-control rounded-0 inputHeight">
                      </div>
                      <div class="col-6 col-lg-2">
                          <label class="form-label mb-1">Amount</label>
                          <input type="number" class="form-control rounded-0 inputHeight">
                      </div>

                      <div class="col-12 col-lg-1">
                          <button class="btn btn-sm bgPurpal text-white">Add</button>
                      </div>
                  </div>

                  <div class="table-responsive mt-4 animate__animated animate__fadeIn">
                      <table class="table table-bordered table-hover align-middle">
                          <thead class="bgPurpal text-white">
                              <tr>
                                  <th class="tableHeadingColor">#</th>
                                  <th class="tableHeadingColor">Description</th>
                                  <th class="tableHeadingColor">Qty</th>
                                  <th class="tableHeadingColor">Rate</th>
                                  <th class="tableHeadingColor">GST %</th>
                                  <th class="tableHeadingColor">Tax Amount</th>
                                  <th class="tableHeadingColor">Amount</th>
                                  <th class="tableHeadingColor text-center">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Industrial Motor - X1</td>
                                  <td>2</td>
                                  <td>5000</td>
                                  <td>18%</td>
                                  <td>1800</td>
                                  <td>11800</td>
                                  <td class="text-center">
                                      <i class="bi bi-pencil-fill textPurpal fs-6 cp"></i>
                                      <i class="bi bi-trash3-fill textPurpal fs-6 cp"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td>1</td>
                                  <td>Industrial Motor - X1</td>
                                  <td>2</td>
                                  <td>5000</td>
                                  <td>18%</td>
                                  <td>1800</td>
                                  <td>11800</td>
                                  <td class="text-center">
                                      <i class="bi bi-pencil-fill textPurpal fs-6 cp"></i>
                                      <i class="bi bi-trash3-fill textPurpal fs-6 cp"></i>
                                  </td>
                              </tr>
                          </tbody>
                          <tfoot class="bg-light fw-bold">
                              <tr>
                                  <td colspan="6" class="text-end">Amount:</td>
                                  <td>10,000</td>
                                  <td></td>
                              </tr>
                              <tr>
                                  <td colspan="6" class="text-end">Tax Amount:</td>
                                  <td>1,800</td>
                                  <td></td>
                              </tr>
                              <tr>
                                  <td colspan="6" class="text-end">Total Amount:</td>
                                  <td>11,800</td>
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