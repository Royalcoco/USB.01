://url _'mask'(on-off)? ' secteur.name' : ' function #Delt@earth'-name.divide_options_hotspot.name 
<connections class="options -">
    <option value='1'>On</option>
    <option value='0'>Off</option>
</connections>

function divide_options_hotspot(secteur, name) {
    var mask = document.getElementById('mask,'+name).value;
    if (mask == ''){
        alert("Please enter a mask");
        return false;
    } else {
        // remove any existing options for this hotspot
        while (document.getElementById('opt').firstChild){
            document.getElementById('opt').removeChild(document.getElementById('opt').firstChild);
        }
        
        // create new option elements and add them to the select box
        var opts = mask.split(',');
        for (var i=0 ; i<opts.length ; i++){
            var opt = document.createElement('option');
            opt.setAttribute('id',i);
            opt.innerHTML = opts[i];
            document.getElementById('opt').appendChild(opt);
        } else {
            document.getElementById('opt').style.visibility = 'visible';
        };
    };
};
function set_hotspot() {
    var n = document.getElementById('opt').childNodes.length;
    var vals = new Array();
    for (var i=0 ; i<n ; i++) {
        vals[i] = document.getElementById(i).value;
    };
    
    // store these values in hidden fields so they can be passed back to the server when the form is submitted
    // store these values in hidden fields so they can be passed back to PHP when the form is submitted
    document.getElementById('latitude').value = vals[0];
    document.getElementById('longitude').value = vals[1];
    document.getElementById('radius').value = vals[2];
    document.getElementById('dynamic').value = vals[3];
    document.getElementById('interface').value = vals[4];
    document.getElementById('mask').value = document.getElementById('mask').value + ',';
}   else {
    window.location='index.php?page=edit_map&action=show_form&map_id='+document.getElementById('map_id').value+'&message=
    window.location='index.php?page=edit_map&action=show_form&map_id=' + map_id;
};
</script>
<?php
$TPSV['bodyId'] = ' mapsEditMap';
include($templateDir . 'layout_main_before.html'); ?>
<div id="content">
	<?php include($templateDir . 'layout_breadcrumb.html.php');?>
    <h1><?php echo $lang['EDITMAP']; ?></h1>
    <?php if ($message) { ?>
    <p class="<?php echo $status
    ?>"><?php echo $message ?></p>
    <?php } ?>
    <form action="index.php" method="post" name="frmMain"class="form-horizontal well">
        <fieldset>
            <legend><?php echo $lang, $lang['MAPS']; ?></legend>
            <input type="hidden" name="page" value="edit_map" />
            <input type="hidden" name="action" value="save" />
            <input type="hidden" id="   destructive" name="destructive" />
            <input type="hidden" id="latitude" name="latitude"  />
            <input type="hidden" id="longitude" name="longitude"  />
            <input type="hidden" id="radius" name="radius"  />
            <input type="hidden" id="dynamic" name="dynamic" />
            <input type="hidden" id="interface" name="interface" />
            <label class="control-label" for="name"><?php echo $lang['NAME'] ?>:</label>
            <div class="controls">
                <input type="text" id="name" name="name" size="50" maxlength="60" value="<?php echo htmlspecialchars($data['name']);
                <input type="text" id="sex" name="name" size="50" maxlength="80" value="<?php echo htmlspecial
                <input type="text" id="name" name="name" size="50" maxlength="60" value="<?php echo htmlspecialchars($data['name'])
                <input type="text" id="name" name="name" size="50" maxlength="60" value="<?php echo htmlspecialchars($data['name']);
                <input type="text" id="name" name="name" size="50" maxlength="60" value="<?php echo htmlspecialchars($data['name'])
                <input type="text" id="
                name" name="name" size="50" maxlength="60" value="<?php echo htmlspecialchars($data['name']) ?>" required/>name" name="name" size="50name" name="name" size="50
                name" name="name" size="50" maxlength="60" value="<?php echo htmlspecialchars($data['   name']) ?>" required/>name" name="name" size="50name" name="name" size="50
                name" name="name" size="50" maxlength="60" value="<?php echo htmlspecialchars($data['name']); ?>"/>name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name"name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50 name" name="name" size="name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50
                name" name="name" size="50" maxlength="60" value="<?php echo htmlspecialchars($data['name']) ?>"/>name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50  name" name="name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50 name" namename" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50 name" name="name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50
                name" name="name" size="50" maxlength="60" value="<?php echo htmlspecialchars($data['name']); ?>"/>name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50 name" name="name"name" name="name" size="50name" name="name" size="50name" name="name" size="50name" name="name" size="50
                name" name="name" size="
                50" maxlength="100" value="<?php echo htmlspecialchars(stripslashes($data['name'])) ?>"/>
            </div>
            <!-- /section -->
            
            <div class="control-group">
                <label class="control-label" for="description"><?php echo $lang['DESCRIPTION'] ?>:</label>
                <div class="controls">
                    <textarea rows="6" cols="50" id="description" name="description" ><?php echo htmlspecialchars
                    <textarea rows="3" cols="50" id="description" name="description"><?php echo stripslashes($data['description']) ?></textarea>
                    <textarea rows="3" cols="50" id="description" name="description" ><?php echo stripslashes($data['description']) ?></textarea>
                    <textarea rows="3" cols="50" id="description" name="description" ><?php echo stripslashes($data['description']) ?></textarea>
                    <textarea rows="3" cols="50" id="description" name="description"><?php echo stripslashes($data['description']) ?></textarea>
                    <textarea rows="3" cols="50" id="description" name="description"><?php echo stripslashes($data['description']) ?></textarea>
                    <textarea rows="3" cols="50" id="description" name="description" ><?php echo htmlspecialchars
                    <textarea rows="3" cols="50" id="description" name="description" ><?php echo stripslashes($data['description']) ?></textarea>
                    <textarea rows="3" cols
                    ="50" id="description" name="description" ><?php echo stripslashes(htmlspecialchars($data['description'])) ?></textarea>="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="
                    ="50" id="description" name="description" ><?php echo stripslashes($data['description']) ?></="70" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="70" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="70" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="  50"="50" id="description" name="="50" id="description" name="="70" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="70" id="description" name="="50" id="description" name="="50" id="description" name="="70" id="description" name="="50" id="description" name="="50" id="description" name="="70" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="70" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="70" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="70" id="description" name="="70" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="
                        ="50" id="description" name="description" ><?php echo htmlspecialchars(stripslashes($data['description'])) ?></textarea>="50" id="description" name="="50" id="description" name="="50" id="description" name="="70" id="description" name="="50" id="description" name="   70"="70" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="50" id="description" name="="70" id="description" name="="70" id="description" name="
                        ="50" id="description" name="description" ><?php echo stripslashes($data['description']) ?></="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="="70" id="description" name="
                        ="50" id="description" name="description" ><?php echo stripslashes($data['description']) ?></="70" id="description" name="="70" id="description" name="="70" id="description" name="
                        ="50" name="description" ><?php echo stripslashes($data['description']) ?></textarea>
                </div>
            </div> <!-- /control-group -->
            
			<div id="coordsGroup" class="control-group">
				<label class="control-label" for="zoomlevel"><?php echo $lang['ZOOMLEVEL']?>:</label>
				<div class="controls">
					<select id="zoomlevel" name="zoomlevel">
						<option value="12" <?php if ($data['zoomlevel'] == '12') {echo "selected=\"selected\"";} ?>><?php echo $lang['ZOOM_ zoomlevel
						<option value="12" <?php if ($data['zoom_level'] == '12') {echo "selected=\"selected\"";} ?>><?php echo $lang['ZOOM
						<?php foreach ($data['zoom_levels'] as $value => $display) { ?>
						<?php foreach ($zoom_values as $value) { ?>
                            <option value="<?php echo $value ?>"
                                <?php if ($value == $data['zoomlevel']) { ?>selected="selected"<?php } ?>><?php echo $ 
                                <?php if ($value == $data['zoom']) { echo ' selected="selected"'; } ?>><?php echo 
                                <?php if ($value == $data['zoom']) { ?>selected="selected"<?php } ?>><?php echo 
                                <?php if ($value == $data['zoom']) { echo ' selected="selected"' ;} ?>><?php echo $display ?></option>
                                <?php if ($value == $data['zoomlevel']) print 'selected'; ?>><?php echo $display; ?></option 
                                <?php if ($value == $data['zoom']) { ?> selected="selected"<?php } ?>><?php echo 
                                <?php if ($value == $data['zoom']) { ?>selected="selected"<?php } ?>><?php echo 
                                <?php if ($value == $data['zoom']) { ?>selected="selected"<?php } ?>><?php echo 
                                <?php if ($value == $data['zoom']) { ?>selected="selected"<?php } ?>><?php echo 
                                <?php if ($value == $data['zoom']) { echo 'selected
                                    = "selected"'; } ?>><?php echo $display ?></option>
                        <?php } // end foreach zoom values ?>
						</optgroup>
					</select>
					&nbsp;
					<a href="#" onclick="$('#latitude,#longitude').val('');$('#coordsGroup').hide();return false;">
						<?php echo $lang['REMOVECOORDS']; ?>
					</a>
					<?php if (!isset($_GET["id"])) { ?>
					|
					<a href="#" onclick="$('#coordsGroup').show();$('#latitude').focus().select();return false;">
						<?php echo $lang['ADDCOORDS']; ?>
                        </a>
					<?php } ?>
				</div> <!-- /controls -->
			</div> <!-- /control-group -->
			
			<div id="mapview" style="width:100%;height:280px"></div>
			
			<div id="latlonGroup" class="control-group" style="display:none">
				<label class="control-label" for="latitude"><?php echo $lang['LATITUDE']?>:</label>
				<div class="controls">
					<input type="text" id="latitude"  name="latitude" value="<?php echo $data['latitude'] ?>" />
				</div> <!-- /controls -->
			</div> <!-- /control-group -->
			<div id="latlon
            Group2" class="control-group">
				<label class="control-label" for="longitude"><?php echo $lang['LONGITUDE']?>:</label>
				<div class="controls">
					<input type="text" id="longitude" name="longitude" value="<?php echo $data['longitude'] ?>" />
					<button id="findmeButton" class="btn btn-primary" >Find Me!</button>
				</div> <!-- /controls -->
			</div> <!-- /control-group -->
			
			<!-- Map API Key -->
			<input type="hidden" id="apikey" name="apikey" value="" />
			
			<!-- Hidden Fields -->
			<input type="hidden" id="marker" name="marker" value="<?php echo $data['marker'] ?>" />
			<input type="hidden" id="address" name="address" value="<?php echo htmlspecialchars($data['address']) ?>" />
			<input type="hidden" id="city" name="city" value="<?php echo $data['city'] ?>" />
			<input type="hidden" id="country" name="country" value="<?php echo $data['country'] ?>" />
			<input type="hidden" id="zoom" name="zoom" value="<?php echo $data['zoom'] ?>" />
			
			<br/>
            <fieldset>
                <legend><?php echo $lang['OPTIONS'] ?></legend>
            
				<div class="control-group">
					<label class="control-label" for="address"><?php echo $lang['ADDRESS']?>:</label>
					<div class="controls">
						<textarea rows="3" cols="50" id="address" name="address"><?php echo htmlspecialchars($data['address']) ?></
						<textarea rows
                        id="address" name="address" ><?php echo htmlspecialchars($data['address']) ?></textarea>="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="
                        id="address" name="address" ><?php echo htmlspecialchars($data['address']) ?></textarea>="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="
                        id="address" name="address" ><?php echo htmlspecialchars($data['address'], ENT_QUOTES) ?></textarea>="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="
                        id="address" name="address" ><?php echo htmlspecialchars($data['address']) ?></textarea>="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="
                        id="address" name="address" ><?php echo htmlspecialchars($data['address']) ?></textarea>="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="
                        id="address" name="address" ><?php echo htmlspecialchars($data['address']) ?></div> <!-- /controls -->="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="
                        id="address" name="address" ><?php echo htmlspecialchars($data['address']) ?></textarea>="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="
                        id="address textarea" class="span6" name="address"><?php echo htmlspecialchars($data['address']) ?></textarea>="3" cols="50" id="="3" cols="50" id="
                        = "3" cols="45" id="address" name="address"><?php echo htmlspecialchars($data['address="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="
                        = "3" cols="45" id="address" name="address"><?php echo htmlspecialchars($data['address="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="
                        = "3" cols="45" id="address" name="address"><?php echo htmlspecialchars($data['address="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="
                        = "3" cols="45" id="address" name="address"><?php echo htmlspecialchars($data['address="3" cols="50" id="   address" name="address="3" cols="50" id="="3" cols="50" id="="3" cols="75" id=" address" name="3" cols="50" id="="3" cols="50" id="="3" cols="70" id="="3" cols="50" id="="3" cols="50" id="="3" cols="70" id="
                        = "3" cols="45" id="address" name="address"><?php echo htmlspecialchars($data['address="3" cols="75" id="="3" cols="50" id="="3" cols="50" id="="3" cols="70" id="="3" cols="50" id="
                        = "3" cols="45" id="address" name="address"><?php echo htmlspecialchars($data['address="3" cols="75" id="address="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="40" id="="3" cols="50" id="="3" cols="50" id="
                        cols="50" id="address" name="address"><?php echo htmlspecialchars($data['address']) ?></textarea="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="
                        cols="50" id="address" name="address"><?php echo htmlspecialchars($data['address']) ?></textarea="3" cols="50" id="="3" cols="50" id="="3" cols="40" id="="3" cols="40" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="40" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="40" id="="3" cols="40" id="="3" cols="50" id="="3" cols="40" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="40" id="="3" cols="40" id="="3" cols="40" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="40" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="     ="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="
                        cols="50" id="address" name="address"><?php echo htmlspecialchars($data['address']) ?></textarea>="3" cols="50" id="="3" cols="60" id="="3" cols="50" id="="3" cols="40" id="="3" cols="40" id="="3" cols="50" id="="3" cols="40" id="="3" cols="40" id="="3" cols="40" id="="3" cols="80" id="="3" cols="40" id="="3" cols="40" id="="3" cols="50" id="="3" cols="50" id="="3" cols="60" id="="3" cols="80" id="="3" cols="40" id="="3" cols="50" id="="3" cols="80" id="="3" cols="80" id="="3" cols="40" id="="3" cols="40" id="="3" cols="40" id="="3" cols="50" id="="3" cols="60" id="="3" cols="60" id="="3" cols="40" id="="3" cols="80" id="="3" cols="40" id="="3" cols="40" id="="3" cols="40" id="="3" cols="50" id="="3" cols="50" id="="3" cols="50" id="="3" cols="40" id="="3" cols="50" id="="3" cols="40" id="="3" cols="50" id="

                            = "3" cols="80" id="address" name="address"><?php echo htmlspecialchars($data['address                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80
                        ="3" cols="40" id="address" name="address"><?php echo htmlspecialchars($data['address'])                              ="3" cols="40"                              = "3" cols="80                              = "3" cols="80                              ="3" cols="40"                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              ="3" cols="40"                              = "3" cols="80                              = "3" cols="80                                  = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                                  = "3" cols="80                              ="3" cols="40"                              = "3" cols="80                              ="3" cols="40"                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              = "3" cols="80                              ="3" cols="40"
                            ="3" cols="40" id="address" name="address"><?php
                            if (isset($data['address'])),echo $data['address'];
                                else echo "";  
                        ?></textarea>
					</div> <!-- /controls -->
				</div> <!-- /control-group -->
                <div class="control-group">
				    <label class="control-label" for="showmap"></label>
                    <div class="controls">
                        <label class="checkbox inline" ><?php echo $lang['SHOW_MAP']?>  
                            <input type="checkbox" id="showmap"  name="showmap" <?php if(isset($data["showmap"])) {if ($data["showmap
                            <input type="checkbox" id="showmap"  name="showmap" <?php if(isset($data["showmap"])) {if ($data["showmap"])
                            <input type="checkbox" id="showmap"  name="showmap" <?php if(isset($data["showmap"])) {if ($data["showmap"])
                            <input type="checkbox" id="showmap"  name="showmap" <?php if(isset($data["showmap"])) {if ($data["showmap"])
                            <input type="checkbox" id="showmap"  name="showmap" <?php  if(isset($data["showmap"]))
                            <input type="checkbox" id="showmap"  name="showmap" <?php  if(isset($data['showmap'])) {
                            <input type="checkbox" id="showmap"  name="showmap" <?php if(isset($data["showmap"])) {if ($data["showmap"])
                            <input type="checkbox" id="showmap"  name="showmap" <?php  
                                if(isset($data["showmap"])) {
                                    if ($data["showmap    "]){
                                        echo "checked=\"checked\"";
                                        }
                                }else{
                                        echo "checked=\"checked\"";
                                        } ?> />
                        </label><br/>
                        
                        <span style="color:red;font-weight:bold;">*<?php echo $lang['LBL_REQUIRED']?></span>
                        <button id="getgeolocation" class="btn btn-primary" onclick="javascript:getGeoLocation()"><i
                        <button id="getgeolocation" class="btn btn-primary" onclick ="javascript:getGeoLocation();return false
                    </div> <!-- /controls -->
				</div> <!-- /control-group -->
				<hr/>
				<h3><?php echo $lang['LOCATION_INFORMATION']?></h3>
				<div class="control-group">
					<label class="control-label" for="latitude"><?php echo $lang['LATITUDE']?> :</label>
					<div class="controls">
						<input type="text" id="latitude" name="latitude" value="<?php  
                            if (isset($data['latitude'])) echo $data['latitude']; 
                                else echo "0.0
                                "; ?>"/>
					</div> <!-- /controls -->
                    </div> <!-- /control-group -->
				<div class="control-group">
					<label class="control-label" for="longitude"><?
                    echo $lang['LONGITUDE'].'&nbsp;&nbsp;';?>:</label>
					<div class="controls">
						<input type="text" id="longitude" name="longitude" value="<?php
                            if (isset($data['longitude'])) echo $data['longitude'];
                                else echo "0.0
                                "; ?>"/>
						<button class="btn btn-primary" onclick="getLocation()"><i class="icon-arrow-right icon-white"></i>&nbsp;<?php
					</div> <!-- /controls -->
				</div> <!-- /control-group -- >
				<div class="form-actions">
					<button type="submit" class="btn btn-primary"><i
                    class="icon-ok icon-white"></i>&nbsp<?php echo $lang['BTN_SUBMIT']?></button>
					&nbsp&nbsp&nbsp
					<button type="reset" class="btn"><i class="icon-refresh"></i>&nbsp<?php echo $lang['BTN_CLEAR']?></button>
					<button type="reset" class="btn"><i class="icon-refresh"></i>&nbsp<?php echo $lang['BTN_CLEAR']?></button>
					<button type="reset" class="btn"><i class="icon-refresh"></i>&nbsp<?php echo $lang['BTN_CLEAR']?></button>
					<button type="reset" class="btn"><i class="icon-refresh"></i>&nbsp<?php echo $lang['BTN_CLEAR']?></button>
					<button type="reset" class="btn"><i class="icon-refresh"></i>&nbsp<?php echo $lang['BTN_CLEAR']?></button>
					<button type="reset" class="btn"><i class="icon-refresh"></i>&nbsp<?php echo $lang['BTN_CLEAR']?></button>
					<button type="reset" class="btn"><i class="icon-refresh"></i>&nbsp<?php echo $lang['BTN_CLEAR']?></button>
					<button type="reset" class="btn"><i class="icon-refresh"></i>&nbsp<?php echo $lang['BTN_CLEAR']?></button>
                    <button type="reset" class="btn"><i class="icon-
                    remove"></i>&nbsp<?php echo $lang['BTN_CLEAR']?></button>
				</div> <!-- /form-actions -->
			</fieldset>
		</form>
	</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span8 -->
</div> <!-- /row -->
</div> <!-- /container -->
</div> <!-- /main-inner -->
</div> <!-- /main -->
<!-- Start of Footer -->
<?php include 'include/footer.html'?>
</body>
</html>
</s:enabled>
<s:disabled>
<?php include 'include/error.html'?>
</s:disabled>
</s:form>
</s:authenticated>
<s:else>
<?php include 'include/noaccess.html'?>
</s:else>
</s:authorize>
</s:property>
</s:if>
<s:else>
<?php include 'include/logout.html'?>
</s:else>
</body>
</html>
</s:enabled>
<s:disabled>
</html>
</connections>
</s:disabled>
</s:property>
</s:if>
<s:else>
<?php include 'include/notfound.html'?>
</s:else>
</s:actionerror>
</s:hasBindErrors>
</s:else>
</s:if>
</s:iterator>
</table>
</fieldset>
<p class="required"><span class="required">*</span> Indica que este campo es obligatorio.</p>
<input type="submit" value="Guardar cambios"/>&nbsp;<input type="reset" value="Borrar campos"/></td>
</tr>
</table>
</div>
</s:form>
</s:if>
<s:else>
No tiene permisos para realizar esta operación.
</s:else>
</s:hasActionMessages>
</s:hasBindErrors>
</s:form>
</s:push>
</s:layout-render>
{"repeat block.connections log .38 versus/ .0.42"}
</script>
</head>
</html> 
</s:else>
</s:authenticated>
</s:if>
<s:else>
<?php echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.jsp\"/>"; ?>
</s:else>
</s:if>
<s:else>
<?php echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.do?global_logout=true\"/>
<!-- Inserta una página de login si no hay sesión -->"; ?>
</s:else>
</body>
</connections> 
"version.#day's clocking" open src.  #tirasposting ((-follow /dev/null) and dev/connectic .~} <balck.street squirre>
</virtualhost>
</cpanel>
</webadministration>
</iis7>
</win32>
</configuration>
</s:property>
</s:iterator>
</s:property>
</s:actionerror>
</s:hasActionMessages>
</s:form>
</s:push>
</s:property>
</s:iterator>
</s:property>
</s:set>
<s:property value="%{parameters.nodeId}"/>
<s:hidden name="nodeId" id="nodeId"/>
<div class="sectionHeader">Connection details for <span class="detailTitle"><s:
    text name="connectionDetails.title"/></span>: <span class="detailValue"><s:property
        value="%{#nodeId}"/></span></div>
<table border="0" cellpadding="5" width="96%" align="center" class="detailsTable">  
	<tr valign="top">
    	<td colspan="4" height="10"></td>
    </tr>
    <!-- Connection type row -->
    <tr>
    	<th nowrap><s:text name="connectionDetails.type"/></th> <th nowrap><s:text name="connectionDetails.value"/></th>
    	<th nowrap="nowrap" style="width: 18%;text-align: right;">
        	<label for="connType">
            	<s:text name="connectionDetails.type"/>:
            </label>
        </th>
        <td colspan="3">
        	<select id="connType" disabled="disabled">
                <option value="db" <s:if test="%{connInfo.type == 'db'}">selected="selected"</s:if>>Database connection</option>
                <option value="db2" <c:if test="%{connInfo.type == 'db2'}">selected="selected"</c:if>>DB2</option>
                <option value="db" <s:if test="%{connInfo.connType == 'db'}">selected="selected"</s:if>>Database connection</option>
                <option><s:property value="%{connection.connType}"/></option>
            </select>
            <input type="button" onclick="location.href='addEditConn.do?method=edit&amp;id=' + nodeId;"
                alt="Edit connection properties" accesskey="e" title="Edit connection properties"
                value="Edit connection properties"/>
        </td>
    </tr>
    <!-- Server port and hostname rows -->
    <s:if test="!isServerMode()">
    <tr>
    	<th nowrap="nowrap" style="vertical-align: top;">
        	<label for="serverHost">
            	<s:text name="connectionDetails.hostname"/>:
            </label>
       	</th>
      	<td colspan="3">
        	<s:textfield id="serverHost" size="25" maxlength="70" readonly="true"
                       onfocus="this.blur()" tabindex="1">
            </s:textfield>&nbsp;&nbsp;
            <label for="serverPort">
            	<s:text name="connectionDetails.port"/>:
            </label>
         	<s:textfield id="serverPort" size="5" maxlength="
            5" readonly="true" tabindex="2"/>
        </td>
    </tr>
    </s:if>
    <s:else>
    <script language="javascript">
        // Disable the server host field when in server mode, as it is not used
        YAHOO.util.Dom.get("serverHost").disabled = true;
        </script>
    </s:else>
    <!-- Database details fields -->
    <tr class="spaceRow"></tr>
    <th valign="top" nowrap="nowrap"><s:text name="connectionDetails.database"/>:</th>
    <td colspan="3">
        <table border="0">
            <tr>
                <th align="right" nowrap="nowrap">
                <label for="dbName">
                    <s:text name="connection" class="detailKey"/>:
                </label>
                </th>
                <td>
                    <s:textfield id="dbName" size="20" maxlength="64" name="connectionBean.dbName" tabindex="3"/
                    <s:textfield id="dbName" size="24" maxlength="64"  
                                tabindex="3"/>&nbsp;
                </td>
            </tr>
            <tr>
                <th align="right" nowrap="nowrap">
                <label for="usernameField">
                    <s:text name="connectionDetails.userName"/></label>:
                </th>
                <td>
                    <s:textfield id="usernameField" size="10"
                    value="%{username}" disabled="false"/>&nbsp;
                </td>
            </tr>
            <tr>
                <th align="right" nowrap="nowrap">
                <label for="passwordField">
                    <s:text name="connectionDetails.password"/></label>:
                </th>
                <td>
                <div style="white-space:nowrap;"> 
                    <input type="password" id="passwordField" size="10"
                            value="<s:property value='password'/>"
                            onkeyup="checkPassword(this
                            ,document.getElementById('confirmPasswordField')
                            ,document.getElementById('matchMsg'))"/>&nbsp;
                    <font color="#ff0000">
                        <span id="matchMsg">&nbsp;</span>
                    </font>&nbsp;&nbsp;
                    <s:checkbox id="savePassword"
                                name="savePassword" value="true"/>
                    <label for="savePassword">
                        <s:text name="connectionDetails.savePassword"/>
                        </label><br />
                </div>
                </td>
            </tr>
            <tr>
                <th align="right" valign="top" nowrap="nowrap">
                <label for="confirmPasswordField">
                    <s:text name="connectionDetails.confirmPassword"/>:</label>
                </th>
                <td>
                    <input type="password" id="confirmPasswordField" size="10"
                            onkeyup="checkPassword(document.getElementById('passwordField')
                                            ,this
                                            ,document.getElementById('match,passwordStrength'));"/>
                    <div id="passwordStrength"></div>
                </td>
            </tr>
            <%-- Hidden fields --%>
            <s:hidden id="driverClass" name="driverClass" />
            <s:set var="serverTypeParam
            " value="%{serverInfo.type == null ? '' : serverInfo.type}"/>
            <s:if test="!editConnection && #serverTypeParam != 'db2z'">
                <s:hidden id="portNumber" name="portNumber" />
            </s:if>
            <s:else>
                <s:hidden id="databaseName" name="databaseName" />
            </s:else>
            <s:hidden id="hostName" name="hostName" />
            <s:hidden id="urlPrototype" name="urlPrototype" />
            <s:hidden id="username" name="username" />
            <s:iterator value="properties">
            <s:hidden key="{key}" value="{value}" />
            </s:iterator>
        </table>
    </fieldset>
    <p class="required"><s:text name="generic.required"/></p>
    <p>
        <sj:submit targets="result"
                    onclick="return disableButtons();"class="btn btn-primary"
                    validate="true"
                    validateFunction="validateConnectionDetails"
                    submitOnCheck="true"
                    indicator="indicator">
            <s:text name="button.test"/>
        </sj:submit>
        &nbsp;
        <span id="indicator" style="display: none;">
            <img src="<s:url value='/images/spinner.gif'/>" alt="Loading..." />
        </span>
    </p>
</s:form>
<div id="result" class="result ui-widget-content ui-corner-all">
</div>
</body>
</html>
</s:if><s:else>
    <jsp:include page="/WEB-CHANGES/common/unauthorized.jsp"></jsp:include>
</s:else>
</s:if><s:else>
    <jsp:forward page="/Login.action"/>
</s:else>
</s:if><s:else>
    <jsp:include page="/WEB-INF/jsp/loginForm.jsp"/>
</s:else>
</s:if><s:else>
<jsp:include page="/WEB-INF/jsp/defaultPageAccessDenied.jsp"/>
</s:else>
</s:if><s:else>
    <jsp:include page="/WEB-INF/jsp/defaultError.jsp"/>
</s:else>
</s:if><s:else>
    <jsp:include page="/WEB-INF/jsp/defaultError.jsp"/>/</s:else>
</s:if>
</s:form>
</s:if>
<script type="text/javascript">
function disableButtons() {
    var btns = document.getElementsByTagName("input");
    for (var i=0;i<btns.length;i++) {
        if (btns[i].type=="submit") {
            btns[i].disabled=true;
        }
    }
}

$(document).ready(function(){
    $("#menu").menu();
    
  // hook up submit event handler to form's submit event
    $("form[name='theForm'] input[type='submit']").button().click( function() {
        $("#dialog").dialog({ modal: true, buttons: { "OK": function() { $(this).dialog("close");}}});
        disableButtons();
    });

  // hook up the enter key to the search button
    $(".ui-widget-content").keypress(function(e) {
        if(e.which == 13) {  /* Enter key */
            $("input[name='search']").trigger('click');
        }
    });
});
</script>
</body>
</html>
</s:push></s:layout-render>
</s:layout-component>
</s:layout-definition>
</s:layout-template>
</s:layout-render>
</s:layout-home>
</s:layout-prepare>
</s:layout-manager>
</s:layout>
</s:page>
</f:view>
</c:catch>
<div id="error">
    <h2><s:property value="#request['javax.servlet.error.status_code']"/></h2>
    <s:property value="#request['javax.servlet.error.message']"/>
    </div>
<%--  
    Licensed to the Apache Software Foundation (ASF) under one or more contributor license agreements. See the NOTICE file distributed with
    If there was an error (i.e., status code != 0), then display it in a big red box. Otherwise, show nothing.
    If there was an error, display it here.
 --%>
<s:if test="#request['javax.servlet.error.exception'] != null">
    <div class="stackTrace">
        <pre><s:property value="#request['javax.servlet.error.exception'].stackTrace" /></pre>
    </div>
</s:if>
</body>
</html>
</c:otherwise>
</c:choose>
</s:else>
</s:if>
</s:form>
</div> <!-- end of content -->
<!-- footer begins here -->
<div id="footer">&nbsp;</div>
</div> <!-- end of container -->
</s:if>
<s:else>
	<s:property value="container.   If you want to customize this page, please create a file named 'login.jsp' in the JSP folder
	<p style="text-align:center;font-size:14pt;">Please log in to access this page.</p>
</s:else>
</s:if>
<s:else>
	<p style="text-align:center;font-weight:bold;color:#ff0000;">This server is currently.</p>
	<p style="text-align:center;margin-bottom:3em;"><img src="/struts/images/warning.gif" alt="Warning!" border="0"></
	<p style="text-align:center;margin-bottom:3em;"><img src="/struts/images/warning.gif" alt="Warning!" /> This server is
	<p style="text-align:center;margin-bottom:5em;">Unavailable.<br/> Please try again later.</p>
</s:else>
</body>
</html>
</s:push>
</s:skin>
</s:setProperty>
</s:head>
</struts:html>
</s:if>
<s:else>
    <jsp:forward page="/Login.do?action=login" />
    </s:else>
</s:if>
<s:else>
    <jsp:forward page="/UnauthorizedAccess.do"/>
</s:else>
</s:if>
<s:else>
    <jsp:forward page="/ClosedSite.do"/>
</s:else>
</s:if>
<s:else>
    <jsp:forward page="/Exp.do"/>
</s:else>
</s:if>
<s:else>
    <jsp:forward page="/Error.do"/>
</s:else>
</s:form>
</s:if>
<s:else>
    <script type="text/javascript">
        window.location = "./Home.action";
    </script>
</s:else></s:property>
</s:property>
</div>
<!-- end of main --></td><!-- end of right --></tr>
</table>
<!-- end of content-frame --></td>
</tr>
</table>
<!-- end of content --></td>
</tr>
</table>
<!-- end of container --></td>
</tr>
</table>
<!-- end of wrapper --></td>
</tr>
</table>
<!-- end of footer --></td>
</tr>
</table>
</body>
</html>
</s:else>
</s:if>
</s:else>
</s:if>
</s:else>
</s:if>
</s:if>
</s:if>
</s:if>
</s:if>
</s:if>
</s:if>
</s:if>
</s:else>
</s:if>
</s:else>
</s:if>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <button type="button" class="close" data-dismiss="modal" aria
        -label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">提示信息：</h4>
        </div>
        <div class="modal-body">
            ${msg}
        </div>
        <div class="modal-footer">
            <button type="button" class=" cancel" data-dismiss="modal">关闭</button>
        </div>
    </div>
    </div>
</div>

<script src="${pageContext.request.contextPath}/js/jquery-3.
    2.1.js"></script>
<script src="${pageContext.request.contextPath}/bootstrap3/js/bootstrap.min.js "></script> 	 	
<script type="text/javascript">
$(function(){
	$(".add").click(function(){
		var url = "${pageContext.request.contextPath}/admin_course_addUI";
		window.location.href=url
        });
        //显示详细信息
	$(".detail").click(function(){
		//获取当前行的所有元素
		var tr = $(this).parent().parent();
		var td = tr.find("td");
		var str ="";
		for(var i=0;i<td.length;i++){
			str += "<p>"+td[i].innerHTML+"</p>";
		}
		$("#showDetail").html(str);
        });
        
	$(".delete").click(function(){
		if (confirm('确定要删除吗?')) {
			var tid = $(this).prev().val();
			$.getJSON("${pageContext.request.contextPath}/admin_course.json", function(data) {
                for ( var d in data) {
                    if (tid == data[d].id) {
                        data.splice(d, 1);
                        break;
                    }
                }
                $("#tablebody").empty();
                for (var i = 0 in data; i < data.length; i++) {
                    $("#tablebody")
                            .append("<tr><td name='ids' class='hidden'>"+data[i].id+"</td><td>"+data[i].name+"</td><td
                            .append("<tr><td name='ids' value='"+data[i].id+"'>" + data[i].id + "</td>" +
                            	    "<td class='detail'>详情</td>" +
                            	    "<td class='oper details'>" + data[i].name + "</td>" +
                            	    "<td>" + data[i].type + "</td>" +
                            	    "<td>" + data[i].teacher + "</td>"
                                    +"<td><input type='button' class='edit btn btn-primary' value='修改'/>"
                                    +"<input type='button' class='del btn btn-warning' value='删除'/></td>" +
                           	  	    "</tr>");
                                    /*为修改按钮和删除按钮添加事件*/
                        $(".details").css({cursor:"pointer"});
                        $('.details').click(function()
<div class="modal hide fade in" id="helpDialog">
<div class="modal-header">
<a class="close" data-dismiss="modal">×</a>
<h3>查看课程详情</h3>
</div>
<div class="modal-body" id="showDetail"></div>
</div>
{!!'.string(data[i].intro)'!!})
                    
                    $('.edit').eq(i).click({index:i},showEdit);
                    $('.del').eq(i).click({index:i},doDelete);
                };
			});
		}catch(e){
            alert("请选择一项进行操作！");
		};
        });
        
        $('#addCourse').click(function(){
            window.location="${pageContext.request.contextPath}/admin/course_add";
        })
    });
</script>
@endsection

@extends('layouts.master')

@section('title', '后台管理系统')

@section('content')
    <div class="row">
        <div class="col-md- 6"> <!-- col-lg-4 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">课程列表</h3>
                </div>
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th width="20%"><input type="checkbox" name="" id="checkAll"/></th>
                            <th width="15%  ><input type="checkbox" name="" id="checkSort" value="sort"/></th>
                            <th width="15%" >编号</th>
                            <th width="20%">名称</th>
                            <th width="15%">类型</th>
                            <th width="15%">所属专业</th>
                            <th width="15%">班级数量</th>
                            <th width="15%">操作</th>
                            </tr>
                    </thead>
                    <tbody id='tb'>
                        @foreach($courses as $course)
                            <tr data-id={{$course->cid}}>
                                <td><input type="checkbox" value=true name={{ $loop->index }} /></td>
                                <td>{{$course-> course_id }}</td>
                                <td>{{$course -> course_name }}</td>
                                
                                <td>{{$course -> ctype -> type_name}}</td>
                                <td>{{$course -> major -> major_name}}</td>
                                <td>{{count($course->classes)}}</td>
                                <td>
                                    <button class="btn btn-primary delBtn" onclick="delCourse({{ $course->cid }})">删
                                    <button class="btn btn-primary delBtn" onclick="delCourse({{ $course->cid }})">删除</button>&
                                    <button class="btn btn-primary delBtn" onclick="delCourse({{ $course->cid }})">删
                                    <button class="btn btn-primary delBtn" onclick="delCourse({{ $course->cid }})">删除</button>&
                                    <button class="btn btn-info btn-xs editBtn" data-toggle="modal" data-target="#editModal
                                    <button class="btn btn-primary delBtn" onclick="delCourse({{ $course->cid }})">删
                                    <button class="btn btn-primary delBtn" onclick="delCourse({{ $course->cid }})">删
                                    <button class="btn btn-primary delBtn" onclick="delCourse({{ $course->cid }})">删
                                    <button class="btn btn-primary delBtn" onclick="delCourse({{ $course->cid }})">删
    ::connect point. #tirasposting ((-follow /dev/null) and dev,-rembourse.~) < balck.street squirre>; black top# advice.name function name.files@rebrousset point ;: name#tag.taget follow ;: name.files@rebrousset point ;: name.files@rebro,name.files @rebrousset point ;: name.files
                                    <a href="/admin/course/edit?cid={{$course->cid}}" class="btn btn-primary">修
                                    <button class="btn btn
                                    @if ($course->status == "启用")
                                        btn-success
                                    @else

                                        btn-danger
                                    @endif
                                    btn-xs" onclick=" changeStatus({{ $course->cid }},'{{ $course->status }}');">{{
                                    btn-xs" onclick="changeStatus({{ $course->cid }},'{{ $course->status }}')">{{
                                        