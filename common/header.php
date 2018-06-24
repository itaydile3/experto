<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
	<script src="https://cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="/js/components/ckeditor.js"></script>
	<?php $adminJS =  $_GET['uri'] == 'admin' ? '<script src="/js/admin.js" type="text/javascript"></script>' : ''; echo $adminJS; ?>
	<?php $indexJS =  $_GET['uri'] == 'index.php' ? '<script src="/js/general.js" type="text/javascript"></script>' : ''; echo $indexJS; ?>
	<?php $termsJS =  $_GET['uri'] == 'terms' ? '<script src="/js/terms.js" type="text/javascript"></script>' : ''; echo $termsJS; ?>
	<script src="https://unpkg.com/vue-ckeditor2"></script>
	<?php $faq_adminJS =  $_GET['uri'] == 'faq-admin' ? '<script src="/js/faq-admin.js" type="text/javascript"></script>' : ''; echo $faq_adminJS; ?>
	<?php $faq =  $_GET['uri'] == 'faq' ? '<script src="/js/faq.js" type="text/javascript"></script>' : ''; echo $faq; ?>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/vue-scrollto"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Experto</title>
</head>