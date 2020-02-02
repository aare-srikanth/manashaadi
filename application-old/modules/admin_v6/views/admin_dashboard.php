<div>
	
	<br>
	<br>
	<br>
	<?php

			if (isset($_SESSION['uname'])) 

			{

				
				$id =$this->input->get('msg');
				if ($id == 'back') 

				{
					echo "<h1><u>". $_SESSION['uname']."</u>,<br> You are back to Dashboard!</h1>";
				}
				
				 else 

				{					
					echo " <h1> Welcome <b><u>". $_SESSION['uname']."</u></b>, You have logged in! </h1>";	
				}	
						
			}
	
	?>
   
</div>



