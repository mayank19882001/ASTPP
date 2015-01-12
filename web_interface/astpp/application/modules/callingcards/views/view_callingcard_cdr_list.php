<? extend('master.php') ?>
<? startblock('extra_head') ?>


<script type="text/javascript" language="javascript">
    $(document).ready(function() {
      
        build_grid("cc_cdr_grid","",<? echo $grid_fields; ?>,<? echo $grid_buttons; ?>);
        
       $("#cc_cdr_search_btn").click(function(){
           
            post_request_for_search("cc_cdr_grid","","cdr_cc_search");
        });        
        $("#id_reset").click(function(){
            clear_search_request("cc_cdr_grid","");
        });
    });
</script>
   <script>
	  $(document).ready(function() {
		$("#customer_cdr_from_date").datetimepicker({ dateFormat: 'yy-mm-dd' });		
		$("#customer_cdr_to_date").datetimepicker({ dateFormat: 'yy-mm-dd' });			
	  });
	  </script>
<? endblock() ?>

<? startblock('page-title') ?>
    <?= $page_title ?><br/>
<? endblock() ?>

<? startblock('content') ?>        

<div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" id="searchbar">
    <div class="portlet-header ui-widget-header" ><span id="show_search" style="cursor:pointer">Search</span><span class="ui-icon ui-icon-circle-arrow-s"></span></div>
    <div class="portlet-content"  id="search_bar" style="cursor:pointer; display:none">
        <?php echo $form_search; ?>
        </div>
</div>

<div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">                        
    <div class="portlet-header ui-widget-header">Calling Cards Cdrs List<span class="ui-icon ui-icon-circle-arrow-s"></span></div>
    <div class="portlet-content">         
        <form method="POST" action="del/0/" enctype="multipart/form-data" id="ListForm">
            <table id="cc_cdr_grid" align="left" style="display:none;"></table>
        </form>
    </div>
</div>  
    
<div style="float:right;"><strong>
    <a href="/callingcards/callingcards_export_cc_cdr_xls">Export XLS <img src="/assets/images/file_tree/xls.png" alt='XLS'/></a> |
    <a href="/callingcards/callingcards_export_cc_cdr_pdf">Export PDF <img src="/assets/images/file_tree/pdf.png" alt='PDF'/></a></strong>
</div>

<br/><br/>
  
<? endblock() ?>	
<? end_extend() ?>  
