<div class="box_links">
    <?php if(doo_here_links($post->ID)){ ?>
    <div class="linktabs">
    	<h2><?php _d('Links'); ?></h2>
    	<ul class="idTabs">
    		<?php // Menu Link types
            if(doo_here_type_links($post->ID, __d('Download'))) echo '<li><a href="#download">'. __d('Download'). '</a></li>';
            if(doo_here_type_links($post->ID, __d('SEASON 01'))) echo '<li><a href="#season01">'. __d('SEASON 01'). '</a></li>';
            if(doo_here_type_links($post->ID, __d('SEASON 02'))) echo '<li><a href="#season02">'. __d('SEASON 02'). '</a></li>';
            if(doo_here_type_links($post->ID, __d('SEASON 03'))) echo '<li><a href="#season03">'. __d('SEASON 03'). '</a></li>';
            if(doo_here_type_links($post->ID, __d('SEASON 04'))) echo '<li><a href="#season04">'. __d('SEASON 04'). '</a></li>';
            if(doo_here_type_links($post->ID, __d('SEASON 05'))) echo '<li><a href="#season05">'. __d('SEASON 05'). '</a></li>';
            if(doo_here_type_links($post->ID, __d('SEASON 06'))) echo '<li><a href="#season06">'. __d('SEASON 06'). '</a></li>';
            if(doo_here_type_links($post->ID, __d('SEASON 07'))) echo '<li><a href="#season07">'. __d('SEASON 07'). '</a></li>';
            if(doo_here_type_links($post->ID, __d('SEASON 08'))) echo '<li><a href="#season08">'. __d('SEASON 08'). '</a></li>';
            if(doo_here_type_links($post->ID, __d('SEASON 09'))) echo '<li><a href="#season09">'. __d('SEASON 09'). '</a></li>';
            if(doo_here_type_links($post->ID, __d('SEASON 10'))) echo '<li><a href="#season10">'. __d('SEASON 10'). '</a></li>';
      // End Menu ?>
    	</ul>
    </div>
    <?php // Table lists

        DooLinks::tablelist_front($post->ID, __d('Download'), 'download');
        DooLinks::tablelist_front($post->ID, __d('SEASON 01'), 'season01');
        DooLinks::tablelist_front($post->ID, __d('SEASON 02'), 'season02');
        DooLinks::tablelist_front($post->ID, __d('SEASON 03'), 'season03');
        DooLinks::tablelist_front($post->ID, __d('SEASON 04'), 'season04');
        DooLinks::tablelist_front($post->ID, __d('SEASON 05'), 'season05');
        DooLinks::tablelist_front($post->ID, __d('SEASON 06'), 'season06');
        DooLinks::tablelist_front($post->ID, __d('SEASON 07'), 'season07');
        DooLinks::tablelist_front($post->ID, __d('SEASON 08'), 'season08');
        DooLinks::tablelist_front($post->ID, __d('SEASON 09'), 'season09');
        DooLinks::tablelist_front($post->ID, __d('SEASON 10'), 'season10');
    }

    // Form Post Links
    if(is_user_logged_in() && DooLinks::front_publisher_role() === true) { ?>
    <div id="form" class="sbox">
        <div id="resultado_link_form"></div>
        <div class="form_post_lik">
        	<form id="doopostlinks" enctype="application/json">
        		<div class="table">
        			<table data-repeater-list="data" class="post_table">
        				<thead>
        					<tr>
        						<th><?php _d('Type'); ?></th>
        						<th><?php _d('URL'); ?></th>
        						<th><?php _d('Quality'); ?></th>
        						<th><?php _d('Language'); ?></th>
        						<th><?php _d('Audiobit'); ?></th>
        						<th><?php _d('File size'); ?></th>
        						<th></th>
        					</tr>
        				</thead>
        				<tbody class="tbody">
        					<tr data-repeater-item class="row first_tr">
        						<td>
        							<select name="type">
        								<?php foreach( DooLinks::types() as $type) { echo "<option>{$type}</option>"; } ?>
        							</select>
        						</td>
        						<td>
        							<input name="url" type="text" class="url" placeholder="http://">
        						</td>
        						<td>
        							<select name="quality">
        							    <?php foreach( DooLinks::resolutions() as $resolution) { echo "<option>{$resolution}</option>"; } ?>
        							</select>
        						</td>
        						<td>
        							<select name="lang">
        							    <?php foreach( DooLinks::langs() as $lang) { echo "<option>{$lang}</option>"; } ?>
        							</select>
        						</td>
        						<td>
        							<select name="odio">
        							    <?php foreach( DooLinks::odios() as $odio) { echo "<option>{$odio}</option>"; } ?>
        							</select>
        						</td>
        						<td>
 <select name="vdio">
        							    <?php foreach( DooLinks::vdios() as $vdio) { echo "<option>{$vdio}</option>"; } ?>
        							</select>
        						</td>
        						<td>
       							<input name="size" type="text" class="size">
        						</td>
        						<td>
        							<a data-repeater-delete class="remove_row">X</a>
        						</td>
        					</tr>

        				</tbody>
        			</table>
        		</div>
        		<div class="control">
        			<div class="left"><a data-repeater-create id="add_row" class="add_row">+ <?php _d('Add row'); ?></a></div>
        			<div class="right"><input type="submit" value="<?php _d('Send link(s)'); ?>"></div>
        		</div>
        		<input type="hidden" name="post_id" value="<?php the_id(); ?>">
                <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('doolinks'); ?>">
                <input type="hidden" name="action" value="doopostlinks">
        	</form>
        </div>
    </div>
    <?php } ?>
</div>
