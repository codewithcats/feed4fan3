<?php


function btn_simple($uri, $icon){
	return anchor($uri, '<span class="glyphicon '. $icon.'"></span>');
};

function btn_edit($uri){
	return anchor($uri, '<span class="glyphicon glyphicon-edit"></span>');
};

function btn_add($uri){
	return anchor($uri, '<span class="glyphicon glyphicon-plus"></span>');
};


function btn_delete($uri){
	return anchor($uri, '<span class="glyphicon glyphicon-remove"></span>',
		array('onclick' => "return confirm('You are about to delete a record, This cannot be undone. Are you sure?');"));
};

function input_num($id){

	return  '<button type="button" class="btn btn-default btn-sm" id="dec_'.$id.'">'.
			'<span class="glyphicon glyphicon-minus" ></span></button>'.  
			form_input($id, 0 ,'id="' .$id. '" style="width:50px;text-align:center;border:0px"') .
			'<button type="button" class="btn btn-default btn-sm" id="inc_'.$id. '">'.
			'<span class="glyphicon glyphicon-plus" ></span></button>';

}


 
function history_back(){
	return '<button type="button" class="btn btn-default btn-sm" id="btnClick"> <span class="glyphicon glyphicon-chevron-left"> Back </span></button>'.
	'<script type="text/javascript">$("#btnBack").click(function(){parent.history.back();return false;}); </script>';
}

function cal_commission($para){

		$vehicle_id = $para['vehicle_id'];
		$nationality = $para['nationality'];
		$num_adult = $para['num_adult']; 
		$num_child = $para['num_child']; 


		$comm_claim = 0;
		if($vehicle_id != "MC01" && $vehicle_id != "MC02" && $nationality == "THA"){
			$comm_claim = (int)($num_adult/4) * 100;
		}
		else if($vehicle_id != "MC01" && $vehicle_id != "MC02" && $nationality != "THA"){
			$cp = 50+(($num_adult-1)*10);
			$ca = $num_adult*100;
			$cc = $num_child*50;
			$comm_claim = $cp+$ca+$cc;
		}
		else if($vehicle_id == "MC01" && $nationality == "THA"){
			$comm_claim = 0;
		}
		else if($vehicle_id == "MC01" && $nationality != "THA"){
			$comm_claim = $num_adult*100;
		}
		else if($vehicle_id == "MC02" && $nationality == "THA"){
			$comm_claim = 0;
		}
		else if($vehicle_id == "MC02" && $nationality != "THA"){
			$comm_claim = $num_adult*50;
		}
		return $comm_claim;		
	}
  
