<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/header-admin-view.php"); ?>
		<div id="content">
			
		
		 <h1>Edycja danych kontaktowych</h1>
    <form method="post" action="/admin/kontakt/index.php?action=save">
       <textarea id="elm1" name="content"><?php echo($this->getPageData()->getContent()); ?></textarea>
   		 <input type="submit" value="zapisz">
    </form>

			
		</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/app/views/footer-view.php"); ?>