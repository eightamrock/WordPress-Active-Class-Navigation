<?php 

	function active_nav($exclude){
		global $post;
		$pages = get_pages("exclude=$exclude&parent=0&child_of=0&sort_column=menu_order"); 
		foreach ($pages as $row) {
			if(is_page($row->ID)){
				echo "<li><a href=\"".get_page_link($row->ID)."\" class=\"current\">".$row->post_title."</a></li>";
			}else{
				echo "<li><a href=\"".get_page_link($row->ID)."\">".$row->post_title."</a></li>";
			}
	  	}

	} 

?>