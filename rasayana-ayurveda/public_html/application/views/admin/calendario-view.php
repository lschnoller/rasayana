<?php
if (isset($edit)) {
    $edit = 'default-tab';
    $listing = '';
} else {
    $listing = 'default-tab';
    $edit = '';
}

$me = 'calendario';
?>
<script>
    function redirect(link) {
        window.location.replace(link);
    }
</script>
<div class="main-content"> <!-- Main Content Section with everything -->
    <!-- Page Head -->			
    <div class="clear"></div> <!-- End .clear -->
    <div class="content-box"><!-- Start Content Box -->
        <div class="content-box-header">
            <h3>Calendario</h3>				
            <ul class="content-box-tabs">
                <li><a href="<?php echo base_url() ?>admin_<?= $me ?>" id="listing-tab" class="<?= $listing ?>">List</a></li> <!-- href must be unique and match the id of target div -->
                <li><a href="<?php echo base_url() ?>admin_<?= $me ?>/edit/0" id="addedit-tab" class="<?= $edit ?>">Add New</a></li>
            </ul>

            <div class="clear"></div>

        </div> <!-- End .content-box-header -->

        <div class="content-box-content">
            <?php if ($listing == 'default-tab') { ?>
                <div class="tab-content <?= $listing ?>" id="listing"> <!-- This is the target div. id must match the href of this div's tab -->	
                    <?php if (isset($message)) echo $message; ?>
                    Filtrar por Actividad:
                    <?php
                    echo '<select name="filtercat" onchange="redirect(this.value)">';
                    echo '<option value="0">Todas</option>';
                    if (is_array($cats)) {
                        foreach ($cats as $xkey => $xval) {
                            if ($seccat == $xkey)
                                $sec = 'selected = "selected"';
                            else
                                $sec = '';
                            echo '<option ' . $sec . ' value="' . base_url() . 'admin_calendario/index/title/asc/' . $xkey . '">' . $xval['name'] . '</option>';
                        }
                    }
                    echo '</select>'
                    ?>
                    <table>
                        <thead>
                            <?php
                            echo list_head('admin_' . $me, 'Title', 'title', 'Date', 'event_date', 'Sección', 'category_id');
                            ?>
                        </thead>

                        <tbody>
                            <?php
                            if (is_array($list)) {
                                foreach ($list as $key => $val) {
                                    $proCat = '--------';
                                    if (isset($cats[$val['category_id']]['name']))
                                        $proCat = $cats[$val['category_id']]['name'];

                                    echo list_item_no_delete($val['status'], $key, 'admin_' . $me, $val['title'], $val['event_date'], $proCat);
                                }
                            }
                            ?>							
                        </tbody>
                        <tfoot>
                            <?php $this->pcfunc->itemPerPage($me); ?>
                        </tfoot>

                    </table>

                </div> <!-- End #tab1 -->
            <?php } else { ?>
                <div class="tab-content <?= $edit ?>" id="addedit">

                    <form action="?" method="post"  enctype="multipart/form-data" >
                        <?php
                        if (validation_errors())
                            echo msg_error(validation_errors());
                        ?>

                        <fieldset> 
                            <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui-1.8.custom.css" type="text/css" media="screen" />
                            <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.custom.min.js"></script>
                            <script type="text/javascript">
    $(function() {
        $("#datepicker").datepicker({dateFormat: 'yy-mm-dd'});
    });
                            </script>

                            <?php
                            if (is_array($cats)) {
                                //$pcatsArr['0'] = 'Select Category';
                                foreach ($cats as $pkey => $pval) {
                                    $pcatsArr[$pkey] = $pval['name'];
                                }

                                echo form_dropdown(true, 'Actividad', 'category_id', $pcatsArr, $values['category_id']);
                            }
                            echo form_input(true, 'Title', 'title', set_value('title', $values['title']));
                            echo form_input(true, 'Date', 'event_date', set_value('event_date', $values['event_date']), 'id="datepicker" readonly="readonly"');
                            echo form_input(true, 'Date Text', 'date_text', set_value('date_text', $values['date_text']));
                            echo form_input(true, 'Link', 'link_url', set_value('link_url', $values['link_url']));
                            echo form_textarea(true, 'Description', 'description', set_value('description', $values['description']));
                            echo form_hr();
                            echo form_submit('submit', 'Submit');
                            ?>								
                        </fieldset>

                        <div class="clear"></div><!-- End .clear -->

                    </form>

                </div> <!-- End #tab2 -->  
            <?php } ?>      
        </div> <!-- End .content-box-content -->
    </div> <!-- End .content-box -->			
    <div class="clear"></div>		