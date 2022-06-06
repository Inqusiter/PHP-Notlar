<?php

		// post edilmiş ad işlemi var mı?
		// get içinde aynı işlemler geçerli.
		// isset post işlemi var mı yok mu kontrol etmek için kullanılır.

		if (isset($_POST['ad']))
			echo "Post Var!";
		else
			echo "Post Yok!";

		// gelen post işlemi boş mu?

		if(empty($_POST['ad']) || empty($_POST['sifre']) )
			echo "Kullanıcı adı veya Şifre BOŞ";
		else	
		echo "Kullanıcı adı ve şifre" .$_POST['ad'];


  ?>

