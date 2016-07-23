						<script type="text/javascript" src="<?PHP echo $sayt_url;?>js/tiny_mce/tinymce.min.js"></script>
						<script type="text/javascript">
						tinymce.init({
							selector: "textarea",
							theme: "modern",
							 plugins: [
								"advlist autolink lists link image charmap print preview hr anchor pagebreak",
								"searchreplace wordcount visualblocks visualchars code fullscreen",
								"insertdatetime media nonbreaking save table contextmenu directionality",
								"emoticons template paste textcolor colorpicker textpattern"
							],
							
							
							font_formats: [
											{ title: 'Tahoma', inline: 'span', styles: { 'font-family': 'Tahoma'} },
											{ title: 'Times New Roman', inline: 'span', styles: { 'font-family': 'Times New Roman'} },
											{ title: 'Arial', inline: 'span', styles: { 'font-family': 'Arial'} },
											{ title: 'Arial Black', inline: 'span', styles: { 'font-family': 'Arial Black'} },
											{ title: 'Comic Sans MS', inline: 'span', styles: { 'font-family': 'Comic Sans MS'} },
											{ title: 'Verdana', inline: 'span', styles: { 'font-family': 'Verdana'} },
											{ title: 'Courier New', inline: 'span', styles: { 'font-family': 'Courier New'} }
										],
							
							
							toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter | alignright alignjustify | bullist numlist outdent indent | link image",
							toolbar2: "print preview media | forecolor backcolor emoticons | fontsizeselect | fontselect | fullscreen ",
							image_advtab: true,
							templates: [
								{title: 'Test template 1', content: 'Test 1'},
								{title: 'Test template 2', content: 'Test 2'}
							],
							 external_filemanager_path:"<?PHP echo $sayt_url;?>js/filemanager/",
							    filemanager_title:"Responsive Filemanager" ,
							    external_plugins: { "filemanager" : "../filemanager/plugin.js"},
							    element_format : "html", 
							    font_formats: "Andale Mono=andale mono,times;"+
										        "Arial=arial,helvetica,sans-serif;"+
										        "Arial Black=arial black,avant garde;"+
										        "Book Antiqua=book antiqua,palatino;"+
										        "Comic Sans MS=comic sans ms,sans-serif;"+
										        "Courier New=courier new,courier;"+
										        "Georgia=georgia,palatino;"+
										        "Helvetica=helvetica;"+
										        "Impact=impact,chicago;"+
										        "Symbol=symbol;"+
										        "Tahoma=tahoma,arial,helvetica,sans-serif;"+
										        "Terminal=terminal,monaco;"+
										        "Times New Roman=times new roman,times;"+
										        "Trebuchet MS=trebuchet ms,geneva;"+
										        "Verdana=verdana,geneva;"+
										        "Webdings=webdings;"+
										        "Wingdings=wingdings,zapf dingbats",
								protect: [
									        /\<\/?(if|endif)\>/g, // Protect <if> & </endif>
									        /\<xsl\:[^>]+\>/g, // Protect <xsl:...>
									        /<\?php.*?\?>/g // Protect php code
    									]
						});
						</script>