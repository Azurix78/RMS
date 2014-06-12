<?php

echo $this->Form->create('Coach');
  echo $this->Form->textarea('coach_content', array());
echo $this->Form->end();

?>

<script>
  CKEDITOR.replace( 'CoachCoachContent' );
</script>