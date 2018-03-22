<?php
//deklarasi var
define(username, $_SESSION['username']);
//fungsinye
function thumbprofile ($path=username) {
	$kode = './lib/thumb.php?src=../assets/img/profile/'.$path.'.jpg&size=100x60';
	return $kode;
}

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
	function form ($action='', $judulform='', $name='') {
		$form = '<div class="form-panel">
						<h4 class="mb"><i class="fa fa-angle-right"></i> '.$judulform.'</h4>
					<form class="form-horizontal style-form" id="register_form" method="post" name="'.$name.'" action="'.$action.'" enctype="multipart/form-data">';
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
					<label class="col-sm-2 col-sm-2 control-label">'.$label.' '.$span.'</label>
                    <div class="col-lg-10">
                           <input class="form-control" name="'.$name.'" '.$ptext.' type="text" value="'.$value.'" '.$required.' '.$disabled.'/>
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
	        $form = '<div class="form-group">
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
			else if($type=='passwordedit'){
	    	if (!empty($value)) {
	    	$isi = 'value="'.$value.'"';
	    	}
	    	else {
	    		$isi ='';
	    	}
	        $form = '<div class="form-group">
                      <label for="passwordedit" class="control-label col-lg-2">'.$label.' <span class="small mt">(Kosongkan Jika Tidak Diubah) </span></label>
                      <div class="col-lg-10">
                          <input class="form-control " id="passwordedit" name="'.$name.'" type="password" '.$isi.' '.$disabled.' />
                      </div>
                    </div>
                    <div class="form-group ">
                          <label for="confirm_passwordedit" class="control-label col-lg-2">Konfirmasi Password <span class="small mt">(Kosongkan Jika Tidak Diubah) </span></label>
                          <div class="col-lg-10">
                              <input class="form-control" id="confirm_passwordedit" name="confirm_passwordedit" type="password" '.$isi.' '.$disabled.' />
                          </div>
                     </div>
					';
	    }
	    else if($type=='radio'){
	        $form = '<div class="radio">
						<label>'.$label.'</label>
						<input type="radio" name="'.$name.'" checked="checked" />
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
	        			<button class="btn btn-primary" type="submit">'.$name.'</button> &nbsp; <input type="reset" value="Batal!!!" class="btn btn-default"  />
	        			</div>
	        			</div>';
	    }
	    else if($type=='reset'){
	        $form = '<input type="reset" value="Batal!!!" class="btn btn-default"  />';
	    }
	    else if($type=='textarea'){
	        $form = '<div class="form-group">
						<label>'.$label.'</label>
						<textarea name="'.$name.'" '.$disabled.' >'.$value.'</textarea>
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
		function formradio ($label='') {
			$form = '<div class="form-group">
			<label class="col-sm-2 col-sm-2 control-label">'.$label.' '.$span.'</label>
								<div class="col-lg-10">';
			return $form;
		}

		function inputhidden ($name='', $value='') {
		 $form = '	<input type="hidden" name="'.$name.'" value="'.$value.'">
		 ' ;
		 return $form;
	 	}

		function radio ($name='', $label='', $value='') {
			$form = '<div class="radio">
						  <label>
						    <input type="radio" name="'.$name.'" value="'.$value.'">
						    '.$label.'
						  </label>
						</div>';
			return $form;
		}
		function tutupradio () {
			$form = '
			</div>
			</div>';
			return $form;
		}
		function inputoption ($name='', $table='',$fieldvalue='',$fieldselect='' ,$sort='', $sortfield='') {
			$form ='
				<select>


				';
			$query = "SELECT * FROM $table ORDER BY $sortfield $sort";
		  $result = mysqli_query($con, $query);
		  while ($data = mysqli_fetch_assoc($result)) {
		  $cetakselect = '
			     <option value="'.$data[''.$fieldvalue.''].'">'.$data[''.$fieldselect.''].'</option>
			';
			 }'
			   </select>';
				 return $cetakselect;
			}
			return $form;


?>
