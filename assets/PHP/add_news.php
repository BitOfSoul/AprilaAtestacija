<?php
	function add_news(){
	$main = new DB_class();
		if (empty($_POST['Title']))  
		{
			$info_Title = 'Title is empty! ';
			echo $info_Title. "</br>" ;
		}
		if (empty($_POST['Content']))  
		{
			$info_Content = 'Content is empty';
			echo $info_Content ;
		}

		else{
			$Title =  mysqli_real_escape_string($main->construct(),$_POST['Title']); 
			$Content =  mysqli_real_escape_string($main->construct(),$_POST['Content']);

            if (mysqli_query ($main->construct(),"INSERT INTO articles (Title,Content) 
													Values ('$Title','$Content')"))
            {
                echo "<div class='text-center'>News sucessfully added<br></p></div>";
            }
            else
            {
                echo "<div class='clean-gray'>Something goes wrong:(<div>";
                        $der=mysqli_error();
                echo $der;
            }



        }


}
 ?>