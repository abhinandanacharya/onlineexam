<?php
include 'header.inc.php';
?>
<br/>
<div class="card card-css">
    <div class="card-header ">
        <div class="row">
            <div class="col-md-9">
                <h3 class="panel-title">Online Exam List</h3>
            </div>
            <div class="col-md-3 card-btn" align="right">
                <button type="button" id="add_button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Add Exam</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>

  <div class="modal-body">
    <div class="form-group">
        <div class="row">
            <label class="col-md-4 text-right">Exam Title <span class="text-danger">*</span></label>
            <div class="col-md-8">
                <input type="text" name="online_exam_title" id="online_exam_title" class="form-control" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-4 text-right">Exam Date & Time <span class="text-danger">*</span></label>
            <div class="col-md-8">
                <input type="text" name="online_exam_datetime" id="online_exam_datetime" class="form-control" readonly />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-4 text-right">Exam Duration <span class="text-danger">*</span></label>
            <div class="col-md-8">
                <select name="online_exam_duration" id="online_exam_duration" class="form-control">
                    <option value="">Select</option>
                    <option value="5">5 Minute</option>
                    <option value="30">30 Minute</option>
                    <option value="60">1 Hour</option>
                    <option value="120">2 Hour</option>
                    <option value="180">3 Hour</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-4 text-right">Total Question <span class="text-danger">*</span></label>
            <div class="col-md-8">
                <select name="total_question" id="total_question" class="form-control">
                    <option value="">Select</option>
                    <option value="5">5 Question</option>
                    <option value="10">10 Question</option>
                    <option value="25">25 Question</option>
                    <option value="50">50 Question</option>
                    <option value="100">100 Question</option>
                    <option value="200">200 Question</option>
                    <option value="300">300 Question</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-4 text-right">Marks for Right Answer <span class="text-danger">*</span></label>
            <div class="col-md-8">
                <select name="marks_per_right_answer" id="marks_per_right_answer" class="form-control">
                    <option value="">Select</option>
                    <option value="1">+1 Mark</option>
                    <option value="2">+2 Mark</option>
                    <option value="3">+3 Mark</option>
                    <option value="4">+4 Mark</option>
                    <option value="5">+5 Mark</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-4 text-right">Marks for Wrong Answer <span class="text-danger">*</span></label>
            <div class="col-md-8">
                <select name="marks_per_wrong_answer" id="marks_per_wrong_answer" class="form-control">
                    <option value="">Select</option>
                    <option value="1">-1 Mark</option>
                    <option value="1.25">-1.25 Mark</option>
                    <option value="1.50">-1.50 Mark</option>
                    <option value="2">-2 Mark</option>
                </select>
            </div>
        </div>
    </div>
</div>

<!-- Modal footer -->
<div class="modal-footer">
    <input type="hidden" name="online_exam_id" id="online_exam_id" />

    <input type="hidden" name="page" value="exam" />

    <input type="hidden" name="action" id="action" value="Add" />

    <input type="submit" name="button_action" id="button_action" class="btn btn-success btn-sm" value="Add" />

    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
</div>
</div>
</form>
</div>
</div>
</div>

<script>
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
  })
</script>