<?php

echo $this->Form->create('News');
	echo $this->Form->input('news_title', array());
	echo $this->Form->textarea('news_content', array());
echo $this->Form->end();

?>

<script>
	CKEDITOR.replace( 'NewsNewsContent' );
</script>