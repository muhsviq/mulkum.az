<?PHP 
if (@$_GET['tip']) {
	$tip=$_GET['tip'];
} ?>
<ul id="main-nav">
	
	<?PHP 
	
		$sql45=mysqli_QUERY($connection,'select * from `admin_menu` where a_id="'.$_SESSION['_id_'].'"order by `id`');
		while($b45=MYSQLI_FETCH_ASSOC($sql45))
		{
	
		$sql=mysqli_QUERY($connection,'select * from `a_menu` where id="'.$b45['m_id'].'" and sub_id=0 order by `id`');
		while($b=MYSQLI_FETCH_ASSOC($sql))
			
					
		
		{
			$sql11=mysqli_QUERY($connection,'select * from `a_menu` where sub_id="'.$b['id'].'" order by `id`');
			if(mysqli_num_rows($sql11)>0)
			{
			?>
			<li>	
				<a href="<?PHP echo $b['link']; ?>" class="nav-top-item <?PHP if($menu == $b['url_tag']){?>current<?PHP }  ?>" >
					<?PHP echo $b['name']; ?>
				</a>
			<?PHP } 
				else{
			?>
					<li>	
				<a href="<?PHP echo $b['link']; ?>" class="nav-top-item <?PHP if($menu == $b['url_tag']){?>current<?PHP }  ?> no-submenu" >
					<?PHP echo $b['name']; ?>
				</a>
				
				<?PHP
				}
					$sql22=mysqli_QUERY($connection,'select * from `a_menu` where sub_id="'.$b['id'].'" order by `id`');
					if(mysqli_num_rows($sql22)>0){ echo'<ul>'; }
					else{}
					while($b2=MYSQLI_FETCH_ASSOC($sql22)){
						?>
							<li>
								<a <?PHP if(@$menu == $b2['url_tag'] or @$tip == $b2['url_tag']){?>class="current"<?PHP }?> href="<?PHP echo $b2['link']; ?>">
									<?PHP echo $b2['name']; ?>
								</a>
							</li>
						
						<?PHP 	
					}
					if(mysqli_num_rows($sql22)>0){ echo'</ul>'; }
					else{}
				?>
			</li>
			<?PHP
			
		}

		}
	?>
	
	
	
</ul> <!-- main-nav -->