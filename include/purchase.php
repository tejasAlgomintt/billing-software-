          <div class="mainBox mx-auto">
              <div class="content-wrapper">
                  <div class="page-header">
                     <nav aria-label="breadcrumb">
                          <button class="btn bgPurpal text-white btn-sm addNew">New</button>
                      </nav>
                      <h3 class="page-title animate__animated animate__bounce">
                          Purchase
                          <span class="page-title-icon bgPurpal text-white me-2">
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
                                  <th class="tableHeadingColor">Ref</th>
                                  <th class="tableHeadingColor">Type</th>
                                  <th class="tableHeadingColor">Supplier Name</th>
                                  <th class="tableHeadingColor">Contact No</th>
                                  <th class="tableHeadingColor">City</th>
                                  <th class="tableHeadingColor">GSTN</th>
                                  <th class="tableHeadingColor">Item</th>
                                  <th class="tableHeadingColor">Unit</th>
                                  <th class="tableHeadingColor">Rate</th>
                                  <th class="tableHeadingColor">GST %</th>
                                  <th class="tableHeadingColor">Tax</th>
                                  <th class="tableHeadingColor">Amount</th>
                                  <th class="tableHeadingColor">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>2026-02-09</td>
                                  <td>#REF-001</td>
                                  <td>Wholesale</td>
                                  <td>Steel Corp</td>
                                  <td>+1 234 567 890</td>
                                  <td>New York</td>
                                  <td>22AAAAA0000A1Z5</td>
                                  <td>I-Beam</td>
                                  <td>Pcs</td>
                                  <td>1,000.00</td>
                                  <td>18%</td>
                                  <td>180.00</td>
                                  <td class="text-end">1,180.00</td>
                                  <td>
                                      <i class="bi bi-pencil-fill textPurpal fs-6 cp"></i>
                                      <i class="bi bi-trash3-fill textPurpal fs-6 cp"></i>
                                  </td>
                              </tr>
                          </tbody>
                          <tfoot>
                              <tr class="fw-bold">
                                  <td colspan="13" class="text-end">Total Amount:</td>
                                  <td class="text-end">1,180.00</td>
                                  <td></td>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>
              <div class="content-wrapper formWrapper mt-5">
                  <div class="page-header">
                      <h3 class="page-title animate__animated animate__bounce">
                          Purchase
                          <span class="page-title-icon bgPurpal text-white me-2">
                              <i class="mdi mdi-home"></i>
                          </span>
                      </h3>
                  </div>
                  <div class="row g-2 d-flex justify-content-end">
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">No</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="No">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Date</label>
                          <input type="date" class="form-control rounded-0 inputHeight">
                      </div>
                  </div>

                  <div class="row g-2 align-items-end mt-3">
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Ref</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="Ref">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Type</label>
                          <select class="form-select rounded-0 shadow-none selectHeight">
                              <option selected disabled>Select Type</option>
                              <option>Type 1</option>
                              <option>Type 2</option>
                          </select>
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Supplier Name</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="Supplier Name">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Contact No</label>
                          <input type="number" class="form-control rounded-0 inputHeight" placeholder="Contact No">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">City</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="City">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">GSTN</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="GSTN">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">item/series</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="Item/Series">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Qty</label>
                          <input type="number" class="form-control rounded-0 inputHeight" placeholder="Qty">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Unit</label>
                          <input type="text" class="form-control rounded-0 inputHeight" placeholder="Unit">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Rate</label>
                          <input type="number" class="form-control rounded-0 inputHeight" placeholder="Rate">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Gst</label>
                          <input type="number" class="form-control rounded-0 inputHeight" placeholder="Gst %">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Tax</label>
                          <input type="number" class="form-control rounded-0 inputHeight" placeholder="Tax">
                      </div>
                      <div class="col-12 col-lg-2">
                          <label class="form-label mb-1">Amount</label>
                          <input type="number" class="form-control rounded-0 inputHeight" placeholder="Amount">
                      </div>
                      <div class="col-12 col-lg-2">
                          <button class="btn btn-sm bgPurpal text-white ">Add</button>
                      </div>
                  </div>

                  <div class="table-responsive">
                      <table class="table table-bordered mt-5">
                          <thead>
                              <tr>
                                  <th class="tableHeadingColor">No</th>
                                  <th class="tableHeadingColor">Date</th>
                                  <th class="tableHeadingColor">Ref</th>
                                  <th class="tableHeadingColor">Type</th>
                                  <th class="tableHeadingColor">Supplier Name</th>
                                  <th class="tableHeadingColor">Contact No</th>
                                  <th class="tableHeadingColor">City</th>
                                  <th class="tableHeadingColor">GSTN</th>
                                  <th class="tableHeadingColor">Item</th>
                                  <th class="tableHeadingColor">Unit</th>
                                  <th class="tableHeadingColor">Rate</th>
                                  <th class="tableHeadingColor">GST %</th>
                                  <th class="tableHeadingColor">Tax</th>
                                  <th class="tableHeadingColor">Amount</th>
                                  <th class="tableHeadingColor">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>2026-02-09</td>
                                  <td>#REF-001</td>
                                  <td>Wholesale</td>
                                  <td>Steel Corp</td>
                                  <td>+1 234 567 890</td>
                                  <td>New York</td>
                                  <td>22AAAAA0000A1Z5</td>
                                  <td>I-Beam</td>
                                  <td>Pcs</td>
                                  <td>1,000.00</td>
                                  <td>18%</td>
                                  <td>180.00</td>
                                  <td class="text-end">1,180.00</td>
                                  <td>
                                      <i class="bi bi-pencil-fill textPurpal fs-6 cp"></i>
                                      <i class="bi bi-trash3-fill textPurpal fs-6 cp"></i>
                                  </td>
                              </tr>
                          </tbody>
                          <tfoot>
                              <tr class="fw-bold">
                                  <td colspan="13" class="text-end">Total Amount:</td>
                                  <td class="text-end">1,180.00</td>
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