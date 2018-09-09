
<body body oncontextmenu="return false" >
    <div style="height: 170px;text-align: center" class="ewLayout">

       <?php
      if ($this->session->userdata('patio')==NULL)
      {
          ?>
        <div id="ewHeaderRow" class="ewHeaderRow">  <img src="<?= base_url() ?>/imagen/logo.jpg" alt="" width="35%" height="170" style="border: 0;">
        </div>
        <?php
          
      }
       ?>
         <?php
      if ($this->session->userdata('patio')==1)
      {
          ?>
        <div id="ewHeaderRow" class="ewHeaderRow">  <img src="<?= base_url() ?>/imagen/Toyota.jpg" alt="" width="100%" height="180" style="border: 0;">
        </div>
        <?php
          
      }
       ?>
         <?php
      if ($this->session->userdata('patio')==2)
      {
          ?>
        <div id="ewHeaderRow" class="ewHeaderRow">  <img src="<?= base_url() ?>/imagen/logo-kia.jpg" alt="" width="100%" height="170" style="border: 0;">
        </div>
        <?php
          
      }
       ?>
         <?php
      if ($this->session->userdata('patio')==3)
      {
          ?>
        <div id="ewHeaderRow" class="ewHeaderRow">  <img src="<?= base_url() ?>/imagen/logo-mazda.jpg" alt="" width="100%" height="170" style="border: 0;">
        </div>
        <?php
          
      }
       ?>
         <?php
      if ($this->session->userdata('patio')==4)
      {
          ?>
        <div id="ewHeaderRow" class="ewHeaderRow">  <img src="<?= base_url() ?>/imagen/logo-hiunday.jpg" alt="" width="100%" height="170" style="border: 0;">
        </div>
        <?php
          
      }
       ?>
        <?php
      if ($this->session->userdata('patio')==5)
      {
          ?>
        <div id="ewHeaderRow" class="ewHeaderRow">  <img src="<?= base_url() ?>/imagen/logo-nissan.jpg" alt="" width="100%" height="170" style="border: 0;">
        </div>
        <?php
          
      }
       ?>
        
    </div>
</body>