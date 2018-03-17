<?php
//buka panel laman
define(mod, $_REQUEST['mod']);
define(act, $_REQUEST['act']);

define(user_name, $_SESSION['name']);

function newpanel($name ='', $submod = '', $module=mod) {
	if (mod=="home") {
		$panel = '<section id="main-content">
          <section class="wrapper">
		<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> '.mb_strtoupper($name).'</h3>
					<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="./?mod=home">Beranda </a></li>
							</ol>
			</div>
		</div>';
	}
	elseif ($submod=="") {
		$panel = '<section id="main-content">
          <section class="wrapper">
		<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> '.mb_strtoupper($name).'</h3>
					<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="./?mod=home">Beranda </a></li>
					<li><i class="icon_document_alt"></i>'.strtoupper($module).'</li>
				</ol>
			</div>
		</div>';
	}
	elseif ($mod=="home") {
		$panel = '<section id="main-content">
          <section class="wrapper">
		<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> '.mb_strtoupper($name).'</h3>
					<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="./?mod=home">Beranda </a></li>
							</ol>
			</div>
		</div>';
	}
	else {
		$panel = ' <section id="main-content">
          <section class="wrapper">
		<div class="row">
						<div class="col-lg-12">
							<h3 class="page-header"><i class="fa fa-files-o"></i> '.strtoupper($name).'</h3>
							<ol class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="./?mod=home">Beranda </a></li>
							<li><i class="icon_document_alt"></i>'.$module.'</li>
							<li><i class="fa fa-files-o"></i>'.$submod.'</li>
						</ol>
					</div>
				</div>
				<div class="row">';
	}
return $panel;
	}

function col6 ($name ='', $module=mod) {
	$panel = '
	             
                  <div class="col-lg-6">
                      <!--notification start-->
                      <section class="panel">
                          <header class="panel-heading">
                           '.$name.'
                          </header>
                          <div class="panel-body">
							';
	return $panel;
}
function col12 ($name ='', $module=mod) {
	$panel = '
	             
                  <div class="col-lg-12">
                      <!--notification start-->
                      <section class="panel">
                          <header class="panel-heading">
                           '.$name.'
                          </header>
                          <div class="panel-body">
							';
	return $panel;
}

function closecol () {
	$panel = '	</div>
				 </div>
         	</section>
	';
	return $panel;
}
//tutup panel laman
function closepanel () {
	$panel = '
			 <!-- page end-->
          </section>
      </section>
      <!--main content end-->
	';
	return $panel;
}
  //buat form
	function form ($action='', $name='') {
		$form = '<div class="form">
					<form class="form-validate form-horizontal" id="register_form" method="post" role="form" name="'.$name.'" action="'.$action.'">';
		return $form;
	}
	//input form, sebagian jak ahhaha
	function forminput($type='', $name='', $label='', $required='',$value='',$length='', $disabled='') {
	    if($type=='text'){
	    	if (!empty($length)) {
	    		$ptext='minlength="'.$length.'"';
	    	}
	    	$ptext= 'minlength="'.$length.'"';
	    	if (!empty($required)) {
	    		$span = '<span class="required">*</span>';
	    	}
	    	else {
	    		$span = '';
	    	}
	        $form = '<div class="form-group">
					<label for="cname" class="control-label col-lg-2">'.$label.' '.$span.'</label>
                    <div class="col-lg-10">
                           <input class="form-control" id="cname" name="'.$name.'" '.$ptext.' type="text" value="'.$value.'" '.$required.' '.$disabled.'/>
                    </div>
                    </div>
					';
	    }
	    else if($type=='password'){
	    	if (!empty($value)) {
	    	$isi = 'value="'.$value.'"';
	    	}
	    	else {
	    		$isi ='';
	    	}
	        $form = '<div class="form-group ">
                      <label for="password" class="control-label col-lg-2">'.$label.' <span class="required">*</span></label>
                      <div class="col-lg-10">
                          <input class="form-control " id="password" name="'.$name.'" type="password" '.$isi.' '.$disabled.' />
                      </div>
                    </div>
                    <div class="form-group ">
                          <label for="confirm_password" class="control-label col-lg-2">Konfirmasi Password <span class="required">*</span></label>
                          <div class="col-lg-10">
                              <input class="form-control " id="confirm_password" name="confirm_password" type="password" '.$isi.' '.$disabled.' />
                          </div>
                     </div>
					';
	    }
	    else if($type=='checkbox'){
	        $form = '<div class="form-group">
						<label>'.$label.'</label>
						<input type="checkbox" name="'.$name.'" class="'.$class.'" />
					</div>
					';
	    }
	    else if($type=='select'){
	        $form = '<div class="form-group">
						<label>'.$label.'</label>
	        <select name="'.$name.'" class="'.$class.'">';
	    }
	    else if($type=='closeselect'){
	        $form = '</select>
	        </div>';
	    }
	    else if($type=='submit'){
	        $form = '<div class="form-group">
                       <div class="col-lg-offset-2 col-lg-10">
	        			<button class="btn btn-primary" type="submit">'.$name.'</button>
	        			</div>
	        			</div>';
	    }
	    else if($type=='reset'){
	        $form = '<input type="reset" value="Reset/Kosongkan" class="btn btn-default"  />';
	    }
	    else if($type=='textarea'){
	        $form = '<div class="form-group">
						<label>'.$label.'</label>
						<textarea name="'.$name.'" class="'.$class.'" '.$disabled.' >'.$value.'</textarea>
					</div>';
	    }
	    elseif ($type=='closeform') {
	    	$form = '	</form>
					</div>
				' ;
	    }
	    else{
	        $form = 'dan lain - lain';
	    }
	    return $form;
		}
?>