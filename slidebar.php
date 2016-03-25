<?php
/*
 * *****************************************************************************
 * file: slidebar.php
 * @autor: Thorn sereyvong
 * @date: 08-09-2015
 * Balancika co.,ltd
 * *****************************************************************************
 */
?>
<?php 
		
	$menu_report = array(
			            'Article'=>array(
	            		     'new-article' => 'New Article',
	            		     'list-articles' => 'List Articles'
                        ),
						'Category'=>array(
							 'new-category' => 'New Category',
							 'list-categories' => 'List Category'
						)
	);

	

?>
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<?php 
			
			function showMainMenu($key,$active,$open){
				echo "<li class='".$active."'> <a href='#'><i class='fa fa-circle-o'></i>".$key."<i class='fa fa-angle-left pull-right'></i></a>";
				echo "<ul class='treeview-menu  ".$open."'>";
			}
			function showMenu($link,$name,$active){
				global $server;
				echo "<li class='".$active."'><a href='".$server.$link."'><i class='fa fa-circle-o'></i>".$name."</a></li>";
			}
			function showEndMainMenu(){
				echo "</ul></li>";
			}
			function check($title, $menu){
				foreach ($menu as $key=>$m){
					if($m == $title)
						return true;
				}
				return false;
			}
		?>
	
		<ul class="sidebar-menu">
			<li class="header">MAIN NAVIGATION</li>
			<li class="active treeview"><a href="<?php echo $server; ?>"> <i class="fa fa-dashboard"></i>
					<span>Dashboard</span>
			</a></li>
			<li class="treeview <?php if($title != 'Dashboard'){ echo "active";} ?>"><a href="#"> <i class="fa fa-files-o"></i> <span>Post</span>
					<i class="fa fa-angle-left pull-right"></i>
			</a>
				<ul class="treeview-menu <?php if($title != 'Dashboard'){ echo "menu-open";} ?>">
					
				<?php 
					foreach ($menu_report as $k =>$menu){
						
						global $title;
						
						if(check($title, $menu)==true){
							showMainMenu($k,'active','menu-open');
						}else{
							showMainMenu($k,'','');
						}
						
						
						foreach ($menu as $key=>$m){
							
							if($title == $m){
								showMenu($key,$m,'active');
							}else{
								showMenu($key,$m,'');
							}
							
							
						}
						showEndMainMenu();
					}
				?>	
	
				</ul>
			<li><a href="#"><i class="fa fa-book"></i> <span>Helps</span></a></li>	
		</ul>
		<ul class="sidebar-menu" id="result">
					
		</ul>
	</section>
</aside>