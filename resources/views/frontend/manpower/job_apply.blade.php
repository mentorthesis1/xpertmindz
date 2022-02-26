@extends('layouts.basesection')
@section('dashboard')
          <div class="container">
              <div class="row">
                  <div class="col-md-4">

                  </div>
                  <div class="col-md-4">
                          <div class="card">
                              <div class="card-header">
                                  Apply for Job
                              </div>
                              <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                      <label for="recipient-name" class="col-form-label">JOB TITLE/SECTOR</label>
                                      <input type="text" class="form-control"  id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Name</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Email id</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Resume</label>
                                        <input type="file" class="form-control" id="recipient-name">
                                    </div>
                                    <input type="submit" class="btn btn-success" value="apply">
                                  </form>
                                  
                              </div>
                          </div>
                  </div>
                  <div class="col-md-4">

                  </div>
              </div>
          </div>

          @endsection


