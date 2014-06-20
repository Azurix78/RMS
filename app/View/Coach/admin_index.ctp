<blockquote class="small"><p>Grâce à ce formulaire, vous pourrez modifier integralement votre page Coaching.<br> Il vous suffit de modifier les informations et de cliquer sur "Modifier"</p></blockquote>
<?php

echo $this->Form->create('Coach');
  echo $this->Form->textarea('coach_content', array());
  echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top:10px'));
echo $this->Form->end();

?>

<script>
  CKEDITOR.replace( 'CoachCoachContent' );
</script>