<!-- Content Wrapper. Contains page content -->
<style type="text/css">
  .red {
  background-color: #DD4B39 !important;
}
</style>
<div class="content-wrapper" >
<div class="container-fluid">
<br>
 <?php
  if($this->session->userdata('message'))
  {
    ?>
    <div class="alert alert-success text-center" style="font-size: 18px">
    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
  <button type="button" class="close" data-dismiss="alert"><i class="fa fa-remove"></i></button><br>
  </div>
    <?php
  }
  ?>

  <?php
  if($this->session->userdata('warning'))
  {
    ?>
    <div class="alert alert-danger text-center" style="font-size: 18px">
    <?php echo $this->session->userdata('warning') <> '' ? $this->session->userdata('warning') : ''; ?>
  <button type="button" class="close" data-dismiss="alert"><i class="fa fa-remove"></i></button><br>
  </div>
    <?php
  }
  ?>
<?php //  echo var_dump($_SESSION); ?>
 <div class="row">
         
     <button id="asn_save_btn" class="btn btn-app"  onclick="$('#insert').submit()" >
          <i class="fa fa-save"></i> Save
        </button>
  </div>
  <?php // echo var_dump($_SESSION) ?>
 
  
<!-- PO  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">PO Configuration </h3>
            
            <div class="box-tools pull-right"> 
             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> -->
          </div>
        </div>
        <!-- /.box-header --> 
        <div class="box-body">
              <div class="tab-pane active" id="view1"> 
                  <div class="form-group col-md-12">

                      <label class="control-label col-md-3">Supplier mandatory to Accept/Reject PO</label>
                      <div class="col-md-3">
                          <select name="supplier_mandatory_to_accept_po" class="form-control">
                            <option <?php if($get_current_settings->row('supplier_mandatory_to_accept_po') == 1){echo 'selected ';} ?>value="1">Active</option>
                            <option <?php if($get_current_settings->row('supplier_mandatory_to_accept_po') == 0){echo 'selected ';} ?>value="0">Inactive<?php $get_current_settings->row('supplier_mandatory_to_accept_po');?></option>
                          </select>
                      </div> 

                      <label class="control-label col-md-3">Watermark Text</label>
                      <div class="col-md-3">
                          <input class="form-control" name="po_report_watermark_info"  type="text" value="<?php echo $get_current_settings->row('po_report_watermark_info') ?>" autocomplete="off" >
                      </div> 
                  </div> 
             </div> 
        </div>  
      </div>  
  <!-- nothing ends after -->
 
    <div class="row">
    <div class="col-md-12">
      <!-- Module  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">GRN Configuration</h3>
           <div class="box-tools pull-right"> 
             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <form id="insert" role="form" method="POST"  action="<?php echo site_url('CusAdmin_controller/insert_config')?>">
             
            <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> -->
          </div>
        </div>
        <!-- /.box-header --> 
        <div class="box-body">
              <div class="tab-pane active" id="view1"> 
                  <div class="form-group col-md-12">
                    <label class="control-label col-md-3">GRN e-Invoice Start Date</label>
                      <div class="col-md-3">
                          <input class="form-control" name="grn_e_invoice_start_date"  type="date" value="<?php echo $get_current_settings->row('einv_grab_date');?>" autocomplete="off"  >
                          
                      </div> 
                      <label class="control-label col-md-3">GRN auto e-Invoice Status</label>
                      <div class="col-md-3">
                          <select name="grn_e_invoice_status" class="form-control">
                            <option <?php if($get_current_settings->row('force_einvoice') == 1){echo 'selected ';} ?>value="1">Active</option>
                            <option <?php if($get_current_settings->row('force_einvoice') == 0){echo 'selected ';} ?>value="0">Inactive<?php $get_current_settings->row('force_einvoice');?></option>
                          </select>
                      </div> 
                  </div> 

                  <div class="form-group col-md-12">
                    <label class="control-label col-md-3">GRN e-Invoice Notification (days)</label>
                      <div class="col-md-3">
                          <input class="form-control" name="GRN_einv_notification_1"  type="number" value="<?php echo $get_current_settings->row('GRN_einv_notification_1') ?>" autocomplete="off"  >
                          
                      </div> 

                      <label class="control-label col-md-3">GRN e-Invoice Last Notification (days)</label>
                      <div class="col-md-3">
                          <input class="form-control" name="GRN_einv_notification_2"  type="number" value="<?php echo $get_current_settings->row('GRN_einv_notification_2') ?>" autocomplete="off"  >
                          
                      </div> 
                  </div> 

                  <div class="form-group col-md-12">
                    <label class="control-label col-md-3">GRN Auto E-Invoice (days)</label>
                      <div class="col-md-3">
                          <input class="form-control" name="GRN_auto_einv_days"  type="number" value="<?php echo $get_current_settings->row('GRN_auto_einv_days') ?>" autocomplete="off"  >
                          
                      </div> 
                  </div>

             </div> 
        </div>  
      </div>
    </div>
  </div> 
<!-- next lebel play~ --> 
<!-- Module  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Stock Return Batch Configuration (STRB)</h3>
            
            <div class="box-tools pull-right"> 
             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> -->
          </div>
        </div>
        <!-- /.box-header --> 
        <div class="box-body">
              <div class="tab-pane active" id="view1"> 
                  <div class="form-group col-md-12">
                      <label class="control-label col-md-3">Stock Return Batch Start Date</label>
                      <div class="col-md-3">
                          <input class="form-control" name="strb_start_date"  type="date" value="<?php echo $get_current_settings->row('strb_start_date');?>" autocomplete="off"  >
                      </div> 

                      <label class="control-label col-md-3">STRB Auto Accept Status</label>
                      <div class="col-md-3">
                          <select name="strb_auto_status" class="form-control">
                            <option <?php if($get_current_settings->row('force_strb') == 1){echo 'selected ';} ?>value="1">Active</option>
                            <option <?php if($get_current_settings->row('force_strb') == 0){echo 'selected ';} ?>value="0">Inactive<?php $get_current_settings->row('force_strb');?></option>
                          </select>
                      </div> 
<!--                       <label class="control-label col-md-3">Stock Return Batch Total Days to Accept</label>
                      <div class="col-md-3">
                          <input class="form-control" name="RB_total_days_accept"  type="number" value="<?php echo $get_current_settings->row('RB_total_days_accept') ?>" autocomplete="off" >
                      </div>  -->
                  </div> 

                  <div class="form-group col-md-12"  >
                   <label class="control-label col-md-3">Stock Return Batch first notification (days) <br><small> 1st Reminder</small></label>
                      <div class="col-md-3">
                         <input class="form-control" name="RB_email_notification_1"  type="number" value="<?php echo $get_current_settings->row('RB_email_notification_1') ?>" autocomplete="off" >
                      </div>

                      <label class="control-label col-md-3">Stock Return Batch second notification (days) <br><small> 2nd Reminder</small></label>
                      <div class="col-md-3">
                         <input class="form-control" name="RB_email_notification_2"  type="number" value="<?php echo $get_current_settings->row('RB_email_notification_2') ?>" autocomplete="off" >
                      </div>    
                  </div>

                  <div class="form-group col-md-12" >
                  <label class="control-label col-md-3">Stock Return Batch auto generate DN (days) <br><small> 3rd Reminder (After next day AUTO ACCEPT)</small></label>
                      <div class="col-md-3">
                         <input class="form-control" name="RB_auto_gen_dn_days"  type="number" value="<?php echo $get_current_settings->row('RB_auto_gen_DN_days') ?>" autocomplete="off" >
                      </div>  
                  <!-- <label class="control-label col-md-3">Stock Return Batch Show Image</label>
                      <div class="col-md-3">
                         <select name="strb_is_image" class="form-control">
                            <option <?php if($get_current_settings->row('strb_is_image') == 1){echo 'selected ';} ?>value="1">Active</option>
                            <option <?php if($get_current_settings->row('strb_is_image') == 0){echo 'selected ';} ?>value="0">Inactive<?php $get_current_settings->row('strb_is_image');?></option>
                          </select>
                      </div>   -->
                  </div> 

                  <!-- <div class="form-group col-md-12" >
                  <label class="control-label col-md-3">Stock Return Batch Image Link</label>
                      <div class="col-md-6">
                         <input class="form-control" name="strb_image_link"  type="text" value="<?php echo $get_current_settings->row('strb_image_link') ?>" autocomplete="off" >
                      </div>  
                  </div> -->

             </div> 
        </div>  
      </div>  
      <!-- end return collection -->

<!-- PRDN  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Purchase Return Configuration (PRDN)</h3>
            
            <div class="box-tools pull-right"> 
             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> -->
          </div>
        </div>
        <!-- /.box-header --> 
        <div class="box-body">
              <div class="tab-pane active" id="view1"> 
                  <div class="form-group col-md-12">
                      <label class="control-label col-md-3">Return Collection Expiry Days</label>
                      <div class="col-md-3">
                          <input class="form-control" name="PRDN_total_days_collect"  type="number" value="<?php echo $get_current_settings->row('PRDN_total_days_collect') ?>" autocomplete="off" >
                      </div> 
                  </div> 


                   <input class="form-control" name="prdn_auto_gen_dn_days"  type="hidden" value="<?php echo $get_current_settings->row('PRDN_auto_gen_DN_days') ?>" autocomplete="off" >
                  

                 <!--  <div class="form-group col-md-12" >
                  <label class="control-label col-md-3">Return Collection auto generate DN (days)</label>
                      <div class="col-md-3">
                         <input class="form-control" name="prdn_auto_gen_dn_days"  type="number" value="<?php echo $get_current_settings->row('PRDN_auto_gen_DN_days') ?>" autocomplete="off" >
                      </div>  
                  </div>  -->

             </div> 
        </div>  
      </div>  
  <!-- nothing ends after -->

  <!-- CONSIGNMENT  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Consignment Sales Configuration</h3>
            
            <div class="box-tools pull-right"> 
             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> -->
          </div>
        </div>
        <!-- /.box-header --> 
        <div class="box-body">
          <div class="tab-pane active" id="view1"> 
            <div class="form-group col-md-12">
              <label class="control-label col-md-3">Consignment Sales Start Date</label>
                <div class="col-md-3">
                <input class="form-control" name="consignment_start_date"  type="date" value="<?php echo $get_current_settings->row('consignment_start_date');?>" autocomplete="off"  >
                </div> 

              <label class="control-label col-md-3">Consignment Sales Flow to Backend HQ </label>
                <div class="col-md-3">
                  <select name="consign_statement_flow_hq" class="form-control">
                    <option <?php if($get_current_settings->row('consign_statement_flow_back') == 1){echo 'selected ';} ?>value="1">Active</option>
                    <option <?php if($get_current_settings->row('consign_statement_flow_back') == 0){echo 'selected ';} ?>value="0">Inactive<?php $get_current_settings->row('consign_statement_flow_back');?></option>
                  </select>
                </div> 
            </div> 
            
          </div> 
        </div>  
      </div>  
  <!-- nothing ends after -->
 </form>

</div>
</div> 

<script> 
 $(function() {
    $('input[name="docdate"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
         locale: {
            format: 'YYYY-MM-DD'
        },
         
    }, 
  );
});

  $(function() {
    $('input[name="published_date"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        timePicker: true, 
        timePickerIncrement: 30,
        ampm: true,
         locale: {
            format: 'YYYY-MM-DD HH:mm:ss'
        },
         
    }, 
  );
});  
</script> 
 